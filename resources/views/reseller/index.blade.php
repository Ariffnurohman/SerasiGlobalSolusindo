@extends('layouts.app')

@section('content')

<!-- HERO -->
<section
    class="relative overflow-hidden bg-gradient-to-r from-[#003B66] to-[#0F6BAE] text-white">

    <!-- BACKGROUND -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-300 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-14 items-center">

        <!-- LEFT -->
        <div>

            <span class="inline-block bg-white/10 border border-white/20 px-4 py-2 rounded-full text-sm mb-6">
                SGS Official Partner Program
            </span>

            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                Become Our
                <span class="text-blue-200 block mt-2">
                    Reseller Partner
                </span>
            </h1>

            <p class="text-lg text-blue-100 leading-relaxed mb-8 max-w-2xl">
                Expand your business opportunities with SGS Calibration services.
                Join our reseller partnership program and gain access to professional
                calibration, consultancy, and industrial laboratory services.
            </p>

            <!-- BUTTON -->
            <div class="flex flex-col sm:flex-row gap-4">

                <a href="#register"
                    class="bg-white text-[#004274] px-8 py-4 rounded-xl font-semibold hover:bg-blue-50 transition text-center">

                    Join Now

                </a>

                <a href="#benefit"
                    class="border border-white/30 px-8 py-4 rounded-xl font-semibold hover:bg-white/10 transition text-center">

                    Learn More

                </a>

            </div>

            <!-- STATS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">

                <div>
                    <h3 class="text-3xl font-bold">100+</h3>
                    <p class="text-blue-100 text-sm mt-1">Partner Network</p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold">24/7</h3>
                    <p class="text-blue-100 text-sm mt-1">Support Team</p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold">ISO</h3>
                    <p class="text-blue-100 text-sm mt-1">Calibration Services</p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold">Trusted</h3>
                    <p class="text-blue-100 text-sm mt-1">Industrial Partner</p>
                </div>

            </div>

        </div>

        <!-- RIGHT -->
        <div>

            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-3xl p-8 shadow-2xl">

                <img src="{{ asset('images/reseller/reseller-hero.png') }}"
                    alt="Reseller SGS"
                    class="w-full object-contain rounded-2xl">

            </div>

        </div>

    </div>

</section>


<!-- BENEFIT -->
<section id="benefit" class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="text-center max-w-3xl mx-auto mb-16">

            <span class="text-[#0F6BAE] font-semibold uppercase tracking-wider">
                Partnership Benefits
            </span>

            <h2 class="text-4xl font-bold text-[#004274] mt-4 mb-6">
                Why Join SGS Reseller Program?
            </h2>

            <p class="text-gray-600 leading-relaxed">
                We provide a professional reseller ecosystem with technical support,
                attractive commissions, and trusted industrial calibration services.
            </p>

        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- CARD -->
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl transition">

                <div class="w-14 h-14 bg-blue-100 text-[#0F6BAE] rounded-xl flex items-center justify-center mb-6 text-2xl">
                    💰
                </div>

                <h3 class="text-xl font-semibold text-[#004274] mb-4">
                    Attractive Commission
                </h3>

                <p class="text-gray-600 leading-relaxed text-sm">
                    Earn competitive commissions from every successful project and service transaction.
                </p>

            </div>

            <!-- CARD -->
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl transition">

                <div class="w-14 h-14 bg-blue-100 text-[#0F6BAE] rounded-xl flex items-center justify-center mb-6 text-2xl">
                    📦
                </div>

                <h3 class="text-xl font-semibold text-[#004274] mb-4">
                    Complete Services
                </h3>

                <p class="text-gray-600 leading-relaxed text-sm">
                    Access a wide range of calibration, consultancy, and laboratory services.
                </p>

            </div>

            <!-- CARD -->
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl transition">

                <div class="w-14 h-14 bg-blue-100 text-[#0F6BAE] rounded-xl flex items-center justify-center mb-6 text-2xl">
                    🤝
                </div>

                <h3 class="text-xl font-semibold text-[#004274] mb-4">
                    Technical Support
                </h3>

                <p class="text-gray-600 leading-relaxed text-sm">
                    Supported by professional technical and operational teams for better collaboration.
                </p>

            </div>

            <!-- CARD -->
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl transition">

                <div class="w-14 h-14 bg-blue-100 text-[#0F6BAE] rounded-xl flex items-center justify-center mb-6 text-2xl">
                    🚀
                </div>

                <h3 class="text-xl font-semibold text-[#004274] mb-4">
                    Business Growth
                </h3>

                <p class="text-gray-600 leading-relaxed text-sm">
                    Expand your industrial network and increase your business opportunities.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- HOW TO JOIN -->
