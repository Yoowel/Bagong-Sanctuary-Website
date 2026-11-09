<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="@yield('description', 'Bagong Sanctuary menyediakan berbagai patung fiber rohani Katolik.')">

    <meta name="theme-color" content="#F8F6F1">

    <title>@yield('title', 'Bagong Sanctuary')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="@yield('body-class')">

    @yield('skip-link')

    <x-navbar />

    <main id="@yield('main-id', 'main-content')">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>