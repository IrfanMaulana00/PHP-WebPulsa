<?php
/*
Author	: Irfan Maulana
Website ini dibuat hanya untuk keisengan & belajar saja
tidak untuk dijual belikan, karena code ini bersifat gratis
siapapun boleh memilikinya secara gratis untuk keperluan belajar
*/

session_start();
date_default_timezone_set('Asia/Jakarta');

$hostname 	= 'localhost';
$username 	= '';
$password 	= '';
$dbname 	= '';
$conn = mysqli_connect( $hostname , $username , $password , $dbname );
mysqli_query($conn, "SET NAMES utf8;");
mysqli_query($conn, "SET CHARACTER_SET utf8;");


$query_setting = mysqli_query($conn, "select * from settings");
$settings = mysqli_fetch_array($query_setting);

?>