<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MiniBlog - Practice Project</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-100">
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav class="bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold text-indigo-600">Mini Blog</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-indigo-600">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600">Login</a>
                            <a href="{{ route('register') }}" class="text-gray-700 hover:text-indigo-600">Register</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="bg-white">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                        Welcome to Mini Blog Practice Project
                    </h2>
                    <p class="mt-5 max-w-xl mx-auto text-xl text-gray-500">
                        A practice project built with Laravel and Tailwind CSS
                    </p>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="bg-gray-100 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Blog Posts -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Articles</h3>
                        <p class="text-gray-600 mb-4">Explore our collection of articles</p>
                        <a href="{{ route('articles') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                            View Articles
                        </a>
                    </div>

                    <!-- Authentication -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Authentication</h3>
                        <p class="text-gray-600 mb-4">Create an account or login to your existing one</p>
                        <div class="space-x-4">
                            <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                                Login
                            </a>
                            <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Register
                            </a>
                        </div>
                    </div>

                    <!-- About -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">About</h3>
                        <p class="text-gray-600 mb-4">Learn more about this practice project</p>
                        <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white mt-12">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <p class="text-center text-gray-500 text-sm">
                    &copy; {{ date('Y') }} MiniBlog. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
</body>
</html>
