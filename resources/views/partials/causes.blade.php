@php
    // ==========================================
    // 1. تعريف متغيرات قسم الخدمات (Causes/Services)
    // ==========================================
    $causesSubtitle = 'Expertise en Certification';
    $causesTitle = 'Nos Domaines d’Action';
    $causesDesc = 'Nous accompagnons les entreprises vers l’excellence via le conseil, la formation et l’audit. Notre but est d’optimiser vos processus et valoriser vos performances de manière durable.';

    $causesItems = [
        [
            'title' => 'Conseil & Stratégie',
            'desc' => 'Accompagnement sur mesure pour l’obtention de certifications (ISO, HACCP, BRC) et la mise en place de systèmes de management performants.'
        ],
        [
            'title' => 'Audit & Diagnostic',
            'desc' => 'Réalisation d’audits internes, audits fournisseurs et audits à blanc pour évaluer la conformité et identifier les axes d’amélioration.'
        ],
        [
            'title' => 'Formation Pro',
            'desc' => 'Développement des compétences de vos équipes (ISO, AMDEC, KPI) pour renforcer l’efficacité opérationnelle et managériale.'
        ],
        [
            'title' => 'Sécurité Alimentaire',
            'desc' => 'Expertise dédiée aux normes agroalimentaires (ISO 22000, FSSC, HACCP) pour garantir hygiène et sécurité de vos produits.'
        ],
        [
            'title' => 'Qualité & HSE',
            'desc' => 'Optimisation de la qualité (ISO 9001), de l’environnement (ISO 14001) et de la santé au travail (ISO 45001).'
        ],
        [
            'title' => 'Performance Durable',
            'desc' => 'Mise en place d’outils d’amélioration continue pour transformer vos contraintes réglementaires en leviers de croissance.'
        ],
    ];

    // ==========================================
    // 2. تعريف متغيرات قسم الإحصائيات (Stats)
    // ==========================================
    $statsBg = asset('assets/images/backgrounds/counter-bg.jpg');
    $statsItems = [
        ['count' => 12, 'title' => 'Normes Accompagnées', 'icon' => 'flaticon-global'],
        ['count' => 4, 'title' => 'Types d’Audits Pro', 'icon' => 'flaticon-analysis'],
        ['count' => 100, 'suffix' => '%', 'title' => 'Satisfaction Client', 'icon' => 'flaticon-customer-service'],
        ['count' => 24, 'suffix' => '/7', 'title' => 'Support Technique', 'icon' => 'flaticon-help'],
    ];
@endphp

<section id="causes" class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="title mb-30 w-75 text-center mx-auto wow animated slideInUp">
                    <span class="color-primary" style="color: #ffcc00; font-weight: bold;">{{ $causesSubtitle }}</span>
                    <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20">{{ $causesTitle }}</h2>
                    <p>{{ $causesDesc }}</p>
                </div>
            </div>
            
            @foreach($causesItems as $item)
            <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                <div class="service-4 p-30 mt-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01 wow animated slideInUp" style="min-height: 250px; border-radius: 8px;">
                    <div class="d-inline-block mb-15">
                        <a href="#"><h4 class="box-title-3 d-inline-block" style="color: #333; font-weight: 600;">{{ $item['title'] }}</h4></a>
                    </div>
                    <p class="text-muted">{{ $item['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>