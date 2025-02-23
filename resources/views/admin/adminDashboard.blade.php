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

        .world-map {
            background-image: url("/api/placeholder/600/320");
            background-position: center;
            background-size: cover;
            height: 320px;
            position: relative;
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
                <img src="/" alt="Profile" class="w-10 h-10 rounded-full" />
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
                    Admin
                </div>

                <div class="mb-2">
                    <a href="/admin/tickets"
                        class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700">
                        <i class="fas fa-file mr-3 text-gray-500"></i>
                        <span>Tickets</span>
                    </a>
                </div>

                <div class="mb-2">
                    <div class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700">
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
                <span>Dashboard</span>

            </div>

            <div class="flex items-center">
                <div class="relative">
                    <input type="text" placeholder="Search"
                        class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300 w-64" />
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

        <h1 class="text-2xl font-medium mb-6">Dashboard</h1>
        <div class="flex gap-6">
            <!-- Customers Card -->
            <div class="bg-white shadow-md rounded-lg p-6 w-64 flex flex-col">
                <div class="flex items-center gap-2 text-gray-600">
                    <div class="bg-gray-100 p-2 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 20h5v-2a4 4 0 00-3-3.87M6 9a4 4 0 118 0m-3 11v-4a4 4 0 00-4-4H3a4 4 0 00-4 4v4h5m16 0a2 2 0 100-4 2 2 0 000 4z">
                            </path>
                        </svg>
                    </div>
                    <span class="text-sm">clients</span>
                </div>
                <div class="mt-2 text-2xl font-semibold">{{ $users->where('role', 'user')->count() }}
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6 w-64 flex flex-col">
                <div class="flex items-center gap-2 text-gray-600">
                    <div class="bg-gray-100 p-2 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 10l1.5-1.5a2 2 0 012.829 0L12 12m-1-1l5.5-5.5a2 2 0 012.829 0L21 10m-8 4l3 3m-3-3l-3 3m6-3l3 3">
                            </path>
                        </svg>
                    </div>
                    <span class="text-sm">agents</span>
                </div>
                <div class="mt-2 text-2xl font-semibold">{{ $users->where('role', 'agent')->count() }}
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 w-64 flex flex-col">
                <div class="flex items-center gap-2 text-gray-600">
                    <div class="bg-gray-100 p-2 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 10l1.5-1.5a2 2 0 012.829 0L12 12m-1-1l5.5-5.5a2 2 0 012.829 0L21 10m-8 4l3 3m-3-3l-3 3m6-3l3 3">
                            </path>
                        </svg>
                    </div>
                    <span class="text-sm">tickets</span>
                </div>
                <div class="mt-2 text-2xl font-semibold">{{ $tickets->count() }}</div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 w-64 flex flex-col">
                <div class="flex items-center gap-2 text-gray-600">
                    <div class="bg-gray-100 p-2 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 10l1.5-1.5a2 2 0 012.829 0L12 12m-1-1l5.5-5.5a2 2 0 012.829 0L21 10m-8 4l3 3m-3-3l-3 3m6-3l3 3">
                            </path>
                        </svg>
                    </div>
                    <span class="text-sm">categories</span>
                </div>
                <div class="mt-2 text-2xl font-semibold">{{ $categories->count() }}</div>
            </div>
        </div>
    </div>
</body>

</html>
