@extends('admin.layout')
@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Gestion des groupes whatsapp
                    </div>
                    <div class="card-body">
                        <div class="btn-group p-5" role="group" aria-label="Basic mixed styles example">
                            <button data-bs-toggle="modal" data-bs-target="#createZone" type="button"
                                class="btn btn-warning m-2">
                                <i class="bx bx-file-pdf">
                                </i>
                                Creer un groupe </button>
                            <!-- Button trigger modal -->

                            <a class="btn btn-primary m-2" href="{{ route('zone.export-pdf') }}">
                                <i class="bx bx-file-pdf">
                                </i>
                                Exporter pdf </a>

                            <a href="{{ route('zone.export-excel') }}" class="btn btn-success m-2">
                                <i class="bx bx-file-export">
                                </i>
                                Exporter xlsx</a>
                        </div>
                        <table class="table table-dark table-hover" name="datatable" id="datatable_zone">
                            <thead>
                                <tr>
                                    <th>Etat</th>
                                    <th> Nom Zone</th>
                                    <th> Lien</th>
                                    <th> Nombre de membres </th>
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


    <!-- Modal -->
    <div class="modal fade" id="createZone" tabindex="-1" aria-labelledby="createZoneLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createZoneLabel">Creer un groupe whatsapp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('zone.index') }}" method="post">
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-black">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nom du Groupe</label>
                            <input name="nom_zone" type="type"
                                class="form-control @error('nom_zone') is-invalid @enderror" id="nom_zone"
                                aria-describedby="nom_zone" value="{{ old('nom_zone') }}" required>
                            <div id="nom_zone" class="form-text">Exemple : Burkina Faso</div>
                        </div>
                        <div class="mb-3">
                            <label for="lien_wha" class="form-label">Lien Whatsapp</label>
                            <input type="text" class="form-control @error('lien_wha') is-invalid @enderror"
                                id="lien_wha" name="lien_wha" value="{{ old('lien_wha') }}" required>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @if (count($errors) > 0)
        <script type="text/javascript">
            $(document).ready(function() {
                $('#createZone').modal('show');
            });
        </script>
    @endif
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var oTable = $('#datatable_zone').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('zone.index') }}',
                },

                columns: [{

                        data: 'etat',
                        name: 'etat',
                        orderable: false,
                    },
                    {

                        data: 'nom_zone',
                        name: 'nom_zone',
                        orderable: false,
                    },
                    {
                        data: 'lien_wha',
                        name: 'lien_wha'
                    },
                    {
                        data: 'count',
                        name: 'count',
                        orderable: false,
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
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
            })
        });
    </script>
@endsection
