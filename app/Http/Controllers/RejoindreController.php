<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RejoindreController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    } 
    public function show(){
        $zones = DB::table('zone')->select('id','nom_zone')->get();
        $titre = "Rejoindre";
        /* dd( $zones ); */
        return view('rejoindre', [
           'title' => $titre,
           'zones' => $zones
        ]);
    }
    public function store(Request $request):RedirectResponse{
        
        $validated = $request->validate([
            'nom' => 'required|max:255|regex:/^[^\s]+$/',
            'prenom' => 'required|max:255|regex:/^[a-zA-Z\- ]+$/',
            'email' => 'required|email:rfc,dns|max:255|unique:users',
            'contact1' => 'required|unique:users,contact|regex:/^\+[1-9]\d{1,14}$/',
            'contact2' => 'nullable|unique:users,contact_direct|regex:/^\+[1-9]\d{1,14}$/',
            'zone' => 'required',
            'date_naissance' => 'required|date|max:255',
        ], [
            'required' => 'Le champ :attribute est obligatoire.',
            'max' => 'Le champ :attribute ne doit pas dépasser :max caractères.',
            'email' => 'Le champ :attribute doit être une adresse email valide.',
            'unique' => 'La valeur du champ :attribute doit être unique.',
            'contact1.regex' => 'Le champ :attribute doit être un numéro de téléphone valide au format international.',
            'contact2.regex' => 'Le champ :attribute doit être un numéro de téléphone valide au format international.',
            'prenom.regex' => 'Le champ :attribute ne doit contenir que des lettres.',
            'nom.regex' => 'Le champ :attribute ne doit contenir qu\'un seul nom.',
        ]);

    $form_rejoindre = New User;
        $form_rejoindre->nom = $request-> nom;
        $form_rejoindre->prenom = $request-> prenom;
        $form_rejoindre->email = $request-> email;
        $form_rejoindre->date_de_naissance = $request-> date_naissance;
        $form_rejoindre->contact_direct = $request-> contact2;
        $form_rejoindre->contact = $request-> contact1;
        $form_rejoindre->zone_id = $request-> zone;
         
        $form_rejoindre -> save();
    
        return redirect('/');
    }
}
