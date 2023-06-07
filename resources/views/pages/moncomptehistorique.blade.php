@extends('layouts.app')
@section('style')
    <style>
    </style>

@endsection
@section('contentdash')
    <div class="px-2 bg-color_special_div pb-4" >

        <div class="page-header min-vh-25" style="background-image: url('../img/bg_historique.jpeg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">Mon historique</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-xl px-4 mt-4 ">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <!-- Billing card 1-->
                    <div class="card h-100 border-start-lg border-start-primary">
                        <div class="card-body">
                            <div class="small custom_font_weight_site color-text-site_1">Conférence en cours</div>
                            <div class="h3">{{ $user_history_ouvert->count()}}</div>
                            <a class="text-arrow-icon small" href="#!">
                                auxquelles je suis inscrit.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <!-- Billing card 2-->
                    <div class="card h-100 border-start-lg border-start-secondary">
                        <div class="card-body">
                            <div class="small custom_font_weight_site color-text-site_1">Total des conférences passées</div>
                            <div class="h3">{{ $user_history_termine->count() }}</div>
                            <a class="text-arrow-icon small text-secondary" href="#!">
                                Auxquelles je suis inscrit.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <!-- Billing card 3-->
                    <div class="card h-100 border-start-lg border-start-success">
                        <div class="card-body">
                            <div class="small custom_font_weight_site color-text-site_1">Total des conférences</div>
                            <div class="h3 d-flex align-items-center">{{ $user_history_ouvert->count() + $user_history_termine->count()}} </div>
                            <a class="text-arrow-icon small text-success" href="#!">
                                Auxquelles j'ai participé.
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Conférences terminés auxquelles je suis inscrits.-->
            <div class="card card-header-actions mb-4">
                <div class="card-header custom_font_weight_site  padding_custom">
                    Conférences en cours auxquelles je suis inscrits.
                </div>
                <div class="card-body p-0 pb-3">
                    <!-- Payment method 1-->
                    <div class="d-flex align-items-center justify-content-between px-4">
                        <div class="d-flex align-items-center">
                         @if ($user_history_ouvert->count() == 0)
                        <span class="custom_alert_site">
                        Aucune données disponibles
                        </span>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Date</th>
                                        <th>Titre</th>
                                        <th>Type</th>
                                        <th>Heure</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($user_history_ouvert as $item)
                                    <tr>
                                        <td scope="row">{{ Carbon\Carbon::parse($item->event_date)->format('d-m-Y') }}</td>
                                        <td>{{ $item->event_titre }}</td>
                                        <td>{{ $item->type()->first()->eventtype_titre }}</td>
                                                                                                                        <td>{{ $item->event_heure }}</td>

                                    </tr>
                                @endforeach

                                </tbody>
                                   <tfoot>
                                    <tr>
                                    <th>Date</th>
                                        <th>Titre</th>
                                        <th>Type</th>
                                        <th>Heure</th>

                                    </tr>
                                </tfoot>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!--  Conférences en cours auxquelles je suis inscrits.-->
            <div class="card card-header-actions mb-4">
                <div class="card-header padding_custom custom_font_weight_site">
                    Conférences achevées auxquelles j'ai été inscrits.
                </div>
                <div class="card-body p-0 pb-3">
                    <!-- Payment method 1-->
                    <div class="d-flex align-items-center justify-content-between px-4">
                        <div class="d-flex align-items-center">
                        @if ($user_history_ouvert->count() != 0)
                        <span class="custom_alert_site">
                        Aucune données disponibles
                        </span>
                        @else
                        <table class="table">
                                <thead>
                                    <tr>
                                    <th>Date</th>
                                        <th>Titre</th>
                                        <th>Type</th>
                                        <th>Heure</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($user_history_termine as $item)
                                    <tr>
                                        <td scope="row">{{ Carbon\Carbon::parse($item->event_date)->format('d-m-Y') }}</td>
                                        <td>{{ $item->event_titre }}</td>
                                        <td>{{ $item->type()->first()->eventtype_titre }}</td>
                                                                                                                        <td>{{ $item->event_heure }}</td>

                                    </tr>
                                @endforeach

                                </tbody>
                                   <tfoot>
                                    <tr>
                                    <th>Date</th>
                                        <th>Titre</th>
                                        <th>Type</th>
                                        <th>Heure</th>

                                    </tr>
                                </tfoot>
                            </table>
                        @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
