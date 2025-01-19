<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Biaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-gray-100 flex justify-center items-center min-h-screen p-6">
    <div class="w-full sm:max-w-md bg-white shadow-xl rounded-lg overflow-hidden pb-40 p-6 relative min-h-screen">
        <!-- Header -->
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-blue-600">Pengajuan Biaya</h1>
            <p class="text-gray-600">Pilih opsi pendaftaran dan lengkapi form biaya</p>
        </div>

        <!-- Opsi Reguler dan Unggulan -->
        <div class="flex justify-between mb-6 gap-2">
            <button id="btn-reguler"
                class="focus:text-white focus:bg-green-500 w-1/2 text-center py-3 font-semibold text-gray-700 bg-gray-200 rounded-lg transition hover:bg-blue-500 hover:text-white">
                Reguler
            </button>
            <button id="btn-unggulan"
                class="focus:text-white focus:bg-green-500 w-1/2 text-center py-3 font-semibold text-gray-700 bg-gray-200 rounded-lg transition hover:bg-blue-500 hover:text-white">
                Unggulan
            </button>
        </div>

        <!-- Konten Reguler -->
        <div id="content-reguler" class="hidden">
            <p class="text-gray-600 text-center mb-4">
                Berikut adalah tabel biaya untuk kategori reguler.
            </p>
            <img src="https://via.placeholder.com/400x200" alt="Tabel Biaya" class="w-full h-auto rounded-lg shadow-md">
            <!-- Form Wakaf -->
            <div class="my-6">
                <label for="wakaf" class="block text-gray-700 font-semibold mb-2">Wakaf Perorangan</label>
                <input type="number" id="wakaf" placeholder="Masukkan nominal"
                    class="w-full p-2 outline-none shadow border border-green-50 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Form Bulanan -->
            <div class="mb-6">
                <label for="bulanan" class="block text-gray-700 font-semibold mb-2">Bulanan (SPP/Infaq)</label>
                <input type="number" id="bulanan" placeholder="Masukkan nominal bulanan"
                    class="w-full p-2 outline-none shadow border border-green-50 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button id="btn-bayar"
                class="w-full py-3 bg-green-500 text-white font-semibold rounded-lg transition hover:bg-green-600">
                Proses Pembayaran
            </button>
        </div>

        <!-- Konten Unggulan -->
        <div id="content-unggulan" class="hidden">
            <p class="text-gray-600 text-center mb-4">
                Isi form biaya untuk kategori unggulan.
            </p>

            <!-- Form Wakaf -->
            <div class="mb-6">
                <label for="wakaf" class="block text-gray-700 font-semibold mb-2">Wakaf Perorangan</label>
                <input type="number" id="wakaf" placeholder="Masukkan nominal"
                    class="w-full p-2 outline-none shadow border border-green-50 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Form Bulanan -->
            <div class="mb-6">
                <label for="bulanan" class="block text-gray-700 font-semibold mb-2">Bulanan (SPP/Infaq)</label>
                <input type="number" id="bulanan" placeholder="Masukkan nominal bulanan"
                    class="w-full p-2 outline-none shadow border border-green-50 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Tombol Bayar -->
            <button id="btn-bayar"
                class="w-full py-3 bg-green-500 text-white font-semibold rounded-lg transition hover:bg-green-600">
                Proses Pembayaran
            </button>
        </div>
    </div>
    @include('components.navbar')


    <script>
        // Script untuk mengatur logika tampilan
        const btnReguler = document.getElementById('btn-reguler');
        const btnUnggulan = document.getElementById('btn-unggulan');
        const contentReguler = document.getElementById('content-reguler');
        const contentUnggulan = document.getElementById('content-unggulan');

        btnReguler.addEventListener('click', () => {
            contentReguler.classList.remove('hidden');
            contentUnggulan.classList.add('hidden');
        });

        btnUnggulan.addEventListener('click', () => {
            contentUnggulan.classList.remove('hidden');
            contentReguler.classList.add('hidden');
        });
    </script>
</body>

</html>
