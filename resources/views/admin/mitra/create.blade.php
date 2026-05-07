@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto py-12 px-6">

    <h1 class="text-2xl font-bold mb-6 text-[#004274]">
        Tambah Mitra Lab
    </h1>

    @if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('mitra.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf

        <!-- Nama -->
        <div>
            <label class="block mb-1 font-semibold">Nama Lab</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
        </div>

        <!-- Kota -->
        <div>
            <label class="block mb-1 font-semibold">Kota</label>
            <input type="text" name="city" class="w-full border rounded px-3 py-2" required>
        </div>


        <!-- ABOUT -->
        <div>
            <label class="block mb-1 font-semibold">
                About Laboratorium
            </label>

            <textarea
                name="about"
                rows="5"
                class="w-full border rounded px-3 py-2"
                placeholder="Deskripsi laboratorium..."></textarea>
        </div>

        <!-- SCOPE OF CALIBRATION -->
        <div>
            <label class="block mb-1 font-semibold">
                Scope Of Calibration
            </label>

            <textarea
                name="scope_of_calibration"
                rows="5"
                class="w-full border rounded px-3 py-2"
                placeholder="Contoh: Torque, Massa, Suhu, Tekanan..."></textarea>
        </div>

        <!-- Logo -->
        <div>
            <label class="block mb-1 font-semibold">Logo</label>
            <input type="file" name="logo" class="w-full">
        </div>

        <!-- Status -->
        <div class="flex gap-6">
            <label>
                <input type="checkbox" name="is_active" checked>
                Aktif
            </label>

            <label>
                <input type="checkbox" name="is_verified" checked>
                Verified
            </label>
        </div>

        <!-- Submit -->
        <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
            Simpan
        </button>

    </form>

</div>

@endsection