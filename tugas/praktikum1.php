<?php

class Pengunjung {

    public static $jumlah = 0;

    public function __construct() {
        self::$jumlah++;
    }

    // method reset
    public static function reset() {
        self::$jumlah = 0;
    }

}

// buat 5 objek
$p1 = new Pengunjung();
$p2 = new Pengunjung();
$p3 = new Pengunjung();
$p4 = new Pengunjung();
$p5 = new Pengunjung();

// tampilkan sebelum reset
echo "Sebelum reset: " . Pengunjung::$jumlah . "<br>";

// reset jumlah
Pengunjung::reset();

// tampilkan setelah reset
echo "Setelah reset: " . Pengunjung::$jumlah;

?>