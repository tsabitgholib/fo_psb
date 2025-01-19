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
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-blue-600">Jadwal</h1>
            <p class="text-gray-600">Lihat jadwal anda</p>
        </div>
        <!-- Header -->
        <div class="space-y-6 ">
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
                    <p>Praktik reaksi kimia</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Ruang</p>
                    <p>Lab. Kimia</p>
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
                    <p>Matematika</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Ruang</p>
                    <p>222</p>
                </div>
            </div>


            <!-- Tambahkan data siswa lainnya di sini -->
        </div>
    </div>
    @include('components.navbar')

</body>

</html>
