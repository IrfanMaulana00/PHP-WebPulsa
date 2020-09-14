<?php
/*
Author	: Irfan Maulana
Website ini dibuat hanya untuk keisengan & belajar saja
tidak untuk dijual belikan, karena code ini bersifat gratis
siapapun boleh memilikinya secara gratis untuk keperluan belajar
*/

include "../koneksi.php";

$operator = array(
"62812" => "TELKOMSEL",
"62813" => "TELKOMSEL",
"62821" => "TELKOMSEL",
"62822" => "TELKOMSEL",
"62852" => "TELKOMSEL",
"62853" => "TELKOMSEL",
"62823" => "TELKOMSEL",
"62814" => "INDOSAT",
"62815" => "INDOSAT",
"62816" => "INDOSAT",
"62855" => "INDOSAT",
"62856" => "INDOSAT",
"62857" => "INDOSAT",
"62858" => "INDOSAT",
"62895" => "TRI",
"62896" => "TRI",
"62897" => "TRI",
"62898" => "TRI",
"62899" => "TRI",
"62881" => "SMARTFREN",
"62882" => "SMARTFREN",
"62883" => "SMARTFREN",
"62884" => "SMARTFREN",
"62885" => "SMARTFREN",
"62886" => "SMARTFREN",
"62887" => "SMARTFREN",
"62888" => "SMARTFREN",
"62889" => "SMARTFREN",
"62817" => "XL",
"62818" => "XL",
"62819" => "XL",
"62859" => "XL",
"62877" => "XL",
"62878" => "XL",
"62838" => "AXIS",
"62831" => "AXIS",
"62832" => "AXIS",
"62833" => "AXIS"
);

$nomor = ((isset($_POST['nomor'])) ? ((strlen($_POST['nomor']) > 0) ? strtolower($_POST['nomor']) : "") : "");

if (strlen($nomor) >= 4) {
	
	$code = substr($nomor, 0, 2);
	if ($code == "08") {
		$nomor = "628".substr($nomor, 2);
	}
	
	$provider = $operator[substr($nomor, 0, 5)];
	if ($provider != null) {
		$query = mysqli_query($conn, "select * from produk where provider='".$provider."'");
		while($get = mysqli_fetch_array($query)) {
			echo "<option value='".$get['code']."'>".$get['description']."</option>";
		}
	}
	
	//echo "<option value='asd'>".$operator[substr($nomor, 0, 5)]." - ".substr($nomor, 0, 5)."</option>";
	
}





?>