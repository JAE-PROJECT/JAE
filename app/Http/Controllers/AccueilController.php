<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Zone;
use App\Models\Event;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        $titre = "Accueil";
            $nb_users = User::all()->count();
            $nb_team = Team::all()->count();
            $nb_zone = Zone::all()->count();
            $nb_event = Event::all()->count();
        return view('accueil', [
           'title' => $titre,
           'nb_users' => $nb_users,
           'nb_team' => $nb_team,
           'nb_zone' => $nb_zone,
           'nb_event' => $nb_event,
        ]);

        
    }
}
