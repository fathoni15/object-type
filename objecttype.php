<?php
class produk{
public $namabarang,
       $merk,
       $harga;

    public function getCetak(){
        return "$this->merk, (Rp $this->harga)";
    }
    public function __construct($namaBarang="nama barang", $merk="merk", $harga=0){
        $this->namaBarang = $namaBarang;
        $this->merk=$merk;
        $this->harga=$harga;
    }
}

Class cetakinfoproduk{
    public function cetakinfo(produk $produk) {
        $str="{$produk->namaBarang}, {$produk->getCetak()}";
        return $str;
    }
}
$produk1 = new produk("Vivobook 14", "ASUS", 8000000);
$produk2 = new produk("SSD 256gb", "XPG", 800000);
$produk3 = new produk("Flashdisk", "Sandisk", 150000);
$infoproduk = new cetakinfoproduk();

echo "Nama Barang Laptop : " . $produk1->getCetak();
echo "<br>";
echo "Nama Barang SSD : " . $produk2->getCetak();
echo "<br>";
echo "Nama Barang Aksesoris : " . $produk3->getCetak();
echo "<br>";
echo $infoproduk->cetakinfo($produk1);
?>