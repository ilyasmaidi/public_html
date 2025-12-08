@php
    $helpSubtitle = 'Who Helped Us';
    $helpTitle = 'From Getting Started';
    $helpDesc = 'Taciti ligula neque non nisi sapien sapien sociosqu proin fusce aptent sit amet tellus id. Dictum mattis nisl nullam ligula.';
    $helpTestimonials = [
        [
            'name' => 'Alex Fernandize',
            'text' => 'Dolor ad maecenas est pulvinar massa lorem nascetur pede iaculis torquent id velit Hendrerit fermentum venenatis.',
            'img' => asset('assets/images/testimonial/1.jpg'),
        ],
        [
            'name' => 'Sherica Kate',
            'text' => 'Dolor ad maecenas est pulvinar massa lorem nascetur pede iaculis torquent id velit Hendrerit fermentum venenatis.',
            'img' => asset('assets/images/testimonial/2.jpg'),
        ],
        [
            'name' => 'Ronaldo Sean',
            'text' => 'Dolor ad maecenas est pulvinar massa lorem nascetur pede iaculis torquent id velit Hendrerit fermentum venenatis.',
            'img' => asset('assets/images/testimonial/3.jpg'),
        ],
        [
            'name' => 'Ronaldo Sean',
            'text' => 'Dolor ad maecenas est pulvinar massa lorem nascetur pede iaculis torquent id velit Hendrerit fermentum venenatis.',
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