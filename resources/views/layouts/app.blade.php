<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') -Mafilm</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @isset($username)
        <x-navbar :username="$username" />
    @endisset

    <main class="container">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
