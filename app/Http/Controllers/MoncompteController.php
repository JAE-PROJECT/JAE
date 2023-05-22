<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class MonCompteController extends Controller
{
    public function index(){
        $user = auth()->user();
      //  $zone = Zone::orderBy('nom_zone')->get();
        return view('Pages.moncompte', compact('user'));
    }

    public function edit(Request $request, ){
        $user = User::find($request->users_id);
      //  dd($request->all());
        if($user->id != auth()->user()->id){
            abort(403);
        }
       /*  dd($request->validate([
            'nom' => 'required|max:255|string|regex:/^[^\s]+$/',
            'prenom' => 'required|max:255|string|regex:/^[a-zA-Z\- ]+$/',
            'email' => 'required|email|max:255|unique:users',
            'contact1' => 'required|unique:users,contact|regex:/^\+[1-9]\d{1,14}$/',
            'contact2' => 'nullable|unique:users,contact_direct|regex:/^\+[1-9]\d{1,14}$/',
            'zone' => 'required',
            'date_naissance' => 'required|max:255'
        ], [
            'required' => 'Le champ :attribute est obligatoire.',
            'max' => 'Le champ :attribute ne doit pas dépasser :max caractères.',
            'email' => 'Le champ :attribute doit être une adresse email valide.',
            'unique' => 'La valeur du champ :attribute est déjà utilisé.',
            'contact1.regex' => 'Le champ :attribute doit être un numéro de téléphone valide au format international.',
            'contact2.regex' => 'Le champ :attribute doit être un numéro de téléphone valide au format international.',
            'prenom.regex' => 'Le champ :attribute ne doit contenir que des lettres.',
            'nom.regex' => 'Le champ :attribute ne doit contenir qu\'un seul nom.',
        ])
        ); */
        //Mise à jour des infos
        DB::transaction(function () use ($request,$user) {

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



        });
        return redirect()->route('moncompte')->with('addSucces','Evennement crée avec succès!');
    }
}
