<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Hewan Peliharaan</title>
    <style>
        /* Styling untuk keseluruhan body */
        body {
            font-family: 'Baloo 2', cursive;
            background-color: #FFEBF0;
            margin: 0;
            padding: 0;
            color: #333;
            overflow-y: scroll; /* Memungkinkan halaman untuk scroll */
        }

        /* Kontainer utama untuk detail */
        .content {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow-y: auto; /* Agar konten bisa scroll */
        }

        /* Styling untuk gambar */
        .img-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .img-container img {
            max-width: 90%; /* Menyesuaikan gambar agar lebih kecil */
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        /* Styling untuk informasi detail */
        .detail-info {
            font-size: 1.2rem;
            line-height: 1.6;
            margin: 10px 0;
        }

        .detail-info p {
            margin-bottom: 10px;
        }

        /* Styling untuk heading dan label */
        .detail-info strong {
            color: #FF4081; /* Warna teks untuk heading */
        }

        /* Styling untuk tombol jika ada */
        .btn {
            background-color: #FF4081;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #E91E63;
        }

        /* Kawaii desain elemen */
        .kawaii-decor {
            text-align: center;
            margin-top: 20px;
            font-size: 2rem;
            color: #FF4081;
        }

        .kawaii-decor img {
            width: 30px;
            margin: 0 10px;
        }

        .heart {
            color: red;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="img-container">
            <?php if ($gambar->foto): ?>
                <img src="<?= base_url('images/' . $gambar->foto) ?>" alt="Foto Hewan">
            <?php else: ?>
                <span>No image available</span>
            <?php endif; ?>
        </div>

        <div class="detail-info">
            <p><strong>Nama Hewan:</strong> <?= $gambar->deskripsi ?></p>
            <p><strong>Makanan:</strong> <?= $gambar->makanan ?></p>
            <p><strong>Habitat:</strong> <?= $gambar->habitat ?></p>
            <p><strong>Merawat:</strong> <?= $gambar->merawat ?></p>
            <p><strong>Kelebihan:</strong> <?= $gambar->kelebihan ?></p>
            <p><strong>Kekurangan:</strong> <?= $gambar->kekurangan ?></p>
            <p><strong>Jenis:</strong> <?= $gambar->jenis ?></p>
        </div>

        <!-- Kawaii dekorasi -->
        <div class="kawaii-decor">
            <span class="heart">❤️</span>
            <img src="<?= base_url('images/pet.png') ?>" alt="Cute Paw"> <!-- Gambar imut bisa disesuaikan -->
            <span class="heart">❤️</span>
        </div>

        <!-- Tombol kembali -->
        <a href="<?= base_url('home/dashboard') ?>" class="btn">Kembali</a>
    </div>
</body>
</html>
