<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class NosprogrammeController extends Controller
{
    public function show(){
        $titre = "Programmes";

        $programmes = Event::all();
        return view('nosprogramme', [
           'title' => $titre,
           'programmes'=> $programmes
        ]);

    }
}
