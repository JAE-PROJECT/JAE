<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Exports\InscritsExport;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Services\DatatableService;
use Illuminate\Support\Facades\DB;
use Flasher\Prime\FlasherInterface;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, DatatableService $datatableService)
    {
        $event = Event::with('type')->get();
        $type = Type::orderBy('eventtype_titre','asc')->get();
        if ($request->ajax()) {
            return $datatableService->eventDatatableList($event);
        }
        return view('admin.sneat.event.index', compact('type', 'event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FlasherInterface $flasher)
    {

        /*
       $request->validate([
            'event_titre'=>'required|unique:event,event_titre',
            'event_description'=>'required',
            'event_date' => 'required|date',
            'event_heure' => 'required',
            'image_path' => 'required|mimes:jpg,bmp,png',
            'nombre_place'=>'required|number',
            'statut'=>'required',
            'orateur'=>'required',

        ]);
*/
        //Creation de l'evennement
        DB::transaction(function () use ($request, $flasher) {
            //Sauvegarde du fichier
           $image_path= $request->file('image_path')->storeAs('events', $request->file('image_path')->getClientOriginalName());

          Event::create([
                'event_titre' => $request->event_titre,
                'event_description' => $request->event_description,
                'event_date' => $request->event_date,
                'event_heure' => $request->event_heure,
                'image_path' =>  $image_path,
                'type_id'=>$request->type_id,
                'nombre_place' =>$request->nombre_place,
                'statut' => $request->statut,
                'orateur'=>$request->orateur

           ]);
            $flasher->addSuccess('Evennement crée avec succès!');
        });
        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $type = Type::get();
        return view('admin.sneat.event.edit', compact('event','type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, FlasherInterface $flasher)
    {

        //Mise à jour de l'evennement
        DB::transaction(function () use ($request,$id, $flasher) {

            Event::findOrFail($id)->update($request->all());
            $flasher->addSuccess('Evennement mis à jour avec succès!');
        });
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function exportPdfinscrit($id){
        $event = Event::find($id);
        $i = 0;
        $pdf = PDF::loadView('pdf.listeinscrit', ['event' => $event, 'i' => $i])->setPaper('a4', 'landscape');
        return $pdf->stream('liste_des_groupes_whatsapp.pdf');
    }

    public function exportExcelInscrit($id){

        return Excel::download(new InscritsExport($id), 'liste_des_inscrits.xlsx');
    }
}
