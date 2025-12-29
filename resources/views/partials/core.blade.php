@php
    // ================================
    //    VARIABLES DE LA SECTION VALEURS
    //     (Mise à jour QualiPro Plus)
    // ================================

    $coreImg = asset('https://cdn.bcs-express.ru/article-head/7180.jpg');

    // 33 caractères (Max)
    $coreSubtitle = 'Nos Valeurs Fondent Notre Succès';

    // 21 caractères (Max)
    $coreTitle = 'Valeurs Essentielles';

    // 200 caractères (Max)
    $coreDesc = 'Nous plaçons l’éthique et la satisfaction client au cœur de notre action. À travers le partage et l’engagement, nous créons une valeur ajoutée durable pour votre organisation.';

    $coreItems = [
        [
            // 19 caractères (Max)
            'title' => 'Satisfaction Client',
            // 63 caractères (Max)
            'desc' => 'Des relations durables basées sur la confiance et l’écoute.'
        ],
        [
            // 17 caractères (Max)
            'title' => 'Éthique & Rigueur',
            // 63 caractères (Max)
            'desc' => 'Intégrité et équité en respectant les principes du conseil.'
        ],
        [
            // 18 caractères (Max)
            'title' => 'Esprit d’Équipe',
            // 63 caractères (Max)
            'desc' => 'Travail collaboratif et partage pour le développement de tous.'
        ],
        [
            // 17 caractères (Max)
            'title' => 'Valeur Ajoutée',
            // 63 caractères (Max)
            'desc' => 'Engagement passionné visant à générer une réelle performance.'
        ],
    ];
@endphp

<section class="core-value position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="title mb-30 w-75 text-center mx-auto wow animated slideInUp animated">
                    <span class="color-primary">{{ $coreSubtitle }}</span>
                    <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20">{{ $coreTitle }}</h2>
                    <p>{{ $coreDesc }}</p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12">
                <div class="core-value-box bg-secondery p-30 z-index-1 position-relative" style="margin: 80px -80px 50px 0">
                    <div class="row">
                        @foreach($coreItems as $i => $item)
                        <div class="col-xl-6 col-lg-6">
                            <div class="Valuable-item bg-light p-30 text-center{{ $i > 1 ? ' mt-30' : ($i == 1 ? ' lg-mt-30' : '') }} wow animated slideInUp animated">
                                <h4 class="mb-15">{{ $item['title'] }}</h4>
                                <p>{{ $item['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-12">
                <div class="core-images mt-30">
                    <img src="{{ $coreImg }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>