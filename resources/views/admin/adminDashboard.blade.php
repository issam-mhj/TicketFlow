<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Material Tailwind PRO Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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

        .map-point {
            height: 10px;
            width: 10px;
            background-color: black;
            border-radius: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="px-6 mb-8">
            <div class="flex items-center">
                <div
                    class="w-8 h-8 flex items-center justify-center border border-gray-400 rounded">
                    <i class="fas fa-cubes"></i>
                </div>
                <span class="ml-2 text-lg font-semibold">Material Tailwind PRO</span>
            </div>
        </div>

        <div class="px-6 mb-8">
            <div class="flex items-center">
                <img
                    src="/api/placeholder/40/40"
                    alt="Profile"
                    class="w-10 h-10 rounded-full" />
                <span class="ml-3 font-medium">Brooklyn Alice</span>
                <i class="fas fa-chevron-down ml-auto text-gray-400"></i>
            </div>
        </div>

        <div class="px-3">
            <div class="mb-2">
                <div
                    class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700">
                    <i class="fas fa-th-large mr-3 text-gray-500"></i>
                    <span>Dashboard</span>
                    <i
                        class="fas fa-chevron-down ml-auto text-gray-400"></i>
                </div>
            </div>

            <div class="mt-6">
                <div class="px-3 py-2 text-xs font-semibold text-gray-500">
                    PAGES
                </div>

                <div class="mb-2">
                    <div
                        class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700">
                        <i class="fas fa-file mr-3 text-gray-500"></i>
                        <span>Pages</span>
                        <i
                            class="fas fa-chevron-down ml-auto text-gray-400"></i>
                    </div>
                </div>

                <div class="mb-2">
                    <div
                        class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700">
                        <i class="fas fa-th mr-3 text-gray-500"></i>
                        <span>Applications</span>
                        <i
                            class="fas fa-chevron-down ml-auto text-gray-400"></i>
                    </div>
                </div>

                <div class="mb-2">
                    <div
                        class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700">
                        <i
                            class="fas fa-shopping-bag mr-3 text-gray-500"></i>
                        <span>Ecommerce</span>
                        <i
                            class="fas fa-chevron-down ml-auto text-gray-400"></i>
                    </div>
                </div>

                <div class="mb-2">
                    <div
                        class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700">
                        <i class="fas fa-lock mr-3 text-gray-500"></i>
                        <span>Authentication</span>
                        <i
                            class="fas fa-chevron-down ml-auto text-gray-400"></i>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <div class="px-3 py-2 text-xs font-semibold text-gray-500">
                    DOCS
                </div>

                <div class="mb-2">
                    <div
                        class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700">
                        <i class="fas fa-book mr-3 text-gray-500"></i>
                        <span>Basic</span>
                        <i
                            class="fas fa-chevron-down ml-auto text-gray-400"></i>
                    </div>
                </div>

                <div class="mb-2">
                    <div
                        class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700">
                        <i
                            class="fas fa-puzzle-piece mr-3 text-gray-500"></i>
                        <span>Components</span>
                        <i
                            class="fas fa-chevron-down ml-auto text-gray-400"></i>
                    </div>
                </div>
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
                    <input
                        type="text"
                        placeholder="Search"
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

        <!-- Sales by Country Card -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-6">
            <div class="p-6">
                <div class="flex items-center mb-6">
                    <div
                        class="w-12 h-12 rounded-xl bg-gray-800 flex items-center justify-center mr-4">
                        <i class="fas fa-globe text-white text-xl"></i>
                    </div>
                    <h2 class="text-xl font-medium">Sales by Country</h2>
                </div>

                <div class="flex">
                    <div class="w-1/2">
                        <!-- Table -->
                        <table class="w-full">
                            <thead>
                                <tr class="text-left text-sm text-gray-500">
                                    <th class="pb-3">Country</th>
                                    <th class="pb-3">Sales</th>
                                    <th class="pb-3">Value</th>
                                    <th class="pb-3">Bounce</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-3">
                                        <div class="flex items-center">
                                            <img
                                                src="/api/placeholder/20/15"
                                                alt="USA"
                                                class="mr-2 h-4" />
                                            <span>United State</span>
                                        </div>
                                    </td>
                                    <td class="py-3">2500</td>
                                    <td class="py-3">$230,900</td>
                                    <td class="py-3">29.9%</td>
                                </tr>
                                <tr>
                                    <td class="py-3">
                                        <div class="flex items-center">
                                            <img
                                                src="/api/placeholder/20/15"
                                                alt="Germany"
                                                class="mr-2 h-4" />
                                            <span>Germany</span>
                                        </div>
                                    </td>
                                    <td class="py-3">3,900</td>
                                    <td class="py-3">$440,000</td>
                                    <td class="py-3">40.22%</td>
                                </tr>
                                <tr>
                                    <td class="py-3">
                                        <div class="flex items-center">
                                            <img
                                                src="/api/placeholder/20/15"
                                                alt="Great Britain"
                                                class="mr-2 h-4" />
                                            <span>Great Britain</span>
                                        </div>
                                    </td>
                                    <td class="py-3">1,400</td>
                                    <td class="py-3">$190,700</td>
                                    <td class="py-3">23.44%</td>
                                </tr>
                                <tr>
                                    <td class="py-3">
                                        <div class="flex items-center">
                                            <img
                                                src="/api/placeholder/20/15"
                                                alt="Brasil"
                                                class="mr-2 h-4" />
                                            <span>Brasil</span>
                                        </div>
                                    </td>
                                    <td class="py-3">562</td>
                                    <td class="py-3">$143,960</td>
                                    <td class="py-3">32.14%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="w-1/2">
                        <!-- World Map -->
                        <div class="world-map">
                            <!-- Map points -->
                            <div
                                class="map-point"
                                style="top: 30%; left: 25%"></div>
                            <div
                                class="map-point"
                                style="top: 30%; left: 45%"></div>
                            <div
                                class="map-point"
                                style="top: 40%; left: 50%"></div>
                            <div
                                class="map-point"
                                style="top: 35%; left: 75%"></div>
                            <div
                                class="map-point"
                                style="top: 50%; left: 85%"></div>
                            <div
                                class="map-point"
                                style="top: 60%; left: 40%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="grid grid-cols-3 gap-6">
            <!-- Chart 1 -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <canvas id="barChart" height="200"></canvas>
            </div>

            <!-- Chart 2 -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <canvas id="lineChart" height="200"></canvas>
            </div>

            <!-- Chart 3 -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <canvas id="areaChart" height="200"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script>
        // Bar Chart
        const barCtx = document.getElementById("barChart").getContext("2d");
        const barChart = new Chart(barCtx, {
            type: "bar",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                datasets: [{
                    label: "Monthly Sales",
                    data: [50, 18, 20, 48, 36, 40],
                    backgroundColor: "#4CAF50",
                    borderColor: "#4CAF50",
                    borderWidth: 1,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 60,
                        grid: {
                            borderDash: [5, 5],
                            color: "#e0e0e0",
                        },
                    },
                    x: {
                        grid: {
                            display: false,
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                },
            },
        });

        // Line Chart
        const lineCtx = document
            .getElementById("lineChart")
            .getContext("2d");
        const lineChart = new Chart(lineCtx, {
            type: "line",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                datasets: [{
                    label: "Website Traffic",
                    data: [250, 300, 320, 480, 250, 480],
                    backgroundColor: "transparent",
                    borderColor: "#2196F3",
                    borderWidth: 2,
                    pointBackgroundColor: "#2196F3",
                    tension: 0.4,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 600,
                        grid: {
                            borderDash: [5, 5],
                            color: "#e0e0e0",
                        },
                    },
                    x: {
                        grid: {
                            display: false,
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                },
            },
        });

        // Area Chart
        const areaCtx = document
            .getElementById("areaChart")
            .getContext("2d");
        const areaChart = new Chart(areaCtx, {
            type: "line",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                datasets: [{
                    label: "Revenue",
                    data: [250, 300, 500, 280, 400, 300],
                    backgroundColor: "rgba(76, 175, 80, 0.2)",
                    borderColor: "#4CAF50",
                    borderWidth: 2,
                    pointBackgroundColor: "#4CAF50",
                    fill: true,
                    tension: 0.4,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 600,
                        grid: {
                            borderDash: [5, 5],
                            color: "#e0e0e0",
                        },
                    },
                    x: {
                        grid: {
                            display: false,
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                },
            },
        });
    </script>
</body>

</html>