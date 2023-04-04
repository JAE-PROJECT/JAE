@extends('layouts/app')

@section('content')
<main>
    <section id="home_presentation">
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
                    <a  class="btn button btn_presentation"> Devenir Membre</a>
                </div>
                <div class="presentatin_img  col-12 col-md-7 order-md-2 order-1">
                    <img src="{{asset('img/membership-circles.png')}}" alt="image de la communauté">
                </div>
            </div>
        </div>
    </section>
    <section id="objectif" class="bg-color">
        <div class="container" data-aos="fade-up" >
            <div class="objectif_title">
                <h2 class="fs-3 text-center fw-bold">Objectifs De La JAE</h2>
            </div>
           <div class ="objectif_1 row  flex-column-reverse  flex-lg-row  jutify-content-between">
                <div class="objectif_description_1 col-lg-6  d-flex flex-column  align-self-center" data-aos="fade-right" data-aos-delay="100">
                    <h4 class="d-block objectif_description_1_title">Dolor sit</h4>
                    <p class="mt-1 txt-our objectif_description_1_paragraphe">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quidem laboriosam vero ab fuga dolorum perferendis voluptatem recusandae, 
                    reprehenderit beatae consectetur molestiae asperiores, similique
                    quasi dolores qui assumenda aperiam. Sit, aspernatur.
                    </p>
                    <div class="objectif_description_1_button mt-3">
                        <a href="{{route('apropos')}}" class="btn">En Savoir Plus</a>
                    </div>
                   
                </div>
                <div class="objectif_video_1 col-lg-6 mx-auto d-block" data-aos="fade-left" data-aos-delay="100">
                    <video class="video_objectif" width="640" height="360" controls preload="auto" poster="{{asset('img/bg9.jpg')}}">
                        <source src="{{asset('videos/Objectifs_video.mp4')}}" type="video/mp4">
                        Votre navigateur ne prend pas en charge les vidéos.
                    </video>
                </div>
            </div>
            <!-- <div class ="objectif_2 row flex-column  flex-lg-row  jutify-content-between ">
                <div class="objectif_image_2 col-lg-5 pt-lg-5  mx-auto d-block" data-aos="fade-right">
                    <img src="{{asset('img/lion.jpeg')}}" alt="oups" class ="w-100">
                </div>
                <div class="objectif_description_2 col-lg-7 d-flex flex-column align-self-center  content" data-aos="fade-left" >
                    <h4 class="d-block mx-auto fw-light">Lorem, ipsum</h4>
                    <p class="mt-3 txt-our">
                        Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. 
                        Explicabo sequi nam numquam 
                        tenetur doloribus vero tempora a quos earum? Obcaecati itaque facilis possimus doloremque nostrum
                        repudiandae nobis quia voluptates animi!
                    </p>
                </div>
            </div> 
             -->
        </div>
    </section>
    <section id="statistique">
        <div class="container">
            <div class="statistique_flex">
                <div class="stat_membre">
                    <p>Membres</p>

                </div>
                <div class="stat_team">
                    <p>Team</p>
                </div>
                <div class="stat_zone">
                    <p>Zone</p>
                </div>
                <div class="stat_zone">

                </div>
            </div>
        </div>
    </section>
   
</main>
   
@endsection('content')