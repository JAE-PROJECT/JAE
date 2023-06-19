<?php

namespace App\Http\Controllers\Admin;

use App\Models\Zone;

use App\Exports\ZoneExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Services\DatatableService;
use Flasher\Prime\FlasherInterface;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, DatatableService $datatableService)
    {
        $zone = Zone::with('user')->get();
        if($request->ajax()){
            return $datatableService->zoneDatatableList($zone);
        }
        return view('admin.sneat.zone.index');

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
    public function store(Request $request,FlasherInterface $flasher)
    {
      
        $request->validate([

            'nom_zone' => 'required',
            'lien_wha' => 'required|url',
            
        ]);

       Zone::create([

            'nom_zone' =>$request->nom_zone,
            'lien_wha' =>$request->lien_wha,
            
        ]);
        $flasher->addSuccess('Groupe crée avec succès!');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zone = Zone::findOrFail($id);
        return view('admin.sneat.zone.edit',compact('zone'));
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
        $request->validate([

            'nom_zone' => 'required',
            'lien_wha' => 'required|url',
           
        ]);
        $zone = Zone::findOrFail($id);
        $zone->update([
            'nom_zone' => $request->nom_zone,
            'lien_wha' => $request->lien_wha,
           
        ]);
        $flasher->addSuccess('Groupe mis à jour avec succès!');
        return redirect()->route('zone.index');
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

    //export des groupes pdf
    public function exportPdf(){
        $zone = Zone::with('user')->get();
        $i = 0;
        $pdf = PDF::loadView('pdf.zone', ['zone' => $zone, 'i' => $i])->setPaper('a4', 'landscape');
        return $pdf->download('liste_des_groupes_whatsapp.pdf');
    }

    //Export des groupes excel
    public function exportExcel()
    {

        return Excel::download(new ZoneExport, 'groupe_whatsapp.xlsx');
    }

    //exporter en pdf les membres par zone

    public function exportPdfByZone($id)

    {
        $zone = Zone::find($id);

        $i = 0;
        $pdf = PDF::loadView('pdf.zonejae', ['zone' => $zone, 'i' => $i])->setPaper('a4', 'landscape');
        return $pdf->stream('liste_des_groupes_whatsapp.pdf');

    }


}
