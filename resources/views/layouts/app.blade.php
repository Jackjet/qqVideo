<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('m_video/css/amazeui.css') }}" rel="stylesheet">
    @yield('header_script')
</head>
<body>
    <div id="am-container">
        <div class="am-g">
            @yield('content')
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('video/js/jquery.min.js') }}"></script>
    <script src="{{ asset('m_video/js/amazeui.js') }}"></script>
    @yield('footer_script')
</body>
</html>
