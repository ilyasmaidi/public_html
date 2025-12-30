@php

    // Récupération des paramètres globaux (AppServiceProvider)
    $phone = $global_settings['phone'] ?? "+213 699 75 80 30"; 
    $email = $global_settings['email'] ?? "qualiproplus16@gmail.com";
    $logo  = asset('assets/images/logo/logo.png'); 

    // Liens Statiques en Français
    $devis_link   = route('contact'); // أو أي رابط مخصص لطلب تسعيرة
    $contact_link = route('contact');
    $home_link    = route('home');

    // Statistiques (Achievements)
    $achievements = $global_achievements->count() > 0 ? $global_achievements : [
        (object)['count' => '100%', 'title' => 'Satisfaction Client'],
        (object)['count' => '10', 'title' => 'Normes Maîtrisées'],
        (object)['count' => '4', 'title' => 'Types d\'Audits'],
    ];

    // Navigation dynamique
    $nav_links = $global_nav_links;
@endphp

<header id="header" class="header-4 nav-on-top">

    <div id="top" class="top-header bg-secondery color-white icon-primary d-md-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <ul>
                        <li><i class="fa fa-phone mr-10"></i>{{ $phone }}</li>
                        <li><i class="fa fa-envelope mr-10"></i>{{ $email }}</li>
                    </ul>
                </div>

                <div class="col-lg-7 col-md-7">
                    <ul class="color-white-a hover-primary float-right">
                        <li><a href="{{ $contact_link }}">Nous Contacter</a></li>
                        <li>|</li>
                        @auth
                            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard mr-5"></i> Tableau de Bord</a></li>
                            <li>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out mr-5"></i> Déconnexion
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}"><i class="fa fa-lock mr-5"></i> Connexion</a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-user mr-5"></i> Inscription</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="logo-box py-30 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-2">
                    <a class="navbar-brand mt-1" href="{{ $home_link }}">
                        <img src="{{ $logo }}" alt="QualiPro Plus">
                    </a>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-10">
                    <div class="contribution-block ml-auto d-table">
                        <div class="fact-counter">
                            @foreach($achievements as $ach)
                                <div class="achivement-style-4 count text-center border-right pr-30">
                                    <div class="achive-count-four count-num color-primary font-highlight"
                                         data-speed="3000" data-stop="{{ preg_replace('/[^0-9]/', '', $ach->count) }}">
                                        {{ $ach->count }}
                                    </div>
                                    <h5 class="achive-three-title">{{ $ach->title }}</h5>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nav-header bg-gray py-10 position-relative">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light px-0">
                <a class="navbar-brand two" href="{{ $home_link }}">
                    <img src="{{ $logo }}" alt="logo">
                </a>

                <button class="toggle-btn" data-toggle="collapse" data-target="#mainMenu">
                    <span></span><span></span><span></span>
                </button>

                <div class="collapse navbar-collapse" id="mainMenu">
                    <ul class="navbar-nav mr-auto">
                        <!-- @foreach($nav_links as $item)
                            @if($item->is_active)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ $item->url }}">{{ $item->title }}</a>
                            </li>
                            @endif
                        @endforeach -->

                        @foreach($nav_links as $item)
                            {{-- جرب إزالة هذا الشرط مؤقتاً للتأكد --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ $item->url }}">{{ $item->title }}</a>
                                </li>
                        @endforeach
                        
                    </ul>

                    <ul class="ml-auto nav-right-part">
                        <li><a class="quote-btn btn-primary" href="{{ $contact_link }}">Demander Devis</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>