/**
 * Created by feizhugame on 2017/11/23.
 */
function alert(msg) {
    layer.alert(msg);
}
/**
 * 手机提示
 * @param msg
 */
function mobileAlert(msg) {
    layer.open({
        content: msg
        ,btn: '我知道了'
    });
}
function deleteDate(url) {
    $.ajax({
        url: url,
        type: 'delete',
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(res){
            layer.alert(res.message);
        },
        error: function(xhr){
            layer.alert(tipOne(xhr.responseJSON.errors));
        },
    });
}
var layerIframeIndex;

/**
 * 处理多个提示
 * @param res
 * @returns {string}
 */
function tips(res) {
    var msgArr = [];
    for (var i in res){
        for (var j in res[i]){
            msgArr.push(res[i][j]);
        }
    }
    return msgArr.join('<br />');
}

/**
 * 处理单个提示
 * @param res
 * @returns {string}
 */
function tipOne(res) {
    var flag = false,
        msgArr = [];
    for(var i in res){
        if(flag) continue;
        for (var j in res[i]){
            if(j == 0){
                msgArr.push(res[i][j]);
                flag = true;
                continue;
            }
        }
    }
    return msgArr.join('<br />');
}

/**
 * 打开一个iframe
 * @param url 页面URL
 * @param width 宽度
 * @param height 高度
 */
function layerIframe(url, width, height) {
    var width = (width === undefined)?'680px':width,
        height = (height === undefined)?'90%':height;
    layerIframeIndex = layer.open({
        type: 2,
        title: false,
        shadeClose: true,
        maxmin: true,
        shade: 0.8,
        anim: 6,
        area: [width, height],
        content: url
    });
}

/**
 * 关闭iframe
 * @param index
 */
function layerCloseIframeByIndex(index) {
    layerIframeIndex = (index === undefined)?layerIframeIndex:index;
    setTimeout(function () {
        layer.close(layerIframeIndex);
    }, 1500);
}