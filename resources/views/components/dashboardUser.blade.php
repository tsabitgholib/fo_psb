<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-gray-100 flex justify-center items-center min-h-screen p-6">
    <div class="w-full sm:max-w-md bg-white shadow-lg rounded-lg overflow-hidden p-6 relative">
        <!-- Tombol Back -->
        <a href="/profile">
            <button class="flex gap-2 items-center text-gray-700 hover:text-blue-600 transition">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 5l-7 7 7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span class="font-semibold">Kembali</span>
            </button>
        </a>
        <!-- Informasi Siswa -->
        <div class="mt-6 flex items-center gap-2 border-b pb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black mr-2" fill="none" viewBox="0 0 24 24"
                stroke="black">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
            </svg>
            <h2 class="text-lg font-semibold text-gray-700 text-left">Informasi Siswa</h2>
            <a href="/editBerkas"
                class="bg-yellow-400 p-1 rounded-lg text-sm font-bold text-white active:scale-105 duration-150 shadow">EDIT</a>

        </div>

        <!-- Data Siswa -->
        <div class="mt-6">
            <div class="bg-white p-4 shadow-md rounded-lg divide-y divide-gray-200">
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Nama Lengkap:</p>
                    <p id="preview-nama">Leon R</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">NISN:</p>
                    <p id="preview-nisn">1234567890</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Tanggal Lahir:</p>
                    <p id="preview-tanggal_lahir">01 Januari 2000</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Email:</p>
                    <p id="preview-email">leonr@example.com</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Nomor HP:</p>
                    <p id="preview-nomor_hp">081234567890</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Nama Orang Tua:</p>
                    <p id="preview-nama_orangtua">Jane Doe</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Jenis Kelamin:</p>
                    <p id="preview-jenis_kelamin">Laki-laki</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Pilihan Sekolah:</p>
                    <p id="preview-pilihan_sekolah">SMA Negeri 1 Jakarta</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Pilihan Program:</p>
                    <p id="preview-pilihan_program">IPA</p>
                </div>
                <div class="py-2">
                    <p class="font-semibold">Alamat:</p>
                    <p id="preview-alamat">Jl. Merdeka No. 12, Jakarta</p>
                </div>
            </div>
        </div>

        <!-- Preview Berkas -->
        <div class="mt-6">
            <h3 class="text-lg font-semibold text-gray-700">Preview Berkas</h3>
            <div class="bg-white p-4 shadow-md rounded-lg divide-y divide-gray-200">
                <!-- KTP/SIM Preview -->
                <div class="py-2">
                    <p class="font-semibold mb-2">KTP/SIM:</p>
                    <div id="preview-ktp">
                        <!-- Jika file berupa PDF -->
                        {{-- <object data="assets/img/contoh.pdf" type="application/pdf" class="w-full h-48">
                            <p class="text-center text-gray-500">
                                Preview PDF tidak tersedia. <a href="assets/img/contoh.pdf"
                                    class="text-blue-500 underline">Unduh file</a>
                            </p>
                        </object> --}}
                        <!-- iki nak gambar: -->
                        <img src="assets/img/ktp.png" alt="Preview KTP/SIM" class="w-full h-auto">
                    </div>
                </div>
                <!-- Ijazah Preview -->
                <div class="py-2">
                    <p class="font-semibold mb-2">Ijazah:</p>
                    <div id="preview-ijazah">
                        <!-- Jika file berupa PDF -->
                        {{-- <object data="assets/img/contoh.pdf" type="application/pdf" class="w-full h-48">
                            <p class="text-center text-gray-500">
                                Preview PDF tidak tersedia. <a href="assets/img/contoh.pdf"
                                    class="text-blue-500 underline">Unduh file</a>
                            </p>
                        </object> --}}
                        <img src="assets/img/ktp.png" alt="Preview Ijazah" class="w-full h-auto">
                    </div>
                </div>
                <!-- Kartu Keluarga Preview -->
                <div class="py-2">
                    <p class="font-semibold mb-2">Kartu Keluarga:</p>
                    <div id="preview-kk">
                        <!-- Jika file berupa PDF -->
                        {{-- <object data="assets/img/contoh.pdf" type="application/pdf" class="w-full h-48">
                            <p class="text-center text-gray-500">
                                Preview PDF tidak tersedia. <a href="assets/img/contoh.pdf"
                                    class="text-blue-500 underline">Unduh file</a>
                            </p>
                        </object> --}}
                        <img src="assets/img/ktp.png" alt="Preview Kartu Keluarga" class="w-full h-auto"> 
                    </div>
                </div>
                <!-- Tambahan Preview Berkas Lain (misalnya Akta Kelahiran atau Pas Foto) jika diperlukan -->
            </div>
        </div>


        <!-- Footer -->
        <footer class="text-center text-sm text-gray-500 mt-8 border-t pt-4">
            <p>&copy; 2024 PT. Inovasi Cipta Teknologi. Semua Hak Dilindungi.</p>
        </footer>
        <footer class="text-center text-sm text-gray-500 mt-20 border-t pt-4">
            <p>&copy; 2024 PT. Inovasi Cipta Teknologi. Semua Hak Dilindungi.</p>
        </footer>
    </div>
    @include('components.navbar')
    </div>
    <!--  -->
</body>

</html>
