@extends('layouts.app', ['hideLayout' => true])

@section('title', $title)

@section('content')
    <div class="bg-white flex flex-1 mx-auto h-145 mt-18 w-full max-w-6xl px-12 py-10 border border-[#d9d9d9] gap-6">
        <div class="bg-[#990000] w-230 p-5 text-white">
            <h2 class="text-sm">ACCOUNT ACCESS</h2>
            <h1 class="text-3xl font-bold mb-1">Welcome Back, Champion!</h1>
            <p class="font-light">Log in to check your latest competition status, update your portfolio, and keep tracking
                your achievements.
            </p>

            <div class="flex items-center justify-between text-xs border-t pt-2 mt-82">
                <span>&copy; 2026 SCHOOLCHAMP</span>
                <span class="uppercase tracking-widest">DEVELOPED BY GROUP 1 - XII TKJ 3</span>
            </div>
        </div>

        <div class="w-full">
            <div class="mt-6 mb-5">
                <h1 class="text-2xl font-bold text-[#333333]">Sign In to Your Account</h1>
                <p class="text-sm">Select your registration role below</p>
            </div>

            <form action="" method="POST">
                <div class="mb-3">
                    <label class="block font-semibold text-sm text-[#333333] tracking-wider uppercase mb-1">
                        STUDENT ID
                    </label>
                    <input type="text" name="advisor" placeholder="10 Digit ID"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>

                <div class="mb-3">
                    <label class="block font-semibold text-sm text-[#333333] tracking-wider uppercase mb-1">
                        EMAIL
                    </label>
                    <input type="text" name="advisor" placeholder="name @school.sch.id"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>

                <div class="mb-5">
                    <label class="block font-semibold text-sm text-[#333333] tracking-wider uppercase mb-1">
                        PASSWORD
                    </label>
                    <input type="password" name="password" placeholder="Enter your password"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>

                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="w-4 h-4 text-[#990000] border-gray-300 rounded focus:ring-[#990000]">
                        <label for="remember_me" class="ml-2 text-xs font-medium text-gray-600">
                            Remember me
                        </label>
                    </div>

                    <a href="#" class="text-xs font-semibold text-[#990000] hover:underline">
                        Forgot your password?
                    </a>
                </div>

                <button type="submit"
                    class="w-full bg-[#990000] hover:bg-[#700202] text-white font-semibold text-lg py-2.5 px-4 transition duration-150 ease-in-out shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#990000]">
                    Sign In as Student
                </button>

                <p class="flex gap-1 justify-center mt-3 text-sm">Don't have a SchoolChamp account? <a href="#"
                        class="font-semibold hover:underline">Register Now</a></p>
            </form>
        </div>
    </div>
@endsection