@extends('layouts.app')

@section('title', 'Edit Achievement - SchoolChamp')

@section('content')
    <div class="bg-white border border-[#d9d9d9] p-6 text-[#333333]">
        <div class="mb-6">
            <h1 class="text-xl font-bold text-[#16213A]">Edit Achievement</h1>
            <p class="text-sm text-gray-500">Update event details, participant information, or award results.</p>
        </div>

        <form action="{{ route('achievement.update', $achievement['id'] ?? 1) }}" method="POST">
            @csrf
            @method('PUT')

            <h1 class="border-l-3 border-[#990000] pl-2 mb-4 text-base font-bold text-[#16213A]">Event Details</h1>

            <div class="flex flex-col gap-4 mb-6">
                <div>
                    <label class="block text-xs font-semibold text-[#990000] tracking-wider uppercase mb-2">
                        COMPETITION NAME
                    </label>
                    <input type="text" name="event" 
                        value="{{ old('event', $achievement['event'] ?? 'WorldSkills Shanghai 2026') }}"
                        placeholder="e.g National Science Olympiad 2024"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#990000] tracking-wider uppercase mb-2">
                        FIELD
                    </label>
                    <input type="text" name="field" 
                        value="{{ old('field', $achievement['field'] ?? 'IT Software Solutions for Business') }}"
                        placeholder="e.g IT Software Solutions for Bussiness"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-semibold text-[#990000] tracking-wider uppercase mb-2">
                            DATE
                        </label>
                        <div class="relative flex items-center">
                            <input type="date" name="date" 
                                value="{{ old('date', $achievement['date'] ?? '2026-05-13') }}"
                                class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                                required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-[#990000] tracking-wider uppercase mb-2">
                            COMPETITION RESULT
                        </label>
                        <input type="text" name="achievement" 
                            value="{{ old('achievement', $achievement['achievement'] ?? '1st Winner - Gold Medal') }}"
                            placeholder="e.g 1st Winner - Gold Medal"
                            class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                            required>
                    </div>
                </div>
            </div>

            <h1 class="border-l-3 border-[#990000] pl-2 mb-4 text-base font-bold text-[#16213A]">Participant</h1>

            <div class="flex flex-col gap-4 mb-8">
                <div>
                    <label class="block text-xs font-semibold text-[#990000] tracking-wider uppercase mb-2">
                        PARTICIPANT NAME
                    </label>
                    <input type="text" name="participant" 
                        value="{{ old('participant', $achievement['participant'] ?? 'Klain Xee') }}"
                        placeholder="e.g Klain Xee"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>
            </div>

            <div class="flex items-center justify-end gap-4 pt-4">
                <a href="{{ route('achievement.index') }}"
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