<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __(key: 'Products Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold">Products List</h3>
                        <button class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
                            Add New Product
                        </button>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">Category Name</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">Product Name</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">Product Image</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">Price</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">Quantity</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">Electronics</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">iPhone 13 Pro</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">
                                        <img src="https://via.placeholder.com/50" alt="Product" class="object-cover w-12 h-12 rounded-lg">
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">$999.99</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">50</td>
                                    <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                        <button class="mr-3 text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">Edit</button>
                                        <button class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">Clothing</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">Nike Air Max</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">
                                        <img src="https://via.placeholder.com/50" alt="Product" class="object-cover w-12 h-12 rounded-lg">
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">$129.99</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap dark:text-gray-300">100</td>
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
