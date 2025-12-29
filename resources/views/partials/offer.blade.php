@php
    // ================================
    //    SECTION "APPEL À L'ACTION"
    //     (Mise à jour QualiPro Plus)
    // ================================

    $offerBg = asset('assets/images/others/3.jpg');

    // عنوان يركز على الشراكة نحو التميز
    $offerTitle = 'Votre Partenaire vers la Certification'; //
    
    // نص يدعو الشركات لاتخاذ خطوة نحو التطوير المستدام
    $offerText = 'Faites le premier pas vers l’excellence opérationnelle. Nos experts vous accompagnent dans chaque étape de votre démarche de certification et d’amélioration continue.'; //

    $offerSignInUrl = '/contactez-nous'; // رابط صفحة الاتصال
    $offerSignInText = 'Demander un Devis'; // استبدال 'Join Now' بطلب عرض سعر مهني
@endphp

<div class="connect-us position-relative py-80 overlay-secondery" style="background: url({{ $offerBg ?? '' }}) no-repeat fixed top center/cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="get-help bg-dark p-40 lg-mt-30 wow animated slideInRight animated">
                    <h3 class="thumb-title color-white">{{ $offerTitle ?? '' }}</h3>
                    <div class="text-area color-white mt-15">
                        <p>{{ $offerText ?? '' }}</p>
                    </div>
                    <form class="mt-15" action="#" method="post">
                        <div class="form-group">
                            <input class="form-control bg-gray" type="text" name="email" placeholder="E-mail">
                        </div>
                    </form>
                    <div class="btn-group mt-10">
                        <a class="btn btn-primary mr-30 d-block md-mr-0" href="{{ $offerSignInUrl ?? '#' }}">{{ $offerSignInText ?? '' }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>