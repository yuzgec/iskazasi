@extends('frontend.layout.app')
@section('customCSS')
<style>
    .yildiz{
        color:red !important;
    }

    .yaziplan{
        background : #003366 !important;
        color:white;
        padding: 5px;
    }
</style>    
@endsection
@section('content')

    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- TRAFİK KAZASI TAZMİNAT HESAPLAMA</h1>
                    <span class="d-block text-4">İş Kazası Avukatı </span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                        <li><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="active">TAZMİNAT HESAPLAMA</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">

            <div class="card card-border card-border-top bg-color-light mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p>Bu form ve hesaplama kodu, kullanıcının yaş, kusur oranı, sakatlık oranı ve cinsiyet bilgilerini alarak basit bir tazminat hesaplaması yapar. Hesaplama modeli basit tutulmuştur ve gerçek hayatta daha karmaşık faktörler ve yasal gereksinimler dikkate alınmalıdır. </p>
                              <form class="contact-form" action="{{ route('trcalcpost')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">Adınız Soyadınız <span class="yildiz">*</span> </label>
                                        <input type="text" value="{{ old('name')}}" class="@if($errors->has('name')) is-invalid @endif  form-control text-3 h-auto py-2" name="name" >
                                        @if($errors->has('name'))
                                        <div class="invalid-feedback">{{$errors->first('name')}}</div>
                                    @endif
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">Telefon Numaranız <span class="yildiz">*</span></label>
                                        <input type="text" value="{{ old('phone')}}" class="@if($errors->has('phone')) is-invalid @endif  form-control text-3 h-auto py-2" name="phone">
                                        @if($errors->has('phone'))
                                        <div class="invalid-feedback">{{$errors->first('phone')}}</div>
                                    @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label class="form-label">Cinsiyet</label>
                                        <div class="custom-select-1">
                                              <select class="form-select form-control h-auto py-2" name="gender">
                                                <option value="erkek">Erkek</option>
                                                <option value="kadin">Kadın</option>
                                              </select>
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="form-label">Şehir</label>
                                        <div class="custom-select-1">
                                              <select class="form-select form-control h-auto py-2" name="city">
                                                    <option>Seçiniz...</option>
                                                    @foreach ($sehir as $item)
                                                        <option value="{{ $item->sehir_title}}">{{ $item->sehir_title}}</option>
                                                    @endforeach
                                              </select>
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">Yaşınız <span class="yildiz">*</span></label>
                                        <input type="number" value="{{ old('age')}}" class="form-control text-3 h-auto py-2" name="age">
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">Aylık Maaş <span class="yildiz">*</span></label>
                                        <input type="number" value="{{ old('income')}}" class="form-control text-3 h-auto py-2" name="income">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">Sakatlık Oranı <span class="yildiz">*</span></label>
                                        <input type="number" value="{{ old('disability') }}"  class="form-control text-3 h-auto py-2" name="disability">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">Kusur Oranı <span class="yildiz">*</span></label>
                                        <input type="number" value="{{ old('fault_rate') }}" class="form-control text-3 h-auto py-2" name="fault_rate">
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="form-label mb-1 text-2">Mesajınız</label>
                                        <textarea rows="4" class="form-control text-3 h-auto py-2" name="message">{{ old('message') }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="agree" checked>
                                            <label class="form-check-label" for="tabContent9Checkbox">
                                                <a class="text-decoration-underline"  data-bs-toggle="modal" data-bs-target="#aydinlatmametni">Aydınlatma Metni</a> Okudum Kabul Ediyorum.
                                            </label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="form-group col">
                                        <input type="submit" value="HESAPLA" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>


            <div class="card card-border card-border-top bg-color-light mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                                                    
                            <h2 class="yaziplan">İş Kazası Tazminatı Nedir?</h2>

                            <p>İş kazası tazminatı, iş yerinde meydana gelen bir kaza sonucunda yaralanan veya hayatını kaybeden çalışanın ya da ailesinin maddi zararlarını karşılamak amacıyla ödenen bir tazminattır. Bu tazminat, iş kazası sonucu oluşan maddi ve manevi zararları telafi etmeyi amaçlar.</p>

                            <h2 class="yaziplan">İş Kazası Tazminat Türleri</h2>

                            <h4>1. Maddi Tazminat</h4>

                            <p>Maddi tazminat, kazanın sebep olduğu ekonomik kayıpları karşılamak için ödenir. Bu, hastane masrafları, ilaç giderleri, rehabilitasyon maliyetleri ve çalışanın kazanç kaybını içerebilir.</p>

                            <h4>2. Manevi Tazminat</h4>

                            <p>Manevi tazminat, iş kazasının sebep olduğu psikolojik ve duygusal zararları telafi etmek için ödenir. Bu, çalışanın yaşadığı acı, stres ve ruhsal sıkıntılar için verilir.</p>

                            <h2 class="yaziplan">İş Kazası Tazminat Hesaplama Kriterleri</h2>

                            <h4>1. Çalışanın Geliri</h4>

                            <p>Tazminat miktarı, kazadan önce çalışanın elde ettiği gelire göre hesaplanır. Gelir seviyesi, tazminatın belirlenmesinde önemli bir faktördür.</p>

                            <h4>2. İş Gücü Kaybı Oranı</h4>

                            <p>Kazadan sonra çalışanın iş gücünde kayıp oranı belirlenir. Bu oran, tazminatın hesaplanmasında önemli bir rol oynar. Tam iş gücü kaybı, tazminat miktarını artırır.</p>

                            <h4>3. Tedavi Giderleri</h4>

                            <p>Kazanın ardından ortaya çıkan tedavi giderleri de tazminat hesaplamasında dikkate alınır. Hastane masrafları, ilaç giderleri ve rehabilitasyon maliyetleri tazminata eklenir.</p>

                            <h4>4. Yaş ve Kıdem</h4>

                            <p>Çalışanın yaşı ve iş yerindeki kıdemi de tazminat miktarını etkileyen faktörlerdendir. Genç çalışanların iş gücü kaybı daha uzun vadeli olduğundan, tazminat miktarı da buna göre artar.</p>

                            <h2 class="yaziplan">İş Kazası Tazminatı Nasıl Hesaplanır?</h2>

                            <h4>Adım 1: Gelirin Belirlenmesi</h4>

                            <p>İlk adım olarak, çalışanın kazadan önceki aylık veya yıllık geliri belirlenir. Bu, brüt maaş, primler ve diğer ek ödemeleri içerir.</p>

                            <h4>Adım 2: İş Gücü Kaybı Oranının Belirlenmesi</h4>

                            <p>Kazanın ardından, çalışanın iş gücü kaybı oranı tıbbi raporlar ve uzman görüşleri ile belirlenir. Bu oran, tazminat miktarını doğrudan etkiler.</p>

                            <h4>Adım 3: Tedavi Giderlerinin Hesaplanması</h4>

                            <p>Kazadan sonra ortaya çıkan tüm tedavi giderleri toplanır. Bu giderler, tazminat hesaplamasına eklenir.</p>

                            <h4>Adım 4: Manevi Tazminatın Belirlenmesi</h4>

                            <p>Çalışanın yaşadığı psikolojik ve duygusal zararlar da değerlendirilir ve manevi tazminat miktarı belirlenir.</p>

                            <h4>Adım 5: Tazminat Miktarının Hesaplanması</h4>

                            <p>Yukarıdaki adımlarda belirlenen tüm faktörler toplanarak nihai tazminat miktarı hesaplanır.</p>

                            <h2 class="yaziplan">Kazagecirdim.com.tr ile Tazminat Hesaplama Desteği</h2>

                            <h4>Profesyonel Danışmanlık</h4>

                            <p>İş kazası tazminatı hesaplama konusunda uzman avukatlarımız, size en doğru ve adil tazminatı almanız için rehberlik eder.</p>

                            <h4>Detaylı Hesaplama Hizmeti</h4>

                            <p>Tüm gelir, iş gücü kaybı, tedavi giderleri ve manevi zararlarınızı dikkate alarak detaylı bir tazminat hesaplama hizmeti sunuyoruz.</p>

                            <h4>Hızlı ve Güvenilir Destek</h4>

                            <p>Tazminat sürecinizi hızlandırmak ve hak ettiğiniz tazminatı en kısa sürede almanız için çalışıyoruz. Güvenilir ve profesyonel hizmet anlayışımızla yanınızdayız.</p>

                            <h4 class="yaziplan">Sıkça Sorulan Sorular</h4>

                            <h4>İş kazası tazminatı nasıl talep edilir?</h4>

                            <p>İlk olarak, iş kazasını yetkililere bildirin ve gerekli belgeleri hazırlayın. Ardından, hukuki destek almak için bir avukata başvurun ve tazminat talep sürecini başlatın.</p>

                            <h4>Tazminat miktarımı nasıl öğrenebilirim?</h4>

                            <p>Tazminat miktarınızı öğrenmek için uzman bir avukata danışmanız gerekmektedir. Tüm faktörler dikkate alınarak detaylı bir hesaplama yapılacaktır.</p>

                        </div>
                    </div>               
                </div>
            </div>

        </div>
    </div>
@endsection
