<?php 
class Produk {
    public $judul, 
    $penulis, 
    $penerbit, 
    $harga;

public function getLabel() {
    return "$this->judul, $this->penulis";
    //return "$this->judul.','. $this->penulis";
    
    }
}


$produk1 = new Produk();
$produk1 ->judul = "Naruto";
$produk1 ->penulis = "Faisal kisi moto";


$produk2 = new Produk();
$produk2 ->judul = "Uncahrted";
$produk2 ->penulis = "abcd";


// var_dump($produk1);
// var_dump($produk2);

echo $produk1 -> getLabel();
echo "<br>";
echo $produk2 -> getLabel();
echo"<br>";
?>
