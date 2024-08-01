@if ($paginator->hasPages())
    <div class="intro-y col-span-12 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
        <nav class="w-full sm:mr-auto sm:w-auto">
            <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="flex-1 sm:flex-initial">
                        <span class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-not-allowed focus:ring-4 focus:ring-primary focus:ring-opacity-20 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 dark:text-slate-300 px-1 sm:px-3">
                            <i data-tw-merge="" data-lucide="chevrons-left" class="stroke-1.5 h-4 w-4"></i>
                        </span>
                    </li>
                    <li class="flex-1 sm:flex-initial">
                        <span class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-not-allowed focus:ring-4 focus:ring-primary focus:ring-opacity-20 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 dark:text-slate-300 px-1 sm:px-3">
                            <i data-tw-merge="" data-lucide="chevron-left" class="stroke-1.5 h-4 w-4"></i>
                        </span>
                    </li>
                @else
                    <li class="flex-1 sm:flex-initial">
                        <a href="{{ $paginator->url(1) }}" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">
                            <i data-tw-merge="" data-lucide="chevrons-left" class="stroke-1.5 h-4 w-4"></i>
                        </a>
                    </li>
                    <li class="flex-1 sm:flex-initial">
                        <a href="{{ $paginator->previousPageUrl() }}" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">
                            <i data-tw-merge="" data-lucide="chevron-left" class="stroke-1.5 h-4 w-4"></i>
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="flex-1 sm:flex-initial">
                            <span class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-not-allowed focus:ring-4 focus:ring-primary focus:ring-opacity-20 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 dark:text-slate-300 px-1 sm:px-3">...</span>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="flex-1 sm:flex-initial">
                                    <span class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-not-allowed focus:ring-4 focus:ring-primary focus:ring-opacity-20 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">{{ $page }}</span>
                                </li>
                            @else
                                <li class="flex-1 sm:flex-initial">
                                    <a href="{{ $url }}" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="flex-1 sm:flex-initial">
                        <a href="{{ $paginator->nextPageUrl() }}" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">
                            <i data-tw-merge="" data-lucide="chevron-right" class="stroke-1.5 h-4 w-4"></i>
                        </a>
                    </li>
                    <li class="flex-1 sm:flex-initial">
                        <a href="{{ $paginator->url($paginator->lastPage()) }}" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">
                            <i data-tw-merge="" data-lucide="chevrons-right" class="stroke-1.5 h-4 w-4"></i>
                        </a>
                    </li>
                @else
                    <li class="flex-1 sm:flex-initial">
                        <span class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-not-allowed focus:ring-4 focus:ring-primary focus:ring-opacity-20 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 dark:text-slate-300 px-1 sm:px-3">
                            <i data-tw-merge="" data-lucide="chevron-right" class="stroke-1.5 h-4 w-4"></i>
                        </span>
                    </li>
                    <li class="flex-1 sm:flex-initial">
                        <span class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-not-allowed focus:ring-4 focus:ring-primary focus:ring-opacity-20 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 dark:text-slate-300 px-1 sm:px-3">
                            <i data-tw-merge="" data-lucide="chevrons-right" class="stroke-1.5 h-4 w-4"></i>
                        </span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endif
