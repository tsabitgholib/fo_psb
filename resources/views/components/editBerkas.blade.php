<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-gray-100 flex justify-center items-center min-h-screen p-6">
    <div class="pb-40 w-full sm:max-w-md bg-white min-h-screen shadow-lg rounded-lg overflow-hidden p-6 relative">
        <!-- Tombol Kembali -->
        <a href="/profile" class="flex gap-2 items-center text-gray-700 hover:text-blue-600 transition">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 5l-7 7 7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <span class="font-semibold">Kembali</span>
        </a>

        <!-- Header Title -->
        <h1 class="text-2xl font-bold text-center mb-4">Pendaftaran Sekolah</h1>

        <!-- Progress Bar -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex-1 h-2 bg-gray-300 rounded-full overflow-hidden">
                <div id="progress-bar" class="h-full bg-blue-500 w-0 transition-all duration-300"></div>
            </div>
        </div>

        <!-- Form Sections -->
        <form id="registration-form" class="space-y-6">
            <!-- Step 1: Data Siswa -->
            <div id="step-1" class="step-content">
                <h2 class="text-lg font-semibold mb-2">Data Siswa</h2>
                <div class="space-y-3">
                    <div>
                        <label for="nama" class="block font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="nama"
                            class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
                    </div>
                    <div>
                        <label for="nisn" class="block font-medium text-gray-700">NISN</label>
                        <input type="text" id="nisn"
                            class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
                    </div>
                    <div>
                        <label for="tanggal_lahir" class="block font-medium text-gray-700">Tanggal Lahir</label>
                        <input type="date" id="tanggal_lahir"
                            class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
                    </div>
                    <div>
                        <label for="email" class="block font-medium text-gray-700">Email</label>
                        <input type="email" id="email"
                            class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
                    </div>
                    <div>
                        <label for="nomor_hp" class="block font-medium text-gray-700">Nomor HP</label>
                        <input type="text" id="nomor_hp"
                            class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition" />
                    </div>
                </div>
                <p class="error-message text-red-500 text-sm mt-2 hidden">Harap isi semua data!</p>
                <div class="flex justify-end mt-4">
                    <button type="button"
                        class="next-btn bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">Selanjutnya</button>
                </div>
            </div>

            <!-- Step 2: Berkas -->
            <div id="step-2" class="step-content hidden">
                <h2 class="text-lg font-semibold mb-2">Berkas</h2>
                <div class="space-y-3">
                    <div>
                        <label for="ktp" class="block font-medium text-gray-700">Upload KTP/SIM</label>
                        <input type="file" id="ktp" class="w-full border border-gray-300 p-2 rounded" />
                    </div>
                    <div>
                        <label for="ijazah" class="block font-medium text-gray-700">Upload Ijazah</label>
                        <input type="file" id="ijazah" class="w-full border border-gray-300 p-2 rounded" />
                    </div>
                    <div>
                        <label for="kk" class="block font-medium text-gray-700">Upload Kartu Keluarga</label>
                        <input type="file" id="kk" class="w-full border border-gray-300 p-2 rounded" />
                    </div>
                </div>
                <p class="error-message text-red-500 text-sm mt-2 hidden">Harap unggah semua berkas!</p>
                <div class="flex justify-between mt-4">
                    <button type="button"
                        class="prev-btn bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">Sebelumnya</button>
                    <button type="button"
                        class="next-btn bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">Selanjutnya</button>
                </div>
            </div>

            <!-- Step 3: Pendaftaran -->
            <div id="step-3" class="step-content hidden">
                <h2 class="text-lg font-semibold mb-2">Pendaftaran</h2>
                <div class="space-y-3">
                    <div>
                        <label for="alamat" class="block font-medium text-gray-700">Alamat Lengkap</label>
                        <textarea id="alamat"
                            class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition"></textarea>
                    </div>
                </div>
                <p class="error-message text-red-500 text-sm mt-2 hidden">Harap isi alamat!</p>
                <div class="flex justify-between mt-4">
                    <button type="button"
                        class="prev-btn bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">Sebelumnya</button>
                    <button type="button"
                        class="next-btn bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">Selanjutnya</button>
                </div>
            </div>

            <!-- Step 4: Peninjauan -->
            <div id="step-4" class="step-content hidden">
                <h2 class="text-lg font-semibold mb-2">Peninjauan</h2>
                <p class="mb-4">Silakan periksa kembali data yang telah diisi sebelum mengirimkan pendaftaran.</p>
                <div class="flex justify-between mt-4">
                    <button type="button"
                        class="prev-btn bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">Sebelumnya</button>
                    <button type="submit"
                        class="submit-btn bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Kirim
                        Pendaftaran</button>
                </div>
            </div>
        </form>

    </div>
    @include('components.navbar')

    <script>
        const steps = document.querySelectorAll('.step-content');
        const progressBar = document.getElementById('progress-bar');
        let currentStep = 0;

        function showStep(step) {
            steps.forEach((content, index) => {
                content.classList.toggle('hidden', index !== step);
            });
            progressBar.style.width = `${(step / (steps.length - 1)) * 100}%`;
        }

        document.querySelectorAll('.next-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                if (validateStep(currentStep)) {
                    currentStep++;
                    showStep(currentStep);
                }
            });
        });

        document.querySelectorAll('.prev-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                currentStep--;
                showStep(currentStep);
            });
        });

        function validateStep(step) {
            const inputs = steps[step].querySelectorAll('input, textarea');
            let isValid = true;
            inputs.forEach(input => {
                if (!input.value) {
                    isValid = false;
                }
            });
            const errorMessage = steps[step].querySelector('.error-message');
            errorMessage.classList.toggle('hidden', isValid);
            return isValid;
        }

        // Tampilkan step awal
        showStep(currentStep);
    </script>
</body>

</html>
