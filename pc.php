<?php
include "koneksidb.php";

$q = "SELECT * FROM pc";
$ex = mysqli_query($koneksi, $q);

?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo "INVENTORI LABORATORIUM KOMPUTER"; ?></title>
</head>
<body>
    <h1><?php echo "RULIANSYAH"; ?></h1>
    <p>NPM   : 202243570018</p>
    <p>Kelas : Y6D</p>
    <p>=========================</p>

    <a href='addpc.php'>+Tambah Komputer</a>
    <table border="1">
        <tr>
            <th>Id Komputer</th>
            <th>Nama Komputer</th>
            <th>Spesifikasi</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php
        while ($r = mysqli_fetch_array($ex)) {
            echo "<tr><td>".$r['id_pc']."</td>";
            echo "<td>".$r['nama_pc']."</td>";
            echo "<td>".$r['spec_pc']."</td>";
            echo "<td>".$r['status']."</td>";
            echo "<td><a href='editpc.php?n=".$r['id_pc']."'>Ubah |</a>";
            echo "<a href='deletepc.php?n=".$r['id_pc']."'>| Hapus</a></td></tr>";
        }
        ?>
    </table>
</body>
</html>
