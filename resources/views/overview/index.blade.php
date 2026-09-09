@extends('layouts.app')

@section('title', 'Overview - SchoolChamp')

@section('content')
    <div class="mb-6">
        <h1 class="text-xl font-bold text-[#16213A]">Overview</h1>
        <p class="text-sm text-gray-500">Welcome back, Vincent Genesius!</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white border border-[#d9d9d9] p-6 flex items-center gap-4">
            <div class="w-12 h-12 bg-rose-50 text-[#990000] flex items-center justify-center rounded shrink-0">
                <span class="material-symbols-outlined text-2xl">workspace_premium</span>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-700">Competitions</p>
                <h3 class="text-2xl font-bold text-[#16213A]">8</h3>
                <p class="text-xs text-gray-400">All Time</p>
            </div>
        </div>

        <div class="bg-white border border-[#d9d9d9] p-6 flex items-center gap-4">
            <div class="w-12 h-12 bg-indigo-50 text-indigo-600 flex items-center justify-center rounded shrink-0">
                <span class="material-symbols-outlined text-2xl">person</span>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-700">Participants</p>
                <h3 class="text-2xl font-bold text-[#16213A]">8</h3>
                <p class="text-xs text-gray-400">Students</p>
            </div>
        </div>

        <div class="bg-white border border-[#d9d9d9] p-6 flex items-center gap-4">
            <div class="w-12 h-12 bg-amber-50 text-amber-500 flex items-center justify-center rounded shrink-0">
                <span class="material-symbols-outlined text-2xl">emoji_events</span>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-700">Achievements</p>
                <h3 class="text-2xl font-bold text-[#16213A]">2</h3>
                <p class="text-xs text-gray-400">All Time</p>
            </div>
        </div>

        <!-- Advisors -->
        <div class="bg-white border border-[#d9d9d9] p-6 flex items-center gap-4">
            <div class="w-12 h-12 bg-emerald-50 text-emerald-500 flex items-center justify-center rounded shrink-0">
                <span class="material-symbols-outlined text-2xl">school</span>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-700">Advisors</p>
                <h3 class="text-2xl font-bold text-[#16213A]">10</h3>
                <p class="text-xs text-gray-400">Teachers</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Recent Competitions -->
        <div class="bg-white border border-[#d9d9d9] p-6">
            <h2 class="text-lg font-bold text-[#16213A] mb-6">Recent Competitions</h2>
            
            <div class="flex flex-col gap-5">
                <div class="flex items-center gap-4 pb-4 border-b border-gray-100">
                    <div class="bg-rose-50 text-[#990000] rounded p-2.5 text-center min-w-[56px]">
                        <span class="block text-[10px] font-bold uppercase tracking-wider">MAY</span>
                        <span class="block text-lg font-bold leading-none">25</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#16213A] text-sm">National Debate Championship 2024</h4>
                        <p class="text-xs text-gray-400 mt-0.5">May 25, 2024</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 pb-4 border-b border-gray-100">
                    <div class="bg-rose-50 text-[#990000] rounded p-2.5 text-center min-w-[56px]">
                        <span class="block text-[10px] font-bold uppercase tracking-wider">JUN</span>
                        <span class="block text-lg font-bold leading-none">08</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#16213A] text-sm">Programming Contest Indonesia 2024</h4>
                        <p class="text-xs text-gray-400 mt-0.5">June 08, 2024</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="bg-rose-50 text-[#990000] rounded p-2.5 text-center min-w-[56px]">
                        <span class="block text-[10px] font-bold uppercase tracking-wider">JUN</span>
                        <span class="block text-lg font-bold leading-none">15</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#16213A] text-sm">Science Fair National Level</h4>
                        <p class="text-xs text-gray-400 mt-0.5">June 15, 2024</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white border border-[#d9d9d9] p-6">
            <h2 class="text-lg font-bold text-[#16213A] mb-6">Competition Status</h2>

            <div class="flex flex-col gap-5">
                <div class="flex items-center justify-between pb-4 border-b border-gray-100">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-emerald-50 text-emerald-500 flex items-center justify-center rounded">
                            <span class="material-symbols-outlined text-xl">flag</span>
                        </div>
                        <span class="font-bold text-[#16213A] text-sm">Finished</span>
                    </div>
                    <span class="text-xl font-bold text-[#16213A]">2</span>
                </div>

                <div class="flex items-center justify-between pb-4 border-b border-gray-100">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-amber-50 text-amber-500 flex items-center justify-center rounded">
                            <span class="material-symbols-outlined text-xl">hourglass_empty</span>
                        </div>
                        <span class="font-bold text-[#16213A] text-sm">Ongoing</span>
                    </div>
                    <span class="text-xl font-bold text-[#16213A]">1</span>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-indigo-50 text-indigo-500 flex items-center justify-center rounded">
                            <span class="material-symbols-outlined text-xl">schedule</span>
                        </div>
                        <span class="font-bold text-[#16213A] text-sm">Upcoming</span>
                    </div>
                    <span class="text-xl font-bold text-[#16213A]">5</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white border border-[#d9d9d9] p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-lg font-bold text-[#16213A]">Recent Achievements</h2>
            <a href="{{ route('achievements.index') }}" class="inline-flex items-center gap-1 text-xs text-[#990000] font-semibold hover:underline">
                View All <span class="material-symbols-outlined text-xs">arrow_forward</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex items-center gap-4 pr-4 md:border-r border-gray-100">
                <div class="w-12 h-12 bg-rose-50 text-[#990000] flex items-center justify-center rounded shrink-0">
                    <span class="material-symbols-outlined text-2xl">workspace_premium</span>
                </div>
                <div>
                    <h4 class="font-bold text-[#16213A] text-sm">1st Place</h4>
                    <p class="text-xs text-gray-500">National science olympiade 2024</p>
                    <p class="text-xs text-gray-400 mt-0.5">May 20, 2024</p>
                </div>
            </div>

            <div class="flex items-center gap-4 pr-4 md:border-r border-gray-100">
                <div class="w-12 h-12 bg-indigo-50 text-indigo-500 flex items-center justify-center rounded shrink-0">
                    <span class="material-symbols-outlined text-2xl">workspace_premium</span>
                </div>
                <div>
                    <h4 class="font-bold text-[#16213A] text-sm">Best Team</h4>
                    <p class="text-xs text-gray-500">Robotics Competition Regional 2024</p>
                    <p class="text-xs text-gray-400 mt-0.5">April 21, 2024</p>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-emerald-50 text-emerald-500 flex items-center justify-center rounded shrink-0">
                    <span class="material-symbols-outlined text-2xl">workspace_premium</span>
                </div>
                <div>
                    <h4 class="font-bold text-[#16213A] text-sm">Honorable Mention</h4>
                    <p class="text-xs text-gray-500">LKS Competition 2026</p>
                    <p class="text-xs text-gray-400 mt-0.5">August 2, 2026</p>
                </div>
            </div>
        </div>
    </div>
@endsection