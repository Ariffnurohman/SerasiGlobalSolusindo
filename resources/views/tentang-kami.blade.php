@extends('layouts.app')

@section('content')

<div class="pt-24 bg-gray-50">

    <!-- HERO PREMIUM -->
    <section class="relative bg-[#004274] text-white py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">

            <div>
                <h1 class="text-5xl font-bold leading-tight">
                    Membangun Standar <br> Akurasi & Kepercayaan
                </h1>
                <p class="mt-5 text-gray-200">
                    Kami menghadirkan layanan kalibrasi, pengujian, dan konsultasi dengan teknologi modern
                    dan standar internasional untuk mendukung industri Anda.
                </p>

                <div class="mt-6 flex gap-4">
                    <a href="#" class="bg-white text-[#004274] px-6 py-3 rounded-xl font-semibold">
                        Konsultasi Sekarang
                    </a>
                    <a href="#" class="border border-white px-6 py-3 rounded-xl">
                        Lihat Layanan
                    </a>
                </div>
            </div>

            <div class="relative">
                <img src="{{ asset('images/tentang-kami/Marketing-bro.png') }}" class="w-full h-80 object-contain rounded-2xl shadow-2xl">
            </div>

        </div>
    </section>

    <!-- STATS -->
    <section class="-mt-16 relative z-10">
        <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 px-4">

            @foreach([
            ['value' => 1000, 'label' => 'Client', 'suffix' => '+'],
            ['value' => 50, 'label' => 'Mitra Lab', 'suffix' => '+'],
            ['value' => 10, 'label' => 'Tahun Pengalaman', 'suffix' => '+'],
            ['value' => 99, 'label' => 'Kepuasan', 'suffix' => '%']
            ] as $item)

            <div class="stat-card bg-white p-6 rounded-2xl shadow text-center">

                <h3 class="text-2xl font-bold text-[#004274]">
                    <span class="counter" data-target="{{ $item['value'] }}">0</span>{{ $item['suffix'] }}
                </h3>

                <p class="text-gray-500 text-sm mt-1">
                    {{ $item['label'] }}
                </p>

            </div>

            @endforeach

        </div>
    </section>

    <!-- ABOUT DETAIL -->
    <section class="py-20 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

            <!-- IMAGE STACK -->
            <div class="relative h-[500px]">

                <!-- Gambar belakang -->
                <img src="{{ asset('images/tentang-kami/lab2.jpg') }}"
                    class="absolute top-0 left-0 w-72 rounded-2xl shadow-lg">

                <!-- Gambar tengah -->
                <img src="{{ asset('images/tentang-kami/lab3.jpg') }}"
                    class="absolute top-20 left-20 w-72 rounded-2xl shadow-xl z-10">

                <!-- Gambar depan -->
                <img src="{{ asset('images/tentang-kami/lab1.png') }}"
                    class="absolute bottom-0 left-10 w-72 rounded-2xl shadow-2xl">

            </div>

            <!-- TEXT CONTENT -->
            <div>

                <!-- VISI -->
                <div class="mb-10">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-10 h-10 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full">
                            💡
                        </div>
                        <h3 class="text-xl font-semibold">Visi</h3>
                    </div>

                    <p class="text-gray-600 leading-relaxed">
                        Kalibrasi.com bertujuan untuk memberdayakan bisnis dengan layanan kalibrasi
                        yang akurat dan handal demi mendorong inovasi dan keunggulan dalam industri.
                    </p>
                </div>

                <!-- MISI -->
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-10 h-10 flex items-center justify-center bg-purple-100 text-purple-600 rounded-full">
                            ⚡
                        </div>
                        <h3 class="text-xl font-semibold">Misi</h3>
                    </div>

                    <p class="font-semibold text-gray-800 mb-2">
                        Quality & Access
                    </p>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        Kami membayangkan sebuah dunia di mana kualitas setiap produk menjadi hal yang utama,
                        di mana akurasi dan ketepatan sangat diapresiasi, dan laboratorium kalibrasi menjadi solusi
                        yang mudah dijangkau dan terjangkau.
                    </p>

                    <p class="font-semibold text-gray-800 mb-2">
                        Top of Mind
                    </p>

                    <p class="text-gray-600 leading-relaxed">
                        Kami berupaya menjadi pasar utama untuk layanan kalibrasi laboratorium,
                        memberdayakan bisnis untuk menjaga standar tinggi dan memajukan industri mereka.
                    </p>
                </div>

            </div>

        </div>

    </section>


    <!-- TIMELINE -->
    <section class="py-20 bg-white">

        <div class="max-w-7xl mx-auto px-6">

            <!-- TITLE -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">
                    Business Center
                </h2>
                <p class="text-gray-500 mt-2">
                    Temukan Konsultan Bisnis kami di lokasi Kalibrasi berikut
                </p>
            </div>

            <!-- CONTENT -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <!-- LEFT: LOKASI -->
                <div class="space-y-8">

                    <!-- ITEM -->
                    <div class="flex gap-4">
                        <div class="w-10 h-10 flex items-center justify-center bg-purple-100 text-purple-600 rounded-full">
                            📍
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">Tanggerang</h3>
                            <p class="text-gray-600 text-sm">
                                Graha Segovia Blok S.27 N0. 6, Jl. Raya Panongan, Tangerang
                            </p>
                            <a href="#" class="text-blue-600 text-sm font-medium mt-1 inline-block">
                                Lihat Detail →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: IMAGE -->
                <div>
                    <img src="{{ asset('images/business/sgs-lokasi.jpeg') }}"
                        class="rounded-2xl shadow-xl w-full object-cover">
                </div>

            </div>

        </div>

    </section>

    <!-- CTA PREMIUM -->
    <section class="bg-[#004274] py-20 text-center text-white">
        <h2 class="text-3xl font-bold mb-4">
            Siap Berkolaborasi?
        </h2>
        <p class="mb-6 text-gray-200">
            Kami siap membantu kebutuhan kalibrasi dan pengujian Anda
        </p>

        <a href="#" class="bg-white text-[#004274] px-8 py-3 rounded-xl font-semibold">
            Hubungi Kami
        </a>
    </section>

</div>

@endsection