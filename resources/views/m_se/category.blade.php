<div class="col-xs-12">
    <div class="panel panel-default contentLeft">
        <div class="panel-header">

        </div>
        <div class="panel-body dataList">
            <!--电影start-->
            <div class="list-group">
                @foreach($list as $item)
                    <div class="row list-group-item shipin">
                        <div class="col-xs-4">
                            <a href="{{route('se.info', $item->id)}}" @if($data['isMobile']) target="_blank"@endif class="thumbnail">
                                <img src="{{route('se.getThumb', $item->id)}}" />
                            </a>
                        </div>
                        <div class="col-xs-8">
                            <a href="{{route('se.info', $item->id)}}" @if($data['isMobile']) target="_blank"@endif>
                                <div class="title">{{$item->title}}</div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--电影end-->
        </div>
        <div class="panel-footer">
            <nav aria-label="Page navigation" style="text-align: center">
                {{$list->links('paginate.se_m_category', ['id' => $id])}}
            </nav>
        </div>
    </div>
</div>