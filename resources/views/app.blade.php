<!doctype html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Tailwind CSS --}}
    <link rel="stylesheet" href="{{ asset('static/app.css') }}">
    {{-- Livewire Styles --}}
    @livewireStyles
</head>

<body class="bg-[#0c1019] text-white font-english">

    <div id="app" class="border border-[#1f2432] container p-0 my-10 rounded-lg">
        <livewire:header />
    </div>

    {{-- Livewire Scripts --}}
    @livewireScripts
</body>

</html>
