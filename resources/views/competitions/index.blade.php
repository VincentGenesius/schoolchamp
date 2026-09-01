@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1 class="text-[#990000] text-xl font-bold mb-2">Competitions (8)</h1>

    <div class="flex justify-between items-center">
        <form action="#" method="GET" class="relative">
            <input type="search" name="search" placeholder="Search competition..." class="w-205 pl-4 pr-4 py-2 border border-[#AAAAAA] text-sm focus:outline-none focus:ring-2 focus:ring-gray-200">
        </form>

        <button class="flex gap-1 bg-[#DADAFF] text-[#333333] px-4 py-2 hover:bg-[#b8b8d1] transition">
            <span class="material-symbols-outlined">filter_alt</span>
            <h1 class="font-medium">Filter</h1>
        </button>

        <a href="#" class="bg-[#990000] text-white font-medium px-4 py-2 hover:bg-[#700202] transition">+ Add Competition</a>
    </div>

    <div class="border border-[#d9d9d9] bg-[#f3f3ff] my-4">
        <table class="w-full text-left text-sm">
            <thead>
                <tr class=" text-[#16213A] bg-[#dadaff]">

                    <th class="w-14 px-5 py-3.5 font-bold">No.</th>

                    <th class="px-5 py-3.5 font-bold">Event</th>

                    <th class="px-5 py-3.5 font-bold">Field</th>

                    <th class="px-5 py-3.5 font-bold">Participant</th>

                    <th class="px-5 py-3.5 font-bold">Advisor</th>

                    <th class="px-5 py-3.5 font-bold">Date</th>
                    
                    <th class="px-5 py-3.5 font-bold">Status</th>

                    <th class="px-5 py-3.5 text-center font-bold">Action</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($competitions as $competition)
                    <tr class="border-b border-[#EFEDE6] hover:bg-[#FAF9F5] text-[#333333]">

                        <td class="px-5 py-4 text-center">
                            {{ $loop->iteration }}
                        </td>

                        <td class="px-5 py-4 font-semibold">
                            {{ $competition['event'] }}
                        </td>

                        <td class="px-5 py-4">
                            {{ $competition['field'] }}
                        </td>

                        <td class="px-5 py-4">
                            {{ $competition['participant'] }}
                        </td>

                        <td class="px-5 py-4">
                            {{ $competition['advisor'] }}
                        </td>

                        <td class="px-5 py-4">
                            {{ $competition['date'] }}
                        </td>

                        <!-- Status Badge -->
                        <td class="py-4 px-4 text-center whitespace-nowrap">
                            @if($competition['status'] === 'Finished')
                                <span class="w-20 inline-block py-1 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-700 text-center">
                                    Finished
                                </span>
                            @elseif($competition['status'] === 'Ongoing')
                                <span class="w-20 inline-block py-1 text-xs font-semibold rounded-full bg-amber-100 text-amber-700 text-center">
                                    Ongoing
                                </span>
                            @else
                                <span class="w-20 inline-block py-1 text-xs font-semibold rounded-full bg-red-100 text-red-600 text-center">
                                    Upcoming
                                </span>
                            @endif
                        </td>

                        <!-- Action Buttons -->
                        <td class="py-4 px-4 text-center whitespace-nowrap">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="w-9 h-9 inline-flex items-center justify-center text-indigo-600 hover:text-indigo-800 hover:bg-indigo-100 rounded-full transition" title="View">
                                    <span class="material-symbols-outlined">visibility</span>
                                </a>

                                <a href="#" class="w-9 h-9 inline-flex items-center justify-center text-emerald-600 hover:text-emerald-800 hover:bg-emerald-100 rounded-full transition" title="Edit">
                                    <span class="material-symbols-outlined">edit_square</span>
                                </a>

                                <button type="button" class="w-9 h-9 inline-flex items-center justify-center text-rose-600 hover:text-rose-800 hover:bg-rose-100 rounded-full transition" title="Delete">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection