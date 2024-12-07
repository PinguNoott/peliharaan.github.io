<!-- <!-- <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cute Table</title>
    <!-- Link Google Font (Baloo 2) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap">
    <style>
        body {
            font-family: 'Baloo 2', cursive;
            background-color: #FFEBF0; /* Pastel pink */
            margin: 0;
            padding: 0;
        }

        .content {
            padding: 20px;
        }

        .card {
            background: #FFFFFF;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: #FF6B81; /* Pastel pink */
            margin-bottom: 20px;
        }

        .btn {
            border-radius: 10px;
            padding: 10px 15px;
            font-weight: bold;
            transition: all 0.3s ease;
            text-transform: capitalize;
        }

        .btn-success {
            background-color: #FFB3C1; /* Soft pink */
            border: none;
            color: white;
        }

        .btn-success:hover {
            background-color: #FF6B81; /* Vibrant pink */
        }

        .btn-warning {
            background-color: #FFD166; /* Soft yellow */
            border: none;
            color: white;
        }

        .btn-warning:hover {
            background-color: #FFAB00; /* Vibrant yellow */
        }

        .btn-primary {
            background-color: #A5D6A7; /* Soft green */
            border: none;
            color: white;
        }

        .btn-primary:hover {
            background-color: #81C784; /* Vibrant green */
        }

        .btn-danger {
            background-color: #FF6B81; /* Soft red */
            border: none;
            color: white;
        }

        .btn-danger:hover {
            background-color: #FF3D57; /* Vibrant red */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #FFF8F9; /* Pastel background */
        }

        table th, table td {
            border: 1px solid #FFB3C1; /* Pastel border */
            text-align: center;
            padding: 10px;
        }

        table th {
            background-color: #FF6B81;
            color: white;
            font-size: 1.2rem;
        }

        table tr:nth-child(even) {
            background-color: #FFE5EA; /* Soft alternate row */
        }

        .table-title {
            margin-bottom: 10px;
            color: #FF6B81;
            font-weight: bold;
            text-align: center;
        }

        .card-body {
            max-height: 400px; /* Adjust height as needed */
            overflow-y: auto; /* Enable vertical scrolling */
            padding-right: 15px; /* Ensure space for scrollbar */
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="card">
            <div class="card-header">
                <div class="table-title">Tabel Informasi Hewan</div>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-success" onclick="window.location.href='<?=base_url('home/tambahgambar')?>'">Tambah</button>

                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Hewan</th>
                            <th>Makanan</th>
                            <th>Habitat</th>
                            <th>Merawat</th>
                            <th>Kelebihan</th>
                            <th>Kekurangan</th>
                            <th>Jenis</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($gambarData as $key => $gambar) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $gambar->deskripsi ?></td>
                            <td><?= $gambar->makanan ?></td>
                            <td><?= $gambar->habitat ?></td>
                            <td><?= $gambar->merawat ?></td>
                            <td><?= $gambar->kelebihan ?></td>
                            <td><?= $gambar->kekurangan ?></td>
                            <td><?= $gambar->jenis ?></td>
                            <td>
                                <?php if ($gambar->foto) { ?>
                                    <img src="<?= base_url('images/'.$gambar->foto) ?>" alt="Image" width="100">
                                <?php } else { ?>
                                    <span>No image</span>
                                <?php } ?>
                            </td>
                            <td>
                                <a href="<?= base_url('home/editgambar/'.$gambar->id_gambar) ?>">
                                    <button class="btn btn-primary">Edit</button>
                                </a>
                                <a href="<?= base_url('home/hapusgambar/'.$gambar->id_gambar) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <button class="btn btn-danger">Hapus</button>
                                </a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
 --> --> -->