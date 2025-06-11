<?php
include("config/db.php");
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM minuman WHERE id=$id"));
?><!DOCTYPE html><html><head><title>Edit Minuman</title><link rel="stylesheet" href="css/style.css"></head>
<body><h2>Edit Minuman</h2>
<form action="proses_edit.php" method="post">
<input type="hidden" name="id" value="<?= $data['id'] ?>">
Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>"><br>
Volume: <input type="text" name="volume" value="<?= $data['volume'] ?>"><br>
Kadar Alkohol (%): <input type="number" step="0.1" name="persen_alkohol" value="<?= $data['persen_alkohol'] ?>"><br>
Kategori: <input type="text" name="kategori" value="<?= $data['kategori'] ?>"><br>
<input type="submit" value="Update">
</form><a href="index.php">Kembali</a></body></html>