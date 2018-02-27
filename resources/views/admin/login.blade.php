<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <!-- load css -->
    <link rel="stylesheet" type="text/css" href="{{asset('common')}}/layui/css/layui.css" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('backstage')}}/css/login.css" media="all">
</head>
<body>
<div class="larry-canvas" id="canvas"></div>
<form class="layui-layout layui-layout-login" action="{{route('admin.loginVerify')}}">
    <h1>
        <strong>登录</strong>
        <em>Management System</em>
    </h1>
    <div class="layui-user-icon larry-login">
        <input type="text" placeholder="邮箱" class="login_txtbx" name="email"/>
    </div>
    <div class="layui-pwd-icon larry-login">
        <input type="password" placeholder="密码" class="login_txtbx" name="password"/>
    </div>
    <div class="layui-val-icon larry-login">
        <div class="layui-code-box">
            <input type="text" id="code" name="captcha" placeholder="验证码" maxlength="6" class="login_txtbx">
            <img src="{{captcha_src('adminLoginVerify')}}" alt="" class="verifyImg" id="verifyImg"
                 onclick="javascript:this.src='{{captcha_src('adminLoginVerify')}}'+Math.random();">
        </div>
    </div>
    <div class="layui-submit larry-login">
        {{csrf_field()}}
        <input type="submit" value="立即登陆" class="submit_btn"/>
    </div>
    <div class="layui-login-text">
        <p>© 2016-2017 版权所有</p>
    </div>
</form>
<script type="text/javascript" src="{{asset('common')}}/layui/layui.js"></script>
<script type="text/javascript" src="{{asset('common')}}/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="{{asset('common')}}/jsplugin/jparticle.jquery.js"></script>
<script type="text/javascript" src="{{asset('common')}}/js/common.js"></script>
<script type="text/javascript" src="{{asset('backstage')}}/js/login.js"></script>
</body>
</html>