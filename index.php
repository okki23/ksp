<?php
include "session_cek.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Koperasi Simpan Pinjam SMP Negeri 25 Bekasi</title>
<style type="text/css">
body {
	font-family: arial;
	font size: 12px;
}

#canvas{
	width: 960px;
	margin: 0 auto;
	border: 1px solid silver;
}

#header{
	font-size: 20px;
	padding: 20px;
}

#menu{
	background-color: #0066ff;
}
#menu ul{
	list-style: none;
	margin: 0;
	padding: 0;
}
#menu ul li.utama{
	display: inline-table;
}
#menu ul li:hover{
	background-color: #0033cc;
}
#menu ul li a{
	display: block;
	text-decoration: none;
	line-height: 40px;
	padding: 0 10px;
	color: #fff;
}
.utama ul{
	display: none;
	position: absolute;
	z-index: 2;
}
.utama:hover ul{
	display: block;
}
.utama ul li{
	display: block;
	background-color: #6cf;
	width: 140px;
}

#isi{
	min-height: 400px;
	padding: 20px;
	background-image: url("img/foKSP.jpg");
	background-attachment: fixed;
}

#footer{
	text-align: center;
	padding: 20px;
	background-color: #ccc;
}
</style>
</head>
<body>

<div id="canvas">
	<div id="header">
	Koperasi Simpan Pinjam (KSP) SMP Negeri 25 Bekasi
	</div>

	<div id="menu">
		<ul>
			<li class="utama"><a href="/KSP">Beranda</a></li>
			<li class="utama"><a href="">Anggota</a>
				<ul>
					<li><a href="?page=Anggota">Lihat Anggota</a></li>
					<li><a href="?page=Anggota&action=tambah">Tambah Anggota</a></li>
				</ul>
			</li>
			<li class="utama"><a href="">Simpan</a>
				<ul>
					<li><a href="?page=Simpan">Lihat Simpanan</a></li>
					<li><a href="?page=Simpanan&action=input">Input Simpanan</a></li>
				</ul>
			</li>
			<li class="utama"><a href="">Pinjam</a>
				<ul>
					<li><a href="?page=Pinjam">Lihat Pinjaman</a></li>
					<li><a href="?page=Pinjaman&action=input"">Input Pinjaman</a></li>
				</ul>
			</li>
			<li class="utama"><a href="">Angsuran</a>
				<ul>
					<li><a href="?page=Angsuran">Lihat Angsuran</a></li>
					<li><a href="?page=Angsuran&action=input"">Input Angsuran</a></li>
				</ul>
			</li>
			<li class="utama"><a href="">Laporan</a>
				<ul>
					<li><a href="?page=Laporan">Lihat Laporan</a></li>
					<li><a href="">Buat Laporan</a></li>
				</ul>
			</li>
			<li class="utama" style="float:right"><a href="inc/logout.php">Logout</a></li>
			<li class="utama" style="float:right"><a href="#">Halo <b> <?php echo $_SESSION['username']; ?> </b> </a></li>
		</ul>
	</div>

	<div id="isi">
	<?php
	$page = @$_GET['page'];
	$action = @$_GET ['action'];
	if ($page == "Anggota"){
		if ($action == "") {
			include "inc/Anggota.php";
		} else if ($action == "tambah") {
			include "inc/tambah_anggota.php";
		}
	} else if ($page == "Simpan"){
		echo "Ini Halaman Simpan";
	} else if ($page == "Pinjam"){
		echo "Ini Halaman Pinjam";
	} else if ($page == "Angsuran"){
		echo "Ini Halaman Angsuran";
	} else if ($page == "Laporan"){
		echo "Ini Halaman Laporan";
	} else if ($page == ""){
		echo "Selamat Datang Di Halaman Utama";
	} else {
		echo "404! Halaman tidak ditemukan";
	}
	?>
	</div>

	<div id="footer">
	Aplikasi Koperasi Simpan Pinjam - Febriansyah Tri Romdhoni
	</div>
</div>

</body>
</html>
