<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-start min-h-screen pt-4">
    <div class="w-full sm:max-w-md bg-gray-50 shadow-md rounded-lg min-h-s vcreen p-4 pb-28">
        <!-- Title -->
        <h2 class="text-xl font-bold text-center text-gray-800 mb-4">Pendaftaran Siswa Baru</h2>
        <div class="flex items-center gap-4">
            <img src="bg-gray-50 rounded-full h-20 w-20" alt="">
            <h1 class="">Selamat Datang </h1>
            <p>silahkan daftarkan anak anda di sekolah kami</p>
        </div>

        <!-- Footer Section -->
        <footer class="text-center text-sm text-gray-500 border-t border-gray-200 pt-4 mt-4">
            &copy; 2024 Support By: PT. Inovasi Cipta Teknologi.
        </footer>
    </div>

    <!-- Navbar -->
    @include('components.navbar')
</body>

</html>
