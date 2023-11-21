@extends('frontend.layout.app')
@section('content')

    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- REFERANSLARIMIZ</h1>
                    <span class="d-block text-4">İş Kazası Avukatı </span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                        <li><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="active">REFERANSLARIMIZ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container container-fluid">
        <div class="row">
            @foreach($Service->where('category', 3) as $item)
                <div class="col-md-2 col-6 mb-4">
                    <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}" class="img-fluid" alt="{{ $item->title }} - Dr. Turan Çetin">
                </div>
            @endforeach
        </div>
    </div>
@endsection
