<header class="bg-[#990000] text-white">

    <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-3">
        <a href="{{ route('overviews.index') }}" class="flex items-center gap-3">
            <img src="/images/logo-schoolchamp.png" alt="Logo SchoolChamp" class="w-80 h-12">
        </a>

        <nav class="hidden gap-6 text-sm md:flex">
            <a href="{{ route('overviews.index') }}"
                class="text-white/55 hover:text-white transition-colors">Overview</a>
            <a href="{{ route('competitions.index') }}"
                class="text-white/55 hover:text-white transition-colors">Competitions</a>
            <a href="{{ route('schedules.index') }}"
                class="text-white/55 hover:text-white transition-colors">Schedule</a>
            <a href="{{ route('achievements.index') }}"
                class="text-white/55 hover:text-white transition-colors">Achievement</a>
        </nav>

        <div class="flex gap-2 items-center">
            <div class="flex flex-col items-end -space-y-1">
                <h1 class="font-semibold">{{ auth()->user()?->name }}</h1>
                <h2 class="text-sm uppercase">Admin</h2>
            </div>

            <img src="/images/default-profile.jpg" alt="User Profile Image" class="w-12 h-12 rounded-full">

            <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Are you sure you want to logout?')">
                @csrf
                <button type="submit" class="bg-[#7e0000] hover:bg-[#550101] text-white text-sm font-semibold pl-2 pr-1.5 pt-2 pb-1   transition rounded-sm">
                    <span class="material-symbols-outlined text-2xl">logout</span>
                </button>
            </form>
        </div>
    </div>

</header>