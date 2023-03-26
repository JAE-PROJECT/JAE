<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosprogrammeController extends Controller
{
    public function show(){
        $titre = "Programmes";
        return view('nosprogramme', [
           'title' => $titre
        ]);
    }
}
