<?php
//koneksi ke database
$koneksi= mysqli_connect("localhost","root","","tokoh_jam");

// ambil data dari tabel catg_jam/ query data tokoh_jam
$result = mysqli_query($koneksi," SELECT * FROM catg_jam");
var_dump($result);

// ambil data (fetch) dari object result
// myqli_fetch_row();
// mysqli_fetch_assoc();
// mysqli_fetch_array();
// mysqli_fetch_object();

 /* while$jam = mysqli_fetch_assoc($result)){
 var_dump($jam);
 }
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin </title>
</head>

<body>
    <h1>Daftar Jam Tangan</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>nama</th>
                <th>produksi</th>
                <th>harga</th>
                <th>warna</th>
              </tr>

			 
    <?php $i = 1;?>
        <?php while ($row = mysqli_fetch_assoc($result)) :?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row['Gambar']?>" width="50">
            </td>
            <td><?= $row['Nama']?></td>
            <td><?= $row['Produksi']?></td>
            <td><?= $row['Harga']?></td>
            <td><?= $row['Warna']?></td>
           
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>

</body>
</html>