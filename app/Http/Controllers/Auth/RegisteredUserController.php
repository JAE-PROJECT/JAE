<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Redirect;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
        'nom' => 'required|max:255|string|regex:/^[^\s]+$/',
        'prenom' => 'required|max:255|string|regex:/^[a-zA-Z\- ]+$/',
        'email' => 'required|email|max:255|unique:users',
        'contact1' => 'required|unique:users,contact|regex:/^\+[1-9]\d{1,14}$/',
        'contact2' => 'nullable|unique:users,contact_direct|regex:/^\+[1-9]\d{1,14}$/',
        'zone' => 'required',
        'date_naissance' => 'required|max:255',
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ], [
        'required' => 'Le champ :attribute est obligatoire.',
        'max' => 'Le champ :attribute ne doit pas dépasser :max caractères.',
        'email' => 'Le champ :attribute doit être une adresse email valide.',
        'unique' => 'La valeur du champ :attribute est déjà utilisé.',
        'contact1.regex' => 'Le champ :attribute doit être un numéro de téléphone valide au format international.',
        'contact2.regex' => 'Le champ :attribute doit être un numéro de téléphone valide au format international.',
        'prenom.regex' => 'Le champ :attribute ne doit contenir que des lettres.',
        'nom.regex' => 'Le champ :attribute ne doit contenir qu\'un seul nom.',
    ]);



    $user = User::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email' => $request->email,
        'date_de_naissance' => $request->date_naissance,
        'contact_direct' => $request->contact2,
        'contact' => $request->contact1,
        'zone_id' => $request->zone,
        'password' => Hash::make($request->password)
    ]);

    $lien_zones = DB::table('zone')->select('lien_wha')->where('id', $request->zone)->first();

        event(new Registered($user));

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME)
        ->with('lien_zones', $lien_zones->lien_wha);

}
}


