@extends('layouts.app')

@section('content')

<div class="pt-24 bg-gray-50 min-h-screen">

    <!-- TITLE -->
    <div class="max-w-7xl mx-auto px-6 mb-10">
        <h1 class="text-3xl font-bold text-gray-800">
            Mitra Laboratorium
        </h1>
        <p class="text-gray-500 mt-2">
            Temukan laboratorium terbaik untuk kebutuhan kalibrasi Anda
        </p>
    </div>

    <!-- GRID -->
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        @forelse($labs as $lab)

        <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition overflow-hidden">

            <!-- IMAGE -->
            <div class="relative h-40 flex items-center justify-center bg-gray-100">

                <div class="h-24 w-full flex items-center justify-center">
                    <img src="{{ asset('images/mitra/' . $lab->logo) }}"
                        class="max-h-full max-w-[140px] object-contain">
                </div>

                <span class="absolute top-3 right-3 bg-blue-600 text-white text-xs px-3 py-1 rounded-full">
                    {{ $lab->city ?? '-' }}
                </span>

            </div>

            <!-- CONTENT -->
            <div class="p-5">

                <h3 class="font-semibold text-[#004274] mb-2">
                    {{ $lab->name }}
                </h3>

                <!-- JUMLAH SERVICE -->
                <p class="text-sm text-gray-500 mb-3">
                    {{ $lab->services_count }} layanan tersedia
                </p>

                <a href="{{ url('/mitra-lab/' . $lab->id) }}"
                    class="text-[#E24A3B] font-semibold text-sm">
                    Lihat Detail →
                </a>

            </div>

        </div>

        @empty

        <p class="text-center col-span-3 text-gray-500">
            Data lab belum tersedia
        </p>

        @endforelse

    </div>

    <!-- PAGINATION -->
    <div class="mt-10 flex justify-center">
        {{ $labs->links() }}
    </div>

</div>

@endsection