<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login dan Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-start min-h-screen pt-4">
    <div class="w-full sm:max-w-md bg-gray-50 min-h-screen shadow-md rounded-lg p-6 pb-44">
        <!-- Login Section -->
        <div id="login-form">
            <h2 class="text-xl font-bold text-center text-gray-800 mb-6">Form Login</h2>

            <form action="#" method="#" class="space-y-4">
                <div>
                    <label for="no_hp" class="block text-sm font-medium text-gray-700">Nomor HP</label>
                    <input type="tel" id="no_hp" name="no_hp" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="nama_orang_tua" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Login
                </button>
            </form>

            <p class="text-center text-sm text-gray-500 mt-4">
                Belum punya akun?
                <span id="show-register-form" class="text-blue-500 cursor-pointer hover:underline">Register</span>
            </p>
        </div>

        <!-- Register Section -->
        <div id="register-form" class="hidden">
            <h2 class="text-xl font-bold text-center text-gray-800 mb-6">Form Pendaftaran</h2>

            <form id="register-form-element" action="#" method="POST" class="space-y-4">
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
                    <label for="no_hp_register" class="block text-sm font-medium text-gray-700">Nomor HP</label>
                    <input type="tel" id="no_hp_register" name="no_hp_register" required
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
                <div>
                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Pilihan Sekolah</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Pilih</option>
                        <option value="Laki-laki">SD</option>
                        <option value="Perempuan">SMP</option>
                        <option value="Perempuan">SMA</option>
                    </select>
                </div>
                <div>
                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Pilihan Program</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Pilih</option>
                        <option value="Laki-laki">Reguler</option>
                        <option value="Perempuan">Unggulan</option>
                    </select>
                </div>
                <div>
                    <label for="nama_orang_tua" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Daftar
                </button>
            </form>

            <p class="text-center text-sm text-gray-500 mt-4">
                Sudah punya akun?
                <span id="show-login-form" class="text-blue-500 cursor-pointer hover:underline">Login</span>
            </p>
        </div>
    </div>
    @include('components.navbar')

    <!-- QRIS Modal -->
    <div id="qris-modal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center">
        <div class="bg-white rounded-lg p-6 w-80 text-center">
            <h2 class="text-lg font-bold text-gray-800 mb-4">Pembayaran QRIS</h2>
            <img src="https://via.placeholder.com/300x300" alt="QRIS Code"
                class="mx-auto rounded-lg border border-gray-300">
            <p class="text-gray-600 mt-4">Silakan scan QRIS untuk melanjutkan proses pendaftaran.</p>
            <button id="close-modal"
                class="mt-4 bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600">Tutup</button>
        </div>
    </div>

    <script>
        // Toggle between Login and Register forms
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');
        const showRegister = document.getElementById('show-register-form');
        const showLogin = document.getElementById('show-login-form');
        const registerFormElement = document.getElementById('register-form-element');
        const qrisModal = document.getElementById('qris-modal');
        const closeModal = document.getElementById('close-modal');

        showRegister.addEventListener('click', () => {
            loginForm.classList.add('hidden');
            registerForm.classList.remove('hidden');
        });

        showLogin.addEventListener('click', () => {
            registerForm.classList.add('hidden');
            loginForm.classList.remove('hidden');
        });

        registerFormElement.addEventListener('submit', (e) => {
            e.preventDefault(); // Prevent form submission
            qrisModal.classList.remove('hidden'); // Show QRIS modal
        });

        closeModal.addEventListener('click', () => {
            qrisModal.classList.add('hidden'); // Hide QRIS modal
        });
    </script>
</body>

</html>
