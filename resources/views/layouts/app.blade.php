<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>

<body class="flex min-h-screen flex-col bg-[#F7F6F2]">
    {{-- Header Start--}}
    @include('layouts.partials.header')
    {{-- Header End --}}

    {{-- Content Start --}}
    <main class="mx-auto w-full max-w-6xl flex-1 px-6 py-10">
        @yield('content')
    </main>
    {{-- Content End --}}

    {{-- Footer Start --}}
    @include('layouts.partials.footer')
    {{-- Footer End --}}
</body>
</html>