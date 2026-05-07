@extends('layouts.app')

@section('content')

<section class="relative bg-[#004274] text-white py-24 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- TEXT -->
        <div>

            <h1 class="text-5xl font-bold leading-tight mb-6">
                Marketplace Jasa Kalibrasi
                <span>Terpercaya</span>
            </h1>

            <p class="text-lg mb-8">
                Temukan layanan kalibrasi, pengujian, training, dan konsultasi
                dari laboratorium profesional di seluruh Indonesia.
            </p>

            <div class="flex gap-4">

            <a href="https://wa.me/6281234567890" target="_blank"
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700">
                    Cari Layanan
                </a>

                <a href="https://wa.me/6281234567890" target="_blank"
                    class="border border-gray-300 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100">
                    Daftar Laboratorium
                </a>

            </div>

            <!-- TRUST BADGE -->
            <div class="mt-10 flex items-center gap-6 text-sm ">

                <span>✔ Laboratorium Terverifikasi</span>
                <span>✔ Sertifikasi Terpercaya</span>
                <span>✔ Konsultan Profesional</span>

            </div>

        </div>


        <!-- IMAGE / DASHBOARD -->
        <div class="relative">

            <img
                src="{{ asset('images/hero/Manufacturing Process.png') }}"
                class="rounded-xl shadow-2xl">

        </div>

    </div>

</section>

<!-- KATEGORI PRODUCT / SERVICE -->
<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">

            <h2 class="text-4xl font-bold text-gray-800">
                LAYANAN INDUSTRI
            </h2>

            <p class="text-gray-500 mt-3">
                Temukan berbagai layanan dan solusi untuk kebutuhan industri Anda
            </p>

        </div>

        <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- TRAINING -->
            <a href="/training"
                class="group bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl hover:-translate-y-2 transition">

                <div class="bg-green-100 w-20 h-20 flex items-center justify-center rounded-full mx-auto mb-6 group-hover:bg-green-600 transition">

                    <i data-lucide="graduation-cap"
                        class="w-10 h-10 text-green-600 group-hover:text-white"></i>

                </div>

                <h3 class="font-bold text-lg mb-2">
                    Training
                </h3>

                <p class="text-gray-500 text-sm">
                    Program pelatihan profesional untuk meningkatkan kompetensi
                </p>

            </a>


            <!-- CONSULTANT -->
            <a href="/consultant"
                class="group bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl hover:-translate-y-2 transition">

                <div class="bg-purple-100 w-20 h-20 flex items-center justify-center rounded-full mx-auto mb-6 group-hover:bg-purple-600 transition">

                    <i data-lucide="users"
                        class="w-10 h-10 text-purple-600 group-hover:text-white"></i>

                </div>

                <h3 class="font-bold text-lg mb-2">
                    Consultant
                </h3>

                <p class="text-gray-500 text-sm">
                    Layanan konsultasi profesional untuk berbagai kebutuhan industri
                </p>

            </a>


            <!-- CALIBRATION -->
            <a href="/calibration"
                class="group bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl hover:-translate-y-2 transition">

                <div class="bg-orange-100 w-20 h-20 flex items-center justify-center rounded-full mx-auto mb-6 group-hover:bg-orange-600 transition">

                    <i data-lucide="settings"
                        class="w-10 h-10 text-orange-600 group-hover:text-white"></i>

                </div>

                <h3 class="font-bold text-lg mb-2">
                    Calibration
                </h3>

                <p class="text-gray-500 text-sm">
                    Layanan kalibrasi alat ukur dari laboratorium terakreditasi
                </p>

            </a>


        </div>

    </div>
    </div>

</section>

