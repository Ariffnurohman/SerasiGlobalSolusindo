<footer class="bg-gray-900 text-gray-300 pt-16 pb-6 mt-20">

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 lg:grid-cols-4 gap-10">

        <!-- Recent Post -->
        <div>
            <h5 class="text-white font-semibold mb-4">Recent Post</h5>

            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-white">Produk & Service</a></li>
                <li><a href="#" class="hover:text-white">Training</a></li>
                <li><a href="#" class="hover:text-white">Consultant</a></li>
                <li><a href="#" class="hover:text-white">Kalibrasi</a></li>
            </ul>

            <div class="mt-4 space-y-2">
                <img src="{{ asset('images/ISO-NEW-EDIT.png') }}" class="w-32">
                <img src="{{ asset('images/logo-kan-kalibrasi.png') }}" class="w-32">
            </div>
        </div>

        <!-- Kontak -->
        <div>
            <h5 class="text-white font-semibold mb-4">Kontak Kami</h5>

            <p class="text-sm">Email: support@rsttools.com</p>
            <p class="text-sm mt-2">(+62)21-6281615</p>
            <p class="text-sm">FAX: (+62)21-6265559</p>
            <p class="text-sm mt-2">www.sgskalibrasi.com</p>
        </div>

        <!-- Cabang -->
        <div>
            <h5 class="text-white font-semibold mb-4">PT. Serasi Global Solusindo</h5>

            <p class="text-sm font-semibold">Tangerang</p>
            <p class="text-sm mb-3">
            Graha Segovia S.27.6, Ciakar, Kec. Panongan, Kabupaten Tangerang, Banten 15710
            </p>

        </div>

        <!-- Maps -->
        <div>
            <h5 class="text-white font-semibold mb-4">Laboratorium</h5>

            <p class="text-sm mb-3">
                Tangerang
            </p>

            <iframe 
                class="w-full h-40 rounded-lg"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9895647815542!2d106.52931160910057!3d-6.265101861305682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4207dc08b0cda7%3A0xaf5b848e3eb15bfa!2sPT%20Serasi%20Global%20Solusindo!5e0!3m2!1sid!2sid!4v1774945628710!5m2!1sid!2sid"  </iframe>
        </div>

    </div>


    <!-- WhatsApp Floating -->
    <div class="fixed bottom-6 right-6 z-50">

        <!-- Popup -->
        <div id="waPopup" class="hidden bg-white rounded-xl shadow-lg w-64 mb-3 overflow-hidden">

            <div class="bg-green-500 text-white px-4 py-2 flex justify-between">
                <span>Butuh Bantuan?</span>
                <button onclick="toggleWA(false)">✕</button>
            </div>

            <div class="p-4 text-sm">
                <p>Halo 👋<br>Ada yang bisa kami bantu?</p>

                <a href="https://wa.me/6281234567890" target="_blank"
                   class="block mt-3 bg-green-500 text-white text-center py-2 rounded-lg">
                   Chat WhatsApp
                </a>
            </div>

        </div>

        <!-- Button -->
        <button onclick="toggleWA(true)" class="bg-green-500 p-3 rounded-full shadow-lg">
            <img src="{{ asset('images/icon/icon-wa.png') }}" class="w-6 h-6">
        </button>

    </div>

</footer>

<!-- SCRIPT -->
<script>
function updateStats() {
    fetch('/api/visitors')
        .then(res => res.json())
        .then(data => {
            document.getElementById('total').textContent = data.total;
            document.getElementById('online').textContent = data.online;
        });
}
updateStats();
setInterval(updateStats, 10000);

function toggleWA(show) {
    document.getElementById('waPopup').style.display = show ? 'block' : 'none';
}
</script>