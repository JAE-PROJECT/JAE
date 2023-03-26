<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RejoindreController extends Controller
{
    public function show(){
        $titre = "Rejoindre";
        return view('rejoindre', [
           'title' => $titre
        ]);
    }
}
