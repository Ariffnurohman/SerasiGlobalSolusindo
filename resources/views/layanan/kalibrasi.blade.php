@extends('layouts.app')

@section('content')

@php
use Illuminate\Support\Str;
@endphp

<div class="pt-24 bg-gray-50">

    <!-- HERO -->
    <section class="bg-gradient-to-r from-[#004274] to-[#005c99] text-white py-20">
        <div class="px-6 md:px-12 lg:px-20 grid md:grid-cols-2 gap-10 items-center">

            <div>
                <h1 class="text-4xl font-bold leading-tight">
                    Jasa Kalibrasi Profesional
                </h1>
                <p class="mt-4 text-gray-200">
                    Layanan kalibrasi alat ukur dengan standar ISO dan tenaga ahli profesional.
                </p>

                <a href="#" class="inline-block mt-6 bg-white text-[#004274] px-6 py-3 rounded-xl font-semibold">
                    Konsultasi Sekarang
                </a>
            </div>

            <div>
                <img src="{{ asset('images/layanan.png') }}"
                    class="rounded-2xl shadow-2xl">
            </div>

        </div>
    </section>

    <!-- LIST LAYANAN -->
    <section class="py-20 bg-gray-50">
        <div class="px-6 md:px-12 lg:px-20">

            <!-- HEADING -->
            <div class="text-center mb-14">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">
                    Jenis Layanan Kalibrasi
                </h2>

                <p class="text-gray-500 max-w-2xl mx-auto">
                    Kami menyediakan berbagai layanan kalibrasi profesional
                    dengan standar nasional dan internasional untuk mendukung
                    kebutuhan industri Anda.
                </p>
            </div>

            <!-- GRID -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">

                @foreach ([

                [
                'nama' => 'Temperatur & Humidity',
                'icon' => 'sun'
                ],

                [
                'nama' => 'Force',
                'icon' => 'scale'
                ],

                [
                'nama' => 'Pressure',
                'icon' => 'adjustments-horizontal'
                ],

                [
                'nama' => 'Volumetric',
                'icon' => 'beaker'
                ],

                [
                'nama' => 'Time & Frequency',
                'icon' => 'clock'
                ],

                [
                'nama' => 'Flows & Streams',
                'icon' => 'arrow-trending-up'
                ],

                [
                'nama' => 'Electrical',
                'icon' => 'bolt'
                ],

                [
                'nama' => 'Density & Bulk',
                'icon' => 'cube'
                ],

                [
                'nama' => 'Photometry',
                'icon' => 'eye'
                ],

                [
                'nama' => 'Long',
                'icon' => 'arrows-right-left'
                ],

                [
                'nama' => 'Hardness',
                'icon' => 'shield-check'
                ],

                [
                'nama' => 'Mass',
                'icon' => 'scale'
                ],

                [
                'nama' => 'Acoustics & Vibration',
                'icon' => 'speaker-wave'
                ],

                [
                'nama' => 'Torque',
                'icon' => 'cog-6-tooth'
                ],

                [
                'nama' => 'Analytical & Instruments',
                'icon' => 'beaker'
                ],

                ] as $item)

                <!-- CARD -->
                <div class="group bg-white rounded-3xl p-7 border border-gray-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition duration-300">

                    <!-- ICON -->
                    <div class="w-16 h-16 rounded-2xl bg-purple-100 flex items-center justify-center mb-6 transition duration-300 group-hover:bg-purple-600">

                        <x-dynamic-component
                            :component="'heroicon-o-' . $item['icon']"
                            class="w-8 h-8 text-purple-600 transition duration-300 group-hover:text-white" />

                    </div>

                    <!-- TITLE -->
                    <h3 class="text-xl font-bold text-gray-800 mb-3 leading-snug">
                        {{ $item['nama'] }}
                    </h3>

                    <!-- DESC -->
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        Layanan kalibrasi profesional dengan standar akurasi tinggi
                        dan tenaga ahli berpengalaman.
                    </p>

                    <!-- BUTTON -->
                    <a href="{{ url('ruang-lingkup/' . Str::slug($item['nama'])) }}"
                        class="inline-flex items-center gap-2 text-purple-600 font-semibold hover:gap-3 transition-all duration-300">

                        Learn More

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

                @endforeach

            </div>

        </div>
    </section>


    <!-- PARTNER LAB -->
    <section class="bg-white py-20 overflow-hidden">
        <div class="px-6 md:px-12 lg:px-20">

            <div class="grid md:grid-cols-3 gap-10 items-center">

                <!-- LEFT CONTENT -->
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-5">
                        Our Partner Lab
                    </h2>

                    <p class="text-gray-600 leading-relaxed mb-8">
                        Get certified by trusted calibration laboratories
                        with professional and verified standards.
                    </p>

                    <a href="{{ url('mitra-lab') }}"
                        class="inline-flex items-center border border-blue-600 text-blue-600 px-6 py-3 rounded-xl hover:bg-blue-600 hover:text-white transition">
                        See All
                    </a>
                </div>

                <!-- RIGHT SLIDER -->
                <div class="md:col-span-2 relative">

                    <div class="swiper partnerSwiper">

                        <div class="swiper-wrapper">

                            @foreach ($mitraLabs as $lab)

                            <div class="swiper-slide">

                                <div class="bg-gray-50 rounded-3xl p-8 shadow-sm hover:shadow-xl transition duration-300 text-center h-full border border-gray-100">

                                    <img src="{{ asset('images/mitra/' . $lab->logo) }}"
                                        alt="{{ $lab->name }}"
                                        class="h-24 mx-auto object-contain mb-6 grayscale hover:grayscale-0 transition duration-300">

                                    <h3 class="font-semibold text-gray-800 text-lg leading-relaxed">
                                        {{ $lab->name }}
                                    </h3>

                                </div>

                            </div>

                            @endforeach

                        </div>

                        <!-- NAVIGATION -->
                        <div class="swiper-button-next partner-next"></div>
                        <div class="swiper-button-prev partner-prev"></div>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- CTA -->
    <section class="bg-[#004274] py-20 text-center text-white">
        <h2 class="text-3xl font-bold mb-4">
            Butuh Jasa Kalibrasi?
        </h2>
        <p class="mb-6 text-gray-200">
            Konsultasikan kebutuhan Anda sekarang juga
        </p>

        <a href="#" class="bg-white text-[#004274] px-8 py-3 rounded-xl font-semibold">
            Hubungi Kami
        </a>
    </section>

</div>

<script>
    new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 20,
        slidesPerView: 1,

        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        autoplay: {
            delay: 2500,
        },
    });
</script>
@endsection