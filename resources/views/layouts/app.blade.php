<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'SGS Kalibrasi') }}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Home Mitra lab -->
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- ================= NAVBAR ================= -->
    <nav class="fixed top-0 left-0 w-full bg-white shadow-md z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <a href="/" class="flex items-center gap-3">
                <img src="{{ asset('images/Logo/LOGO-SGS.png') }}" class="h-12 w-auto">
            </a>

            <!-- Menu -->
            <ul class="hidden md:flex items-center space-x-8 text-gray-700">

                <li>
                    <a href="{{ url('tentang-kami') }}" class="hover:text-[#004274]">
                        Tentang Kami
                    </a>
                </li>

                <!-- Dropdown Layanan -->
                <li class="relative group py-2">

                    <a href="#" class="hover:text-[#004274] flex items-center gap-1 font-medium">
                        Semua Layanan
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>

                    <!-- DROPDOWN -->
                    <div class="absolute left-1/2 -translate-x-1/2 top-full pt-2 w-64 
                            opacity-0 invisible group-hover:opacity-100 group-hover:visible 
                            transition-all duration-200 ease-out">

                        <div class="bg-white shadow-lg rounded-xl py-4">

                            <ul class="text-gray-700">

                                <li>
                                    <a href="{{ route('layanan.kalibrasi') }}"
                                        class="block px-6 py-2 hover:bg-gray-100">
                                        Jasa Kalibrasi
                                    </a>
                                </li>

                                <li>
                                    <a href="consultant"
                                        class="block px-6 py-2 hover:bg-gray-100">
                                        Jasa Consultant
                                    </a>
                                </li>

                                <li>
                                    <a href="#"
                                        class="block px-6 py-2 hover:bg-gray-100">
                                        Training
                                    </a>
                                </li>

                                <li>
                                    <a href="#"
                                        class="block px-6 py-2 hover:bg-gray-100">
                                        Product & Service
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </div>
                </li>

                <li><a href="{{ url('mitra-lab') }}" class="hover:text-[#004274]">Mitra Lab</a></li>
                <li><a href="{{ url('reseller') }}" class="hover:text-[#004274]">Reseller</a></li>
                <li><a href="{{ url('event') }}" class="hover:text-[#004274]">Event</a></li>
                <li><a href="#" class="hover:text-[#004274]">Hubungi Kami</a></li>

            </ul>


            <!-- Button -->
            <a href="#" class="bg-blue-600 text-white px-5 py-2 rounded-lg">
                Dashboard
            </a>

        </div>
    </nav>

    <!-- ================= CONTENT ================= -->
    <main class="w-full">

        {{ $slot ?? '' }}

        @yield('content')

    </main>


    <!-- ================= FOOTER ================= -->
    <x-footer />
</body>

</html>