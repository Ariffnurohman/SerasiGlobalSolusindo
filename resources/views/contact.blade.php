@extends('layouts.app')

@section('content')

<!-- ================= HERO ================= -->
<section class="relative bg-gradient-to-r from-[#07152d] to-[#0b2b57] text-white py-28 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <div class="max-w-3xl">

            <span class="bg-blue-500/20 text-blue-300 px-4 py-2 rounded-full text-sm inline-block mb-6">
                PT Serasi Global Solusindo
            </span>

            <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                Hubungi Kami
            </h1>

            <p class="text-lg text-white/80 leading-relaxed">
                Tim kami siap membantu kebutuhan kalibrasi, training,
                consultant, maupun kerja sama bisnis laboratorium Anda.
            </p>

        </div>

    </div>

    <!-- BLUR EFFECT -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500/20 blur-3xl rounded-full"></div>

</section>


<!-- ================= CONTACT INFO ================= -->
<section class="bg-white py-20">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-3 gap-8">

            <!-- EMAIL -->
            <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:shadow-xl transition duration-300">

                <div class="w-16 h-16 rounded-2xl bg-blue-100 flex items-center justify-center mb-6">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 text-blue-600"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8m-18 8h18a2 2 0 002-2V8a2 2 0 00-2-2H3a2 2 0 00-2 2v6a2 2 0 002 2z" />

                    </svg>

                </div>

                <h3 class="text-2xl font-bold text-gray-800 mb-4">
                    Email
                </h3>

                <p class="text-gray-600 leading-relaxed mb-4">
                    Hubungi kami melalui email resmi perusahaan.
                </p>

                <a href="mailto:ptserasiglobalsolusindo@gmail.com"
                    class="text-blue-600 font-semibold hover:underline break-all">

                    ptserasiglobalsolusindo@gmail.com

                </a>

            </div>


            <!-- WHATSAPP -->
            <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:shadow-xl transition duration-300">

                <div class="w-16 h-16 rounded-2xl bg-green-100 flex items-center justify-center mb-6">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 text-green-600"
                        fill="currentColor"
                        viewBox="0 0 24 24">

                        <path d="M20.52 3.48A11.82 11.82 0 0012.07 0C5.53 0 .2 5.32.2 11.87c0 2.09.55 4.14 1.6 5.94L0 24l6.36-1.67a11.84 11.84 0 005.71 1.46h.01c6.54 0 11.87-5.32 11.87-11.87 0-3.17-1.24-6.15-3.43-8.44z" />

                    </svg>

                </div>

                <h3 class="text-2xl font-bold text-gray-800 mb-4">
                    WhatsApp
                </h3>

                <p class="text-gray-600 leading-relaxed mb-4">
                    Konsultasi cepat dengan tim SGS Kalibrasi.
                </p>

                <a href="https://wa.me/628111365636"
                    target="_blank"
                    class="text-green-600 font-semibold hover:underline">

                    +62 811-1365-636

                </a>

            </div>


            <!-- WEBSITE -->
            <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:shadow-xl transition duration-300">

                <div class="w-16 h-16 rounded-2xl bg-orange-100 flex items-center justify-center mb-6">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 text-orange-500"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M21 12.79A9 9 0 1111.21 3" />

                    </svg>

                </div>

                <h3 class="text-2xl font-bold text-gray-800 mb-4">
                    Website
                </h3>

                <p class="text-gray-600 leading-relaxed mb-4">
                    Kunjungi website resmi SGS Kalibrasi.
                </p>

                <a href="https://www.sgskalibrasi.com"
                    target="_blank"
                    class="text-orange-500 font-semibold hover:underline">

                    www.sgskalibrasi.com

                </a>

            </div>

        </div>

    </div>

</section>


