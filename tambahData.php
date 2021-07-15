<h2 class="text-center" style="color:black">Tambah Data Bantuan</h2>


<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>No</label>
		<input type="text" class="form-control" name="id">
	</div>
	<div class="form-group">
		<label>Alokasi</label>
		<select name="alokasi">
     <option >Alat Pelindung Diri</option>
     <option >Logistik Mahasiswa</option>
     <option >Bantuan Kuota Mahasiswa</option>
     <option >Handsinitizer</option>
     <option >Sembako Masyarakat</option>
    </select>

	</div>
	<div class="form-group">
		<label>Jumlah Transaksi</label>
		<input type="text" class="form-control" name="trnsksi">
	</div>
	<div class="form-group">
		<label>Jumlah Data</label>
		<input type="text" class="form-control" name="dana">
	</div>
	<div class="form-group">
		<label>Nama Lengkap</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>No hp</label>
		<input type="text" class="form-control" name="hp">
	</div>
	<div class="form-group">
		<label>email</label>
		<input type="text" class="form-control" name="email">
	<button class="btn btn-primary" name="save" style="margin:10px">Simpan</button>
</form>

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
