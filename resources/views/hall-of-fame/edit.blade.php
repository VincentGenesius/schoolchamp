@extends('layouts.app')

@section('title', 'Edit Achievement - SchoolChamp')

@section('content')
    <div class="bg-white rounded-xl p-8 border border-gray-200/80 shadow-sm max-w-5xl mx-auto">
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900">Edit Achievement</h1>
            <p class="text-gray-500 text-sm mt-1">Update event details, participant information, or award results.</p>
        </div>

        <form action="#" method="POST" class="space-y-8">
            @csrf
            @method('PUT')

            <div class="space-y-5">
                <div class="flex items-center gap-2">
                    <div class="w-1 h-6 bg-[#800000] rounded-full"></div>
                    <h2 class="text-lg font-bold text-gray-900">Event Details</h2>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#800000] tracking-wider uppercase mb-2">
                        COMPETITION NAME
                    </label>
                    <input 
                        type="text" 
                        name="competition_name" 
                        value="WorldSkills Shanghai 2026"
                        placeholder="e.g WorldSkills Shanghai 2026"
                        class="w-full px-4 py-3 bg-[#F0F2FF] border border-transparent rounded-lg text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:border-[#800000] focus:bg-white transition-colors"
                    >
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#800000] tracking-wider uppercase mb-2">
                        FIELD
                    </label>
                    <input 
                        type="text" 
                        name="field" 
                        value="IT Software Solutions for Bussiness"
                        placeholder="e.g IT Software Solutions for Business"
                        class="w-full px-4 py-3 bg-[#F0F2FF] border border-transparent rounded-lg text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:border-[#800000] focus:bg-white transition-colors"
                    >
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Date -->
                    <div>
                        <label class="block text-xs font-semibold text-[#800000] tracking-wider uppercase mb-2">
                            DATE
                        </label>
                        <div class="relative">
                            <input 
                                type="text" 
                                name="date" 
                                value="13/05/2026"
                                placeholder="DD/MM/YY"
                                onfocus="(this.type='date')"
                                onblur="(this.type='text')"
                                class="w-full pl-4 pr-10 py-3 bg-[#F0F2FF] border border-transparent rounded-lg text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:border-[#800000] focus:bg-white transition-colors"
                            >
                            <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 text-xl pointer-events-none">
                                calendar_today
                            </span>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-[#800000] tracking-wider uppercase mb-2">
                            COMPETITION RESULT
                        </label>
                        <input 
                            type="text" 
                            name="result" 
                            value="1st Winner - Gold Medal"
                            placeholder="e.g 1st Winner - Gold Medal"
                            class="w-full px-4 py-3 bg-[#F0F2FF] border border-transparent rounded-lg text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:border-[#800000] focus:bg-white transition-colors"
                        >
                    </div>
                </div>
            </div>

            <div class="space-y-5 pt-2">
                <div class="flex items-center gap-2">
                    <div class="w-1 h-6 bg-[#800000] rounded-full"></div>
                    <h2 class="text-lg font-bold text-gray-900">Participant</h2>
                </div>

                <!-- Participant Name -->
                <div>
                    <label class="block text-xs font-semibold text-[#800000] tracking-wider uppercase mb-2">
                        PARTICIPANT NAME
                    </label>
                    <input 
                        type="text" 
                        name="participant_name" 
                        value="Klain Xee"
                        placeholder="e.g Klain Xee"
                        class="w-full px-4 py-3 bg-[#F0F2FF] border border-transparent rounded-lg text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:border-[#800000] focus:bg-white transition-colors"
                    >
                </div>
            </div>

            <div class="flex items-center justify-end gap-4 pt-6">
                <a 
                    href="/hall-of-fame" 
                    class="px-6 py-2.5 text-sm font-semibold text-gray-700 hover:text-gray-900 hover:bg-gray-100 rounded-lg transition-colors"
                >
                    Cancel
                </a>
                <button 
                    type="submit" 
                    class="px-6 py-2.5 text-sm font-semibold text-white bg-[#800000] hover:bg-[#600000] rounded-lg transition-colors shadow-sm"
                >
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection