@extends('layouts.app')

@section('content')

<section class="relative h-[500px] flex items-center justify-center text-white">

    <!-- BACKGROUND IMAGE -->
    <img src="{{ asset('storage/' . $event->gambar) }}"
         class="absolute inset-0 w-full h-full object-cover">

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-blue-800/80"></div>

    <!-- CONTENT -->
    <div class="relative text-center max-w-4xl px-6">

        <p class="text-sm mb-2 opacity-80">Event</p>

        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            {{ $event->judul }}
        </h1>

        <p class="text-sm md:text-base mb-6 opacity-90">
            {{ $event->deskripsi }}
        </p>

        <!-- INFO GRID -->
        <div class="grid md:grid-cols-2 gap-6 text-left mt-6">

            <div>
                <p class="text-sm opacity-70">📍 Lokasi</p>
                <p class="font-semibold">{{ $event->lokasi ?? 'Online' }}</p>
            </div>

            <div>
                <p class="text-sm opacity-70">📅 Tanggal</p>
                <p class="font-semibold">
                    {{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}
                </p>
            </div>

            <div>
                <p class="text-sm opacity-70">⏰ Waktu</p>
                <p class="font-semibold">10:00 - 18:00</p>
            </div>

            <div>
                <p class="text-sm opacity-70">🎫 Kategori</p>
                <p class="font-semibold">Public Training</p>
            </div>

        </div>

    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

        <!-- TEXT -->
        <div>
            <h2 class="text-3xl font-bold mb-4">
                Temui tim Serasi Global Solusindo untuk membantu bisnis Anda!
            </h2>

            <p class="text-gray-600 mb-6">
                {{ $event->deskripsi }}
            </p>

            <ul class="space-y-2 text-gray-700">
                <li>✔ Free Konsultasi</li>
                <li>✔ Bertemu langsung dengan ahli</li>
                <li>✔ Games & Doorprize menarik</li>
                <li>✔ Dan banyak lagi</li>
            </ul>

            <a href="#"
               class="inline-block mt-6 bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700">
               Daftar Sekarang
            </a>
        </div>

        <!-- IMAGE -->
        <div>
            <img src="{{ asset('storage/' . $event->gambar) }}"
                 class="rounded-xl shadow-lg">
        </div>

    </div>
</section>

@endsection