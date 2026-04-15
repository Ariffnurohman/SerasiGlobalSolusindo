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
    <section class="py-20">
        <div class="px-6 md:px-12 lg:px-20">

            <h2 class="text-3xl font-bold text-gray-800 mb-10">
                Jenis Layanan Kalibrasi
            </h2>

            <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">

                @foreach ([
                [
                'nama' => 'Kalibrasi Dimensi',
                'icon' => 'arrows-pointing-out'
                ],
                [
                'nama' => 'Kalibrasi Massa',
                'icon' => 'scale'
                ],
                [
                'nama' => 'Kalibrasi Tekanan',
                'icon' => 'adjustments-horizontal'
                ],
                [
                'nama' => 'Kalibrasi Temperatur',
                'icon' => 'sun'
                ],
                [
                'nama' => 'Kalibrasi Volume',
                'icon' => 'cube'
                ],
                [
                'nama' => 'Kalibrasi Elektrikal',
                'icon' => 'bolt'
                ],
                [
                'nama' => 'Kalibrasi Waktu',
                'icon' => 'clock'
                ],
                [
                'nama' => 'Kalibrasi Flow',
                'icon' => 'arrow-path'
                ],
                ] as $item)

                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg hover:-translate-y-1 transition">

                    <!-- ICON -->
                    <x-dynamic-component
                        :component="'heroicon-o-' . $item['icon']"
                        class="w-10 h-10 text-purple-600 mb-3" />

                    <!-- TITLE -->
                    <h3 class="font-semibold text-lg text-gray-800">
                        {{ $item['nama'] }}
                    </h3>

                    <p class="text-sm text-gray-500 mt-2">
                        Layanan kalibrasi akurat dan terpercaya
                    </p>

                    <!-- LINK -->
                    <a href="{{ url('ruang-lingkup/' . Str::slug($item['nama'])) }}"
                        class="inline-block mt-3 text-blue-600 text-sm font-medium">
                        Lihat Detail →
                    </a>

                </div>

                @endforeach

            </div>

        </div>
    </section>

    <!-- PARTNER LAB SLIDER -->
    <!-- PARTNER LAB SLIDER -->
    <section class="bg-white py-20">
        <div class="px-6 md:px-12 lg:px-20">

            <div class="grid md:grid-cols-3 gap-10 items-center">

                <!-- TEXT -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">
                        Our Partner Lab
                    </h2>

                    <p class="text-gray-600 mb-6">
                        Get certified by the best partner labs in the field.
                    </p>

                    <a href="{{ url('mitra-lab') }}"
                        class="inline-block border border-blue-600 text-blue-600 px-6 py-2 rounded-lg hover:bg-blue-600 hover:text-white transition">
                        See All
                    </a>
                </div>

                <!-- SLIDER -->
                <div class="md:col-span-2 relative">

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">

                            <!-- ITEM -->
                            <div class="swiper-slide">
                                <div class="card-lab">
                                    <img src="{{ asset('images/mitra/tuv-nord.jpeg') }}">
                                    <p>PT TUV NORD Indonesia</p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card-lab">
                                    <img src="{{ asset('images/mitra/dinamika-kalibrasi.jpeg') }}">
                                    <p>PT Dinamika Kalibrasi Indonesia</p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card-lab">
                                    <img src="{{ asset('images/mitra/trusur.jpeg') }}">
                                    <p>PT Trusur Unggul Teknusa</p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card-lab">
                                    <img src="{{ asset('images/mitra/qualis.png') }}">
                                    <p>PT Qualitas Indonesia</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- NAVIGATION -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

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

@endsection