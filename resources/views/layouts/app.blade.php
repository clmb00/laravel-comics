<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>DC | @yield('title')</title>
</head>
<body>

    @include('partials.header')
    @yield('content')
    @include('partials.footer')

</body>
</html>
