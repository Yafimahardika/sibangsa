<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIBANGSA</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body{
            min-height: 100vh;
            min-height: -webkit-fill-avaiable;
        }

        main{
            display: flex;
            flex-wrap: nowrap;
            height: 100vh;
            height: -webkit-fill-available;
            max-height: 100vh;
            overflow-x: auto;
            overflow-y: hidden;
        }
    </style>
</head>

<body class="bg-gray-100">

    <div class="d-flex">
        {{-- Sidebar --}}
        @include('layouts.sidebar')

        <div class="flex-grow-1 d-flex flex-column">
            {{-- Navbar --}}
            <header>
                @include('layouts.navbar')
            </header>

            {{-- content --}}
            <main class="flex-grow-1 p-3">
                @yield('content')
            </main>
        </div>
    </div>

</body>
</html>