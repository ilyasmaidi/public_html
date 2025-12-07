@php
    $aboutImg = asset('assets/images/about/1.jpg');
    $aboutTitle = 'Welcome to Expoge Multipurpose Agency Template. Learn About Us.';
    $aboutText1 = 'Enim, luctus morbi, porta hymenaeos faucibus felis libero faucibus sapien tellus commodo praesent. Maecenas aptent netus cursus eget posue imperdiet eu odio odio non venenatis. Ut pulvinar aptent tellus sapien quis etiam. Cursus cubilia mi mollis primis placerat. Porta elit porttitor tincidunt condimentum, odio. Sem primis. Sit, eu dictum tempor venenatis placerat sem ligula metus pharetra vitae.';
    $aboutText2 = 'Sapien. Vivamus elementum tristique, penatibus semper nunc nibh lectus vehicula faucibus molestie gravida nostra duis, lobortis inceptos commodo. Bibendu magnis est per per cum blandit volutpat dui dapibus et. Taciti nulla praesent nostra nascetur semper nisl turpis.';
    $aboutReadMoreUrl = 'about.html';
@endphp
<section id="about" class="about-us-3 position-relative bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-5">
                <div class="about-img-2 wow animated slideInRight animated">
                    <img src="{{ $aboutImg }}" alt="image">
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
                    <a class="btn btn-primary mt-30" href="{{ $aboutReadMoreUrl }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>