@extends('layout.admin')
@section('title', '首页')
@section("header")
    <!-- load css -->
    <link rel="stylesheet" type="text/css" href="{{asset('common')}}/bootstrap/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('common')}}/layui/css/layui.css" media="all">
    <!-- <link rel="stylesheet" type="text/css" href="/common/css/larry.css" media="all"> 基于flex布局 未完待续-->
    <link rel="stylesheet" type="text/css" href="{{asset('common')}}/css/global.css" media="all">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_bmgv5kod196q1tt9.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backstage')}}/css/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('backstage')}}/css/main.css" media="all">
@endsection
@section('body')
    <div class="larry-grid larry-wrapper">
        <div class="row" id="infoSwitch">
            <blockquote class="layui-elem-quote col-md-12 head-con">
                <div>尊敬的admin<span id="weather"></span></div>
                <i class="larry-icon larry-guanbi close" id="closeInfo"></i>
            </blockquote>
        </div>
        <div class="row shortcut" id="shortcut">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 ">
                <section class="panel clearfix">
                    <div class="symbol shortcut-bg1"> <i class="larry-icon larry-daishenhe1" data-icon="larry-daishenhe1"></i></div>
                    <div class="value">
                        <a data-href="html/temp.html">
                            <h1 id="count1">10</h1>
                        </a>
                        <p>待审的文章</p>
                    </div>
                </section>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 ">
                <section class="panel">
                    <div class="symbol shortcut-bg2"> <i class="larry-icon larry-fabu2" data-icon="larry-fabu2"></i></div>
                    <div class="value">
                        <a data-href="html/temp.html">
                            <h1 id="count2">26</h1>
                        </a>
                        <p>我发布的文章</p>
                    </div>
                </section>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 ">
                <section class="panel">
                    <div class="symbol shortcut-bg3"> <i class="larry-icon larry-lanmuguanli" data-icon="larry-lanmuguanli"></i></div>
                    <div class="value">
                        <a data-href="html/temp.html">
                            <h1 id="count3">15</h1>
                        </a>
                        <p>网站栏目管理</p>
                    </div>
                </section>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 ">
                <section class="panel">
                    <div class="symbol shortcut-bg4"> <i class="larry-icon larry-kehuliebiao" data-icon="larry-kehuliebiao"></i></div>
                    <div class="value">
                        <a data-href="html/temp.html">
                            <h1 id="count4">60</h1>
                        </a>
                        <p>会员注册列表</p>
                    </div>
                </section>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 ">
                <section class="panel">
                    <div class="symbol shortcut-bg5"> <i class="larry-icon larry-liuyan" data-icon="larry-liuyan"></i></div>
                    <div class="value">
                        <a data-href="html/temp.html">
                            <h1 id="count4">105</h1>
                        </a>
                        <p>会员留言管理</p>
                    </div>
                </section>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 ">
                <section class="panel">
                    <div class="symbol shortcut-bg6"> <i class="larry-icon larry-a157" data-icon="larry-a157"></i></div>
                    <div class="value">
                        <a data-href="html/temp.html">
                            <h1 id="count4">10</h1>
                        </a>
                        <p>友链管理</p>
                    </div>
                </section>
            </div>
        </div>
        <!-- 首页信息 -->
        <div class="row system">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading bm0">
                        <span class='span-title'>系统概览</span>
                        <span class="tools pull-right"><a href="javascript:;" class="iconpx-chevron-down"></a></span>
                    </header>
                    <div class="panel-body">
                        <div class="larry-table">
                            <table class="layui-table larry-table-info">
                                <colgroup>
                                    <col width="150">
                                    <col>
                                </colgroup>
                                <tbody>
                                <tr>
                                    <td><span class="tit">系统名称:</span></td>
                                    <td><a href="http://www.larrycms.com" title="LarryCMS官网" class="tit" target="_blank"><span class="info">LarryCMS</span></a></td>
                                </tr>
                                <tr>
                                    <td><span class="tit">版本信息:</span></td>
                                    <td><span class="info iframe"> V01_UTF8_1.09 ( iframe版 )</span></td>
                                </tr>
                                <tr>
                                    <td><span class="tit">开发作者:</span></td>
                                    <td>Larry</td>
                                </tr>
                                <tr>
                                    <td><span class="tit">官网地址:</span></td>
                                    <td><span class="info"><a href="https://www.larrycms.com" class="official" target="_blank">https://www.larrycms.com</a></span></td>
                                </tr>
                                <tr>
                                    <td><span class="tit">系统下载:</span></td>
                                    <td>
                                        <a href="http://fly.layui.com/case/2017/" target="_blank" class="layui-btn layui-btn-small layui-btn-danger">去点个赞！</a>
                                        <a href="https://jq.qq.com/?_wv=1027&amp;k=42fC4vT" target="_blank" class="layui-btn layui-btn-small">QQ群下载</a> <em class='qq-add'>493153642</em>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="tit">网站域名:</span></td>
                                    <td>demo.larrycms.com</td>
                                </tr>
                                <tr>
                                    <td><span class="tit">当前登陆用户:</span></td>
                                    <td>admin</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading bm0">
                        <span class='span-title'>数据统计</span>
                        <span class="tools pull-right"><a href="javascript:;" class="iconpx-chevron-down"></a></span>
                    </header>
                    <div class="panel-body larry-seo-box">
                        <div class="larry-seo-stats" id="larry-seo-stats"></div>
                    </div>
                </section>
            </div>
        </div>

    </div>
@endsection
@section("footer")
<!-- 加载js文件 -->
<script type="text/javascript" src="{{asset('common')}}/layui/layui.js"></script>
<script type="text/javascript" src="{{asset('common')}}/js/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="{{asset('common')}}/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('common')}}/jsplugin/jquery.leoweather.min.js"></script>
<script type="text/javascript" src="{{asset('common')}}/jsplugin/echarts.min.js"></script>
<!-- 引入当前页面js文件 -->
<script type="text/javascript" src="{{asset('backstage')}}/js/common.js"></script>
<script type="text/javascript" src="{{asset('backstage')}}/js/main.js"></script>
@endsection