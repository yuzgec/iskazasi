@extends('frontend.layout.app')
@section('content')
    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- MAKALELER</h1>
                    <span class="d-block text-4">İş Kazası Avukatı </span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                        <li><a href="{{ route('home') }}">ANASAYFA</a></li>
                        <li class="active">MAKALELER</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="our-blog pt-5 pt-lg-0 pb-lg-5 mb-5 p-relative bg-color-light">
        <div class="container">
            <div class="row justify-content-center justify-lg-content-between">

                @foreach($Blog as $item)
                    <div class="col-sm-12 col-md-6 col-lg-4  mb-lg-0">
                        <article>
                            <div class="card border-0 border-radius-0 box-shadow-1 appear-animation animated fadeInUpShorter appear-animation-visible mb-4" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                                <div class="card-body p-4 z-index-1">
                                    <a href="{{ route('blogdetail' , $item->slug)}}" title="{{ $item->title }}">
                                        <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}" class="img-fluid" alt="{{ $item->title }}">
                                    </a>
                                    <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                                        <time>{{ $item->created_at->diffForHumans()  }}</time> <span class="opacity-3 d-inline-block px-2">|</span> Dr. Turan Çetin</p>
                                    <div class="card-body p-0">
                                        <h4 class="card-title mb-3 text-5 font-weight-bold">
                                            <a href="{{ route('blogdetail' , $item->slug)}}" title="{{ $item->title }}">{{ $item->title }}</a>
                                        </h4>
                                        <a href="{{ route('blogdetail' , $item->slug)}}" title="{{ $item->title }}" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">DEvamını Oku+</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
