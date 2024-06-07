@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span  class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-muted bg-white border-bottom border-gray-300 cursor-default leading-5">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" style="text-decoration: none" rel="prev" class="text-danger fw-bold relative inline-flex items-center px-4 py-2 text-sm font-medium border-bottom border-gray-300 leading-5 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" style="text-decoration: none" rel="next" class="text-danger fw-bold  relative inline-flex items-center px-4 py-2 text-sm font-medium border-bottom border-gray-300 leading-5 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-muted bg-white border-bottom border-gray-300 cursor-default leading-5 dark:text-gray-600  dark:border-gray-600">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
