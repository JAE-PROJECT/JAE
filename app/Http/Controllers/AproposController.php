<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AproposController extends Controller
{
    public function show(){
        $titre = "A Propos";
        $statut_menu_ap = 'active';
        return view('Apropos', [
           'title' => $titre,
           'statut_menu_ap'=> $statut_menu_ap
        ]);
    }
}
