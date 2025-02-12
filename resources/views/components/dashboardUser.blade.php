<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-gray-100 flex justify-center items-center min-h-screen sm:p-6">
    <div class="w-full sm:max-w-md bg-white shadow-lg rounded-lg overflow-hidden p-6 relative">
        <!-- Tombol Back -->
        <a href="/profile">
            <button class="flex gap-2 items-center text-gray-700 hover:text-blue-600 transition">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 5l-7 7 7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span class="font-semibold">Kembali</span>
            </button>
        </a>
        <!-- Informasi Siswa -->
        <div class="mt-6 flex items-center gap-2 border-b pb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black mr-2" fill="none" viewBox="0 0 24 24"
                stroke="black">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
            </svg>
            <h2 class="text-lg font-semibold text-gray-700 text-left">Informasi Siswa</h2>
            <a href="/editBerkas"
                class="bg-yellow-400 p-1 rounded-lg text-sm font-bold text-white active:scale-105 duration-150 shadow">EDIT</a>

        </div>
        <!-- Data Siswa -->
        <div class="mt-6">
            <div class="bg-white p-4 shadow-md rounded-lg divide-y divide-gray-200 ">
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Nama Lengkap :</p>
                    <p id="preview-nama">-</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">NISN :</p>
                    <p id="preview-nisn">-</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Tempat & Tanggal Lahir :</p>
                    <p id="preview-tanggal_lahir" class="capitalize">-</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Email :</p>
                    <p id="preview-email">-</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Nomor HP :</p>
                    <p id="preview-nomor_hp">-</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Jenis Kelamin :</p>
                    <p id="preview-jenis_kelamin">-</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Pilihan Sekolah :</p>
                    <p id="preview-pilihan_sekolah">-</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Pilihan Program :</p>
                    <p id="preview-pilihan_program">-</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Nama Ayah :</p>
                    <p id="preview-nama_ayah">-</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Pekerjaan Ayah :</p>
                    <p id="preview-pekerjaan_ayah">-</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Nama Ibu :</p>
                    <p id="preview-nama_ibu">-</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Pekerjaan Ibu :</p>
                    <p id="preview-pekerjaan_ibu">-</p>
                </div>
                <div class="py-2 flex justify-between items-center">
                    <p class="font-semibold">Penghasilan Orang Tua :</p>
                    <p id="preview-penghasilan_ortu">-</p>
                </div>
                <div class="py-2">
                    <p class="font-semibold">Alamat :</p>
                    <p id="preview-alamat">-</p>
                </div>
            </div>
        </div>


        <div class="mt-6">
            <h3 class="text-lg font-semibold text-gray-700">Preview Berkas</h3>
            <div id="previewContainer" class="bg-white p-4 shadow-md rounded-lg divide-y divide-gray-200">
                <p class="text-gray-500 text-center">Tidak ada berkas yang diunggah.</p>
            </div>
        </div>


        <!-- Footer -->
        <footer class="text-center text-sm text-gray-500 mt-8 border-t pt-4">
            <p>&copy; 2024 PT. Inovasi Cipta Teknologi. Semua Hak Dilindungi.</p>
        </footer>
        <footer class="text-center text-sm text-gray-500 mt-20 border-t pt-4">
            <p>&copy; 2024 PT. Inovasi Cipta Teknologi. Semua Hak Dilindungi.</p>
        </footer>
    </div>
    @include('components.navbar')
    </div>
    <!--  -->
</body>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Panggil API untuk mendapatkan data pendaftaran berdasarkan user
        fetch("{{ route('pendaftaran.index') }}")
            .then(response => response.json())
            .then(data => {
                const pendaftaran = data.data;
                document.getElementById("preview-nama").textContent = pendaftaran.nama || '-';
                document.getElementById("preview-nisn").textContent = pendaftaran.nisn || '-';
                document.getElementById("preview-tanggal_lahir").textContent =
                    `${pendaftaran.tempat_lahir}, ${pendaftaran.tanggal_lahir}` ||
                    '-';
                document.getElementById("preview-email").textContent = pendaftaran.email || '-';
                document.getElementById("preview-nomor_hp").textContent = pendaftaran.nomor_hp || '-';
                document.getElementById("preview-nama_ayah").textContent = pendaftaran.nama_ayah ||
                    '-';
                document.getElementById("preview-pekerjaan_ayah").textContent = pendaftaran
                    .pekerjaan_ayah ||
                    '-';
                document.getElementById("preview-nama_ibu").textContent = pendaftaran.nama_ibu ||
                    '-';
                document.getElementById("preview-pekerjaan_ibu").textContent = pendaftaran.pekerjaan_ibu ||
                    '-';
                document.getElementById("preview-penghasilan_ortu").textContent =
                    pendaftaran.penghasilan_ortu !== null && pendaftaran.penghasilan_ortu !== undefined ?
                    `Rp ${parseInt(pendaftaran.penghasilan_ortu).toLocaleString('id-ID')}` :
                    "-";
                document.getElementById("preview-jenis_kelamin").textContent = pendaftaran.jenis_kelamin ||
                    '-';
                document.getElementById("preview-pilihan_sekolah").textContent = pendaftaran
                    .pilihan_sekolah || '-';
                document.getElementById("preview-pilihan_program").textContent = pendaftaran
                    .pilihan_program || '-';
                document.getElementById("preview-alamat").textContent = pendaftaran.alamat || '-';

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

    function fetchBerkas() {
        fetch("/berkas/getBerkasByUser")
            .then(response => response.json())
            .then(data => {
                console.log(data);
                
                let container = document.getElementById("previewContainer");
                container.innerHTML = "";
                if (data.status === "success" && Array.isArray(data.data) && data.data.length > 0) {
                    data.data.forEach(berkas => {
                        let berkasElement = document.createElement("div");
                        berkasElement.classList.add("py-2");
                        berkasElement.innerHTML = `<p class="font-semibold mb-2">${berkas.name}:</p>`;

                        // Pastikan path tersedia sebelum menggunakan endsWith()
                        if (berkas.file_url && typeof berkas.file_url === "string") {
                            if (berkas.file_url.endsWith(".pdf")) {
                                berkasElement.innerHTML += `<object data="${berkas.file_url}" type="application/pdf" class="w-full h-48">
                                <p class="text-center text-gray-500">
                                    Preview PDF tidak tersedia. <a href="${berkas.file_url}" class="text-blue-500 underline">Unduh file</a>
                                </p>
                            </object>`;
                            } else {
                                berkasElement.innerHTML +=
                                    `<img src="${berkas.file_url}" alt="Preview ${berkas.file_name}" class="w-full h-auto">`;
                            }
                        } else {
                            berkasElement.innerHTML +=
                                `<p class="text-red-500 text-center">Berkas tidak valid.</p>`;
                        }

                        container.appendChild(berkasElement);
                    });
                } else {
                    container.innerHTML =
                    `<p class="text-gray-500 text-center">Tidak ada berkas yang diunggah.</p>`;
                }
            })
            .catch(error => {
                console.error("Error fetching berkas:", error);
                document.getElementById("previewContainer").innerHTML =
                    `<p class="text-red-500 text-center">Gagal mengambil data berkas.</p>`;
            });
    }

    fetchBerkas();
</script>

</html>
