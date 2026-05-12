@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="relative overflow-hidden min-h-screen flex items-center text-white">

    <!-- BACKGROUND -->
    <img src="{{ asset('storage/' . $event->gambar) }}"
        class="absolute inset-0 w-full h-full object-cover">

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#003B66]/95 to-[#0F6BAE]/80"></div>

    <!-- BLUR EFFECT -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-300 rounded-full blur-3xl"></div>
    </div>

    <!-- CONTENT -->
    <div class="relative max-w-7xl mx-auto px-6 py-32 grid md:grid-cols-2 gap-14 items-center">

        <!-- LEFT -->
        <div>

            <span class="inline-block bg-white/10 border border-white/20 px-4 py-2 rounded-full text-sm mb-6">
                SGS Industrial Event
            </span>

            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">

                {{ $event->judul }}

            </h1>

            <p class="text-lg text-blue-100 leading-relaxed mb-10 max-w-2xl">

                {{ $event->deskripsi }}

            </p>

            <!-- INFO -->
            <div class="grid grid-cols-2 gap-6 mb-10">

                <div class="bg-white/10 backdrop-blur-md border border-white/10 rounded-2xl p-5">

                    <p class="text-sm text-blue-100 mb-2">
                        📍 Location
                    </p>

                    <h3 class="font-semibold text-lg">
                        {{ $event->lokasi ?? 'Online Event' }}
                    </h3>

                </div>

                <div class="bg-white/10 backdrop-blur-md border border-white/10 rounded-2xl p-5">

                    <p class="text-sm text-blue-100 mb-2">
                        📅 Date
                    </p>

                    <h3 class="font-semibold text-lg">
                        {{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}
                    </h3>

                </div>

                <div class="bg-white/10 backdrop-blur-md border border-white/10 rounded-2xl p-5">

                    <p class="text-sm text-blue-100 mb-2">
                        ⏰ Time
                    </p>

                    <h3 class="font-semibold text-lg">
                        10:00 - 18:00
                    </h3>

                </div>

                <div class="bg-white/10 backdrop-blur-md border border-white/10 rounded-2xl p-5">

                    <p class="text-sm text-blue-100 mb-2">
                        🎫 Category
                    </p>

                    <h3 class="font-semibold text-lg">
                        Public Training
                    </h3>

                </div>

            </div>

            <!-- BUTTON -->
            <div class="flex flex-col sm:flex-row gap-4">

                <a href="#register"
                    class="bg-white text-[#004274] px-8 py-4 rounded-xl font-semibold hover:bg-blue-50 transition text-center">

                    Register Now

                </a>

                <a href="{{ route('event.index') }}"
                    class="border border-white/30 px-8 py-4 rounded-xl font-semibold hover:bg-white/10 transition text-center">

                    Back To Event

                </a>

            </div>

        </div>

        <!-- RIGHT -->
        <div>

            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-3xl p-6 shadow-2xl">

                <img src="{{ asset('storage/' . $event->gambar) }}"
                    class="rounded-2xl w-full object-cover shadow-lg">

            </div>

        </div>

    </div>

</section>


<!-- ABOUT EVENT -->
<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <!-- IMAGE -->
        <div>

            <img src="{{ asset('storage/' . $event->gambar) }}"
                class="rounded-3xl shadow-xl w-full object-cover">

        </div>

        <!-- CONTENT -->
        <div>

            <span class="text-[#0F6BAE] font-semibold uppercase tracking-wider">
                About This Event
            </span>

            <h2 class="text-4xl font-bold text-[#004274] mt-4 mb-8 leading-tight">

                Professional Industrial Seminar & Training

            </h2>

            <p class="text-gray-600 leading-relaxed mb-8">

                {{ $event->deskripsi }}

            </p>

            <!-- BENEFIT -->
            <div class="space-y-5">

                <div class="flex gap-4">

                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-xl">
                        ✔️
                    </div>

                    <div>

                        <h3 class="font-semibold text-[#004274] text-lg mb-1">
                            Free Consultation
                        </h3>

                        <p class="text-gray-600">
                            Discuss industrial calibration and laboratory solutions directly with experts.
                        </p>

                    </div>

                </div>

                <div class="flex gap-4">

                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-xl">
                        ✔️
                    </div>

                    <div>

                        <h3 class="font-semibold text-[#004274] text-lg mb-1">
                            Professional Speakers
                        </h3>

                        <p class="text-gray-600">
                            Learn from experienced industrial practitioners and technical consultants.
                        </p>

                    </div>

                </div>

                <div class="flex gap-4">

                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-xl">
                        ✔️
                    </div>

                    <div>

                        <h3 class="font-semibold text-[#004274] text-lg mb-1">
                            Networking Opportunity
                        </h3>

                        <p class="text-gray-600">
                            Build industrial connections and expand your professional network.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- EVENT HIGHLIGHT -->
<section class="py-24 bg-[#F8FAFC]">

    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="text-center max-w-3xl mx-auto mb-16">

            <span class="text-[#0F6BAE] font-semibold uppercase tracking-wider">
                Event Highlights
            </span>

            <h2 class="text-4xl font-bold text-[#004274] mt-4 mb-6">
                What You Will Get
            </h2>

        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-8">

            <!-- CARD -->
            <div class="bg-white rounded-3xl p-10 border border-gray-100 shadow-sm hover:shadow-xl transition">

                <div class="text-5xl mb-6">
                    🎓
                </div>

                <h3 class="text-2xl font-semibold text-[#004274] mb-4">
                    Technical Knowledge
                </h3>

                <p class="text-gray-600 leading-relaxed">
                    Gain deeper understanding of calibration systems,
                    industrial standards, and laboratory management.
                </p>

            </div>

            <!-- CARD -->
            <div class="bg-white rounded-3xl p-10 border border-gray-100 shadow-sm hover:shadow-xl transition">

                <div class="text-5xl mb-6">
                    🧪
                </div>

                <h3 class="text-2xl font-semibold text-[#004274] mb-4">
                    Practical Session
                </h3>

                <p class="text-gray-600 leading-relaxed">
                    Interactive discussions and practical industrial case studies.
                </p>

            </div>

            <!-- CARD -->
            <div class="bg-white rounded-3xl p-10 border border-gray-100 shadow-sm hover:shadow-xl transition">

                <div class="text-5xl mb-6">
                    🤝
                </div>

                <h3 class="text-2xl font-semibold text-[#004274] mb-4">
                    Professional Networking
                </h3>

                <p class="text-gray-600 leading-relaxed">
                    Meet professionals, laboratories, and industrial communities.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section id="register"
    class="py-24 bg-gradient-to-r from-[#003B66] to-[#0F6BAE] text-white">

    <div class="max-w-5xl mx-auto px-6 text-center">

        <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">

            Ready To Join This Event?

        </h2>

        <p class="text-blue-100 text-lg leading-relaxed mb-10 max-w-3xl mx-auto">

            Register now and improve your technical competence,
            industrial insight, and professional network through SGS events.

        </p>

        <!-- BUTTON -->
        <div class="flex flex-col sm:flex-row gap-5 justify-center">

            <a href="https://wa.me/628xxxxxxxxxx"
                class="bg-white text-[#004274] px-8 py-4 rounded-xl font-semibold hover:bg-blue-50 transition">

                Register via WhatsApp

            </a>

            <a href="{{ route('event.index') }}"
                class="border border-white/30 px-8 py-4 rounded-xl font-semibold hover:bg-white/10 transition">

                Explore Other Events

            </a>

        </div>

    </div>

</section>

@endsection