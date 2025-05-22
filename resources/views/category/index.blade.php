<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Categories
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold">Categories List</h3>
                      
                    </div>
                    <form action="" method="POST" class="w-full mb-6">
                        @csrf
                        <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                            <input 
                                type="text" 
                                name="name" 
                                placeholder="Enter category name" 
                                class="flex-1 px-4 py-2 text-sm border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
                            >
                            <button 
                                type="submit" 
                                class="px-6 py-2 text-sm font-medium text-white transition-colors duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                            >
                                Add Category
                            </button>
                        </div>
                    </form>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">ID</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">Category Name</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">Added By</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">1</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">Electronics</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">John Doe</td>
                                    <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                        <button class="mr-3 text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">Edit</button>
                                        <button class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">2</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">Clothing</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">Jane Smith</td>
                                    <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                        <button class="mr-3 text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">Edit</button>
                                        <button class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">3</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">Books</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">Mike Johnson</td>
                                    <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                        <button class="mr-3 text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">Edit</button>
                                        <button class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
