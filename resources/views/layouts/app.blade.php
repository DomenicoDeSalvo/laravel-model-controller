<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Home')</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
</body>
</html>