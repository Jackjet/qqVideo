@if ($paginator->hasPages())
    <ul class="am-pagination am-text-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="am-disabled"><span>&laquo;</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="am-disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="am-active"><span>{{ $page }}</span></li>
                    @else
                        <li>
                            <a href="{{ route('video.search', ['title' => $title,'page' => $page]) }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="am-disabled"><span class="page-link">&raquo;</span></li>
        @endif
    </ul>
@endif
