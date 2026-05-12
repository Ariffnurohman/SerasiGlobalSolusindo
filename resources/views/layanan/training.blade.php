@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="relative bg-gradient-to-r from-[#003B66] to-[#0F6BAE] text-white overflow-hidden">

    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-300 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-14 items-center">

        <!-- LEFT -->
        <div>

            <span class="inline-block bg-white/10 border border-white/20 px-4 py-2 rounded-full text-sm mb-6">
                SGS Professional Training
            </span>

            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                Industrial Training
                <span class="text-blue-200 block mt-2">
                    & Technical Development
                </span>
            </h1>

            <p class="text-lg text-blue-100 leading-relaxed mb-8 max-w-2xl">
                Professional training programs designed to improve technical competence,
                laboratory quality systems, calibration knowledge, ISO implementation,
                and industrial operational excellence.
            </p>

            <!-- BUTTON -->
            <div class="flex flex-col sm:flex-row gap-4">

                <a href="#training-program"
                    class="bg-white text-[#004274] px-8 py-4 rounded-xl font-semibold hover:bg-blue-50 transition text-center">
                    Explore Training
                </a>

                <a href="#contact"
                    class="border border-white/30 px-8 py-4 rounded-xl font-semibold hover:bg-white/10 transition text-center">
                    Free Consultation
                </a>

            </div>

            <!-- STATS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">

                <div>
                    <h3 class="text-3xl font-bold">100+</h3>
                    <p class="text-blue-100 text-sm mt-1">Training Sessions</p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold">500+</h3>
                    <p class="text-blue-100 text-sm mt-1">Participants</p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold">ISO</h3>
                    <p class="text-blue-100 text-sm mt-1">17025 Training</p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold">Online</h3>
                    <p class="text-blue-100 text-sm mt-1">& Offline Class</p>
                </div>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="relative">

            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-3xl p-8 shadow-2xl">

                <img src="{{ asset('images/training/training-hero.png') }}"
                    alt="Industrial Training"
                    class="w-full object-contain rounded-2xl">

            </div>

        </div>

    </div>

</section>


<!-- TRAINING PROGRAM -->
<section id="training-program" class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="text-center max-w-3xl mx-auto mb-16">

            <span class="text-[#0F6BAE] font-semibold uppercase tracking-wider">
                Our Training Programs
            </span>

            <h2 class="text-4xl font-bold text-[#004274] mt-4 mb-6">
                Professional Technical Training Solutions
            </h2>

            <p class="text-gray-600 leading-relaxed">
                Enhance your team competence with structured technical training programs
                tailored for laboratories, manufacturing industries, healthcare facilities,
                and quality management systems.
            </p>

        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- ITEM -->
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl transition">

                <div class="w-14 h-14 bg-blue-100 text-[#0F6BAE] rounded-xl flex items-center justify-center mb-6 text-2xl">
                    📘
                </div>

                <h3 class="text-xl font-semibold text-[#004274] mb-4">
                    ISO/IEC 17025 Training
                </h3>

                <p class="text-gray-600 leading-relaxed text-sm">
                    Comprehensive understanding of ISO/IEC 17025 requirements,
                    implementation, and laboratory quality systems.
                </p>

            </div>

            <!-- ITEM -->
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl transition">

                <div class="w-14 h-14 bg-blue-100 text-[#0F6BAE] rounded-xl flex items-center justify-center mb-6 text-2xl">
                    ⚙️
                </div>

                <h3 class="text-xl font-semibold text-[#004274] mb-4">
                    Calibration Technique
                </h3>

                <p class="text-gray-600 leading-relaxed text-sm">
                    Practical calibration techniques for industrial instruments,
                    traceability systems, and measurement standards.
                </p>

            </div>

            <!-- ITEM -->
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl transition">

                <div class="w-14 h-14 bg-blue-100 text-[#0F6BAE] rounded-xl flex items-center justify-center mb-6 text-2xl">
                    📊
                </div>

                <h3 class="text-xl font-semibold text-[#004274] mb-4">
                    Measurement Uncertainty
                </h3>

                <p class="text-gray-600 leading-relaxed text-sm">
                    Technical guidance for uncertainty calculation,
                    evaluation methods, and metrology applications.
                </p>

            </div>

            <!-- ITEM -->
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl transition">

                <div class="w-14 h-14 bg-blue-100 text-[#0F6BAE] rounded-xl flex items-center justify-center mb-6 text-2xl">
                    🛠️
                </div>

                <h3 class="text-xl font-semibold text-[#004274] mb-4">
                    Maintenance Training
                </h3>

                <p class="text-gray-600 leading-relaxed text-sm">
                    Preventive maintenance systems and equipment handling
                    for industrial operational reliability.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- BENEFITS -->
