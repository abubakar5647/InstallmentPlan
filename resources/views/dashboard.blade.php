@extends('layouts.app')

@section('content')
<div class="flex h-screen overflow-hidden bg-gray-100 dark:bg-neutral-950 transition-colors duration-300">
    <!-- Sidebar -->
    @include('includes.sidebar')

    <!-- Main Content -->
    <div class="flex-1 ml-64 flex flex-col h-screen overflow-hidden">
        <!-- Header -->
        <header class="h-16 flex items-center justify-between px-6 bg-white dark:bg-black border-b border-gray-200 dark:border-neutral-800">
            <h2 class="text-xl font-semibold text-black dark:text-white">
                Dashboard Overview
            </h2>
            <div class="flex items-center">
                <span class="text-sm text-gray-600 dark:text-gray-400 mr-2">Hello, User</span>
                <div class="h-9 w-9 rounded-full bg-yellow-500 flex items-center justify-center text-black font-bold border-2 border-yellow-400 dark:border-yellow-600">
                    U
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto p-6 bg-gray-50 dark:bg-neutral-950">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <!-- Card 1 -->
                <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-sm border border-gray-200 dark:border-neutral-800 p-6 transition-all hover:shadow-md">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-100 dark:bg-yellow-500/10 text-yellow-600 dark:text-yellow-400">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="mb-1 text-sm font-medium text-gray-500 dark:text-gray-400">Total Users</p>
                            <p class="text-2xl font-bold text-black dark:text-white">1,257</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-sm border border-gray-200 dark:border-neutral-800 p-6 transition-all hover:shadow-md">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-100 dark:bg-yellow-500/10 text-yellow-600 dark:text-yellow-400">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="mb-1 text-sm font-medium text-gray-500 dark:text-gray-400">Total Sales</p>
                            <p class="text-2xl font-bold text-black dark:text-white">$45,231</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-sm border border-gray-200 dark:border-neutral-800 p-6 transition-all hover:shadow-md">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-100 dark:bg-yellow-500/10 text-yellow-600 dark:text-yellow-400">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="mb-1 text-sm font-medium text-gray-500 dark:text-gray-400">New Orders</p>
                            <p class="text-2xl font-bold text-black dark:text-white">54</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-sm border border-gray-200 dark:border-neutral-800 p-6">
                 <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Recent Activity</h3>
                 <div class="border-t border-gray-200 dark:border-neutral-800">
                     <ul class="divide-y divide-gray-200 dark:divide-neutral-800">
                         <li class="py-4 flex items-center justify-between">
                             <div class="flex items-center">
                                 <div class="h-9 w-9 rounded-full bg-yellow-500 flex items-center justify-center text-black text-xs font-bold">JD</div>
                                 <div class="ml-3">
                                     <p class="text-sm font-medium text-black dark:text-white">John Doe placed a new order</p>
                                     <p class="text-xs text-gray-500 dark:text-gray-400">2 minutes ago</p>
                                 </div>
                             </div>
                             <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">Completed</span>
                         </li>
                         <li class="py-4 flex items-center justify-between">
                             <div class="flex items-center">
                                 <div class="h-9 w-9 rounded-full bg-yellow-500 flex items-center justify-center text-black text-xs font-bold">AS</div>
                                 <div class="ml-3">
                                     <p class="text-sm font-medium text-black dark:text-white">Alice Smith updated profile</p>
                                     <p class="text-xs text-gray-500 dark:text-gray-400">15 minutes ago</p>
                                 </div>
                             </div>
                             <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-400">Pending</span>
                         </li>
                         <li class="py-4 flex items-center justify-between">
                             <div class="flex items-center">
                                 <div class="h-9 w-9 rounded-full bg-yellow-500 flex items-center justify-center text-black text-xs font-bold">MJ</div>
                                 <div class="ml-3">
                                     <p class="text-sm font-medium text-black dark:text-white">Mike Johnson made a payment</p>
                                     <p class="text-xs text-gray-500 dark:text-gray-400">1 hour ago</p>
                                 </div>
                             </div>
                             <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">Completed</span>
                         </li>
                     </ul>
                 </div>
            </div>
        </main>
    </div>
</div>
@endsection
