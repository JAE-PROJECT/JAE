<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActualiteController extends Controller
{
    public function show(){
        $titre = "Actulalité";
        $statut_menu_actu = 'active';
        $actualites = Actualite::all();
        return view('actualite', [
           'title' => $titre,
           'statut_menu_actu'=> $statut_menu_actu,
           'actualites' => $actualites
        ]);
    }

}
