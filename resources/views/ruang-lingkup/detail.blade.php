@extends('layouts.app')

@section('content')

<div class="pt-24">

    <!-- HERO -->
    <section class="bg-gradient-to-r from-[#004274] to-[#005c99] text-white py-20">
        <div class="px-6 md:px-12 lg:px-20 grid md:grid-cols-2 gap-10 items-center">

            <div>
                <h1 class="text-4xl font-bold">
                    {{ $layanan['nama'] }}
                </h1>

                <p class="mt-4 text-gray-200">
                    {{ $layanan['deskripsi'] }}
                </p>

                <a href="#" class="inline-block mt-6 bg-white text-[#004274] px-6 py-3 rounded-xl font-semibold">
                    Konsultasi Sekarang
                </a>
            </div>

            <div>
                <img src="{{ asset('images/layanan/'.$layanan['gambar']) }}"
                     class="rounded-2xl shadow-2xl">
            </div>

        </div>
    </section>

    <!-- DETAIL -->
    <section class="py-20 bg-gray-50">
        <div class="px-6 md:px-12 lg:px-20">

            <h2 class="text-2xl font-bold mb-6">
                Detail Layanan
            </h2>

            <p class="text-gray-600 leading-relaxed">
                Layanan {{ $layanan['nama'] }} dilakukan oleh tenaga profesional
                dengan standar ISO dan alat yang telah terverifikasi.
            </p>

        </div>
    </section>

</div>

@endsection