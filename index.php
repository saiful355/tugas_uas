<?php
require 'functions.php';
$jam = query("SELECT * FROM catg_jam");

//tombol cari ditekan
if(isset($_POST["cari"])){
    $jam = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Jam Tangan</h1>
    <a href="tambah.php">Tambah Data Jam</a>
    <br></br>

<form action= "" method="POST">
    <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan kata kunci pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari</button>
</form>
<br>

    <table class="table" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Produksi</th>
            <th>Harga</th>
            <th>Warna</th>
			<th>Jumlah</th>
			          
        </tr>
        
        <?php $i = 1;?>
        <?php foreach ($jam as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="edit.php?id=<?= $row['Id']; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row['Id']; ?>">hapus</a>
            </td>
            <td>
                <img src="img/alexa.jpg" width="50">
            </td>

            <td><?= $row['nama']?></td>
            <td><?= $row['produksi']?></td>
            <td><?= $row['harga']?></td>
            <td><?= $row['warna']?></td>
			<td><?= $row['jumlah']?></td>
			
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    
</body>
</html>