<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

        <!-- AOS Animation -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="">
            @include('partials.header')

            <div class="bg-[#F1F4FC] min-h-screen">
                @yield('content')
            </div>

            @include('partials.footer')

        </div>
    </body>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('js/vendors/sweetalert.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if (session('success'))
            Swal.fire({
                html: `{{ session('success') }}`,
                icon: 'success',
                confirmButtonText: 'OK',
            });
            @endif

            @if (session('error'))
            Swal.fire({
                html: `{{ session('error') }}`,
                icon: 'error',
                confirmButtonText: 'OK',
            });
            @endif
        });
    </script>

    @stack('scripts')
    @stack('styles')


    <script>
        function animateOnScroll() {
            const animatedElements = document.querySelectorAll('.animate__animated');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__animated', entry.target.dataset.animation);
                    }
                });
            }, { threshold: 0.1 });

            animatedElements.forEach(el => observer.observe(el));
        }

        document.addEventListener('DOMContentLoaded', animateOnScroll);
    </script>

</html>
