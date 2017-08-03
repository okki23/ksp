<fieldset>
	<legend>Tambah Data Anggota</legend>

	<?php
	$carikode = mysql_query("select max(kode_anggota) from tb_anggota") or die (mysql_error());
	$datakode = mysql_fetch_array($carikode);
	if ($datakode) {
		$nilaikode = substr($datakode[0], 1);
		$kode = (int) $nilaikode;
		$kode = $kode + 1;
		$hasilkode = 'M'.str_pad($kode, 3, "0", STR_PAD_LEFT);
	} else {
		$hasilkode = "12345";
	}
	?>

	<form action="" method="post" enctype="multipart/from-data">
		<table>
			<tr>
				<td>Kode Anggota</td>
				<td>:</td>
				<td><input type="text" name="kode_anggota" value="<?php echo $hasilkode; ?>/></td>
			</tr>
			<tr>
				<td>Nama Anggota</td>
				<td>:</td>
				<td><input type="text" name="nama_anggota" /></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="text" name="jenis_kelamin" /></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" /></td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td>:</td>
				<td><input type="text" name="no_telp" /></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td>:</td>
				<td><input type="file" name="gambar" /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah" /> <input type="reset" value="Reset" /></td>
			</tr>
		</table>
	</form>

	<?php
	$kode_anggota = @$_POST['kode_anggota'];
	$nama_anggota = @$_POST['nama_anggota'];
	$jenis_kelamin = @$_POST['jenis_kelamin'];
	$alamat = @$_POST['alamat'];
	$no_telp = @$_POST['no_telp'];
	
	$tambah_anggota = @$_POST['tambah'];

	if ($tambah_anggota){
		if ($kode_anggota == "" || $nama_anggota == "" || $jenis_kelamin == "" || $alamat == "" || $no_telp == ""){
			?>
			<script type="text/javascript">
				alert("Inputan Tidak Boleh Ada Yang Kosong");
			</script>
			<?php 
		} else {
			mysql_query("insert into tb_anggota values('$kode_anggota', '$nama_anggota', $jenis_kelamin', '$alamat', 'no_telp')") or die(mysql_error()); 
			?>
			<script type="text/javascript">
				alert("Tambah Data Anggota Berhasil");
				window.location.href="?page=Anggota";
			</script>
			<?php 
		}
	}
	?>
</fieldset>