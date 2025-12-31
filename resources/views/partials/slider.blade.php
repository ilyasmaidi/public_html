@php
    // جلب البيانات من قاعدة البيانات
    $activeSliders = \App\Models\Slider::orderBy('order', 'asc')->get();

    // في حال كانت قاعدة البيانات فارغة، نستخدم الصور الافتراضية كاحتياط
    $k1 = asset('assets/images/slider/k1.png');
    $k2 = asset('assets/images/slider/k2.png');
    $k3 = asset('assets/images/slider/k3.png');
    $f1 = asset('assets/images/slider/f1.png');
    $f2 = asset('assets/images/slider/f2.png');
@endphp

<div class="full-row p-0 overflow-hidden">
    <div id="slider" style="width:1920px; height:850px; margin:0 auto; margin-bottom: 0px;">
        
        @foreach($activeSliders as $index => $item)

            {{-- السلايد الأول (Index 0) --}}
            @if($index == 0)
            <div class="ls-slide" data-ls="bgsize:auto; bgposition:50% 80%; transitionorigami:true; kenburnsscale:1.2;">
                <img width="1920" height="1281" src="{{ asset($item->image) }}" class="ls-bg" alt=""/>
                
                <p style="text-shadow: 0 15px 15px rgba(0,0,0,.5);top:44%; left:50%; text-align:center; font-weight:700; font-size:80px; font-family:Nunito Sans; width:60%; line-height:110px; white-space:normal;" class="ls-l color-white" data-ls="durationin:2000; easingin:easeOutQuart; fadein:false; rotatein:-3; offsetxout:left; durationout:750; startatout:allinandloopend + 1500; easingout:easeInQuart; fadeout:false; rotateout:-10; texttransitionin:true; texttypein:words_center; textoffsetyin:50|-50; textdurationin:1500; texteasingin:easeOutQuart; textstartatin:transitioninstart + 0;">{{ $item->title_fr }}</p>

                {{-- طبقات النصوص الجانبية (نص شفاف + Overlay) --}}
                @foreach(['opacity:.2; mix-blend-mode:normal;', 'mix-blend-mode:overlay;'] as $style)
                <p style="top:65%; left:480px; {{ $style }} font-family:Nunito Sans; font-size:96px;" class="ls-l color-white" data-ls="offsetxin:right; durationin:750; delayin:4000; easingin:easeOutQuart; rotatein:-80; easingout:easeInQuart; rotateout:-120; scalexout:0; scaleyout:0; loop:true; loopoffsetx:-80; loopoffsety:10; loopduration:2000; loopstartat:transitioninend - 500; loopeasing:easeInOutQuart; looprotate:-10; loopscalex:.6; loopscaley:.6; looptransformorigin:slidercenter slidermiddle 0; loopcount:1; static:2; rotation:-90;">{{ $item->subtitle_fr }}</p>
                
                <p style="top:50%; left:550px; text-align:left; {{ $style }} font-family:Nunito Sans; font-size:100px; line-height:100px;" class="ls-l color-white" data-ls="offsetxin:right; durationin:750; delayin:4000; easingin:easeOutQuart; rotatein:10; easingout:easeInQuart; rotateout:-120; scalexout:0; scaleyout:0; loop:true; loopduration:2000; loopstartat:transitioninend - 500; loopeasing:easeInOutQuart; looprotate:-10; loopscalex:.6; loopscaley:.6; looptransformorigin:slidercenter slidermiddle 0; loopcount:1; static:2;">
                    {!! nl2br(e($item->description_fr)) !!}
                </p>
                @endforeach
            </div>

            {{-- السلايد الثاني (Index 1) --}}
            @elseif($index == 1)
            <div class="ls-slide" data-ls="bgsize:auto; bgposition:50% 100%; duration:2700; transition2d:5; transitionduration:1; kenburnsscale:1.2;">
                <img width="1920" height="1281" src="{{ asset($item->image) }}" class="ls-bg" alt="" />
                
                {{-- العناصر الزخرفية الديناميكية من قاعدة البيانات --}}
                <img width="706" height="579" src="{{ asset($item->k1_img ?? $k1) }}" class="ls-l" style="top:79px; left:-19px;" data-ls="offsetxin:left; durationin:1250; rotatein:-60;">
                <img width="439" height="564" src="{{ asset($item->k2_img ?? $k2) }}" class="ls-l" style="top:95px; left:1219px;" data-ls="offsetxin:500; durationin:1250; delayin:250; rotatein:60;">
                <img width="439" height="581" src="{{ asset($item->k3_img ?? $k3) }}" class="ls-l" style="top:69px; left:868px;" data-ls="offsetyin:-680; durationin:1250; delayin:500; rotatein:60;">
                
                {{-- صور الـ F تأتي من الأعمدة الجديدة --}}
                <img width="800" height="553" src="{{ asset($item->f1_img ?? $f1) }}" class="ls-l" style="top:-229px; left:-38px;" data-ls="offsetxin:-200; offsetyin:top; durationin:2400; rotatein:-30;">
                <img width="592" height="687" src="{{ asset($item->f2_img ?? $f2) }}" class="ls-l" style="top:169px; left:652px;" data-ls="offsetxin:200; offsetyin:bottom; durationin:2700; rotatein:20;">
                
                @if(!empty($item->title_fr))
                    <p style="top:50%; left:50%; text-align:center; font-weight:700; font-size:60px;" class="ls-l color-white" data-ls="durationin:1000;">{{ $item->title_fr }}</p>
                @endif
            </div>

            {{-- السلايد الثالث وما يليه --}}
            @else
            <div class="ls-slide" data-ls="bgsize:auto; bgposition:50% 100%; duration:7500; transitionorigami:true; kenburnsscale:1.2;">
                <img width="1920" height="1281" src="{{ asset($item->image) }}" class="ls-bg" alt="" />
                
                <p style="text-shadow: 0 5px 10px rgba(0,0,0,.5);top:235px; left:330px; text-align:center; font-weight:700; font-size:50px; width:60%; font-family:Nunito Sans; white-space:normal;" class="ls-l color-primary" data-ls="offsetyin:-50; easingin:easeOutCubic; rotatexin:30;">{{ $item->title_fr }}</p>

                <p style="text-shadow: 0 1px 2px rgba(0,0,0,.65);top:335px; left:630px; text-align:left; font-weight:400; font-size:24px; font-family:'Roboto', sans-serif; color:#ffffff; line-height:55px; width:500px;" class="ls-l" data-ls="transitionin:false; texttransitionin:true; texttypein:lines_asc; textstartatin:transitioninend + 500;">
                    {!! nl2br(e($item->description_fr)) !!}
                </p>
                
                <p style="text-shadow: 0 1px 2px rgba(0,0,0,.65);top:330px; left:50%; text-align:right; font-weight:600; font-size:50px; font-family:'Roboto', sans-serif; color:#ffffff;" class="ls-l" data-ls="offsetyin:-30; delayin:5800; easingin:easeOutQuint;">{{ $item->subtitle_fr }}</p>
            </div>
            @endif

        @endforeach
    </div>
</div>