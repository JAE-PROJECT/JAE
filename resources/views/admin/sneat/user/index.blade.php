@extends('admin.layout')
@section('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
 <link rel="stylesheet" href="{{ asset('input/css/intlTelInput.min.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Gestion des JAE


                    </div>
                    <div class="card-body">
                    <div class="btn-group p-5" role="group" aria-label="Basic mixed styles example">
                            <a class="btn btn-primary m-2" href="{{ route('user.export-pdf') }}">
                            <i class="bx bx-file-pdf">
                            </i>
                           Exporter pdf </a>

                            <a href="{{ route('user.export-excel') }}" class="btn btn-success m-2">
                            <i class="bx bx-file-export">
                            </i>
                            Exporter xlsx</a>
                    </div>
                      <table class="table table-dark table-hover" name="datatable"  id="datatable_user">
                        <thead>
                          <tr>
                            <th> Zone</th>
                            <th> Nom </th>
                            <th> Prénom </th>
                            <th> Contact (whatsapp) </th>
                            <th> Contact (ligne directe) </th>
                            <th> Email </th>
                            <th> Action </th>
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
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js">
</script>
    <script type="text/javascript">
        $(document).ready(function() {
            var oTable = $('#datatable_user').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('user.index') }}',
                },

                columns: [
                    {
                        data: 'nom_zone',
                        name: 'nom_zone',
                        orderable: false,
                    },
                    {
                        data: 'nom',
                        name: 'nom'
                    },
                    {
                        data: 'prenom',
                        name: 'prenom'
                    },
                    {
                        data: 'contact',
                        name: 'contact',
                        orderable: false,
                    },
                    {
                        data: 'contact_direct',
                        name: 'contact_direct',
                        orderable: false,

                    },
                      {
                        data: 'email',
                        name: 'email',
                        orderable: false,

                    },
                     {
                        data: 'action',
                        name: 'action',

                    }
                ],
                "bInfo": true,
                language: {
                    processing: "Traitement en cours...",
                    search: "Rechercher&nbsp;:",
                    lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
                    info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                    infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    infoPostFix: "",
                    loadingRecords: "Chargement en cours...",
                    zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    emptyTable: "Aucune donnée disponible dans le tableau",
                    paginate: {
                        first: "Premier",
                        previous: "Pr&eacute;c&eacute;dent",
                        next: "Suivant",
                        last: "Dernier"
                    },
                    aria: {
                        sortAscending: ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                },
            })});
    </script>

@endsection

