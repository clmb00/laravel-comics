<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ Vite::asset('/resources/img/favicon.ico') }}" type="image/x-icon">
    @vite('resources/js/app.js')
    <title>Laravel DC | @yield('title')</title>
</head>
<body>

    @include('partials.header')
    @yield('content')
    @yield('section_links')
    @include('partials.footer')

</body>
</html>
