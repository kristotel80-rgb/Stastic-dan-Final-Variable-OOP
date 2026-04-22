<?php

class Matematika {

    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        return $a / $b;
    }

    // tambahan
    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    // luas persegi
    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Mini</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0A1F44, #163a70);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-custom {
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            background: #ffffff;
        }

        .btn-custom {
            background-color: #0A1F44;
            color: white;
            border-radius: 8px;
        }

        .btn-custom:hover {
            background-color: #06152e;
        }

        .hasil {
            background: #eef3ff;
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
        }

        h4 {
            color: #0A1F44;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="card card-custom col-md-4">

    <h4 class="text-center mb-3">Kalkulator Sederhana</h4>

    <form method="post">
        <div class="mb-2">
            <input type="number" name="a" class="form-control" placeholder="Masukkan Angka" required>
        </div>

        <div class="mb-2">
            <input type="number" name="b" class="form-control" placeholder="Masukkan Angka" required>
        </div>

        <div class="mb-3">
            <input type="number" name="sisi" class="form-control" placeholder="Sisi Persegi" required>
        </div>

        <button type="submit" class="btn btn-custom w-100">
            Hitung
        </button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $sisi = $_POST['sisi'];

        echo "<div class='hasil'>";
        echo "<h5>Hasil:</h5>";
        echo "Tambah: " . Matematika::tambah($a, $b) . "<br>";
        echo "Kurang: " . Matematika::kurang($a, $b) . "<br>";
        echo "Kali: " . Matematika::kali($a, $b) . "<br>";
        echo "Bagi: " . Matematika::bagi($a, $b) . "<br>";
        echo "Luas Persegi: " . Matematika::luasPersegi($sisi);
        echo "</div>";
    }
    ?>

</div>

</body>
</html>