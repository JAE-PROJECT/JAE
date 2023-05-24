<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdhesionFormulaire;
use App\Services\StoreAdhesion;
use App\Mail\WellcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Zone;
use App\Models\User;

class AdhesionController extends Controller
{
    public function store(Request $request, StoreAdhesion $storeAdhesion)
    {

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
        ]);

        //Je recherche si le user existe déjà
        $check = User::where('email', $request->email)->first();
        if ($check) {
            $check->update([
                'zone_id' => $request->zone
            ]);
            //envoi de la zone
            $zone = Zone::findOrFail($request->zone);
            return view('Pages.adhesionok', compact('zone'));
        } else {
            //Creation de l'adherent
            $user =  $storeAdhesion->store($request);
            //On lui donne le role de jae
            $user->assignRole('jae');
            //Creation de notification
            Mail::to($request->email)->send(new WellcomeMail());
            // event(new Registered($user));

            //envoi de la zone
            $zone = Zone::findOrFail($request->zone);
            return view('Pages.adhesionok', compact('zone'));
        }
    }

    /*   public function update(Request $request){

         $request->validate([

            'email1' => 'required',
            'zone_update'=>'required'
       ]);

       $user = User::where('email',$request->email1)->first();

       if($user){
           $user->update([
               'zone_id'=>$request->zone_update
               ]);
            //envoi de la zone
        $zone = Zone::findOrFail($request->zone_update);
        return view('Pages.adhesionok',compact('zone'));

       }
       return back();
    }
    */
}
