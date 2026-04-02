@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-20 text-center">
    <h1 class="text-4xl font-bold mb-2">Event & Seminar</h1>
    <p class="text-lg opacity-90">Temukan event terbaik seputar kalibrasi & industri</p>
</section>

<!-- EVENT LIST -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">

        <div class="grid md:grid-cols-3 gap-8">

            @foreach($events as $event)
            <div class="bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">

                <!-- IMAGE (POSTER STYLE) -->
                <div class="aspect-[4/5] overflow-hidden relative">
                    <img src="{{ asset('storage/' . $event->gambar) }}"
                        class="w-full h-full object-cover">

                    <!-- BADGE -->
                    <span class="absolute bottom-3 left-3 bg-orange-100 text-orange-600 text-xs px-3 py-1 rounded">
                        Event
                    </span>
                </div>

                <!-- CONTENT -->
                <div class="p-5">

                    <!-- TITLE -->
                    <h3 class="font-bold text-lg mb-3">
                        {{ $event->judul }}
                    </h3>

                    <!-- DATE & TIME -->
                    <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                        <span>📅 {{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}</span>
                        <span>⏰ 10:00 - 18:00</span>
                    </div>

                    <!-- LOCATION -->
                    <div class="text-sm text-gray-600 mb-4">
                        📍 {{ $event->lokasi ?? 'Online' }}
                    </div>

                    <!-- BUTTON -->
                    <a href="{{ route('event.show', $event->id) }}"
                        class="text-orange-500 font-semibold hover:underline">
                        Lihat Detail →
                    </a>

                </div>

            </div>
            @endforeach

        </div>

        <!-- PAGINATION -->
        <div class="mt-12">
            {{ $events->links() }}
        </div>

    </div>
</section>

@endsection