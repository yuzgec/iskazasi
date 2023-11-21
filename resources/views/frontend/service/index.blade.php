@extends('frontend.layout.app')
@section('content')

    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- HİZMETLERİMİZ</h1>
                    <span class="d-block text-4">İş Kazası Avukatı </span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                        <li><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="active">HİZMETLERİMİZ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container container-fluid">
        <div class="row">
            @foreach($Service->where('category', 1) as $item)
                <div class="col-lg-4 mb-4">
                    <a href="{{ route('servicedetail' , $item->slug)}}" title="{{ $item->title }}">

                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom">
                        <span class="thumb-info-wrapper">
                            <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}" class="img-fluid" alt="{{ $item->title }} - Dr. Turan Çetin">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner line-height-1">{{ $item->title }}</span>
{{--
                                <span class="thumb-info-show-more-content opacity-7"><p class="mb-0 text-1 line-height-5">Buraya kısa bir açıklama yazısı gelebilir. 1 veya 2 cümlededen oluşan</p></span>
--}}
                            </span>
                        </span>
                    </span>
                    </a>
                </div>

            @endforeach
        </div>
    </div>
@endsection
