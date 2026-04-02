@extends('layouts.app')

@section('content')

<!-- HERO -->
<section 
    class="relative h-[450px] flex items-center justify-center text-white bg-cover bg-center"
    style="background-image: url('{{ asset('images/banner1.png') }}')">

    <!-- overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-blue-700/60"></div>

    <!-- content -->
    <div class="relative text-center max-w-3xl px-6">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            Program Reseller
        </h1>
        <p class="text-lg opacity-90">
            Gabung menjadi mitra kami dan dapatkan keuntungan dari layanan kalibrasi & lab
        </p>
    </div>

</section>

<!-- BENEFIT -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Keuntungan Menjadi Reseller</h2>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-semibold text-xl mb-3">💰 Komisi Menarik</h3>
                <p>Dapatkan komisi dari setiap layanan yang berhasil Anda jual.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-semibold text-xl mb-3">📦 Banyak Layanan</h3>
                <p>Kami menyediakan berbagai layanan kalibrasi & pengujian.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-semibold text-xl mb-3">🤝 Support Tim</h3>
                <p>Tim kami siap membantu Anda dalam proses penjualan.</p>
            </div>

        </div>
    </div>
</section>

<!-- CARA DAFTAR -->
<section class="py-16">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Cara Bergabung</h2>

        <div class="grid md:grid-cols-4 gap-6 text-center">

            <div>
                <div class="text-3xl mb-2">1️⃣</div>
                <p>Daftar melalui form</p>
            </div>

            <div>
                <div class="text-3xl mb-2">2️⃣</div>
                <p>Verifikasi data</p>
            </div>

            <div>
                <div class="text-3xl mb-2">3️⃣</div>
                <p>Dapatkan akses</p>
            </div>

            <div>
                <div class="text-3xl mb-2">4️⃣</div>
                <p>Mulai jual layanan</p>
            </div>

        </div>
    </div>
</section>

<!-- FORM -->
<section class="bg-gray-100 py-16">
    <div class="max-w-3xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8">Daftar Reseller</h2>

        <form class="bg-white p-8 rounded-xl shadow space-y-4">

            <input type="text" placeholder="Nama Lengkap"
                class="w-full border p-3 rounded">

            <input type="email" placeholder="Email"
                class="w-full border p-3 rounded">

            <input type="text" placeholder="No WhatsApp"
                class="w-full border p-3 rounded">

            <input type="text" placeholder="Nama Perusahaan (Opsional)"
                class="w-full border p-3 rounded">

            <textarea placeholder="Alamat"
                class="w-full border p-3 rounded"></textarea>

            <button class="w-full bg-blue-600 text-white py-3 rounded hover:bg-blue-700">
                Daftar Sekarang
            </button>

        </form>
    </div>
</section>

@endsection