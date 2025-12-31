<section class="video-full" style="background: url({{ $video->video_bg ? asset($video->video_bg) : 'https://t3.ftcdn.net/jpg/03/66/54/12/360_F_366541291_RSi2errucp00Y8c7gfyEYNJTooaqVFmn.jpg' }}) no-repeat fixed center center/cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="position-relative">
                    <img src="{{ $video->video_img ? asset($video->video_img) : 'https://images.ctfassets.net/3s5io6mnxfqz/4wn4oINAavj1B9zoMuL14G/c95b9a98dd1157902b914eabf39c9967/AdobeStock_61970043.jpeg' }}" alt="QualiPro Video" class="img-fluid rounded shadow-lg">
                    
                    <div class="personal-video xy-middle">
                        <a data-fancybox="" class="video-popup bg-primary color-white" href="{{ $video->video_url ?? 'https://www.youtube.com/watch?v=pWOv9xcoMeY' }}">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </a>
                        <div class="loader">
                            <div class="loader-inner ball-scale-multiple">
                                <div></div><div></div><div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="video-content color-white" style="margin: 55px 0">
                    <h2 class="mb-15 color-white va-lb-line-w50-h2-primary pb-15 position-relative">
                        {{ $video->title_fr ?? 'QualiPro Plus : Votre partenaire pour l’excellence durable' }}
                    </h2>
                    <p class="lead">
                        {{ $video->text_fr ?? 'Accompagner les entreprises vers la certification est notre mission...' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>