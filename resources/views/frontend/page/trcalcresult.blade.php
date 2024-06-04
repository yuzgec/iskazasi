@extends('frontend.layout.app')
@section('customCSS')
<meta name="googlebot" content="noindex">
<style>
    a:hover{
        text-decoration: none;
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
                         
                        <div class="list-group">
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action active">
                              Syn. {{$detail->name }}
                            </a>

                            <a href="javascript:void(0)" class="list-group-item list-group-item-action"><b>Yaş : </b>{{ $detail->age}}</a>
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action"><b>Cinsiyet : </b>{{ $detail->gender}}</a>
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action"><b>Maaş :</b> {{ $detail->income}}</a>
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action"><b>Sakatlık Oranı :</b> {{ $detail->disability}}</a>
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action"><b>Kusura Oranı :</b> {{ $detail->fault_rate}}</a>
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action"></a>
                            <a href="javascript:void(0)" class="list-group-item list-group-item-action"><b>
                                Tahmini Tazminat :</b> <span style="color:green">{{ abs($detail->final)}}</span></a>
                        </div>

                        <h3 class="font-weigt-bold" style="margin-top:50px">
                            <a href="{{ route('contactus')}}" title="İletişime Geç">
                                Hemen kazagecirdim.com.tr uzman avukatlarıyla iletişime geç
                            </a>
                        </h3>

                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection