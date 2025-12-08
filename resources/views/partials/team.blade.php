@php
    $teamSubtitle = 'Success with us';
    $teamTitle = 'Our Team';
    $teamDesc = 'Taciti ligula neque non nisi sapien sapien sociosqu proin fusce aptent sit amet tellus id. Dictum mattis nisl nullam ligula.';
    $teamMembers = [
        [
            'img' => asset('assets/images/team/1.jpg'),
            'name' => 'Aristay Willam',
            'role' => 'Founder',
            'link' => '#',
        ],
        [
            'img' => asset('assets/images/team/2.jpg'),
            'name' => 'Sophie Lily',
            'role' => 'Assistan Manager',
            'link' => '#',
        ],
        [
            'img' => asset('assets/images/team/3.jpg'),
            'name' => 'Harrison Ryan',
            'role' => 'Project Manager',
            'link' => '#',
        ],
        [
            'img' => asset('assets/images/team/4.jpg'),
            'name' => 'Sophie Lily',
            'role' => 'Consultant',
            'link' => '#',
        ],
        [
            'img' => asset('assets/images/team/5.jpg'),
            'name' => 'Chloe Ava',
            'role' => 'Consultant',
            'link' => '#',
        ],
    ];
@endphp
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="title mb-30 w-50 lg-w-80 text-center mx-auto">
                    <span class="color-primary">{{ $teamSubtitle ?? '' }}</span>
                    <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20">{{ $teamTitle ?? '' }}</h2>
                    <p>{{ $teamDesc ?? '' }}</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="owl-carousel team-slider-1 owl-nav-style-one position-relative mt-30">
                    @foreach($teamMembers as $member)
                    <div class="member-profile color-secondery-a">
                        <div class="overflow-hidden"><img src="{{ $member['img'] ?? '' }}" alt="image"></div>
                        <h4 class="mt-15"><a href="{{ $member['link'] ?? '#' }}">{{ $member['name'] ?? '' }}</a></h4>
                        <span class="color-gray">{{ $member['role'] ?? '' }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>