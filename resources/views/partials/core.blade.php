@php
    $coreImg = asset('assets/images/others/2.png');
    $coreSubtitle = 'Our Core Value is Our Foundation';
    $coreTitle = 'Most Valuable Purposes';
    $coreDesc = 'Sagittis tempor, ultricies conubia, ultrices in, nisl diam natoque non blandit ornare est cubilia quis. Ridiculus, euismod. Mollis. Pretium hendrerit cum porta, vulputate hac. Nascetur suscipit consectetuer eget. Cursus nonummy.';
    $coreItems = [
        ['title' => 'Find Poor Children', 'desc' => 'Cras vehicula lacus ipsum vivamus. Tempus eleme inceptos sapien.'],
        ['title' => 'Food for Homeless', 'desc' => 'Cras vehicula lacus ipsum vivamus. Tempus eleme inceptos sapien.'],
        ['title' => 'Learning Advantage', 'desc' => 'Cras vehicula lacus ipsum vivamus. Tempus eleme inceptos sapien.'],
        ['title' => 'Home for Orphan', 'desc' => 'Cras vehicula lacus ipsum vivamus. Tempus eleme inceptos sapien.'],
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