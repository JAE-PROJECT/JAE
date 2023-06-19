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
                        Gestion des types d'evennements
                    </div>
                    <div class="card-body">
                        <div class="btn-group p-5" role="group" aria-label="Basic mixed styles example">
                            <button data-bs-toggle="modal" data-bs-target="#createType" type="button"
                                class="btn btn-warning m-2">
                                <i class="bx bx-file-pdf">
                                </i>
                                Creer un type</button>
                            <!-- Button trigger modal -->

                            <a class="btn btn-primary m-2" href="{{ route('type.export-pdf') }}">
                                <i class="bx bx-file-pdf">
                                </i>
                                Exporter pdf </a>

                            <a href="{{ route('type.export-excel') }}" class="btn btn-success m-2">
                                <i class="bx bx-file-export">
                                </i>
                                Exporter xlsx</a>
                        </div>
                        <table class="table table-dark table-hover" name="datatable" id="datatable_type">
                            <thead>
                                <tr>
                                    <th> Type d'evennements</th>
                                    <th> Actions </th>
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
    <div class="modal fade" id="createType" tabindex="-1" aria-labelledby="createTypeLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createZoneLabel">Creer un Type d'evennement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('type.index') }}" method="post" enctype="multipart/form-data">
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
                            <label for="exampleInputEmail1" class="form-label">Type d'evennement</label>
                            <input name="eventtype_titre" type="text" class="form-control @error('eventtype_titre') is-invalid @enderror" id="eventtype_titre" aria-describedby="eventtype_titre" value="{{ old('eventtype_titre') }}" required>
                            <div id="eventtype_titre" class="form-text">Exemple :  MTL</div>
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
                $('#createType').modal('show');
            });
        </script>
    @endif
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var oTable = $('#datatable_type').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('type.index') }}',
                },

                columns: [
                    {
                        data: 'eventtype_titre',
                        name: 'eventtype_titre',
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
