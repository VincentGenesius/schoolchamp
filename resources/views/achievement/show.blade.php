@extends('layouts.app')

@section('title', 'Details Achievement - SchoolChamp')

@section('content')
    <div class="bg-white border border-[#d9d9d9] p-6 text-[#333333]">
        <div class="flex items-center gap-3 mb-6">
            <a href="{{ route('achievements.index') }}" 
                class="w-8 h-8 bg-[#990000] text-white inline-flex items-center justify-center rounded hover:bg-[#700202] transition">
                <span class="material-symbols-outlined text-sm">arrow_back_ios_new</span>
            </a>
            <div>
                <h1 class="text-xl font-bold text-[#16213A]">Details Achievement</h1>
                <p class="text-sm text-gray-500">View complete event information, participant details, and awards earned.</p>
            </div>
        </div>

        <div class="flex flex-col gap-4 mb-8">
            <!-- Competition Name -->
            <div class="grid grid-cols-1 md:grid-cols-4 items-center">
                <label class="text-xs font-semibold text-gray-400 tracking-wider uppercase mb-1 md:mb-0">
                    COMPETITION NAME
                </label>
                <div class="md:col-span-3 bg-[#F3F3FF] border border-[#990000] px-4 py-3 text-sm text-[#990000] font-semibold">
                    {{ $achievement['event'] ?? 'WorldSkills Shanghai 2026' }}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 items-center">
                <label class="text-xs font-semibold text-gray-400 tracking-wider uppercase mb-1 md:mb-0">
                    FIELD
                </label>
                <div class="md:col-span-3 bg-[#F3F3FF] border border-[#990000] px-4 py-3 text-sm text-[#990000] font-semibold">
                    {{ $achievement['field'] ?? 'IT Software Solutions for Business' }}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 items-center">
                <label class="text-xs font-semibold text-gray-400 tracking-wider uppercase mb-1 md:mb-0">
                    DATE
                </label>
                <div class="md:col-span-3 bg-[#F3F3FF] border border-[#990000] px-4 py-3 text-sm text-[#990000] font-semibold">
                    {{ $achievement['date'] ?? '13/05/2026' }}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 items-center">
                <label class="text-xs font-semibold text-gray-400 tracking-wider uppercase mb-1 md:mb-0">
                    COMPETITION RESULT
                </label>
                <div class="md:col-span-3 bg-[#F3F3FF] border border-[#990000] px-4 py-3 text-sm text-[#990000] font-semibold">
                    {{ $achievement['achievement'] ?? '1st Winner - Gold Medal' }}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 items-center">
                <label class="text-xs font-semibold text-gray-400 tracking-wider uppercase mb-1 md:mb-0">
                    PARTICIPANT NAME
                </label>
                <div class="md:col-span-3 bg-[#F3F3FF] border border-[#990000] px-4 py-3 text-sm text-[#990000] font-semibold">
                    {{ $achievement['participant'] ?? 'Kaelen Voss' }}
                </div>
            </div>
        </div>

        <div class="flex items-center justify-end gap-4 pt-4 border-t border-gray-100">
            <form action="{{ route('achievements.destroy', $achievement['id'] ?? 1) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this achievement?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-6 py-2.5 text-sm font-semibold text-[#990000] hover:bg-rose-50 transition">
                    Delete
                </button>
            </form>

            <a href="{{ route('achievements.edit', $achievement['id'] ?? 1) }}" 
                class="px-8 py-2.5 bg-[#990000] hover:bg-[#700202] text-white text-sm font-semibold shadow transition">
                Edit
            </a>
        </div>
    </div>
@endsection