<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah Berkas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-gray-100 flex justify-center items-center min-h-screen sm:p-6">
    <div class="w-full sm:max-w-md bg-white shadow-lg rounded-lg overflow-hidden p-6 relative min-h-screen">
        <a href="/profile">
            <button class="flex gap-2 items-center text-gray-700 hover:text-blue-600 transition">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 5l-7 7 7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span class="font-semibold">Kembali</span>
            </button>
        </a>
        <h1 class="text-lg font-semibold text-gray-800 text-center mb-4">Unggah Berkas</h1>

        <form id="uploadForm" action="/berkas/uploadBerkas" method="POST" enctype="multipart/form-data" class="space-y-4">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div id="fileInputsContainer" class="space-y-4">
                <div class="file-input-group flex items-center gap-2">
                    <select name="name[]" class="p-2 border rounded w-1/3">
                        <option value="KK">Kartu Keluarga (KK)</option>
                        <option value="Ijazah">Ijazah</option>
                        <option value="SKHUN">SKHUN</option>
                        <option value="Sertifikat">Sertifikat</option>
                    </select>
                    <input type="file" name="berkas[]" accept="image/jpg,image/jpeg,image/png" required class="p-2 border rounded w-2/3">
                    <button type="button" class="deleteFileInput text-red-500 hover:text-red-700">
                        🗑️
                    </button>
                </div>
            </div>

            <button type="button" id="addFileInput"
                class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600">Tambah Berkas</button>

            <button id="uploadButton" type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 flex justify-center items-center">
                <span id="buttonText">Unggah Berkas</span>
                <span id="loadingSpinner"
                    class="hidden ml-2 w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin"></span>
            </button>
        </form>
    </div>
    @include('components.navbar')

    <script>
        document.getElementById("addFileInput").addEventListener("click", function () {
            let container = document.getElementById("fileInputsContainer");
            let fileInputs = container.getElementsByClassName("file-input-group");

            if (fileInputs.length >= 13) {
                Swal.fire({
                    title: "Maksimal 13 Berkas!",
                    text: "Anda tidak dapat mengunggah lebih dari 13 berkas.",
                    icon: "warning",
                    confirmButtonText: "OK"
                });
                return;
            }

            let newInput = document.createElement("div");
            newInput.classList.add("file-input-group", "flex", "items-center", "gap-2");
            newInput.innerHTML = `
                <select name="name[]" class="p-2 border rounded w-1/3">
                    <option value="KK">Kartu Keluarga (KK)</option>
                    <option value="Ijazah">Ijazah</option>
                    <option value="SKHUN">SKHUN</option>
                    <option value="Sertifikat">Sertifikat</option>
                </select>
                <input type="file" name="berkas[]" accept="image/jpg,image/jpeg,image/png" required class="p-2 border rounded w-2/3">
                <button type="button" class="deleteFileInput text-red-500 hover:text-red-700">
                    🗑️
                </button>
            `;
            container.appendChild(newInput);
            addDeleteEventListeners();
        });

        function addDeleteEventListeners() {
            let deleteButtons = document.querySelectorAll(".deleteFileInput");
            deleteButtons.forEach(button => {
                button.removeEventListener("click", deleteFileInput); // Hindari duplikasi event
                button.addEventListener("click", deleteFileInput);
            });
        }

        function deleteFileInput(event) {
            let container = document.getElementById("fileInputsContainer");
            let fileInputs = container.getElementsByClassName("file-input-group");

            if (fileInputs.length > 1) {
                event.target.closest(".file-input-group").remove();
            } else {
                Swal.fire({
                    title: "Tidak Bisa Dihapus!",
                    text: "Minimal harus ada satu berkas yang diunggah.",
                    icon: "warning",
                    confirmButtonText: "OK"
                });
            }
        }

        addDeleteEventListeners();

        document.getElementById("uploadForm").addEventListener("submit", function (event) {
            event.preventDefault();
            let formData = new FormData(this);
            let uploadButton = document.getElementById("uploadButton");
            let buttonText = document.getElementById("buttonText");
            let loadingSpinner = document.getElementById("loadingSpinner");

            // Tampilkan loading
            buttonText.textContent = "Mengunggah...";
            loadingSpinner.classList.remove("hidden");
            uploadButton.disabled = true;

            fetch("/berkas/uploadBerkas", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Berkas berhasil diunggah.",
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then(() => {
                        window.location.href = "/profile";
                    });
                } else {
                    Swal.fire({
                        title: "Gagal!",
                        text: data.error || "Terjadi kesalahan saat mengunggah.",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    title: "Error!",
                    text: "Terjadi kesalahan, silakan coba lagi.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            })
            .finally(() => {
                // Sembunyikan loading
                buttonText.textContent = "Unggah Berkas";
                loadingSpinner.classList.add("hidden");
                uploadButton.disabled = false;
            });
        });
    </script>
</body>

</html>
