<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Material Tailwind PRO Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        .sidebar {
            height: 100vh;
            width: 260px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: white;
            overflow-x: hidden;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
            background-color: #f8f9fa;
            min-height: 100vh;
        }

        .ticket-item {
            transition: transform 0.2s ease;
        }

        .ticket-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .priority-high {
            border-left: 4px solid #ef4444;
        }

        .priority-medium {
            border-left: 4px solid #f59e0b;
        }

        .priority-low {
            border-left: 4px solid #10b981;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="px-6 mb-8">
            <div class="flex items-center">
                <div class="w-8 h-8 flex items-center justify-center border border-gray-400 rounded">
                    <i class="fas fa-cubes"></i>
                </div>
                <span class="ml-2 text-lg font-semibold">TicketFlow</span>
            </div>
        </div>

        <div class="px-6 mb-8">
            <div class="flex items-center">
                <img src="{{ asset('DSC_6822.JPG') }}" alt="Profile" class="w-10 h-10 rounded-full" />
                <span class="ml-3 font-medium"> {{ Auth::user()->name }}</span>
            </div>
        </div>

        <div class="px-3">
            <div class="mb-2">
                <div class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700">
                    <i class="fas fa-th-large mr-3 text-gray-500"></i>
                    <span>Dashboard</span>
                </div>
            </div>

            <div class="mt-6">
                <div class="px-3 py-2 text-xs font-semibold text-gray-500">
                    Tickets
                </div>

                <div class="mb-2">
                    <a href="/admin/tickets"
                        class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700 cursor-pointer">
                        <i class="fas fa-file mr-3 text-gray-500"></i>
                        <span>Tickets</span>
                    </a>
                </div>

                <div class="mb-2">
                    <div class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700 cursor-pointer">
                        <i class="fas fa-th mr-3 text-gray-500"></i>
                        <span>categories</span>
                    </div>
                </div>
                <form method="POST" class="mt-5" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>

        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center">
                <i class="fas fa-home text-gray-500"></i>
                <span class="mx-2 text-gray-500">/</span>
                <span>Categories</span>
            </div>

            <div class="flex items-center">
                <div class="relative">
                    <input type="text" placeholder="Search categories..."
                        class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300 w-64" />
                    <i class="fas fa-search absolute right-3 top-3 text-gray-400"></i>
                </div>
                <div class="ml-4">
                    <i class="fas fa-user-circle text-gray-500 text-xl"></i>
                </div>
                <div class="ml-4">
                    <i class="fas fa-cog text-gray-500 text-xl"></i>
                </div>
                <div class="ml-4 relative">
                    <i class="fas fa-bell text-gray-500 text-xl"></i>
                    <span
                        class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">1</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold text-gray-800">Categories</h1>
                <button id="openFormBtn"
                    class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-md flex items-center transition duration-200">
                    <i class="fas fa-plus mr-2"></i>
                    Add New Category
                </button>
            </div>

            <!-- Filter Tabs -->
            <div class="flex space-x-4 mb-8 border-b pb-3">
                <button class="flex items-center px-4 py-2 text-teal-600 border-b-2 border-teal-600 font-medium">
                    <i class="fas fa-th-large mr-2"></i>
                    All Categories
                </button>
            </div>

            <!-- Add Category Form (Hidden by default) -->
            <div id="categoryForm" class="hidden bg-gray-50 p-6 rounded-lg mb-8 border border-gray-200">
                <h2 class="text-lg font-semibold mb-4 text-gray-800">Add New Category</h2>
                <form class="space-y-4" method="POST" action="category/createcategory">
                    @csrf
                    <div>
                        <label for="categoryName" class="block text-sm font-medium text-gray-700 mb-1">Category
                            Name</label>
                        <input type="text" id="categoryName" name="categoryName" placeholder="Enter category name"
                            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-teal-500 focus:border-transparent" />
                    </div>
                    <div>
                        <label for="categoryDescription"
                            class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea id="categoryDescription" name="categoryDescription" rows="3" placeholder="Enter category description"
                            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-teal-500 focus:border-transparent"></textarea>
                    </div>
                    <div class="flex gap-4 pt-2">
                        <button type="submit"
                            class="bg-teal-600 hover:bg-teal-700 text-white px-6 py-2 rounded-md transition duration-200">
                            Create Category
                        </button>
                        <button type="button" id="cancelBtn"
                            class="bg-white hover:bg-gray-100 text-gray-700 border border-gray-300 px-6 py-2 rounded-md transition duration-200">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>

            <!-- Category Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Category Card 1 -->
                @foreach ($categories as $category)
                    <div
                        class="bg-green-50 rounded-lg overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition duration-200">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <h2 class="text-xl font-bold text-gray-800">{{ $category->name }}</h2>
                                <div class="flex space-x-2">
                                    <button class="text-gray-500 hover:text-teal-600 transition duration-200"
                                        title="Edit Category">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <form action="/admin/category/{{ $category->id }}" method="POST"
                                        onsubmit="return confirm('Are you s ure you want to delete this category?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-gray-500 hover:text-red-600 transition duration-200"
                                            title="Delete Category">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-6">
                                {{ $category->description }}
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">
                                    <i class="fas fa-ticket-alt mr-1"></i> {{ $category->tickets->count() }} ticket
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Add more category cards as needed -->
            </div>
        </div>
    </div>

    <!-- Simple JavaScript to toggle form visibility -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const openFormBtn = document.getElementById('openFormBtn');
            const cancelBtn = document.getElementById('cancelBtn');
            const categoryForm = document.getElementById('categoryForm');

            openFormBtn.addEventListener('click', function() {
                categoryForm.classList.remove('hidden');
            });

            cancelBtn.addEventListener('click', function() {
                categoryForm.classList.add('hidden');
            });
        });
    </script>
    </div>
</body>

</html>
