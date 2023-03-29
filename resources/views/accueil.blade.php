@extends('layouts/app')

@section('content')
<main>
    <section class="home_presentation">
        <div class="container">
            <div class="row">
                <p class="filigrane filigrane4">JAE</span> </p>
                <p class="filigrane filigrane1">JAE</span> </p>
                <p class="filigrane filigrane2">JAE</span> </p>
                <p class="filigrane filigrane3">JAE</span> </p>
                <div class="presentation_msg col-12 col-md order-md-1 order-2">
                    <h1 class="presentation_title ">  <span class="titre">JA<span class="presentation_E">E</span> </h1>
                    <h2 class="presentation_subtitle fs-3">Pour le repositionnement de l'Afrique</h2>
                    <p class="presentation_description">Lorem ipsum dolor sit amet Lorem, ipsum dolor ipsum dolor Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur.<p>
                    <a  class="btn button btn_presentation"> S'inscrire &Aacute; Nos Programmes</a>
                </div>
                <div class="presentatin_img  col-12 col-md-7 order-md-2 order-1">
                    <img src="{{asset('img/membership-circles.png')}}" alt="image de la communauté">
                </div>
            </div>
        </div>
    </section>
    <section class="objectif">
        <div class="container">
            <div class="">
                <h2>Objectifs de la JAE</h2>
            </div>
            <div class="row">
                <div class="col-7">
                    <h3> dolor sapiente</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe non quisquam, aliquid, et quis debitis, voluptates ducimus quidem labore repellendus officiis eveniet nihil veniam? Voluptatem tenetur reiciendis maiores sed rem.</p>
                </div>
                <div class="col">
                    <img src="{{asset('')}}" alt="">
                </div>
            </div>
        </div>
        
    </section>
   
</main>
   
@endsection('content')