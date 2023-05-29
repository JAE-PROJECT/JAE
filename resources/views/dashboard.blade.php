@extends('layouts.app')

@section('contentdash')
    <?php
       /* $user_auth = DB::select('select * from users where id='.Auth()->id);
       dd($user_auth); */
    ?>
    <div class="sub_entete flex justify-between bg-gray-700 py-5 h-10 container pl-10 text-white">
        <div class="sub_entete-lien_wha flex items-center">
            <a class="" href=""><i class="bi bi-whatsapp"></i> Rejoindre Ma Zone</a>
        </div>
        <div class="flex items-center ">
            <p class="mx-2 text-light">Utilisateur</p>
            <img class="w-10 rounded-full " src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Photo de Profil" onclick="window.location.href='/mon-compte'">
        </div>
    </div>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Programmes</h1>
        </div>
    </header>




@endsection




