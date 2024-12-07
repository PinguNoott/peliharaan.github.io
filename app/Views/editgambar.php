<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Gambar</title>
    <style>
        body {
            font-family: 'Baloo 2', cursive;
            margin: 0;
            padding: 0;
            background-color: #FFF5F7; /* Soft pink background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
            box-sizing: border-box;
        }

        .form-container {
            background: #fff;
            padding: 15px 20px; /* Smaller padding for compact design */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 550px; /* Adjusted max-width for smaller form */
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: #FF6B81;
            margin-bottom: 15px;
            font-size: 18px; /* Smaller font size */
        }

        label {
            font-size: 12px; /* Smaller font size */
            color: #FF6B81;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 8px; /* Smaller padding */
            margin-bottom: 12px;
            border: 1px solid #FF6B81;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 12px; /* Smaller font size */
            color: #555;
            background-color: #FFF5F7; /* Light pink background */
        }

        input[type="text"]::placeholder,
        textarea::placeholder {
            color: #FF6B81;
        }

        textarea {
            resize: vertical;
            min-height: 90px; /* Smaller height for textarea */
        }

        /* Input file styling */
        .file-input {
            display: flex;
            align-items: center;
            padding: 8px; /* Smaller padding */
            margin-bottom: 12px;
            border: 1px dashed #FF6B81;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px; /* Smaller font size */
            color: #555;
            background-color: white;
        }

        button {
            width: 100%;
            padding: 10px; /* Smaller padding */
            background-color: #FF6B81;
            color: white;
            font-size: 14px; /* Smaller font size */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        button:hover {
            background-color: #FF5068;
            box-shadow: 0 3px 6px rgba(255, 107, 129, 0.3);
        }

        .form-footer {
            margin-top: 8px; /* Smaller margin */
            text-align: center;
        }

        .form-footer a {
            text-decoration: none;
            color: #FF6B81;
            font-size: 12px; /* Smaller font size */
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-container {
                width: 90%; /* Make the form take 90% of the screen width on smaller devices */
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="<?= base_url('home/aksi_e_gambar') ?>" method="post" enctype="multipart/form-data">
            <label for="deskripsi">Nama Hewan</label>
            <input type="text" id="deskripsi" name="deskripsi" value="<?=$gambar->deskripsi?>" placeholder="Masukkan Nama Hewan" required>

            <label for="makanan">Makanan</label>
            <input type="text" id="makanan" name="makanan" value="<?=$gambar->makanan?>" placeholder="Masukkan makanan" required>

            <label for="habitat">Habitat</label>
            <input type="text" id="habitat" name="habitat" value="<?=$gambar->habitat?>" placeholder="Masukkan habitat" required>

            <label for="merawat">Merawat</label>
            <input type="text" id="merawat" name="merawat" value="<?=$gambar->merawat?>" placeholder="Masukkan cara merawat" required>

            <label for="kelebihan">Kelebihan</label>
            <input type="text" id="kelebihan" name="kelebihan" value="<?=$gambar->kelebihan?>" placeholder="Masukkan kelebihan" required>

            <label for="kekurangan">Kekurangan</label>
            <input type="text" id="kekurangan" name="kekurangan" value="<?=$gambar->kekurangan?>" placeholder="Masukkan kekurangan" required>

            <label for="jenis">Jenis</label>
            <input type="text" id="jenis" name="jenis" value="<?=$gambar->jenis?>" placeholder="Masukkan jenis" required>

            <label for="foto">Foto (Leave blank if no new photo)</label>
            <input type="file" id="foto" name="foto">

            <button type="submit">Update</button>
            <input type="hidden" name="id" value="<?=$gambar->id_gambar?>">
        </form>
        <div class="form-footer">
            <a href="<?= base_url('home/gambar') ?>">Kembali</a>
        </div>
    </div>
</body>
</html>
