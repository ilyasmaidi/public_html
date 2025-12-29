@php
    // ================================
    //      VARIABLES DE LA SECTION VIDÉO
    //  (Mise à jour pour QualiPro Plus)
    // ================================

    // خلفية القسم وصورة الفيديو (تم اختيار صور تعكس بيئة تدقيق واستشارة مهنية)
    $videoBg = asset('https://t3.ftcdn.net/jpg/03/66/54/12/360_F_366541291_RSi2errucp00Y8c7gfyEYNJTooaqVFmn.jpg');
    $videoImg = asset('https://images.ctfassets.net/3s5io6mnxfqz/4wn4oINAavj1B9zoMuL14G/c95b9a98dd1157902b914eabf39c9967/AdobeStock_61970043.jpeg');
    
    // رابط الفيديو (يمكنك تغييره لاحقاً بفيديو تعريفي خاص بالشركة)
    $videoUrl = 'https://www.youtube.com/watch?v=pWOv9xcoMeY';

    // العنوان: ركزت على التميز والاستدامة (60 حرفاً تقريباً)
    $videoTitle = 'QualiPro Plus : Votre partenaire pour l’excellence durable';

    // النص: شرح مكثف لركائز الشركة (الاستشارة، التكوين، التدقيق)
    // (حوالي 370 حرفاً لضمان تناسق التصميم)
    $videoText = 'Accompagner les entreprises vers la certification est notre mission. À travers le conseil, la formation et l’audit, nous structurons vos processus pour garantir la conformité aux normes internationales (ISO, HACCP, etc.). QualiPro Plus s’engage à vos côtés pour transformer vos exigences réglementaires en de réels leviers de performance et de croissance durable.';
@endphp

<section class="video-full" style="background: url({{ $videoBg }}) no-repeat fixed center center/cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <img src="{{ $videoImg }}" alt="">
                <div class="personal-video xy-middle">
                    <a data-fancybox="" class="video-popup bg-primary color-white" href="{{ $videoUrl }}">
                    <i class="fa fa-play" aria-hidden="true"></i></a>
                    <div class="loader">
                        <div class="loader-inner ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="video-content color-white" style="margin: 55px 0">
                    <h2 class="mb-15 color-white va-lb-line-w50-h2-primary pb-15 position-relative">{{ $videoTitle }}</h2>
                    <p>{{ $videoText }}</p>
                </div>
            </div>
        </div>
    </div>
</section>