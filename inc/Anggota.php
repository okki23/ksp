<fieldset>
	<legend>Tampilan Data Anggota</legend>

	<table width="100%" border="1px" style="border-collapse:collapse;">
		<tr style="background-color: #339966;">
			<th>Kode Anggota</th>
			<th>Nama Anggota</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>No Telp</th>
			<th>Gambar</th>
			<th>Opsi</th>
		</tr>
		<?php
		$sql = mysql_query("select * from tb_anggota") or die (mysql_error());
		while ($data = mysql_fetch_array($sql)) {
		?>
			<tr>
				<td><?php echo $data ['kode_anggota']; ?></td>
				<td><?php echo $data ['nama_anggota']; ?></td>
				<td><?php echo $data ['jenis_kelamin']; ?></td>
				<td><?php echo $data ['alamat']; ?></td>
				<td><?php echo $data ['no_telp']; ?></td>
				<td align="center"><img src="img/<?php echo $data['gambar'];?>" width="120px"></td>
				<td align="center">
					<a href="?page=Anggota&action=edit&kdanggota=<?php echo $data ['kode_anggota']; ?>"><button>Edit</button></a>
					<a href=""><button>Hapus</button></a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
</fieldset>