<!-- KEBUTUHAN -->
<section class="bg-gray-50 py-20">

    <div class="max-w-7x1 mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- TEXT -->
        <div>

            <h1 class="text-5xl font-bold text-gray-800 leading-tight mb-6">
                Satu Platform untuk Semua Kebutuhan <br>
                TICC Anda
            </h1>

            <p class="text-gray-600 text-lg mb-8">
                Temukan penyedia layanan terbaik untuk segala kebutuhan terkait
                pengujian, inspeksi, sertifikasi, dan kalibrasi di satu tempat.
            </p>

            <ul class="space-y-4 text-gray-700">

                <li class="flex items-center gap-3">
                    <span class="bg-orange-100 text-orange-500 rounded-full p-2">
                        ✔
                    </span>
                    100+ laboratorium mitra terakreditasi KAN
                </li>

                <li class="flex items-center gap-3">
                    <span class="bg-orange-100 text-orange-500 rounded-full p-2">
                        ✔
                    </span>
                    Proses mudah dan cepat
                </li>

                <li class="flex items-center gap-3">
                    <span class="bg-orange-100 text-orange-500 rounded-full p-2">
                        ✔
                    </span>
                    Opsi layanan lengkap
                </li>

            </ul>

        </div>

        <!-- IMAGE -->
        <div class="flex justify-end">

            <img src="{{ asset('images/team-work.png') }}"
                class="max-w-md">

        </div>
    </div>

    </div>

    <div class="mt-8 flex gap-4">

        <a href="/services"
            class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700">
            Cari Layanan
        </a>

        <a href="/labs"
            class="border px-6 py-3 rounded-lg font-semibold hover:bg-gray-100">
            Lihat Laboratorium
        </a>
</section>

<!-- LAYANAN UNGGULAN -->
<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center mb-10">

            <div>
                <h2 class="text-4xl font-bold">
                    Layanan Unggulan Kami
                </h2>

                <p class="text-gray-600">
                    Telusuri layanan terbaik untuk kebutuhan industri Anda
                </p>
            </div>

            <a href="/services"
                class="border border-blue-500 text-blue-600 px-6 py-3 rounded-lg hover:bg-blue-50">
                Lihat Semua Layanan
            </a>

        </div>


        <!-- SLIDER -->
        <div class="relative">

            <div class="swiper serviceSwiper">

                <div class="swiper-wrapper">


                    <!-- CARD 1 -->
                    <div class="swiper-slide">

                        <div class="group relative rounded-xl overflow-hidden shadow-lg">

                            <img src="{{ asset('images/sertifikasi-iso.png') }}"
                                class="w-full h-72 object-cover group-hover:scale-110 transition duration-500">

                            <div class="absolute inset-0 bg-black/40"></div>

                            <div class="absolute bottom-0 p-6 text-white">

                                <h3 class="text-xl font-bold mb-2">
                                    Jasa Kalibrasi
                                </h3>

                                <p class="text-sm mb-4">
                                    Standar internasional untuk meningkatkan kualitas manajemen perusahaan.
                                </p>

                                <a href="#"
                                    class="bg-blue-600 px-4 py-2 rounded-lg text-sm font-semibold">
                                    Buat Permintaan
                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- CARD 2 -->
                    <div class="swiper-slide">

                        <div class="group relative rounded-xl overflow-hidden shadow-lg">

                            <img src="{{ asset('images/uji-air-limbah.png') }}"
                                class="w-full h-72 object-cover group-hover:scale-110 transition duration-500">

                            <div class="absolute inset-0 bg-black/40"></div>

                            <div class="absolute bottom-0 p-6 text-white">

                                <h3 class="text-xl font-bold mb-2">
                                    Jasa Consultant
                                </h3>

                                <p class="text-sm mb-4">
                                    Analisis kualitas air limbah sesuai standar lingkungan.
                                </p>

                                <a href="#"
                                    class="bg-blue-600 px-4 py-2 rounded-lg text-sm font-semibold">
                                    Buat Permintaan
                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- CARD 3 -->
                    <div class="swiper-slide">

                        <div class="group relative rounded-xl overflow-hidden shadow-lg">

                            <img src="{{ asset('images/sertifikasi-sni.png') }}"
                                class="w-full h-72 object-cover group-hover:scale-110 transition duration-500">

                            <div class="absolute inset-0 bg-black/40"></div>

                            <div class="absolute bottom-0 p-6 text-white">

                                <h3 class="text-xl font-bold mb-2">
                                    Training
                                </h3>

                                <p class="text-sm mb-4">
                                    Pastikan produk memenuhi standar nasional Indonesia.
                                </p>

                                <a href="#"
                                    class="bg-blue-600 px-4 py-2 rounded-lg text-sm font-semibold">
                                    Buat Permintaan
                                </a>

                            </div>

                        </div>

                    </div>


                </div>

                

            </div>


            <!-- NAVIGATION -->
            <div class="swiper-button-prev !text-black"></div>
            <div class="swiper-button-next !text-black"></div>

            <!-- PAGINATION -->
            <div class="swiper-pagination mt-6"></div>

        </div>

    </div>

