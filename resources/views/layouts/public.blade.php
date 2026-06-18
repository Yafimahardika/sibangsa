<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bank Sampah</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest"></script>

</head>

<div
    id="loader"
    class="fixed inset-0 bg-white z-[9999] flex items-center justify-center">

    <div class="text-center">

        <div class="w-20 h-20 border-4 border-green-500 border-t-transparent rounded-full animate-spin mx-auto"></div>

        <h2 class="mt-6 text-2xl font-bold text-green-700">

            Bank Sampah

        </h2>

    </div>

</div>


<body class="bg-white text-gray-800">

    {{-- Navbar --}}
    @include('layouts.public-navbar')

    {{-- Content --}}
    <main>

        @yield('content')

    </main>

    {{-- Footer --}}
    @include('layouts.public-footer')

    {{-- Activate Lucide --}}
    <script>
        lucide.createIcons();
    </script>

<script>

function animateCounter(id, target, duration = 2000) {

    let element = document.getElementById(id);

    let start = 0;

    let increment = target / (duration / 16);

    let counter = setInterval(() => {

        start += increment;

        if (start >= target) {

            start = target;

            clearInterval(counter);

        }

        element.innerText = Math.floor(start);

    }, 16);

}

window.addEventListener('load', () => {

    animateCounter('counter1', 120);

    animateCounter('counter2', 5);

    animateCounter('counter3', 12);

    animateCounter('counter4', 24);

});

</script>



<button
    id="scrollTopBtn"
    class="fixed bottom-6 right-6 z-50 bg-green-600 hover:bg-green-700 text-white text-4xl w-14 h-14 rounded-full shadow-2xl flex items-center justify-center opacity-0 invisible transition duration-300">
    ↑
</button>



<script>

window.addEventListener('load', function () {

    const loader = document.getElementById('loader');

    loader.classList.add('opacity-0');

    setTimeout(() => {

        loader.style.display = 'none';

    }, 500);

});

</script>


<script>

const scrollTopBtn = document.getElementById('scrollTopBtn');

window.addEventListener('scroll', () => {

    if (window.scrollY > 300) {

        scrollTopBtn.classList.remove('opacity-0', 'invisible');

    } else {

        scrollTopBtn.classList.add('opacity-0', 'invisible');

    }

});

scrollTopBtn.addEventListener('click', () => {

    window.scrollTo({

        top: 0,

        behavior: 'smooth'

    });

});

</script>


</body>

</html>
