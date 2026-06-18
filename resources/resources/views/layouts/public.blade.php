<title>Bank Sampah</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- Navbar --}}
@include('layouts.public-navbar')

{{-- Content --}}
<main>

    @yield('content')

</main>

{{-- Footer --}}
@include('layouts.public-footer')
