@php
    $footerLogo = asset('assets/images/logo/logo-white.png');
    $footerText = 'Posuere nam natoque nec rhoncus malesuad phasel ante. Enim lacinia cubilia mat quam place.';
    $footerContacts = [
        ['icon' => 'fa fa-phone', 'text' => '(012) 345 657 900'],
        ['icon' => 'fa fa-envelope', 'text' => 'info@yourdomain.com'],
        ['icon' => 'fa fa-skype', 'text' => 'Expoge.multipurpose'],
        ['icon' => 'fa fa-map-marker', 'text' => '40 Towerhill Avenue, Melbourne, Australia.'],
    ];
    $footerNews = [
        ['url' => '#', 'title' => 'Integer magnis vivam phasel. Lacus porttitor vestibulum ligula auctor.', 'date' => '25 January 2020'],
        ['url' => '#', 'title' => 'Rhonc maecen aliqu varius conubia nullam hymenaeos rhoncus.', 'date' => '25 January 2020'],
        ['url' => '#', 'title' => 'Quisque tellus erat tortor elementu aenean litora.', 'date' => '22 January 2020'],
    ];
    $footerLinks = [
        ['url' => '#', 'label' => 'Our Services'],
        ['url' => '#', 'label' => 'How It Work'],
        ['url' => '#', 'label' => 'FAQ'],
        ['url' => '#', 'label' => 'Help'],
        ['url' => '#', 'label' => 'Free Consultation'],
        ['url' => '#', 'label' => 'Mission and Vision'],
        ['url' => '#', 'label' => 'Account Settings'],
        ['url' => '#', 'label' => 'License'],
    ];
    $footerSubscribeText = 'Dictum velit cum arcu interd faucib urna inceptos imperdiet dignissim.';
    $footerSocial = [
        ['icon' => 'fa fa-facebook', 'url' => '#'],
        ['icon' => 'fa fa-twitter', 'url' => '#'],
        ['icon' => 'fa fa-linkedin', 'url' => '#'],
        ['icon' => 'fa fa-instagram', 'url' => '#'],
        ['icon' => 'fa fa-dribbble', 'url' => '#'],
    ];
    $footerCopyright = 'Expoge @ 2020. All Right Reserved.';
    $footerCopyrightLinks = [
        ['url' => '#', 'label' => 'Privacy Policy'],
        ['url' => '#', 'label' => 'Terms & Conditions'],
    ];
@endphp
<footer class="bg-secondery">
    <div class="container">
        <div class="row py-80">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="footer-widget sm-mt-0">
                    <div class="footer-logo mb-20">
                        <a href="#"><img src="{{ $footerLogo ?? '' }}" alt="images"></a>
                    </div>
                    <div class="text-area color-white">
                        <p>{{ $footerText ?? '' }}</p>
                    </div>
                    <ul class="widget-contact-info color-white icon-primary link-list-b-15 mt-30">
                        @foreach($footerContacts as $contact)
                        <li><span class="mr-20"><i class="{{ $contact['icon'] ?? '' }}" aria-hidden="true"></i></span> {{ $contact['text'] ?? '' }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title position-relative va-lb-line-w50-h2-primary pb-15 mb-20 color-white">Recent News</h3>
                    <ul class="hover-white-primary link-list-b-20">
                        @foreach($footerNews as $news)
                        <li>
                            <a href="{{ $news['url'] ?? '#' }}">{{ $news['title'] ?? '' }}</a>
                            <div class="post-meta color-light-gray f-12 mt-5">
                                <span class="d-inline-block">{{ $news['date'] ?? '' }}</span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title position-relative va-lb-line-w50-h2-primary pb-15 mb-20 color-white">Links</h3>
                    <ul class="hover-white-primary link-list-b-15">
                        @foreach($footerLinks as $link)
                        <li><a href="{{ $link['url'] ?? '#' }}">{{ $link['label'] ?? '' }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-6">
                <div class="footer-widget color-white xl-mt-50">
                    <h3 class="footer-widget-title position-relative va-lb-line-w50-h2-primary pb-15 mb-20 color-white">Subscribe</h3>
                    <p>{{ $footerSubscribeText ?? '' }}</p>
                    <form class="mt-30">
                        <input class="form-control" name="subscribe" type="text" placeholder="Subscribe">
                        <button class="btn btn-primary mt-15">Subscribe</button>
                    </form>
                    <ul class="socal media-two d-inline-block color-secondery mt-30">
                        @foreach($footerSocial as $social)
                        <li><a href="{{ $social['url'] ?? '#' }}"><i class="{{ $social['icon'] ?? '' }}" aria-hidden="true"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr class="border-t-1-dark">
    <div class="copyright-2 bg-secondery">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <ul class="copyright-style-2 d-table w-100 hover-primary color-white py-15">
                        <li class="float-left">{{ $footerCopyright ?? '' }}</li>
                        <li class="float-right color-white-a">
                            @foreach($footerCopyrightLinks as $i => $link)
                                <a href="{{ $link['url'] ?? '#' }}">{{ $link['label'] ?? '' }}</a>@if($i == 0) | @endif
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>