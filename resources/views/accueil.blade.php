@extends('layouts/base')

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
           
           <div class ="objectif_1 row  flex-column flex-lg-row  jutify-content-between align-items-md-center">
                <div class="objectif_description_1 col-lg-6  d-flex flex-column align-self-center my-4 my-lg-0" data-aos="fade-right" data-aos-delay="100">
                    <!-- <div class="objectif_title">
                      <h2 class="fs-3 fw-bold">Objectifs De La JAE</h2>
                    </div> -->
                    <h4 class="d-block objectif_description_1_title text-center mb-4 mb-lg-3 text-lg-start">Objectifs De La JAE</h4>
                    <p class="mt-1 txt-our objectif_description_1_paragraphe">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quidem laboriosam vero ab fuga dolorum perferendis voluptatem recusandae, 
                    reprehenderit beatae consectetur molestiae asperiores, similique
                    quasi dolores qui assumenda aperiam. Sit, aspernatur.
                    </p>
                    <div>
                      <a href="{{route('apropos')}}" class=" objectif_description_1_button w-50">
                        <span class="btn">En Savoir Plus</span>
                      </a>
                    </div>
                    
                   
                </div>
                <div class="objectif_video_1 col-lg-6 mx-auto d-block" data-aos="fade-left" data-aos-delay="100">
                    <video class="video_objectif" width="640" height="360" controls preload="auto" >
                        <source src="{{asset('videos/Objectifs_video.mp4')}}" type="video/mp4">
                        Votre navigateur ne prend pas en charge les vidéos.
                    </video>
                </div>
            </div>
            <!-- <div class ="objectif_2 row flex-column  flex-lg-row  jutify-content-between ">
                <div class="objectif_image_2 col-lg-5 pt-lg-5  mx-auto d-block" data-aos="fade-right">
                    <img src="{{asset('img/lion_1.jpg')}}" alt="oups" class ="w-100">
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
    <section id="team" class="">
      <div class="container" data-aos="fade-up">
        <div class="mb-5 team_title">
          <h2 class="text-center mb-1 fw-bold team_title_titre">Team</h2>
          <p class="w-75  mx-auto text-center team_title_descrip"> Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="presentation ">
              <img src="{{asset('img/bg9.jpg')}}" alt="oups" class="w-100">
            </div>
            <div class="info-presentation">
              <div class="info-presentation-text position-relative">
                <div class="info-presentation-text-position position-absolute bottom-0 start-0 d-flex w-100 justify-content-between p-3">
                  <div class="">
                    <h4>Marcus Doe</h4>
                    <p>CEO</p>
                  </div>
                  <a href="portfolio1" class="d-block align-self-center" target="blank" name="portfolio"><i class="bi bi-plus-circle team_icon"></i></a> 
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="presentation">
              <img src="{{asset('img/bg9.jpg')}}" alt="oups" class="w-100">
            </div>
            <div class="info-presentation">
              <div class="info-presentation-text position-relative">
                <div class="info-presentation-text-position position-absolute bottom-0 start-0 d-flex w-100 justify-content-between p-3">
                  <div class="">
                    <h4>Marcus Doe</h4>
                    <p>CEO</p>
                  </div>
                  <a href="portfolio2" class="d-block align-self-center" target="blank" name="portfolio"><i class="bi bi-plus-circle team_icon"></i></a> 
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="presentation">
              <img src="{{asset('img/bg9.jpg')}}" alt="oups" class="w-100">
            </div>
            <div class="info-presentation">
              <span class="info-presentation-text position-relative"></span>
              <div class="info-presentation-text-position position-absolute bottom-0 start-0 d-flex w-100 justify-content-between p-3">
                  <div class="">
                    <h4>Marcus Doe</h4>
                    <p>CEO</p>
                  </div>
                  <a href="portfolio3" class="d-block align-self-center" target="blank" name="portfolio"><i class="bi bi-plus-circle team_icon"></i></a> 
                  
                </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="presentation">
              <div>
                <img src="{{asset('img/bg9.jpg')}}" alt="oups" class="w-100">
              </div>
            </div>
            <div class="info-presentation">
              <div class="info-presentation-text position-relative">
                <div class="info-presentation-text-position position-absolute bottom-0 start-0 d-flex w-100 justify-content-between p-3">
                  <div class="">
                    <h4>Marcus Doe</h4>
                    <p>CEO</p>
                  </div>
                  <a href="portfolio4" class="d-block align-self-center" target="blank" name="portfolio"><i class="bi bi-plus-circle team_icon"></i></a> 
                </div>
              </div>
            </div>
          </div>
          
        </div>
    </section>
    <section id="statistique">
        <div class="container">
            <div class="statistique_flex row">
                <div class="stat_membre  col-3" data-aos='fade-in' data-delay="0">
                    
                    <i class="bi bi-person-fill"></i>
                    <span data-purecounter-start="0" data-purecounter-end="{{$nb_users}}" data-purecounter-duration="2" class="purecounter nbre_occurence d-block"></span>
                    <p>Membres</p>

                </div>
                <div class="stat_zone col-3" data-aos='fade-in' data-delay="200">
                   
                    <i class="bi bi-geo-fill"></i> <!-- icône zone -->
                    <span data-purecounter-start="0" data-purecounter-end="{{$nb_zone}}" data-purecounter-duration="2" class="purecounter nbre_occurence d-block"></span>
                    <p>Zone</p>
                </div>
                <div class="stat_team col-3" data-aos='fade-in' data-delay="100">
                   
                    <i class="mdi mdi-account-group"></i> <!-- icône groupe -->
                    <span data-purecounter-start="0" data-purecounter-end="{{$nb_team}}" data-purecounter-duration="2" class="purecounter nbre_occurence d-block"></span>
                    <p>Team</p>
                </div>
                <div class="stat_event col-3" data-aos='fade-in' data-delay="900">
                   
                    <i class="bi bi-calendar-event"></i>
                    <span data-purecounter-start="0" data-purecounter-end="{{$nb_event}}" data-purecounter-duration="2" class="purecounter nbre_occurence d-block"></span>
                    <p>Ev&eacute;nements</p>
    
                </div>
            </div>
        </div>
    </section>
    <section id="articles" class="bg-color">
      <div class="container">
        <div class="mb-5 article_title">
          <h2 class="text-center mb-1 fw-bold article_title_titre" data-aos="fade-up">Articles</h2>
          <p class="w-75  mx-auto text-center article_title_descrip" data-aos="fade-up"> Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
        <div class="row liste_articles mx-auto">
            <article class="card px-0 my-xl-0 my-4 mx-3 col-xl col-md-5 col-12" data-aos="zoom-in">
              <div class="card__thumb">
                <a href="#">
                  <img src="{{asset('img/CS_1.jpg')}}" alt="oups">
                </a>
              </div>
              <div class="card__date">
                <span class="card__date__day">12</span>
                <span class="card__date__month">Mai</span>
              </div>
              <div class="card__body">
                <div class="card__category"><a href="#">Afrique</a></div>
                <h2 class="card__title"><a href="#">Lorem ipsum dolor Lorem ipsum</a></h2>
                <div class="card__subtitle">A Head in the Polls</div> 
                <p class="card__description">
                  With a warning label this big, you know they gotta be fun! This is the worst part. The calm before the battle. No! The cat shelter's on to me.

                </p>
              </div>
              <div class="card__footer">
                <span class="icon icon--time"></span>6 min
                <span class="icon icon--comment"></span><a href="#">39 comments</a>
              </div>
            </article>
            <article class="card px-0 my-xl-0 my-4 mx-3 col-xl col-md-5 col-12 " data-aos="zoom-in">
              <div class="card__thumb">
                <a href="#">
                  <img src="{{asset('img/lion.jpg')}}" alt="oups">
                </a>
              </div>
              <div class="card__date">
                <span class="card__date__day">17</span>
                <span class="card__date__month">Avril</span>
              </div>
              <div class="card__body">
                <div class="card__category"><a href="#">Business</a></div>
                <h2 class="card__title"><a href="#">Lorem ipsum dolor Lorem ipsum</a></h2>
                <div class="card__subtitle">A Head in the Polls</div>
                <p class="card__description">
                  With a warning label this big, you know they gotta be fun! This is the worst part. The calm before the battle. No! The cat shelter's on to me.

                </p>
              </div>
              <div class="card__footer">
                <span class="icon icon--time"></span>15 min
                <span class="icon icon--comment"></span><a href="#">13 comments</a>
              </div>
            </article>
            <article class="card px-0 my-xl-0 my-4 mx-3 col-xl col-md-5 col-12  " data-aos="zoom-in">
              <div class="card__thumb">
                <a href="#">
                  <img src="{{asset('img/CS_1.jpg')}}" alt="oups">
                </a>
              </div>
              <div class="card__date">
                <span class="card__date__day">29</span>
                <span class="card__date__month">Juin</span>
              </div>
              <div class="card__body">
                <div class="card__category"><a href="#">Design</a></div>
                <h2 class="card__title"><a href="#">Lorem ipsum dolor Lorem ipsum</a></h2>
                <div class="card__subtitle">A Head in the Polls</div>
                <p class="card__description">
                  With a warning label this big, you know they gotta be fun! This is the worst part. The calm before the battle. No! The cat shelter's on to me.

                </p>
              </div>
              <div class="card__footer">
                <span class="icon icon--time"></span>18 min
                <span class="icon icon--comment"></span><a href="#">30 comments</a>
              </div>
            </article>
            <article class="card px-0 my-xl-0 my-4 mx-3 col-xl col-md-5 col-12 " data-aos="zoom-in">
              <div class="card__thumb">
                <a href="#">
                  <img src="{{asset('img/lion.jpg')}}" alt="oups">
                </a>
              </div>
              <div class="card__date">
                <span class="card__date__day">11</span>
                <span class="card__date__month">Mars</span>
              </div>
              <div class="card__body">
                <div class="card__category"><a href="#">News</a></div>
                <h2 class="card__title"><a href="#">Lorem ipsum dolor Lorem ipsum</a></h2>
                <div class="card__subtitle">A Head in the Polls</div>
                <p class="card__description">
                  With a warning label this big, you know they gotta be fun! This is the worst part. The calm before the battle. No! The cat shelter's on to me.

                </p>
              </div>
              <div class="card__footer">
                <span class="icon icon--time"></span>2 hrs
                <span class="icon icon--comment"></span><a href="#">150 comments</a>
              </div>
            </article>
        </div>
      </div>
    </section>
    <section id="temoignage" class="temoignage">
      <div class="container">
        <div class="mb-5 temoignage_title">
          <h2 class="text-center mb-1 fw-bold temoignage_title_titre" data-aos="fade-up">Temoignage</h2>
          <p class="w-75  mx-auto text-center temoignage_title_descrip" data-aos="fade-up"> Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
        <div class="row liste_temoignages">
          <div class="temoignage_x_personne my-xl-0 my-4 mx-3 col-xl col-md-5 col-12" data-aos="zoom-in">
            <div class="personne_temoignant">
                <div class="image_personne">
                  <img src="{{asset('img/temoignage/temoignant_1.png')}}" alt="oups" >
                </div>
              <div class="info_personne">
                <span class="info_personne_nom">Jack Dolor</span>
                <span class="info_personne_etoile">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </span>
              </div>
            </div>
            <div class="temoignagne_text">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus, veniam autem optio atque provident. Ad, reiciendis in atque tenetur odio, ipsam corporis sapiente non, itaque obcaecati tempora? Earum, modi.
              </p>
            </div>
            <span class="guillement">
              <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                  <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
              </svg>
            </span>
          </div>
          <div class="temoignage_x_personne my-xl-0 my-4 mx-3 col-xl col-md-5 col-12" data-aos="zoom-in">
            <div class="personne_temoignant">
                <div class="image_personne">
                  <img src="{{asset('img/temoignage/temoignant_1.png')}}" alt="oups" >
                </div>
              <div class="info_personne">
                <span class="info_personne_nom">Francis Gba</span>
                <span class="info_personne_etoile">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </span>
              </div>
            </div>
            <div class="temoignagne_text">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus, veniam autem optio atque provident. Ad, reiciendis in atque tenetur odio, ipsam corporis sapiente non, itaque obcaecati tempora? Earum, modi.
              </p>
            </div>
            <span class="guillement">
              <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                  <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
              </svg>
            </span>
          </div>
          <div class="temoignage_x_personne my-xl-0 my-4 mx-3 col-xl col-md-11 col-12" data-aos="zoom-in">
            <div class="personne_temoignant">
                <div class="image_personne">
                  <img src="{{asset('img/temoignage/temoignant_1.png')}}" alt="oups" >
                </div>
              <div class="info_personne">
                <span class="info_personne_nom">John Doe</span>
                <span class="info_personne_etoile">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                </span>
              </div>
            </div>
            <div class="temoignagne_text">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus, veniam autem optio atque provident. Ad, reiciendis in atque tenetur odio, ipsam corporis sapiente non, itaque obcaecati tempora? Earum, modi.
              </p>
            </div>
            <span class="guillement">
              <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                  <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
              </svg>
            </span>
          </div>
        </div>

      </div>
    </section>
    
</main>
   
@endsection('content')