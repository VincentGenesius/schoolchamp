@extends('layouts.app')

@section('title', $title)

@section('content')

    <h1 class="text-[#990000] text-xl font-bold mb-2">Achievement ({{ $achievements->count() }})</h1>

    <div class="flex justify-between items-center">
        <form action="#" method="GET" class="relative">
            <input type="search" name="search" placeholder="Search achievement..."
                class="w-250 pl-4 pr-4 py-2 border border-[#AAAAAA] text-sm focus:outline-none focus:ring-2 focus:ring-gray-200">
        </form>

        <button class="flex gap-1 bg-[#DADAFF] text-[#333333] px-4 py-2 hover:bg-[#b8b8d1] transition">
            <span class="material-symbols-outlined">filter_alt</span>
            <h1 class="font-medium">Filter</h1>
        </button>
    </div>

    <div class="my-4 grid grid-cols-4 gap-4">
        @foreach ($achievements as $achievement)
            <!-- ACHIEVEMENT CARD -->
            <div class="border border-gray-300">
                <div class="relative">
                    <img src="{{ asset('storage/' . $achievement->image) }}" alt="achievement image" class="w-full h-45 object-cover">

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

                        <span class="bg-[#990000] p-2 text-white text-sm">{{ \Carbon\Carbon::parse($achievement['date'])->format('d/m/Y') }}</span>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection