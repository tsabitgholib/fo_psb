<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Form Login dan Register</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100 flex justify-center items-start min-h-screen pt-4">
        <div>
            <div>
                <div></div>
                <div>hello</div>
            </div>
        </div>
        <div
            class="w-full sm:max-w-md bg-gray-50 min-h-screen shadow-md rounded-lg p-6 pb-44"
        >
            <!-- Login Section -->
            <div id="login-form">
                <h2 class="text-xl font-bold text-center text-gray-800 mb-6">
                    Form Login
                </h2>

                <form action="/profile" method="#" class="space-y-4">
                    <div>
                        <label
                            for="no_hp"
                            class="block text-sm font-medium text-gray-700"
                            >Nomor HP</label
                        >
                        <input
                            type="text"
                            id="no_hp"
                            name="no_hp"
                            required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        />
                    </div>
                    <div class="relative">
                        <label
                            for="password"
                            class="block text-sm font-medium text-gray-700"
                            >Password</label
                        >
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        />
                        <!-- Icon untuk toggle visibility -->
                        <button
                            type="button"
                            id="togglePassword"
                            class="absolute inset-y-0 right-0 pr-4 top-6 flex items-center text-gray-500"
                        >
                            <!-- Heroicon Eye -->
                            <svg
                                id="eyeIcon"
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                />
                            </svg>
                            <!-- Heroicon Eye-Slash (Hidden by Default) -->
                            <svg
                                id="eyeSlashIcon"
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 hidden"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.025 10.025 0 011.51-2.978m2.554-2.554A9.975 9.975 0 0112 5c4.477 0 8.268 2.943 9.542 7a10.026 10.026 0 01-1.005 1.91M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 3l18 18"
                                />
                            </svg>
                        </button>
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                    >
                        Login
                    </button>
                </form>

                <p class="text-center text-sm text-gray-500 mt-4">
                    Belum pernah mendaftar?
                    <span
                        id="show-register-form"
                        class="text-blue-500 cursor-pointer hover:underline"
                        >Daftar Segera</span
                    >
                </p>
            </div>

            <!-- Register Section -->
            <div id="register-form" class="hidden">
                <h2 class="text-xl font-bold text-center text-gray-800 mb-6">
                    Form Pendaftaran
                </h2>

                <form
                    id="register-form-element"
                    action="{{ route('register.store') }}"
                    method="POST"
                    class="space-y-4"
                >
                    @csrf
                    <div>
                        <label
                            for="nama_siswa"
                            class="block text-sm font-medium text-gray-700"
                            >Nama Siswa</label
                        >
                        <input
                            type="text"
                            id="nama_siswa"
                            name="nama_siswa"
                            required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        />
                    </div>

                    <div>
                        <label
                            for="nama_orang_tua"
                            class="block text-sm font-medium text-gray-700"
                            >Nama Orang Tua</label
                        >
                        <input
                            type="text"
                            id="nama_orang_tua"
                            name="nama_orang_tua"
                            required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        />
                    </div>

                    {{--
                    <div>
                        <label
                            for="alamat"
                            class="block text-sm font-medium text-gray-700"
                            >Alamat</label
                        >
                        <textarea
                            id="alamat"
                            name="alamat"
                            rows="3"
                            required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        ></textarea>
                    </div>
                    --}}

                    <div>
                        <label
                            for="no_hp_register"
                            class="block text-sm font-medium text-gray-700"
                            >Nomor HP</label
                        >
                        <input
                            type="tel"
                            id="no_hp_register"
                            name="no_hp_register"
                            required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        />
                    </div>

                    <div>
                        <label
                            for="jenis_kelamin"
                            class="block text-sm font-medium text-gray-700"
                            >Jenis Kelamin</label
                        >
                        <select
                            id="jenis_kelamin"
                            name="jenis_kelamin"
                            required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="">Pilih</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label
                            for="sekolah"
                            class="block text-sm font-medium text-gray-700"
                            >Pilihan Sekolah</label
                        >
                        <select
                            id="sekolah"
                            name="sekolah"
                            required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="">Pilih</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                        </select>
                    </div>
                    {{--
                    <div>
                        <label
                            for="jenis_kelamin"
                            class="block text-sm font-medium text-gray-700"
                            >Pilihan Program</label
                        >
                        <select
                            id="jenis_kelamin"
                            name="jenis_kelamin"
                            required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="">Pilih</option>
                            <option value="Laki-laki">Reguler</option>
                            <option value="Perempuan">Unggulan</option>
                        </select>
                    </div>
                    --}}
                    <div>
                        <label
                            for="password"
                            class="block text-sm font-medium text-gray-700"
                            >Password</label
                        >
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        />
                    </div>

                    <button
                        type="button"
                        id="daftar-button"
                        class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                    >
                        Daftar
                    </button>
                    <!-- QRIS Modal -->
                    <div
                        id="qris-modal"
                        class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center"
                    >
                        <div
                            class="bg-white rounded-lg p-6 w-80 text-center -mt-40 max-h-96"
                        >
                            <h2 class="text-lg font-bold text-gray-800 mb-4">
                                Pembayaran QRIS
                            </h2>
                            <img
                                src="{{ asset('assets/img/qris.png') }}"
                                alt="QRIS Code"
                                class="mx-auto rounded-lg border border-gray-300 h-56"
                            />
                            <p class="text-gray-600 text-base mt-4">
                                Silakan scan QRIS untuk melanjutkan proses
                                pendaftaran.
                            </p>
                            <div
                                class="flex items-center justify-center space-x-2 mt-2"
                            >
                                <button
                                    type="button"
                                    id="close-modal"
                                    class="w-full bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600"
                                >
                                    Tutup
                                </button>
                                <button
                                    type="submit"
                                    id="lanjutkan-button"
                                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                                >
                                    Lanjutkan
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                <p class="text-center text-sm text-gray-500 mt-4">
                    Sudah punya akun?
                    <span
                        id="show-login-form"
                        class="text-blue-500 cursor-pointer hover:underline"
                        >Login</span
                    >
                </p>
            </div>
        </div>
        @include('components.navbar')

        <script>
            // Toggle between Login and Register forms
            const loginForm = document.getElementById("login-form");
            const registerForm = document.getElementById("register-form");
            const showRegister = document.getElementById("show-register-form");
            const showLogin = document.getElementById("show-login-form");
            const registerFormElement = document.getElementById(
                "register-form-element"
            );
            const qrisModal = document.getElementById("qris-modal");
            const closeModal = document.getElementById("close-modal");
            const phoneInput = document.getElementById("no_hp");
            const passwordInput = document.getElementById("password");
            const togglePassword = document.getElementById("togglePassword");
            const eyeIcon = document.getElementById("eyeIcon");
            const eyeSlashIcon = document.getElementById("eyeSlashIcon");
            const daftarButton = document.getElementById("daftar-button");
            const lanjutkanButton = document.getElementById("lanjutkan-button");

            togglePassword.addEventListener("click", () => {
                // Toggle password visibility
                const isPasswordVisible = passwordInput.type === "text";
                passwordInput.type = isPasswordVisible ? "password" : "text";

                // Toggle icon
                eyeIcon.classList.toggle("hidden", !isPasswordVisible);
                eyeSlashIcon.classList.toggle("hidden", isPasswordVisible);
            });

            phoneInput.addEventListener("input", function (e) {
                // Hanya izinkan angka
                this.value = this.value.replace(/[^0-9]/g, "");
            });

            showRegister.addEventListener("click", () => {
                loginForm.classList.add("hidden");
                registerForm.classList.remove("hidden");
            });

            showLogin.addEventListener("click", () => {
                registerForm.classList.add("hidden");
                loginForm.classList.remove("hidden");
            });

            // Tampilkan modal saat tombol "Daftar" diklik
            daftarButton.addEventListener("click", (e) => {
                e.preventDefault(); // Mencegah submit form
                qrisModal.classList.remove("hidden"); // Tampilkan modal
            });

            // Tutup modal saat tombol "Tutup" diklik
            closeModal.addEventListener("click", () => {
                qrisModal.classList.add("hidden"); // Sembunyikan modal
            });

            // Submit form saat tombol "Lanjutkan" diklik
            lanjutkanButton.addEventListener("click", () => {
                registerFormElement.submit(); // Submit form
            });
        </script>
    </body>
</html>
