<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | KawaiiTopUp</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-[#F8FAFC] flex min-h-screen">

    @include('admin.layouts.partials.sidebar')

    <main class="flex-1 p-10 overflow-y-auto">
        @include('admin.layouts.partials.header')

        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>