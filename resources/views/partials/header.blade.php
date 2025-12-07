@php
    // ================================
    //        HEADER VARIABLES
    //  (تعديل الروابط هنا لاحقاً بسهولة)
    // ================================
    $phone = "(012) 345 657 900";
    $email = "support@yourdomain.com";

    // روابط كنصوص — لا تنشئ روت داخل الكود
    // يمكنك لاحقاً استبدال '/volunteer' بـ route('volunteer') عند الحاجة
    $volunteer_link = '/volunteer';
    $contact_link   = '/contact';
    $login_link     = '/login';
    $signup_link    = '/signup';
    $home_link      = '/';

    // مسار الشعار (asset صالح)
    $logo = asset('assets/images/logo/logo.png');

    // Achievements
    $achievements = [
        ['count' => 2653, 'title' => 'Orphan Children'],
        ['count' => 1449, 'title' => 'Educating Now'],
        ['count' => 836,  'title' => 'Feeding Everyday'],
    ];

    // Navigation Links as plain strings (لا روت هنا)
    $nav_links = [
        ['title' => 'Home', 'link' => '#top'],
        ['title' => 'About', 'link' => '#about'],
        ['title' => 'Causes', 'link' => '#causes'],
        ['title' => 'Portfolio', 'link' => '#portfolio'],
        ['title' => 'Team', 'link' => '#team'],
        ['title' => 'Blog', 'link' => '#blog'],
        ['title' => 'Contact', 'link' => $contact_link],
    ];
@endphp

<header id="header" class="header-4 nav-on-top">

    <!-- Top Header -->
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
                        <li><a href="{{ $volunteer_link }}">Become A Volunteer</a></li>
                        <li><a href="{{ $contact_link }}">Contact Us</a></li>
                        <li>|</li>
                        <li><a href="{{ $login_link }}"><i class="fa fa-lock mr-5"></i> Login</a></li>
                        <li><a href="{{ $signup_link }}"><i class="fa fa-user mr-5"></i> Signup</a></li>
                        <li>
                            <form class="search-field">
                                <input type="search" class="search form-control" placeholder="Search Here"/>
                                <span class="icon-white">
                                    <i class="fa fa-search"></i>
                                    <i class="fa fa-times"></i>
                                </span>
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Logo + Achievements -->
    <div class="logo-box py-30 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-2">
                    <a class="navbar-brand mt-1" href="{{ $home_link }}">
                        <img src="{{ $logo }}" alt="logo">
                    </a>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-10">
                    <div class="contribution-block ml-auto d-table">
                        <div class="fact-counter">
                            @foreach($achievements as $ach)
                                <div class="achivement-style-4 count text-center border-right pr-30">
                                    <div class="achive-count-four count-num color-primary font-highlight"
                                         data-speed="3000" data-stop="{{ $ach['count'] }}">
                                        {{ $ach['count'] }}
                                    </div>
                                    <h5 class="achive-three-title">{{ $ach['title'] }}</h5>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Navigation -->
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
                        @foreach($nav_links as $item)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ $item['link'] }}">{{ $item['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>

                    <ul class="ml-auto nav-right-part">
                        <li><a class="quote-btn btn-primary" href="#">Donate Now</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

</header>
