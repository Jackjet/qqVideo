<div class="am-panel am-panel-default">
    <div class="am-panel-bd">
        <!--电影start-->
        @foreach($list as $item)
            @if($loop->index %2 == 0)
                <div class="am-g shipin-group">
                    <div class="am-u-sm-6 am-text-center">
                        <div class="imgList">
                            <a href="{{route('video.info', $item->id)}}">
                                <img src="{{asset('m_video')}}/img/videoLoading.gif" class="am-img-thumbnail"
                                     _src="{{--{{route('video.getThumb', $item->id)}}--}}{{$item->nowThumb()}}" />
                            </a>
                            <span class="title">{{$item->title}}</span>
                            <span class="info">{{$item->total_num}} 集</span>
                        </div>
                    </div>
                    @elseif($loop->index %2 == 1)
                        <div class="am-u-sm-6 am-text-center">
                            <div class="imgList">
                                <a href="{{route('video.info', $item->id)}}">
                                    <img src="{{asset('m_video')}}/img/videoLoading.gif" class="am-img-thumbnail"
                                         _src="{{--{{route('video.getThumb', $item->id)}}--}}{{$item->nowThumb()}}" />
                                </a>
                                <span class="title">{{$item->title}}</span>
                                <span class="info">{{$item->total_num}} 集</span>
                            </div>
                        </div>
                </div>
            @endif
        @endforeach
        <!--电影end-->
    </div>
    <div class="am-panel-footer">
        {{$list->links('m_video.video_m_category', ['id' => $id, 'cateName' => $cateName])}}
    </div>
</div>