<section class="py-24 bg-[#F8FAFC]">

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <!-- IMAGE -->
        <div>

            <img src="{{ asset('images/training/training-benefit.png') }}"
                class="rounded-3xl shadow-xl w-full object-cover">

        </div>

        <!-- CONTENT -->
        <div>

            <span class="text-[#0F6BAE] font-semibold uppercase tracking-wider">
                Why Choose SGS Training
            </span>

            <h2 class="text-4xl font-bold text-[#004274] mt-4 mb-8 leading-tight">
                Professional Industrial Training with Practical Approach
            </h2>

            <div class="space-y-6">

                <div class="flex gap-4">

                    <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-xl">
                        ✔️
                    </div>

                    <div>
                        <h3 class="font-semibold text-lg text-[#004274] mb-2">
                            Experienced Trainers
                        </h3>

                        <p class="text-gray-600 leading-relaxed">
                            Training delivered by experienced calibration and laboratory professionals.
                        </p>
                    </div>

                </div>

                <div class="flex gap-4">

                    <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-xl">
                        ✔️
                    </div>

                    <div>
                        <h3 class="font-semibold text-lg text-[#004274] mb-2">
                            Practical Learning
                        </h3>

                        <p class="text-gray-600 leading-relaxed">
                            Interactive and practice-oriented training sessions for better implementation.
                        </p>
                    </div>

                </div>

                <div class="flex gap-4">

                    <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-xl">
                        ✔️
                    </div>

                    <div>
                        <h3 class="font-semibold text-lg text-[#004274] mb-2">
                            Industry-Oriented Materials
                        </h3>

                        <p class="text-gray-600 leading-relaxed">
                            Materials aligned with current industrial standards and compliance requirements.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- TRAINING FORMAT -->
<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">

            <span class="text-[#0F6BAE] font-semibold uppercase tracking-wider">
                Flexible Training Options
            </span>

            <h2 class="text-4xl font-bold text-[#004274] mt-4">
                Available Training Formats
            </h2>

        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <!-- CARD -->
            <div class="bg-[#F8FAFC] rounded-2xl p-10 text-center border border-gray-100 hover:shadow-xl transition">

                <div class="text-5xl mb-6">🏢</div>

                <h3 class="text-2xl font-semibold text-[#004274] mb-4">
                    In-House Training
                </h3>

                <p class="text-gray-600 leading-relaxed">
                    Customized training sessions conducted directly at your company location.
                </p>

            </div>

            <!-- CARD -->
            <div class="bg-[#F8FAFC] rounded-2xl p-10 text-center border border-gray-100 hover:shadow-xl transition">

                <div class="text-5xl mb-6">💻</div>

                <h3 class="text-2xl font-semibold text-[#004274] mb-4">
                    Online Training
                </h3>

                <p class="text-gray-600 leading-relaxed">
                    Flexible online learning sessions with professional training materials.
                </p>

            </div>

            <!-- CARD -->
            <div class="bg-[#F8FAFC] rounded-2xl p-10 text-center border border-gray-100 hover:shadow-xl transition">

                <div class="text-5xl mb-6">🎓</div>

                <h3 class="text-2xl font-semibold text-[#004274] mb-4">
                    Public Training
                </h3>

                <p class="text-gray-600 leading-relaxed">
                    Open registration training programs for individuals and organizations.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section id="contact" class="py-24 bg-gradient-to-r from-[#003B66] to-[#0F6BAE] text-white">

    <div class="max-w-5xl mx-auto px-6 text-center">

        <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
            Upgrade Your Team Competence Today
        </h2>

        <p class="text-blue-100 text-lg leading-relaxed mb-10 max-w-3xl mx-auto">
            Contact our training team to discuss your technical training,
            calibration workshop, ISO training, or laboratory development needs.
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