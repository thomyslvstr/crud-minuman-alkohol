<?php
include("config/db.php");
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$volume = $_POST['volume'];
$alkohol = $_POST['persen_alkohol'];
$kategori = $_POST['kategori'];
mysqli_query($conn, "UPDATE minuman SET nama='$nama', harga=$harga, volume='$volume', persen_alkohol=$alkohol, kategori='$kategori' WHERE id=$id");
header("Location: index.php");
?>