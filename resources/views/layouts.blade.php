<html lang="vi">

<head>
    <meta charset="utf-8">
    {{--
    <meta name="facebook-domain-verification" content="vy8j1i9a03f3ppjp9g4mm6ijx2oa75"> --}}
    <title>{{$meta_title}}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="{{$meta_desc}}">
    <meta name="author" content="IT-Global">
    <meta name="keywords" content="website, mobile app, technology, design">

    <link rel="canonical" href="{{$url_canonical}}">
    <link rel="icon" href="{{ asset('public/main/img/icon.jpg') }}">
    <link href="{{ asset('public/main/img/icon.jpg') }}" rel="shortcut icon">
    <link rel="stylesheet" href="{{ asset('public/main/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/main/css/iconfonts.css') }}">
    <link rel="stylesheet" href="{{ asset('public/main/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('public/main/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/main/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('public/main/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('public/main/css/frontend.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/main/css/image-text-alignment-block.css') }}">
</head>

<body _c_t_common="1" _c_t_j1="1">
    <div id="dtr-wrapper" class="clearfix">
        @include('layout.header')
        <div id="dtr-main-content">
            <div id="app">
                @yield('content')
            </div>
            @include('layout.footer')
        </div>
    </div>
    <!-- JS FILES -->
    <script src="{{ asset('public/main/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('public/main/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/main/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/main/js/plugins.js') }}"></script>
    <script src="{{ asset('public/main/js/custom.js') }}"></script>
    <script src="{{ asset('public/js/app.js') }}"></script>
</body>

</html>
