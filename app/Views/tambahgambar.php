<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Gambar</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Baloo 2', cursive;
        margin: 0;
        padding: 0;
        background-color: #FFF5F7; /* Pink lembut */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        box-sizing: border-box;
    }

    .form-container {
        background: #FFFFFF;
        padding: 15px 20px; /* Padding lebih kecil */
        border-radius: 10px; /* Kurangi radius */
        box-shadow: 0 4px 8px rgba(255, 107, 129, 0.2);
        width: 100%;
        max-width: 600px; /* Lebar form lebih kecil */
        box-sizing: border-box;
        border: 1px solid #FF6B81; /* Garis batas */
    }

    h2 {
        text-align: center;
        color: #FF6B81;
        font-size: 18px; /* Ukuran lebih kecil */
        margin-bottom: 15px;
        position: relative;
    }

    h2::after {
        content: '💖'; /* Ikon tambahan */
        font-size: 18px; /* Ikon lebih kecil */
        position: absolute;
        right: -25px;
        top: 0;
        color: #FF6B81;
    }

    label {
        font-size: 12px; /* Label lebih kecil */
        color: #FF6B81;
        font-weight: bold;
        display: block;
        margin: 8px 0 3px; /* Margin lebih kecil */
    }

    input[type="text"],
    select,
    textarea {
        width: 48%; /* Membagi input menjadi dua kolom */
        padding: 6px; /* Padding lebih kecil */
        margin: 4px 1%;
        border: 1px solid #FF6B81; /* Pink lembut */
        border-radius: 5px; /* Radius kecil */
        box-sizing: border-box;
        font-size: 12px; /* Font lebih kecil */
        color: #555;
        display: inline-block;
        background-color: #FFF5F7; /* Pink lembut */
    }

    textarea {
        min-height: 70px; /* Tinggi textarea lebih kecil */
        resize: none;
    }

    .file-input {
        width: 100%;
        display: flex;
        align-items: center;
        padding: 8px; /* Padding lebih kecil */
        margin: 8px 0;
        border: 1px dashed #FF6B81; /* Dashed border */
        border-radius: 8px; /* Radius lebih kecil */
        background-color: #FFF5F7;
        cursor: pointer;
        text-align: center;
        font-size: 12px; /* Font lebih kecil */
        color: #FF6B81;
    }

    .file-input:hover {
        background-color: #FFEBF0; /* Hover effect */
    }

    button {
        width: 48%; /* Tombol lebih kecil */
        padding: 8px; /* Padding lebih kecil */
        background-color: #FF6B81;
        color: white;
        font-size: 14px; /* Font lebih kecil */
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        margin: 8px 1%; /* Margin lebih kecil */
        font-weight: bold;
    }

    button:hover {
        background-color: #FF5068;
        box-shadow: 0 3px 6px rgba(255, 107, 129, 0.3);
    }

    .form-footer {
        margin-top: 10px; /* Margin lebih kecil */
        text-align: center;
    }

    .form-footer a {
        text-decoration: none;
        color: #FF6B81;
        font-size: 12px; /* Font lebih kecil */
    }

    .form-footer a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        input[type="text"],
        textarea,
        button {
            width: 100%; /* Responsif: kolom penuh */
        }

        .form-container {
            width: 90%; /* Lebar 90% untuk perangkat kecil */
        }
    }
</style>

</head>
<body>
    <div class="form-container">
        <form action="<?= base_url('home/aksi_t_gambar') ?>" method="post" enctype="multipart/form-data">
            
            <label for="deskripsi">Nama Hewan</label>
            <input type="text" id="deskripsi" name="deskripsi" placeholder="Masukkan Nama Hewan" required></textarea>

            <label for="makanan">Makanan</label>
            <input type="text" id="makanan" name="makanan" placeholder="Masukkan makanan" required>

            <label for="habitat">Habitat</label>
            <input type="text" id="habitat" name="habitat" placeholder="Masukkan habitat" required>

            <label for="merawat">Merawat</label>
            <input type="text" id="merawat" name="merawat" placeholder="Masukkan cara merawat" required>

            <label for="kelebihan">Kelebihan</label>
            <input type="text" id="kelebihan" name="kelebihan" placeholder="Masukkan kelebihan" required>

            <label for="kekurangan">Kekurangan</label>
            <input type="text" id="kekurangan" name="kekurangan" placeholder="Masukkan kekurangan" required>

            <label for="jenis">Jenis</label>
            <input type="text" id="jenis" name="jenis" placeholder="Masukkan jenis" required>

            <label for="foto">Foto</label>
            <div class="file-input">
                <input type="file" id="foto" name="foto" required>
                <label for="foto" class="file-label">Pilih file gambar</label>
            </div>

            <button type="submit">Tambah Gambar</button>
        </form>
        <div class="form-footer">
            <a href="<?= base_url('home/gambar') ?>">Kembali</a>
        </div>
    </div>
</body>
</html>
