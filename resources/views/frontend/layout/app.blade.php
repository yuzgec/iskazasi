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

        <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id={{config('settings.googleTagManager')}}">
            </script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{config('settings.googleTagManager')}}');
        </script>
    </div>
</body>
</html>
