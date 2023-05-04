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
          <li><a href="/" class="active">Accueil</a></li>
          <li><a href="{{route('apropos')}}" class="">A Propos</a></li>
          <li><a href="{{route('programme')}}">Nos Programmes</a></li>
          <li><a href="{{route('forum')}}">Forum</a></li>
          <li><a href="{{route('blog')}}">Blog</a></li>
          @guest
          <div class="d-flex">
            <li><a type="button" class="btn-rejoindre p-3  rounded-pill" href="{{route('rejoindre')}}"><i class="fas fa-users"></i>Nous Rejoindre</a></li>
            <li><a type="button" class="btn-rejoindre p-3  rounded-pill" href="/login">Connexion</a></li>
          </div>
          @endguest
          @auth
            <div class="d-flex">
              <li><a type="button" class=" btn-dashboard  " href="/dashboard"><i class="bi bi-person-fill"></i>Tableau de bord</a></li>
            </div>
          @endauth
          

        </ul>
      </div>
    </nav>
  </div>
</header>
