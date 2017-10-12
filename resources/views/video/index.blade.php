<div class="am-u-sm-12">
    <div class="am-panel am-panel-default">
        <div class="am-panel-hd">
            <span>电影</span>
            <a href="{{route('video.category', 1)}}" class="am-fr">更多>></a>
        </div>
        <div class="am-panel-bd">
            @foreach($infoPc[1] as $item)
                @if($loop->index %4 == 0)
                    <div class="am-g">
                        <div class="am-u-sm-3 am-text-center">
                            <div class="imgList">
                                <a href="{{route('video.info', $item->id)}}">
                                    <img src="{{asset('m_video')}}/img/videoLoading.gif" class="am-img-thumbnail"
                                         _src="{{--{{route('video.getThumb', $item->id)}}--}}{{$item->nowThumb()}}" />
                                </a>
                                <span class="title">{{$item->title}}</span>
                                <span class="info">{{$item->total_num}} 集</span>
                            </div>
                        </div>
                        @elseif($loop->index %4 == 3)
                            <div class="am-u-sm-3 am-text-center">
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
                @else
                    <div class="am-u-sm-3 am-text-center">
                        <div class="imgList">
                            <a href="{{route('video.info', $item->id)}}">
                                <img src="{{asset('m_video')}}/img/videoLoading.gif" class="am-img-thumbnail"
                                     _src="{{--{{route('video.getThumb', $item->id)}}--}}{{$item->nowThumb()}}" />
                            </a>
                            <span class="title">{{$item->title}}</span>
                            <span class="info">{{$item->total_num}} 集</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="am-panel am-panel-default">
        <div class="am-panel-hd">
            <span>电视剧</span>
            <a href="{{route('video.category', ['id' => 2])}}" class="am-fr">更多>></a>
        </div>
        <div class="am-panel-bd">
            @foreach($infoPc[2] as $item)
                @if($loop->index %4 == 0)
                    <div class="am-g">
                        <div class="am-u-sm-3 am-text-center">
                            <div class="imgList">
                                <a href="{{route('video.info', $item->id)}}">
                                    <img src="{{asset('m_video')}}/img/videoLoading.gif" class="am-img-thumbnail"
                                         _src="{{--{{route('video.getThumb', $item->id)}}--}}{{$item->nowThumb()}}" />
                                </a>
                                <span class="title">{{$item->title}}</span>
                                <span class="info">{{$item->total_num}} 集</span>
                            </div>
                        </div>
                @elseif($loop->index %4 == 3)
                        <div class="am-u-sm-3 am-text-center">
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
                @else
                    <div class="am-u-sm-3 am-text-center">
                        <div class="imgList">
                            <a href="{{route('video.info', $item->id)}}">
                                <img src="{{asset('m_video')}}/img/videoLoading.gif" class="am-img-thumbnail"
                                     _src="{{--{{route('video.getThumb', $item->id)}}--}}{{$item->nowThumb()}}" />
                            </a>
                            <span class="title">{{$item->title}}</span>
                            <span class="info">{{$item->total_num}} 集</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="am-panel am-panel-default">
        <div class="am-panel-hd">
            <span>动漫</span>
            <a href="{{route('video.category', ['id' => 3])}}" class="am-fr">更多>></a>
        </div>
        <div class="am-panel-bd">
            @foreach($infoPc[3] as $item)
                @if($loop->index %4 == 0)
                    <div class="am-g">
                        <div class="am-u-sm-3 am-text-center">
                            <div class="imgList">
                                <a href="{{route('video.info', $item->id)}}">
                                    <img src="{{asset('m_video')}}/img/videoLoading.gif" class="am-img-thumbnail"
                                         _src="{{--{{route('video.getThumb', $item->id)}}--}}{{$item->nowThumb()}}" />
                                </a>
                                <span class="title">{{$item->title}}</span>
                                <span class="info">{{$item->total_num}} 集</span>
                            </div>
                        </div>
                @elseif($loop->index %4 == 3)
                        <div class="am-u-sm-3 am-text-center">
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
                @else
                    <div class="am-u-sm-3 am-text-center">
                        <div class="imgList">
                            <a href="{{route('video.info', $item->id)}}">
                                <img src="{{asset('m_video')}}/img/videoLoading.gif" class="am-img-thumbnail"
                                     _src="{{--{{route('video.getThumb', $item->id)}}--}}{{$item->nowThumb()}}" />
                            </a>
                            <span class="title">{{$item->title}}</span>
                            <span class="info">{{$item->total_num}} 集</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>