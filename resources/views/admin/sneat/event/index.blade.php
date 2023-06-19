@extends('admin.layout')
@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Gestion des evennements
                    </div>
                    <div class="card-body">
                        <div class="btn-group p-5" role="group" aria-label="Basic mixed styles example">
                            <button data-bs-toggle="modal" data-bs-target="#createEvent" type="button"
                                class="btn btn-warning m-2">
                                <i class="bx bxs-plus-circle"></i>
                                Creer un evennement</button>
                        </div>
                        <table class="table table-dark table-hover table-responsive" name="datatable" id="datatable_event">
                            <thead>
                                <tr>
                                 <th> Statut</th>
                                 <th> Orateur</th>
                                    <th> Titre</th>
                                    <th> Date</th>
                                    <th> Heure</th>

                                    <th> VIsuel</th>
                                    <th> Type</th>
                                    <th>Nombre de places prévues</th>
                                    <th>Nombre d'inscrits</th>
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


    <!-- Modal event-->
    <div class="modal fade " id="createEvent" tabindex="-1" aria-labelledby="createTypeLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createEventLabel">Creer un evennement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('event.index') }}" method="post" enctype="multipart/form-data">
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
                            <label for="event_titre" class="form-label">Titre</label>
                            <input name="event_titre" type="text" class="form-control @error('event_titre') is-invalid @enderror" id="event_titre" aria-describedby="event_titre" value="{{ old('event_titre') }}" required>
                            <div id="eventtype_titre" class="form-text">Session MTL du 20/10/2022</div>
                        </div>

                        <div class="mb-3">
                            <label for="event_description" class="form-label">Description</label>
                             <textarea class="form-control" id="event_description" name="event_description" rows="3">{{ old('event_titre') }}</textarea>
                        </div>

                         <div class="mb-3">
                            <label for="event_date" class="form-label">Date</label>
                            <input name="event_date" type="date" class="form-control @error('event_date') is-invalid @enderror" id="event_date" aria-describedby="event_date" value="{{ old('event_date') }}" required>
                        </div>

                        <div class="mb-3">

                            <label for="event_heure" class="form-label">Heure</label>
                            <input name="event_heure" type="time" class="form-control @error('event_heure') is-invalid @enderror" id="event_heure" aria-describedby="event_heure" value="{{ old('event_heure') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="image_path" class="form-label">Visuel</label>
                            <input name="image_path" type="file" class="form-control @error('image_path') is-invalid @enderror" id="image_path" aria-describedby="image_path" value="{{ old('image_path') }}" required  accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="nombre_place" class="form-label">Nombre de places</label>
                            <input name="nombre_place" type="number" class="form-control @error('nombre_place') is-invalid @enderror" id="nombre_place" aria-describedby="nombre_place" value="{{ old('nombre_place') }}" required>

                        </div>
                           <div class="mb-3">
                            <label for="type_id" class="form-label">Type d'evennement</label>
                            <select name="type_id" class="form-select form-select-lg" id="type_id">
                            @foreach ($type as $item)
                                <option value="{{ $item->id }}">{{ $item->eventtype_titre }}</option>
                            @endforeach
                                </select>
                        </div>

                       <div class="mb-3">
                            <label for="orateur" class="form-label">Orateur (s)</label>
                          <input class="form-control" type="text" name="orateur" id="orateur">
                        </div>



                        <div class="mb-3">
                            <label for="statut" class="form-label">Statut</label>
                            <select name="statut" class="form-select form-select-lg" id="statut" style="min-width: 100%">
                                <option value="ouvert">Ouvert à l'inscription</option>
                                <!--
                                <option value="à venir">Ouverture prochaine</option>
                                -->
                                </select>

                        </div>
                        <!--
                            <div class="mb-3" id="date_ouverture_block">
                            <label for="date_ouverture" class="form-label">Date ouverture</label>
                            <input name="date_ouverture" type="date" class="form-control @error('date_ouverture') is-invalid @enderror" id="date_ouverture" aria-describedby="date_ouverture" value="{{ old('date_ouverture') }}">
                        </div>
                        -->

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

  <script src="//cdn.ckeditor.com/4.16.2/basic/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('event_description');
    </script>
 @if (count($errors) > 0)
        <script type="text/javascript">
            $(document).ready(function() {
                $('#createEvent').modal('show');
            });
        </script>
    @endif
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var oTable = $('#datatable_event').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('event.index') }}',
                },

                columns: [
                    {
                        data: 'statut',
                        name: 'statut',
                    },
                       {
                        data: 'orateur',
                        name: 'orateur',
                    },
                    {
                        data: 'event_titre',
                        name: 'event_titre',
                    },

                  {
                      data: 'event_date',
                        type: 'num',
                        render: {
                            _: 'display',
                            sort: 'timestamp'
                        }
                    },
                     {
                        data: 'event_heure',
                        name: 'event_heure',
                    },

                     {
                        data: 'image_path',
                        name: 'image_path',
                    },
                    {
                        data: 'type',
                        name: 'type',
                    },
                      {
                        data: 'nombre_place',
                        name: 'nombre_place',
                    },
                      {
                        data: 'nombre_inscrits',
                        name: 'nombre_inscrits',
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
    <script type="text/javascript">
     $("div#date_ouverture_block").hide();
    $("#statut").change(function(){
   if($(this).val()=="à venir")
   {
       $("div#date_ouverture_block").show();
   }
    else
    {
        $("div#date_ouverture_block").hide();
    }
});
    </script>
@endsection
