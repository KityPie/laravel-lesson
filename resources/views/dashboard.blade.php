<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Total Posts Card -->
                <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 overflow-hidden shadow-lg sm:rounded-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-200 text-blue-800">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89-4.43a2 2 0 011.22 0L21 8m0 0l-7.89 4.43a2 2 0 01-1.22 0L3 8m18 0v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h5 class="text-lg font-semibold">Total Posts</h5>
                                <p class="text-2xl">{{ $totalPosts }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Published Posts Card -->
                <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 overflow-hidden shadow-lg sm:rounded-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-200 text-green-800">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h5 class="text-lg font-semibold">Published Posts</h5>
                                <p class="text-2xl">{{ $publishedPosts }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Unpublished Posts Card -->
                <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 overflow-hidden shadow-lg sm:rounded-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-red-200 text-red-800">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 11-12.728 0M12 11v5m0 0h.01"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h5 class="text-lg font-semibold">Unpublished Posts</h5>
                                <p class="text-2xl">{{ $unpublishedPosts }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
