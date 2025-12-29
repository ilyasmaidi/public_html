@php
    // ================================
    //        Testimonials Variables
    //      (Mise à jour QualiPro Plus)
    // ================================
    $helpSubtitle = 'Témoignages';
    $helpTitle = 'La Confiance de nos Partenaires';
    $helpDesc = 'La satisfaction de nuestros clients est au cœur de notre action. Découvrez comment nous accompagnons les entreprises vers l’excellence et la certification durable.';

    $helpTestimonials = [
        [
            'name' => 'Directeur Qualité',
            'text' => 'Un accompagnement exceptionnel pour notre certification ISO 22000. L’expertise technique et la rigueur de QualiPro Plus ont été déterminantes pour optimiser nos processus.',
            'img' => asset('assets/images/testimonial/1.jpg'),
        ],
        [
            'name' => 'Responsable HSE',
            'text' => 'Grâce aux audits à blanc et aux formations sur mesure, nous avons abordé notre audit de certification avec sérénité et professionnalisme.',
            'img' => asset('assets/images/testimonial/2.jpg'),
        ],
        [
            'name' => 'Gérant Industrie Agro',
            'text' => 'Une équipe intègre et engagée. Leur maîtrise des normes HACCP et FSSC nous a permis de renforcer la sécurité alimentaire de nos produits durablement.',
            'img' => asset('assets/images/testimonial/3.jpg'),
        ],
        [
            'name' => 'Chef de Projet',
            'text' => 'Plus qu’un simple consultant, un véritable partenaire stratégique. Leur approche basée sur la valeur ajoutée a transformé notre culture d’organisation.',
            'img' => asset('assets/images/testimonial/4.jpg'),
        ],
    ];
@endphp

<section id="helped" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="bg-white px-30 py-40 shadow-smooth-black-01">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="title w-50 wow animated slideInUp animated">
                                <span class="color-primary">{{ $helpSubtitle ?? '' }}</span>
                                <h2 class="position-relative va-lb-line-w50-h2-primary pb-15 mb-20">{{ $helpTitle ?? '' }}</h2>
                                <p>{{ $helpDesc ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel testimonial-4 slide-3 owl-dots-none mt-30">
                        @foreach($helpTestimonials as $testimonial)
                        <div class="testimonial-four position-relative mt-30 bg-dark wow animated slideInUp animated">
                            <div class="position-relative py-40 px-30">
                                <h4 class="position-relative va-lb-line-w50-h2-primary color-white pb-15 mb-20">{{ $testimonial['name'] ?? '' }}</h4>
                                <div class="text-area color-light-gray">
                                    <p>{{ $testimonial['text'] ?? '' }}</p>
                                </div>
                                <div class="feedback-2 icon-primary mt-20">
                                    <i class="flaticon-star-1"></i>
                                    <i class="flaticon-star-1"></i>
                                    <i class="flaticon-star-1"></i>
                                    <i class="flaticon-star-1"></i>
                                    <i class="flaticon-star-1"></i>
                                </div>
                                <img src="{{ $testimonial['img'] ?? '' }}" alt="image">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>