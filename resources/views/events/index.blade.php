@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="relative overflow-hidden bg-gradient-to-r from-[#003B66] to-[#0F6BAE] text-white">

    <!-- BACKGROUND EFFECT -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-300 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-24 text-center">

        <span class="inline-block bg-white/10 border border-white/20 px-4 py-2 rounded-full text-sm mb-6">
            SGS Industrial Event
        </span>

        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            Event & Seminar
            <span class="text-blue-200 block mt-2">
                Calibration & Industrial Insight
            </span>
        </h1>

        <p class="text-lg text-blue-100 max-w-3xl mx-auto leading-relaxed">
            Discover professional seminars, workshops, technical training,
            and industrial events related to calibration, laboratory systems,
            ISO standards, and industrial technology.
        </p>

    </div>

</section>


<!-- EVENT LIST -->
<section class="py-24 bg-[#F8FAFC]">

    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-14 gap-6">

            <div>

                <span class="text-[#0F6BAE] font-semibold uppercase tracking-wider">
                    Upcoming Events
                </span>

                <h2 class="text-4xl font-bold text-[#004274] mt-3">
                    Explore Our Latest Events
                </h2>

            </div>

            <!-- OPTIONAL SEARCH -->
            <div class="w-full md:w-80">

                <input type="text"
                    placeholder="Search event..."
                    class="w-full border border-gray-200 rounded-xl px-5 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm">

            </div>

        </div>


        <!-- GRID -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">

            @foreach($events as $event)

            <div
                class="group bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition duration-300">

                <!-- IMAGE -->
                <div class="relative overflow-hidden">

                    <div class="aspect-[4/5] overflow-hidden">

                        <img src="{{ asset('storage/' . $event->gambar) }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">

                    </div>

                    <!-- BADGE -->
                    <div class="absolute top-4 left-4">

                        <span class="bg-white/90 backdrop-blur text-[#004274] text-xs font-semibold px-4 py-2 rounded-full shadow">
                            Seminar Event
                        </span>

                    </div>

                </div>

                <!-- CONTENT -->
                <div class="p-6">

                    <!-- DATE -->
                    <div class="flex items-center gap-3 text-sm text-gray-500 mb-4">

                        <span class="flex items-center gap-1">
                            📅
                            {{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}
                        </span>

                        <span class="flex items-center gap-1">
                            ⏰
                            10:00 - 18:00
                        </span>

                    </div>

                    <!-- TITLE -->
                    <h3
                        class="text-2xl font-bold text-[#004274] leading-snug mb-4 line-clamp-2">

                        {{ $event->judul }}

                    </h3>

                    <!-- LOCATION -->
                    <div class="flex items-center gap-2 text-gray-600 mb-6">

                        <span>📍</span>

                        <span>
                            {{ $event->lokasi ?? 'Online Event' }}
                        </span>

                    </div>

                    <!-- BUTTON -->
                    <a href="{{ route('event.show', $event->id) }}"
                        class="inline-flex items-center gap-2 text-[#0F6BAE] font-semibold hover:gap-4 transition-all">

                        View Detail →

                    </a>

                </div>

            </div>

            @endforeach

        </div>


        <!-- EMPTY -->
        @if($events->count() == 0)

        <div class="text-center py-24">

            <div class="text-7xl mb-6">
                📅
            </div>

            <h3 class="text-3xl font-bold text-[#004274] mb-4">
                No Events Available
            </h3>

            <p class="text-gray-600 max-w-xl mx-auto">
                There are currently no upcoming events or seminars available.
                Please check again later.
            </p>

        </div>

        @endif


        <!-- PAGINATION -->
        <div class="mt-20">

            {{ $events->links() }}

        </div>

    </div>

</section>


<!-- CTA -->
<section class="py-24 bg-gradient-to-r from-[#003B66] to-[#0F6BAE] text-white">

    <div class="max-w-5xl mx-auto px-6 text-center">

        <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
            Want To Collaborate With SGS Events?
        </h2>

        <p class="text-blue-100 text-lg leading-relaxed mb-10 max-w-3xl mx-auto">
            Collaborate with SGS for seminars, workshops, technical training,
            and industrial events to improve competence and industrial insight.
        </p>

        <div class="flex flex-col sm:flex-row gap-5 justify-center">

            <a href="https://wa.me/628xxxxxxxxxx"
                class="bg-white text-[#004274] px-8 py-4 rounded-xl font-semibold hover:bg-blue-50 transition">

                Contact via WhatsApp

            </a>

            <a href="{{ route('event.create') }}"
                class="border border-white/30 px-8 py-4 rounded-xl font-semibold hover:bg-white/10 transition">

                Create Event

            </a>

        </div>

    </div>

</section>

@endsection