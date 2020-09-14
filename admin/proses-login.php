<?php
/*
Author	: Irfan Maulana
Website ini dibuat hanya untuk keisengan & belajar saja
tidak untuk dijual belikan, karena code ini bersifat gratis
siapapun boleh memilikinya secara gratis untuk keperluan belajar
*/

include "../koneksi.php";

$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);

$query = mysqli_query($conn, "select * from settings where username='".$username."' and password='".$password."' limit 1");
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $data = mysqli_fetch_array($query);
    $_SESSION['login'] = $data;
    echo "<script>window.location.href='index.php';</script>";
    exit;
} else {
    echo "Data salah, ulangi lagi";
}



?>