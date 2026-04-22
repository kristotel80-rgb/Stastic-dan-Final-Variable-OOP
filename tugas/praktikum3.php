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

    public static function tambahProduk() {
        return self::$jumlahProduk;
    }

}

class Transaksi {

    final public function prosesTransaksi($produkList) {
        $total = 0;

        echo "<h3>Daftar Produk:</h3>";

        foreach ($produkList as $produk) {
            echo $produk->nama . " - Rp" . $produk->harga . "<br>";
            $total += $produk->harga;
        }

        echo "<br><b>Total Bayar: Rp" . $total . "</b>";
    }

}


// buat minimal 3 produk
$p1 = new Produk("Laptop", 7000000);
$p2 = new Produk("Mouse", 150000);
$p3 = new Produk("Keyboard", 300000);

// tampilkan total produk
echo "Total Produk: " . Produk::tambahProduk();
echo "<hr>";

// simulasi transaksi
$transaksi = new Transaksi();
$transaksi->prosesTransaksi([$p1, $p2, $p3]);

?>