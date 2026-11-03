@extends('layouts.app')

@section('title', $title)

@section('content')
    
    <h1 class="text-[#990000] text-xl font-bold mb-2">Achievement (2)</h1>

    <div class="flex justify-between items-center">
        <form action="#" method="GET" class="relative">
            <input type="search" name="search" placeholder="Search achievement..." class="w-205 pl-4 pr-4 py-2 border border-[#AAAAAA] text-sm focus:outline-none focus:ring-2 focus:ring-gray-200">
        </form>

        <button class="flex gap-1 bg-[#DADAFF] text-[#333333] px-4 py-2 hover:bg-[#b8b8d1] transition">
            <span class="material-symbols-outlined">filter_alt</span>
            <h1 class="font-medium">Filter</h1>
        </button>

        <a href="/achievements/create" class="bg-[#990000] text-white font-medium px-4 py-2 hover:bg-[#700202] transition">+ Add Achievement</a>
    </div>

    
    <div class="my-4">
        
    </div>
@endsection