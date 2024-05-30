@extends('frontend.layout.app')
@section('content')
    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- İletişime Geç</h1>
                    <span class="d-block text-4">İş Kazası Avukatı </span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                        <li><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="active">İletişim</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row pt-1 pb-4 mb-3">
            <div class="col-lg-8">

                <h2 class="font-weight-bold text-color-dark">- İletişime Geç</h2>
                <form class="contact-form custom-contact-form-style-1" action="{{ route('form') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="{{ old('name') }}" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" placeholder="Adınız Soyadınız *">
                            @if($errors->has('name'))
                                <div class="invalid-feedback">{{$errors->first('name')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="email" value="{{ old('email') }}"  class="@if($errors->has('email')) is-invalid @endif form-control" name="email" placeholder="E-mail *">
                            @if($errors->has('name'))
                                <div class="invalid-feedback">{{$errors->first('email')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="{{ old('phone') }}" class="@if($errors->has('phone')) is-invalid @endif form-control" name="phone"  placeholder="Telefon *">
                            @if($errors->has('name'))
                                <div class="invalid-feedback">{{$errors->first('phone')}}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="{{ old('subject') }}" class="form-control" name="subject"  placeholder="Konu">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-4">
                            <textarea rows="3" class="@if($errors->has('message')) is-invalid @endif form-control" name="message" placeholder="Mesajınız *">{{ old('message') }}</textarea>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">{{$errors->first('message')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input type="submit" value="Mesajı Gönder" class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-4">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">

                <div class="row mb-4">
                    <div class="col">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon mt-1">
                                <i class="icon-location-pin icons"></i>
                            </div>
                            <div class="feature-box-info">
                                <h2 class="font-weight-bold text-color-dark">- Adres</h2>
                                <p class="text-4">
                                    {{ config('settings.adres1') }}

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon mt-1">
                                <i class="icon-phone icons"></i>
                            </div>
                            <div class="feature-box-info">
                                <h2 class="font-weight-bold text-color-dark">- Telefon</h2>
                                <p class="text-4">
                                    {{ config('settings.telefon1') }} <br>
                                    {{ config('settings.telefon2') }}

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon mt-1">
                                <i class="icon-envelope icons"></i>
                            </div>
                            <div class="feature-box-info">
                                <h2 class="font-weight-bold text-color-dark">- Email</h2>
                                <p class="text-4">
                                    <a href="mailto:{{ config('settings.email1') }}" class="text-decoration-none">{{ config('settings.email1') }}</a><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
