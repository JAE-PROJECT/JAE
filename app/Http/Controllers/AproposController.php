<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AproposController extends Controller
{
    public function show(){
        $titre = "A Propos";
        return view('Apropos', [
           'title' => $titre
        ]);
    }
}
