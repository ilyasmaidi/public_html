@php
    // ================================
    //   VARIABLES DE LA SECTION "QUI SOMMES-NOUS"
    //      (Mise à jour pour QualiPro Plus)
    // ================================
    
    // صورة تعكس الاحترافية في التدقيق والاستشارة
    $aboutImg = asset('https://moodle.cfuv.ru/pluginfile.php/238972/course/overviewfiles/consulting.jpg'); 
    
    // عنوان ترحيبي يركز على الشراكة والتميز
    $aboutTitle = 'Plus qu’un cabinet, nous sommes votre partenaire pour l’excellence.'; 
    
    // النص الأول: تعريف شامل بالهوية والهدف
    $aboutText1 = 'Nous sommes un cabinet spécialisé dans l’accompagnement des entreprises pour l’obtention de certifications et la mise en conformité réglementaire. Notre objectif est d’optimiser vos processus et de valoriser vos performances de manière durable grâce à une expertise rigoureuse en qualité, sécurité et environnement.';
    
    // النص الثاني: المهمة الأساسية (Notre Mission)
    $aboutText2 = 'Notre mission : Accompagner les entreprises vers la certification à travers la formation, la consultation et la mise en place des normes, tout en bâtissant une culture d’amélioration continue.';
    
    $aboutReadMoreUrl = '#about'; // رابط داخلي أو صفحة فرعية
    $aboutReadMoreText = 'Découvrir Plus'; // نص الزر بشكل احترافي
@endphp
<section id="about" class="about-us-3 position-relative bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-5">
                <div class="about-img-2 wow animated slideInRight animated">
                    <img src="{{ $aboutImg }}" alt="Notre Équipe de Consultants">
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-7">
                <div class="position-relative">
                    <div class="inner-title mb-30">
                        <h2 class="color-secondery xl-mt-30 wow animated slideInUp animated">{{ $aboutTitle }}</h2>
                    </div>
                    <div class="text-area mb-30 wow animated slideInUp animated">
                        <p class="mb-15">{{ $aboutText1 }}</p>
                        <p></p>
                    </div>
                    <div class="about-area-2 bg-secondery d-flex color-white p-40 wow animated slideInUp animated">
                        <p>{{ $aboutText2 }}</p>
                    </div>
                    <a class="btn btn-primary mt-30" href="{{ $aboutReadMoreUrl }}">{{ $aboutReadMoreText }}</a>
                </div>
            </div>
        </div>
    </div>
</section>