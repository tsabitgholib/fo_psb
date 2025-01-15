<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-start min-h-screen pt-4">
    <div class="w-full sm:max-w-md bg-white shadow-md rounded-lg p-6 pb-28">
        <!-- Title -->
        <h2 class="text-xl font-bold text-center text-gray-800 mb-6">Form Pendaftaran</h2>

        <!-- Form Section -->
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label for="nama_siswa" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                <input type="text" id="nama_siswa" name="nama_siswa" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="nama_orang_tua" class="block text-sm font-medium text-gray-700">Nama Orang Tua</label>
                <input type="text" id="nama_orang_tua" name="nama_orang_tua" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea id="alamat" name="alamat" rows="3" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <div>
                <label for="no_hp" class="block text-sm font-medium text-gray-700">Nomor HP</label>
                <input type="tel" id="no_hp" name="no_hp" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Daftar
            </button>
        </form>

        <!-- Footer Section -->
        <footer class="text-center text-sm text-gray-500 border-t border-gray-200 pt-4 mt-6">
            &copy; 2024 Support By: PT. Inovasi Cipta Teknologi.
        </footer>
    </div>

    <!-- Navbar -->
    @include('components.navbar')
</body>

</html>
