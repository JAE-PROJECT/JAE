<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
    public function index(){

        //A faire,

        $user_history_ouvert = User::find(auth()->user()->id)->event()->where('event_date','>',Carbon::now())->get();
        $user_history_termine = 
        User::find(auth()->user()->id)->event()->where('event_date', '<', Carbon::now())->get();
        return view('Pages.moncomptehistorique', compact('user_history_ouvert', 'user_history_termine'));
    }
}
