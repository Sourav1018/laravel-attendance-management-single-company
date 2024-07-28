<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('page_title') </title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <div class="flex h-full">
            @livewire('layouts.sidebar')
        <main class="flex-1 p-4">
            @yield('content')
        </main>
    </div>
@livewireScripts
</body>
</html>
