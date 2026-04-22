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
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }

        h3 {
            margin-bottom: 20px;
            color: #333;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            background: #4e54c8;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #3d42a5;
        }

        .hasil {
            margin-top: 20px;
            text-align: left;
            background: #f4f6ff;
            padding: 15px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h3>Kalkulator Sederhana</h3>

    <form method="post">
        <input type="number" name="a" placeholder="Angka 1" required>
        <input type="number" name="b" placeholder="Angka 2" required>
        <input type="number" name="sisi" placeholder="Sisi Persegi" required>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $sisi = $_POST['sisi'];

        echo "<div class='hasil'>";
        echo "<h4>Hasil:</h4>";
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