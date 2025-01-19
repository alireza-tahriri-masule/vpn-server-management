<!doctype html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('static/app.css') }}"> {{-- Tailwind CSS --}}
    @livewireStyles {{-- Livewire Styles --}}
</head>

<body class="bg-[#0c1019] text-white font-eng">

    <div id="app" class="border border-[#1f2432] cont p-0 pb-4 my-10 rounded-lg space-y-8 container" x-data="{sf: true}">
        @yield('content')
    </div>

    {{-- Scripts --}}
    @livewireScripts {{-- Livewire Scripts --}}
</body>

</html>
