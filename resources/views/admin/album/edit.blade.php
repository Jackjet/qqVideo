@extends('layout.admin')
@section("header")
    <link rel="stylesheet" type="text/css" href="{{asset('backstage')}}/css/personal.css" media="all">
@endsection
@section('body')
    <div class="larry-grid">
        <div class="larry-personal">
            <header class="larry-personal-tit">
                <span>编辑</span>
            </header>
            <div class="larry-personal-body clearfix changepwd">
                <form class="layui-form col-lg-4 col-md-5 col-sm-6" action="{{route('admin.album.update', $info->id)}}">
                    <div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-block">
                            <input type="text" name="title" lay-verify="required" class="layui-input" value="{{$info->title}}"
                                   placeholder="请输入标题">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">副标题</label>
                        <div class="layui-input-block">
                            <input type="text" name="subTitle" lay-verify="required" class="layui-input" value="{{$info->sub_title}}"
                                   placeholder="请输入标题">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">分类</label>
                        <div class="layui-input-block">
                            <select name="typeId" lay-verify="required">
                                <option value=""></option>
                                @foreach($videoTypes as $videoType)
                                    <option value="{{$videoType->id}}" @if($info->type_id == $videoType->id) selected @endif>{{$videoType->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">解析类型</label>
                        <div class="layui-input-block">
                            <select name="parseTypeId" lay-verify="required">
                                <option value=""></option>
                                @foreach($parseTypes as $parseType)
                                    <option value="{{$parseType->id}}" @if($info->parse_type_id == $parseType->id) selected @endif>{{$parseType->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">缩略图</label>
                        <div class="layui-input-block">
                            <input type="text" name="thumb" lay-verify="required" class="layui-input" value="{{$info->thumb}}"
                                   placeholder="请输入缩略图地址">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">评分</label>
                        <div class="layui-input-block">
                            <input type="text" name="grade" lay-verify="required" class="layui-input" value="{{$info->grade}}"
                                   placeholder="请输入评分">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">总集数</label>
                        <div class="layui-input-block">
                            <input type="numeric" name="totalNum" lay-verify="required" class="layui-input" value="{{$info->total_num}}"
                                   placeholder="请输入总集数">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">年份</label>
                        <div class="layui-input-block">
                            <input type="numeric" name="year" lay-verify="required" class="layui-input" value="{{$info->year}}"
                                   placeholder="请输入年份">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">地区</label>
                        <div class="layui-input-block">
                            <input type="text" name="aera" lay-verify="required" class="layui-input" value="{{$info->aera}}"
                                   placeholder="请输入地区">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">语言</label>
                        <div class="layui-input-block">
                            <input type="text" name="language" lay-verify="required" class="layui-input" value="{{$info->language}}"
                                   placeholder="请输入语言">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">描述</label>
                        <div class="layui-input-block">
                            <textarea name="descript" required lay-verify="required" placeholder="请输入描述"
                                      class="layui-textarea">{{$info->descript}}</textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">更新时间信息</label>
                        <div class="layui-input-block">
                            <input type="text" name="updateTimeStr" lay-verify="required" class="layui-input"
                                   placeholder="请输入更新时间信息" value="{{$info->update_time_str}}">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">备注</label>
                        <div class="layui-input-block">
                            <input type="text" name="remark" class="layui-input"
                                   placeholder="请输入备注" value="{{$info->remark}}">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">排序</label>
                        <div class="layui-input-block">
                            <input type="numeric" name="sort" lay-verify="required" class="layui-input" value="{{$info->sort}}">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">更新状态</label>
                        <div class="layui-input-block">
                            <input type="radio" name="updateStatus" value="1" title="连载中" @if($info->update_status == 1) checked @endif>
                            <input type="radio" name="updateStatus" value="2" title="完结" @if($info->update_status == 2) checked @endif>
                            <input type="radio" name="updateStatus" value="3" title="预告" @if($info->update_status == 3) checked @endif>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">状态</label>
                        <div class="layui-input-block">
                            <input type="radio" name="status" value="1" title="正常" @if($info->status == 1) checked @endif>
                            <input type="radio" name="status" value="2" title="禁止" @if($info->status == 2) checked @endif>
                        </div>
                    </div>
                    <div class="layui-form-item change-submit">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit="" lay-filter="submit">立即提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        layui.use(['jquery','layer', 'form', 'upload'],function(){
            window.jQuery = window.$ = layui.jquery;
            window.layer = layui.layer;
            var layer = layui.layer,
                form = layui.form,
                token = $('meta[name="csrf-token"]').attr('content');
            form.on('submit(submit)', function(e){
                var submitButton = $(e.elem),
                    map = $(e.form);
                $.ajax({
                    url: map.prop('action'),
                    type: 'put',
                    data: map.serializeArray(),
                    headers:{
                        'X-CSRF-TOKEN': token
                    },
                    beforSend: function () {
                        submitButton.text("提交中....");
                    },
                    success: function(res){
                        layer.alert(res.message);
                    },
                    error: function(xhr){
                        layer.alert(tipOne(xhr.responseJSON.errors));
                    },
                    complete: function(){
                        submitButton.text("立即提交");
                    }
                });
                return false;
            });
        });
    </script>
@endsection