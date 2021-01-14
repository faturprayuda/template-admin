@include('layouts.header')

<body style="display: none">
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                    Windmill
                </a>
                <ul class="mt-6">
                    <livewire:nav-side-comp path="dashboard" icon="fas fa-home" anchor="{{route('dashboard')}}"
                        nameSideBar="Dashboard" />
                    <livewire:nav-side-comp path="form" icon="fas fa-clipboard-list" anchor="{{route('form')}}"
                        nameSideBar="Forms" />
                    <livewire:nav-side-comp path="card" icon="fas fa-th" anchor="{{route('card')}}"
                        nameSideBar="Cards" />
                    <livewire:nav-side-comp path="chart" icon="fas fa-chart-pie" anchor="{{route('chart')}}"
                        nameSideBar="Charts" />
                    <livewire:nav-side-comp path="button" icon="fas fa-mouse-pointer" anchor="{{route('button')}}"
                        nameSideBar="Buttons" />
                    <livewire:nav-side-comp path="modal" icon="far fa-clone" anchor="{{route('modal')}}"
                        nameSideBar="Modals" />
                    <livewire:nav-side-comp path="table" icon="fas fa-table" anchor="{{route('table')}}"
                        nameSideBar="Tables" />
                    {{-- dropdown menu --}}
                    <li class="relative px-6 py-3">
                        <button
                            class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="togglePagesMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <i class="fas fa-columns"></i>
                                </svg>
                                <span class="ml-4">Pages</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isPagesMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                                <livewire:child-drop-side-bar-comp anchor="{{route('login-template')}}"
                                    subName="Login" />
                                <livewire:child-drop-side-bar-comp anchor="{{route('regist-template')}}"
                                    subName="Create account" />
                                <livewire:child-drop-side-bar-comp anchor="{{route('forgot-password-template')}}"
                                    subName="Forgot password" />
                                <livewire:child-drop-side-bar-comp anchor="{{route('not-found')}}" subName="404" />
                                <livewire:child-drop-side-bar-comp anchor="{{route('blank')}}" subName="Blank" />
                            </ul>
                        </template>
                    </li>
                </ul>
                <div class="px-6 my-6">
                    <button
                        class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Create account
                        <span class="ml-2" aria-hidden="true">+</span>
                    </button>
                </div>
            </div>
        </aside>
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
        <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
            x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
            @keydown.escape="closeSideMenu">
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                    Windmill
                </a>
                <ul class="mt-6">
                    <livewire:nav-side-comp path="dashboard" icon="fas fa-home" anchor="{{route('dashboard')}}"
                        nameSideBar="Dashboard" />
                    <livewire:nav-side-comp path="form" icon="fas fa-clipboard-list" anchor="{{route('form')}}"
                        nameSideBar="Forms" />
                    <livewire:nav-side-comp path="card" icon="fas fa-th" anchor="{{route('card')}}"
                        nameSideBar="Cards" />
                    <livewire:nav-side-comp path="chart" icon="fas fa-chart-pie" anchor="{{route('chart')}}"
                        nameSideBar="Charts" />
                    <livewire:nav-side-comp path="button" icon="fas fa-mouse-pointer" anchor="{{route('button')}}"
                        nameSideBar="Buttons" />
                    <livewire:nav-side-comp path="modal" icon="far fa-clone" anchor="{{route('modal')}}"
                        nameSideBar="Modals" />
                    <livewire:nav-side-comp path="table" icon="fas fa-table" anchor="{{route('table')}}"
                        nameSideBar="Tables" />
                    {{-- dropdown menu --}}
                    <li class="relative px-6 py-3">
                        <button
                            class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="togglePagesMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <i class="fas fa-columns"></i>
                                </svg>
                                <span class="ml-4">Pages</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isPagesMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                                <livewire:child-drop-side-bar-comp anchor="{{route('login-template')}}"
                                    subName="Login" />
                                <livewire:child-drop-side-bar-comp anchor="{{route('regist-template')}}"
                                    subName="Create account" />
                                <livewire:child-drop-side-bar-comp anchor="{{route('forgot-password-template')}}"
                                    subName="Forgot password" />
                                <livewire:child-drop-side-bar-comp anchor="{{route('not-found')}}" subName="404" />
                                <livewire:child-drop-side-bar-comp anchor="{{route('blank')}}" subName="Blank" />
                            </ul>
                        </template>
                    </li>
                </ul>
                <div class="px-6 my-6">
                    <button
                        class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Create account
                        <span class="ml-2" aria-hidden="true">+</span>
                    </button>
                </div>
            </div>
        </aside>
        <div class="flex flex-col flex-1 w-full">
            <livewire:navigation-menu />

            {{-- main content --}}
            <main class="h-full overflow-y-auto">
                {{ $slot }}
            </main>
            {{-- end main content --}}

        </div>
    </div>

    @include('layouts.footer')
