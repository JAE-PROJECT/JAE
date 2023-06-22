@extends('layouts.base')

@section('content')
    <section id="banniere_nous_rejoindre">
        <div class="titre_page">
            <h2>Actualit&eacute;</h2>

        </div>
    </section>
    <section id="article_actu">
        <div class="container">
            <div class="liste_actu row">
                @foreach ($actualites as $actualite )
                    <div class="col-12 one_actu">
                        <div class="img_actu">
                            <img src="{{ asset('img/about.jpg')}}" alt="oups">
                        </div>
                        <h2 class="title_actu"> <a href="#" onclick="return false;">test actualité</a></h2>
                        <div class="cat__dat_actu"><span>{{ str_replace("-","/",$actualite->created_at->toDateString())}}</span> | <span>Marketing</span></div>
                        <p class="desc_actu">{{ $actualite->description}}</p>
                    </div>
                @endforeach
                <div class="col-12 one_actu">
                    <div class="img_actu">
                        <img src="{{ asset('img/about.jpg')}}" alt="oups">
                    </div>
                    <h2 class="title_actu"> <a href="#" onclick="return false;">Actualité</a></h2>
                    <div class="cat__dat_actu"><span>{{ str_replace("-","/",$actualite->created_at->toDateString())}}</span> | <span>Marketing</span></div>
                    <p class="desc_actu">{{ $actualite->description}}</p>
                </div>
                <div class="col-12 one_actu">
                    <div class="img_actu">
                        <img src="{{ asset('img/about.jpg')}}" alt="oups">
                    </div>
                    <h2 class="title_actu"> <a href="#" onclick="return false;">Lorem, ipsum dolor.</a></h2>
                    <div class="cat__dat_actu"><span>{{ str_replace("-","/",$actualite->created_at->toDateString())}}</span> | <span>Marketing</span></div>
                    <p class="desc_actu">{{ $actualite->description}}</p>
                </div>

            </div>
        </div>
    </section>
    </section>
@endsection
