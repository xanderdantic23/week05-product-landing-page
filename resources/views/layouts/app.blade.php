<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DHONDYS BARBERSHOP')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="body-bg">
    <x-navbar />
    
    <main>
        @yield('content')
    </main>

    <x-footer />
</body>
</html>