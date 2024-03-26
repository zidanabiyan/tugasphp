<?php
  $title = "Form Biodata";
?>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        form {
            width: 50%;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"], select {
            width: calc(100% - 12px);
            padding: 10px;
            margin: 5px 0 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #4CAF50;
        }

        button {
            background-color: #4CAF50; 
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049; 
        }

        #hasil {
            margin-top: 20px;
            padding: 20px;
            border-radius: 4px;
            background-color: #ffffff;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        #hasil p {
            margin: 0;
        }

        caption {
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            padding: 10px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #dddddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
        <a href="tugasphp.php" style="color: #fff;">Halaman Utama</a>
    </header>

    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Anda" required>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Masukkan Email Anda" required>

        <label for="jenkel">Jenis Kelamin</label>
        <select name="jenkel" id="jenkel" required>
            <option value="lakilaki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat Anda" required>

        <label for="notel">No.Telepon</label>
        <input type="text" name="notel" id="notel" placeholder="Masukkan Nomor Telepon Anda" required>

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $jenkel = $_POST["jenkel"];
        $alamat = $_POST["alamat"];
        $notel = $_POST["notel"];

        echo "<div id='hasil'>";
        echo "<table>";
        echo "<tr><th>Nama</th><td>$nama</td></tr>";
        echo "<tr><th>Email</th><td>$email</td></tr>";
        echo "<tr><th>Jenis Kelamin</th><td>$jenkel</td></tr>";
        echo "<tr><th>Alamat</th><td>$alamat</td></tr>";
        echo "<tr><th>No. Telepon</th><td>$notel</td></tr>";
        echo "</table>";
        echo "</div>";
    }
    ?>

    <footer>
    <p>&copy; 2024 PHP.KU All rights reserved.</p>
    </footer>
</body>

