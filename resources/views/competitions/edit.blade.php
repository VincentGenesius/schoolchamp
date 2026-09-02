@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="bg-white border border-[#d9d9d9] p-5 text-[#333333]">
        <div class="mb-6 border-b border-gray-200 pb-2">
            <h1 class="text-xl font-bold">Edit Competition</h1>
            <p class="text-sm">Update event details, schedule, or registration status.</p>
        </div>

        <form action="" method="POST">
            @csrf
            @method('PUT')

            <h1 class="border-l-3 border-[#990000] px-2 mb-4 text-lg font-bold">Event Details</h1>

            <div class="flex flex-col gap-4 mb-8">
                <div>
                    <label class="block text-xs font-semibold text-[#990000] tracking-wider uppercase mb-2">
                        COMPETITION NAME
                    </label>
                    <input type="text" name="event" value="World Skills Shanghai 2026"
                        placeholder="e.g National Science Olympiad 2026"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#990000] tracking-wider uppercase mb-2">
                        FIELD
                    </label>
                    <input type="text" name="field" value="IT Software Solutions for Business"
                        placeholder="e.g IT Software Solutions for Business"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-semibold text-[#990000] tracking-wider uppercase mb-2">
                            START DATE
                        </label>
                        <div class="relative flex items-center">
                            <input type="date" name="date" value="{{ old('date', $competition['date'] ?? '') }}"
                                placeholder="DD/MM/YY"
                                class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                                required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-[#990000] tracking-wider uppercase mb-2">
                            STATUS
                        </label>

                        <div class="relative flex items-center">
                            <select name="status"
                                class="w-full bg-[#f4f5fd] border border-gray-200 pl-4 pr-10 py-3 text-sm text-gray-700 focus:outline-none focus:border-[#990000] focus:bg-white transition appearance-none cursor-pointer"
                                required value="Finished">
                                <option value="" disabled>Select Status</option>
                                <option value="Upcoming" {{ old('status', $competition['status'] ?? '') === 'Upcoming' ? 'selected' : '' }}>Upcoming</option>
                                <option value="Ongoing" {{ old('status', $competition['status'] ?? '') === 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                                <option value="Finished" {{ old('status', $competition['status'] ?? '') === 'Finished' ? 'selected' : '' }}>Finished</option>
                            </select>

                            <span
                                class="material-symbols-outlined absolute right-3 text-gray-400 pointer-events-none text-xl">
                                keyboard_arrow_down
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="border-l-3 border-[#990000] px-2 mb-4 text-lg font-bold">Participant & Advisory</h1>

            <div class="flex flex-col gap-4 mb-8">
                <div>
                    <label class="block text-xs font-semibold text-[#990000] tracking-wider uppercase mb-2">
                        PARTICIPANT NAME
                    </label>
                    <input type="text" name="participant"
                        value="Kaelen Voss" placeholder="e.g Klain Xee"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#990000] tracking-wider uppercase mb-2">
                        ADVISORY NAME
                    </label>
                    <input type="text" name="advisor" value="Elena Rostova"
                        placeholder="e.g Zavier Ricks"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>
            </div>

            <div class="flex items-center justify-end gap-4 pt-4 border-t border-gray-200">
                <a href="{{ route('competitions.index') }}"
                    class="px-6 py-2.5 text-sm font-semibold text-gray-700 hover:bg-[#F3F3FF] transition">
                    Cancel
                </a>

                <button type="submit"
                    class="px-7 py-2.5 bg-[#990000] hover:bg-[#700202] text-white text-sm font-semibold shadow transition">
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection