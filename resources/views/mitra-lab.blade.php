@extends('layouts.app')

@section('content')

<section class="bg-[#F8FAFC] py-16">

    <!-- HEADER -->
    <div class="max-w-7xl mx-auto px-6 text-center mb-12">

        <h1 class="text-4xl font-bold text-[#004274] mb-4">
            Mitra Laboratorium
        </h1>

        <p class="text-gray-600 max-w-3xl mx-auto">
            Temukan mitra laboratorium kalibrasi terpercaya untuk kebutuhan industri Anda.
        </p>

    </div>

    <!-- GRID -->
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 lg:grid-cols-4 gap-8">

        @forelse($labs as $lab)
        <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition overflow-hidden">

            <!-- LOGO -->
            <div class="relative h-40 flex items-center justify-center bg-gray-100">

                <img src="{{ asset('images/mitra/' . ($lab->logo ?? 'default.png')) }}"
                     class="h-20 object-contain">

                <span class="absolute top-3 right-3 bg-blue-600 text-white text-xs px-3 py-1 rounded-full">
                    {{ $lab->city }}
                </span>

            </div>

            <!-- CONTENT -->
            <div class="p-5">

                <h3 class="font-semibold text-[#004274] mb-3">
                    {{ $lab->name }}
                </h3>

                <!-- LAYANAN -->
                <div class="flex flex-wrap gap-2 mb-4">

                    @if($lab->layanan)

                        @foreach(explode(',', $lab->layanan) as $item)
                            <span class="text-xs bg-blue-50 text-blue-600 px-3 py-1 rounded-full">
                                {{ trim($item) }}
                            </span>
                        @endforeach

                    @else

                        <span class="text-xs text-gray-400">
                            Tidak ada layanan
                        </span>

                    @endif

                </div>

                <!-- STATUS -->
                <div class="flex items-center justify-between">

                    @if($lab->is_verified)
                        <span class="text-xs text-green-600 font-semibold">
                            ✔ Terverifikasi
                        </span>
                    @else
                        <span class="text-xs text-yellow-600 font-semibold">
                            ● Belum Verifikasi
                        </span>
                    @endif

                    <a href="#" class="text-[#E24A3B] font-semibold text-sm hover:underline">
                        Detail →
                    </a>

                </div>

            </div>

        </div>
        @empty

        <!-- EMPTY STATE -->
        <div class="col-span-4 text-center py-20">

            <p class="text-gray-500 text-lg">
                Belum ada mitra laboratorium tersedia
            </p>

        </div>

        @endforelse

    </div>

</section>

@endsection