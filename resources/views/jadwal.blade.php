<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Biaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-gray-100 flex justify-center items-center min-h-screen sm:p-6">
    <div
        class="w-full sm:max-w-md bg-gray-50 shadow-xl rounded-lg overflow-hidden pb-40 p-4 sm:p-6 relative min-h-screen">
        <!-- Tombol Back -->
        <a href="/profile" class="flex gap-2 items-center text-gray-700 hover:text-blue-600 transition">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 5l-7 7 7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <span class="font-semibold">Kembali</span>
        </a>
        <!-- Header -->
        <div class="space-y-6 ">
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-blue-600">Jadwal</h1>
                <p class="text-gray-600">Lihat jadwal anda</p>
            </div>
            <div class="bg-white border-2 p-4 shadow rounded-lg">
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Tanggal</p>
                    <p>05 Jan 2025</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Waktu</p>
                    <p>08.00 - 09.30</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Kegiatan</p>
                    <p>Wawancara</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Ruang</p>
                    <p>Ruang Kepala Sekolah</p>
                </div>
            </div>
            <div class="bg-white border-2 p-4 shadow rounded-lg">
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Tanggal</p>
                    <p>06 Jan 2025</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Waktu</p>
                    <p>10.00 - 11.30</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Kegiatan</p>
                    <p>Tes</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Ruang</p>
                    <p>Aula</p>
                </div>
            </div>


            <!-- Tambahkan data siswa lainnya di sini -->
        </div>
    </div>
    @include('components.navbar')

</body>

</html>
