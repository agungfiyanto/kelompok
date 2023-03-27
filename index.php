<?php
$data = [
    ["aset/gambar_1.jpg", "nama barang 1", "deskripsi", "stok : 10", 1000],
    ["aset/gambar_2.jpg", "nama barang 2", "deskripsi", "stok : 10", 2000],
    ["aset/gambar_3.jpg", "nama barang 3", "deskripsi", "stok : 10", 1000],
    ["aset/gambar_4.jpg", "nama barang 4", "deskripsi", "stok : 10", 1000],
    ["aset/gambar_5.jpg", "nama barang 5", "deskripsi", "stok : 10", 1000],
    ["aset/gambar_6.jpg", "nama barang 6", "deskripsi", "stok : 10", 1000],
    ["aset/gambar_7.jpg", "nama barang 7", "deskripsi", "stok : 10", 1000],
    ["aset/gambar_8.jpg", "nama barang 8", "deskripsi", "stok : 10", 1000],
    ["aset/gambar_9.jpg", "nama barang 9", "deskripsi", "stok : 10", 1000],
    ["aset/gambar_10.jpg", "nama barang 10", "deskripsi", "stok : 10", 1000],
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Dapur</title>
    <link rel="stylesheet" href="style.css?version=1">
</head>

<body>
    <div class="baris">
        <div class="kolom">
            <a href="detail.php?gambar=aset/gambar_1.jpg&nama=<?= $data[0][1] ?>&deskripsi=<?= $data[0][2] ?>&stok=<?= $data[0][3] ?>,&harga=<?= $data[0][4] ?>">
                <img src="aset/gambar_1.jpg" alt="gambar_1">
                <h2><?= $data[0][1] ?></h2>
            </a>
            <p><?= $data[0][2] ?></p>
            <div class="stok-harga">
                <p><?= $data[0][3] ?></p>
                <p>Rp. <?= $data[0][4] ?></p>
            </div>
        </div>
        <div class="kolom">
            <a href="detail.php?gambar=aset/gambar_2.jpg&nama=<?= $data[1][1] ?>&deskripsi=<?= $data[1][2] ?>&stok=<?= $data[1][3] ?>,&harga=<?= $data[1][4] ?>">
                <img src="aset/gambar_2.jpg" alt="gambar_1">
                <h2><?= $data[1][1] ?></h2>
            </a>
            <p><?= $data[1][2] ?></p>
            <div class="stok-harga">
                <p><?= $data[1][3] ?></p>
                <p>Rp. <?= $data[1][4] ?></p>
            </div>
        </div>
        <div class="kolom">
            <a href="detail.php?gambar=aset/gambar_3.jpg&nama=<?= $data[2][1] ?>&deskripsi=<?= $data[2][2] ?>&stok=<?= $data[2][3] ?>,&harga=<?= $data[2][4] ?>">
                <img src="aset/gambar_3.jpg" alt="gambar_1">
                <h2><?= $data[2][1] ?></h2>
            </a>
            <p><?= $data[2][2] ?></p>
            <div class="stok-harga">
                <p><?= $data[2][3] ?></p>
                <p>Rp. <?= $data[2][4] ?></p>
            </div>
        </div>
        <div class="kolom">
            <a href="detail.php?gambar=aset/gambar_4.jpg&nama=<?= $data[3][1] ?>&deskripsi=<?= $data[3][2] ?>&stok=<?= $data[3][3] ?>,&harga=<?= $data[3][4] ?>">
                <img src="aset/gambar_4.jpg" alt="gambar_1">
                <h2><?= $data[3][1] ?></h2>
            </a>
            <p><?= $data[3][2] ?></p>
            <div class="stok-harga">
                <p><?= $data[3][3] ?></p>
                <p><?= $data[3][4] ?></p>
            </div>
        </div>
        <div class="kolom">
            <a href="detail.php?gambar=aset/gambar_5.jpg&nama=<?= $data[4][1] ?>&deskripsi=<?= $data[4][2] ?>&stok=<?= $data[4][3] ?>,&harga=<?= $data[4][4] ?>">
                <img src="aset/gambar_5.jpg" alt="gambar_1">
                <h2><?= $data[4][1] ?></h2>
            </a>
            <p><?= $data[4][2] ?></p>
            <div class="stok-harga">
                <p><?= $data[4][3] ?></p>
                <p><?= $data[4][4] ?></p>
            </div>
        </div>
        <div class="kolom">
            <a href="detail.php?gambar=aset/gambar_6.jpg&nama=<?= $data[5][1] ?>&deskripsi=<?= $data[5][2] ?>&stok=<?= $data[5][3] ?>,&harga=<?= $data[5][4] ?>">
                <img src="aset/gambar_6.jpg" alt="gambar_1">
                <h2><?= $data[5][1] ?></h2>
            </a>
            <p><?= $data[5][2] ?></p>
            <div class="stok-harga">
                <p><?= $data[5][3] ?></p>
                <p><?= $data[5][4] ?></p>
            </div>
        </div>
        <div class="kolom">
            <a href="detail.php?gambar=aset/gambar_7.jpg&nama=<?= $data[6][1] ?>&deskripsi=<?= $data[6][2] ?>&stok=<?= $data[6][3] ?>,&harga=<?= $data[6][4] ?>">
                <img src="aset/gambar_7.jpg" alt="gambar_1">
                <h2><?= $data[6][1] ?></h2>
            </a>
            <p><?= $data[6][2] ?></p>
            <div class="stok-harga">
                <p><?= $data[6][3] ?></p>
                <p><?= $data[6][4] ?></p>
            </div>
        </div>
        <div class="kolom">
            <a href="detail.php?gambar=aset/gambar_8.jpg&nama=<?= $data[7][1] ?>&deskripsi=<?= $data[7][2] ?>&stok=<?= $data[7][3] ?>,&harga=<?= $data[7][4] ?>">
                <img src="aset/gambar_8.jpg" alt="gambar_1">
                <h2><?= $data[7][1] ?></h2>
            </a>
            <p><?= $data[7][2] ?></p>
            <div class="stok-harga">
                <p><?= $data[7][3] ?></p>
                <p><?= $data[7][4] ?></p>
            </div>
        </div>
    </div>
</body>

</html>