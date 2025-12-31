@php
    // جلب بيانات العناوين
    $section = \App\Models\SectionSetting::where('section_name', 'causes_section')->first();
    
    $causesSubtitle = $section->subtitle_fr ?? 'Expertise en Certification';
    $causesTitle = $section->title_fr ?? 'Nos Domaines d’Action';
    $causesDesc = $section->desc_fr ?? 'Nous accompagnons les entreprises vers l’excellence via le conseil, la formation et l’audit...';

    // جلب الخدمات مرتبة
    $services = \App\Models\Service::orderBy('order', 'asc')->get();
@endphp

<section id="causes" class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="title mb-30 w-75 text-center mx-auto wow animated slideInUp">
                    <span class="color-primary" style="color: #ffcc00; font-weight: bold;">{{ $causesSubtitle }}</span>
                    <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20">{{ $causesTitle }}</h2>
                    <p>{{ $causesDesc }}</p>
                </div>
            </div>
            
            @foreach($services as $item)
            <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                {{-- حافظنا على نفس الكلاسات تماماً --}}
                <div class="service-4 p-30 mt-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01 wow animated slideInUp" style="min-height: 250px; border-radius: 8px;">
                    <div class="d-inline-block mb-15">
                        <a href="#"><h4 class="box-title-3 d-inline-block" style="color: #333; font-weight: 600;">{{ $item->title_fr }}</h4></a>
                    </div>
                    <p class="text-muted">{{ $item->desc_fr }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>