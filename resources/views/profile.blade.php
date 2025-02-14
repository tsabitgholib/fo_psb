<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-gray-100 flex justify-center items-center min-h-screen sm:p-6">
    {{-- @include('sweetalert::alert') --}}


    <x-toast message="{{ session('success') }}" type="success" />
    <x-toast message="{{ session('error') }}" type="error" />
    <x-toast message="{{ session('warning') }}" type="warning" />
    <!-- -->
    <div class="w-full sm:max-w-md bg-white shadow-xl rounded-lg overflow-hidden p-4 sm:p-6 relative">
        <div class="flex items-center gap-2 mb-4">
            <!--  -->
            <div class="flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 2l8 5m0 0l-8 5-8-5m16 0v6a9 9 0 11-18 0V7m18 0L12 12" />
                </svg>
            </div>
            <!-- -->
            <p class="font-bold text-xl">
                DASHBOARD
            </p>
        </div>
        <!-- Kartu Siswa -->
        <div
            class="my-2 relative bg-gradient-to-r from-blue-700 to-green-600 p-6 shadow-lg rounded-xl text-white border border-white/30">
            <!-- Background Overlay -->
            <div class="absolute inset-0 bg-cover bg-center opacity-50 rounded-xl"
                style="background-image: url('/assets/img/backgroundCard.webp');"></div>

            <!-- Konten -->
            <div class="relative z-10">
                <div class="flex gap-4 items-center">
                    <div class="bg-white rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-16 h-16 text-blue-600"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                    <div class="space-y-[-3px]">
                        <P class="font-thin">FATWA AKBAR JIWANI</P>
                        <P class="font-thin">32602100045</P>
                        <P class="font-bold">MAHASISWA</P>
                    </div>
                </div>
                <div class="mt-4 text-xs flex gap-1 justify-between">
                    <div class="flex gap-1">
                        <p class="text-white">Jenis Kelamin:</p>
                        <p class="font-bold text-white">Laki-Laki</p>
                    </div>
                    <div class="flex gap-1">
                        <p class="text-white">Kelas:</p>
                        <p class="font-bold text-white">2</p>
                    </div>
                    <div class="flex gap-1">
                        <p class="text-white">Program:</p>
                        <p class="font-bold text-white">IPA</p>
                    </div>
                </div>
                <div class="flex mt-4 text-sm">
                    SMA NEGRI 1 JAKARTA
                </div>

            </div>
        </div>

        <!-- Kumpulan Button -->
        <div class="flex justify-between items-center gap-2 my-4">
            <!-- DATA SISWA -->
            <a href="/dashboardUser" class="flex flex-col justify-center items-center">
                <button
                    class="p-1 bg-white shadow-md active:shadow-[#2563eb] duration-200 active:scale-105 ease-out shadow-gray-400 rounded-full">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="3" width="16" height="18" rx="2" stroke="#2563EB"
                            stroke-width="2" />
                        <path d="M8 7h8M8 11h8M8 15h5" stroke="#2563EB" stroke-width="2" stroke-linecap="round" />
                        <path d="M16 20l4-4m-4 4h4v-4" stroke="#22C55E" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <p class="font-semibold mt-2 text-sm">DATA SISWA</p>
            </a>

            <!-- KEUANGAN -->
            <div class="flex flex-col justify-center items-center">
                <button
                    class="p-1 bg-white shadow-md active:shadow-[#2563eb] duration-200 active:scale-105 ease-out shadow-gray-400 rounded-full">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 8h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8Z" stroke="#2563EB" stroke-width="2" />
                        <path d="M21 8v2H3V8a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2Z" stroke="#2563EB" stroke-width="2" />
                        <circle cx="18" cy="14" r="1.5" fill="#22C55E" />
                        <path d="M5 19l3-3 2 2 4-4 3 3 2-2" stroke="#F59E0B" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
                <p class="font-semibold mt-2 text-sm">KEUANGAN</p>
            </div>

            <!-- RIWAYAT -->
            <div class="flex flex-col justify-center items-center">
                <button
                    class="p-1 bg-white shadow-md active:shadow-[#2563eb] duration-200 active:scale-105 ease-out shadow-gray-400 rounded-full">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 5h16M4 12h16M4 19h10" stroke="#2563EB" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
                <p class="font-semibold mt-2 text-sm">RIWAYAT</p>
            </div>

            <!-- PESAN -->
            <div class="flex flex-col justify-center items-center">
                <button
                    class="p-1 bg-white shadow-md active:shadow-[#2563eb] duration-200 active:scale-105 ease-out shadow-gray-400 rounded-full">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 4h16v14H4z" stroke="#2563EB" stroke-width="2" />
                        <path d="M4 4l8 7 8-7" stroke="#22C55E" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
                <p class="font-semibold mt-2 text-sm">PESAN</p>
            </div>
        </div>

        <!-- -->
        <h1 class="font-bold mt-8">KELENGKAPAN SISWA</h1>
        <div class="my-4 flex justify-between items-center">
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
                    3
                </div>
                <span class="text-gray-600 font-semibold">Pengajuan Biaya</span>
            </div>
        </div>

        <!--  -->
        <div class="space-y-6">
            <!--  -->
            <div class="relative group active:scale-105 transition-transform duration-300">
                <a href="/formLengkap"
                    class="flex items-center gap-4 bg-gradient-to-r from-blue-400 to-blue-600 p-4 rounded-lg shadow-lg text-white">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/form.png" alt="Form Icon"
                        class="h-12 w-12">
                    <div>
                        <h3 class="text-lg font-bold">Isi Formulir Lengkap</h3>
                        <p class="text-sm text-blue-200">Lengkapi data siswa Anda.</p>
                    </div>
                </a>
                <!--  -->
                <div id="progressContainer" class="absolute right-4 top-4">
                    <p
                        class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center text-white font-bold text-xs">
                        !
                    </p>
                </div>
            </div>

            <!--  -->
            <div class="relative group active:scale-105 transition-transform duration-300">
                <a href="/berkas"
                    class="flex items-center gap-4 bg-gradient-to-r from-green-400 to-green-600 p-4 rounded-lg shadow-lg text-white">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/upload.png" alt="Upload Icon"
                        class="h-12 w-12">
                    <div>
                        <h3 class="text-lg font-bold">Unggah Berkas</h3>
                        <p class="text-sm text-green-200">Upload dokumen pendukung.</p>
                    </div>
                </a>
                <!--  -->
                <div id="berkasContainer" class="absolute right-4 top-4">
                    <p
                        class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center text-white font-bold text-xs">
                        !
                    </p>
                </div>
            </div>

            <!-- -->
            <div class="relative group active:scale-105 transition-transform duration-300">
                <a href="/pengajuanBiaya"
                    class="flex items-center gap-4 bg-gradient-to-r from-yellow-400 to-yellow-600 p-4 rounded-lg shadow-lg text-white">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/money.png" alt="Money Icon"
                        class="h-12 w-12">
                    <div>
                        <h3 class="text-lg font-bold">Pengajuan Biaya</h3>
                        <p class="text-sm text-yellow-200">Ajukan biaya pendidikan dengan mudah.</p>
                    </div>
                </a>
                <!-- -->
                <div class="absolute right-4 top-4">
                    <p
                        class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center text-white font-bold text-xs">
                        !
                    </p>
                </div>
            </div>

            <!--  -->
            <div class="relative group active:scale-105 transition-transform duration-300">
                <a href="/jadwal"
                    class="flex items-center gap-4 bg-gradient-to-r from-purple-400 to-purple-600 p-4 rounded-lg shadow-lg text-white">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/calendar.png" alt="Calendar Icon"
                        class="h-12 w-12">
                    <div>
                        <h3 class="text-lg font-bold">Lihat Jadwal</h3>
                        <p class="text-sm text-purple-200">Pantau jadwal seleksi dan pengumuman.</p>
                    </div>
                </a>
                <!--  -->
                <div class="absolute right-4 top-4">
                    <div
                        class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center text-white font-bold text-xs">
                        !
                    </div>
                </div>
            </div>
            <div class="bg-blue-50 p-4 rounded-lg text-center mt-6">
                <p class="text-gray-600">
                    <strong class="text-blue-500">Catatan:</strong> Pastikan semua data diisi dengan lengkap. Jika
                    ada
                    kendala,
                    hubungi kami melalui nomor whatshapp yang tersedia.
                </p>
            </div>
        </div>

        <!--  -->
        <footer class="text-center text-sm text-gray-500 mt-8 border-t pt-4 mb-28">
            <p>&copy; 2024 PT. Inovasi Cipta Teknologi. Semua Hak Dilindungi.</p>
        </footer>
    </div>
    @include('components.navbar')
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Panggil API untuk mendapatkan data pendaftaran berdasarkan user
        fetch("{{ route('pendaftaran.index') }}")
            .then(response => response.json())
            .then(data => {
                let container = document.getElementById("progressContainer");
                container.innerHTML = "";
                const pendaftaran = data.data;
                if (pendaftaran.nisn) {
                    container.innerHTML +=
                        `<p
                        class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-xs">
                        ✓
                    </p>`;
                } else {
                    container.innerHTML +=
                        `<p
                        class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center text-white font-bold text-xs">
                        !
                    </p>`;
                }
            })
            .catch(error => {
                return
            });
        fetch("/berkas/getBerkasByUser")
            .then(response => response.json())
            .then(data => {
                let container = document.getElementById("berkasContainer");
                container.innerHTML = "";
                const berkas = data.data;
                if (berkas.length >= 1) {
                    container.innerHTML +=
                        `<p
                        class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-xs">
                        ✓
                    </p>`;
                } else {
                    container.innerHTML +=
                        `<p
                        class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center text-white font-bold text-xs">
                        !
                    </p>`;
                }
            })
            .catch(error => {
                return
            });
    });
</script>

</html>