</section>

<!-- CLIENT LOGO -->
<section class="bg-gradient-to-r from-blue-700 to-blue-600 text-white py-16 rounded-2xl mx-6 mt-10 relative overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10">

            <div>
                <h2 class="text-3xl font-bold mb-3">
                    Mitra Lab Terpercaya Kami
                </h2>
                <p class="text-white/80 max-w-xl">
                    Perluas jangkauan layanan lab Anda bersama Kalibrasi.com
                </p>

                <ul class="mt-4 space-y-2 text-sm text-white/90">
                    <li>✔ Jangkau peluang bisnis lebih luas</li>
                    <li>✔ Kolaborasi dengan berbagai industri</li>
                    <li>✔ Tingkatkan kepercayaan klien</li>
                </ul>
            </div>

            <div class="flex gap-3 mt-6 md:mt-0">
                <a href="/mitra-lab"
                   class="border border-white px-5 py-2 rounded-lg hover:bg-white hover:text-purple-700 transition">
                   Lihat Semua Mitra
                </a>

                <a href="#"
                   class="bg-white text-blue-700 px-5 py-2 rounded-lg font-semibold hover:bg-gray-100">
                   Bergabung Sekarang
                </a>
            </div>

        </div>

        <!-- SLIDER -->
        <div class="relative">

            <div id="slider" class="flex gap-6 overflow-x-auto scroll-smooth no-scrollbar">

                @foreach($clients as $client)
                <div class="min-w-[260px] bg-white rounded-2xl p-5 text-gray-800 shadow-lg">

                    <!-- LOGO -->
                    <div class="h-32 flex items-center justify-center bg-gray-100 rounded-xl mb-4">
                        <img src="{{ asset('images/mitra/' . $client->logo) }}"
                             class="h-16 object-contain">
                    </div>

                    <!-- CITY -->
                    <span class="text-xs bg-purple-100 text-purple-700 px-3 py-1 rounded-full">
                        {{ $client->city }}
                    </span>

                    <!-- NAME -->
                    <h3 class="mt-3 font-semibold text-[#004274]">
                        {{ $client->name }}
                    </h3>

                    <div class="flex flex-wrap gap-3">
                    @foreach(explode(',', $client->layanan) as $item)
                        <span class="bg-blue-100 px-4 py-2 rounded-full text-sm">
                            {{ $item }}
                        </span>
                    @endforeach
                    
                </div>
        

                </div>
                @endforeach

            </div>

            <!-- BUTTON -->
            <button onclick="scrollSlider(-300)"
                class="absolute left-0 top-1/2 -translate-y-1/2 bg-white text-black w-10 h-10 rounded-full shadow">
                ←
            </button>

            <button onclick="scrollSlider(300)"
                class="absolute right-0 top-1/2 -translate-y-1/2 bg-white text-black w-10 h-10 rounded-full shadow">
                →
            </button>

        </div>

    </div>
</section>
@endsection