@extends('layout.admin')
@section("header")
    <meta name="tableUrl" content="{{route('admin.album.submitQuery')}}">
    <style>
        .layui-table-cell  {
            height: 100%;
            max-width: 100%;
        }
    </style>
@endsection
@section('body')
    <div class="larry-grid">
        <div class="larry-personal">
            <div class="layui-tab">
                <blockquote class="layui-elem-quote mylog-info-tit">
                    <form class="layui-form" action="{{route('admin.album.submitQuery')}}" id="query">
                        <div class="layui-input-inline">
                            <input type="text" name="title" placeholder="请输入标题" class="layui-input">
                        </div>
                        <div class="layui-input-inline">
                            <select name="typeId">
                                <option value="">全部分类</option>
                                @foreach($videoTypes as $videoType)
                                    <option value="{{$videoType->id}}">{{$videoType->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="layui-input-inline">
                            <select name="parseTypeId">
                                <option value="">解析类型</option>
                                @foreach($parseTypes as $parseType)
                                    <option value="{{$parseType->id}}">{{$parseType->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="layui-input-inline">
                            <select name="updateStatus">
                                <option value="">全部更新状态</option>
                                <option value="1">连载中</option>
                                <option value="2">完结</option>
                                <option value="3">预告</option>
                            </select>
                        </div>
                        <div class="layui-input-inline">
                            <select name="status">
                                <option value="">全部状态</option>
                                <option value="1">正常</option>
                                <option value="2">禁用</option>
                            </select>
                        </div>
                        <button type="submit" class="layui-btn">查询</button>
                    </form>
                </blockquote>
                <div class="larry-separate"></div>
                <div class="layui-tab-content larry-personal-body clearfix mylog-info-box">
                    <table class="layui-table " id="table" lay-filter="table"></table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("footer")
    <div type="text/html" id="bartool" style="display: none">
        <a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>
        <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>
    </div>
    <script>
        laydate.render({
            elem: "#range_at"
            ,type: 'date'
            ,range: '至'
            ,format: 'yyyy-MM-dd'
        });
        layui.use(['jquery','layer', 'form', 'table'],function(){
            window.jQuery = window.$ = layui.jquery;
            window.layer = layui.layer;
            var table = layui.table,
                layer = layui.layer,
                token = $('meta[name="csrf-token"]').attr('content'),
                option = {
                    elem: '#table'
                    ,id: "table"
                    ,skin: "row"
                    ,page: true
                    ,limit:10
                    ,width: 'auto'
                    ,url: $('meta[name="tableUrl"]').prop("content")
                    ,method: "post"
                    ,height: 'auto'
                    ,where: {"_token": token}
                    ,cols: [
                        [
                            /*{checkbox: true},*/
                            {field: 'title', width:300, title: '标题'},
                            {field: 'thumb', width:100, title: '缩略图'},
                            {field: 'typeName', width:80, title: '分类'},
                            {field: 'parseTypeName', width:100, title: '解析类型'},
                            {field: 'hit', width:100, title: '点击数'},
                            {field: 'sort', width:80, title: '排序'},
                            {field: 'updateStatus', width:100, title: '更新状态'},
                            {field: 'status', width:80, title: '状态'},
                            {field: 'createdAt', width:180, title: '发布时间'},
                            {field: 'updatedAt', width:180, title: '更新时间'},
                            {width: 200, title: '操作', toolbar: '#bartool', align: 'center'},
                        ],
                    ]
                };
            table.render(option);
            table.on('tool(table)', function(obj){
                var data = obj.data;
                var layEvent = obj.event;

                if(layEvent === 'del'){ //删除
                    layer.confirm('真的删除行么', function(index){
                        obj.del();
                        deleteDate(data.delUrl);
                        layer.close(index);
                    });
                }else if(layEvent === 'edit'){
                    layerIframe(data.editUrl);
                }
            });
            /**
             * 查询
             */
            $('#query').submit(function (e) {
                e.preventDefault();
                var map = $(this),
                    where = {
                        "_token": token,
                        "title": map.find("input[name='title']").val(),
                        "typeId": map.find("select[name='typeId']").val(),
                        "updateStatus": map.find("select[name='updateStatus']").val(),
                        "status": map.find("select[name='status']").val(),
                    };
                option.where = where;
                table.reload("table", option)
            });
        });
    </script>
@endsection