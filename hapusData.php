<?php

$ambil = $koneksi->query("SELECT * FROM data_penerima WHERE id_no='$_GET[id]'");


$koneksi->query("DELETE FROM data_penerima WHERE id_no='$_GET[id]'");

echo "<script>alert('Data telah dihapus');</script>";
echo "<script>location='index.php?halaman=data';</script>";

?>