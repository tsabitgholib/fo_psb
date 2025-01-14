<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 140vh;
            color: #333;
        }

        /* Container for the form */
        .form-container {
        width: 100%;
        max-width: 450px;
        background-color: #ffffff;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        padding: 2rem;
        height: 1000px; /* Panjang tetap */
        transition: box-shadow 0.3s ease;
}


        .form-container:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        /* Header styling */
        .header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 1.5rem;
            border-radius: 10px 10px 0 0;
        }

        .header h1 {
            font-size: 1.75rem;
            font-weight: bold;
        }

        /* Form styling */
        form {
            display: flex;
            flex-direction: column;
        }

        form label {
            margin-bottom: 0.5rem;
            font-weight: 600;
            font-size: 1.1rem;
            color: #555;
        }

        form input,
        form select,
        form textarea {
            margin-bottom: 1.2rem;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        form input:focus,
        form select:focus,
        form textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        form textarea {
            resize: vertical;
        }

        form button {
            padding: 1rem;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #0056b3;
        }

        footer {
            text-align: center;
            font-size: 0.9rem;
            color: #888888;
            margin-top: 2rem;
        }
        
    </style>
</head>
<body>
    <div class="form-container">
        <header class="header">
            <h1>Form Pendaftaran</h1>
        </header>
        <form action="#" method="POST">
            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" id="nama_siswa" name="nama_siswa" required>

            <label for="nama_orang_tua">Nama Orang Tua</label>
            <input type="text" id="nama_orang_tua" name="nama_orang_tua" required>

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" rows="3" required></textarea>

            <label for="no_hp">Nomor HP</label>
            <input type="tel" id="no_hp" name="no_hp" required>

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">Pilih</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <button type="submit">Daftar</button>
        </form>
        <footer>
            <p>&copy; 2024 Support By: PT.Inovasi Cipta Teknologi.</p>
        </footer>

        @include('components.navbar')

    </div>
</body>
</html>
