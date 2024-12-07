<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link CSS Bootstrap or other stylesheets here -->
    <link rel="stylesheet" href="<?= base_url('path/to/your/bootstrap.css') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&family=Baloo+2:wght@600&display=swap">
    <style>
        body {
            background-color: #FFEBF0; /* Warna pastel pink */
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
        }

        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 2rem;
            background-color: #FFFFFF; /* Putih untuk kontras */
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .login-container::before {
            content: '★';
            font-size: 50px;
            color: #FFB3C1;
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
        }

        .login-container img {
            max-width: 100px; /* Logo kecil dan imut */
            margin-bottom: 1rem;
            border-radius: 50%;
            background: #FFB3C1; /* Warna pastel untuk logo */
            padding: 10px;
        }

        .form-control {
            border-radius: 10px;
            border: 2px solid #FFB3C1; /* Border pastel */
            font-size: 1rem;
            padding: 0.6rem 1rem;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #FFB3C1; /* Pink pastel */
            border: none;
            font-size: 1.1rem;
            font-weight: bold;
            padding: 0.7rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #FF6B81; /* Pink lebih cerah */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h5.card-title {
            font-family: 'Baloo 2', cursive;
            color: #FF6B81;
            font-size: 2rem;
        }

        .text-center a {
            color: #FF6B81;
            font-weight: bold;
        }

        .text-center a:hover {
            color: #FF3D57;
        }

        .invalid-feedback {
            font-size: 0.9rem;
            color: #FF3D57; /* Warna merah pastel */
            font-weight: bold;
        }

        /* Tambahkan dekorasi kawaii */
        .decor {
            position: absolute;
            width: 40px;
            height: 40px;
            background-color: #FFB3C1;
            border-radius: 50%;
        }

        .decor-1 {
            top: -20px;
            right: -20px;
        }

        .decor-2 {
            bottom: -20px;
            left: -20px;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="login-container position-relative">
                    <div class="decor decor-1"></div>
                    <div class="decor decor-2"></div>

                    <div class="d-flex justify-content-center py-4">
                        <a href="<?= base_url('index.html') ?>" class="logo d-flex align-items-center w-auto">
                            <img src="<?= base_url('images/pet.png') ?>" alt="PetMate Logo">
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                        </div>

                        <!-- Menampilkan pesan kesalahan jika ada -->
                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger invalid-feedback">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <form class="row g-3 needs-validation" novalidate action="<?= base_url('home/aksilogin') ?>" method="POST">
                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">🐾</span>
                                    <input type="text" name="username" class="form-control" id="yourUsername" required>
                                </div>
                            </div>

                           <div class="col-12">
                                <label for="yourPassword" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="yourEmail" required>
                            </div>

                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="yourPassword" required>
                            </div>

                            


                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Login</button>
                            </div>
                            <div class="col-12">
                                <p class="small mb-0 text-center">Don't have an account? <a href="<?= base_url('home/signup') ?>">Create an account</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>
