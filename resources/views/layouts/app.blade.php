<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body class="flex min-h-screen flex-col bg-[#F7F6F2]">
    {{-- Header Start--}}
    @unless(isset($hideLayout) && $hideLayout)
        @include('layouts.partials.header') 
    @endunless
    {{-- Header End --}}

    {{-- Content Start --}}
    <main class="{{ (isset($hideLayout) && $hideLayout) ? '' : 'mx-auto w-full max-w-6xl flex-1 px-6 py-10' }}">
        @yield('content')
    </main>
    {{-- Content End --}}

    {{-- Footer Start --}}
    @unless(isset($hideLayout) && $hideLayout)
        @include('layouts.partials.footer') 
    @endunless
    {{-- Footer End --}}
</body>
</html>