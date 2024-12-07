<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
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
        }

        .form-container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #FF6B81;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            color: #FF6B81;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #FF6B81;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
            color: #555;
        }

        input[type="text"]::placeholder {
            color: #FF6B81;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #FF6B81;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        button:hover {
            background-color: #FF5068;
            box-shadow: 0 4px 10px rgba(255, 107, 129, 0.4);
        }

        .form-footer {
            margin-top: 10px;
            text-align: center;
        }

        .form-footer a {
            text-decoration: none;
            color: #FF6B81;
            font-size: 14px;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Edit User</h2>
        <form action="<?= base_url('home/aksi_e_user') ?>" method="post">
            <label for="nama">Username</label>
            <input type="text" id="nama" name="nama" value="<?=$a->username?>" required>

          <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?=$a->email?>" required>

            <label for="pass">Password</label>
            <input type="text" id="pass" name="pass" value="<?=$a->password?>" required>

<select name="level" id="level" required>
    <option value="1" <?= $a->level == 1 ? 'selected' : '' ?>>User</option>
    <option value="0" <?= $a->level == 0 ? 'selected' : '' ?>>Admin</option>
</select>


            <button type="submit" input type="hidden" name="id" value="<?=$a->id_user?>">
>Submit</button>
        </form>
        <div class="form-footer">
            <a href="<?= base_url('home/dashboard') ?>">Kembali ke Dashboard</a>
        </div>
    </div>
</body>
</html>