<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="{{asset('layui2.0')}}/css/layui.css" media="all">
    {{--<link rel="stylesheet" type="text/css" href="{{asset('common')}}/layui/css/layui.css" media="all">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('common')}}/css/global.css" media="all">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_bmgv5kod196q1tt9.css">
    <script type="text/javascript" src="{{asset('common')}}/laydate/laydate.js"></script>
    <script type="text/javascript" src="{{asset('layui2.0')}}/layui.js"></script>
    <script src="{{asset('backstage')}}/js/common.js"></script>
    <script src="{{asset('common')}}/js/common.js"></script>
    @yield("header")
</head>
<body>
@yield('body')
@yield("footer")
</body>
</html>