<?php
/* 
    Nama anggota kelompok 4 :
    - Mohammad Rifki Reza Fahlevi (3122640002)
    - Siti Aminah Husein (3122640006)
    - Agung Fiyanto (3122640018)
    - Mohammad Rafi' Irdani (3122640025)
*/
class Barang
{
    private string $namaBarang;
    private int $harga;
    private int $stok;

    function setNamaBarang($namaBarang)
    {
        $this->namaBarang = $namaBarang;
    }

    function setHarga($harga)
    {
        $this->harga = $harga;
    }

    function setStok($stok)
    {
        $this->stok = $stok;
    }

    function getAll()
    {
        return array($this->namaBarang, $this->harga, $this->stok);
    }
}

$barang = ["Panci maspion", 50000, 10];

// Mengatur Barang
$panjangArray = count($barang);
$panci = new Barang;
for ($i = 0; $i < $panjangArray; $i++) {
    if ($i == 0) {
        $panci->setNamaBarang($barang[$i]);
    } elseif ($i == 1) {
        $panci->setHarga($barang[$i]);
    } elseif ($i == 2) {
        $panci->setStok($barang[$i]);
    }
}

// Menampilkan Barang
$dataBarang = $panci->getAll();
$panjangArray = count($dataBarang);
for ($i = 0; $i < $panjangArray; $i++) {
    echo "$dataBarang[$i]" . PHP_EOL;
}
