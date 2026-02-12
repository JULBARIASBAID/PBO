<?php 
class Buku {
    private $judul;
    private $penulis;
    private $tahunTerbit;

    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function getInfo() {
        return "Judul: " . $this->judul.",Penulis:" . $this->penulis.",Tahun: " . $this->tahunTerbit;
    }
}

$buku1 = new Buku("Pemrograman PHP","Ryas",2026);
$buku2 = new Buku("Basis Data","Alam",2022);
$buku3 = new Buku("Rekayasa Perangkat Lunak","Risky",2023);

echo $buku1->getInfo() ."<br>";
echo $buku2->getInfo() ."<br>"; 
echo $buku3->getInfo() ."<br>";
?>