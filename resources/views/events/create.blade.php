@extends('layouts.app')

@section('content')

<section class="max-w-3xl mx-auto py-16 px-6">

    <h1 class="text-3xl font-bold mb-6">Tambah Event</h1>

    <form action="/event/store" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <input type="text" name="judul" placeholder="Judul Event"
            class="w-full border p-3 rounded">

        <textarea name="deskripsi" placeholder="Deskripsi"
            class="w-full border p-3 rounded"></textarea>

        <input type="date" name="tanggal"
            class="w-full border p-3 rounded">

        <input type="text" name="lokasi" placeholder="Lokasi / Online"
            class="w-full border p-3 rounded">

        <input type="file" name="gambar"
            class="w-full border p-3 rounded">

        <button class="bg-blue-600 text-white px-6 py-3 rounded">
            Simpan Event
        </button>

    </form>

</section>

@endsection