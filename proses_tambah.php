<?php
include("config/db.php");
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$volume = $_POST['volume'];
$alkohol = $_POST['persen_alkohol'];
$kategori = $_POST['kategori'];
mysqli_query($conn, "INSERT INTO minuman (nama, harga, volume, persen_alkohol, kategori) VALUES ('$nama', $harga, '$volume', $alkohol, '$kategori')");
header("Location: index.php");
?>