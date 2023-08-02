<?php 
include "koneksidb.php";?>
<form action = "#" method="post">
    Id Komputer   : <input type="text" name="tidpc"/></br>
    Nama Komputer : <input type="text" name="tnamapc"/></br>
    Spesifikasi   : <input type="text" name="tspec"/></br>
    Status        : <input type="text" name="tstatus"/></br>
    <input type="submit" name="bok" value="simpan"/>
</form>

<a href="pc.php">Kembali ..</a>

<?php
if (isset($_POST['bok'])){
    $id_pc = $_POST['tidpc'];
    $nama_pc = $_POST['tnamapc'];
    $spec_pc = $_POST['tspec'];
    $status = $_POST['tstatus'];
    $q = "INSERT INTO pc(id_pc, nama_pc, spec_pc, status)";
    $q .= " VALUES('$id_pc', '$nama_pc', '$spec_pc', '$status')";
    
    if (mysqli_query($koneksi, $q)) {
        echo "Data Tersimpan";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>