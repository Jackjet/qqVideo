<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content="@yield('seo_keywords'),{{config('site.keywords')}}">
    <meta name="description" content="@yield('seo_description')">
    <title>@yield('title')_{{config('site.title')}}</title>
    {{--亿赢联盟--}}
    <meta name='zyiis_check_verify' content='e7b64a49676834dce6af183b492456f1'>
    {{--百度联盟--}}
    <meta name="baidu_union_verify" content="34e101b089f885cea6b5b38b960aad27">
    <link rel="stylesheet" href="{{asset('m_video')}}/css/amazeui.min.css">
    {{--<link rel="stylesheet" href="{{asset('m_video')}}/css/bootstrap-theme.min.css">--}}
    <link rel="stylesheet" href="{{asset('m_video')}}/css/index.css">
<body>
<div class="am-container-full">
    <div class="am-g">
        <div class="am-u-sm-4">
            <div class="logo" title="logo_{{config('site.title')}}"></div>
        </div>
        <div class="am-u-sm-8">
            <a name="top"></a>
            <form action="{{route('video.search')}}" method="get" class="am-form">
                <div class="am-input-group">
                    <input type="text" class="am-form-field" id="search-input" name="title"
                           placeholder="{{$title or $data['title']}}" value="{{$title or $data['title']}}">
                    <span class="am-input-group-btn">
                        <button class="am-btn am-btn-primary" id="search-btn" type="submit">
                            <i class="am-icon-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="row main" id="pjax-container">
        @yield('body')
    </div>
    <div class="am-btn-group am-btn-group-justify fixed">
        @foreach($data['category'] as $item)
            <a href="{{route('video.category', $item->id)}}" class="am-btn am-btn-secondary" role="button"
               title="{{$item->name}}_{{config('site.title')}}">{{$item->name}}</a>
        @endforeach
            <a class="am-btn am-btn-secondary" href="#top">
                <span>顶部</span>
                <i class="am-icon-arrow-up"></i>
            </a>
    </div>
</div>
<script src="{{asset('video')}}/js/jquery.min.js"></script>
<script src="{{asset('m_video')}}/js/amazeui.min.js"></script>
<script src="{{asset('video')}}/js/jquery.pjax.js"></script>
<script src="{{asset('video')}}/js/index.js"></script>
</body>
</html>