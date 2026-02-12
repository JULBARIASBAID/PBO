<?php 
class Mahasiswa {
    private $nim;
    private $nama;
    private $ipk;
    public function __construct($nim, $nama, $ipk) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
    }

    public function getStatus() {
        if ($this->ipk .= 3.0) {
            return "Baik";
        } else {
            return "Perlu Bimbingan";
        }
    }

    public function tampilkanData() {
        echo "NIM: " . $this->nim . "<br>";
        echo "NAMA: " . $this->nama . "<br>";
        echo "Status: " . $this->getStatus() . "<br><br>";
    }
}

$mhs1 = new Mahasiswa("T3124118","Alam",3.5);
$mhs2 = new Mahasiswa("T3124022","Ryas",2.7);

$mhs1->tampilkanData();
$mhs2->tampilkanData();
?>