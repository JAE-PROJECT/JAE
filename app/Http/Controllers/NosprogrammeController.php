<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Event_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NosprogrammeController extends Controller
{
    public function show(){
        $titre = "Programmes";

        $programmes = Event::all();



        return view('nosprogramme', [
           'title' => $titre,
           'programmes'=> $programmes
        ]);

    }
    public function store(){
        if(Auth::check()){
            $user_id = Auth::id();
            $event_id = request()->input('event_id');
            $event_user = DB::table('event_user')->select('presence_confimée')->where('event_id',$event_id)->where('user_id',$user_id)->first();

            if ($event_user == NULL )  {
                $presence_confirme = 1;
            }/* elseif ($event_user->presence_confimée == 0) {
                 $presence_confirmee = Event_user::where('event_id', $event_id)
                ->where('user_id', $user_id)
                ->first();
                $presence_confirmee->presence_confimée++;
                dd($presence_confirmee);
                $presence_confirmee->save();
                return redirect()->back();
            } */else{
                return redirect()->back()->with('already_inscrip_program', 'Vous êtes déjà inscrit à ce programme');
            }
            /* dd($event_id); */

            DB::table('event_user')->insert([
                'event_id' => $event_id,
                'user_id' => $user_id,
                'presence_confimée' => $presence_confirme,
                'created_at' => Carbon::now(),
            ]);
            $event = Event::find($event_id);
            $event->nombre_place++;
            $event->save();

            return redirect()->back()->with('success_inscrip_program', 'Vous êtes bien inscrit au programme');
        }else {

            return redirect()->route('login')->with('failled_inscrip_program', 'Vous devez vous connectez avant de vous inscrire à un programme');

        }
    }
}
