<?php
include("config/db.php");
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM minuman WHERE id=$id");
header("Location: index.php");
?>