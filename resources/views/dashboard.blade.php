@extends('layouts.app')

@section('contentdash')
    <?php
        use Carbon\Carbon;
        $user = auth()->user();
        $user_auth = DB::select('select * from users where id='.Auth()->id());
        $programmes = DB::select('select * from event');
       /* dd($programmes); */
        $nom_zone = auth()->user()->zone()->first()->nom_zone;
        $aujourdHui = Carbon::now()->toDateString();
        $heureActuelle = Carbon::now()->toTimeString();
        $path_wha = DB::table('zone')->join('users', 'zone.id', '=', 'users.zone_id')
                            ->select('lien_wha')
                            ->where('nom_zone',$nom_zone)
                            ->first();



    ?>
    <div class=" sub_entete  bg-gray-700 py-3 h-15 text-white">
        <div class=" container sub_entete_items flex justify-between">
             <div class="sub_entete-lien_wha flex items-center ">
                <a class="  p-2 hover:text-gray" href="{{$path_wha->lien_wha}}"><i class="bi bi-whatsapp"></i> Rejoindre Ma Zone</a>
             </div>
            <div class="flex items-center justify-end">

                        <p class="mx-2 text-white">{{ auth()->user()->nom  }} {{auth()->user()->prenom}}</p>
                        @if ( $user->image_profile != NULL)
                                        <img class="rounded-full" src=" {{ asset('storage/'.str_replace('public/u','u', $user->image_profile)) }}" alt="Photo de Profil" onclick="window.location.href='/mon-compte'" style="height: 3rem;width:3rem; ">
                                            @else
                                        <img class="rounded-full w-10" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Photo de Profil" srcset="" onclick="window.location.href='/mon-compte'" style="height: 3rem;width:3rem;">
                                            @endif

                </div>
        </div>

    </div>
    <header class="bg-white shadow header_dash">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Programmes</h1>
        </div>
        <div class="menu_program_dash sm:fs-10">
            <a href="{{ route('dashboard', ['statut' => 'a_venir']) }}" id="tri_dash" class="@if(request('statut') === 'a_venir') tri_dash @endif mx-3" >À Venir</a>
            <a href="{{ route('dashboard', ['statut' => 'en_cours']) }}" id="tri_dash" class="@if(request('statut') === 'en_cours') tri_dash @endif mx-3" >En Cours</a>
            <a href="{{ route('dashboard', ['statut' => 'termine']) }}" id="tri_dash" class="@if(request('statut') === 'termine') tri_dash @endif mx-3 " >Terminé</a>

        </div>
    </header>
    <div class="body_programme">
        <?php
                $query = DB::table('event')
                ->select('*');

                if (isset($_GET['statut'])){
                if ($_GET['statut'] === 'termine') {
                $query->whereDate('event_date', '<', $aujourdHui);
            } elseif ($_GET['statut'] === 'en_cours') {
                $query->whereDate('event_date', '=', $aujourdHui);
            } elseif ($_GET['statut'] === 'a_venir') {
                $query->whereDate('event_date', '>', $aujourdHui);
            }
            }
            $programmes = $query->get();
            /* dd($programmes ); */
            ?>
        <div class="evenement_section  m-5 sm:m-0 grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4 ">

            @foreach ($programmes as $program )
                <?php
                     $dateProgramme = (Carbon::parse($program->event_date))->toDateString();
                     $heureProgramme = (Carbon::parse($program->event_heure))->format('H:i:s');

                ?>
                <div class="card_event shadow ">
                    <div class="img_event p-2">
                        <img src="{{asset('assets/img/bg9.jpg')}}" alt="">{{--
                        <span class="mask bg-gradient-dark p-2 opacity-6 hover:opacity-"></span> --}}
                    </div>
                    <div class="body_card mt-2 container ">
                        <div class="flex flex-row justify-between my-2">
                            <p class="titre_event self-center text-bold">{{$program->event_titre}}</p>
                            {{-- {{$program->statut = "fermé"}} --}}
                            @if ($dateProgramme < $aujourdHui)
                                <span class="staut_event self-center "> <i class="bi bi-circle-fill text-gray-700 mr-2"></i>Dépassé</span>
                            @elseif($dateProgramme > $aujourdHui && $dateProgramme!= $aujourdHui)
                                <span class="staut_event self-center "> <i class="bi bi-circle-fill text-gray-700 mr-2"></i>A Venir</span>

                            @elseif ($dateProgramme == $aujourdHui && $heureProgramme >= $heureActuelle )
                                <span class="staut_event self-center "> <i class="bi bi-circle-fill text-danger mr-2"></i>En Cours</span>
                            @endif

                        </div>
                        <p class="card_desc">
                            {{$program->event_description}}
                         </p>

                         @if ($dateProgramme < $aujourdHui)
                            <button class="my-3 event_participation_disable " >Fermé <i class="bi bi-eye-slash-fill pt-2"></i></button>
                        @elseif ($dateProgramme == $aujourdHui && $heureProgramme < $heureActuelle )
                        <form action="{{ route('inscription_programme') }}" method="POST">
                            @csrf
                            <input type="hidden" name="event_id" value="{{ $program->id }}">
                            <button class="my-3 event_participation">S'inscrire <i class="bi bi-eye-fill pt-2"></i></button>
                        </form>
                        @elseif ($dateProgramme == $aujourdHui && $heureProgramme >= $heureActuelle )
                            <button class="my-3 event_participation_disable">Trop tard <i class="bi bi-eye-slash-fill pt-2"></i></button>
                        @elseif($dateProgramme > $aujourdHui && $dateProgramme!= $aujourdHui)
                            <form action="{{ route('inscription_programme') }}" method="POST">
                                @csrf
                                <input type="hidden" name="event_id" value="{{ $program->id }}">
                                <button class="my-3 event_participation">S'inscrire <i class="bi bi-eye-fill pt-2"></i></button>
                            </form>

                            @endif



                    </div>

                </div>
            @endforeach
            @if ($programmes->isEmpty())
                <div class="text-gray-500"> Aucun programme {{ str_replace(['_','a'], [' ','à'], $_GET['statut']) }}</div>
            @endif
        </div>

    </div>

    @if (session('already_inscrip_program'))
                        <div id="already_inscrip_program" class="">
                            <div class="">
                                <p class="nom_user fs-2">Hello {{ auth()->user()->nom }}</p>
                                <span class="warning_inscrip"><i class="bi bi-exclamation-circle-fill m-2 exclamation"></i> {{session('already_inscrip_program')}}</span>
                            </div>


                        </div>
                    @endif




@endsection




