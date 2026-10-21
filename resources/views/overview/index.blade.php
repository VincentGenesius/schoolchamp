@extends('layouts.app')

@section('title', 'Overview - SchoolChamp')

@section('content')
    <div class="mb-6">
        <h1 class="text-xl font-bold text-[#16213A]">Overview</h1>
        <p class="text-sm text-gray-500">Welcome back, Vincent Genesius!</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">

        <!-- Competitions -->
        <div class="bg-white border border-[#d9d9d9] p-6 flex items-center gap-4">
            <div class="w-16 h-16 bg-rose-50 text-[#990000] flex items-center justify-center rounded shrink-0">
                <span class="material-symbols-outlined text-2xl">workspace_premium</span>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-700">Competitions</p>
                <h3 class="text-2xl font-bold text-[#16213A]">{{ $competitions->count() }}</h3>
                <p class="text-xs text-gray-400">All Time</p>
            </div>
        </div>

        <div class="bg-white border border-[#d9d9d9] p-6 flex items-center gap-4">
            <div class="w-16 h-16 bg-amber-50 text-amber-500 flex items-center justify-center rounded shrink-0">
                <span class="material-symbols-outlined text-2xl">emoji_events</span>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-700">Achievements</p>
                <h3 class="text-2xl font-bold text-[#16213A]">{{ $competitions->unique('achievement')->count() }}</h3>
                <p class="text-xs text-gray-400">All Time</p>
            </div>
        </div>

        <div class="bg-white border border-[#d9d9d9] p-6 flex items-center gap-4">
            <div class="w-16 h-16 bg-indigo-50 text-indigo-600 flex items-center justify-center rounded shrink-0">
                <span class="material-symbols-outlined text-2xl">person</span>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-700">Participants</p>
                <h3 class="text-2xl font-bold text-[#16213A]">{{ $competitions->unique('participant')->count() }}</h3>
                <p class="text-xs text-gray-400">Students</p>
            </div>
        </div>

        <!-- Advisors -->
        <div class="bg-white border border-[#d9d9d9] p-6 flex items-center gap-4">
            <div class="w-16 h-16 bg-emerald-50 text-emerald-500 flex items-center justify-center rounded shrink-0">
                <span class="material-symbols-outlined text-2xl">school</span>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-700">Advisors</p>
                <h3 class="text-2xl font-bold text-[#16213A]">{{ $competitions->unique('advisor')->count() }}</h3>
                <p class="text-xs text-gray-400">Teachers</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Recent Competitions -->
        <div class="bg-white border border-[#d9d9d9] p-6">
            <h2 class="text-lg font-bold text-[#16213A] mb-6">Recent Competitions</h2>


            <div class="flex flex-col gap-5">
                @forelse ($recentCompetitions as $competition)
                    @php
                        $date = \Carbon\Carbon::parse($competition->date);
                    @endphp

                    <div class="flex items-center gap-4 pb-4 border-b border-gray-100">
                        <div class="bg-rose-50 text-[#990000] rounded p-2.5 text-center min-w-14">
                            <span class="block text-[10px] font-bold uppercase tracking-wider">{{ $date->format('M') }}</span>
                            <span class="block text-lg font-bold leading-none">{{ $date->format('d') }}</span>
                        </div>

                        <div>
                            <h4 class="font-bold text-[#16213A] text-sm">{{ $competition->event }}</h4>
                            <p class="text-xs text-gray-400 mt-0.5">{{ $date->format('F d, Y') }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-xs text-gray-400 text-center">No competition data added yet</p>
                @endforelse
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
                    <span class="text-xl font-bold text-[#16213A]">{{ $totalFinished }}</span>
                </div>

                <div class="flex items-center justify-between pb-4 border-b border-gray-100">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-amber-50 text-amber-500 flex items-center justify-center rounded">
                            <span class="material-symbols-outlined text-xl">hourglass_empty</span>
                        </div>
                        <span class="font-bold text-[#16213A] text-sm">Ongoing</span>
                    </div>
                    <span class="text-xl font-bold text-[#16213A]">{{ $totalOngoing }}</span>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-indigo-50 text-indigo-500 flex items-center justify-center rounded">
                            <span class="material-symbols-outlined text-xl">schedule</span>
                        </div>
                        <span class="font-bold text-[#16213A] text-sm">Upcoming</span>
                    </div>
                    <span class="text-xl font-bold text-[#16213A]">{{ $totalUpcoming }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white border border-[#d9d9d9] p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-lg font-bold text-[#16213A]">Recent Achievements</h2>
            <a href="{{ route('achievements.index') }}"
                class="inline-flex items-center gap-1 text-xs text-[#990000] font-semibold">
                View All <span class="material-symbols-outlined text-xs">arrow_forward</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse ($recentAchievements as $competition)

                <div class="flex items-center gap-4 pr-4 md:border-r border-gray-100">
                    <div class="w-12 h-12 bg-rose-50 text-[#990000] flex items-center justify-center rounded shrink-0">
                        <span class="material-symbols-outlined text-2xl">workspace_premium</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#16213A] text-sm">{{ $competition->achievement }}</h4>
                        <p class="text-xs text-gray-500">{{ $competition->event }}</p>
                        <p class="text-xs text-gray-400 mt-1">by <b>{{ $competition->participant }}</b></p>
                    </div>
                </div>
            @empty
                <p class="text-xs text-gray-400 text-center">No competition data added yet</p>
            @endforelse
        </div>
    </div>
@endsection