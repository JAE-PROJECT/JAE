@extends('admin.layout')
@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection
@section('content')
    <!-- Indicateurs -->
    <div class="row">
        <div class="col-lg-12 col-md-12 order-0 mb-3">
            <div class="row">

                <!-- Nombre des JAE-->
                <div class="col-lg-3 col-md-6 col-6 mb-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('sneat/assets/img/icons/unicons/chart-success.png') }}"
                                        alt="chart success" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Nombre total d'utilisateurs</span>
                            <h3 class="card-title mb-2">{{ $nombre_jae }}</h3>

                        </div>
                    </div>
                </div>
                <!-- Nombre des Zones-->
                <div class="col-lg-3 col-md-6 col-6 mb-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('sneat/assets/img/icons/unicons/chart-success.png') }}"
                                        alt="chart success" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Nombre total de zone whatsapp</span>
                            <h3 class="card-title mb-2">{{ $nombre_zone }}</h3>
                        </div>
                    </div>
                </div>
                <!-- Nombre des Evennements-->
                <div class="col-lg-3 col-md-6 col-6 mb-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('sneat/assets/img/icons/unicons/chart-success.png') }}"
                                        alt="chart success" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Nombre total d'évènnements</span>
                            <h3 class="card-title mb-2">{{ $nombre_event }}</h3>
                        </div>
                    </div>
                </div>

                <!-- Nombre des Types d'evennements-->
                <div class="col-lg-3 col-md-6 col-6 mb-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('sneat/assets/img/icons/unicons/chart-success.png') }}"
                                        alt="Credit Card" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span>Nombre total des types d'évènnements</span>
                            <h3 class="card-title text-nowrap mb-1"> {{ $nombre_type_event }}</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Fin Indicateurs -->

    <!-- Statistiques-->
    <div class="row">
        <!-- Order Statistics -->
        <div class="col-md-4 col-lg-4 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Repartition des zones</h5>
                        <small class="text-muted">chiffre à ce jour</small>
                    </div>

                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2">{{ $nombre_zone }}</h2>
                            <span> Zones</span>
                        </div>
                        <div id="orderStatisticsChart"></div>
                    </div>
                    <ul class="p-0 m-0">

                        @foreach ($zone_user as $item)
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bxl-whatsapp-square"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">{{ $item->nom_zone }}</h6>
                                        <small class="text-muted"><a href="{{ $item->lien_wha }}">Lien
                                                d'adhésion</a></small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">{{ $item->user_count }} inscrits</small>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <!--/ Order Statistics -->

        <!-- Transactions -->
        <div class="col-md-4 col-lg-4 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Evennements en cours</h5>
                </div>
                <div class="card-body">

                    <ul class="p-0 m-0">
                        @foreach ($event_user as $item)
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="Event image"
                                        class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small
                                            class="text-muted d-block mb-1">{{ $item->type()->first()->eventtype_titre }}</small>
                                        <h6 class="mb-0">{{ $item->event_titre }}</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">{{ $item->users_count }}</h6>
                                        <span class="text-muted">insc.</span>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <!--/ Transactions -->
        <!-- Total Revenue -->
        <div class="col-md-4 col-lg-4 order-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-12">
                        <h5 class="card-header m-0 me-2 pb-3">Progression des adhésions</h5>

                    </div>
                    <div id="incomeChart"></div>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->

    </div>
    <!-- Fin Statistiques-->

    <!-- Edtion liste de présence -->
    <div class="row">

        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Edition liste d'inscrit pour évènnements en cours</h5>

              <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table" id="event">
                        <thead>
                            <tr class="text-nowrap">
                                <th>Date</th>
                                <th>Titre</th>
                                <th>Type</th>
                                <th>Nombre d'inscrits</th>
                            </tr>
                        </thead>
                       <tbody></tbody>
                        <tfoot>
                          <tr class="text-nowrap">
                                <th>Date</th>
                                <th>Titre</th>
                                <th>Type</th>
                                <th>Nombre d'inscrits</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
              </div>
            </div>
        </div>

    </div>
    <!-- Edtion liste de présence -->
@endsection
@section('script')
    <script type="text/javascript">
        var options = {
            chart: {
                type: 'line'
            },
            series: [{
                name: 'Membre JAE',
                data: {{ $data }}
            }],
            xaxis: {
                categories: ['Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre']
                //{{ $mois }}
                //
            }
        }

        var chart = new ApexCharts(document.querySelector("#incomeChart"), options);

        chart.render();
    </script>
     <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var oTable = $('#event').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('admin.index') }}',
                },

                columns: [
                       {
                      data: 'event_date',
                        type: 'num',
                        render: {
                            _: 'display',
                            sort: 'timestamp'
                        }
                    },
                    {
                        data: 'event_titre',
                        name: 'event_titre',
                    },
                    {
                        data: 'type',
                        name: 'type',
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
