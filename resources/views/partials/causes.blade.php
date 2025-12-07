@php
    $causesSubtitle = 'This are the Things We Do';
    $causesTitle = "Let's Check Causes List";
    $causesDesc = 'Sagittis tempor, ultricies conubia, ultrices in, nisl diam natoque non blandit ornare est cubilia quis. Ridiculus, euismod. Mollis. Pretium hendrerit cum porta, vulputate hac. Nascetur suscipit consectetuer eget. Cursus nonummy.';
    $causesItems = [
        ['title' => 'Childhood Development', 'url' => 'service-details.html', 'desc' => 'Euismod quam pellentes cubilia, habitas blandit ac molestie duis tristique placera auctor. Etiam pulvinar dis felis.'],
        ['title' => 'Health Care Center', 'url' => 'service-details.html', 'desc' => 'Euismod quam pellentes cubilia, habitas blandit ac molestie duis tristique placera auctor. Etiam pulvinar dis felis.'],
        ['title' => 'Much Needed Help', 'url' => 'service-details.html', 'desc' => 'Euismod quam pellentes cubilia, habitas blandit ac molestie duis tristique placera auctor. Etiam pulvinar dis felis.'],
        ['title' => 'Child Community Center', 'url' => 'service-details.html', 'desc' => 'Euismod quam pellentes cubilia, habitas blandit ac molestie duis tristique placera auctor. Etiam pulvinar dis felis.'],
        ['title' => 'Ensure Education', 'url' => 'service-details.html', 'desc' => 'Euismod quam pellentes cubilia, habitas blandit ac molestie duis tristique placera auctor. Etiam pulvinar dis felis.'],
        ['title' => 'Making New Generation', 'url' => 'service-details.html', 'desc' => 'Euismod quam pellentes cubilia, habitas blandit ac molestie duis tristique placera auctor. Etiam pulvinar dis felis.'],
    ];
@endphp
<section id="causes" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="title mb-30 w-75 text-center mx-auto wow animated slideInUp animated">
                    <span class="color-primary">{{ $causesSubtitle }}</span>
                    <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20">{{ $causesTitle }}</h2>
                    <p>{{ $causesDesc }}</p>
                </div>
            </div>
            @foreach($causesItems as $item)
            <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                <div class="service-4 p-30 mt-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01 wow animated slideInUp animated">
                    <div class="d-inline-block mb-15">
                        <a href="{{ $item['url'] }}"><h4 class="box-title-3 d-inline-block">{{ $item['title'] }}</h4></a>
                    </div>
                    <p>{{ $item['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>