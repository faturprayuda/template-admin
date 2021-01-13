<div>
    {{-- The whole world belongs to you --}}
    @if ($active)
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
            href={{ $anchor }}>
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                {{-- <path d="{{ $icon }}">
                </path> --}}
                <i class="{{ $icon }}"></i>
            </svg>
            <span class="ml-4">{{ $nameSideBar }}</span>
        </a>
    </li>
    @else
    <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
            href={{ $anchor }}>
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                {{-- <path d="{{ $icon }}">
                </path> --}}
                <i class="{{ $icon }}"></i>
            </svg>
            <span class="ml-4">{{ $nameSideBar }}</span>
        </a>
    </li>
    @endif
</div>