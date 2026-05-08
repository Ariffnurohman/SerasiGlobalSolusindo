<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'SGS Kalibrasi') }}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <!-- Swiper -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- AlpineJS -->
    <script defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        html,
        body {
            overflow-x: hidden;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

</head>

<body class="bg-gray-50 text-gray-800 overflow-x-hidden">

    <!-- ================= NAVBAR ================= -->
    <nav x-data="{ open:false, layanan:false }"
        class="fixed top-0 left-0 w-full bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100 z-50">

        <div class="max-w-7xl mx-auto px-4 md:px-6">

            <div class="flex items-center justify-between h-20">

                <!-- LOGO -->
                <a href="/" class="flex items-center">

                    <img src="{{ asset('images/Logo/LOGO-SGS.png') }}"
                        class="h-10 md:h-12 w-auto object-contain">

                </a>

                <!-- DESKTOP MENU -->
                <ul class="hidden md:flex items-center gap-8 text-gray-700">

                    <li>
                        <a href="{{ url('tentang-kami') }}"
                            class="hover:text-[#004274] transition">
                            Tentang Kami
                        </a>
                    </li>

                    <!-- DROPDOWN -->
                    <li class="relative group py-2">

                        <button class="flex items-center gap-1 hover:text-[#004274] font-medium">

                            Semua Layanan

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-4 h-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 9l-7 7-7-7" />

                            </svg>

                        </button>

                        <!-- MENU -->
                        <div class="absolute left-1/2 -translate-x-1/2 top-full pt-2 w-64
                            opacity-0 invisible group-hover:opacity-100 group-hover:visible
                            transition-all duration-200">

                            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 py-4">

                                <a href="{{ route('layanan.kalibrasi') }}"
                                    class="block px-6 py-3 hover:bg-gray-50">
                                    Jasa Kalibrasi
                                </a>

                                <a href="{{ route('consultant') }}"
                                    class="block px-6 py-3 hover:bg-gray-50">
                                    Jasa Consultant
                                </a>

                                <a href="{{ route('training') }}"
                                    class="block px-6 py-3 hover:bg-gray-50">
                                    Training
                                </a>

                            </div>

                        </div>

                    </li>

                    <li>
                        <a href="{{ url('mitra-lab') }}"
                            class="hover:text-[#004274] transition">
                            Mitra Lab
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('reseller') }}"
                            class="hover:text-[#004274] transition">
                            Reseller
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('event') }}"
                            class="hover:text-[#004274] transition">
                            Event
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('hubungi-kami') }}"
                            class="hover:text-[#004274] transition">
                            Hubungi Kami
                        </a>
                    </li>

                </ul>

                <!-- MOBILE BUTTON -->
                <button @click="open = !open"
                    class="md:hidden p-2 rounded-lg">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-7 h-7"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />

                    </svg>

                </button>

            </div>

        </div>

        <!-- ================= MOBILE MENU ================= -->
        <div x-show="open"
            x-transition
            class="md:hidden bg-white border-t border-gray-100 shadow-lg">

            <div class="px-6 py-5 space-y-5">

                <a href="{{ url('tentang-kami') }}"
                    class="block font-medium text-gray-700">
                    Tentang Kami
                </a>

                <!-- MOBILE DROPDOWN -->
                <div>

                    <button @click="layanan = !layanan"
                        class="flex items-center justify-between w-full font-medium text-gray-700">

                        Semua Layanan

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7" />

                        </svg>

                    </button>

                    <div x-show="layanan"
                        x-transition
                        class="mt-4 ml-3 space-y-3 text-sm">

                        <a href="{{ route('layanan.kalibrasi') }}"
                            class="block text-gray-600">
                            Jasa Kalibrasi
                        </a>

                        <a href="{{ route('consultant') }}"
                            class="block text-gray-600">
                            Jasa Consultant
                        </a>

                        <a href="{{ route('training') }}"
                            class="block text-gray-600">
                            Training
                        </a>

                    </div>

                </div>

                <a href="{{ url('mitra-lab') }}"
                    class="block font-medium text-gray-700">
                    Mitra Lab
                </a>

                <a href="{{ url('reseller') }}"
                    class="block font-medium text-gray-700">
                    Reseller
                </a>

                <a href="{{ url('event') }}"
                    class="block font-medium text-gray-700">
                    Event
                </a>

                <a href="{{ url('hubungi-kami') }}"
                    class="block font-medium text-gray-700">
                    Hubungi Kami
                </a>

            </div>

        </div>

    </nav>

    <!-- ================= CONTENT ================= -->
    <main class="w-full pt-24 overflow-x-hidden">

        {{ $slot ?? '' }}

        @yield('content')

    </main>

    <!-- ================= CHATBOT ================= -->
    <x-chat-widget />

    <!-- ================= FOOTER ================= -->
    <x-footer />

    <!-- SWIPER -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @stack('scripts')

</body>

</html>