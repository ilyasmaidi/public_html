@php
    $partnersSubtitle = 'Our Valuable Partners';
    $partnersTitle = 'Fellows We Have';
    $partnersDesc = 'Potenti platea, neque senectus hac elit suspendisse imperdiet ultrices tincidunt vel sodales. Imperdiet euismod.';
    $partnersIcons = [
        'flaticon-envato',
        'flaticon-themeforest',
        'flaticon-codecanyon',
        'flaticon-graphicriver',
        'flaticon-audiojungle',
    ];
@endphp
<div class="our-partners-two bg-gray position-relative py-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-5">
                <div class="title mb-30 wow animated slideInLeft animated">
                    <span class="color-primary">{{ $partnersSubtitle ?? '' }}</span>
                    <h2 class="position-relative va-lb-line-w50-h2-primary pb-15 mb-20">{{ $partnersTitle ?? '' }}</h2>
                    <p>{{ $partnersDesc ?? '' }}</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-7">
                <div class="owl-carousel slide-4 owl-dots-none flat-big icon-secondery text-center">
                    @foreach($partnersIcons as $icon)
                        <i class="{{ $icon ?? '' }}"></i>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>