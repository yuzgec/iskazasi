@extends('frontend.layout.app')
@section('content')

    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- SIKÇA SORULAN SORULAR</h1>
                    <span class="d-block text-4">İş Kazası Avukatı </span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                        <li><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="active">S.S.S</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container container-fluid">
        <div class="row align-items-center justify-content-center mb-4">
            <div class="col-lg-12 pe-lg-5 mb-5 mb-lg-0">
                <div class="accordion custom-accordion-style-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600" id="accordion1">
                    <div class="card card-default">
                        <div class="card-header" id="collapse1HeadingOne">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse1One" aria-expanded="false" aria-controls="collapse1One">
                                    İş kazası nedir?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1One" class="collapse" aria-labelledby="collapse1HeadingOne" data-bs-parent="#accordion1">
                            <div class="card-body">
                                <p class="mb-0">
                                    İş kazası, bir çalışanın işyerinde veya işle ilgili bir görevi yerine getirirken yaşadığı, yaralanma veya sağlık sorunlarına neden olan olaydır. Bu, iş yerinde, işe giderken veya işten dönerken meydana gelebilir.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-header" id="collapse1HeadingTwo">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse1Two" aria-expanded="false" aria-controls="collapse1Two">
                                    İş kazasından sonra ne yapmalıyım?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1Two" class="collapse" aria-labelledby="collapse1HeadingTwo" data-bs-parent="#accordion1">
                            <div class="card-body">
                                <p class="mb-0">
                                    İş kazası meydana geldiğinde, öncelikle sağlık yardımı alınmalıdır. Ardından, kaza işverene ve ilgili yetkili kurumlara rapor edilmelidir. Kazanın detayları, oluş şekli ve tanıklar kaydedilmelidir.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-header" id="collapse1HeadingThree">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse1Three" aria-expanded="false" aria-controls="collapse1Three">
                                    İş kazası sonrasında tazminat hakkım var mı?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1Three" class="collapse" aria-labelledby="collapse1HeadingThree" data-bs-parent="#accordion1">
                            <div class="card-body">
                                <p class="mb-0">
                                    Çoğu durumda, iş kazası sonucu yaralanan çalışanlar, tıbbi masraflar, kaybedilen ücretler ve diğer zararlar için tazminat talep edebilir. Bu haklar, ülkenin iş ve sigorta mevzuatına göre değişiklik gösterir.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-header" id="collapse1HeadingFour">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse1Four" aria-expanded="false" aria-controls="collapse1Four">
                                    İş kazası raporunu kim hazırlamalı?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1Four" class="collapse" aria-labelledby="collapse1HeadingFour" data-bs-parent="#accordion1">
                            <div class="card-body">
                                <p class="mb-0">
                                    İş kazası raporu genellikle işveren tarafından hazırlanır. Ancak, bazı durumlarda, bu raporun hazırlanmasında iş sağlığı ve güvenliği uzmanları veya ilgili yetkili kurumlar da yer alabilir.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-header" id="collapse1HeadingFive">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse1Five" aria-expanded="false" aria-controls="collapse1Five">
                                    İş kazasını işverene bildirmeme ne kadar sürem var?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1Five" class="collapse" aria-labelledby="collapse1HeadingFive" data-bs-parent="#accordion1">
                            <div class="card-body">
                                <p class="mb-0">
                                    İş kazasını bildirme süresi ülkeden ülkeye değişir. Genellikle, kazanın hemen ardından veya en kısa sürede işverene bildirmek gerekmektedir.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-header" id="collapse1HeadingSix">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse1Six" aria-expanded="false" aria-controls="collapse1Six">
                                    İş kazası sonrası işverenin sorumluluğu nedir?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1Six" class="collapse" aria-labelledby="collapse1HeadingSix" data-bs-parent="#accordion1">
                            <div class="card-body">
                                <p class="mb-0">
                                    İşveren, kazanın soruşturulmasını sağlamak, gerekli güvenlik önlemlerini almak ve çalışanın tıbbi ve mali ihtiyaçlarının karşılanmasına yardımcı olmakla yükümlüdür.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-header" id="collapse1HeadingSeven">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse1Seven" aria-expanded="false" aria-controls="collapse1Seven">
                                    İş kazalarını önlemek için ne yapılabilir?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1Seven" class="collapse" aria-labelledby="collapse1HeadingSeven" data-bs-parent="#accordion1">
                            <div class="card-body">
                                <p class="mb-0">
                                    İş kazalarını önlemek için işyerinde güvenli çalışma koşullarının sağlanması, düzenli eğitimler verilmesi, risk değerlendirmeleri yapılması ve
                                    çalışanların güvenlik kurallarına uymalarının teşvik edilmesi gerekir.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
