@php
    // ================================
    //         VARIABLES DU SLIDER
    //  (Adaptées pour QualiPro Plus)
    // ================================
    
    // الصور (يفضل استخدام صور تعكس بيئة العمل، التدقيق، أو المصانع)
    $sliderImg1 = asset('https://s0.rbk.ru/v6_top_pics/media/img/2/41/346849907128412.jpg');
    $sliderImg2 = asset('assets/images/slider/industrial-audit-bg.jpg'); 
    $sliderImg3 = asset('https://axys.b-cdn.net/wp-content/uploads/2024/11/AdobeStock_584234539-1-scaled.jpeg');

    // العناصر الزخرفية
    $k1 = asset('assets/images/slider/k1.png');
    $k2 = asset('assets/images/slider/k2.png');
    $k3 = asset('assets/images/slider/k3.png');
    $f1 = asset('assets/images/slider/f1.png');
    $f2 = asset('assets/images/slider/f2.png');

    // --- Slide 1: الواجهة الرئيسية (Main Catchphrase) ---
    //
    $slide1Text1 = "Plus qu’un cabinet, nous sommes votre partenaire pour l’excellence."; //
    $slide1Text2 = "Votre Partenaire"; // الجملة المطلوبة في الواجهة
    $slide1Text3 = "Vers la"; // تكملة الجملة
    $slide1Text4 = "Certification"; // الكلمة الأهم

    // --- Slide 2: المهمة والأهداف (Mission) ---
    //
    $slide2Text1 = "Accompagner les entreprises vers la performance durable."; //

    // --- Slide 3: مجالات الاختصاص (Expertise) ---
    //
    $slide3Text1 = "Nos Domaines de Compétence"; //
    $slide3Text2 = "Conseil en Systèmes de Management (ISO)"; //
    $slide3Text3 = "Formation et Développement des Compétences"; //
    $slide3Text4 = "Audits Internes et Audits à Blanc"; //
    $slide3Text5 = "Optimisez Vos Processus"; //
    $slide3Text6 = "Expertise en Qualité, Hygiène, Sécurité et Environnement."; //
