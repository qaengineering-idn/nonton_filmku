<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Cafe/ Nonton Order Queue' ) </title>
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    @fonts
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-amber-50 min-h-screen text-stone-800 font-sans">
    <div class="max-w-xl mx-auto px-4 py-10">
        @yield('content')
        {{-- Aimee --}}
    </div>
</body>
</html>