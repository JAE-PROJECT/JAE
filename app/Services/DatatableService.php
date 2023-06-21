<?php
namespace App\Services;

use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class DatatableService
{
/**
 * Adminstration section
 *
 * @return void
 */
    //User ressources

    public function userDatatableList($collection)
    {
        return DataTables::of($collection)

           ->addColumn('nom_zone', function ($collection) {

            if (is_null($collection->zone)){

                return '
                <span class="badge bg-danger"> Ne possède pas de zone</span>
                ';
            }
            else{
                return '

                <span class="badge bg-success">'.

                $collection->zone['nom_zone']

                .'</span>'
                ;
            }


               })
            ->addColumn('action', function ($collection) {
                $editer = route('user.edit.role', $collection);
                return '
                <div class="btn btn-group">
              <a data-bs-toggle="tooltip" title="Modifier"   href="' . $editer . '" class=" btn btn-sm btn-warning"><i class="bx bx-edit"></i></a>
                </div>
                ';
            })
        ->rawColumns(['action','nom_zone'])
        ->make(true);

    }


    //Zone resource

    public function zoneDatatableList($collection)
    {
        return DataTables::of($collection)

            ->addColumn('count', function ($collection) {
              return $collection->user()->count();
            })

            ->addColumn('action', function ($collection) {
            $editer = route('zone.edit', $collection);
            $exporter = route('zone.export-pdf-by-zone', $collection);
            return '
                <div class="btn btn-group">


              <a data-bs-toggle="tooltip" title="Modifier"   href="' . $editer . '" class=" btn btn-sm btn-warning"><i class="bx bx-edit"></i></a>

                <a data-bs-toggle="tooltip" title="Exporter en pdf"   href="' . $exporter . '" class="btn btn-sm btn-danger"> <i class="bx bxs-file-pdf"></i></a>

                </div>
                ';
            })
            ->rawColumns(['count','action'])
            ->make(true);
    }

    //Type ressource
    public function typeDatatableList($collection)
    {
        return DataTables::of($collection)
            ->addColumn('action', function ($collection) {
            $editer = route('type.edit', $collection);
            return '
                <div class="btn btn-group">
              <a data-bs-toggle="tooltip" title="Modifier"   href="' . $editer . '" class=" btn btn-sm btn-warning"><i class="bx bx-edit"></i></a>
                </div>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    //Event resource

    public function eventDatatableList($collection)
    {
        return DataTables::of($collection)
            ->addColumn('event_date', function ($collection) {
                return
                    [
                        //Pour trier un tableau datatable yajara il suffit de :
                        // 1. Créer dans le controller une méthode editColumn qui renvoi un tableau associatif contenant:
                        // // // l'element à afficher et le timestamp pour faire le trie
                        'display' => (new \Carbon\Carbon($collection->event_date))->format('d-m-Y'),
                        'timestamp' => (new \Carbon\Carbon($collection->event_date))->getPreciseTimestamp()
                    ];
            })

            ->addColumn('image_path', function ($collection) {
                $image_path = asset('storage/'.$collection->image_path);
                $test = asset('storage/events/Journée-sportive-2022-2.jpg');
            return
           '
                <img class="img-thumbnail" height="50"
                src=" '.  $image_path.'
                "/>
                ';
            })
            ->addColumn('type', function ($collection) {
            return '

                <span class="badge bg-success">' .

            $collection->type["eventtype_titre"]

            . '</span>';

            })
            ->addColumn('nombre_inscrits', function ($collection) {
            $exporter = route('event.export-pdfinscrit', $collection);
            $exporter_excell = route('event.export-excellinscrit', $collection);

            return '
                <span class="mr-3">' . $collection->users()->count() . '</>

                <div class="btn btn-group">
                <a data-bs-toggle="tooltip" title="Exporter la liste des inscrits"   href="' . $exporter . '" class="btn btn-sm btn-primary">
               <i class="bx bxs-file-pdf"></i>
               </a>

                 <a data-bs-toggle="tooltip" title="Export en excell des inscrits"   href="' . $exporter_excell . '" class="btn btn-sm btn-warning">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAMVJREFUSEvtleERAUEMRt9VgArowKgAneiMUpRAB3SgAybmzqy93CZ27WDG/dxLvpfNl7s0VH6ayvpogBWwBWYJ+AFYAxerQA1wAqZWIuCCaIBrKz7Uvu69hJmQEsARmFuQEsAE2FuQEoDkji2IBxB7EnoQz4J4sggPcwDSlmViyp40PQDHxN5D1On7CkCq51J5V2T2DaoD/h70OvDKh/UWk3/PA9lSI2/ZUdw53oRDK3Pn3Gqhvohv2r/r4/wjSz+zO3raDTzEPRmj6DYvAAAAAElFTkSuQmCC"/>
               </a>
                </div>
                ';
        })

            ->addColumn('action', function ($collection) {
                $supprimer = route('event.destroy', $collection);
                $voir = route('event.show', $collection);
                $editer =route('event.edit', $collection);
                return '
                <div class="btn btn-group">
                <a data-bs-toggle="tooltip" title="Voir détails"   href="' . $voir . '" class="btn btn-sm btn-primary">
               <i class="bx bx-video-plus"></i>
               </a>

              <a data-bs-toggle="tooltip" title="Modifier"   href="' . $editer . '" class=" btn btn-sm btn-warning"><i class="bx bx-edit"></i></a>

                <a data-bs-toggle="tooltip" title="Supprimer"   href="' . $supprimer . '" class="btn btn-sm btn-danger"> <i class="bx bx-trash"></i></a>

                </div>
                ';
            })
            ->rawColumns(['image_path', 'action','type', 'nombre_inscrits'])
            ->make(true);
    }

    //Dashboard
    public function eventDashboardDatatableList($collection)
    {
        return DataTables::of($collection)
        ->addColumn('event_date', function($collection){
            return
                [
                    //Pour trier un tableau datatable yajara il suffit de :
                    // 1. Créer dans le controller une méthode editColumn qui renvoi un tableau associatif contenant:
                    // // // l'element à afficher et le timestamp pour faire le trie
                    'display' => (new \Carbon\Carbon($collection->event_date))->format('d-m-Y'),
                    'timestamp' => (new \Carbon\Carbon($collection->event_date))->getPreciseTimestamp()
                ];
        })
            ->addColumn('type', function ($collection) {
                return '

                <span class="badge bg-success">' .

                $collection->type["eventtype_titre"]

                . '</span>';
            })
            ->addColumn('action', function ($collection) {
                $exporter = route('event.export-pdfinscrit', $collection);
                $exporter_excell = route('event.export-excellinscrit', $collection);

                return '
                <span class="mr-3">' . $collection->users()->count() . '</>

                <div class="btn btn-group">
                <a data-bs-toggle="tooltip" title="Export en pdf des inscrits"   href="' . $exporter . '" class="btn btn-sm btn-primary">
               <i class="bx bxs-file-pdf"></i>
               </a>

                <a data-bs-toggle="tooltip" title="Export en excell des inscrits"   href="' . $exporter_excell . '" class="btn btn-sm btn-warning">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAMVJREFUSEvtleERAUEMRt9VgArowKgAneiMUpRAB3SgAybmzqy93CZ27WDG/dxLvpfNl7s0VH6ayvpogBWwBWYJ+AFYAxerQA1wAqZWIuCCaIBrKz7Uvu69hJmQEsARmFuQEsAE2FuQEoDkji2IBxB7EnoQz4J4sggPcwDSlmViyp40PQDHxN5D1On7CkCq51J5V2T2DaoD/h70OvDKh/UWk3/PA9lSI2/ZUdw53oRDK3Pn3Gqhvohv2r/r4/wjSz+zO3raDTzEPRmj6DYvAAAAAElFTkSuQmCC"/>
               </a>
                </div>
                ';
            })
            ->rawColumns([ 'action', 'type'])
            ->make(true);
    }








    public function jaeListAll($collection)

    {
        $datatable = DataTables::of($collection)

            ->editColumn('date_de_naissance', function ($collection) {
                return
                    [
                        //Pour trier un tableau datatable yajara il suffit de :
                        // 1. Créer dans le controller une méthode editColumn qui renvoi un tableau associatif contenant:
                        // // // l'element à afficher et le timestamp pour faire le trie
                        'display' => (new \Carbon\Carbon($collection->date_de_naissance))->format('d-m'),
                        'timestamp' => (new \Carbon\Carbon($collection->date_de_naissance))->getPreciseTimestamp()
                    ];
                //Dans la vue, il faut simplement afficher le display et trier la colonne par le timestamp
            })
            ->editColumn('created_at', function ($collection) {
                return
                    [
                        //Pour trier un tableau datatable yajara il suffit de :
                        // 1. Créer dans le controller une méthode editColumn qui renvoi un tableau associatif contenant:
                        // // // l'element à afficher et le timestamp pour faire le trie
                        'display' => (new \Carbon\Carbon($collection->created_at))->format('d-m-Y'),
                        'timestamp' => (new \Carbon\Carbon($collection->created_at))->getPreciseTimestamp()
                    ];
                //Dans la vue, il faut simplement afficher le display et trier la colonne par le timestamp
            })

            ->make(true);
        return $datatable;
    }

    //Liste des membres d'une equipe prise par rapport au chef d'équipe

    public function listeMembre($collection){
        $datatable = DataTables::of($collection)
            ->make(true);
        return $datatable;
    }




    //Front table
    public function frontEventDatatable($collection){
        $datatable = DataTables::of($collection)

            ->editColumn('event_date', function ($collection) {
                return
                    [
                        //Pour trier un tableau datatable yajara il suffit de :
                        // 1. Créer dans le controller une méthode editColumn qui renvoi un tableau associatif contenant:
                        // // // l'element à afficher et le timestamp pour faire le trie
                        'display' => (new \Carbon\Carbon($collection->event_date))->format('d-m-Y'),
                        'timestamp' => (new \Carbon\Carbon($collection->event_date))->getPreciseTimestamp()
                    ];
                //Dans la vue, il faut simplement afficher le display et trier la colonne par le timestamp
            })

            ->editColumn('action', function ($collection) {
                $inscription = route('nos-programmes.inscription',$collection->id);
                $voir = "";
                return '<a href=" ' . $voir . ' " class=" btn-md btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> Voir détails</a> <a href = " ' . $inscription . ' " class="ml-3 btn-md btn btn-primary"><i class="fa fa-sign-in" aria-hidden="true"></i> Je m\'inscris</a>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
        return $datatable;
    }


}
