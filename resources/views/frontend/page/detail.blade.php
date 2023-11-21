@extends('frontend.layout.app')
@section('content')

    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- {{ $Detail->title }}</h1>
                    <span class="d-block text-4">İş Kazası Avukatı </span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                        <li><a href="{{ route('home') }}">ANASAYFA</a></li>
                        <li class="active">{{ $Detail->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row pb-4">
            <div class="col-lg-8 mb-5 mb-lg-0 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <h2 class="text-color-dark font-weight-bold text-10 pb-2 mb-4"><em>{{ $Detail->title }}</em></h2>

                @if($Detail->getFirstMediaUrl('page'))
                    <img src="{{ $Detail->getFirstMediaUrl('page') }}" class="img-fluid mb-3" alt="{{ $Detail->title }}">
                @endif

                {!!  $Detail->desc !!}
            </div>
            <div class="col-lg-4 position-relative">
                <aside class="sidebar" data-plugin-sticky="" data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 120}}">
                    @include('frontend.layout.form')

                    <div class="card border-0 border-radius-0 custom-box-shadow-1 px-2 ">
                        <div class="card-body">
                            <h3 class="text-transform-none font-weight-bold pb-3 mb-4">ÇALIŞMA ALANLARIMIZ</h3>
                            <ul class="custom-list-style-1 list list-unstyled font-weight-bold">
                                @foreach($Service->where('category', 1) as $item)
                                    <li>
                                        <a  class="text-decoration-none text-color-dark text-color-hover-primary" href="{{ route('servicedetail' , $item->slug)}}" title="{{ $item->title }}">
                                            <i class="icon-arrow-right icons"></i> {{ $item->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>


@endsection
