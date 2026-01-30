<?php

class Mahasiswa {
    // property
    public $nim;
    public $nama;
    public $prodi;

    // method
    public function sayHello() { 
        return "Hello, Nama saya " . $this->nama .
               " dengan NIM: " . $this->nim .
               " dari jurusan / prodi " . $this->prodi . ".";
    }
}

// objek 1 (pakai constructor)
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nim = 'T3124022';
$mahasiswa1->nama = 'andi';
$mahasiswa1->prodi = 'Teknik Informatika';

// objek 2 (isi manual)
$mahasiswa2 = new Mahasiswa();
$mahasiswa2->nim = 'T3124023';
$mahasiswa2->nama = 'Budi';
$mahasiswa2->prodi = 'Sistem Informasi';

// tampilkan hasil
echo "DAFTAR MAHASISWA <br>";
echo $mahasiswa1->sayHello();
echo "<br>";
echo $mahasiswa2->sayHello();

?>
