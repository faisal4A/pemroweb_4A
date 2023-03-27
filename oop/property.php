<?php 
class produk {
    public $judul, $penulis, $penerbit, $harga;
public function _construct(){
    echo "hello";
}
    public function getLabel(){
        return "$this->judul, $this->penulis";
    }
}
$produk1 = new Produk();
$produk1 ->judul = "Naruto";
$produk2 ->penulis = "Faisal kisi moto";


$produk2 = new Produk();
$produk2 ->judul = "Boruto";
$produk2 ->penulis = "Faisal kisi moto";


// var_dump($produk1);
// var_dump($produk2);

echo $produk1 -> getLabel();
echo "<br>";
echo $produk2 -> getLabel();
?>
