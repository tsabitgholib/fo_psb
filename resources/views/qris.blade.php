<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRIS Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
        <h2 class="text-2xl font-bold mb-4">Scan QRIS untuk Pembayaran</h2>
        <img src="data:image/png;base64,{{ $qrData }}" alt="QRIS Code" class="w-64 h-64 mx-auto">
        <p class="text-gray-600 mt-4">Gunakan aplikasi pembayaran untuk scan QR ini.</p>
        <a href="/" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600">Kembali ke Beranda</a>
    </div>
</body>

</html>
