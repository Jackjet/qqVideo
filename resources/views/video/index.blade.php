<div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-body dataList">
            <!--热门推荐start-->
            <div class="row header">
                <div class="col-xs-8">
                    <h4 class="title">
                        <span class="hotThumb"></span>
                        <a href="{{route('video.category', ['id' => 1])}}">电影</a>
                    </h4>
                </div>
            </div>

            <div class="list-group">
                    @foreach($infoPc[1] as $item)
                        @if($loop->index %6 == 0)
                            <div class="row list-group-item shipin">
                                <div class="col-sm-2">
                                    <a href="{{route('video.info', $item->id)}}" class="thumbnail">
                                        <img src="{{asset('m_video')}}/img/videoLoading.gif" _src="{{route('video.getThumb', $item->id)}}" />
                                    </a>
                                    <a href="{{route('video.info', $item->id)}}">
                                        <div class="title text-center">{{$item->title}}</div>
                                    </a>
                                </div>
                                @elseif($loop->index %6 == 5)
                                    <div class="col-sm-2">
                                        <a href="{{route('video.info', $item->id)}}" class="thumbnail">
                                            <img src="{{asset('m_video')}}/img/videoLoading.gif" _src="{{route('video.getThumb', $item->id)}}" />
                                        </a>
                                        <a href="{{route('video.info', $item->id)}}">
                                            <div class="title text-center">{{$item->title}}</div>
                                        </a>
                                    </div>
                            </div>
                        @else
                            <div class="col-sm-2">
                                <a href="{{route('video.info', $item->id)}}" class="thumbnail">
                                    <img src="{{asset('m_video')}}/img/videoLoading.gif" _src="{{route('video.getThumb', $item->id)}}" />
                                </a>
                                <a href="{{route('video.info', $item->id)}}" >
                                    <div class="title text-center">{{$item->title}}</div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            <div class="ads">

            </div>

            <div class="row header">
                <div class="col-xs-8">
                    <h4 class="title">
                        <span class="hotThumb"></span>
                        <a href="{{route('video.category', ['id' => 2])}}">电视剧</a>
                    </h4>
                </div>
            </div>
            <div class="list-group">
                    @foreach($infoPc[2] as $item)
                        @if($loop->index %6 == 0)
                            <div class="row list-group-item shipin">
                                <div class="col-sm-2">
                                    <a href="{{route('video.info', $item->id)}}" class="thumbnail">
                                        <img src="{{asset('m_video')}}/img/videoLoading.gif" _src="{{route('video.getThumb', $item->id)}}" />
                                    </a>
                                    <a href="{{route('video.info', $item->id)}}">
                                        <div class="title text-center">{{$item->title}}</div>
                                    </a>
                                </div>
                                @elseif($loop->index %6 == 5)
                                    <div class="col-sm-2">
                                        <a href="{{route('video.info', $item->id)}}" class="thumbnail">
                                            <img src="{{asset('m_video')}}/img/videoLoading.gif" _src="{{route('video.getThumb', $item->id)}}" />
                                        </a>
                                        <a href="{{route('video.info', $item->id)}}">
                                            <div class="title text-center">{{$item->title}}</div>
                                        </a>
                                    </div>
                            </div>
                        @else
                            <div class="col-sm-2">
                                <a href="{{route('video.info', $item->id)}}" class="thumbnail" @if(!$data['isMobile']) target="_blank"@endif>
                                    <img src="{{asset('m_video')}}/img/videoLoading.gif" _src="{{route('video.getThumb', $item->id)}}" />
                                </a>
                                <a href="{{route('video.info', $item->id)}}" @if(!$data['isMobile']) target="_blank"@endif>
                                    <div class="title text-center">{{$item->title}}</div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>

            <div class="ads">

            </div>

            <div class="row header">
                <div class="col-xs-8">
                    <h4 class="title">
                        <span class="hotThumb"></span>
                        <a href="{{route('video.category', ['id' => 3])}}">动漫</a>
                    </h4>
                </div>
            </div>
            <div class="list-group">
                    @foreach($infoPc[3] as $item)
                        @if($loop->index %6 == 0)
                            <div class="row list-group-item shipin">
                                <div class="col-sm-2">
                                    <a href="{{route('video.info', $item->id)}}" class="thumbnail"
                                       title="{{$item->title}}_{{config('site.title')}}">
                                        <img src="{{asset('m_video')}}/img/videoLoading.gif" _src="{{route('video.getThumb', $item->id)}}"
                                             alt="{{$item->title}}_{{config('site.title')}}" />
                                    </a>
                                    <a href="{{route('video.info', $item->id)}}"
                                       title="{{$item->title}}_{{config('site.title')}}">
                                        <div class="title text-center">{{$item->title}}</div>
                                    </a>
                                </div>
                                @elseif($loop->index %6 == 5)
                                    <div class="col-sm-2">
                                        <a href="{{route('video.info', $item->id)}}" class="thumbnail"
                                           title="{{$item->title}}_{{config('site.title')}}">
                                            <img src="{{asset('m_video')}}/img/videoLoading.gif" _src="{{route('video.getThumb', $item->id)}}"
                                                 alt="{{$item->title}}_{{config('site.title')}}" />
                                        </a>
                                        <a href="{{route('video.info', $item->id)}}"
                                           title="{{$item->title}}_{{config('site.title')}}">
                                            <div class="title text-center">{{$item->title}}</div>
                                        </a>
                                    </div>
                            </div>
                        @else
                            <div class="col-sm-2">
                                <a href="{{route('video.info', $item->id)}}" class="thumbnail"
                                   title="{{$item->title}}_{{config('site.title')}}">
                                    <img src="{{asset('m_video')}}/img/videoLoading.gif" _src="{{route('video.getThumb', $item->id)}}"
                                         alt="{{$item->title}}_{{config('site.title')}}" />
                                </a>
                                <a href="{{route('video.info', $item->id)}}"
                                   title="{{$item->title}}_{{config('site.title')}}">
                                    <div class="title text-center">{{$item->title}}</div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            <div class="ads">

            </div>

            <!--热门推荐end-->
        </div>
        <div class="panel-footer">
            @include("video.copyright")
        </div>
    </div>
</div>