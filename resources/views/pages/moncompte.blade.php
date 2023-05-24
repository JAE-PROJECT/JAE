@extends('layouts.app')
@section('style')
    <style>

        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-bottom: 1rem;
            text-align: center;
        }

        .account-settings .user-profile .user-avatar {
            margin: 0 0 1rem 0;
        }

        .account-settings .user-profile .user-avatar img {
            width: 90px;
            height: 90px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            margin: 0px auto;

        }

        .account-settings .user-profile h5.user-name {
            margin: 0 0 0.5rem 0;
        }

        .account-settings .user-profile h6.user-email {
            margin: 0;
            font-size: 0.8rem;
            font-weight: 400;
            color: #9fa8b9;
        }

        .account-settings .about {
            margin: 2rem 0 0 0;
            text-align: center;
        }

        .account-settings .about h5 {
            margin: 0 0 15px 0;
            color: #8B4513 !important;

        }

        .account-settings .about p {
            font-size: 0.825rem;
        }
/*
        .form-control {
            border: 1px solid #473710 !important;
            -webkit-border-radius: 2px !important;
            -moz-border-radius: 2px !important;
            border-radius: 2px !important;
            font-size: .825rem !important;
            background: #ffffff !important;
            color: #2e323c !important;
        }

        .card {
            background: #ffffff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;
        } */
    </style>


@endsection
@section('contentdash')
                                     <div class="">
        <div class="page-header min-vh-50"
            style="background-image: url(&quot;../assets/img/bg9.jpg&quot;); transform: translate3d(0px, 13.3333px, 0px);">
            <span class="mask bg-gradient-dark opacity-6"></span>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">

                           Mon compte

                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-color_special_div py-3">

                <div class="row gutters mt-5 justify-content-center mb-5">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="account-settings">
                                    <div class="user-profile">
                                        <div class="user-avatar">
                                            @if ( $user->image_profile != NULL)
                                        <img src="  {{ asset('storage/' .$user->image_profile) }}" alt="">
                                            @else
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" srcset="">
                                            @endif
                                        </div>
                                        <h5 class="user-name">{{ $user->nom }} {{ $user->prenom }}</h5>
                                        <h6 class="user-email">{{ $user->email }}</h6>
                                    </div>
                                                <div class="about">
                                        <h5>Zone</h5>


                                                                                 @if ( $user->zone()->first())

                                        <p>{{ $user->zone()->first()->nom_zone }}</p>

                                            @else
                                         <p>Veuillez rejoindre votre zone whatsapp</p>
                                            @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 ">
                        <div class="card h-100">
                            <div class="rejoindre">
                            <form method="POST" class="php-email-form" action="{{ route('moncompte.editer') }}" enctype="multipart/form-data">
                               @method('PUT')
                                 @csrf
                                 <input type="hidden" name="users_id" value="{{ $user->id }}">
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h6 class="mb-2 custom_font_weight_site color-text-site_1 fs-4 mb-4 opacity-8">Mes informations personnelles</h6>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="nom">Nom</label>
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="" value="{{ $user->nom }}" required>
                                            @error('contact_direct')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="prenom">Prenom</label>
                                            <input type="text" class="form-control" id="prenom" name="prenom"  value="{{ $user->prenom }}" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="date_naissance">Date de naissance</label>
                                            <input type="date" class="form-control" id="date_naissance" name="date_naissance"
                                                value="{{ $user->date_de_naissance }}" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row gutters">

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="Street">Contact Whatsapp</label>
                                            <input type="text" class="form-control" id="contact" name="contact" value="{{ $user->contact }}" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="contact_direct">Contact direct</label>
                                            <input type="text" class="form-control" id="contact_direct" value="{{ $user->contact_direct }}" name="contact_direct" required>

                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="image_profile">Charger une photo</label>
                                            <input type="file"class="form-control form-control-sm" id="image_profile" name="image_profile" accept="image/*">
                                        </div>
                                    </div>
                              <!--
                                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="image_profile">Changer de zone</label>

                                              <select class="form-control" name="zone_id" id="">

                                              </select>
                                        </div>
                                    </div>
                              -->
                                </div>
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                        <div class="text-right">
                                          <a class="button-custom me-4" href="{{ route('accueil') }}">Annuler</a>

                                            <button type="submit" id="submit" name="submit"
                                                class="button-custom2">Sauvegarder</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
@endsection



