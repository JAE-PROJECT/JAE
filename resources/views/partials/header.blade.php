<header>
  <div class="nava">
    <nav class="navbar-head">
      <!-- partie du logo -->
      <div class="img-logo">
        <a class="" href="/"><img src="{{asset('img/logo_header.png')}}" alt="Logo"></a>
      </div>
      <!-- partie du menu hamburger -->
      <div class="bouton-menu">
        <button class="menu-toggle" onclick="toggleMenu()">
          <hr class="hr1">
          <hr class="hr2">
          <hr class="hr3">
        </button>
      </div>
      <!-- partie du menu de navigation -->
      <div class="menu_composant">
        <ul class="">
          <li><a href="/" class='{{$statut_menu_ac?? ""}}'>Accueil</a></li>
          <li><a href="{{route('apropos')}}" class='{{$statut_menu_ap?? ""}}'>A Propos</a></li>

              <li><a href="{{route('programme')}}" class='{{$statut_menu_pr?? ""}}'>Nos Programmes</a></li>
              <li><a href="{{route('actualite')}}" class='{{$statut_menu_actu?? ""}}'>Actualit&eacute;</a></li>

          {{-- <li><a href="{{route('forum')}}">Forum</a></li>
          <li><a href="{{route('blog')}}">Blog</a></li> --}}
          @guest
          <div class="bouton_des_inscrtip">
            <li><a type="button" class="btn-rejoindre p-3  rounded-pill" href="{{route('rejoindre')}}"><i class="fas fa-users"></i>Nous Rejoindre</a></li>
            <li><a type="button" class="btn-rejoindre p-3  rounded-pill" href="/login"><i class="bi bi-box-arrow-in-right"></i>Connexion</a></li>
          </div>
          @endguest
          @auth
            <div class="d-flex">
              <li></li>
            </div>
            <div>
                <?php $routedashboard="{{route('dashboard')}}"  ?>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a type="button" class="btn-dashboard" class="" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false" href="{{route('dashboard')}}" onclick="window.location.href='/dashboard'"><i class="bi bi-person-fill"></i>Mon Espace</a>

                    {{-- <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" >
                        <i class="material-icons opacity-6 me-2 text-md">&nbsp;</i>
                        Mon espace personnel
                        <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                    </a> --}}
                    <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                        aria-labelledby="dropdownMenuPages">

                        <div class="d-none d-lg-block">
                            <h6 class="dropdown-header color-text-site_1-sombre font-weight-bolder d-flex align-items-center px-1">
                                Conférences
                            </h6>
                            <a href="{{ route('nos-programmes.historique') }}" class="dropdown-item border-radius-md">
                                <span>Mon historique de participation</span>
                            </a>

                            <h6 class="dropdown-header  color-text-site_1-sombre font-weight-bolder d-flex align-items-center px-1 mt-3">
                                Mon compte
                            </h6>
                            <a href="{{ route('moncompte') }}" class="dropdown-item border-radius-md">
                                <span>Mes infos</span>
                            </a>
                            <form action="{{ route('logout') }}" method="post">
                            @csrf
                             <button type="submit" class="dropdown-item border-radius-md">
                                <span>Se déconnecter</span>
                            </button>
                            </form>
                        </div>

                        <div class="d-lg-none">
                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                Conférences
                            </h6>
                            <a href="{{ route('nos-programmes.historique') }}" class="dropdown-item border-radius-md">
                                <span>Mon historique de participation</span>
                            </a>

                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                Mon compte
                            </h6>
                            <a href="{{ route('moncompte') }}" class="dropdown-item border-radius-md">
                                <span>Mes infos</span>
                            </a>
                            <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item border-radius-md">
                                <span>Se déconnecter</span>
                            </button>
                            </form>
                        </div>
                    </div>
                </li>
            </div>
          @endauth


        </ul>
      </div>
    </nav>
  </div>
</header>
