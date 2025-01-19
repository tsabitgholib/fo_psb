<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berkas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-gray-100 flex justify-center items-center min-h-screen sm:p-6">
    <!-- -->
    <div class="w-full sm:max-w-md bg-white min-h-screen shadow-xl rounded-lg overflow-hidden pb-40 p-4 sm:p-6 relative">
        <div class="flex items-center gap-4 mb-6">
            <!--  -->
            <div class="flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-12 h-12" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
                </svg>
            </div>
            <!-- -->
            <div>
                <h1 class="text-lg font-semibold text-gray-800">Unggah berkas</h1>
                <p class="text-gray-600">
                    Leon R.
                </p>
            </div>
        </div>

        <!-- -->
        <div class="mb-8 flex justify-center items-center">
            <h2 class="text-lg font-bold underline-offset-2 underline text-gray-800">Informasi Berkas</h2>
        </div>

        <!-- Tabel Data Siswa -->
        <div class="space-y-6 mb-24 flex flex-col items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-24 h-24 text-green-600" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
            </svg>

            <p class="font-bold text-green-600 underline underline-offset-2">Anda telah menyelesaikan tahap unggah
                berkas!</p>
            <a href="/pengajuanBiaya">
                <p class="text-blue-400">Silakan ke tahap selanjutnya</p>
            </a>

            <!-- Tambahkan data siswa lainnya di sini -->
        </div>


        <footer class="text-center text-sm text-gray-500 mt-8 border-t pt-4">
            <p>&copy; 2024 PT. Inovasi Cipta Teknologi. Semua Hak Dilindungi.</p>
        </footer>
    </div>
    @include('components.navbar')
</body>

</html>
