@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="bg-white border border-[#d9d9d9] p-5 text-[#333333]">
        <div class="flex items-center pb-2 mb-6 gap-4 border-b border-gray-200"> 
            <a href="#" class="inline-flex items-center justify-center w-10 h-10 bg-[#990000] text-white hover:bg-[#700202] transition-colors"><span class="material-symbols-outlined pl-2">arrow_back_ios</span></a>
            
            <div>
                <h1 class="text-xl font-bold">Details Competition</h1>
                <p class="text-sm">View event information, schedule, and participation status.</p>
            </div>
        </div>

        <form action="" method="POST">
            @csrf

            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-4">
                    <h1 class="w-50 text-slate-400">COMPETITION NAME</h1>
                    <p class="bg-[#F3F3FF] p-3 w-full font-semibold text-[#990000] border border-[#990000]">WorldSkills Shanghai 2026</p>
                </div>

                <div class="flex items-center gap-4">
                    <h1 class="w-50 text-slate-400">FIELD</h1>
                    <p class="bg-[#F3F3FF] p-3 w-full font-semibold text-[#990000] border border-[#990000]">IT Software Solutions for Business</p>
                </div>

                <div class="flex items-center gap-4">
                    <h1 class="w-50 text-slate-400">DATE</h1>
                    <p class="bg-[#F3F3FF] p-3 w-full font-semibold text-[#990000] border border-[#990000]">13/05/2026</p>
                </div>

                <div class="flex items-center gap-4">
                    <h1 class="w-50 text-slate-400">STATUS</h1>
                    <p class="bg-[#F3F3FF] p-3 w-full font-semibold text-[#990000] border border-[#990000]">Finished</p>
                </div>

                <div class="flex items-center gap-4">
                    <h1 class="w-50 text-slate-400">PARTICIPANT NAME</h1>
                    <p class="bg-[#F3F3FF] p-3 w-full font-semibold text-[#990000] border border-[#990000]">Kaelen Voss</p>
                </div>

                <div class="flex items-center gap-4">
                    <h1 class="w-50 text-slate-400">ADVISORY NAME</h1>
                    <p class="bg-[#F3F3FF] p-3 w-full font-semibold text-[#990000] border border-[#990000]">Elena Rostova</p>
                </div>
            </div>

            <div class="flex items-center justify-end gap-4 pt-4 border-t border-gray-200">
                <button type="submit" class="px-6 py-2.5 text-sm font-semibold text-[#990000] hover:bg-[#F3F3FF] transition">
                    Delete
                </button>

                <a href="#" class="px-7 py-2.5 bg-[#990000] hover:bg-[#700202] text-white text-sm font-semibold shadow transition">
                    Edit
                </a>
            </div>
        </form>
    </div>
@endsection