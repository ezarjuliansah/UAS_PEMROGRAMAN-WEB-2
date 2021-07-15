FITUR FITUR DARI TUGAS UAS MEMBUAT WEB DANA BANTUAN

**Fungsi Waktu Pada php**
<?php
date_default_timezone_set('Asia/Jakarta');
echo date('d F Y '); // Hasil: 20-01-2017 05:32:15 
echo date('H:i');
    ?> 
    
**Fungsi Print pada Php**
<script>
		window.print();
	</script>
  
Fungsi Mengambil Data dari Sql
<?php $ambil=$koneksi->query("SELECT * FROM data_penerima"); ?>
		<?php  while($pecah = $ambil->fetch_assoc()){ ?>
    
**Fitur Menambahkan data pada sql**
<?php
if (isset($_POST['save'])) 
{
	//mengambil isian nama,email,password, dan nomor telepon
	$id=$_POST["id"];
	$alokasi=$_POST["alokasi"];
	$trnsksi=$_POST["trnsksi"];
	$dana=$_POST["dana"];
	$nama=$_POST["nama"];
	$hp=$_POST["hp"];
	$email=$_POST["email"];


	$ambil=$koneksi->query("INSERT INTO data_penerima
		(id_no,alokasi_dana,transaksi,Dana,Nama,Hp,Email) VALUES ('$_POST[id]','$_POST[alokasi]','$_POST[trnsksi]','$_POST[dana]','$_POST[nama]','$_POST[hp]','$_POST[email]')");
echo "<script>alert('Data Berhasil Diinput');</script>";
	echo "<script>location='index.php?halaman=data';</script>";
}
?>


**Fungsi Ubah Database sql**
<?php
if (isset($_POST['ubah'])) 
{
		$koneksi->query("UPDATE data_penerima SET id_no='$_POST[id]',
			alokasi_dana='$_POST[alokasi]', transaksi='$_POST[trnsksi]' , Dana='$_POST[dana]', Nama='$_POST[nama]', Hp='$_POST[hp]', Email='$_POST[email]'
            WHERE id_no='$_GET[id]'");
	echo "<script>alert('Data Produk Berhasil Diubah');</script>";
	echo "<script>location='index.php?halaman=data';</script>";
}
?>


**Fungsi Hapus Data Pada sql Php**
<?php

$ambil = $koneksi->query("SELECT * FROM data_penerima WHERE id_no='$_GET[id]'");


$koneksi->query("DELETE FROM data_penerima WHERE id_no='$_GET[id]'");

echo "<script>alert('Data telah dihapus');</script>";
echo "<script>location='index.php?halaman=data';</script>";

?>
