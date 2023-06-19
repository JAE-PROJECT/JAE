<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Zone;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Services\DatatableService;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, DatatableService $datatableService)
    {

        $user = User::with('zone')->orderBy('nom')->get();
        $nom_zone = Zone::get();
        //dd($user);
        if($request->ajax()){
            return $datatableService->userDatatableList($user);
        }
        //Liste des users
            return view('admin.sneat.user.index', compact('nom_zone'));
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
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    /**
    *Export user in pdf

     */
     public function exportPdf()
     {
        $user = User::with('zone')->orderBy('nom')->get();
        $i = 0;
        $pdf = PDF::loadView('pdf.jaeexportpdf', ['user' => $user, 'i' => $i])->setPaper('a4', 'landscape');
        return $pdf->download('liste_des_jae.pdf');
     }

     /**
     *Export user in excel
      */
      public function exportExcel(){

        return Excel::download(new UsersExport, 'users.xlsx');

      }

      //Editer role
      public function editrole($id){
        $user = User::findOrFail($id);
        return view('admin.sneat.user.editrole', compact('user'));
      }

    //Editer role
    public function editroleupdate($id, Request $request)
    {

        $user = User::findOrFail($id);
        $user->assignRole($request->role);
        return view('admin.sneat.user.editrole', compact('user'));
    }

}
