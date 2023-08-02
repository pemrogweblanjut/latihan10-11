<?php
include "koneksidb.php";

$id_pc = $_GET['n'];
$q = "delete from pc where id_pc='$id_pc'";
$ex = mysqli_query($koneksi, $q);
echo "Data terhapus \n";
echo "<a href='pc.php'>Kembali ...</a>";
?>