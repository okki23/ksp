<?php
// Koneksi MySQLi OOP
$db['host'] = "localhost"; //host
$db['user'] = "root"; //username database
$db['pass'] = ""; //password database
$db['name'] = "db_ksp"; //nama database
 
$koneksi = new mysqli($db['host'], $db['user'], $db['pass'], $db['name']);
if($koneksi->connect_error){
 trigger_error('Koneksi ke database gagal: ' . $mysqli->connect_error, E_USER_ERROR); // Jika koneksi gagal, tampilkan pesan "Koneksi ke database gagal" 
}
?>