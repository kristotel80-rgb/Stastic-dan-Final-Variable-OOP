<?php

class Produk {

    public static $jumlahProduk = 0;
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
        self::$jumlahProduk++;
    }

    public function tampilProduk() {
        echo "Nama: " . $this->nama . " | Harga: " . $this->harga . "<br>";
    }

}

class Transaksi {

    final public function prosesTransaksi($produkList) {
        echo "<br>=== Transaksi Diproses ===<br>";
        $total = 0;

        foreach ($produkList as $produk) {
            $produk->tampilProduk();
            $total += $produk->harga;
        }

        echo "Total Bayar: " . $total . "<br>";
    }

}

// Minimal 3 produk
$p1 = new Produk("Buku", 5000);
$p2 = new Produk("Pulpen", 2000);
$p3 = new Produk("Penghapus", 1000);

// Tampilkan total produk
echo "Total Produk: " . Produk::$jumlahProduk . "<br>";

// Simulasi transaksi
$transaksi = new Transaksi();
$transaksi->prosesTransaksi([$p1, $p2, $p3]);

?>