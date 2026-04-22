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
    <title>Praktikum 2</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #1d2671, #c33764);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-custom {
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
            animation: fadeIn 0.7s ease-in-out;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }

        .btn-custom {
            background: #6c63ff;
            color: white;
            border-radius: 10px;
        }

        .btn-custom:hover {
            background: #574fd6;
        }

        .hasil {
            background: #f8f9ff;
            padding: 15px;
            border-radius: 12px;
            margin-top: 15px;
        }

        .title-icon {
            color: #6c63ff;
        }
    </style>
</head>

<body>

<div class="card card-custom col-md-4">

    <h4 class="text-center mb-3">
        <i class="fas fa-calculator title-icon"></i> Kalkulator Sederhana
    </h4>

    <form method="post">
        <div class="mb-2">
            <input type="number" name="a" class="form-control" placeholder="Angka 1" required>
        </div>

        <div class="mb-2">
            <input type="number" name="b" class="form-control" placeholder="Angka 2" required>
        </div>

        <div class="mb-3">
            <input type="number" name="sisi" class="form-control" placeholder="Sisi Persegi" required>
        </div>

        <button type="submit" class="btn btn-custom w-100">
            <i class="fas fa-play"></i> Hitung
        </button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $sisi = $_POST['sisi'];

        echo "<div class='hasil'>";
        echo "<h5><i class='fas fa-chart-bar'></i> Hasil:</h5>";
        echo "➕ Tambah: " . Matematika::tambah($a, $b) . "<br>";
        echo "➖ Kurang: " . Matematika::kurang($a, $b) . "<br>";
        echo "✖️ Kali: " . Matematika::kali($a, $b) . "<br>";
        echo "➗ Bagi: " . Matematika::bagi($a, $b) . "<br>";
        echo "⬜ Luas Persegi: " . Matematika::luasPersegi($sisi);
        echo "</div>";
    }
    ?>

</div>

</body>
</html>