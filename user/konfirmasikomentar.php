<?php 
$msg = "";
if(isset ($_POST['submit'])){
    $id_berita = $_GET['p'];
    $nama = $_POST['nama'];
    $isikomentar = $_POST ['komentar'];
    $status = 0;

    $sql = "INSERT INTO komentar(nama,isi_komentar, id_berita, status_komentar)VALUES('$nama', '$isikomentar', '$id_berita', '$status')";

    if($koneksi ->query($sql)){
        $msg = "Komentar berhasil ditambahkan! Menunggu moderasi admin";
    }
    else{
        $msg = "Gagal menambahkan komentar!";
    }

}


?>