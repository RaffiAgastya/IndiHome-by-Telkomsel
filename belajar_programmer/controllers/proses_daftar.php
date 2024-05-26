<?php

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomorhp = $_POST['nomorhp'];


require_once '../connect.php';

$query = mysqli_query($connect, "INSERT INTO tbldaftar VALUE('$nama', '$alamat', '$nomorhp')");

if($query) {

    echo "<script>alert('Data Berhasil DiInput'); window.location.href = '../index.php';</script>";
}else{

    echo "<script>alert('Data Gagal DiInput'); window.location.href = '../index.php';</script>";
}


?>







