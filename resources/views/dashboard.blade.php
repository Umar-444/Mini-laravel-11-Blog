<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <!-- Categories Card -->
                        <a href="{{ route('category') }}" class="block p-6 transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-lg dark:bg-gray-700">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Categories</h3>
                                    <p class="mt-2 text-3xl font-bold text-blue-600 dark:text-blue-400">{{ $categoriesCount ?? 0 }}</p>
                                </div>
                                <div class="p-3 bg-blue-100 rounded-full dark:bg-blue-800">
                                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>

                        <!-- Articles Card -->
                        <a href="{{ route('articles') }}" class="block p-6 transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-lg dark:bg-gray-700">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Articles</h3>
                                    <p class="mt-2 text-3xl font-bold text-green-600 dark:text-green-400">{{ $articlesCount ?? 0 }}</p>
                                </div>
                                <div class="p-3 bg-green-100 rounded-full dark:bg-green-800">
                                    <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>

                        <!-- Products Card -->
                        <a href="{{ route('products') }}" class="block p-6 transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-lg dark:bg-gray-700">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Products</h3>
                                    <p class="mt-2 text-3xl font-bold text-purple-600 dark:text-purple-400">{{ $productsCount ?? 0 }}</p>
                                </div>
                                <div class="p-3 bg-purple-100 rounded-full dark:bg-purple-800">
                                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
