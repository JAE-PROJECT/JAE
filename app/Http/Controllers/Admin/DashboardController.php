<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Type;
use App\Models\User;
use App\Models\Zone;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\DatatableService;

class DashboardController extends Controller
{
    public function index(Request $request, DatatableService $datatableService){

        $users = User::select('id', 'created_at')
        ->get()
        ->groupBy(function ($date) {
            //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
            return Carbon::parse($date->created_at)->locale('fr_FR')->format('F'); // grouping by months
        });

        //Creation de deux tableaux :

        $mois = $users->keys();

        $data = collect();

         foreach ($users as $item){
            $data->push($item->count());
         }
        $nombre_zone = Zone::count();
        $nombre_jae = User::count();
        $nombre_type_event = Type::count();
        $nombre_event = Event::count();
        $zone_user = Zone::withCount('user')->orderBy('user_count', 'desc')->limit(5)->get(); //Recupère les zones avec les membres
        $event_user = Event::withCount('users')->where('event_date', '>', Carbon::now())->orderBy('event_date','desc')->limit(5)->get();
        $event_inscrit = Event::where('event_date','>',Carbon::now());
        if ($request->ajax()) {
            return $datatableService->eventDashboardDatatableList($event_inscrit);
        }
        return view('admin.sneat.dashboard', compact('nombre_zone','nombre_jae','nombre_type_event','nombre_event', 'zone_user', 'event_user', 'mois','data'));
    }
}
