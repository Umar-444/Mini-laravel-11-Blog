<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Create New Product
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold">Product Information</h3>
                    </div>
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <!-- Product Title -->
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product Title</label>
                                <input type="text" name="title" id="title" required
                                    class="w-full px-4 py-2 mt-1 text-sm border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                            </div>

                            <!-- Category -->
                            <div>
                                <label for="category" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Category</label>
                                <select name="category" id="category" required
                                    class="w-full px-4 py-2 mt-1 text-sm border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                                    <option value="">Select a category</option>
                                    <!-- Add your categories here -->
                                </select>
                            </div>

                            <!-- Price -->
                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Price</label>
                                <input type="number" name="price" id="price" step="0.01" required
                                    class="w-full px-4 py-2 mt-1 text-sm border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                            </div>

                            <!-- Quantity -->
                            <div>
                                <label for="quantity" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Quantity</label>
                                <input type="number" name="quantity" id="quantity" required
                                    class="w-full px-4 py-2 mt-1 text-sm border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                            </div>

                            <!-- Tags -->
                            <div class="sm:col-span-2">
                                <label for="tags" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tags</label>
                                <input type="text" name="tags" id="tags" placeholder="Separate tags with commas"
                                    class="w-full px-4 py-2 mt-1 text-sm border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                            </div>

                            <!-- Description -->
                            <div class="sm:col-span-2">
                                <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                                <textarea name="description" id="description" rows="4" required
                                    class="w-full px-4 py-2 mt-1 text-sm border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"></textarea>
                            </div>

                            <!-- Images -->
                            <div class="sm:col-span-2">
                                <label for="images" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product Images</label>
                                <input type="file" name="images[]" id="images" multiple accept="image/*"
                                    class="w-full px-4 py-2 mt-1 text-sm border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-6 py-2 text-sm font-medium text-white transition-colors duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Create Product
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