<!-- ================= FORM + BUSINESS CENTER ================= -->
<section class="bg-gray-50 py-20">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-14 items-start">

            <!-- FORM -->
            <div class="bg-white rounded-3xl p-10 shadow-lg border border-gray-100">

                <div class="mb-10">

                    <span class="text-blue-600 font-semibold uppercase tracking-wider text-sm">
                        Contact Form
                    </span>

                    <h2 class="text-4xl font-bold text-gray-800 mt-3 mb-4">
                        Form Laporan & Konsultasi
                    </h2>

                    <p class="text-gray-500 leading-relaxed">
                        Kirim pertanyaan, laporan, atau kebutuhan layanan
                        Anda melalui form berikut.
                    </p>

                </div>

                <form class="space-y-6">

                    <!-- NAMA -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Nama Lengkap
                        </label>

                        <input type="text"
                            placeholder="Masukkan nama lengkap"
                            class="w-full rounded-2xl border border-gray-200 px-5 py-4 focus:ring-2 focus:ring-blue-500 outline-none transition">
                    </div>

                    <!-- EMAIL -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Email
                        </label>

                        <input type="email"
                            placeholder="Masukkan email"
                            class="w-full rounded-2xl border border-gray-200 px-5 py-4 focus:ring-2 focus:ring-blue-500 outline-none transition">
                    </div>

                    <!-- TELEPON -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Nomor Telepon
                        </label>

                        <input type="text"
                            placeholder="Masukkan nomor telepon"
                            class="w-full rounded-2xl border border-gray-200 px-5 py-4 focus:ring-2 focus:ring-blue-500 outline-none transition">
                    </div>

                    <!-- LAYANAN -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Jenis Layanan
                        </label>

                        <select class="w-full rounded-2xl border border-gray-200 px-5 py-4 focus:ring-2 focus:ring-blue-500 outline-none transition">

                            <option>Pilih layanan</option>
                            <option>Kalibrasi</option>
                            <option>Consultant</option>
                            <option>Training</option>
                            <option>Kerja Sama Lab</option>

                        </select>
                    </div>

                    <!-- PESAN -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Pesan / Laporan
                        </label>

                        <textarea rows="6"
                            placeholder="Tulis kebutuhan atau laporan Anda"
                            class="w-full rounded-2xl border border-gray-200 px-5 py-4 focus:ring-2 focus:ring-blue-500 outline-none transition"></textarea>
                    </div>

                    <!-- BUTTON -->
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 rounded-2xl transition duration-300 shadow-lg hover:shadow-xl">

                        Kirim Sekarang

                    </button>

                </form>

            </div>


            <!-- BUSINESS CENTER -->
            <div>

                <div class="mb-10">

                    <span class="text-blue-600 font-semibold uppercase tracking-wider text-sm">
                        Business Center
                    </span>

                    <h2 class="text-4xl font-bold text-gray-800 mt-3 mb-4">
                        Kantor & Lokasi Kami
                    </h2>

                    <p class="text-gray-500 leading-relaxed">
                        Temukan lokasi kantor PT Serasi Global Solusindo
                        dan hubungi tim kami secara langsung.
                    </p>

                </div>

                <!-- OFFICE CARD -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100">

                    <!-- MAP -->
                    <iframe
                        src="https://www.google.com/maps?q=PT+Serasi+Global+Solusindo&output=embed"
                        width="100%"
                        height="320"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>

                    <!-- INFO -->
                    <div class="p-8">

                        <h3 class="text-2xl font-bold text-gray-800 mb-5">
                            PT Serasi Global Solusindo
                        </h3>

                        <div class="space-y-5">

                            <!-- ADDRESS -->
                            <div class="flex gap-4 items-start">

                                <div class="w-12 h-12 rounded-2xl bg-blue-100 flex items-center justify-center shrink-0">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 text-blue-600"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">

                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.243-4.243a8 8 0 1111.313 0z" />

                                    </svg>

                                </div>

                                <div>

                                    <h4 class="font-semibold text-gray-800 mb-1">
                                        Alamat Kantor
                                    </h4>

                                    <p class="text-gray-600 leading-relaxed text-sm">
                                        Graha Segovia S.27.6, Cikar,
                                        Kec. Panongan, Kabupaten Tangerang,
                                        Banten 15710
                                    </p>

                                </div>

                            </div>

                            <!-- JAM OPERASIONAL -->
                            <div class="flex gap-4 items-start">

                                <div class="w-12 h-12 rounded-2xl bg-orange-100 flex items-center justify-center shrink-0">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 text-orange-500"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">

                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />

                                    </svg>

                                </div>

                                <div>

                                    <h4 class="font-semibold text-gray-800 mb-1">
                                        Jam Operasional
                                    </h4>

                                    <p class="text-gray-600 text-sm">
                                        Senin - Jumat : 08:00 - 17:00 WIB
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
@endsection
