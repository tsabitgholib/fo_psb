<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran Sekolah</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-gray-100 flex justify-center items-center min-h-screen p-6">
    <div class="w-full sm:max-w-md bg-white shadow-lg rounded-lg overflow-hidden p-6 relative">
        <!-- Tombol Back -->
        <a href="/profile" class="flex gap-2 items-center text-gray-700 hover:text-blue-600 transition">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 5l-7 7 7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <span class="font-semibold">Kembali</span>
        </a>

        <!-- Header Title -->
        <h1 class="text-3xl font-bold text-center mt-4 mb-6">Pendaftaran Sekolah</h1>

        <!-- Progress Bar -->
        <div class="mb-6">
            <div class="w-full bg-gray-300 rounded-full h-2">
                <div id="progress-bar" class="bg-blue-500 h-2 rounded-full transition-all duration-300"
                    style="width: 0%;"></div>
            </div>
            <p id="progress-text" class="text-sm text-gray-600 mt-2 text-center">0% terisi</p>
        </div>

        <!-- Form Pendaftaran -->
        <!-- Form dikirimkan ke route pendaftran.store dengan method POST dan mendukung file upload -->
        <form id="registration-form" action="{{ route('pendaftaran.store') }}" method="POST"
            enctype="multipart/form-data" class="space-y-8">
            @csrf

            <!-- Data Siswa -->
            <section>
                <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Data Siswa</h2>
                <div class="space-y-4">
                    <div>
                        <label for="nisn" class="block font-medium text-gray-700">NISN</label>
                        <input type="text" name="nisn" id="nisn" placeholder="Masukkan NISN"
                            class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <label for="tempat_lahir" class="block font-medium text-gray-700">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat lahir"
                                class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                        <div class="w-1/2">
                            <label for="tanggal_lahir" class="block font-medium text-gray-700">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Data Orang Tua -->
            <section>
                <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Data Orang Tua</h2>
                <div class="space-y-4">
                    <div>
                        <label for="nama_ayah" class="block font-medium text-gray-700">Nama Ayah</label>
                        <input type="text" name="nama_ayah" id="nama_ayah" placeholder="Masukkan nama ayah"
                            class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div>
                        <label for="pekerjaan_ayah" class="block font-medium text-gray-700">Pekerjaan Ayah</label>
                        <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah"
                            placeholder="Masukkan pekerjaan ayah"
                            class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div>
                        <label for="nama_ibu" class="block font-medium text-gray-700">Nama Ibu</label>
                        <input type="text" name="nama_ibu" id="nama_ibu" placeholder="Masukkan nama ibu"
                            class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div>
                        <label for="pekerjaan_ibu" class="block font-medium text-gray-700">Pekerjaan Ibu</label>
                        <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu"
                            placeholder="Masukkan pekerjaan ibu"
                            class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <div>
                        <label for="penghasilan_ortu" class="block font-medium text-gray-700">Penghasilan Orang
                            Tua</label>
                        <input type="number" name="penghasilan_ortu" id="penghasilan_ortu"
                            placeholder="Masukkan penghasilan orang tua"
                            class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                </div>
            </section>

            <!-- Pendaftaran (Alamat) -->
            <section>
                <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Pendaftaran</h2>
                <div class="space-y-4">
                    <div>
                        <label for="alamat" class="block font-medium text-gray-700">Alamat Lengkap</label>
                        <textarea name="alamat" id="alamat" placeholder="Masukkan alamat lengkap"
                            class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                </div>
            </section>

            <!-- Tombol Submit -->
            <div class="flex justify-center pb-28">
                <button type="submit"
                    class="next-btn bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600 transition">
                    Kirim Pendaftaran
                </button>
            </div>
        </form>
    </div>

    @include('components.navbar')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi elemen form dan progress
            const form = document.getElementById('registration-form');
            const progressBar = document.getElementById('progress-bar');
            const progressText = document.getElementById('progress-text');
            // Ambil semua input dan textarea di dalam form
            const inputs = Array.from(form.querySelectorAll('input, textarea'));

            function updateProgress() {
                let filled = 0;
                inputs.forEach(input => {
                    // Jika input file, periksa apakah file sudah diunggah
                    if (input.type === 'file') {
                        if (input.files && input.files.length > 0) {
                            filled++;
                        }
                    } else {
                        if (input.value.trim() !== '') {
                            filled++;
                        }
                    }
                });
                const total = inputs.length;
                const percentage = Math.round((filled / total) * 100);
                progressBar.style.width = percentage + '%';
                progressText.textContent = percentage + '% terisi';
            }

            // Pasang event listener pada setiap input dan textarea
            inputs.forEach(input => {
                if (input.type === 'file') {
                    input.addEventListener('change', updateProgress);
                } else {
                    input.addEventListener('input', updateProgress);
                }
            });

            // Update progress saat halaman dimuat
            updateProgress();

            // Tangani submit form secara AJAX
            form.addEventListener('submit', async function(e) {
                e.preventDefault(); // cegah form submit biasa
                const formData = new FormData(form);

                try {
                    const response = await fetch(form.action, {
                        method: form.method,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: formData
                    });

                    const data = await response.json();

                    if (response.ok) {
                        // Jika sukses, tampilkan pesan sukses dengan SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: data.message,
                        }).then(() => {
                            // Redirect atau refresh halaman sesuai kebutuhan
                            window.location.href = '/profile';
                        });
                    } else {
                        // Jika terjadi error, gabungkan pesan error (jika ada)
                        let errorMsg = data.message || 'Terjadi kesalahan. Silakan coba lagi.';
                        if (data.errors) {
                            errorMsg = Object.values(data.errors).flat().join(', ');
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: errorMsg,
                        });
                    }
                } catch (error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Terjadi kesalahan saat mengirim data. Silakan coba lagi.',
                    });
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Panggil API untuk mendapatkan data pendaftaran berdasarkan user
            fetch("{{ route('pendaftaran.index') }}")
                .then(response => response.json())
                .then(data => {
                    const pendaftaran = data.data;
                    document.getElementById("nisn").value = pendaftaran.nisn || '-';
                    document.getElementById("tempat_lahir").value = pendaftaran.tempat_lahir ||
                        '-';
                    document.getElementById("tanggal_lahir").value = pendaftaran.tanggal_lahir ||
                        '-';
                    document.getElementById("nama_ayah").value = pendaftaran.nama_ayah ||
                        '-';
                    document.getElementById("pekerjaan_ayah").value = pendaftaran
                        .pekerjaan_ayah ||
                        '-';
                    document.getElementById("nama_ibu").value = pendaftaran.nama_ibu ||
                        '-';
                    document.getElementById("pekerjaan_ibu").value = pendaftaran.pekerjaan_ibu ||
                        '-';
                    document.getElementById("penghasilan_ortu").value =
                        pendaftaran.penghasilan_ortu ||
                        "-";
                    document.getElementById("alamat").value = pendaftaran.alamat || '-';

                })
                .catch(error => {
                    console.error("Error fetching data:", error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Terjadi kesalahan saat mengambil data!'
                    });
                });
        });
    </script>
</body>

</html>
