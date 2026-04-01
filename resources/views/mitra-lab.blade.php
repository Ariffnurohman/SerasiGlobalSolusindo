@extends('layouts.app')

@section('content')

<section class="bg-[#F8FAFC] py-16">

    <!-- HEADER -->
    <div class="max-w-7xl mx-auto px-6 text-center mb-15">

        <h1 class="text-4xl font-bold text-[#004274] mb-4">
            Mitra Laboratorium SGS
        </h1>

        <p class="text-gray-600 max-w-3xl mx-auto">
            Temukan mitra laboratorium kalibrasi terpercaya yang telah bekerja sama dengan SGS.
            Semua mitra memiliki pengalaman dan standar kualitas terbaik untuk kebutuhan industri Anda.
        </p>

    </div>

    <!-- CARD GRID -->
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 lg:grid-cols-4 gap-8">

        <!-- CARD -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition overflow-hidden">

            <div class="relative h-40 flex items-center justify-center bg-gradient-to-b from-gray-50 to-gray-100">

                <div class="h-24 w-full flex items-center justify-center">
                    <img src="{{ asset('images/mitra/tuv-nord.jpeg') }}"
                        class="max-h-full max-w-[140px] object-contain hover:scale-110 transition duration-300">
                </div>

                <span class="absolute top-3 right-3 bg-blue-600 text-white text-xs px-3 py-1 rounded-full">
                    Bekasi
                </span>

            </div>

            <!-- CONTENT -->
            <div class="p-5">

                <h3 class="font-semibold text-[#004274] mb-2">
                    PT. TUV NORD Indonesia
                </h3>

                <!-- Tags -->
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="text-xs bg-gray-100 px-2 py-1 rounded">Kalibrasi</span>
                    <span class="text-xs bg-gray-100 px-2 py-1 rounded">Pengujian</span>
                </div>

                <a href="#" class="text-[#E24A3B] font-semibold text-sm">
                    Lihat Detail →
                </a>

            </div>

        </div>


        <!-- CARD 2 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition overflow-hidden">

            <div class="relative h-40 flex items-center justify-center bg-gray-100">

                <img src="{{ asset('images/mitra/dinamika-kalibrasi.jpeg') }}" class="h-20 mx-auto object-contain">

                <span class="absolute top-3 right-3 bg-blue-600 text-white text-xs px-3 py-1 rounded-full">
                    Tangerang
                </span>

            </div>

            <div class="p-5">

                <h3 class="font-semibold text-[#004274] mb-2">
                    PT. Dinamika Kalibrasi Indonesia
                </h3>

                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="text-xs bg-gray-100 px-2 py-1 rounded">Suhu & Kelembapan</span>
                    <span class="text-xs bg-gray-100 px-2 py-1 rounded">Massa</span>
                </div>

                <a href="#" class="text-[#E24A3B] font-semibold text-sm">
                    Lihat Detail →
                </a>

            </div>

        </div>


        <!-- CARD 3 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition overflow-hidden">

            <div class="relative h-40 flex items-center justify-center bg-gray-100">

                <img src="{{ asset('images/labs/qualis.png') }}" class="h-16 object-contain">

                <span class="absolute top-3 right-3 bg-blue-600 text-white text-xs px-3 py-1 rounded-full">
                    Tangerang
                </span>

            </div>

            <div class="p-5">

                <h3 class="font-semibold text-[#004274] mb-2">
                    PT Qualis Indonesia
                </h3>

                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="text-xs bg-gray-100 px-2 py-1 rounded">Suhu</span>
                    <span class="text-xs bg-gray-100 px-2 py-1 rounded">Massa</span>
                </div>

                <a href="#" class="text-[#E24A3B] font-semibold text-sm">
                    Lihat Detail →
                </a>

            </div>

        </div>


        <!-- CARD 4 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition overflow-hidden">

            <div class="relative h-40 flex items-center justify-center bg-gray-100">

                <img src="{{ asset('images/labs/kaliman.png') }}" class="h-16 object-contain">

                <span class="absolute top-3 right-3 bg-blue-600 text-white text-xs px-3 py-1 rounded-full">
                    Banten
                </span>

            </div>

            <div class="p-5">

                <h3 class="font-semibold text-[#004274] mb-2">
                    PT. KALIMAN
                </h3>

                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="text-xs bg-gray-100 px-2 py-1 rounded">Suhu</span>
                    <span class="text-xs bg-gray-100 px-2 py-1 rounded">Massa</span>
                </div>

                <a href="#" class="text-[#E24A3B] font-semibold text-sm">
                    Lihat Detail →
                </a>

            </div>

        </div>

    </div>

</section>

@endsection