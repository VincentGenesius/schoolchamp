@extends('layouts.app')

@section('title', 'Hall of Fame - SchoolChamp')

@section('content')
    <h1 class="text-3xl font-bold text-[#800000] mb-6">Hall of Fame (2)</h1>

    <div class="flex flex-col md:flex-row items-center justify-between gap-4 mb-6">
        <div class="flex items-center gap-3 w-full md:w-auto flex-1">
            <div class="relative w-full max-w-2xl">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xl">
                    search
                </span>
                <input 
                    type="text" 
                    placeholder="Search achivement..." 
                    class="w-full pl-10 pr-4 py-2.5 bg-white border border-gray-300 rounded-lg text-sm text-gray-700 focus:outline-none focus:border-[#800000]"
                >
            </div>
            <button class="flex items-center gap-2 px-4 py-2.5 bg-[#DCD8F9] hover:bg-opacity-80 text-[#4338CA] text-sm font-medium rounded-lg transition-colors">
                <span class="material-symbols-outlined text-lg">filter_alt</span>
                Filter
            </button>
        </div>

        <a href="/hall-of-fame/create" class="w-full md:w-auto flex items-center justify-center gap-2 px-5 py-2.5 bg-[#800000] hover:bg-[#600000] text-white text-sm font-semibold rounded-lg transition-colors shrink-0">
            <span class="material-symbols-outlined text-lg">add</span>
            Add Achievement
        </a>
    </div>

    <div class="bg-[#E2E5FF] rounded-xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="text-gray-700 font-semibold border-b border-gray-200/50">
                        <th class="py-4 px-6 w-16">No</th>
                        <th class="py-4 px-6">Event</th>
                        <th class="py-4 px-6">Field</th>
                        <th class="py-4 px-6">Participant</th>
                        <th class="py-4 px-6">Date</th>
                        <th class="py-4 px-6">Achievement</th>
                        <th class="py-4 px-6 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200/40 text-gray-800">
                    <!-- Row 1 -->
                    <tr class="hover:bg-white/40 transition-colors">
                        <td class="py-4 px-6 font-medium">1</td>
                        <td class="py-4 px-6 font-bold text-gray-900">WorldSkills Shanghai 2026</td>
                        <td class="py-4 px-6 text-gray-600 max-w-xs">IT Software Solutions for Business</td>
                        <td class="py-4 px-6 text-gray-700">Kaelen Voss</td>
                        <td class="py-4 px-6 text-gray-600">13/05/2026</td>
                        <td class="py-4 px-6 font-bold text-gray-900">1st Winner - Gold Medal</td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-3">
                                <button class="text-blue-600 hover:text-blue-800 transition-colors">
                                    <span class="material-symbols-outlined text-xl">visibility</span>
                                </button>
                                <button class="text-emerald-600 hover:text-emerald-800 transition-colors">
                                    <span class="material-symbols-outlined text-xl">edit_square</span>
                                </button>
                                <button class="text-red-500 hover:text-red-700 transition-colors">
                                    <span class="material-symbols-outlined text-xl">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-white/40 transition-colors">
                        <td class="py-4 px-6 font-medium">2</td>
                        <td class="py-4 px-6 font-bold text-gray-900">International Physics Olympiad (IPhO) 2026</td>
                        <td class="py-4 px-6 text-gray-600 max-w-xs">Theoretical & Experimental Physics</td>
                        <td class="py-4 px-6 text-gray-700">Julian Vance</td>
                        <td class="py-4 px-6 text-gray-600">18/05/2026</td>
                        <td class="py-4 px-6 font-bold text-gray-900">2nd Winner - Silver Medal</td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-3">
                                <button class="text-blue-600 hover:text-blue-800 transition-colors">
                                    <span class="material-symbols-outlined text-xl">visibility</span>
                                </button>
                                <a href="/hall-of-fame/edit" class="text-emerald-600 hover:text-emerald-800 transition-colors">
                                    <span class="material-symbols-outlined text-xl">edit_square</span>
                                </a>
                                <button class="text-red-500 hover:text-red-700 transition-colors">
                                    <span class="material-symbols-outlined text-xl">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection