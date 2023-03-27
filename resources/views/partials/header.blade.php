    <header>
      <div class="nava ">
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
          <div class="menu_composant">
            <ul class="">
              <li><a href="/" class="active">Accueil</a></li>
              <li><a href="{{route('apropos')}}" class="">A Propos</a></li>
              <li><a href="{{route('programme')}}">Nos Programmes</a></li>
              <li><a href="{{route('forum')}}">Forum</a></li>
              <li><a href="{{route('blog')}}">Blog</a></li>
              <li><a href="{{route('rejoindre')}}">Nous Rejoindre</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>