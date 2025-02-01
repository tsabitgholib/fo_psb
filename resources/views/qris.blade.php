<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRIS Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/qrcode/build/qrcode.min.js"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
        <h2 class="text-2xl font-bold mb-4">Scan QRIS untuk Pembayaran</h2>

        <div id="qrisCode" class="w-64 h-64 mx-auto"></div>

        <p class="text-gray-600 mt-4">Gunakan aplikasi pembayaran untuk scan QR ini.</p>

        <button id="checkStatusBtn" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600">
            Check Status
        </button>

        <div id="statusModal" class="hidden fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
            <div class="bg-white p-6 rounded-lg text-center w-1/3">
                <h3 id="statusMessage" class="text-xl font-semibold"></h3>
                <div class="mt-4">
                    <button id="continueBtn" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600">
                        Lanjutkan
                    </button>
                </div>
            </div>
        </div>

        <a href="/" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600">Kembali ke Beranda</a>
    </div>

    <script>
        var qrData = "{{ $qrData }}";

        QRCode.toCanvas(document.getElementById('qrisCode'), qrData, function (error) {
            if (error) console.error(error)
            console.log('QR Code generated!');
        });

        document.getElementById('checkStatusBtn').addEventListener('click', function () {
            var createdTime = "{{ $createdTime }}";

            fetch(`/checkStatus?createdTime=${createdTime}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success && data.responseCode === "00") {
                        document.getElementById('statusMessage').textContent = "Pembayaran Berhasil!";
                    } else {
                        document.getElementById('statusMessage').textContent = "Pembayaran Sedang Diproses.";
                    }
                    document.getElementById('statusModal').classList.remove('hidden');
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat memeriksa status');
                });
        });

        document.getElementById('continueBtn').addEventListener('click', function () {
            window.location.href = '/pendaftaran';
        });
    </script>
</body>

</html>
