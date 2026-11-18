@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1 class="text-[#990000] text-xl font-bold mb-2">Schedule
        ({{ $schedules->filter(fn($item) => in_array($item->status, ['UPCOMING', 'ONGOING']))->count() }})</h1>

    <div class="flex justify-between items-center">
        <form action="{{ route('schedules.index') }}" method="GET" class="flex items-center gap-2 grow">
            <!-- Input Search -->
            <div class="relative grow">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search competition..."
                    class="w-full pl-4 pr-4 py-2 border border-[#AAAAAA] text-sm focus:outline-none focus:ring-2 focus:ring-gray-200 bg-white">
            </div>

            <!-- Dropdown Filter Status -->
            <div class="relative flex items-center">
                <select name="status" onchange="this.form.submit()"
                    class="border border-[#AAAAAA] pl-4 pr-10 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-gray-200 text-[#333333] appearance-none cursor-pointer">
                    <option value="">All Status</option>
                    @foreach (\App\Enums\StatusCompetitionEnum::cases() as $status)
                        <option value="{{ $status->value }}" {{ request('status') == $status->value ? 'selected' : '' }}>
                            {{ $status->label() }}
                        </option>
                    @endforeach
                </select>

                <span class="material-symbols-outlined absolute right-3 text-gray-400 pointer-events-none text-xl">
                    keyboard_arrow_down
                </span>
            </div>
        </form>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 mt-4">
        @foreach ($schedules as $schedule)
            @if (in_array($schedule['status'], ['ONGOING', 'UPCOMING']))
                <div class="bg-white border border-[#d9d9d9] relative overflow-hidden flex flex-col justify-between p-5 min-h-55">

                    <div class="absolute left-0 top-0 bottom-0 w-3 bg-[#990000]"></div>

                    <div class="pl-2">
                        <div class="mb-3">
                            @if ($schedule['status'] === 'ONGOING')
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
                                <span>{{ \Carbon\Carbon::parse($schedule['date'])->format('j F Y') }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-[#333333]">location_on</span>
                                <span>{{ $schedule['location'] }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="pl-2 pt-3 mt-4 border-t border-gray-200">
                        <p class="text-xs font-medium text-[#333333]">
                            @if (strtoupper($schedule['status']) === 'ONGOING')
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