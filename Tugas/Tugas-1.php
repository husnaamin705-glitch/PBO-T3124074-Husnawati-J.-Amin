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
        if ($this->ipk >= 3.0) {
            return "Baik";
        } else {
            return "Perlu bimbingan";
        }
    }

    public function tampilkan() {
        echo "NIM: " . $this->nim . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Status: " . $this->getStatus() . "<br><br>";
    }
}

$mhs1 = new Mahasiswa("22001", "Aldi", 3.5);
$mhs2 = new Mahasiswa("22002", "Amel", 2.7);

$mhs1->tampilkan();
$mhs2->tampilkan();

?>