<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIBANGSA</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">

        {{-- Sidebar --}}
        @include('layouts.sidebar')

        <div class="flex-1">

            {{-- Navbar --}}
            @include('layouts.navbar')

            {{-- Content --}}
            <main class="p-6">
                @yield('content')
            </main>

        </div>

    </div>

</body>
</html>