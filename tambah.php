<!DOCTYPE html><html><head><title>Tambah Minuman</title><link rel="stylesheet" href="css/style.css"></head>
<body><h2>Tambah Minuman Beralkohol</h2>
<form action="proses_tambah.php" method="post">
Nama: <input type="text" name="nama" required><br>
Harga: <input type="number" name="harga" required><br>
Volume: <input type="text" name="volume" required><br>
Kadar Alkohol (%): <input type="number" step="0.1" name="persen_alkohol" required><br>
Kategori: <input type="text" name="kategori" required><br>
<input type="submit" value="Simpan">
</form><a href="index.php">Kembali</a></body></html>