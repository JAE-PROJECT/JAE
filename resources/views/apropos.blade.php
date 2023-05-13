@extends('layouts/base')

@section('content')
    <main class="a_propos">
        <section id="banniere_apropos">
            <div class="titre_page">
                <h2>A Propos</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
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
                        <img src="{{asset('img/bg9.jpg')}}" alt="Oups l'image ne s'est pas affiché">
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
                        <img src="{{asset('img/bg9.jpg')}}" alt="Oups l'image ne s'est pas affiché">
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
                            <img src="{{asset('img/fake_lead1.png')}}" alt="Description de l'image">

                        </figure>
                    </div>
                    <div class="presentation_text col-12 col-lg-7" data-aos="fade-right">

                        <p class="presentation_text_palmares">
                            <span class="presentation_text_nom fs-1">John Doe</span>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis molestiae sapiente eius corporis porro eligendi aut laborum consequuntur, voluptas quia eveniet rerum facere repudiandae iure mollitia. Illo quas error iusto.
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, atque? Pariatur eius consectetur quam, odio at tempora. Ea totam id corrupti fugiat doloremque accusamus, minus ex distinctio vero quisquam sed!
                        </p>
                        <div class="presentation_reseaux_sociaux container mt-3 ">
                            <div class="align-self-center">
                                <span class="fw-bold">Lorem, ipsum dolor.</span>
                            </div>
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                    </p>
                    <ul>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="#" class="btn-learn-more">Voir Plus</a>
                </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
         <!-- ======= vision_1 Section ======= -->
         <section id="vision_1" class="vision_1 bg-color">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4" data-aos="fade-up">
                    <div class="col-lg-4">
                        <img src="{{asset('img/about.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8">
                        <div class="content ps-lg-5">
                        <h3>Vision De La JAE</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
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
            <h2 class="mb-2">Chef De Zone</h2>
            <p class="text-center">Uscipit alias euia fugiat sit</p>
            </div>

            <div class="row">

            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{asset('img/team/lead_1.jpg')}}" class="img-fluid" alt="" style="width:100%; "> </div>
                <div class="member-info">
                    <h4>Henry Danbgedji</h4>
                    <span>Cameroon</span>
                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                    <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{asset('img/team/lead_2.jpg')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>John Doe</h4>
                    <span>France</span>
                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                    <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{asset('img/team/lead_3.jpg')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>William Ouatara</h4>
                    <span>C&ocirc;te D'ivoire</span>
                    <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                    <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{asset('img/team/lead_4.jpg')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Konan Aristide</h4>
                    <span>Etats-Unis</span>
                    <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                    <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                    </div>
                </div>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Team Section -->

    </main>

@endsection('content')
