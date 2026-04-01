@extends('layouts.app')

@section('content')

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
                <img src="{{ asset('images/layanan/kalibrasi.jpg') }}"
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
                    'Kalibrasi Dimensi',
                    'Kalibrasi Massa',
                    'Kalibrasi Tekanan',
                    'Kalibrasi Temperatur',
                    'Kalibrasi Volume',
                    'Kalibrasi Elektrikal',
                    'Kalibrasi Waktu',
                    'Kalibrasi Flow'
                ] as $item)

                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg hover:-translate-y-1 transition">

                    <div class="text-3xl mb-3">⚙️</div>

                    <h3 class="font-semibold text-lg text-gray-800">
                        {{ $item }}
                    </h3>

                    <p class="text-sm text-gray-500 mt-2">
                        Layanan kalibrasi akurat dan terpercaya
                    </p>

                    <a href="#" class="inline-block mt-3 text-blue-600 text-sm font-medium">
                        Lihat Detail →
                    </a>

                </div>

                @endforeach

            </div>

        </div>
    </section>

    <!-- KEUNGGULAN -->
    <section class="bg-white py-20">
        <div class="px-6 md:px-12 lg:px-20 text-center">

            <h2 class="text-3xl font-bold mb-10">
                Kenapa Pilih Kami?
            </h2>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="p-6">
                    <div class="text-4xl mb-3">🎯</div>
                    <h3 class="font-semibold">Akurat</h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Standar ISO internasional
                    </p>
                </div>

                <div class="p-6">
                    <div class="text-4xl mb-3">⚡</div>
                    <h3 class="font-semibold">Cepat</h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Proses efisien & tepat waktu
                    </p>
                </div>

                <div class="p-6">
                    <div class="text-4xl mb-3">👨‍🔬</div>
                    <h3 class="font-semibold">Profesional</h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Dikerjakan oleh ahli
                    </p>
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