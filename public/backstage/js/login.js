/**
 * @Author: Larry  2017-04-16 17:20:56
 *+----------------------------------------------------------------------
 *| LarryBlogCMS [ LarryCMS网站内容管理系统 ]
 *| Copyright (c) 2016-2017 http://www.larrycms.com All rights reserved.
 *| Version 1.09
 *| <313492783@qq.com>
 *+----------------------------------------------------------------------
 */
layui.use(['jquery','layer','form'],function(){
   'use strict';
	var $ = layui.jquery
	   ,layer=layui.layer
	   ,form =layui.form();
    
    $(window).on('resize',function(){
        var w = $(window).width();
        var h = $(window).height();
        $('.larry-canvas').width(w).height(h);
    }).resize();
    //登录链接测试，使用时可删除
    $("form").submit(function(e){
        e.preventDefault();
        var load;
        $.ajax({
            url: $(this).prop('action'),
            data: $(this).serializeArray(),
            type: "post",
            dataType: "json",
            beforeSend: function(){
                load = layer.msg('登录中....', {icon: 16,shade: 0.01});
            },
            success: function(res){
                window.location.href = res.data;
            },
            error: function(xhr){
                layer.alert(tipOne(xhr.responseJSON.errors));
            },
            complete: function(){
                $('.verifyImg').trigger('click');
                layer.close(load);
            }
        });
    });
    $("#canvas").jParticle({
        background: "#141414",
        color: "#E5E5E5"
    });
    $(".verifyImg").click(function(){
        $("#code").val('');
    });
});