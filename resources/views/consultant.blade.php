@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="relative bg-gradient-to-r from-blue-700 to-indigo-800 text-white py-24">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

        <div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Jasa Konsultan Kalibrasi Profesional
            </h1>
            <p class="mb-6 text-lg">
                Solusi lengkap untuk audit, sertifikasi, dan peningkatan kualitas sistem kalibrasi perusahaan Anda.
            </p>

            <div class="flex gap-4">
                <a href="#form"
                   class="bg-white text-blue-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100">
                    Konsultasi Sekarang
                </a>

                <a href="https://wa.me/628xxxxxxxxxx"
                   class="border border-white px-6 py-3 rounded-lg hover:bg-white hover:text-blue-700 transition">
                    WhatsApp
                </a>
            </div>
        </div>

        <div>
            <img src="/images/consultant-hero.png" class="rounded-xl shadow-lg">
        </div>

    </div>
</section>

<!-- LAYANAN -->
<section class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center mb-14">
            Layanan Konsultan Kami
        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition">
                <div class="text-blue-600 text-3xl mb-4">📊</div>
                <h3 class="font-semibold text-xl mb-2">Audit Kalibrasi</h3>
                <p class="text-gray-600">Audit sistem kalibrasi internal & eksternal.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition">
                <div class="text-blue-600 text-3xl mb-4">📜</div>
                <h3 class="font-semibold text-xl mb-2">ISO 17025</h3>
                <p class="text-gray-600">Pendampingan sertifikasi ISO laboratorium.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition">
                <div class="text-blue-600 text-3xl mb-4">🎓</div>
                <h3 class="font-semibold text-xl mb-2">Training</h3>
                <p class="text-gray-600">Pelatihan teknisi kalibrasi profesional.</p>
            </div>

        </div>

    </div>
</section>

<!-- ALUR KERJA -->
<section class="py-20">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="text-3xl font-bold mb-14">Alur Konsultasi</h2>

        <div class="grid md:grid-cols-4 gap-8">

            <div>
                <div class="text-4xl mb-2">1️⃣</div>
                <p>Konsultasi Awal</p>
            </div>

            <div>
                <div class="text-4xl mb-2">2️⃣</div>
                <p>Analisa Kebutuhan</p>
            </div>

            <div>
                <div class="text-4xl mb-2">3️⃣</div>
                <p>Implementasi</p>
            </div>

            <div>
                <div class="text-4xl mb-2">4️⃣</div>
                <p>Evaluasi & Sertifikasi</p>
            </div>

        </div>

    </div>
</section>

<!-- TESTIMONI -->
<section class="py-20 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center mb-14">Testimoni Client</h2>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-gray-600 mb-4">
                    "Pelayanan sangat profesional dan membantu kami lolos audit ISO."
                </p>
                <h4 class="font-semibold">PT Industri Maju</h4>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-gray-600 mb-4">
                    "Konsultan sangat berpengalaman di bidang kalibrasi."
                </p>
                <h4 class="font-semibold">PT Teknologi Abadi</h4>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-gray-600 mb-4">
                    "Training sangat bermanfaat untuk tim kami."
                </p>
                <h4 class="font-semibold">CV Mitra Lab</h4>
            </div>

        </div>

    </div>
</section>

<!-- LOGO CLIENT -->
<section class="py-16">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="text-2xl font-bold mb-10">Dipercaya Oleh</h2>

        <div class="flex flex-wrap justify-center gap-10 opacity-70">
            <img src="/images/client1.png" class="h-10">
            <img src="/images/client2.png" class="h-10">
            <img src="/images/client3.png" class="h-10">
            <img src="/images/client4.png" class="h-10">
        </div>

    </div>
</section>

<!-- FORM -->
<section id="form" class="py-20 bg-blue-600 text-white">
    <div class="max-w-3xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center mb-10">
            Konsultasi Gratis
        </h2>

        <form action="/consultation" method="POST" class="space-y-4">
            @csrf

            <input type="text" name="nama" placeholder="Nama"
                class="w-full p-3 rounded text-black">

            <input type="email" name="email" placeholder="Email"
                class="w-full p-3 rounded text-black">

            <input type="text" name="perusahaan" placeholder="Perusahaan"
                class="w-full p-3 rounded text-black">

            <textarea name="pesan" placeholder="Kebutuhan Anda"
                class="w-full p-3 rounded text-black"></textarea>

            <button class="bg-white text-blue-600 px-6 py-3 rounded font-semibold w-full">
                Kirim Konsultasi
            </button>

        </form>

    </div>
</section>

@endsection