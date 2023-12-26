{{--@if ($paginator->hasPages())--}}
{{--    <nav>--}}
        <div class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
{{--                <li class=" disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
{{--                    <span class="" aria-hidden="true">&lsaquo;</span>--}}
{{--                </li>--}}
            @else
{{--                <li class="">--}}
{{--                    <button class="nextPrev">Prev.</button>--}}
                    <a class="nextPrev button" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">@lang('varius.prev')</a>
{{--                </li>--}}
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class=" disabled" aria-disabled="true"><span class="">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class=" " aria-current="page"><a class="active">{{ $page }}</a></li>
                        @else
                            <li class=""><a class="button" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
{{--                <li class="">--}}
                    <a class="nextPrev button" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">@lang('varius.next')</a>
{{--                </li>--}}
            @else
{{--                chka..--}}
{{--                <li class=" disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
{{--                    <span class="" aria-hidden="true">&rsaquo;</span>--}}
{{--                </li>--}}
            @endif
        </div>
<!--    </nav>/-->
{{--@endif--}}
