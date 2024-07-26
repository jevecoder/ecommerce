<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devgil E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/sweetalert2.min.css">
    <link href="output.css" rel="stylesheet">
    <script src="script.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="bg-gray-100">
<div x-data="{ sidebarOpen: false }">
    <!-- Sidebar -->
    <aside class="w-64 min-h-screen text-gray-100 bg-gray-800" x-show="sidebarOpen">
        <div class="flex items-center justify-between p-4">
            <span class="text-xl font-semibold">Dashboard</span>
            <button class="text-gray-400 focus:outline-none" @click="sidebarOpen = false">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.293 4.293a1 1 0 011.414 0L10 8.586l5.293-5.293a1 1 0 111.414 1.414L11.414 10l5.293 5.293a1 1 0 01-1.414 1.414L10 11.414l-5.293 5.293a1 1 0 01-1.414-1.414L8.586 10 3.293 4.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <!-- Sidebar Content -->
        <nav>
            <ul class="mt-6">
                <li class="px-4 py-2 hover:bg-gray-700"><a href="#" class="block">Dashboard</a></li>
                <li class="px-4 py-2 hover:bg-gray-700"><a href="#" class="block">Products</a></li>
                <li class="px-4 py-2 hover:bg-gray-700"><a href="#" class="block">Orders</a></li>
                <li class="px-4 py-2 hover:bg-gray-700"><a href="#" class="block">Customers</a></li>
                <li class="px-4 py-2 hover:bg-gray-700"><a href="#" class="block">Settings</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Content -->
    <div class="flex">
        <!-- Mobile Menu Button -->
        <button class="block text-gray-500 lg:hidden hover:text-white focus:outline-none" @click="sidebarOpen = !sidebarOpen">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 3.5a.5.5 0 011 0v13a.5.5 0 01-1 0v-13zm4 0a.5.5 0 011 0v13a.5.5 0 01-1 0v-13zm5 0a.5.5 0 011 0v13a.5.5 0 01-1 0v-13zm4 0a.5.5 0 011 0v13a.5.5 0 01-1 0v-13z" clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Main Content Area -->
        <main class="flex-1 p-4">
            <h1 class="text-2xl font-semibold">Ecommerce Dashboard</h1>
            <!-- Your dashboard content goes here -->
        </main>
    </div>
</div>
</body>
</html>