        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{ route('admin.index') }}" class="app-brand-link">
              <span class="app-brand-logo demo">
              <img src="{{ asset('assets/img/logos/logo_header.png') }}" class="img-fluid" height="30px" alt="">
              </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1 mt-5">
            <!-- Dashboard -->
            <li class="menu-item {{ request()->is('admin') ? 'active' : ' '}}">
              <a href="{{ route('admin.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Tableau de bord</div>
              </a>
            </li>

            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Gestions des </span></li>

            <!-- JAE -->
            <li class="menu-item {{ request()->is('admin/user') ? 'active' : ' '}}">
              <a href="{{ route('user.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">JAE</div>
              </a>
            </li>

            <!-- ZONE -->
            <li class="menu-item {{ request()->is('admin/zone') ? 'active' : ' '}}">
              <a href="{{ route('zone.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Groupe Whatsapp</div>
              </a>
            </li>

              <!-- Evennement-->
            <li class="menu-item {{ request()->is('admin/type') ? 'active' : ' '}}">
              <a href="{{ route('type.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Type d'evènnements</div>
              </a>
            </li>
               <!-- Evennement-->
            <li class="menu-item {{ request()->is('admin/event') ? 'active' : ' '}}">
              <a href="{{ route('event.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Evennement</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->
