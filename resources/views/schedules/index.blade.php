@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1 class="text-[#990000] text-xl font-bold mb-2">Schedule (6)</h1>

    <div class="flex justify-between items-center">
        <form action="#" method="GET" class="relative">
            <input type="search" name="search" placeholder="Search competition..."
                class="w-249 pl-4 pr-4 py-2 border border-[#AAAAAA] text-sm focus:outline-none focus:ring-2 focus:ring-gray-200">
        </form>

        <button class="flex gap-1 bg-[#DADAFF] text-[#333333] px-4 py-2 hover:bg-[#b8b8d1] transition">
            <span class="material-symbols-outlined">filter_alt</span>
            <h1 class="font-medium">Filter</h1>
        </button>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 mt-4">
        @foreach ($schedules as $schedule)
            @if (in_array($schedule['status'], ['Ongoing', 'Upcoming']))
                <div class="bg-white border border-[#d9d9d9] relative overflow-hidden flex flex-col justify-between p-5 min-h-55">

                    <div class="absolute left-0 top-0 bottom-0 w-3 bg-[#990000]"></div>

                    <div class="pl-2">
                        <div class="mb-3">
                            @if ($schedule['status'] === 'Ongoing')
                                <span class="inline-block px-4 py-2 text-xs font-semibold bg-[#FFECB9] text-[#C38F00]">
                                    Ongoing
                                </span>
                            @else
                                <span class="inline-block px-4 py-2 text-xs font-semibold bg-[#FFC0BF] text-[#BD0200]">
                                    Upcoming
                                </span>
                            @endif
                        </div>

                        <h3 class="font-bold text-[#333333] text-base leading-snug mb-3 line-clamp-2 min-h-11">
                            {{ $schedule['event'] }}
                        </h3>

                        <div class="space-y-1.5 text-xs text-[#333333] font-medium">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-[#333333]">calendar_month</span>
                                <span>{{ \Carbon\Carbon::createFromFormat('d/m/Y', $schedule['date'])->format('j F Y') }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-[#333333]">location_on</span>
                                <span>{{ $schedule['location'] }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="pl-2 pt-3 mt-4 border-t border-gray-200">
                        <p class="text-xs font-medium text-[#333333]">
                            @if ($schedule['status'] === 'Ongoing')
                                1 Student Competing
                            @else
                                1 Student Registered
                            @endif
                        </p>
                    </div>

                </div>
            @endif
        @endforeach
    </div>
@endsection