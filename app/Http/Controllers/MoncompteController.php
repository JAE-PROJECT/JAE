<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flasher\Prime\FlasherInterface;

class MonCompteController extends Controller
{
    public function index(){
        $user = auth()->user();
      //  $zone = Zone::orderBy('nom_zone')->get();
        return view('Pages.moncompte', compact('user'));
    }

    public function edit(Request $request, FlasherInterface $flasher){
        $user = User::find($request->users_id);
      //  dd($request->all());
        if($user->id != auth()->user()->id){
            abort(403);
        }
        //Mise à jour des infos
        DB::transaction(function () use ($request,$user, $flasher) {

            if($request->image_profile){
                //Sauvegarde du fichier
                $image_path = $request->file('image_profile')->storeAs('users', $request->file('image_profile')->getClientOriginalName());
            }
            else{
                 $image_path = null;
            }
            $user->update([
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'date_de_naissance'=>$request->date_naissance,
                'contact'=>$request->contact,
                'contact_direct'=>$request->contact_direct,
                'email'=>$request->email,
                'image_profile'=>$image_path
            ]);

            $flasher->addSuccess('Evennement crée avec succès!');

        });
        return redirect()->route('moncompte');
    }
}
