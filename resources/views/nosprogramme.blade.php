@extends('layouts/app')

@section('content')
    <main id="page_program">
        <section id="banniere_nous_rejoindre">
            <div class="titre_page">
                <h2>Nos Programmes</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </section>
        <section>
            <div class="titre_section">
                <h2>Programmes</h2>
            </div>
            <!-- Conteneur principal qui contient la liste des programmes -->
    <div class="container">
        <div class="programmes row">

        <!-- Boucle à travers chaque programme -->
        @foreach($programmes as $programme)
            <div class="programme mb-4 col-3">

                <!-- Image du programme -->
                <div class="image_program">
                    <img src="{{asset('img/about.jpg')}}" alt="">
                </div>

                <!-- Titre et description du programme -->
                <div class="text_program px-3">
                    <h3 class="titre_program">{{$programme->event_titre}}</h3>
                    <p class="description_program">{{$programme->event_description}}</p>
                </div>

                <!-- Bouton d'inscription -->
                @if($programme->statut != 'ouvert')
                    <div class="d-none bouton_inscrire pt-3">
                        <button> Ferm&eacute;</button>
                    </div>
                @else
                    <div class="d-block bouton_inscrire pt-3">
                        <button> S'inscrire</button>
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
                        @if ($programme->statut = "ouvert")
                            <i class="bi bi-record2 text-success"></i>
                        @else
                            <i class="bi bi-x text-danger"></i>
                        @endif
                        {{$programme->statut}}
                    </span>
                </div>
            </div>
        @endforeach
                
            </div>
            
            <div class="container">
                <div class="row">
                    @foreach($programmes as $programme)
                    <article class="card px-0 my-xl-0 my-4 mx-3 col-xl col-md-5 col-12" data-aos="zoom-in">
                        <div class="card__thumb">
                            <a href="#">
                            <img src="{{asset('img/about.jpg')}}" alt="oups">
                            </a>
                        </div>
                        <div class="card__date">
                            <span class="card__date__day">12</span>
                            <span class="card__date__month">Mai</span>
                        </div>
                        <div class="card__body">
                            <div class="card__category"><a href="#">Afrique</a></div>
                            <h2 class="card__title"><a href="#">{{$programme->event_titre}}</a></h2>
                            <div class="card__subtitle">A Head in the Polls</div> 
                            <p class="card__description">
                                {{$programme->event_description}}
                            </p>
                        </div>
                        <div class="card__footer">
                            <span class="icon icon--time"></span>6 min
                            <span class="icon icon--comment"></span><a href="#">39 comments</a>
                        </div>
                    </article>
                    @endforeach
                </div>
            
            </div>
            
            
        </section>
        
    </main>
   
@endsection('content')