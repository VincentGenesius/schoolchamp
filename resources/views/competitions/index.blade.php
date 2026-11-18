@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1 class="text-[#990000] text-xl font-bold mb-2">Competitions ({{ $competitions->count() }})</h1>

    <div class="flex justify-between items-center gap-2">
        <form action="" method="GET" class="flex items-center gap-2 grow">
            <!-- Input Search -->
            <div class="relative grow">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search competition..." 
                    class="w-full pl-4 pr-4 py-2 border border-[#AAAAAA] text-sm focus:outline-none focus:ring-2 focus:ring-gray-200 bg-white">
            </div>

            <!-- Dropdown Filter Status -->
            <div class="relative flex items-center">
                <select name="status" onchange="this.form.submit()" class="border border-[#AAAAAA] pl-4 pr-10 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-gray-200 text-[#333333] appearance-none cursor-pointer">
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

        <a href="{{ route('competitions.create') }}" class="bg-[#990000] text-white font-medium px-4 py-2 hover:bg-[#700202] transition">+ Add Competition</a>
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

                        <td class="w-30 px-5 py-4">
                            {{ $competition['date'] }}
                        </td>

                        <!-- Status Badge -->
                        <td class="py-4 px-4 text-center whitespace-nowrap">
                            @if($competition['status'] === \App\Enums\StatusCompetitionEnum::FINISHED->value || $competition['status'] === \App\Enums\StatusCompetitionEnum::FINISHED)
                                <span class="w-20 inline-block py-1 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-700 text-center">
                                    Finished
                                </span>
                            @elseif($competition['status'] === \App\Enums\StatusCompetitionEnum::ONGOING->value || $competition['status'] === \App\Enums\StatusCompetitionEnum::ONGOING)
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
                                <a href="{{ route('competitions.show', ['competition' => $competition->id]) }}" class="w-9 h-9 inline-flex items-center justify-center text-indigo-600 hover:text-indigo-800 hover:bg-indigo-100 rounded-full transition" title="View">
                                    <span class="material-symbols-outlined">visibility</span>
                                </a>

                                <a href="{{ route('competitions.edit', ['competition' => $competition->id]) }}" class="w-9 h-9 inline-flex items-center justify-center text-emerald-600 hover:text-emerald-800 hover:bg-emerald-100 rounded-full transition" title="Edit">
                                    <span class="material-symbols-outlined">edit_square</span>
                                </a>

                                <form action="{{ route('competitions.destroy', ['competition' => $competition->id]) }}" method="POST" onsubmit="return confirm('Delete this competition from table?')">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button type="submit" class="w-9 h-9 inline-flex items-center justify-center text-rose-600 hover:text-rose-800 hover:bg-rose-100 rounded-full transition" title="Delete">
                                        <span class="material-symbols-outlined">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">{{ $competitions->links() }}</div>
@endsection