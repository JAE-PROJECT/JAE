@extends('layouts.base')
@section('style')
    <style>
        /* Styles personnalisés pour éviter les conflits avec Bootstrap */
.custom-header-bg {
    background-color: #343a40;
    position: relative;
}

.custom-text-white {
    color: #fff;
}

.custom-bg-opacity-6 {
    opacity: 0.6;
}

.custom-page-header {

    padding: 3rem 0;
    margin-bottom: 2rem;
}
.icon-verification{

}
.icon-verification i{
    position: absolute;
    top:0; left: 50%;
    transform: translateX(-50%);
    font-size: 40px;
    color: green;
}

.min-vh-75 {
    min-height: 75vh;
}

.text-center {
    text-align: center;
}

.my-auto {
    margin-top: auto;
    margin-bottom: auto;
}

.custom-lead {
    font-size: 1.25rem;
}
.titre1{
    font-weight: lighter;
    margin-top: 10px ;
}
.titre2{
    opacity: .7;
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: all 0.15s ease-in-out;
}

.custom-btn-light {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.custom-btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5;
}
.card{
    position: relative;
}

    </style>
@endsection
@section('content')
    <div class="custom-header-bg">
        <div class="custom-page-header min-vh-50 d-flex" style="background-image: url('../img/bg9.jpg');">

                    <div class="col-lg-8 text-center mx-auto align-self-center ">
                        <h1 class="custom-text-white fs-3 titre1">
                            Felicitation ! vous êtes inscrit, vous recevrez un mail de confirmation contenant une carte d'invitation
                        </h1>
                        <p class="custom-lead mb-4 text-white titre2"> Vous serez redirigé vers la page de nos programmes ! </p>
                        <button type="submit" class="btn custom-btn-light custom-text-dark">Patientez pendant un instant...</button>
                    </div>

        <div class="icon-verification">
                    <i class="bi bi-check-circle-fill"></i>
                </div>
        </div>

    </div>
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6 mb-4">
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
@php
    $excludeHeaderFooter = true;
@endphp
@section('script')
 <script>
    setTimeout(function(){ window.location.href = '{{route('programme')}}'; }, 6000);
</script>
@endsection
