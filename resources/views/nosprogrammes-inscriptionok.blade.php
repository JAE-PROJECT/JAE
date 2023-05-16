@extends('layouts.base')
@section('style')
@endsection
@section('content')
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75"
            style="background-image: url(&quot;../assets/img/bg9.jpg&quot;); transform: translate3d(0px, 13.3333px, 0px);">
            <span class="mask bg-gradient-dark opacity-6"></span>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">

                            Felicitation ! vous êtes inscrit, vous recevrez un mail de confirmation contenant une carte d'invitation

                        </h1>
                        <p class="lead mb-4 text-white opacity-8"> Vous serez rédirigé vers la page de nos programmes ! </p>
                        <button type="submit" class="btn bg-white text-dark">
                            Patientez pendant un instant...</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <!-- Section with four info areas left & one card right with image and waves -->
        <section class="py-7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="row justify-content-start">
                            <div class="col-md-12">
                                <div class="info">
                                    <h5>Mes informations personnelles</h5>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="nom" class="form-label">Nom</label>
                                            <input type="text" class="form-control" id="nom" disabled value="{{ Auth::user()->nom }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="prenom" class="form-label">Prénom</label>
                                            <input type="text" class="form-control" id="prenom" disabled value="{{ Auth::user()->prenom }}">
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                disabled value="{{ Auth::user()->email }}">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="contact_direct" class="form-label">Contact direct</label>
                                            <input type="text" class="form-control" id="contact_direct" disabled value="{{ Auth::user()->contact_direct }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="contact_wha" class="form-label">Contact whatsapp</label>
                                            <input type="text" class="form-control" id="contact_wha" disabled value="{{ Auth::user()->contact }}">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row justify-content-start">
                            <div class="col-md-12">
                                <div class="info">
                                    <h5>Recapitulatif de l'évènnement</h5>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="type" class="form-label">Type</label>
                                            <input type="text" class="form-control" id="type" value="{{-- $event->type->eventtype_titre --}}" disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="titre" class="form-label">Titre</label>
                                            <input type="text" class="form-control" id="titre" disabled value="{{ $event->event_titre }}">
                                        </div>
                                         <div class="col-md-6">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="date" class="form-control" id="date" value="{{ $event->event_date }}" disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="heure" class="form-label">Heure</label>
                                            <input type="time" class="form-control" id="heure" disabled value="{{ $event->event_heure }}">
                                        </div>


                                        <div class="col-md-12">
                                            <div class="mb-3">
                                              <label for="descriptif" class="form-label">Bref descriptif</label>
                                              <textarea class="form-control" name="" id="" rows="3" disabled> {{ Str::limit($event->event_description,300, '...') }}</textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Section with four info areas left & one card right with image and waves -->

    </div>
@endsection

@section('script')
<script>
    setTimeout(function(){ window.location.href = '{{route('programme')->with('success_inscrip_program', 'Vous êtes bien inscrit à ce programme')}}'; }, 6000);
</script>";
@endsection
