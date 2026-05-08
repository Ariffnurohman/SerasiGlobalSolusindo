<div id="chatWidget">

    <!-- FLOATING BUTTON -->
    <button id="chatToggle"
        class="fixed bottom-5 right-5 w-16 h-16 rounded-full bg-red-600 text-white shadow-2xl z-50 text-2xl hover:scale-110 transition">

        💬
    </button>

    <!-- CHAT BOX -->
    <div id="chatBox"
        class="hidden fixed bottom-24 right-5 w-[370px] bg-white rounded-3xl shadow-2xl overflow-hidden z-50">

        <!-- HEADER -->
        <div class="bg-gradient-to-r from-red-600 to-red-500 text-white p-5 relative">

            <div class="flex items-center gap-4">

                <img src="https://cdn-icons-png.flaticon.com/512/4712/4712109.png"
                    class="w-14 h-14 rounded-full border-2 border-white">

                <div>
                    <h2 class="font-bold text-xl">
                        SGS Assistant
                    </h2>

                    <p class="text-sm text-white/80">
                        Online Customer Service
                    </p>
                </div>

            </div>

            <button id="closeChat"
                class="absolute top-4 right-4 text-white text-xl">
                ✕
            </button>

        </div>

        <!-- BODY -->
        <div id="chatBody"
            class="h-[400px] overflow-y-auto p-5 bg-gray-100 space-y-4">

            <!-- BOT MESSAGE -->
            <div class="flex">
                <div class="bg-white p-4 rounded-2xl shadow text-sm max-w-[85%]">
                    Halo 👋<br>
                    Selamat datang di SGS Kalibrasi.<br>
                    Ada yang bisa kami bantu?
                </div>
            </div>

        </div>

        <!-- INPUT -->
        <div class="border-t p-4 flex items-center gap-3">

            <input type="text"
                id="chatInput"
                placeholder="Tulis pesan..."
                class="flex-1 border rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-red-500">

            <button id="sendMessage"
                class="bg-red-600 text-white w-12 h-12 rounded-full hover:bg-red-700 transition">
                ➤
            </button>

        </div>

    </div>

</div>

<script src="{{ asset('js/chatbot.js') }}"></script>