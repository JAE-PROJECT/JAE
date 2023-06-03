@extends('layouts.base')

@section('content')
    <main class="a_propos">
        <section id="banniere_apropos">
            <div class="titre_page">
                <h2>A Propos</h2>
                <!--<p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p> -->
            </div>
        </section>

       <!--  <section id="vision" class="">
            <div class="container">
                <div class="titre_section">
                    <h2>Vision</h2>
                </div>
                <div class="genese_explication row align-items-center">
                    <div class="vision_explication_text col-12 pb-4 col-lg-6 " data-aos="fade-right">
                        <h3 class="my-3 fw-lighter text-center">Elaboration</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde nostrum culpa necessitatibus eveniet, voluptate tempora? Mollitia cumque
                            quod rem aliquid ex commodi ipsum vero dignissimos perferendis, labore culpa impedit esse!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, porro vitae labore provident sequi expedita quam velit. Eum amet voluptatem dignissimos tempora, quae pariatur dicta atque culpa sint accusantium nam?
                        </p>
                    </div>
                    <div class="genese_explication_img col-12 pb-4 col-lg-6 align-self-center" data-aos="fade-left">
                        <img src="asset('img/bg9.jpg')" alt="Oups l'image ne s'est pas affiché">
                    </div>
                </div>
                <div class="genese_explication row align-items-center">
                    <div class="vision_explication_text col-12 pb-4 col-lg-6 order-2" data-aos="fade-left">
                        <h3 class="my-3 fw-lighter text-center">Elaboration</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde nostrum culpa necessitatibus eveniet, voluptate tempora? Mollitia cumque
                            quod rem aliquid ex commodi ipsum vero dignissimos perferendis, labore culpa impedit esse!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, porro vitae labore provident sequi expedita quam velit. Eum amet voluptatem dignissimos tempora, quae pariatur dicta atque culpa sint accusantium nam?
                        </p>
                    </div>
                    <div class="genese_explication_img col-12 pb-4 col-lg-6 align-self-center order-1" data-aos="fade-right">
                        <img src="asset('img/bg9.jpg')" alt="Oups l'image ne s'est pas affiché">
                    </div>
                </div>
            </div>

        </section> -->
        <section id="fondateur" class="bg-color">
            <div class="titre_section" data-aos="zoom-out">
                    <h2>Fondateur</h2>
            </div>
            <div class=" fondateur_contenu container">
                <div class="row">
                    <div class="presentation_img col-12 col-lg-5 " data-aos="fade-left">
                        <figure>
                            <img src="{{asset('img/jos.jpg')}}" class="" alt="Description de l'image">

                        </figure>
                    </div>
                    <div class="presentation_text col-12 col-lg-7" data-aos="fade-right">

                        <div class="presentation_text_palmares" id="content_leado">
                            <span class="presentation_text_nom fs-2" >Jean Othniel SILUE</span>
                            Il existe aujourd’hui une race de personnes qui se lèvent pour la révolution en Afrique, elles ont cette soif de hisser notre continent bien haut partout dans le monde.
                            Notre Fierté Africaine du jour se porte sur un homme qu'on appelle affectueusement "Can't Fail Boy" : Monsieur JEAN-OTHNIEL SILUÉ.
                            Ce jeune homme âgé de 24 ans est de nationalité ivoirienne 🇨🇮 et réside aux États-Unis où il étudie le management option entrepreneuriat.
                            CEO de G-CAPITAL LLC déclarée dans l’Etat du Wyoming, USA, qui est une société de capital-risque, d’investissement privé et de management d’entreprise. Elle détient en première position dans son portefeuille, la société Risefire, spécialisée en communication et assistance en Marketing digital par l’utilisation de l’Intelligence Artificielle.
                            Aussi il est le CEO de MoneyPool, une holding opérant dans le domaine de la finance décentralisée, avec en son sein, The Billion’s Club qui est une école de formation en expertise de marchés financiers.
                            Il est également le leader du réseau JEUNE AFRIQUE ENTREPRENANTE  réunissant des centaines de jeunes entrepreneurs africains dans plusieurs pays (Côte d’Ivoire, Cameroun, Congo, France, etc.) dans le but de révéler leur potentiel et d’instaurer un environnement favorable à partir d’un agenda social, éducatif et financier qui se déploie sur toute la décennie.
                            Le leader, Jean-Othniel SILUÉ, est une fierté pour notre continent, une source de motivation pour notre jeunesse africaine, un acteur positif de notre société et un modèle pour plusieurs.
                        </div>
                         <button id="showButton" onclick="showMore()" class="w-100 text-start  " style="padding: 0px 40px 10px 40px; text-decoration:underline;">Voir plus</button>
                        <div class="presentation_reseaux_sociaux container mt-3 ">
                            <!--<div class="align-self-center">
                                <span class="fw-bold">Lorem, ipsum dolor.</span>
                            </div>-->
                            <div>
                                <a href="https://twitter.com/" class="twitter" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.facebook.com/" class="facebook" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="titre_section">
                    <h2>A Propos De Nous</h2>
                </div>

                <div class="row content">
                <div class="col-lg-6">
                    <p>
                    La Jeune Afrique Entreprenante est une communauté comptant en son sein plus de 1300 membres réparties dans le monde.
                    Né en Mai 2021, elle est fondée par le leader Jean-Othniel Silué.
                    Elle fait ses premiers pas sur l'application Telegram en se créant une communauté qui asssite à des formations et des conférences gratuites. Pendant l'année 2022 elle connaît une ascension fulgurante qui la fera impacter et changer la vie de plusieurs jeunes.
                    En 2022, la JAE lance son programme d'accompagnement dénommé Meet The Leader, programme au travers duquel elle coach et suit de façon personnel les membres de sa communauté et ce de façon gratuite.
                    Sur des questions de :
                    </p>
                    <ul>
                    <li><i class="bi bi-check2-all"></i> Stratégies en business </li>
                    <li><i class="bi bi-check2-all"></i> Recherche de skills </li>
                    <li><i class="bi bi-check2-all"></i> Besoin de financement</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                    Tous les membres de la communauté était réuni sur la plateforme Telegram. En Septembre 2022, dans l'optique d'optimiser son impact en suivant au mieux ses membres, les leaders créent le système de répartition par zone.
                    Une zone étant le regroupe par pays des membres de la JAE.
                    C'est ainsi que naît:
                    </p>
                    <ul>
                    <li><i class="bi bi-check2-all"></i> La zone Côte d'Ivoire 🇨🇮  </li>
                    <li><i class="bi bi-check2-all"></i> La zone Cameroun 🇨🇲  </li>
                    <li><i class="bi bi-check2-all"></i> La zone Congo 🇨🇩 </li>
                    <li><i class="bi bi-check2-all"></i> La zone Burkina Faso 🇧🇫  </li>
                    <li><i class="bi bi-check2-all"></i> La zone Benin 🇧🇯  </li>
                    <li><i class="bi bi-check2-all"></i> La zone France 🇫🇷</li>
                    </ul>
                    <a href="{{route('dashboard')}}" class="btn-learn-more">Ma Zone</a>
                </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
         <!-- ======= vision_1 Section ======= -->
         <section id="vision_1" class="vision_1 bg-color">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4" data-aos="fade-up">
                    <div class="col-lg-4">
                        <img src="{{asset('img/newimg/vision_1.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8">
                        <div class="content ps-lg-5">
                        <h3>Vision De La JAE</h3>
                        <p>
                        Notre vision est de repositionner l'Afrique. N'entendez pas changer la position géographique du continent, mais plutôt vous aider à développer votre potentiel, aiguiser votre personnalité, assumer vos responsabilités, affiner vos connaissances afin que nous devenions les décideurs de notre continent. Ceci est notre mission: FAIRE DE VOUS, PAR L'EXCELLENCE ET LE TRAVAIL ENCADRÉ, LES BÂTISSEURS D'UNE AFRIQUE FORTE DANS LES 50 prochaines années.
                        Le blason de l'Afrique, C'EST NOUS. Nous sommes l'image de l'Afrique, c'est pourquoi nous travaillons à vous aider dans votre développement.
                        Nous travaillons sur 3 volets avec les objectifs suivants:
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Le volet social : en vous aidant à développer des valeurs telles que la sociabilité, l'entraide, la solidarité... qui vous ouvriront des portes.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Le volet éducatif : en vous aidant à acquérir les compétences nécessaires à votre épanouissement par le travail.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Le volet financier : en mettant à votre disposition des stratégies et des systèmes qui financeront vos projets et feront exploser vos potentiels.</li>
                        </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End vision_1 Section -->
        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="titre_section">
            <h2 class="mb-2">Che f De Zone</h2>
            {{-- <p class="text-center">Uscipit alias euia fugiat sit</p> --}}
            </div>

            <div class="row">

            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="member row">
                <div class="col-4"><img src="{{asset('img/chefdezone/chefdezone_5.jpeg')}}" class="img-fluid" alt="" style="width:100%; "> </div>
                <div class="member-info col-8">
                    <h4>Alex-Wilfried DIGBEU</h4>
                    <span>Chef JAE Cote d'Ivoire</span>
                    <p>CEO et POOL BANK
                       General Manager at MONEYPOOL
                       570 Membres
                    </p>

                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="member row">
                <div class=" col-4"><img src="{{asset('img/chefdezone/chefdezone_4.jpeg')}}" class="img-fluid" alt=""></div>
                <div class="member-info col-8">
                    <h4>Esmeralda AMESSAN</h4>
                    <span>Chef JAE France 🇫🇷</span>
                    <p>Étant étudiante en gestion d’entreprise à Paris, je suis Businesswoman, Entrepreneur dans l’événementiel: PDG de La Parole Planner, qui est une entreprise à taille humaine spécialisée dans la planification et la coordination d’événements privatifs et de mariages. Je suis aussi Créatrice de contenus et DG de Shekina Traiteur qui est une structure de restauration en ligne.
                    Ma zone compte 32 Friends.</p>

                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="member row">
                <div class=" col-4"><img src="{{asset('img/chefdezone/chefdezone_3.jpeg')}}" class="img-fluid" alt=""></div>
                <div class="member-info col-8">
                    <h4>Boris AMANG</h4>
                    <span>Chef JAE Cameroun</span>
                    <p>Un jeune entrepreneur qui est à la tête des entreprises Elam Energy et Elam invest
                    Qui exercent dans les énergies renouvelables et des placements financiers dans divers domaines (Agriculture, immobilier, distribution..etc. )depuis 2019
                    Il est engagé dans le mouvement de la JAE et est responsable de la communauté camerounaise  qui est au nombre de 120 personnes  aujourd'hui</p>

                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="member row">
                <div class="col-4"><img src="{{asset('img/chefdezone/chefdezone_1.jpeg')}}" class="img-fluid" alt=""></div>
                <div class="member-info col-8">
                    <h4>Abdoul Hamid GARBA</h4>
                    <span>Chef JAE Benin</span>
                    <p>Je suis étudiant en deuxième année de comptabilité et entrepreneur web dans le domaine du copywriting ,le community management ,rédaction web seo,E-commerce avec une année d’expérience et j’adore le domaine du digital. je possède l’agence de communication digitale Iroko Africa et je suis le chief de la zone du Bénin.  Et nous sommes au nombre de 15</p>

                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="member row">
                <div class="col-4"><img src="{{asset('img/chefdezone/chefdezone_2.jpeg')}}" class="img-fluid" alt=""></div>
                <div class="member-info col-8">
                    <h4>Germain ruan KATAKI</h4>
                    <span>Chef JAE RDC</span>
                    <p>CEO mutuelles des ingenieur,
                    coach en develloppement personnel et professionel
                    Germainruansniper@gmail.com</p>

                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="member row">
                <div class="col-4"><img src="{{asset('img/chefdezone/chefdezone_6.jpeg')}}" class="img-fluid" alt=""></div>
                <div class="member-info col-8">
                    <h4>Hugue Arnaud BAH </h4>
                    <span>Chief Manager</span>
                    <p>Responsable de DPS et AfriExchanger zone Sénégal puis de G-CONNEXT, des structures spécialisées dans la Cryptomonnaies, la monnaie électronique et bien d'autres.
                    Au sein de la JAE mon travail consiste à coordonner et superviser les activités des Chiefs dans leurs différentes zones.</p>

                </div>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Team Section -->

    </main>

@endsection('content')
