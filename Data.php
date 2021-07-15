<h2 class="text-center" style="color:black">Rekapitulasi Penerimaan Bantuan Sosial COVID-19
Sampai Dengan <br>
<?php
date_default_timezone_set('Asia/Jakarta');
echo date('d F Y '); // Hasil: 20-01-2017 05:32:15 
echo date('H:i');
?> Wib
</h2>

<a href="index.php?halaman=tambahData" class="btn btn-primary" style="margin:20px">+ Input Data</a>

<a href="Cetak.php" target="_blank">Cetak Data</a>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Alokasi</th>
			<th>Jumlah Transaksi</th>
			<th>Jumlah Dana</th>
			<th>Nama Lengkap</th>
			<th>No.Hp</th>
			<th>Email</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $ambil=$koneksi->query("SELECT * FROM data_penerima"); ?>
		<?php  while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
            <td><?php echo $pecah['id_no']; ?></td>
			<td><?php echo $pecah['alokasi_dana']; ?></td>
			<td><?php echo $pecah['transaksi']; ?></td>
			<td><?php echo $pecah['Dana']; ?></td>
			<td><?php echo $pecah['Nama']; ?></td>
			<td><?php echo $pecah['Hp']; ?></td>
			<td><?php echo $pecah['Email']; ?></td>
			<td>
                <a href="index.php?halaman=hapusData&id=<?php echo $pecah['id_no'];?>" class="btn btn-danger">hapus</a>
                <a href="index.php?halaman=ubahData&id=<?php echo $pecah['id_no']; ?>" class="btn btn-success">ubah</a>
			</td>
		</tr>
		<?php } ?>

	</tbody>
</table>
