<?php
include "koneksidb.php";

$id_pc = $_GET['n'];
$q = "select * from pc where id_pc='$id_pc'";
$ex = mysqli_query($koneksi, $q);
$r = mysqli_fetch_array($ex);
?>

<form action = "#" method="post">
    Id Komputer : <input type="text" name="tidpc" value="<?php echo $r['id_pc']; ?>"/><br/>
    Nama Komputer : <input type="text" name="tnamapc" value="<?php echo $r['nama_pc']; ?>"/><br/>
    Spesifikasi : <input type="text" name="tspec" value="<?php echo $r['spec_pc']; ?>"/><br/>
    Status : <input type="text" name="tstatus" value="<?php echo $r['status']; ?>"/><br/>
    <input type="submit" name="bok" value="Ubah Data"/>
</form>

<a href="pc.php">Kembali...</a>

<?php
if (isset($_POST['bok'])){
    $id_pc = $_POST['tidpc'];
    $nama_pc = $_POST['tnamapc'];
    $spec_pc = $_POST['tspec'];
    $status = $_POST['tstatus'];
    $q = "UPDATE pc set id_pc='$id_pc',nama_pc='$nama_pc',spec_pc='$spec_pc',status='$status'";
    $q .= " where id_pc='$id_pc'";
    
    if (mysqli_query($koneksi, $q)) {
        echo "Data berhasil diubah";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>