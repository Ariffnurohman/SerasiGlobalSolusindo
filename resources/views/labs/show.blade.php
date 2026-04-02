@extends('layouts.app')

@section('content')

<div class="pt-24 bg-gray-50 min-h-screen">

    <!-- HERO -->
    <div class="bg-gradient-to-r from-[#004274] to-[#0F6BAE] text-white py-16">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center gap-8">

            <!-- LOGO -->
            <div class="bg-white p-6 rounded-2xl shadow-lg">
                <img src="{{ asset('images/mitra/' . $lab->logo) }}"
                     class="h-24 object-contain">
            </div>

            <!-- INFO -->
            <div>
                <h1 class="text-3xl md:text-4xl font-bold mb-3">
                    {{ $lab->name }}
                </h1>

                <p class="text-lg opacity-90">
                    📍 {{ $lab->city }}
                </p>

                <div class="mt-4 flex gap-3">
                    <span class="bg-white/20 px-3 py-1 rounded-full text-sm">
                        Terverifikasi
                    </span>
                    <span class="bg-white/20 px-3 py-1 rounded-full text-sm">
                        Profesional Lab
                    </span>
                </div>
            </div>

        </div>
    </div>

    <!-- CONTENT -->
    <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-10">

        <!-- LEFT -->
        <div class="md:col-span-2 space-y-8">

            <!-- DESKRIPSI -->
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h2 class="text-xl font-semibold mb-3 text-[#004274]">
                    Tentang Laboratorium
                </h2>

                <p class="text-gray-600 leading-relaxed">
                    {{ $lab->description ?? 'Laboratorium ini menyediakan layanan kalibrasi dan pengujian profesional dengan standar terbaik.' }}
                </p>
            </div>

            <!-- LAYANAN -->
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h2 class="text-xl font-semibold mb-4 text-[#004274]">
                    Layanan
                </h2>

                <div class="flex flex-wrap gap-3">
                    @foreach(explode(',', $lab->layanan) as $item)
                        <span class="bg-gray-100 px-4 py-2 rounded-full text-sm">
                            {{ $item }}
                        </span>
                    @endforeach
                </div>
            </div>

        </div>

        <!-- RIGHT -->
        <div class="space-y-6">

            <!-- KONTAK -->
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h2 class="text-lg font-semibold mb-4 text-[#004274]">
                    Kontak
                </h2>

                <p class="text-gray-600 mb-2">
                    📍 {{ $lab->city }}
                </p>

                <p class="text-gray-600 mb-2">
                    📞 {{ $lab->phone ?? '-' }}
                </p>

                <p class="text-gray-600 mb-4">
                    ✉️ {{ $lab->email ?? '-' }}
                </p>

                <a href="#"
                   class="block text-center bg-[#E24A3B] text-white py-2 rounded-lg hover:bg-red-600 transition">
                   Hubungi Sekarang
                </a>
            </div>

            <!-- CTA -->
            <div class="bg-gradient-to-r from-[#004274] to-[#0F6BAE] text-white p-6 rounded-xl shadow">
                <h3 class="font-semibold mb-2">
                    Butuh Kalibrasi Cepat?
                </h3>
                <p class="text-sm opacity-90 mb-4">
                    Konsultasikan kebutuhan Anda sekarang
                </p>

                <a href="#"
                   class="block text-center bg-white text-[#004274] py-2 rounded-lg font-semibold">
                   Konsultasi Gratis
                </a>
            </div>

        </div>

    </div>

</div>

@endsection