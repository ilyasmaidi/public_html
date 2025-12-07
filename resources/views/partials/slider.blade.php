@php
    $sliderImg1 = asset('assets/images/slider/1.jpg');
    $sliderImg2 = asset('assets/images/slider/xmas-table-bg-1.jpg');
    $sliderImg3 = asset('assets/images/slider/2.jpg');
    $k1 = asset('assets/images/slider/k1.png');
    $k2 = asset('assets/images/slider/k2.png');
    $k3 = asset('assets/images/slider/k3.png');
    $f1 = asset('assets/images/slider/f1.png');
    $f2 = asset('assets/images/slider/f2.png');
    $slide1Text1 = "We’ve been tackling poverty in communities to build better lives";
    $slide1Text2 = "Raise Your";
    $slide1Text3 = "Helping";
    $slide1Text4 = "Hand";
    $slide2Text1 = "";
    $slide3Text1 = "Our Helping Sectors Are";
    $slide3Text2 = "Safe Water, Sanitation, and Hygiene";
    $slide3Text3 = "Second Hand Goods Donation";
    $slide3Text4 = "Education Needed for Every Child";
    $slide3Text5 = "Give Them Opportunities";
    $slide3Text6 = "Open 24/7 for New Volunteer.";
@endphp
<div class="full-row p-0 overflow-hidden">
    <div id="slider" style="width:1920px; height:850px; margin:0 auto; margin-bottom: 0px;">
        <!-- Slide 1-->
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
        <!-- Slide 2-->
        <div class="ls-slide" data-ls="bgsize:auto; bgposition:50% 100%; duration:2700; transition2d:5; transitionduration:1; kenburnsscale:1.2;">
            <img width="1920" height="1281" src="{{ $sliderImg2 }}" class="ls-bg" alt="" />
            <img width="706" height="579" src="{{ $k1 }}" class="ls-l" alt="" style="top:79px; left:-19px;" data-ls="offsetxin:left; durationin:1250; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">
            <img width="439" height="564" src="{{ $k2 }}" class="ls-l" alt="" style="top:95px; left:1219px;" data-ls="offsetxin:500; durationin:1250; delayin:250; easingin:easeOutQuad; fadein:false; rotatein:60; offsetxout:500; easingout:easeInQuad; fadeout:false; rotateout:60;">
            <img width="439" height="581" src="{{ $k3 }}" class="ls-l" alt="" style="top:69px; left:868px;" data-ls="offsetyin:-680; durationin:1250; delayin:500; easingin:easeOutQuad; fadein:false; rotatein:60; offsetyout:-680; easingout:easeInQuad; fadeout:false; rotateout:60;">
            <img width="800" height="553" src="{{ $f1 }}" class="ls-l" alt="" style="top:-229px; left:-38px;" data-ls="offsetxin:-200; offsetyin:top; durationin:2400; easingin:easeOutCubic; fadein:false; rotatein:-30; offsetxout:-200; offsetyout:top; easingout:easeInQuart; fadeout:false; rotateout:-30;">
            <img width="592" height="687" src="{{ $f2 }}" class="ls-l" alt="" style="top:169px; left:652px;" data-ls="offsetxin:200; offsetyin:bottom; durationin:2700; easingin:easeOutCubic; fadein:false; rotatein:20; offsetxout:200; offsetyout:bottom; easingout:easeInQuart; fadeout:false; rotateout:20;">
        </div>
        <!-- Slide 3-->
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