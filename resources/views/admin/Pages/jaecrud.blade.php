@extends('admin.base')
@section('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection
@section('content')

<!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Liste des JAE </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('jae.export')}}">Exporter (pdf)</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Liste des JAE</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped" id="laravel_datatable">
                        <thead>
                          <tr>
                            <th> Date d'adhésion </th>
                            <th> Nom </th>
                            <th> Prénom </th>
                            <th> Email </th>
                            <th> Contact (whatsapp) </th>
                            <th> Contact (ligne directe) </th>
                            <th> Date d'anniversaire </th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->

@endsection
@section('script')
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script  type="text/javascript" >
        $(document).ready(function() {
                     var oTable= $('#laravel_datatable').DataTable({
                        ajax:{
                            url: '{{ route('jaecrud.index') }}',
                        } ,
                          columns: [
                               {
                                    data: 'created_at',
                                    type: 'num',
                                    render: {
                                     _: 'display',
                                    sort: 'timestamp'
                                    }
                                    },
                              {data:'nom',name:'nom'},
                               {data:'prenom',name:'prenom'},
                              {data:'email',name: 'email',orderable:false},
                             {data:'contact',name: 'contact',orderable:false},
                             {data:'contact_direct',name: 'contact_direct',orderable:false},
                              {
                                    data: 'date_de_naissance',
                                    type: 'num',
                                    render: {
                                     _: 'display',
                                    sort: 'timestamp'
                                    }
                                    },
                          ],
                        "bInfo": false,
                          processing: true,
                          serverSide: true,
                         language:
                        {
                        processing:     "Traitement en cours...",
                         search:         "Rechercher&nbsp;:",
                        lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
                        info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                        infoPostFix:    "",
                        loadingRecords: "Chargement en cours...",
                        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                        emptyTable:     "Aucune donnée disponible dans le tableau",
                        paginate: {
                        first:      "Premier",
                        previous:   "Pr&eacute;c&eacute;dent",
                        next:       "Suivant",
                        last:       "Dernier"
                       },
                       aria:
                       {
                        sortAscending:  ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                   },
                      });
                  });
    </script>
@endsection

