@extends('layouts.app')

@section('title', 'Overview - SchoolChamp')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Overview</h1>
        <p class="text-gray-500 mt-1">Welcome back, Vincent Genesius!</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm flex flex-col justify-between">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-medium">Competitions</p>
                    <h3 class="text-3xl font-bold text-gray-900 mt-1">5</h3>
                    <p class="text-xs text-gray-400 mt-1">All Time</p>
                </div>
                <div class="p-3 bg-red-50 rounded-xl text-red-500">
                    <span class="material-symbols-outlined text-2xl">workspace_premium</span>
                </div>
            </div>
            <a href="#" class="inline-flex items-center gap-1 text-sm text-red-500 font-medium mt-6 hover:underline">
                View All <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>

        <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm flex flex-col justify-between">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-medium">Participants</p>
                    <h3 class="text-3xl font-bold text-gray-900 mt-1">5</h3>
                    <p class="text-xs text-gray-400 mt-1">Students</p>
                </div>
                <div class="p-3 bg-blue-50 rounded-xl text-blue-500">
                    <span class="material-symbols-outlined text-2xl">person</span>
                </div>
            </div>
            <a href="#" class="inline-flex items-center gap-1 text-sm text-blue-600 font-medium mt-6 hover:underline">
                View All <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>

        <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm flex flex-col justify-between">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-medium">Achievements</p>
                    <h3 class="text-3xl font-bold text-gray-900 mt-1">2</h3>
                    <p class="text-xs text-gray-400 mt-1">All Time</p>
                </div>
                <div class="p-3 bg-amber-50 rounded-xl text-amber-500">
                    <span class="material-symbols-outlined text-2xl">emoji_events</span>
                </div>
            </div>
            <a href="#" class="inline-flex items-center gap-1 text-sm text-amber-500 font-medium mt-6 hover:underline">
                View All <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>

        <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm flex flex-col justify-between">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-medium">Advisors</p>
                    <h3 class="text-3xl font-bold text-gray-900 mt-1">10</h3>
                    <p class="text-xs text-gray-400 mt-1">Teachers</p>
                </div>
                <div class="p-3 bg-emerald-50 rounded-xl text-emerald-500">
                    <span class="material-symbols-outlined text-2xl">school</span>
                </div>
            </div>
            <a href="#" class="inline-flex items-center gap-1 text-sm text-emerald-600 font-medium mt-6 hover:underline">
                View All <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm">
            <h2 class="text-xl font-bold text-gray-900 mb-6">Upcoming Competitions</h2>
            <div class="space-y-6">
                <div class="flex items-center gap-4 pb-4 border-b border-gray-100 last:border-0 last:pb-0">
                    <div class="bg-red-50 text-red-500 rounded-xl p-3 text-center min-w-[64px]">
                        <span class="block text-xs font-semibold uppercase tracking-wider">MAY</span>
                        <span class="block text-xl font-bold leading-none">25</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">National Debate Championship 2024</h4>
                        <p class="text-sm text-gray-400 mt-0.5">May 25, 2024</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 pb-4 border-b border-gray-100 last:border-0 last:pb-0">
                    <div class="bg-red-50 text-red-500 rounded-xl p-3 text-center min-w-[64px]">
                        <span class="block text-xs font-semibold uppercase tracking-wider">JUN</span>
                        <span class="block text-xl font-bold leading-none">08</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Programming Contest Indonesia 2024</h4>
                        <p class="text-sm text-gray-400 mt-0.5">June 08, 2024</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 pb-4 border-b border-gray-100 last:border-0 last:pb-0">
                    <div class="bg-red-50 text-red-500 rounded-xl p-3 text-center min-w-[64px]">
                        <span class="block text-xs font-semibold uppercase tracking-wider">JUN</span>
                        <span class="block text-xl font-bold leading-none">15</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Science Fair National Level</h4>
                        <p class="text-sm text-gray-400 mt-0.5">June 15, 2024</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm flex flex-col justify-between">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900">Recent Activity</h2>
                <a href="#" class="inline-flex items-center gap-1 text-sm text-red-500 font-medium hover:underline">
                    View All <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="flex-1 min-h-[200px]"></div>
        </div>
    </div>

    <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold text-gray-900">Recent Achievements</h2>
            <a href="#" class="inline-flex items-center gap-1 text-sm text-red-500 font-medium hover:underline">
                View All <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex items-center gap-4 pr-4 md:border-r border-gray-100">
                <div class="p-3 bg-red-50 rounded-full text-red-500 shrink-0">
                    <span class="material-symbols-outlined text-2xl">workspace_premium</span>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900">1st Place</h4>
                    <p class="text-xs text-gray-500">National science olympiade 2024</p>
                    <p class="text-xs text-gray-400 mt-0.5">May 20, 2024</p>
                </div>
            </div>

            <div class="flex items-center gap-4 pr-4 md:border-r border-gray-100">
                <div class="p-3 bg-blue-50 rounded-full text-blue-500 shrink-0">
                    <span class="material-symbols-outlined text-2xl">workspace_premium</span>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900">Best Team</h4>
                    <p class="text-xs text-gray-500">Robotics Competition Regional 2024</p>
                    <p class="text-xs text-gray-400 mt-0.5">April 21, 2024</p>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <div class="p-3 bg-emerald-50 rounded-full text-emerald-500 shrink-0">
                    <span class="material-symbols-outlined text-2xl">workspace_premium</span>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900">Honorable Mention</h4>
                    <p class="text-xs text-gray-500">LKS Competition 2026</p>
                    <p class="text-xs text-gray-400 mt-0.5">August 2, 2026</p>
                </div>
            </div>
        </div>
    </div>
@endsection