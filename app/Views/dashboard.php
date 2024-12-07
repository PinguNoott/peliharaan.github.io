<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kawaii Grid Display</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Fredoka+One&display=swap">
    <style>
        body {
            font-family: 'Baloo 2', cursive;
            background-color: #FFF0F6; /* Warna pastel lebih cerah */
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .content {
            padding: 20px;
            overflow-y: auto; /* Halaman scrollable */
            max-height: 100vh;
            position: relative;
        }
        .card-header {
            text-align: center;
            font-family: 'Fredoka One', cursive; /* Font playful */
            font-size: 2rem;
            font-weight: bold;
            color: #FF89BB; /* Warna pastel pink */
            margin-bottom: 20px;
            position: relative;
            animation: bounceIn 1.5s; /* Animasi bounce */
        }
        .card-header::after {
            content: "✨";
            font-size: 1.5rem;
            color: #FFD700; /* Emoji tambahan */
            animation: sparkle 2s infinite;
            position: absolute;
            right: -20px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Responsive grid */
            gap: 20px;
        }
        .card {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
            position: relative;
            animation: float 3s infinite ease-in-out;
        }
        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }
        .card img {
            width: 80%; /* Ukuran gambar lebih kecil untuk estetika */
            height: auto;
            border-radius: 15px;
            border: 3px solid #FFB6C1; /* Bingkai pink pastel */
            transition: transform 0.3s ease-in-out;
        }
        .card img:hover {
            transform: rotate(-3deg) scale(1.1);
        }
        .card-info {
            font-size: 1rem;
            color: #FF89BB;
            margin: 10px 0;
        }
        .btn {
            background-color: #FF89BB;
            color: white;
            border-radius: 50px;
            padding: 10px 20px;
            font-weight: bold;
            text-transform: capitalize;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #FF6FAE;
            box-shadow: 0px 8px 15px rgba(255, 137, 187, 0.4);
            transform: translateY(-3px);
        }

        /* Animasi lucu */
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        @keyframes bounceIn {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.5;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        @keyframes sparkle {
            0%, 100% {
                opacity: 0;
                transform: scale(0.8) rotate(0deg);
            }
            50% {
                opacity: 1;
                transform: scale(1.2) rotate(15deg);
            }
        }

        /* Latar belakang elemen tambahan */
        .background-icon {
            position: absolute;
            width: 50px;
            height: 50px;
            opacity: 0.4;
            animation: float 5s infinite;
        }
        .background-icon.heart {
            top: 10%;
            left: 20%;
            animation-delay: 1s;
        }
        .background-icon.star {
            bottom: 15%;
            right: 25%;
            animation-delay: 2s;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="card-header">
            🐾 Informasi Hewan Peliharaan 🐾
        </div>

        
        <div class="grid-container">
            <?php foreach ($gambarData as $gambar): ?>
                <div class="card">
                    <div class="card-img">
                        <?php if ($gambar->foto): ?>
                            <img src="<?= base_url('images/' . $gambar->foto) ?>" alt="Image">
                        <?php else: ?>
                            <span>No image</span>
                        <?php endif; ?>
                    </div>
                    <div class="card-info">
                        <p><?= $gambar->deskripsi ?></p>
                    </div>
                    <div class="card-actions">
                        <a href="<?= base_url('home/detail/' . $gambar->id_gambar) ?>">
                            <button class="btn">Lihat</button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
