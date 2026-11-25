<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])
    <title> | Admin Console </title>
</head>

<body class="bg-slate-100 text-gray-8 antialiased">

    <div class="min-h-screen flex">
        <aside class="w-64 bg-white text-slate-700 border-r border-gray-200 flex flex-col shrink-0">

            <div class="h-16 flex items-center px-6 border-b border-slate-700">
                <a href="{{ route('admin.dashboard') }}" class="text-xl font-extrabold text-red-600 shadow-sm">EFC -
                    EriFit Fitness</a>
            </div>

            <nav>
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-4 py-2.5 rounded-lg font-medium transition
                    {{ request()->routeIs('admin.dashboard') ? 'bg-sky-50 text-sky-700 font-semibold border-sky-600 shadow-sm' : 'hover:bg-gray-100 hover:text-slate-900' }}">Dashboard
                </a>
                <a href="{{ route('admin.members-list') }}"
                    class="flex items-center px-4 py-2.5 rounded-lg font-medium transition
                    {{ request()->routeIs('admin.members-list') ? 'bg-sky-50 text-sky-700 font-semibold border-sky-600 shadow-sm' : 'hover:bg-gray-100 hover:text-slate-900' }}">Members
                    List
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2.5 rounded-lg font-medium transition
                    {{ request()->routeIs('admin.memberlist') ? 'bg-sky-50 text-sky-700 font-semibold border-sky-600 shadow-sm' : 'hover:bg-gray-100 hover:text-slate-900' }}">Personal Trainers List
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2.5 rounded-lg font-medium transition
                    {{ request()->routeIs('admin.packages.*') ? 'bg-sky-50 text-sky-700 font-semibold border-sky-600 shadow-sm' : 'hover:bg-gray-100 hover:text-slate-900' }}">Membership
                    Packages
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2.5 rounded-lg font-medium transition
                    {{ request()->routeIs('admin.memberlist') ? 'bg-sky-50 text-sky-700 font-semibold border-sky-600 shadow-sm' : 'hover:bg-gray-100 hover:text-slate-900' }}">Gym
                    Facilities
                </a>
            </nav>

            <div class="p-4 border-t border-slate-800">
                <div class="mb-3 px-2">
                    <p class="text-sm text-sky-700">Logged in as</p>
                    <p class="text-l text-sky-800 font-extrabold truncate">{{ auth()->user()->username }}</p>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left px-4 py-2 rounded-lg text-sm font-medium text-white-200 hover:bg-gray-100 hover:text-slate-900 transition">
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex-1 flex flex-col">
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-8">
                <h2 class="text-lg font-semibold text-gray-800">Admin Control Panel</h2>
                <a href="{{ route('home') }}" class="text-sm text-blue-600 hover:underline">Lihat website utama (Guest
                    Lobby)</a>
            </header>

            <main class="flex-1 p-8">
                {{ $slot }}
            </main>
        </div>
    </div>

    <footer>

    </footer>
</body>

</html>