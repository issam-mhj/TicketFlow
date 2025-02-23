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
                    <a href="/admin/category"
                        class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700 cursor-pointer">
                        <i class="fas fa-th mr-3 text-gray-500"></i>
                        <span>categories</span>
                    </a>
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
                <span>tickets</span>
            </div>

            <div class="flex items-center">
                <div class="relative">
                    <input type="text" placeholder="Search tickets..."
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

        <h1 class="text-2xl font-medium mb-6">Tickets</h1>
        <div class="flex gap-6">
            <!-- In Progress Section -->
            <div class="w-full">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center">
                        <h2 class="text-lg font-medium">In Progress</h2>
                        <span
                            class="ml-2 px-2 py-0.5 bg-yellow-100 text-yellow-700 text-sm rounded-full">{{ $tickets->count() }}
                        </span>
                    </div>
                    <button class="text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </button>
                </div>

                <!-- In Progress Items -->
                <div class="space-y-3">
                    <!-- Item 1 -->
                    @foreach ($tickets as $ticket)
                        <div class="bg-white rounded-lg shadow-sm p-4 ticket-item priority-high">
                            <div class="flex items-start">
                                <button class="mt-1 mr-3">
                                    <div class="w-5 h-5 border border-gray-300 rounded-md"></div>
                                </button>
                                <div class="flex-grow flex flex-col md:flex-row md:items-center md:justify-between">
                                    <div class="flex items-center flex-grow">
                                        <span class="mr-2 text-sm text-gray-500">≡</span>
                                        <span class="font-medium">{{ $ticket->title }}</span>
                                        <span
                                            class="ml-2 px-2 py-0.5 bg-red-100 text-red-700 text-xs rounded-full">High</span>
                                    </div>
                                    <div class="flex items-center mt-2 md:mt-0">
                                        <div class="flex items-center text-gray-500 text-sm mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

</html>
