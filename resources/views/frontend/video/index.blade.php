@extends('frontend.layout.app')
@section('content')
    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- VİDEO GALERİ</h1>
                    <span class="d-block text-4">Asosyal Danışmanlık</span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                        <li><a href="{{ route('home') }}">ANASAYFA</a></li>
                        <li class="active">VİDEO GALERİ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2 mt-3">
        <div class="row">

            @foreach($Video as $item)
                <div class="col-lg-6  mb-5">
                    <h5>{{ $item->title }}</h5>
                    <div class="embed-responsive-borders border p-2">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $item->video_url }}" title="{{ $item->title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    @endsection
