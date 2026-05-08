const toggleBtn = document.getElementById('chatToggle');
const chatBox = document.getElementById('chatBox');
const closeBtn = document.getElementById('closeChat');
const sendBtn = document.getElementById('sendMessage');
const input = document.getElementById('chatInput');
const body = document.getElementById('chatBody');

toggleBtn.addEventListener('click', () => {
    chatBox.classList.toggle('hidden');
});

closeBtn.addEventListener('click', () => {
    chatBox.classList.add('hidden');
});

sendBtn.addEventListener('click', sendMessage);

input.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
});

function sendMessage() {

    const message = input.value.trim();

    if (message === '') return;

    // USER MESSAGE
    body.innerHTML += `
        <div class="flex justify-end">
            <div class="bg-red-600 text-white p-4 rounded-2xl max-w-[85%] text-sm">
                ${message}
            </div>
        </div>
    `;

    input.value = '';

    body.scrollTop = body.scrollHeight;

    // AUTO REPLY
    setTimeout(() => {

        let reply = getBotReply(message);

        body.innerHTML += `
            <div class="flex">
                <div class="bg-white p-4 rounded-2xl shadow text-sm max-w-[85%]">
                    ${reply}
                </div>
            </div>
        `;

        body.scrollTop = body.scrollHeight;

    }, 1000);

}

function getBotReply(message) {

    message = message.toLowerCase();

    if (message.includes('kalibrasi')) {
        return 'Kami menyediakan layanan kalibrasi alat industri dan laboratorium.';
    }

    if (message.includes('harga')) {
        return 'Untuk informasi harga, silakan hubungi admin kami melalui WhatsApp.';
    }

    if (message.includes('wa')) {
        return `
            Klik link berikut:<br><br>
            <a href="https://wa.me/628123456789"
                target="_blank"
                class="text-red-600 font-bold">
                Chat WhatsApp
            </a>
        `;
    }

    return 'Terima kasih telah menghubungi SGS Kalibrasi.';
}