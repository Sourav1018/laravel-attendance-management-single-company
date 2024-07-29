<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <div id="app" class="flex min-h-screen">
           <livewire:layout.sidebar>
        <div class="pl-17 lg:pl-4">
            {{ $slot }}
        </div>
    </div>
    @livewireScripts
</body>

</html>
