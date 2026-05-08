<!-- ================= PREMIUM FOOTER ================= -->
<footer class="bg-[#07152d] text-white pt-20 pb-8 mt-24 overflow-hidden border-t border-white/10">

    <div class="max-w-7xl mx-auto px-6">

        <!-- TOP -->
        <div class="grid lg:grid-cols-4 gap-14 mb-16">

            <!-- BRAND -->
            <div>

                <div class="inline-flex bg-white p-4 rounded-2xl shadow-lg mb-6">

                    <img src="{{ asset('images/Logo/LOGO-SGS.png') }}"
                        alt="SGS Kalibrasi"
                        class="h-14 object-contain">

                </div>

                <!-- DESC -->
                <p class="text-gray-400 leading-relaxed text-sm mb-8">
                    PT Serasi Global Solusindo menyediakan layanan
                    kalibrasi, consultant, dan training profesional
                    dengan standar nasional maupun internasional.
                </p>

                <!-- SOCIAL -->
                <div class="flex items-center gap-4">

                    <!-- WA -->
                    <a href="https://wa.me/628111365636"
                        target="_blank"
                        class="w-11 h-11 rounded-xl bg-green-500/20 hover:bg-green-500 transition flex items-center justify-center group">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-green-400 group-hover:text-white"
                            fill="currentColor"
                            viewBox="0 0 24 24">

                            <path d="M20.52 3.48A11.82 11.82 0 0012.07 0C5.53 0 .2 5.32.2 11.87c0 2.09.55 4.14 1.6 5.94L0 24l6.36-1.67a11.84 11.84 0 005.71 1.46h.01c6.54 0 11.87-5.32 11.87-11.87 0-3.17-1.24-6.15-3.43-8.44zM12.08 21.7a9.8 9.8 0 01-5-1.37l-.36-.21-3.78.99 1.01-3.69-.24-.38a9.78 9.78 0 01-1.5-5.18c0-5.42 4.41-9.83 9.84-9.83 2.62 0 5.08 1.02 6.93 2.87a9.74 9.74 0 012.88 6.94c0 5.42-4.41 9.83-9.84 9.83zm5.39-7.36c-.3-.15-1.77-.87-2.05-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.95 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.47-.89-.79-1.5-1.76-1.67-2.06-.18-.3-.02-.46.13-.6.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.8.37-.27.3-1.05 1.03-1.05 2.5s1.08 2.9 1.23 3.1c.15.2 2.13 3.25 5.16 4.55.72.31 1.29.5 1.73.64.73.23 1.39.2 1.91.12.58-.09 1.77-.72 2.02-1.42.25-.69.25-1.28.17-1.42-.07-.13-.27-.2-.57-.35z" />

                        </svg>

                    </a>

                    <!-- EMAIL -->
                    <a href="mailto:ptserasiglobalsolusindo@gmail.com"
                        class="w-11 h-11 rounded-xl bg-white/10 hover:bg-blue-500 transition flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8m-18 8h18a2 2 0 002-2V8a2 2 0 00-2-2H3a2 2 0 00-2 2v6a2 2 0 002 2z" />

                        </svg>

                    </a>

                    <!-- WEBSITE -->
                    <a href="https://www.sgskalibrasi.com"
                        target="_blank"
                        class="w-11 h-11 rounded-xl bg-white/10 hover:bg-orange-500 transition flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M21 12.79A9 9 0 1111.21 3m9.79 9h-6m6 0l-3-3m3 3l-3 3" />

                        </svg>

                    </a>

                </div>

            </div>

            <!-- QUICK LINKS -->
            <div>

                <h4 class="text-xl font-semibold mb-6">
                    Quick Links
                </h4>

                <ul class="space-y-4 text-gray-400">

                    <li>
                        <a href="{{ url('tentang-kami') }}"
                            class="hover:text-white transition">
                            Tentang Kami
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('layanan.kalibrasi') }}"
                            class="hover:text-white transition">
                            Kalibrasi
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('consultant') }}"
                            class="hover:text-white transition">
                            Consultant
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('training') }}"
                            class="hover:text-white transition">
                            Training
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('event') }}"
                            class="hover:text-white transition">
                            Event
                        </a>
                    </li>

                </ul>

            </div>

            <!-- CONTACT -->
            <div>

                <h4 class="text-xl font-semibold mb-6">
                    Kontak Kami
                </h4>

                <div class="space-y-5">

                    <!-- EMAIL -->
                    <div class="flex gap-4">

                        <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-blue-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8m-18 8h18a2 2 0 002-2V8a2 2 0 00-2-2H3a2 2 0 00-2 2v6a2 2 0 002 2z" />

                            </svg>

                        </div>

                        <div>

                            <p class="text-sm text-gray-400 mb-1">
                                Email
                            </p>

                            <a href="mailto:ptserasiglobalsolusindo@gmail.com"
                                class="text-sm hover:text-white transition">

                                ptserasiglobalsolusindo@gmail.com

                            </a>

                        </div>

                    </div>

                    <!-- WHATSAPP -->
                    <div class="flex gap-4">

                        <div class="w-11 h-11 rounded-xl bg-green-500/20 flex items-center justify-center">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-green-400"
                                fill="currentColor"
                                viewBox="0 0 24 24">

                                <path d="M20.52 3.48A11.82 11.82 0 0012.07 0C5.53 0 .2 5.32.2 11.87c0 2.09.55 4.14 1.6 5.94L0 24l6.36-1.67a11.84 11.84 0 005.71 1.46h.01c6.54 0 11.87-5.32 11.87-11.87 0-3.17-1.24-6.15-3.43-8.44z" />

                            </svg>

                        </div>

                        <div>

                            <p class="text-sm text-gray-400 mb-1">
                                WhatsApp
                            </p>

                            <a href="https://wa.me/628111365636"
                                target="_blank"
                                class="text-sm hover:text-white transition">

                                +62 811-1365-636

                            </a>

                        </div>

                    </div>

                    <!-- WEBSITE -->
                    <div class="flex gap-4">

                        <div class="w-11 h-11 rounded-xl bg-orange-500/20 flex items-center justify-center">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-orange-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M21 12.79A9 9 0 1111.21 3" />

                            </svg>

                        </div>

                        <div>

                            <p class="text-sm text-gray-400 mb-1">
                                Website
                            </p>

                            <a href="https://www.sgskalibrasi.com"
                                target="_blank"
                                class="text-sm hover:text-white transition">

                                www.sgskalibrasi.com

                            </a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- OFFICE -->
            <div>

                <h4 class="text-xl font-semibold mb-6">
                    Office
                </h4>

                <p class="text-gray-400 leading-relaxed text-sm mb-6">
                    Graha Segovia S.27.6, Cikar, Kec. Panongan,
                    Kabupaten Tangerang, Banten 15710
                </p>

                <!-- MAP -->
                <div class="rounded-2xl overflow-hidden border border-white/10 shadow-lg">

                    <iframe
                        src="https://www.google.com/maps?q=PT+Serasi+Global+Solusindo&output=embed"
                        width="100%"
                        height="220"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>

                </div>

            </div>

        </div>

        <!-- BOTTOM -->
        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">

            <p class="text-sm text-gray-500 text-center md:text-left">
                © 2025 PT Serasi Global Solusindo. All rights reserved.
            </p>

            <div class="flex items-center gap-6 text-sm text-gray-500">

                <a href="#"
                    class="hover:text-white transition">
                    Privacy Policy
                </a>

                <a href="#"
                    class="hover:text-white transition">
                    Terms & Conditions
                </a>

            </div>

        </div>

    </div>

</footer>