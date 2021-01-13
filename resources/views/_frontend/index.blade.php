<x-app-layout>
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Dashboard
        </h2>
        <!-- CTA -->
        <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
            href="https://github.com/estevanmaito/windmill-dashboard">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                </svg>
                <span>Star this project on GitHub</span>
            </div>
            <span>View more &RightArrow;</span>
        </a>
        <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <livewire:card-comp
                bgIcon="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                icon="fas fa-users" title="Total clients" value="6389" />
            <livewire:card-comp
                bgIcon="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                icon="fas fa-money-bill-wave" title="Account balance" value="$ 46,760.89" />
            <livewire:card-comp
                bgIcon="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                icon="fas fa-shopping-cart" title="New sales" value="376" />
            <livewire:card-comp
                bgIcon="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                icon="fas fa-comment-dots" title="Pending contacts" value="35" />
        </div>

        <!-- New Table -->
        <livewire:table-comp />

        <!-- Charts -->
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Charts
        </h2>
        <div class="grid gap-6 mb-8 md:grid-cols-2">
            <livewire:chart-pie-comp />
            <livewire:chart-lines-comp />
        </div>
    </div>



</x-app-layout>