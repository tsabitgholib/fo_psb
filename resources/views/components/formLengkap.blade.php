<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-gray-100 flex justify-center items-center min-h-screen sm:p-6">
    <!-- -->
    <div class="w-full sm:max-w-md bg-white shadow-xl rounded-lg overflow-hidden pb-40 p-4 sm:p-6 relative">
        <div class="flex items-center gap-4 mb-6">
            <!--  -->
            <div class="flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-12 h-12" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>


            </div>
            <!-- -->
            <div>
                <h1 class="text-lg font-semibold text-gray-800">Data Siswa</h1>
                <p class="text-gray-600">
                    Leon R.
                </p>
            </div>
        </div>

        <!-- -->
        <div class="mb-2 flex justify-center items-center">
            <h2 class="text-lg font-bold underline-offset-2 underline text-gray-800">Informasi Siswa</h2>
        </div>

        <!-- Tabel Data Siswa -->
        <div class="space-y-6 ">
            <h3 class="text-lg font-semibold text-gray-800">Kartu siswa</h3>
            <div class="bg-gradient-to-r from-green-800  to-blue-700 p-4 shadow rounded-lg text-white">
                <p><strong>Nama Lengkap:</strong> Leon R</p>
                <p><strong>Alamat:</strong> Jl. Merdeka No. 12, Jakarta</p>
                <p><strong>Nomor HP:</strong> 081234567890</p>
                <p><strong>Jenis Kelamin:</strong> Laki-laki</p>
                <p><strong>Sekolah:</strong> SMA Negeri 1 Jakarta</p>
                <p><strong>Program:</strong> IPA</p>
            </div>

            <h3 class="text-lg font-semibold text-gray-800">Data siswa</h3>
            <div class="bg-white p-4 shadow rounded-lg">
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Nama Lengkap:</p>
                    <p>Leon R</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Nama Orang Tua:</p>
                    <p>Jane</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Alamat:</p>
                    <p>Jl. Merdeka No. 12, Jakarta</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Nomor HP:</p>
                    <p>081234567890</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Jenis Kelamin:</p>
                    <p>Laki-laki</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Pilihan Sekolah:</p>
                    <p>SMA Negeri 1 Jakarta</p>
                </div>
                <div class="flex justify-between items-center border-b py-2">
                    <p class="font-semibold">Pilihan Program:</p>
                    <p>IPA</p>
                </div>
            </div>


            <!-- Tambahkan data siswa lainnya di sini -->
        </div>


        <!--  -->
        <footer class="text-center text-sm text-gray-500 mt-8 border-t pt-4">
            <p>&copy; 2024 PT. Inovasi Cipta Teknologi. Semua Hak Dilindungi.</p>
        </footer>
    </div>
    @include('components.navbar')
</body>

</html>
