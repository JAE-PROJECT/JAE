<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Services\DatatableService;
use Illuminate\Support\Facades\DB;
use Flasher\Prime\FlasherInterface;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, DatatableService $datatableService)
    {
        $type = Type::orderBy('eventtype_titre')->get();
        if($request->ajax()){
            return $datatableService->typeDatatableList($type);
        }
        return view('admin.sneat.type.index');
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
        $request->validate([
            'eventtype_titre'=>'required',

        ]);

        //Creation de l'evennement
        DB::transaction(function () use ($request, $flasher) {

            //Enregistrement
             Type::create([
                'eventtype_titre' => $request->eventtype_titre,
            ]);
            $flasher->addSuccess('Type d\'evennement crée avec succès!');
        });

        return redirect()->route('type.index');
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
        $type = Type::findOrFail($id);
        return view('admin.sneat.type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, FlasherInterface $flasher )
    {
        $request->validate([

            'eventtype_titre' => 'required',

        ]);
        $type = Type::findOrFail($id);
        $type->update([
            'eventtype_titre' => $request->eventtype_titre,

        ]);
        $flasher->addSuccess('Groupe mis à jour avec succès!');
        return redirect()->route('type.index');
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
}
