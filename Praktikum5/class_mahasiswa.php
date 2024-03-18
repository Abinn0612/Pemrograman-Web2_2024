<?php
class Mahasiswa {
    // Property

    public $ipk;
    public $nim;
    public $nama;
    public $prodi;
    public $angkatan;

    // Method
    function __construct($nim, $nama){
        $this->nim = $nim;
        $this->nama = $nama;
    }
    function predikat_ipk(){
        if($this->ipk < 2.0) {
            return 'CUKUP';
        } elseif($this->ipk > 2.0 && $this->ipk < 3.0){
            return 'BAIK';
        } elseif($this->ipk >= 3.0 && $this->ipk < 3.75){
            return 'MEMUASKAN';
        } elseif($this->ipk >= 3.75 && $this->ipk <4.0){
            return 'CUM LAUDE';
        }
    }
}

// Instance Object
$mahasiswa1 = new Mahasiswa(223139, 'Tabiin');
$mahasiswa1->ipk =3.5;
$mahasiswa1->prodi = "Teknik Informatika";
$mahasiswa1->angkatan = 2023;