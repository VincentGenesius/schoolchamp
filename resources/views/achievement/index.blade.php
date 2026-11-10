@extends('layouts.app')

@section('title', $title)

@section('content')
    
    <h1 class="text-[#990000] text-xl font-bold mb-2">Achievement (2)</h1>

    <div class="flex justify-between items-center">
        <form action="#" method="GET" class="relative">
            <input type="search" name="search" placeholder="Search achievement..." class="w-250 pl-4 pr-4 py-2 border border-[#AAAAAA] text-sm focus:outline-none focus:ring-2 focus:ring-gray-200">
        </form>

        <button class="flex gap-1 bg-[#DADAFF] text-[#333333] px-4 py-2 hover:bg-[#b8b8d1] transition">
            <span class="material-symbols-outlined">filter_alt</span>
            <h1 class="font-medium">Filter</h1>
        </button>
    </div>
    
    <div class="my-4 grid grid-cols-4 gap-4">

        <div class="border border-gray-300">
            <img src="" alt="achivement image">

            <div class="m-4">
                <h1>WorldSkills Shanghai 2026</h1>
                <p class="pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, omnis?</p>

                <div class="flex items-center justify-between pt-2 border-t border-gray-300">
                    <div class="flex flex-col">
                        <label for="" class="text-[12px]">PARTICIPANT</label>
                        <h1 class="text-lg font-semibold">Kaelen Voss</h1>
                    </div>

                    <h1 class="bg-[#990000] px-2 py-1 text-white text-sm">13/04/2026</h1>
                </div>
            </div>
        </div>
    </div>
@endsection