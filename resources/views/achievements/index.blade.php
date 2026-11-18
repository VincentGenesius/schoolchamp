@extends('layouts.app')

@section('title', $title)

@section('content')

    <h1 class="text-[#990000] text-xl font-bold mb-2">Achievement ({{ $achievements->count() }})</h1>

    <div class="flex justify-between items-center">
        <form action="{{ route('achievements.index') }}" method="GET" class="flex items-center gap-2 grow">
            <!-- Input Search -->
            <div class="relative grow">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search competition..."
                    class="w-full pl-4 pr-4 py-2 border border-[#AAAAAA] text-sm focus:outline-none focus:ring-2 focus:ring-gray-200 bg-white">
            </div>

            <!-- Filter Bulan -->
            <div class="relative flex items-center">
                <select name="month" onchange="this.form.submit()"
                    class="border border-[#AAAAAA] pl-3 pr-8 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-gray-200 text-[#333333] appearance-none cursor-pointer">
                    <option value="">All Months</option>
                    <option value="1" {{ request('month') == '1' ? 'selected' : '' }}>January</option>
                    <option value="2" {{ request('month') == '2' ? 'selected' : '' }}>February</option>
                    <option value="3" {{ request('month') == '3' ? 'selected' : '' }}>March</option>
                    <option value="4" {{ request('month') == '4' ? 'selected' : '' }}>April</option>
                    <option value="5" {{ request('month') == '5' ? 'selected' : '' }}>May</option>
                    <option value="6" {{ request('month') == '6' ? 'selected' : '' }}>June</option>
                    <option value="7" {{ request('month') == '7' ? 'selected' : '' }}>July</option>
                    <option value="8" {{ request('month') == '8' ? 'selected' : '' }}>August</option>
                    <option value="9" {{ request('month') == '9' ? 'selected' : '' }}>September</option>
                    <option value="10" {{ request('month') == '10' ? 'selected' : '' }}>October</option>
                    <option value="11" {{ request('month') == '11' ? 'selected' : '' }}>November</option>
                    <option value="12" {{ request('month') == '12' ? 'selected' : '' }}>December</option>
                </select>
                <span class="material-symbols-outlined absolute right-2 text-gray-400 pointer-events-none text-lg">
                    keyboard_arrow_down
                </span>
            </div>

            <!-- Filter Tahun -->
            <div class="relative flex items-center">
                <select name="year" onchange="this.form.submit()"
                    class="border border-[#AAAAAA] pl-3 pr-8 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-gray-200 text-[#333333] appearance-none cursor-pointer">
                    <option value="">All Years</option>
                    <option value="2026" {{ request('year') == '2026' ? 'selected' : '' }}>2026</option>
                    <option value="2025" {{ request('year') == '2025' ? 'selected' : '' }}>2025</option>
                    <option value="2024" {{ request('year') == '2024' ? 'selected' : '' }}>2024</option>
                    <option value="2024" {{ request('year') == '2024' ? 'selected' : '' }}>2023</option>
                    <option value="2024" {{ request('year') == '2024' ? 'selected' : '' }}>2022</option>
                    <option value="2024" {{ request('year') == '2024' ? 'selected' : '' }}>2021</option>
                    <option value="2024" {{ request('year') == '2024' ? 'selected' : '' }}>2020</option>
                </select>
                <span class="material-symbols-outlined absolute right-2 text-gray-400 pointer-events-none text-lg">
                    keyboard_arrow_down
                </span>
            </div>
        </form>
    </div>

    <div class="my-4 grid grid-cols-4 gap-4">
        @foreach ($achievements as $achievement)
            <!-- ACHIEVEMENT CARD -->
            <div class="border border-gray-300">
                <div class="relative">
                    <img src="{{ asset('storage/' . $achievement->image) }}" alt="achievement image"
                        class="w-full h-45 object-cover">

                    <div class="absolute bottom-2 left-2 bg-gray-700/70 text-white text-[10px] font-medium py-1 px-2">
                        <div>{{ $achievement['field'] }}</div>
                    </div>
                </div>

                <div class="m-4">
                    <h1 class="text-lg font-bold leading-[1.2] pb-1">{{ $achievement['event'] }}</h1>
                    <div
                        class="flex items-center w-fit bg-yellow-500 text-white text-[11px] font-semibold uppercase px-3 py-1 mb-2 rounded-2xl">
                        <div>{{ $achievement['achievement'] }}</div>
                    </div>
                    <div class="flex items-center justify-between pt-3 border-t border-gray-300">
                        <div class="flex flex-col">
                            <label for="" class="text-[12px] leading-none">PARTICIPANT</label>
                            <h1 class="text-lg font-semibold">{{ $achievement['participant'] }}</h1>
                        </div>

                        <span
                            class="bg-[#990000] p-2 text-white text-sm">{{ \Carbon\Carbon::parse($achievement['date'])->format('d/m/Y') }}</span>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection