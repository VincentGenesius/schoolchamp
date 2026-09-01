@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1 class="text-[#990000] text-xl font-semibold mb-2">Competitions (5)</h1>

    <div class="flex items-center bg-blue-600">
        <form action="#" method="GET" class="relative">
            <input type="search" name="search" placeholder="Search competition..." class="w-full pl-4 pr-4 py-2 border text-sm focus:outline-none focus:ring-2 focus:ring-red-800">
        </form>

        <button class="flex">
            <span class="material-symbols-outlined">filter_alt</span>
            <h1>Filter</h1>
        </button>

        <a href="#" class="">+ Add Competition</a>
    </div>
@endsection