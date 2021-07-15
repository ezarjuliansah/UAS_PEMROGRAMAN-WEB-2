<h2 class="text-center" style="color:black">Ubah Data Bantuan</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM data_penerima WHERE id_no='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>No</label>
		<input type="text" class="form-control" name="id" value="<?php echo $pecah['id_no'];?>">
	</div>
	<div class="form-group">
		<label>Alokasi</label>
		<input type="text" class="form-control" name="alokasi" value="<?php echo $pecah['alokasi_dana'];?>">
	</div>
	<div class="form-group">
		<label>Jumlah Transaksi</label>
		<input type="text" class="form-control" name="trnsksi" value="<?php echo $pecah['transaksi'];?>">
	</div>
	<div class="form-group">
		<label>Jumlah Dana</label>
		<input type="text" class="form-control" name="dana" value="<?php echo $pecah['Dana'];?>">
	</div><div class="form-group">
		<label>Nama Lengkap</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['Nama'];?>">
	</div><div class="form-group">
		<label>No HP</label>
		<input type="text" class="form-control" name="hp" value="<?php echo $pecah['Hp'];?>">
	</div><div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email" value="<?php echo $pecah['Email'];?>">
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

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