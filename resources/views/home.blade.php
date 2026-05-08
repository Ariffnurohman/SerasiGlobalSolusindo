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

                <a href="https://wa.me/628111365636" target="_blank"
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700">
                    Cari Layanan
                </a>

                <a href="https://wa.me/628111365636" target="_blank"
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

<!-- ================= LAYANAN UNGGULAN ================= -->
<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">

            <div>
                <h2 class="text-4xl font-bold text-gray-800 mb-3">
                    Layanan Unggulan Kami
                </h2>

                <p class="text-gray-600 max-w-2xl">
                    Telusuri layanan terbaik untuk kebutuhan industri Anda
                    dengan standar profesional dan terpercaya.
                </p>
            </div>

        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- CARD 1 -->
            <div class="group relative rounded-3xl overflow-hidden shadow-lg">

                <img src="{{ asset('images/sertifikasi-iso.png') }}"
                    class="w-full h-80 object-cover group-hover:scale-110 transition duration-500">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

                <div class="absolute bottom-0 p-6 text-white">

                    <span class="bg-blue-600 text-xs px-3 py-1 rounded-full">
                        Kalibrasi
                    </span>

                    <h3 class="text-2xl font-bold mt-4 mb-3">
                        Jasa Kalibrasi
                    </h3>

                    <p class="text-sm text-gray-200 leading-relaxed mb-5">
                        Standar internasional untuk meningkatkan kualitas
                        dan akurasi alat industri perusahaan Anda.
                    </p>

                    <a href="#"
                        class="inline-flex items-center gap-2 bg-white text-blue-700 px-5 py-2 rounded-xl text-sm font-semibold hover:gap-3 transition-all">

                        Buat Permintaan

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7" />

                        </svg>

                    </a>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="group relative rounded-3xl overflow-hidden shadow-lg">

                <img src="{{ asset('images/uji-air-limbah.png') }}"
                    class="w-full h-80 object-cover group-hover:scale-110 transition duration-500">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

                <div class="absolute bottom-0 p-6 text-white">

                    <span class="bg-green-600 text-xs px-3 py-1 rounded-full">
                        Consultant
                    </span>

                    <h3 class="text-2xl font-bold mt-4 mb-3">
                        Jasa Consultant
                    </h3>

                    <p class="text-sm text-gray-200 leading-relaxed mb-5">
                        Solusi konsultasi profesional untuk kualitas,
                        lingkungan, dan sistem manajemen industri.
                    </p>

                    <a href="#"
                        class="inline-flex items-center gap-2 bg-white text-green-700 px-5 py-2 rounded-xl text-sm font-semibold hover:gap-3 transition-all">

                        Buat Permintaan

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7" />

                        </svg>

                    </a>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="group relative rounded-3xl overflow-hidden shadow-lg">

                <img src="{{ asset('images/sertifikasi-sni.png') }}"
                    class="w-full h-80 object-cover group-hover:scale-110 transition duration-500">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

                <div class="absolute bottom-0 p-6 text-white">

                    <span class="bg-orange-500 text-xs px-3 py-1 rounded-full">
                        Training
                    </span>

                    <h3 class="text-2xl font-bold mt-4 mb-3">
                        Training
                    </h3>

                    <p class="text-sm text-gray-200 leading-relaxed mb-5">
                        Tingkatkan kompetensi tim Anda melalui pelatihan
                        teknis dan sertifikasi profesional.
                    </p>

                    <a href="#"
                        class="inline-flex items-center gap-2 bg-white text-orange-600 px-5 py-2 rounded-xl text-sm font-semibold hover:gap-3 transition-all">

                        Buat Permintaan

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7" />

                        </svg>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= PARTNER LAB ================= -->
<section class="bg-white py-24 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-3 gap-14 items-center">

            <!-- LEFT CONTENT -->
            <div>

                <h2 class="text-5xl font-bold text-[#0f172a] leading-tight mb-6">
                    Our Partner Lab
                </h2>

                <p class="text-gray-600 text-lg leading-relaxed mb-10">
                    Get certified by trusted calibration laboratories
                    with professional and verified standards.
                </p>

                <a href="{{ url('mitra-lab') }}"
                    class="inline-flex items-center border border-blue-500 text-blue-600 px-7 py-4 rounded-2xl hover:bg-blue-600 hover:text-white transition duration-300">

                    See All

                </a>

            </div>

            <!-- RIGHT SLIDER -->
            <div class="lg:col-span-2 relative">

                <div class="swiper partnerSwiper overflow-hidden">

                    <div class="swiper-wrapper">

                        @foreach ($mitraLabs as $lab)

                        <div class="swiper-slide">

                            <div class="bg-gray-50 border border-gray-100 rounded-[32px] p-8 h-[320px] flex flex-col items-center justify-center text-center shadow-sm hover:shadow-xl transition duration-300">

                                <!-- LOGO -->
                                <div class="w-40 h-40 bg-gray-100 rounded-2xl flex items-center justify-center mb-8">

                                    <img src="{{ asset('images/mitra/' . $lab->logo) }}"
                                        alt="{{ $lab->name }}"
                                        class="h-20 object-contain grayscale hover:grayscale-0 transition duration-300">

                                </div>

                                <!-- NAME -->
                                <h3 class="text-2xl font-semibold text-[#1e293b] leading-relaxed">

                                    {{ $lab->name }}

                                </h3>

                            </div>

                        </div>

                        @endforeach

                    </div>

                </div>

                <!-- NAVIGATION -->
                <div class="partner-prev absolute left-0 top-1/2 -translate-y-1/2 z-10 cursor-pointer">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-14 h-14 text-blue-500"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M15 19l-7-7 7-7" />

                    </svg>

                </div>

                <div class="partner-next absolute right-0 top-1/2 -translate-y-1/2 z-10 cursor-pointer">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-14 h-14 text-blue-500"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M9 5l7 7-7 7" />

                    </svg>

                </div>

            </div>

        </div>

    </div>

</section>


@push('scripts')

<script>
    new Swiper(".partnerSwiper", {

        loop: true,

        spaceBetween: 30,

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: ".partner-next",
            prevEl: ".partner-prev",
        },

        breakpoints: {

            0: {
                slidesPerView: 1,
            },

            768: {
                slidesPerView: 2,
            },

            1200: {
                slidesPerView: 3,
            }

        }

    });
</script>

@endpush
@endsection