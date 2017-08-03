<?php
include "session_cek.php";	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
<style type="text/css">
body {
	font-family: arial;
	font-size: 14px;
	background-color: #222;
}

#utama{
	width: 300px;
	margin: 0 auto;
	margin-top: 12%;
}

#judul{
	padding: 15px;
	text-align: center;
	color: #fff;
	font-size: 20px;
	background-color: #339966;
	border-top-right-radius: 10px; 
	border-top-left-radius: 10px;
	border-bottom: 3px solid #336666;
}

#inputan{
	background-color: #ccc;
	padding: 20px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
}

input{
	padding: 10px;
	border: 0;
}

.lg{
	width: 240px;
}

.btn{
	background-color: #339966;
	border-radius: 10px;
	color: #fff;
}
.btn:hover{
	background-color: #336666;
	cursor: pointer;
}
</style>
</head>
<body>

<div id="utama">
	<div id=judul>
		Halaman Login
	</div>

	<div id="inputan">
	<form action="auth.php" method="post">
		<div> 
			<input type="text" name="User" placeholder="Username" class="lg" />
		</div>
		<div style="margin-top: 10px;"> 
			<input type="Pass" name="Pass" placeholder="Password" class="lg" />
		</div>
		<div style="margin-top: 10px;"> 
			<input type="Submit" name="login" value="Login" class="btn" />
		</div>
	</form>

	<?php
	include "inc/koneksi.php";

	if(@$login){
		if($User == "" || $Pass == "") {
			?> <script type="text/javascript">alert("Username / Password Tidak Boleh Kosong");</script><?php
		} else {
			$sql = mysql_query($db, "select * from tb_login where username = '$User' and password = md5('$Pass')") or die ($db->error);
			$data = mysql_fetch_array($sql);
			$cek = mysqli_num_rows($sql);
			if ($cek > 0) {
					$_SESSION ['admin'] = $kode_user;
					header("location: index.php");
				} else if ($data['level'] == "operator") {
					$_SESSION ['operator'] = $data ['kode_user'] ;
					header("location: index.php");
					echo "Login Sukses Sebagai operator";
				} else {
				echo "Login Gagal";
			}
		}
	}
	?>
	</div>
	</div>
</div>

</body>
</html>