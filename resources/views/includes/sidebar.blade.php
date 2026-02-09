<div class="w-64 bg-white dark:bg-black border-r border-gray-200 dark:border-gray-800 flex flex-col h-screen fixed left-0 top-0 transition-all z-10">
    <div class="h-16 flex items-center justify-center border-b border-gray-200 dark:border-gray-800">
        <h1 class="text-2xl font-bold text-black dark:text-white">Dashboard</h1>
    </div>
    
    <nav class="flex-1 overflow-y-auto py-4">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center px-6 py-3 text-gray-700 dark:text-gray-300 hover:bg-yellow-50 dark:hover:bg-neutral-900 hover:text-yellow-600 dark:hover:text-yellow-400 transition-colors {{ request()->routeIs('dashboard') ? 'bg-yellow-50 dark:bg-neutral-900 border-r-4 border-yellow-500 text-yellow-600 dark:text-yellow-400 font-bold' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    Dashboard
                </a>
            </li>
        </ul>
    </nav>

    <div class="p-4 border-t border-gray-200 dark:border-gray-800">
        <button onclick="toggleTheme()" class="w-full flex items-center justify-center px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-neutral-100 dark:hover:bg-neutral-900 transition-colors">
             <!-- Sun Icon -->
             <svg class="w-5 h-5 mr-2 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
             <!-- Moon Icon -->
             <svg class="w-5 h-5 mr-2 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
             Toggle Theme
        </button>
        <form action="{{ route('logout') }}" method="POST" class="mt-2">
            @csrf
            <button type="submit" class="w-full flex items-center justify-center px-4 py-2 bg-yellow-500 hover:bg-yellow-400 text-black rounded-lg text-sm font-bold shadow-sm transition-colors">
                Logout
            </button>
        </form>
    </div>
</div>
