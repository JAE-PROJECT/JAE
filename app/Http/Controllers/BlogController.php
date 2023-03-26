<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show(){
        $titre = "Blog";
        return view('blog', [
           'title' => $titre
        ]);
    }
}
