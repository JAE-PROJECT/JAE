<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function show(){
        $titre = "Forum";
        return view('forum', [
           'title' => $titre
        ]);
    }
}
