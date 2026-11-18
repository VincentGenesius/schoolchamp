@extends('layouts.app', ['hideLayout' => true])

@section('title', $title)

@section('content')
    <div class="mx-auto w-full max-w-2xl px-12 mt-30">
        <div class="flex flex-col mb-4">
            <div class="flex justify-center py-1">
                <p class="text-center text-xs text-[#990000] bg-red-300 font-semibold px-4 py-1">ACCOUNT ACCESS</p>
            </div>
            <h1 class="text-2xl font-bold text-[#333333] text-center">Sign In to Your Account</h1>
            <p class="text-sm text-[#333333] text-center">Login to your account to continue your journey</p>
        </div>

        <div class="w-full bg-white border border-[#d9d9d9] px-12 py-10">
            <form action="{{ route('login-post') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="block font-semibold text-sm text-[#333333] tracking-wider uppercase mb-1">
                        EMAIL
                    </label>
                    <input type="text" name="email" id="email" placeholder="name@gmail.com"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>

                <div class="mb-5">
                    <label class="block font-semibold text-sm text-[#333333] tracking-wider uppercase mb-1">
                        PASSWORD
                    </label>
                    <input type="password" name="password" id="password" placeholder="Enter your password"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>

                <button type="submit"
                    class="w-full bg-[#990000] hover:bg-[#700202] text-white font-semibold text-lg py-2.5 px-4 transition duration-150 ease-in-out shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#990000]">
                    Sign In
                </button>
            </form>
        </div>
    </div>
@endsection