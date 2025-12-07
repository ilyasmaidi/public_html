<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSS Files --}}
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/scrollcue.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/dark-theme.css') }}">

    <title>{{ config('app.name', 'شركة سوول لتقنيات التوحد') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/solo.png') }}">

    <style>
      .map-area:after {
    position: absolute;
    bottom: 0;
    right: 0;
    content: "";
    width: 100%;
    height: 50%;
    background-color: #ffffff;
    z-index: -1;
}
    </style>
</head>
<body>

    {{-- Preloader --}}
    <div class="preloader-area" id="preloader">
        <div class="spinner">
            <div></div><div></div><div></div><div></div><div></div>
        </div>
    </div>

    {{-- Theme Switcher --}}
    <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>

    {{-- Custom Cursor --}}
    <div class="cursor"><span class="cursor-text"></span></div>
    <div class="cursor-inner"></div>

    <div id="smooth-wrapper">
        <div id="smooth-content">

            {{-- Navbar --}}
            @include('partials.navbar')

            {{-- Breadcrumb --}}
            <div class="breadcrumb-area bg-f round-20 position-relative z-1">
                <div class="container text-center">
                    <ul class="br-menu text-center bg_secondary d-inline-block list-unstyled mb-15">
                        <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block">
                            <a href="{{ route('home') }}">الرئيسية</a>
                        </li>
                        <li class="position-relative fs-13 fw-semibold ls-1 d-inline-block">اتصل بنا</li>
                    </ul>
                    <h2 class="section-title style-one fw-medium font-secondary text-black text-center mb-6">
                        تواصل معنا
                    </h2>
                </div>
            </div>

            {{-- Contact Section --}}
            <div class="container style-one pt-130">
                <div class="row">
                    <div class="col-lg-5 mb-md-30">
                        <div class="comment-form-box round-10">
                            <form action="{{ route('contact.send') }}" method="POST" class="comment-form style-one round-10" id="cmt-form">
                                @csrf
                                <h3 class="fs-20 fw-semibold mb-18">راسلنا الآن</h3>

                                <div class="form-group position-relative mb-20">
                                    <input type="text" name="name" required class="w-100 ht-52 round-5 bg-white text-para border-0" placeholder="الاسم الكامل">
                                </div>
                                <div class="form-group mb-20">
                                    <input type="email" name="email" placeholder="البريد الإلكتروني" required class="w-100 ht-52 round-5 bg-white text-para border-0">
                                </div>
                                <div class="form-group mb-20">
                                    <input type="number" name="phone" placeholder="رقم الهاتف" required class="w-100 ht-52 round-5 bg-white text-para border-0">
                                </div>
                                <div class="form-group mb-20">
                                    <input type="text" name="subject" placeholder="الموضوع" required class="w-100 ht-52 round-5 bg-white text-para border-0">
                                </div>
                                <div class="form-group mb-20">
                                    <textarea name="message" cols="30" rows="10" placeholder="اكتب رسالتك هنا..." class="w-100 round-20 bg-white text-para border-0 resize-0"></textarea>
                                </div>

                                <div class="form-check checkbox style-two mb-25">
                                    <input class="form-check-input" type="checkbox" id="agree" required>
                                    <label class="form-check-label" for="agree">
                                        لقد قرأت ووافقت على
                                        <a href="{{ url('terms-conditions') }}" class="text_primary link-hover-primary">الشروط والأحكام</a> و
                                        <a href="{{ url('privacy-policy') }}">سياسة الخصوصية</a>
                                    </label>
                                </div>

                                <button class="btn style-three d-block w-100 fw-semibold position-relative round-oval" type="submit">
                                    إرسال الرسالة
                                    <span class="position-absolute top-0 end-0 h-100 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('public/assets/img/icons/right-arrow-white.svg') }}" alt="Icon">
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-7 ps-xxl-5">
                        <div class="contact-content ps-xxl-5 ms-xxl-3 mb-60">
                            <h2 class="section-title style-one font-secondary fw-medium text-title mb-18">
                                نحن في شركة <span class="text_primary">سوول</span> نسعد دائماً بخدمتكم والإجابة على جميع استفساراتكم
                            </h2>
                            <p class="mb-45">
                                رسالتنا هي تسخير التكنولوجيا والذكاء الاصطناعي لتحسين حياة الأفراد المصابين بالتوحد، عبر حلول مبتكرة وأجهزة ذكية تدعم الاندماج والتواصل الفعّال.
                            </p>

                            {{-- Contact Cards --}}
                            <div class="contact-card-wrap style-one d-flex flex-wrap position-relative">
                                <div class="contact-card style-two d-flex flex-wrap">
                                    <span class="contact-icon d-flex align-items-center justify-content-center rounded-circle bg_secondary">
                                        <img src="{{ asset('public/assets/img/icons/phone-black.svg') }}" alt="Icon">
                                    </span>
                                    <div >
                                        <h6 class="fs-16 fw-semibold mb-12">مركز الاتصال</h6>
                                        <a href="tel:+213668375398" class="d-block text-para hover-text-primary">الرقم 1</a>
                                        <a href="tel:+213667960059" class="d-block text-para hover-text-primary">الرقم 2</a>
                                    </div>
                                </div>

                                <div class="contact-card style-two d-flex flex-wrap">
                                    <span class="contact-icon d-flex align-items-center justify-content-center rounded-circle bg_secondary">
                                        <img src="{{ asset('public/assets/img/icons/pin-black.svg') }}" alt="Icon">
                                    </span>
                                    <div>
                                        <h6 class="fs-16 fw-semibold mb-12">موقعنا</h6>
                                        <p>حاضنة أعمال جامعة الأغواط، QRGG+3QC، الأغواط، الجزائر</p>
                                    </div>
                                </div>

                                <div class="contact-card style-two d-flex flex-wrap">
                                    <span class="contact-icon d-flex align-items-center justify-content-center rounded-circle bg_secondary">
                                        <img src="{{ asset('public/assets/img/icons/mail-black.svg') }}" alt="Icon">
                                    </span>
                                    <div>
                                        <h6 class="fs-16 fw-semibold mb-12">البريد الإلكتروني</h6>
                                        <a href="mailto:contact@soul-solo.com" class="d-block text-para hover-text-primary">contact@soul-solo.com</a>
                                    </div>
                                </div>

                                <div class="contact-card style-two">
                                    <h6 class="fs-16 fw-semibold mb-25 d-block">تابعنا على</h6>
                                    <ul class="social-profile style-four list-unstyled mb-0">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                        <li><a href="https://x.com/" target="_blank"><i class="ri-twitter-x-line"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('public/assets/img/contact-img.png') }}" alt="صورة التواصل" class="contact-img d-block mx-auto">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>

            {{-- Map --}}
<div class="map-area position-relative z-1">
    <div class="container">
        <div class="comp-map style-two w-100 round-10">
            <iframe 
                src="https://www.google.com/maps?q=https://maps.app.goo.gl/3ofF4Nzt47Chc4kE6&output=embed" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>



            {{-- Footer --}}
            @include('partials.footer')

        </div>
    </div>

    {{-- Back to Top --}}
    <div id="progress-wrap" class="progress-wrap style-one">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path id="progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>

    {{-- JS Files --}}
    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/megamenu.js') }}"></script>
    <script src="{{ asset('public/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/fslightbox.js') }}"></script>
    <script src="{{ asset('public/assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/scrollTrigger.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/lenis.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/scrollToPlugin.js') }}"></script>
    <script src="{{ asset('public/assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/customEase.js') }}"></script>
    <script src="{{ asset('public/assets/js/scrollcue.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/main.js') }}"></script>
</body>
</html>
