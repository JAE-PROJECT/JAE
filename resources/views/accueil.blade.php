@extends('layouts/base')

@section('content')
<main>
    {{-- {{ dd(Auth::id())}} --}}
    <section id="home_presentation">
        <div class="container">
            <div class="row">
                <p class="filigrane filigrane4">JAE</span> </p>
                <p class="filigrane filigrane1">JAE</span> </p>
                <p class="filigrane filigrane2">JAE</span> </p>
                <p class="filigrane filigrane3">JAE</span> </p>
                <div class="presentation_msg col-12 col-md order-md-1 order-2">
                    <h1 class="presentation_title ">  <span class="titre">{{config('textes.Nom_site')}}</span> </h1>
                    <h2 class="presentation_subtitle fs-2">{{config('textes.slogan')}}</h2>
                    <p class="presentation_description">{{config('textes.slogan2')}}<p>
                    @guest
                        <a href="{{route('rejoindre')}}" class="btn button btn_presentation"> Devenir Membre</a>
                    @endguest
                    @auth
                    <a href="{{route('programme')}}" class="btn button btn_presentation"> Nos Programmes</a>
                    @endauth
                </div>
                <div class="presentatin_img  col-12 col-md-7 order-md-2 order-1">
                    <img src="{{asset('img/COVER.png')}}" alt="image de la communauté">
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
                        <i class="bi bi-check-circle-fill"></i> <span class="fw-bold">Sur le plan social: </span> Bâtir une communauté avec des mœurs et des valeurs saines prônant l'entraide et la solidarité sans distinction de provenance.

                       <br><i class="bi bi-check-circle-fill"></i> <span class="fw-bold">Sur le plan éducationnel:</span> Offrir à la jeunesse une formation adaptée au développement de leurs potentiels individuels afin de faire de chacun d'eux une élite dans son domaine.

                        <br><i class="bi bi-check-circle-fill"></i> <span class="fw-bold">Sur le plan financier:</span>  Développer l'économie de l'Afrique tout entière en optimisant la richesse par individu via l'entrepreneuriat
                    </p>
                    <div>
                      <a href="{{route('apropos')}}" class=" objectif_description_1_button w-50">
                        <span class="btn">En Savoir Plus</span>
                      </a>
                    </div>


                </div>
                <div class="objectif_video_1 col-lg-6 mx-auto d-block" data-aos="fade-left" data-aos-delay="100">
                    <video class="video_objectif" width="640" height="360" controls autoplay muted>
                        <source src="{{asset('videos/Objectifs_video.mp4')}}" type="video/mp4"  >
                        Votre navigateur ne prend pas en charge les vidéos.
                    </video>
                </div>
            </div>
            <!-- <div class ="objectif_2 row flex-column  flex-lg-row  jutify-content-between ">
                <div class="objectif_image_2 col-lg-5 pt-lg-5  mx-auto d-block" data-aos="fade-right">
                    <img src="{{--asset('img/lion_1.jpg')--}}" alt="oups" class ="w-100">
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
    {{-- <section id="team" class="">
      <div class="container" data-aos="fade-up">
        <div class="mb-5 team_title">
          <h2 class="text-center mb-1 fw-bold team_title_titre">Team</h2>
          <p class="w-75  mx-auto text-center team_title_descrip"> Une équipe Jeune et dynamique.</p>
        </div>
        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="presentation ">
              <img src="{{asset('img/newimg/team/team1.jpg')}}" alt="oups" class="w-100">
            </div>
            <div class="info-presentation">
              <div class="info-presentation-text position-relative">
                <div class="info-presentation-text-position position-absolute bottom-0 start-0 d-flex w-100 justify-content-between p-3">
                  <div class="">
                    <h4>Pharès KOUADIO</h4>
                    <p>CEO</p>
                  </div>
                  <a href="portfolio1" class="d-block align-self-center" target="blank" name="portfolio"><i class="bi bi-plus-circle team_icon"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="presentation">
              <img src="{{asset('img/newimg/team/team2.jpg')}}" alt="oups" class="w-100">
            </div>
            <div class="info-presentation">
              <div class="info-presentation-text position-relative">
                <div class="info-presentation-text-position position-absolute bottom-0 start-0 d-flex w-100 justify-content-between p-3">
                  <div class="">
                    <h4>Prunelle ADJRABE</h4>
                    <p>CEO</p>
                  </div>
                  <a href="portfolio2" class="d-block align-self-center" target="blank" name="portfolio"><i class="bi bi-plus-circle team_icon"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="presentation">
              <img src="{{asset('img/newimg/team/team5.jpg')}}" alt="oups" class="w-100">
            </div>
            <div class="info-presentation">
              <span class="info-presentation-text position-relative"></span>
              <div class="info-presentation-text-position position-absolute bottom-0 start-0 d-flex w-100 justify-content-between p-3">
                  <div class="">
                    <h4>Ruth Esther OUATTARA</h4>
                    <p>CEO</p>
                  </div>
                  <a href="portfolio3" class="d-block align-self-center" target="blank" name="portfolio"><i class="bi bi-plus-circle team_icon"></i></a>

                </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="presentation">
              <div>
                <img src="{{asset('img/newimg/team/team4.jpg')}}" alt="oups" class="w-100">
              </div>
            </div>
            <div class="info-presentation">
              <div class="info-presentation-text position-relative">
                <div class="info-presentation-text-position position-absolute bottom-0 start-0 d-flex w-100 justify-content-between p-3">
                  <div class="">
                    <h4>Mannn Paace</h4>
                    <p>CEO</p>
                  </div>
                  <a href="portfolio4" class="d-block align-self-center" target="blank" name="portfolio"><i class="bi bi-plus-circle team_icon"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
    </section >--}}
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
                    <p>Zones</p>
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
          <h2 class="text-center mb-1 fw-bold article_title_titre" data-aos="fade-up">PROUD JAE</h2>
        </div>
        <div class="row liste_articles mx-auto">
            <article class="card px-0 my-xxl-0 my-4 mx-3 col-xxl col-md-5 col-12" data-aos="zoom-in">
              <div class="card__thumb">
                <a href=""id="affichage-lien_konnie2">
                  <img src="{{asset('img/newimg/articles/kony_toure.jpeg')}}" alt="oups">
                </a>
              </div>
              <div class="card__date">
                <span class="card__date__day">17</span>
                <span class="card__date__month">Mai</span>
              </div>
              <div class="card__body">
                <div class="card__category"><a>Media</a></div>
                <h2 class="card__title"><a href="#" id="affichage-lien_konnie">Personnalit&eacute; talentueuse et polyvalente</a></h2>
                <div class="card__subtitle">Konnie TOURE</div>
                <p class="card__description">
                    Konnie Touré est une personnalité ivoirienne talentueuse et polyvalente ( animatrice radio et télé, productrice, actrice, chanteuse, scénariste et cheffe d'entreprise )...
                </p>
              </div>
              <div class="card__footer">
                <span class="icon icon--time">6 min</span>
               {{--  <span class="icon icon--comment"></span><a href="#">39 comments</a> --}}
              </div>
            </article>

            <article class="card px-0 my-xxl-0 my-4 mx-3 col-xxl col-md-5 col-12 " data-aos="zoom-in">
              <div class="card__thumb">
                <a href="" id="affichage-lien_morrison2">
                  <img src="{{asset('img/newimg/articles/morrison.jpeg')}}" alt="oups">
                </a>
              </div>
              <div class="card__date">
                <span class="card__date__day">05</span>
                <span class="card__date__month">Avril</span>
              </div>
              <div class="card__body">
                <div class="card__category"><a>Business</a></div>
                <h2 class="card__title"><a href="#" id="affichage-lien_morrison">L'homme du futur</a></h2>
                <div class="card__subtitle">Jonathan Morrison</div>
                <p class="card__description">
                    Jonathan Morrison, diplômé de l'Académie Nationale des Futures Scientifiques et Technologues de Boston, est un entrepreneur et footballeur.
                    En 2022, il a organisé avec succès le plus grand tournoi de maracana...
                </p>
              </div>
              <div class="card__footer">
                <span class="icon icon--time">15 min</span>
                {{-- <span class="icon icon--comment"></span><a href="#">13 comments</a> --}}
              </div>
            </article>

            <article class="card px-0 my-xxl-0 my-4 mx-3 col-xxl col-md-5 col-12  " data-aos="zoom-in">
              <div class="card__thumb">
                <a href="" id="lien-affichage2">
                  <img src="{{asset('img/newimg/articles/fabrice_sawegnon.jpeg')}}" alt="oups" class="">
                </a>
              </div>
              <div class="card__date">
                <span class="card__date__day">22</span>
                <span class="card__date__month">Mars</span>
              </div>
              <div class="card__body">
                <div class="card__category"><a >Business</a></div>
                <h2 class="card__title"><a href="#" id="lien-affichage">Hommes de succ&egrave;s</a></h2>
                <div class="card__subtitle">Fabrice SAWEGNON</div>
                <p class="card__description">
                    Né le 18 Janvier 1972 à Abidjan, Mr Fabrice Sawegnon , entrepreneur et PDG de l’agence de communication Voodoo Group, est aujourd’hui considéré comme l’un des barons de la communication.En 2002, Fabrice Sawegnon a réalisé...
                </p>
              </div>
              <div class="card__footer">
                <span class="icon icon--time">18 min</span>
                {{-- <span class="icon icon--comment"></span><a href="#">30 comments</a> --}}
              </div>
            </article>

            <article class="card px-0 my-xxl-0 my-4 mx-3 col-xxl col-md-5 col-12 " data-aos="zoom-in">
              <div class="card__thumb">
                <a href="#" id="affichage-lien_geekette2">
                  <img src="{{asset('img/newimg/articles/edith_yah.jpeg')}}" alt="oups">
                </a>
              </div>
              <div class="card__date">
                <span class="card__date__day">29</span>
                <span class="card__date__month">Mars</span>
              </div>
              <div class="card__body">
                <div class="card__category"><a>News</a></div>
                <h2 class="card__title"><a href="#" id="affichage-lien_geekette">La "GEEKETTE" Ivoirienne</a></h2>
                <div class="card__subtitle"> Edith Yah BROU</div>
                <p class="card__description">
                    Entrepreneur , blogueuse et chroniqueuse TV à Life Tv , Edith Yah Brou est considérée comme l’une des figures les plus importantes de la sphère technologique en Côte d’Ivoire.Elle est Surnommée...
                </p>
              </div>
              <div class="card__footer">
                <span class="icon icon--time">2 hrs</span>
                {{-- <span class="icon icon--comment"></span><a href="#">150 comments</a> --}}
              </div>
            </article>
        </div>
      </div>
    </section>
    <section id="temoignage" class="temoignage">
      <div class="container">
        <div class="mb-5 temoignage_title">
          <h2 class="text-center mb-1 fw-bold temoignage_title_titre" data-aos="fade-up">Temoignage</h2>
          <p class="w-75  mx-auto text-center temoignage_title_descrip" data-aos="fade-up"> Ces personnes qui ont expérimentés cette vision.</p>
        </div>
        <div class="row liste_temoignages">
          <div class="temoignage_x_personne my-xxl-0 my-4 mx-3 col-xl col-md-5 col-12" data-aos="zoom-in">
            <div class="personne_temoignant">
                <div class="image_personne fs-1">
                    <i class="bi bi-person-circle"></i>
                </div>
              <div class="info_personne">
                <span class="info_personne_nom"> Noho Prince</span>
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
                Grace a la JAE, j’ai appris à créer et maintenir une entreprise, j’ai appris également à gérer mon argent. Je sais dans quoi investir mon argent pour que cela me soit rentable et je sais aussi gérer les hommes.              </p>
            </div>
            <span class="guillement">
              <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                  <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
              </svg>
            </span>
          </div>
          <div class="temoignage_x_personne my-xl-0 my-4 mx-3 col-xl col-md-5 col-12" data-aos="zoom-in">
            <div class="personne_temoignant">
                <div class="image_personne fs-1">
                    <i class="bi bi-person-circle"></i>
                </div>
              <div class="info_personne">
                <span class="info_personne_nom">Dagnogo Abdoul</span>
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
                Quelques leaders de la JAE m’ont impressionné et m’ont donné une certaine confiance en moi pour pouvoir lutter.              </p>
            </div>
            <span class="guillement">
              <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                  <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
              </svg>
            </span>
          </div>
          <div class="temoignage_x_personne my-xl-0 my-4 mx-3 col-xl col-md-5 col-12" data-aos="zoom-in">
            <div class="personne_temoignant">
                <div class="image_personne fs-1">
                    <i class="bi bi-person-circle"></i>
                </div>
              <div class="info_personne">
                <span class="info_personne_nom">Thomas Oulaï</span>
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
                Je me sens très bien à la JAE. A vrai dire la JAE m’a apporté assez d’inspiration et de motivation qui chaque jour me permettre de continuer malgré les difficultés et j’en suis ravis.              </p>
            </div>
            <span class="guillement">
              <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                  <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
              </svg>
            </span>
          </div>
          <div class="temoignage_x_personne d-xl-none d-md-block  my-xl-0 my-4 mx-3 col-xl col-md-5 col-12" data-aos="zoom-in">
            <div class="personne_temoignant">
                <div class="image_personne fs-1">
                  <i class="bi bi-person-circle"></i>
                </div>
              <div class="info_personne">
                <span class="info_personne_nom">Marc Brayane</span>
                <span class="info_personne_etoile">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fille"></i>
                </span>
              </div>
            </div>
            <div class="temoignagne_text">
              <p>
                Je me sens super bien a la JAE car elle m’apporte de la motivation chaque matin lorsque je vois les postes de Miss Maro et franchement ca me pousse encore plus vers mes challenges et objectifs. En un mot je suis ravi d’être de la communauté JAE Cote d’ivoire. Merci à toute l’équipe pour tout l’effort fourni</p>
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



    <div class="popup_articles d-none" id="popup_articles">

        <div class="article">
            <a href="/" class="button_close"><i class="bi bi-x-circle-fill "></i></a>
            <div class="image_articles">
                <img src="{{asset('img/newimg/articles/fabrice_sawegnon.jpeg')}}" alt="oups" class="w-100">
            </div>
            <div class="body_article">
                <h2 class="titre">
                    Homme de succès
                </h2>
                <p class="description">
                    Notre fierté du jour est surnommé le Loup de la Communication.

                        Né le 18 Janvier 1972 à Abidjan, Mr Fabrice Sawegnon , entrepreneur et PDG de l’agence de communication Voodoo Group, est aujourd’hui considéré comme l’un des barons de la communication.

                    En 2002, <b>Fabrice Sawegnon </b> a réalisé un tour de force extraordinaire en remportant le Mondial d'or de la publicité francophone, soit le tout premier attribué à une agence africaine.

                    Mû par le désir d’aider les jeunes talents de la culture et du sport, il crée la fondation Voodo.

                    En 2019, il lance sa chaîne de télévision, Life Tv, qui devient l’une des meilleures chaînes Télé en Côte d’Ivoire.

                    Mr Fabrice Sawegnon est aussi investisseur dans plusieurs autres domaines tels que l’hôtellerie, l’immobilier, etc.

                    Il est un modèle de réussite pour la jeunesse, une source d’inspiration, un leader et un influenceur positif.

                    Saluons ensemble cet homme qui fait la fierté de l’Afrique.
                </p>
                <span class="category">BUSINESS</span>


            </div>
        </div>
    </div>
    <div class="popup_articles d-none" id="popup_article_konnie">

        <div class="article">
            <a href="/" class="button_close"><i class="bi bi-x-circle-fill "></i></a>
            <div class="image_articles">
                <img src="{{asset('img/newimg/articles/kony_toure.jpeg')}}" alt="oups" class="w-100">
            </div>
            <div class="body_article">
                <h2 class="titre">
                    Konnie TOURE
                </h2>
                <p class="description">
                    Konnie Touré est une personnalité ivoirienne talentueuse et polyvalente ( animatrice radio et télé, productrice, actrice, chanteuse, scénariste et cheffe d'entreprise ) née en 1982 à Abidjan.

                    Elle a commencé sa carrière à la radio city FM avant de travailler à Radio Nostalgie et ensuite Vibe Radio Côte d'Ivoire où elle est devenue Directrice des Programmes et Directrice Générale.
                    En 2020, elle rejoint les médias du célèbre communicant Fabrice Sawegnon.
                    Elle a lancé l'émission de loisirs LIFE WEEKEND et produit la série de comédie romantique "Un homme à marier avant 40 ans" à travers sa structure de production KonniVence.

                    Konnie TOURÉ a remporté plusieurs prix et récompenses, dont le RFI 2005 Best African Caribbean Radio Host Award et le Africa Dubaï Business Award en tant que meilleure productrice et actrice de série d'innovation.

                    Elle est considérée comme l'une des 30 femmes les plus influentes de Côte d'Ivoire.
                </p>
                <span class="category">Media</span>


            </div>
        </div>
    </div>
    <div class="popup_articles d-none" id="popup_article_morrison">

        <div class="article">
            <a href="/" class="button_close"><i class="bi bi-x-circle-fill "></i></a>
            <div class="image_articles">
                <img src="{{asset('img/newimg/articles/morrison.jpeg')}}" alt="oups" class="w-100">
            </div>
            <div class="body_article">
                <h2 class="titre">
                    Jonathan Morrison
                </h2>
                <p class="description">
                    Jonathan Morrison, diplômé de l'Académie Nationale des Futures Scientifiques et Technologues de Boston, est un entrepreneur et footballeur.

                    En 2022, il a organisé avec succès le plus grand tournoi de maracana petit poto jamais organisé en Côte d'Ivoire, la CAM TCHIN-TCHIN, qui a réuni 18 équipes et plus de 6 000 téléspectateurs pour 33 matchs. Le vainqueur a remporté une récompense de 40 000 000 FCFA.

                    Jonathan est également le fondateur de l'entreprise LE TREIIZE, qui organise des tournois de football petit poto et génère des emplois. En reconnaissance de son travail inspirant pour la jeunesse, il a reçu un prix d'encouragement au PRIMUD. Il continue de travailler sur de nouveaux projets tels que Treiize Tv, Treiize music, Morrison School of Art & Technology et Treiize Taxi.

                    Jonathan Morrison est un modèle pour la jeunesse ivoirienne.
                    Jonathan Morrison
                </p>
                <span class="category">Media</span>


            </div>
        </div>
    </div>
    <div class="popup_articles d-none" id="popup_article_geekette">

        <div class="article">
            <a href="/" class="button_close"><i class="bi bi-x-circle-fill "></i></a>
            <div class="image_articles">
                <img src="{{asset('img/newimg/articles/edith_yah.jpeg')}}" alt="oups" class="w-100">
            </div>
            <div class="body_article" style="height: 100% !important">
                <h2 class="titre">
                    Edith BROU
                </h2>
                <p class="description">
                        Entrepreneur , blogueuse et chroniqueuse TV à Life Tv , Edith Yah Brou est considérée comme l’une des figures les plus importantes de la sphère technologique en Côte d’Ivoire . Elle est Surnommée <<la geekette ivoirienne>> pour sa passion frénétique pour le numérique .
                        Edith Brou est co - fondatrice depuis 2009 de l’ONG AKENDEWA  qui mène des actions sociales grâce aux technologies et est aussi engagée pour la promotion et le leadership féminin.
                        En 2011 , et co-crée AYANA , le
                        1er Webzine féminin de Côte d’Ivoire qui traite les problématiques auxquelles les femmes sont confrontées .

                        Elle possède une start-up Africa Contents Group, et réalise aujourd'hui ses propres productions, notamment l’émission web « Divan numérique »

                        Très engagée pour les faits de sociétés elle est à l’origine de la campagne « Mousser contre Ebola>> en Août 2014 pour lutter contre la pandémie .

                        Présidente de l’association des blogueurs de Côte d’Ivoire, Edith Brou figure dans le top 50 des personnalités influentes de la Côte d’Ivoire, selon le classement de JEUNE AFRIQUE en 2015.

                        En 2019, elle figure dans le classement des 100 femmes les plus influentes de l'Afrique, selon le célèbre magazine FORBES AFRICA

                        En 2020, elle fait partie des 50 personnalités les plus influentes de l'Afrique de l'ouest, selon INFLUENCE MAGAZINE .

                        Edith Brou , une fierté pour notre continent
                </p>
                <span class="category">NEWS</span>


            </div>
        </div>
    </div>

</main>

@endsection('content')