@endphp
<div class="full-row p-0 overflow-hidden">
    <div id="slider" style="width:1920px; height:850px; margin:0 auto; margin-bottom: 0px;">
        <div class="ls-slide" data-ls="bgsize:auto; bgposition:50% 80%; transitionorigami:true; kenburnsscale:1.2;">
            <img width="1920" height="1281" src="{{ $sliderImg1 }}" class="ls-bg" alt=""/>
            <p style="text-shadow: 0 15px 15px rgba(0,0,0,.5);top:44%; left:50%; text-align:center; font-weight:700; font-size:80px; font-family:Nunito Sans; width:60%; line-height:110px; white-space:normal;" class="ls-l color-white" data-ls="durationin:2000; easingin:easeOutQuart; fadein:false; rotatein:-3; offsetxout:left; durationout:750; startatout:allinandloopend + 1500; easingout:easeInQuart; fadeout:false; rotateout:-10; texttransitionin:true; texttypein:words_center; textoffsetyin:50|-50; textdurationin:1500; texteasingin:easeOutQuart; textstartatin:transitioninstart + 0;">{{ $slide1Text1 }}</p>

            <p style="top:65%; left:480px; mix-blend-mode:normal; font-family:Nunito Sans; font-size:96px; opacity:.2;" class="ls-l color-white" data-ls="offsetxin:right; durationin:750; delayin:4000; easingin:easeOutQuart; rotatein:-80; easingout:easeInQuart; rotateout:-120; scalexout:0; scaleyout:0; loop:true; loopoffsetx:-80; loopoffsety:10; loopduration:2000; loopstartat:transitioninend - 500; loopeasing:easeInOutQuart; looprotate:-10; loopscalex:.6; loopscaley:.6; looptransformorigin:slidercenter slidermiddle 0; loopcount:1; static:2; rotation:-90;">{{ $slide1Text2 }}</p>
            <p style="top:50%; left:550px; text-align:left; mix-blend-mode:normal; font-family:Nunito Sans; font-size:100px; line-height:100px; opacity:.2;" class="ls-l color-white" data-ls="offsetxin:right; durationin:750; delayin:4000; easingin:easeOutQuart; rotatein:10; easingout:easeInQuart; rotateout:-120; scalexout:0; scaleyout:0; loop:true; loopduration:2000; loopstartat:transitioninend - 500; loopeasing:easeInOutQuart; looprotate:-10; loopscalex:.6; loopscaley:.6; looptransformorigin:slidercenter slidermiddle 0; loopcount:1; static:2;">
                {{ $slide1Text3 }}<br>{{ $slide1Text4 }}
            </p>

            <p style="top:65%; left:480px; mix-blend-mode:overlay; font-family:Nunito Sans; font-size:96px;" class="ls-l color-white" data-ls="offsetxin:right; durationin:750; delayin:4000; easingin:easeOutQuart; rotatein:-80; easingout:easeInQuart; rotateout:-120; scalexout:0; scaleyout:0; loop:true; loopoffsetx:-80; loopoffsety:10; loopduration:2000; loopstartat:transitioninend - 500; loopeasing:easeInOutQuart; looprotate:-10; loopscalex:.6; loopscaley:.6; looptransformorigin:slidercenter slidermiddle 0; loopcount:1; static:2; rotation:-90;">{{ $slide1Text2 }}</p>
            <p style="top:50%; left:550px; text-align:left; mix-blend-mode:overlay; font-family:Nunito Sans; font-size:100px; line-height:100px;" class="ls-l color-white" data-ls="offsetxin:right; durationin:750; delayin:4000; easingin:easeOutQuart; rotatein:10; easingout:easeInQuart; rotateout:-120; scalexout:0; scaleyout:0; loop:true; loopduration:2000; loopstartat:transitioninend - 500; loopeasing:easeInOutQuart; looprotate:-10; loopscalex:.6; loopscaley:.6; looptransformorigin:slidercenter slidermiddle 0; loopcount:1; static:2;">
                {{ $slide1Text3 }}<br>{{ $slide1Text4 }}
            </p>
        </div>
        <div class="ls-slide" data-ls="bgsize:auto; bgposition:50% 100%; duration:2700; transition2d:5; transitionduration:1; kenburnsscale:1.2;">
            <img width="1920" height="1281" src="{{ $sliderImg2 }}" class="ls-bg" alt="" />
            <img width="706" height="579" src="{{ $k1 }}" class="ls-l" alt="" style="top:79px; left:-19px;" data-ls="offsetxin:left; durationin:1250; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">
            <img width="439" height="564" src="{{ $k2 }}" class="ls-l" alt="" style="top:95px; left:1219px;" data-ls="offsetxin:500; durationin:1250; delayin:250; easingin:easeOutQuad; fadein:false; rotatein:60; offsetxout:500; easingout:easeInQuad; fadeout:false; rotateout:60;">
            <img width="439" height="581" src="{{ $k3 }}" class="ls-l" alt="" style="top:69px; left:868px;" data-ls="offsetyin:-680; durationin:1250; delayin:500; easingin:easeOutQuad; fadein:false; rotatein:60; offsetyout:-680; easingout:easeInQuad; fadeout:false; rotateout:60;">
            <img width="800" height="553" src="{{ $f1 }}" class="ls-l" alt="" style="top:-229px; left:-38px;" data-ls="offsetxin:-200; offsetyin:top; durationin:2400; easingin:easeOutCubic; fadein:false; rotatein:-30; offsetxout:-200; offsetyout:top; easingout:easeInQuart; fadeout:false; rotateout:-30;">
            <img width="592" height="687" src="{{ $f2 }}" class="ls-l" alt="" style="top:169px; left:652px;" data-ls="offsetxin:200; offsetyin:bottom; durationin:2700; easingin:easeOutCubic; fadein:false; rotatein:20; offsetxout:200; offsetyout:bottom; easingout:easeInQuart; fadeout:false; rotateout:20;">
            @if(!empty($slide2Text1))
                <p style="top:50%; left:50%; text-align:center; font-weight:700; font-size:60px;" class="ls-l color-white" data-ls="durationin:1000;">{{ $slide2Text1 }}</p>
            @endif
        </div>
        <div class="ls-slide" data-ls="bgsize:auto; bgposition:50% 100%; duration:7500; transitionorigami:true; kenburnsscale:1.2;">
            <img width="1920" height="1281" src="{{ $sliderImg3 }}" class="ls-bg" alt="" />
            <p style="text-shadow: 0 5px 10px rgba(0,0,0,.5);top:235px; left:330px; text-align:center; font-weight:700; font-size:50px; width:60%; font-family:Nunito Sans; white-space:normal;" class="ls-l color-primary" data-ls="offsetyin:-50; easingin:easeOutCubic; rotatexin:30;">{{ $slide3Text1 }}</p>

            <p style="text-shadow: 0 1px 2px rgba(0,0,0,.65);top:335px; left:630px; text-align:left; font-weight:400; font-size:24px; font-family:'Roboto', sans-serif; color:#ffffff; line-height:55px; width:500px;" class="ls-l" data-ls="transitionin:false; transitionout:false; texttransitionin:true; texttypein:lines_asc; textshiftin:100; textoffsetyin:-30; texteasingin:easeOutQuint; textstartatin:transitioninend + 500; texttransitionout:true; texttypeout:lines_desc; textshiftout:100; textoffsetyout:-30; texteasingout:easeInQuint; textstartatout:allinandloopend + 2500;">
                {{ $slide3Text2 }}<br>{{ $slide3Text3 }}<br>{{ $slide3Text4 }}<br>{{ $slide3Text5 }}
            </p>
            <p style="text-shadow: 0 1px 2px rgba(0,0,0,.65);top:330px; left:50%; text-align:right; font-weight:600; font-size:50px; font-family:'Roboto', sans-serif; color:#ffffff;" class="ls-l" data-ls="offsetyin:-30; delayin:5800; easingin:easeOutQuint; offsetyout:-30; easingout:easeInQuint;">{{ $slide3Text6 }}</p>
        </div>



        <div class="ls-slide" data-ls="bgsize:auto; bgposition:50% 100%; duration:7500; transitionorigami:true; kenburnsscale:1.2;">
            <img width="1920" height="1281" src="{{ $sliderImg3 }}" class="ls-bg" alt="" />
            <p style="text-shadow: 0 5px 10px rgba(0,0,0,.5);top:235px; left:330px; text-align:center; font-weight:700; font-size:50px; width:60%; font-family:Nunito Sans; white-space:normal;" class="ls-l color-primary" data-ls="offsetyin:-50; easingin:easeOutCubic; rotatexin:30;">{{ $slide3Text1 }}</p>

            <p style="text-shadow: 0 1px 2px rgba(0,0,0,.65);top:335px; left:630px; text-align:left; font-weight:400; font-size:24px; font-family:'Roboto', sans-serif; color:#ffffff; line-height:55px; width:500px;" class="ls-l" data-ls="transitionin:false; transitionout:false; texttransitionin:true; texttypein:lines_asc; textshiftin:100; textoffsetyin:-30; texteasingin:easeOutQuint; textstartatin:transitioninend + 500; texttransitionout:true; texttypeout:lines_desc; textshiftout:100; textoffsetyout:-30; texteasingout:easeInQuint; textstartatout:allinandloopend + 2500;">
                {{ $slide3Text2 }}<br>{{ $slide3Text3 }}<br>{{ $slide3Text4 }}<br>{{ $slide3Text5 }}
            </p>
            <p style="text-shadow: 0 1px 2px rgba(0,0,0,.65);top:330px; left:50%; text-align:right; font-weight:600; font-size:50px; font-family:'Roboto', sans-serif; color:#ffffff;" class="ls-l" data-ls="offsetyin:-30; delayin:5800; easingin:easeOutQuint; offsetyout:-30; easingout:easeInQuint;">{{ $slide3Text6 }}</p>
        </div>
    </div>
</div>