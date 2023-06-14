<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/styledashboarduser.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/material-kit.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/pbootstrap.css') }}">
    {{-- icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('style')
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KLZZ6W7HPR"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-KLZZ6W7HPR');
</script>

<body class="antialiased">

    <div class=" flex justify-between">

        <nav class="bg-color w-15 " style="height: calc(100vh+100%)">
            <div class=" py-4 sm:px-6 lg:py-8">
                <div class="flex flex-col justify-between " style="align-content:space-between; height:100vh">
                    <div class="flex flex-col items-center justify-between">
                        <div class="flex-shrink-0">
                            <a href="/"><img class="w-100" src="{{ asset('img/logo_header.png') }}"
                                    alt=""></a>
                        </div>
                        <div class=" md:block py-6">
                            <div class=" flex flex-col items-baseline justify-between space-y-6">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="{{ route('dashboard') }}" data-page="dashboard"
                                    class="text-white text-center w-100 items_menu rounded-md px-3 py-2 text-sm font-medium"
                                    aria-current="page"><i class="bi bi-border-style sm:block md:inline "></i>
                                    Programme</a>
                                <a href="{{ route('moncompte') }}" data-page="mon-compte"
                                    class="text-gray-300 text-center w-100 items_menu hover:text-white rounded-md px-3 py-2 text-sm font-medium"><i
                                        class="bi bi-person-fill-gear block md:inline"></i> Mon Compte</a>
                                <a href="{{ route('nos-programmes.historique') }}" data-page="mon-historique"
                                    class="text-gray-300 text-center w-100 items_menu  hover:text-white rounded-md px-3 py-2 text-sm font-medium"><i
                                        class="bi bi-clock-history block md:inline"></i> Mon Historique</a>

                            </div>
                        </div>
                    </div>
                    <div class=" md:block flex self-end">
                        <div class=" flex items-center md:ml-3">

                            <!-- Profile dropdown -->
                            <div class="relative md:ml-3">


                                <!--
                                Dropdown menu, show/hide based on menu state.

                                Entering: "transition ease-out duration-100"
                                    From: "transform opacity-0 scale-95"
                                    To: "transform opacity-100 scale-100"
                                Leaving: "transition ease-in duration-75"
                                    From: "transform opacity-100 scale-100"
                                    To: "transform opacity-0 scale-95"
                                -->
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" href="{{ route('logout') }}"
                                        class="dropdown-item border-radius-md button items-center "
                                        style="
                                        background-color: rgb(68, 47, 20);
                                        padding:10px;
                                        border-radius: 5px; color:rgb(203, 202, 202);

                                        ">Se
                                        D&eacute;connecter</button>

                                </form>


                            </div>
                        </div>
                    </div>
                    {{-- <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        </button>
                    </div> --}}
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            {{--  <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Reports</a>
                </div>
                <div class="border-t border-gray-700 pb-3 pt-4">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-3">
                    <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                    <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                    </div>
                    <button type="button" class="ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                    </button>
                </div>
                <div class="mt-3 space-y-1 px-2">
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
                </div>
                </div>
            </div> --}}
        </nav>


        <main class=" w-100">
            {{-- <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8"> --}}
            @yield('contentdash')
            {{-- </div> --}}
        </main>
    </div>


</body>
<script>
    // Dans votre fichier JavaScript
    document.addEventListener("DOMContentLoaded", function() {
        var currentPath = window.location.pathname;
        var menuItems = document.getElementsByClassName("items_menu");

        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            var page = menuItem.getAttribute("data-page");

            if (currentPath === "/" + page) {
                menuItem.classList.add("activedash");
                break; // Si vous souhaitez arrêter la boucle après avoir trouvé l'élément actif
            }
        }
    });

    // Fonction pour changer le background d'un élément et restaurer les autres
    function changeBackground(element) {
        // Récupérer tous les éléments avec la classe "highlight"
        var highlightedElements = document.getElementsById('tri_dash');

        // Restaurer le fond des éléments précédemment mis en évidence
        for (var i = 0; i < highlightedElements.length; i++) {
            highlightedElements[i].classList.add('tri_dash');
        }

        // Appliquer le fond mis en évidence à l'élément actuel
        element.classList.remove('tri_dash');
    }

    const elementId = "already_inscrip_program"; // ID de l'élément spécifique
    const className = "already_inscrip_program"; // Nom de la classe à ajouter

    const element = document.getElementById(elementId); // Récupère l'élément par son ID

    if (element) {
        element.classList.add(className); // Ajoute la classe à l'élément
        element.style.display = "block"; // Applique le style "display: none" à l'élément

        setTimeout(() => {
            element.classList.remove(className); // Supprime la classe de l'élément
            element.style.display = "none"; // Rétablit le style d'affichage par défaut après 3 secondes
        }, 3000);
    }
</script>

</html>
