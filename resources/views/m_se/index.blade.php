<div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body dataList">
                <!--热门推荐start-->
                <div class="row header">
                    <div class="col-xs-8">
                        <h4 class="title">
                            <span class="hotThumb"></span>
                            <a href="">热门推荐</a>
                        </h4>
                    </div>
                </div>
                <div class="list-group">
                    @foreach($info as $item)
                        @if($loop->index %2 == 0)
                            <div class="row list-group-item shipin">
                                <div class="col-xs-6">
                                    <a href="{{route('se.info', $item->id)}}" @if($data['isMobile']) target="_blank"@endif class="thumbnail">
                                        <img src="{{route('se.getThumb', $item->id)}}" />
                                    </a>
                                    <a href="{{route('se.info', $item->id)}}" @if($data['isMobile']) target="_blank"@endif>
                                        <div class="title">{{$item->title}}</div>
                                    </a>
                                </div>
                                @elseif($loop->index %2 == 1)
                                    <div class="col-xs-6">
                                        <a href="{{route('se.info', $item->id)}}" @if($data['isMobile']) target="_blank"@endif class="thumbnail">
                                            <img src="{{route('se.getThumb', $item->id)}}" />
                                        </a>
                                        <a href="{{route('se.info', $item->id)}}" @if($data['isMobile']) target="_blank"@endif>
                                            <div class="title">{{$item->title}}</div>
                                        </a>
                                    </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <!--热门推荐end-->
                <!--热门推荐start-->
                <div class="row header">
                    <div class="col-xs-8">
                        <h4 class="title">
                            <span class="hotThumb"></span>
                            <a href="">随机推荐</a>
                        </h4>
                    </div>
                </div>
                <div class="list-group">
                    @foreach($rands as $item)
                        @if($loop->index %2 == 0)
                        <div class="row list-group-item shipin">
                            <div class="col-xs-6">
                                <a href="{{route('se.info', $item->id)}}" @if($data['isMobile']) target="_blank"@endif class="thumbnail">
                                    <img src="{{route('se.getThumb', $item->id)}}" />
                                </a>
                                <a href="{{route('se.info', $item->id)}}" @if($data['isMobile']) target="_blank"@endif>
                                    <div class="title">{{$item->title}}</div>
                                </a>
                            </div>
                            @elseif($loop->index %2 == 1)
                            <div class="col-xs-6">
                                <a href="{{route('se.info', $item->id)}}" @if($data['isMobile']) target="_blank"@endif class="thumbnail">
                                    <img src="{{route('se.getThumb', $item->id)}}" />
                                </a>
                                <a href="{{route('se.info', $item->id)}}" @if($data['isMobile']) target="_blank"@endif>
                                    <div class="title">{{$item->title}}</div>
                                </a>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                <!--热门推荐end-->
            </div>
        </div>
    </div>