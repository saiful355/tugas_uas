<?php
//koneksi ke database
$koneksi= mysqli_connect("localhost", "root", "", "tokoh_jam");

function query ($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $koneksi;
    $Nama = htmlspecialchars($data ["Nama"]);
    $produksi =  htmlspecialchars($data ["produksi"]);
    $harga =  htmlspecialchars($data ["harga"]);
    $warna =  htmlspecialchars($data ["warna"]);
   
	$gambar =  htmlspecialchars($data ["gambar"]);

    
    //query insert ke database
    $query = "INSERT INTO catg_jam
                VALUES
                ('', '$Nama', '$produksi','$harga','$warna','gambar')
                ";

    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM catg_jam WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function edit($id)
{
    global $koneksi;
    mysqli_query($koneksi, "UPDATE catg_jam SET Nama = '$_POST[Nama]',produksi = '$_POST[produksi]',harga = '$_POST[harga]',warna = '$_POST[warna]',Gambar = '$_POST[Gambar]' WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function cari($keyword){
        $query = "SELECT * FROM catg_jam
                    WHERE
                        Nama LIKE '%$keyword%' OR
                        produksi LIKE '%$keyword%' OR
                        harga LIKE '%$keyword%' OR
                        warna LIKE '%$keyword%'  
						
      ";

      return query($query);
}