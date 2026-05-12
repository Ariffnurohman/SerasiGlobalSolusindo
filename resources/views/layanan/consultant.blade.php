# Professional Calibration Consultancy Page (Laravel Blade)

```blade
@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="relative bg-gradient-to-r from-[#003B66] to-[#0F6BAE] text-white overflow-hidden">

    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-300 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-12 items-center">

        <!-- LEFT -->
        <div>

            <span class="inline-block bg-white/10 border border-white/20 px-4 py-2 rounded-full text-sm mb-6">
                SGS Professional Consultancy
            </span>

            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                Calibration Consultancy
                <span class="text-blue-200 block mt-2">
                    for Industrial Excellence
                </span>
            </h1>

            <p class="text-lg text-blue-100 leading-relaxed mb-8 max-w-2xl">
                Professional calibration consultancy services to support laboratory development,
                ISO/IEC 17025 implementation, uncertainty evaluation, metrology systems,
                and industrial compliance.
            </p>

            <!-- BUTTON -->
            <div class="flex flex-col sm:flex-row gap-4">

                <a href="#consultation"
                    class="bg-white text-[#004274] px-8 py-4 rounded-xl font-semibold hover:bg-blue-50 transition text-center">
                    Free Consultation
                </a>

                <a href="#services"
                    class="border border-white/30 px-8 py-4 rounded-xl font-semibold hover:bg-white/10 transition text-center">
                    Explore Services
                </a>

            </div>

            <!-- STATS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">

                <div>
                    <h3 class="text-3xl font-bold">100+</h3>
                    <p class="text-blue-100 text-sm mt-1">Industrial Clients</p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold">50+</h3>
                    <p class="text-blue-100 text-sm mt-1">Laboratory Projects</p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold">ISO</h3>
                    <p class="text-blue-100 text-sm mt-1">17025 Support</p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold">24/7</h3>
                    <p class="text-blue-100 text-sm mt-1">Technical Support</p>
                </div>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="relative">

            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-3xl p-8 shadow-2xl">

                <img src="{{ asset('images/consultant/calibration-consulting.png') }}"
                    alt="Calibration Consultancy"
                    class="w-full object-contain rounded-2xl">

            </div>

        </div>

    </div>

</section>


<!-- SERVICES -->
<section id="services" class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="text-center max-w-3xl mx-auto mb-16">

            <span class="text-[#0F6BAE] font-semibold uppercase tracking-wider">
                Our Expertise
            </span>

            <h2 class="text-4xl font-bold text-[#004274] mt-4 mb-6">
                Comprehensive Calibration Consultancy Services
            </h2>

            <p class="text-gray-600 leading-relaxed">
                We provide strategic and technical consultancy solutions for laboratories,
                manufacturing industries, healthcare facilities, and quality management systems.
            </p>

        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- ITEM -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition border border-gray-100">

                <div class="w-14 h-14 bg-blue-100 text-[#0F6BAE] rounded-xl flex items-center justify-center mb-6 text-2xl">
                    ⚙️
                </div>

                <h3 class="text-xl font-semibold text-[#004274] mb-4">
                    ISO/IEC 17025 Consultancy
                </h3>

                <p class="text-gray-600 leading-relaxed text-sm">
                    Assistance for accreditation preparation, documentation,
                    implementation, and internal audit systems.
                </p>

            </div>

            <!-- ITEM -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition border border-gray-100">

                <div class="w-14 h-14 bg-blue-100 text-[#0F6BAE] rounded-xl flex items-center justify-center mb-6 text-2xl">
                    📊
                </div>

                <h3 class="text-xl font-semibold text-[#004274] mb-4">
                    Measurement Uncertainty
                </h3>

                <p class="text-gray-600 leading-relaxed text-sm">
                    Technical guidance for uncertainty evaluation,
                    calculation methods, and traceability systems.
                </p>

            </div>

            <!-- ITEM -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition border border-gray-100">

                <div class="w-14 h-14 bg-blue-100 text-[#0F6BAE] rounded-xl flex items-center justify-center mb-6 text-2xl">
                    🧪
                </div>

                <h3 class="text-xl font-semibold text-[#004274] mb-4">
                    Laboratory Development
                </h3>

                <p class="text-gray-600 leading-relaxed text-sm">
                    End-to-end support for laboratory setup,
                    workflow optimization, and competence development.
                </p>

            </div>

            <!-- ITEM -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition border border-gray-100">

                <div class="w-14 h-14 bg-blue-100 text-[#0F6BAE] rounded-xl flex items-center justify-center mb-6 text-2xl">
                    🛠️
                </div>

                <h3 class="text-xl font-semibold text-[#004274] mb-4">
                    Technical Maintenance Support
                </h3>

                <p class="text-gray-600 leading-relaxed text-sm">
                    Preventive maintenance strategy and technical consultation
                    for industrial instruments and equipment.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- WHY CHOOSE US -->
<section class="py-24 bg-[#F8FAFC]">

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <!-- IMAGE -->
        <div>

            <img src="{{ asset('images/consultant/why-us.png') }}"
                class="rounded-3xl shadow-xl w-full object-cover">

        </div>

        <!-- CONTENT -->
        <div>

            <span class="text-[#0F6BAE] font-semibold uppercase tracking-wider">
                Why Choose SGS
            </span>

            <h2 class="text-4xl font-bold text-[#004274] mt-4 mb-8 leading-tight">
                Trusted Technical Partner for Calibration & Laboratory Systems
            </h2>

            <div class="space-y-6">

                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-xl">
                        ✔️
                    </div>

                    <div>
                        <h3 class="font-semibold text-lg text-[#004274] mb-2">
                            Experienced Consultants
                        </h3>

                        <p class="text-gray-600 leading-relaxed">
                            Supported by experienced technical teams and industry professionals.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-xl">
                        ✔️
                    </div>

                    <div>
                        <h3 class="font-semibold text-lg text-[#004274] mb-2">
                            Industry Compliance
                        </h3>

                        <p class="text-gray-600 leading-relaxed">
                            Consultancy aligned with international standards and industrial requirements.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-xl">
                        ✔️
                    </div>

                    <div>
                        <h3 class="font-semibold text-lg text-[#004274] mb-2">
                            End-to-End Assistance
                        </h3>

                        <p class="text-gray-600 leading-relaxed">
                            From planning and implementation to evaluation and improvement.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section id="consultation" class="py-24 bg-gradient-to-r from-[#003B66] to-[#0F6BAE] text-white">

    <div class="max-w-5xl mx-auto px-6 text-center">

        <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
            Need Professional Calibration Consultancy?
        </h2>

        <p class="text-blue-100 text-lg leading-relaxed mb-10 max-w-3xl mx-auto">
            Contact our technical consultants to discuss your laboratory,
            accreditation, maintenance, or industrial calibration requirements.
        </p>

        <div class="flex flex-col sm:flex-row gap-5 justify-center">

            <a href="https://wa.me/628xxxxxxxxxx"
                class="bg-white text-[#004274] px-8 py-4 rounded-xl font-semibold hover:bg-blue-50 transition">
                Contact via WhatsApp
            </a>

            <a href="mailto:info@sgskalibrasi.com"
                class="border border-white/30 px-8 py-4 rounded-xl font-semibold hover:bg-white/10 transition">
                Send Email
            </a>

        </div>

    </div>

</section>

@endsection