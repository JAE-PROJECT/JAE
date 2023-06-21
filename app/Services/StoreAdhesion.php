<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdhesionFormulaire;

class StoreAdhesion
{


    public function store(Request $adhesionFormulaire)
    {

        $user = User::create(
            [
                'nom' => $adhesionFormulaire->nom,
                'prenom' => $adhesionFormulaire->prenom,
                'date_de_naissance' => $adhesionFormulaire->date_de_naissance,
                'email' => $adhesionFormulaire->email,
                'contact' => $adhesionFormulaire->contact_phone,
                'contact_direct' => $adhesionFormulaire->contact_direct,
                'zone_id' => $adhesionFormulaire->zone,
                'password' => Hash::make('Jae2022@#'),
            ]
        );
        return $user;
    }
}
