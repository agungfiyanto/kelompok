<?php
$gambar = $_GET["gambar"];
$nama = $_GET["nama"];
$deskripsi = $_GET["deskripsi"];
$stok = $_GET["stok"];
$harga = $_GET["harga"];
$uang = 1000;
$saldo = "Rp. " . $uang;
$statusPembayaran = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
</head>

<body>
    <p>saldo anda <?= $saldo ?></p>
    <img src="<?= $gambar ?>" alt="">
    <h1><?= $nama ?></h1>
    <p><?= $deskripsi ?></p>
    <p><?= $stok ?></p>
    <p><?= $harga ?></p>
    <?php if ($uang >= $harga) {
        $statusPembayaran = "Pembelian berhasil";
    } elseif ($uang < $harga) {
        $statusPembayaran = "Pembelian gagal : uang tidak cukup";
    } ?>
    <a href="beli.php?status=<?= $statusPembayaran; ?>">
        <button>Beli</button>
    </a>
</body>

</html>