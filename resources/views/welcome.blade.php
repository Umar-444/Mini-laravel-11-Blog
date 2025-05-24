<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MiniBlog - Practice Project</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gradient-to-br from-gray-100 to-gray-200">
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav class="sticky top-0 z-50 shadow-lg bg-white/80 backdrop-blur-md">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold text-transparent bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text">Mini Blog</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ route('dashboard') }}" class="text-gray-700 transition-colors duration-200 hover:text-indigo-600">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 transition-colors duration-200 hover:text-indigo-600">Login</a>
                            <a href="{{ route('register') }}" class="text-gray-700 transition-colors duration-200 hover:text-indigo-600">Register</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="relative overflow-hidden bg-white">
            <div class="absolute inset-0 opacity-50 bg-gradient-to-r from-indigo-100 to-purple-100"></div>
            <div class="relative px-4 py-16 mx-auto max-w-7xl sm:py-24 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                        Welcome to <span class="text-transparent bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text">Mini Blog</span>
                    </h2>
                    <p class="max-w-xl mx-auto mt-5 text-xl text-gray-600">
                        A practice project built with Laravel and Tailwind CSS
                    </p>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="py-12">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Blog Posts -->
                    <div class="p-6 transition-all duration-300 transform bg-white shadow-lg group rounded-xl hover:shadow-2xl hover:-translate-y-1">
                        <div class="w-20 h-2 mb-4 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600"></div>
                        <h3 class="mb-4 text-xl font-semibold text-gray-900">Articles</h3>
                        <p class="mb-4 text-gray-600">Explore our collection of articles</p>
                        <a href="{{ route('articles.index') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white transition-all duration-200 rounded-lg bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700">
                            View Articles
                        </a>
                    </div>

                    <!-- Authentication -->
                    <div class="p-6 transition-all duration-300 transform bg-white shadow-lg group rounded-xl hover:shadow-2xl hover:-translate-y-1">
                        <div class="w-20 h-2 mb-4 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600"></div>
                        <h3 class="mb-4 text-xl font-semibold text-gray-900">Authentication</h3>
                        <p class="mb-4 text-gray-600">Create an account or login to your existing one</p>
                        <div class="space-x-4">
                            <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white transition-all duration-200 rounded-lg bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700">
                                Login
                            </a>
                            <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 transition-all duration-200 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                                Register
                            </a>
                        </div>
                    </div>

                    <!-- About -->
                    <div class="p-6 transition-all duration-300 transform bg-white shadow-lg group rounded-xl hover:shadow-2xl hover:-translate-y-1">
                        <div class="w-20 h-2 mb-4 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600"></div>
                        <h3 class="mb-4 text-xl font-semibold text-gray-900">About</h3>
                        <p class="mb-4 text-gray-600">Learn more about this practice project</p>
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white transition-all duration-200 rounded-lg bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="mt-12 bg-white/80 backdrop-blur-md">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <p class="text-sm text-center text-gray-500">
                    &copy; {{ date('Y') }} MiniBlog. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
</body>
</html>
