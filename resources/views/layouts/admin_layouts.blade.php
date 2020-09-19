<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="description" content="旅行情報の提供・飛行便、宿泊予約">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">    
        <!-- Core Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="{{ asset('css/responsive/responsive.css') }}" rel="stylesheet">
    </head>
    <body>
        @component('components.admin_header')
        @endcomponent
        <div>
            @yield('content')
        </div>
        
        @component('components.footer')
        @endcomponent
         <!-- <script src="{{ asset('js/app.js') }}"></script> -->
         <!-- Jquery-2.2.4 js -->
        <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
        <!-- Bootstrap-4 js -->
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
        <!-- All Plugins JS -->
        <script src="{{ asset('js/others/plugins.js') }}"></script>
        <!-- Active JS -->
        <script src="{{ asset('js/active.js') }}"></script>
    </body>
</html> 