<section class="py-24 bg-[#F8FAFC]">

    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="text-center max-w-3xl mx-auto mb-16">

            <span class="text-[#0F6BAE] font-semibold uppercase tracking-wider">
                Easy Registration
            </span>

            <h2 class="text-4xl font-bold text-[#004274] mt-4 mb-6">
                How To Become a Reseller
            </h2>

        </div>

        <!-- STEP -->
        <div class="grid md:grid-cols-4 gap-8 text-center">

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">

                <div class="text-5xl mb-5">1️⃣</div>

                <h3 class="font-semibold text-[#004274] text-xl mb-3">
                    Register
                </h3>

                <p class="text-gray-600 text-sm">
                    Fill in the reseller registration form completely.
                </p>

            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">

                <div class="text-5xl mb-5">2️⃣</div>

                <h3 class="font-semibold text-[#004274] text-xl mb-3">
                    Verification
                </h3>

                <p class="text-gray-600 text-sm">
                    Our team will review and verify your application.
                </p>

            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">

                <div class="text-5xl mb-5">3️⃣</div>

                <h3 class="font-semibold text-[#004274] text-xl mb-3">
                    Partnership Access
                </h3>

                <p class="text-gray-600 text-sm">
                    Get reseller access and partnership information.
                </p>

            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">

                <div class="text-5xl mb-5">4️⃣</div>

                <h3 class="font-semibold text-[#004274] text-xl mb-3">
                    Start Selling
                </h3>

                <p class="text-gray-600 text-sm">
                    Start offering SGS services to your clients and network.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- FORM -->
<section id="register" class="py-24 bg-white">

    <div class="max-w-4xl mx-auto px-6">

        <!-- HEADER -->
        <div class="text-center mb-12">

            <span class="text-[#0F6BAE] font-semibold uppercase tracking-wider">
                Join Partnership
            </span>

            <h2 class="text-4xl font-bold text-[#004274] mt-4 mb-6">
                Reseller Registration Form
            </h2>

            <p class="text-gray-600 max-w-2xl mx-auto">
                Complete the form below and our team will contact you for further partnership discussion.
            </p>

        </div>

        <!-- FORM -->
        <form class="bg-gray-50 p-8 md:p-12 rounded-3xl shadow-sm border border-gray-100 space-y-6">

            <div class="grid md:grid-cols-2 gap-6">

                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Full Name
                    </label>

                    <input type="text"
                        placeholder="Enter your full name"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Email Address
                    </label>

                    <input type="email"
                        placeholder="Enter your email"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

            </div>

            <div class="grid md:grid-cols-2 gap-6">

                <div>
                    <label class="block text-sm font-semibold mb-2">
                        WhatsApp Number
                    </label>

                    <input type="text"
                        placeholder="08xxxxxxxxxx"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Company Name
                    </label>

                    <input type="text"
                        placeholder="Optional"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">
                    Address
                </label>

                <textarea rows="5"
                    placeholder="Enter your address"
                    class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <!-- BUTTON -->
            <button
                class="w-full bg-gradient-to-r from-[#003B66] to-[#0F6BAE] text-white py-4 rounded-xl font-semibold hover:opacity-90 transition">

                Register as Reseller

            </button>

        </form>

    </div>

</section>

@endsection