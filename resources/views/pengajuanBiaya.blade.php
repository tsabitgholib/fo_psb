<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Biaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-gray-100 flex justify-center items-center min-h-screen sm:p-6">
    <div class="w-full sm:max-w-md bg-gray-50 shadow-xl rounded-lg overflow-hidden pb-40 p-4 sm:p-6 relative min-h-screen">
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
            <div class="bg-white p-4 shadow rounded-lg">
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Uang Pendaftaran:</p>
                    <p>Rp 500.000</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Uang Seragam:</p>
                    <p>Rp 750.000</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Uang Buku atau Modul:</p>
                    <p>Rp 1.000.000</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">SPP Bulanan:</p>
                    <p>Rp 300.000</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Biaya Kegiatan:</p>
                    <p>Rp 250.000</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Biaya Pembangunan:</p>
                    <p>Rp 1.500.000</p>
                </div>
                <div class="flex justify-between items-center border-t border-black py-2">
                    <p class="font-semibold">Total:</p>
                    <p class="font-bold underline underline-offset-1">Rp 4.300.000</p>
                </div>
            </div>

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
                    class="w-full p-2 outline-none border border-green-50 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Form Bulanan -->
            <div class="mb-6">
                <label for="bulanan" class="block text-gray-700 font-semibold mb-2">Bulanan (SPP/Infaq)</label>
                <input type="number" id="bulanan" placeholder="Masukkan nominal bulanan"
                    class="w-full p-2 outline-none border border-green-50 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Tombol Bayar -->
            <button id="btn-bayarUnggulan"
                class="w-full py-3 bg-green-500 text-white font-semibold rounded-lg transition hover:bg-green-600">
                Proses Pembayaran
            </button>

           
        </div>
    </div>
    @include('components.navbar')
    <!-- QRIS Modal -->
    <div id="qris-modal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center">
        <div class="bg-white rounded-lg p-6 w-80 text-center">
            <h2 class="text-lg font-bold text-gray-800 mb-4">Pembayaran QRIS</h2>
            <img src="{{ asset('assets/img/frame.png') }}" alt="QRIS Code"
                class="mx-auto rounded-lg border border-gray-300">
            <p class="text-gray-600 mt-4">Silakan scan QRIS untuk melanjutkan proses pengajuan biaya reguler.</p>
            <button id="close-modal"
                class="mt-4 bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600">Tutup</button>

            <button id="cek-pembayaran" class="mt-4 bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">cek
                pembayaran</button>
        </div>
    </div>
    <div id="qris-modalUnggulan" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center">
        <div class="bg-white rounded-lg p-6 w-80 text-center">
            <h2 class="text-lg font-bold text-gray-800 mb-4">Pembayaran QRIS</h2>
            <img src="{{ asset('assets/img/frame.png') }}" alt="QRIS Code"
                class="mx-auto rounded-lg border border-gray-300">
            <p class="text-gray-600 mt-4">Silakan scan QRIS untuk melanjutkan proses pengajuan biaya unggulan.</p>
            <button id="close-modalUnggulan"
                class="mt-4 bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600">Tutup</button>

            <button id="cek-pembayaranUnggulan" class="mt-4 bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">cek
                pembayaran</button>
        </div>
    </div>



    <script>
        // Script untuk mengatur logika tampilan
        const btnReguler = document.getElementById('btn-reguler');
        const btnUnggulan = document.getElementById('btn-unggulan');
        const contentReguler = document.getElementById('content-reguler');
        const contentUnggulan = document.getElementById('content-unggulan');
        const btnBayar = document.getElementById('btn-bayar');
        const btnBayarUnggulan = document.getElementById('btn-bayarUnggulan');
        const qrisPembayaran = document.getElementById('qris-modal');
        const qrisPembayaranUnggulan = document.getElementById('qris-modalUnggulan');
        const closeModal = document.getElementById('close-modal');
        const closeModalUnggulan = document.getElementById('close-modalUnggulan');
        const cekPembayaran = document.getElementById('cek-pembayaran');
        const cekPembayaranUnggulan = document.getElementById('cek-pembayaranUnggulan');
     

        btnReguler.addEventListener('click', () => {
            contentReguler.classList.remove('hidden');
            contentUnggulan.classList.add('hidden');
        });

        btnUnggulan.addEventListener('click', () => {
            contentUnggulan.classList.remove('hidden');
            contentReguler.classList.add('hidden');
        });

        btnBayar.addEventListener('click', () => {
            qrisPembayaran.classList.remove('hidden');
        })
        btnBayarUnggulan.addEventListener('click', () => {
            qrisPembayaranUnggulan.classList.remove('hidden');
        })

        closeModal.addEventListener('click', () => {
            qrisPembayaran.classList.add('hidden'); // Hide QRIS modal
        });
        closeModalUnggulan.addEventListener('click', () => {
            qrisPembayaranUnggulan.classList.add('hidden'); // Hide QRIS modal
        });
        cekPembayaran.addEventListener('click', (event) => {
            event.preventDefault(); // Perbaiki kesalahan penulisan
            qrisPembayaran.classList.add('hidden'); // Menyembunyikan QRIS modal
           
        });
        cekPembayaranUnggulan.addEventListener('click', (event) => {
            event.preventDefault(); // Perbaiki kesalahan penulisan
            qrisPembayaranUnggulan.classList.add('hidden'); // Menyembunyikan QRIS modal
           
        });
    </script>
</body>

</html>
