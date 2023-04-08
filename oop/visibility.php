<?php 

class Produk {
    private $judul,
    $penulis,
    $penerbit,
    $harga;


public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0){
    //echo "Hello";
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;

}
public function getJudul() {
    return $this->judul;
}

public function setJudul($judul) {
    $this->judul = $judul;
}

    public function getInfoProduk() {
        return "$this->judul, $this->penulis, $this->penerbit (Rp.$this->harga,-)
        ";
return $str;
        //return $this->judul .','. $this-.penulis
    }
}

class Komik extends Produk {
    public $jmlHalaman; 

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0){

        // $this->judul = $judul;
        // $this->penulis = $penulis;
        // $this->penerbit = $penerbit;
        // $this->harga = $harga;

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman=$jmlHalaman;
    }
    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - $this->jmlHalaman Halaman";

        return $str;
    }
}

class Game extends Produk {
    public $waktumain;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $waktumain = 0){

           // $this->judul = $judul;
        // $this->penulis = $penulis;
        // $this->penerbit = $penerbit;
        // $this->harga = $harga;

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain=$waktumain;

}

public function getInfoProduk() {
    $str = "Game : " . parent::getInfoProduk() . " - $this->waktuMain  Jam";
    return $str;
}
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "$produk->judul | $produk->penulis, $produk->penerbit (Rp.$produk->harga) - $produk->waktuMain Jam";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Erlangga", 10000, 150);
$produk2 = new Game("Uncharted", "Noll", "Pustaka Ilmu", 50000, 50);
$produk3 = new Produk("Doraemon", "Faisal", "Iri Suaka", 50000);
$produk4 = new Produk();

echo $produk1->getInfoProduk();
echo"<br>";
echo $produk2->getInfoProduk();
echo"<br>";
echo $produk3->getInfoProduk();
echo"<br>";

$produk1->setJudul("Dragon Ball");
$produk1->judul = "Shinchan";

echo $produk1->getJudul();





// var_dump($produk1);
// var_dump($produk2);

// $produk4 = new Produk();


// echo $produk1 -> getInfoProduk();
// echo "<br>";
// echo $produk2 -> getInfoProduk();
// echo "<br>";
// echo $produk3 -> getInfoProduk();
// echo "<br>";
// echo $produk4 -> getInfoProduk();

?>
