@extends('layouts.base')

@section('content')
    <main id="page_program">
        <section id="banniere_nous_rejoindre">
            <div class="titre_page">
                <h2>Nos Programmes</h2>
 {{--                <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p> --}}
            </div>
        </section>
        <section id="explication-program" class=" bg-color">
                    @if (session('already_inscrip_program'))
                        <div id="already_inscrip_program" class="">
                            <div class="">
                                <p class="nom_user fs-2">Hello {{ auth()->user()->nom }}</p>
                                <span class="warning_inscrip"><i class="bi bi-exclamation-circle-fill m-2 exclamation"></i> {{session('already_inscrip_program')}}</span>
                            </div>


                        </div>
                    @endif


            <div class="container program_explain" data-aos="fade-up">

                <div class="row gy-4" data-aos="fade-up">
                    <div class="col-lg-4">
                        <img src="{{asset('img/newimg/programme1.jpg')}}" class="img-fluid" alt="oups">
                    </div>
                    <div class="col-lg-8">
                        <div class="content ps-lg-5">
                        <h3>Ce que nous faisons à la JAE</h3>
                        <p>
                            Nous organisons différents programmes et activités dans le but de former, d'encadrer, de coacher, d'éduquer, de participer à l'épanouissement personnel de chacun de nos membres.
                            La plupart de nos activités se font en ligne en attendant les programmes en présentiel et ses activités sont regroupés en deux groupes qui sont :
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> MENTORSHIP/EDUCATION</li>
                            <li><i class="bi bi-check2-circle"></i> SOCIAL/DIVERTISSEMENT</li>
                        </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End vision_1 Section -->
        <section id="programme">
            <div class="titre_section" data-aos="fade-up">
                <h2>Programmes</h2>
            </div>
            <!-- Conteneur principal qui contient la liste des programmes -->
            <div class="container">
                <!-- Div contenant les filtres -->
                <div class="filter  mb-5">

                    <!-- Dropdown pour le statut de l'événement -->
                    <div class="dropdown ">
                        <!-- Récupération des statuts uniques des événements -->
                        <div class="d-none">{{$statuts= DB::table('Event')->select('statut')->distinct()->get()}}</div>
                        <!-- Bouton déclenchant le menu déroulant pour le choix du statut -->
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Statut
                        </button>
                        <!-- Menu déroulant avec les options de statut -->
                        <ul class="dropdown-menu">
                            <!-- Boucle pour afficher chaque option de statut -->
                            @foreach($statuts as $statut)
                                <li><a href="{{ route('programme', ['statut' => $statut->statut ] ) }}" class="dropdown-item">
                                {{$statut->statut}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Dropdown pour le type d'événement -->
                    <div class="dropdown">
                        <!-- Récupération des types d'événements avec leurs titres -->
                        <div class="d-none">
                            {{$types = DB::table('event')->join('type', 'event.type_id', '=', 'type.id')
                            ->select('type.eventtype_titre', 'event.type_id')
                            ->get()}}
                        </div>
                        <!-- Bouton déclenchant le menu déroulant pour le choix du type d'événement -->
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Type D'&eacute;v&eacute;nements
                        </button>
                        <!-- Menu déroulant avec les options de type d'événement -->
                        <ul class="dropdown-menu">
                            <!-- Boucle pour afficher chaque option de type d'événement -->
                            @foreach($types as $type)
                                <li><a href="{{ route('programme',['type' => $type->type_id] ) }}" class="dropdown-item">{{$type->eventtype_titre}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>

                <div class="programmes row  position-relative">

                     {{-- Boucle à travers chaque programme --}}
                    @foreach($programmes as $programme)
                        @if((!isset($_GET['statut']) || $programme->statut == $_GET['statut']) && (!isset($_GET['type']) || $programme->type_id == $_GET['type']))
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="programme mx-2" data-aos="zoom-in">

                                {{-- <!-- Image du programme --> --}}
                                <div class="image_program">
                                    <img src="{{asset('img/about.jpg')}}" alt="">
                                    <div class="image_program-orateur">
                                        <span> ORATEUR: {{str_replace(" - "," & ","$programme->orateur")}}</span>
                                    </div>
                                </div>

                                <!-- Titre et description du programme -->
                                <div class="text_program px-3">
                                    <h3 class="titre_program">{{$programme->event_titre}}</h3>
                                    <p class="description_program">{{$programme->event_description}}</p>
                                </div>
                                {{-- <div class="d-none">
                                    {{$programme->statut = "fermer"}}
                                </div> --}}
                                <!-- Bouton d'inscription -->
                                @if(strtolower($programme->statut) != 'ouvert')
                                    <div class="d-none bouton_inscrire pt-3">
                                        <button> Ferm&eacute;</button>
                                    </div>
                                @else
                                    <div class="d-block bouton_inscrire pt-3">
                                        <form action="{{ route('inscription_programme') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="event_id" value="{{ $programme->id }}">
                                            <button type="submit">S'inscrire</button>
                                        </form>
                                    </div>
                                @endif

                                <!-- Informations supplémentaires sur le programme (nombre de places, date et heure) -->
                                <div class="other_infos_program mt-3">
                                    <span>
                                        <!-- <i class="bi bi-person-fill"></i> -->{{$programme->nombre_place??'0'}} inscrits
                                    </span>
                                    <span>

                                    </span>
                                    <span>
                                        <i class="bi bi-calendar-event"></i>{{$programme->event_date}}
                                        <i class="bi bi-hourglass-split"></i>{{$programme->event_heure}}
                                    </span>
                                </div>

                                <!-- Statut du programme (ouvert ou fermé) -->
                                <div class="statut_program">
                                    <span>
                                        <!-- Si le programme est ouvert, affiche une coche verte, sinon affiche une croix rouge -->
                                        @if (strtolower($programme->statut) == 'ouvert')
                                            <i class="bi bi-record2 text-success"></i>
                                        @else
                                            <i class="bi bi-x text-danger"></i>
                                        @endif
                                        {{$programme->statut}}
                                    </span>
                                </div>
                            </div>
                        </div>

                        @endif
                    @endforeach

                </div>

            </div>
        </section>

    </main>

@endsection('content')
