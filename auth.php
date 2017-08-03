<?php
include "session_cek.php";
include "inc/koneksi.php";


$datapos = array('username'=>isset($_POST['username']) ? $_REQUEST['username'] : '',
                 'password'=>isset($_POST['password']) ? $_REQUEST['password'] : '');
//echo "select * from tb_user where username = '$datapos[username]' and password = '".md5($datapos['password'])."'";

$query = $koneksi->query(" select * from tb_user where username = '$datapos[username]' and password = '".md5($datapos['password'])."' ");
$res = $query->num_rows;
$grab_data = $query->fetch_object();


if($res > 0){
  session_start();
  $_SESSION['username'] = $grab_data->username;
  $_SESSION['level'] = $grab_data->level;
  header('location:index.php');
}else{

  header('location:Login.php');
}

?>
