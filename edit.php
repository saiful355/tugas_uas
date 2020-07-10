<?php
//koneksi DBMS
require "functions.php";

$hewan = query("SELECT * FROM catg_jam WHERE id=$_GET[id]");

//cek apakah tombol submit sudah ditekan atau belum?
if(isset($_POST["submit"])){
    if(count($jam) == 0){
        echo "
        <script>
        alert('Data Hewan Tidak Ada');
        document.location.href = 'index.php';
        </script>
        ";
    }
    //cek apakah data berhasil ditambahkan atau tidak?
    if (edit($_POST["Id"]) > 0){
        echo "
        <script>
        alert('Data Berhasil Diperbarui!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Diperbarui!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Jam Tangan</h1>
    <form action="" method="POST">
    <input type="hidden" name="Id" value="<?= $Jam[0]['Id'];?>">
        <ul>
            <li>
                <label for="Nama">Nama :</label>
                <input type="text" name="Nama" id="Nama" required value="<?= $Jam[0]['Nama'];?>" >
            </li>
            <li>
                <label for="Produksi">Produksi :</label>
                <input type="text" name="Produksi" id="Produksi" required value="<?= $Jam0]['Produksi'];?>">
            </li>
            <li>
                <label for="Harga">Harga :</label>
                <input type="text" name="Harga" id="Harga" required value="<?= $Jam[0]['Harga'];?>">
            </li>
            <li>
                <label for="Warna">Warna :</label>
                <input type="text" name="Warna" id="Warna" required value="<?= $Jam[0]['Warna'];?>">
            </li>
			<li>
                <label for="Jumlah">Jumlah :</label>
                <input type="text" name="Jumlah" id="Jumlah" required value="<?= $Jam[0]['Jumlah'];?>">
            </li>
            <li>
                <label for="Gambar">Gambar :</label>
                <input type="text" name="Gambar" id="Gambar" required value="<?= $hewan[0]['Gambar'];?>">
            </li>
            <br>
            <br>
            <li>
            <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>


</body>
</html>