@extends('http_video.layout')
@section('title', $info->title)
@section('seo_keywords', $info->title.','.$info->tags)
@section('seo_description', $info->descript)
@section('body')
    @include("video.info")
@endsection
@section("footer_script")
    <script src="{{asset('video')}}/js/info.js"></script>
@endsection