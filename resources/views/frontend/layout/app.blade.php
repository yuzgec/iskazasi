<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    @include('frontend.layout.css')
    @yield('customCSS')
    @include('frontend.layout.css')
</head>
<body>
    <div class="body">
        @include('frontend.layout.header')
        <div role="main" class="main">
            @yield('content')
            <a href="https://api.whatsapp.com/send?phone={{ config('settings.whatsapp') }}&text=Merhaba bilgi almak istiyorum." class="float" target="_blank" title="Whatsapp Bilgi Hattı">
                <i class="fab fa-whatsapp my-float"></i>
            </a>
        </div>
        @include('frontend.layout.footer')
        @include('frontend.layout.js')
        @yield('customJS')
    </div>
</body>
</html>
