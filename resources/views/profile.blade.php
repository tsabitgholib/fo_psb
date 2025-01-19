<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-gray-100 flex justify-center items-center min-h-screen p-6">
    <!-- -->
    <div class="w-full sm:max-w-md bg-white shadow-xl rounded-lg overflow-hidden pb-40 p-6 relative">
        <div class="flex items-center gap-4 mb-6">
            <!--  -->
            <div class="flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 2l8 5m0 0l-8 5-8-5m16 0v6a9 9 0 11-18 0V7m18 0L12 12" />
                </svg>
            </div>
            <!-- -->
            <div>
                <h1 class="text-lg font-semibold text-gray-800">Selamat Datang, Orang Tua/Wali!</h1>
                <p class="text-gray-600">
                    Daftarkan anak Anda untuk masa depan yang cerah.
                </p>
            </div>
        </div>

        <!-- -->
        <div class="mb-8 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div
                    class="w-10 h-10 bg-blue-600 text-white font-bold flex items-center justify-center rounded-full shadow-md">
                    1
                </div>
                <span class="text-blue-600 font-semibold">Isi Form</span>
            </div>
            <div class="flex-1 h-1 bg-gray-300 mx-2 relative">
                <div class="absolute h-1 bg-blue-600 w-1/4"></div>
            </div>
            <div class="flex items-center space-x-2">
                <div
                    class="w-10 h-10 bg-gray-200 text-gray-600 font-bold flex items-center justify-center rounded-full shadow-md">
                    2
                </div>
                <span class="text-gray-600 font-semibold">Unggah Berkas</span>
            </div>
        </div>

        <!--  -->
        <div class="space-y-6">
            <!--  -->
            <div class="relative group hover:scale-105 transition-transform duration-300">
                <a href="/formLengkap"
                    class="flex items-center gap-4 bg-gradient-to-r from-blue-400 to-blue-600 p-4 rounded-lg shadow-lg text-white">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/form.png" alt="Form Icon" class="h-12 w-12">
                    <div>
                        <h3 class="text-lg font-bold">Isi Formulir Lengkap</h3>
                        <p class="text-sm text-blue-200">Lengkapi data siswa Anda.</p>
                    </div>
                </a>
                <!--  -->
                <div class="absolute right-4 top-4">
                    <div
                        class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-xs">
                        ✓
                    </div>
                </div>
            </div>

            <!--  -->
            <div class="relative group hover:scale-105 transition-transform duration-300">
                <a href="/berkas"
                    class="flex items-center gap-4 bg-gradient-to-r from-green-400 to-green-600 p-4 rounded-lg shadow-lg text-white">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/upload.png" alt="Upload Icon"
                        class="h-12 w-12">
                    <div>
                        <h3 class="text-lg font-bold">Unggah Berkas</h3>
                        <p class="text-sm text-green-200">Upload dokumen penting seperti akta kelahiran.</p>
                    </div>
                </a>
                <!--  -->
                <div class="absolute right-4 top-4">
                    <div
                        class="w-6 h-6 bg-gray-400 rounded-full flex items-center justify-center text-white font-bold text-xs">
                        !
                    </div>
                </div>
            </div>

            <!-- -->
            <div class="relative group hover:scale-105 transition-transform duration-300">
                <a href="/pengajuanBiaya"
                    class="flex items-center gap-4 bg-gradient-to-r from-yellow-400 to-yellow-600 p-4 rounded-lg shadow-lg text-white">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/money.png" alt="Money Icon" class="h-12 w-12">
                    <div>
                        <h3 class="text-lg font-bold">Pengajuan Biaya</h3>
                        <p class="text-sm text-yellow-200">Ajukan biaya pendidikan dengan mudah.</p>
                    </div>
                </a>
                <!-- -->
                <div class="absolute right-4 top-4">
                    <div
                        class="w-6 h-6 bg-gray-400 rounded-full flex items-center justify-center text-white font-bold text-xs">
                        !
                    </div>
                </div>
            </div>

            <!--  -->
            <div class="relative group hover:scale-105 transition-transform duration-300">
                <a href="/jadwal"
                    class="flex items-center gap-4 bg-gradient-to-r from-purple-400 to-purple-600 p-4 rounded-lg shadow-lg text-white">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/calendar.png" alt="Calendar Icon"
                        class="h-12 w-12">
                    <div>
                        <h3 class="text-lg font-bold">Lihat Jadwal</h3>
                        <p class="text-sm text-purple-200">Pantau jadwal seleksi dan pengumuman.</p>
                    </div>
                </a>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <p class="text-gray-600">
                        <strong class="text-blue-500">Catatan:</strong> Pastikan semua data diisi dengan lengkap. Jika
                        ada
                        kendala,
                        hubungi kami melalui email atau nomor telepon yang tersedia di halaman kontak.
                    </p>
                </div>
                <!--  -->
                <div class="absolute right-4 top-4">
                    <div
                        class="w-6 h-6 bg-gray-400 rounded-full flex items-center justify-center text-white font-bold text-xs">
                        !
                    </div>
                </div>
            </div>
        </div>

        <!--  -->
        <footer class="text-center text-sm text-gray-500 mt-8 border-t pt-4">
            <p>&copy; 2024 PT. Inovasi Cipta Teknologi. Semua Hak Dilindungi.</p>
        </footer>
    </div>
    @include('components.navbar')
</body>

</html>
