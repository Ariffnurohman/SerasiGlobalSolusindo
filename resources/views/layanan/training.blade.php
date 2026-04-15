@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-indigo-700 to-blue-700 text-white py-24 text-center">
    <div class="max-w-5xl mx-auto px-6">
        <h1 class="text-4xl font-bold mb-4">
            Training & Pelatihan Kalibrasi
        </h1>
        <p class="text-lg">
            Tingkatkan kompetensi tim Anda dengan pelatihan profesional dari tenaga ahli berpengalaman
        </p>
    </div>
</section>

<!-- PROGRAM -->
<section class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center mb-14">
            Program Training
        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white rounded-xl shadow p-6 hover:shadow-xl transition">
                <h3 class="text-xl font-semibold mb-2">Kalibrasi Dasar</h3>
                <p class="text-gray-600 mb-3">
                    Pelatihan dasar penggunaan alat ukur dan kalibrasi.
                </p>
                <span class="text-blue-600 font-semibold">Durasi: 2 Hari</span>
            </div>

            <div class="bg-white rounded-xl shadow p-6 hover:shadow-xl transition">
                <h3 class="text-xl font-semibold mb-2">ISO 17025</h3>
                <p class="text-gray-600 mb-3">
                    Pemahaman standar ISO laboratorium.
                </p>
                <span class="text-blue-600 font-semibold">Durasi: 3 Hari</span>
            </div>

            <div class="bg-white rounded-xl shadow p-6 hover:shadow-xl transition">
                <h3 class="text-xl font-semibold mb-2">Teknisi Kalibrasi</h3>
                <p class="text-gray-600 mb-3">
                    Training teknis untuk teknisi profesional.
                </p>
                <span class="text-blue-600 font-semibold">Durasi: 5 Hari</span>
            </div>

        </div>

    </div>
</section>

<!-- JADWAL -->
<section class="py-20">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center mb-14">
            Jadwal Training
        </h2>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-xl shadow">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="p-4 text-left">Program</th>
                        <th class="p-4 text-left">Tanggal</th>
                        <th class="p-4 text-left">Lokasi</th>
                        <th class="p-4 text-left">Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="border-b">
                        <td class="p-4">Kalibrasi Dasar</td>
                        <td class="p-4">10 Mei 2026</td>
                        <td class="p-4">Jakarta</td>
                        <td class="p-4 text-green-600">Open</td>
                    </tr>

                    <tr>
                        <td class="p-4">ISO 17025</td>
                        <td class="p-4">20 Mei 2026</td>
                        <td class="p-4">Bandung</td>
                        <td class="p-4 text-green-600">Open</td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>
</section>

<!-- KEUNGGULAN -->
<section class="py-20 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

        <div>
            <h2 class="text-3xl font-bold mb-4">
                Kenapa Pilih Training Kami?
            </h2>

            <ul class="space-y-3 text-gray-600">
                <li>✔ Trainer berpengalaman</li>
                <li>✔ Sertifikat resmi</li>
                <li>✔ Praktik langsung</li>
                <li>✔ Materi up-to-date</li>
            </ul>
        </div>

        <div>
            <img src="https://via.placeholder.com/500x350"
                 class="rounded-xl shadow">
        </div>

    </div>
</section>

<!-- FORM -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700">
    <div class="max-w-4xl mx-auto px-6">

        <div class="bg-white rounded-2xl shadow-xl p-8">

            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
                Daftar Training
            </h2>

            <form action="#" method="POST" class="space-y-5">
                @csrf

                <input type="text" placeholder="Nama"
                    class="w-full p-3 rounded-lg border border-gray-300">

                <input type="email" placeholder="Email"
                    class="w-full p-3 rounded-lg border border-gray-300">

                <input type="text" placeholder="Perusahaan"
                    class="w-full p-3 rounded-lg border border-gray-300">

                <select class="w-full p-3 rounded-lg border border-gray-300">
                    <option>Pilih Program</option>
                    <option>Kalibrasi Dasar</option>
                    <option>ISO 17025</option>
                </select>

                <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold">
                    Daftar Sekarang
                </button>

            </form>

        </div>

    </div>
</section>

@endsection