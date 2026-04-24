<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

    {{-- Navbar --}}
    @include('components.nav')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('components.footer')

</body>
</html>