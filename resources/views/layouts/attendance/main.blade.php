<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title', 'Attendance Page')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    @include('component.header')
    @include('component.sidebar')
    <div class="flex-grow ml-64 p-6">
        @yield('timer')
    </div>
</body>

</html>
