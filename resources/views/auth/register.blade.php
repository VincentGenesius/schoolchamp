@extends('layouts.app', ['hideLayout' => true])

@section('title', $title)

@section('content')
    <div class="bg-white flex flex-1 mx-auto h-145 mt-18 w-full max-w-6xl px-12 py-10 border border-[#d9d9d9] gap-6">
        <div class="bg-[#990000] w-230 p-5 text-white">
            <h2 class="text-sm">NEW USER REGISTRATION</h2>
            <h1 class="text-3xl font-bold mb-1">Start Your Achievement Journey</h1>
            <p class="font-light">Join SchoolChamp to participate in academic competitions, showcase your talents, track your verified achievements, and build a standout digital portfolio for your future steps.
            </p>

            <div class="flex items-center justify-between text-xs border-t pt-2 mt-65">
                <span>&copy; 2026 SCHOOLCHAMP</span>
                <span class="uppercase tracking-widest">DEVELOPED BY GROUP 1 - XII TKJ 3</span>
            </div>
        </div>

        <div class="w-full">
            <div class="mb-5">
                <h1 class="text-2xl font-bold text-[#333333]">Create New Account</h1>
                <p class="text-sm">Select your registration role below</p>
            </div>

            <form action="" method="POST">
                <div class="mb-2">
                    <label class="block font-semibold text-sm text-[#333333] tracking-wider uppercase mb-1">
                        FULL NAME
                    </label>
                    <input type="text" name="advisor" placeholder="e.g Klain Xee"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>

                <div class="mb-2">
                    <label class="block font-semibold text-sm text-[#333333] tracking-wider uppercase mb-1">
                        EMAIL
                    </label>
                    <input type="text" name="advisor" placeholder="name @school.sch.id"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>

                <div class="mb-2">
                    <label class="block font-semibold text-sm text-[#333333] tracking-wider uppercase mb-1">
                        PASSWORD
                    </label>
                    <input type="text" name="advisor" placeholder="At least 8 characters"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>

                <div class="mb-4">
                    <label class="block font-semibold text-sm text-[#333333] tracking-wider uppercase mb-1">
                        CONFIRM PASSWORD
                    </label>
                    <input type="password" name="password" placeholder="Re-enter your password"
                        class="w-full bg-[#F3F3FF] border border-gray-200 px-4 py-3 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#990000] focus:bg-white transition"
                        required>
                </div>

                <div class="flex mb-4">
                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="w-4 h-4 text-[#990000] border-gray-300 rounded focus:ring-[#990000]">
                        <label for="remember_me" class="ml-2 text-xs font-medium text-gray-600">
                            I agree to SchoolChamp <b>Terms of Service & Privacy Policy</b>
                        </label>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-[#990000] hover:bg-[#700202] text-white font-semibold text-lg py-2.5 px-4 transition duration-150 ease-in-out shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#990000]">
                    Register as Student
                </button>

                <p class="flex gap-1 justify-center mt-3 text-sm">Already registered? <a href="#"
                        class="font-semibold hover:underline">Sign In</a></p>
            </form>
        </div>
    </div>
@endsection