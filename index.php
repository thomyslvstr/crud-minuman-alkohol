<?php include("config/db.php"); ?>
<!DOCTYPE html><html><head><title>Data Minuman Alkohol</title><link rel="stylesheet" href="css/style.css"></head>
<body><h1>Data Minuman Beralkohol</h1><a href="tambah.php">+ Tambah Minuman</a><table>
<tr><th>ID</th><th>Nama</th><th>Harga</th><th>Volume</th><th>Alkohol (%)</th><th>Kategori</th><th>Aksi</th></tr>
<?php
$result = mysqli_query($conn, "SELECT * FROM minuman");
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['nama']}</td>
        <td>Rp " . number_format($row['harga']) . "</td>
        <td>{$row['volume']}</td>
        <td>{$row['persen_alkohol']}%</td>
        <td>{$row['kategori']}</td>
        <td>
            <a href='edit.php?id={$row['id']}'>Edit</a> |
            <a href='hapus.php?id={$row['id']}' onclick=\"return confirm('Yakin hapus?');\">Hapus</a>
        </td>
    </tr>";
}
?>
</table></body></html>