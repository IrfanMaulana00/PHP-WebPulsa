<?php
/*
Author	: Irfan Maulana
Website ini dibuat hanya untuk keisengan & belajar saja
tidak untuk dijual belikan, karena code ini bersifat gratis
siapapun boleh memilikinya secara gratis untuk keperluan belajar
*/

include "../koneksi.php";
include "../meta.php"; 

if (isset($_SESSION['login'])) {
    
    $query = mysqli_query($conn, "select * from settings where id=".$_SESSION['login']['id']);
    $cek = mysqli_num_rows($query);
    if ($cek == 0) {
        echo "<script>window.location.href='login.php';</script>";
        exit;
    } else {
        $get = mysqli_fetch_array($query);
    }
    
} else {
    echo "<script>window.location.href='login.php';</script>";
    exit;
}

$title                  = mysqli_escape_string($conn, $_POST['title']);
$nama_toko              = mysqli_escape_string($conn, $_POST['nama_toko']);
$margin                 = mysqli_escape_string($conn, str_replace(" ", "", $_POST['margin']));
$username               = mysqli_escape_string($conn, str_replace(" ", "", $_POST['username']));
$password               = mysqli_escape_string($conn, str_replace(" ", "", $_POST['password']));
$portal_userid          = mysqli_escape_string($conn, str_replace(" ", "", $_POST['portaluserid']));
$portal_key             = mysqli_escape_string($conn, str_replace(" ", "", $_POST['portalkey']));
$portal_secret          = mysqli_escape_string($conn, str_replace(" ", "", $_POST['portalsecret']));
$tripay_apiKey          = mysqli_escape_string($conn, str_replace(" ", "", $_POST['tripayapiKey']));
$tripay_privateKey      = mysqli_escape_string($conn, str_replace(" ", "", $_POST['tripayprivateKey']));
$tripay_merchantCode    = mysqli_escape_string($conn, str_replace(" ", "", $_POST['tripaymerchantCode']));

$update = mysqli_query($conn, "update settings set nama_toko='".$nama_toko."', title='".$title."', margin=".$margin.", username='".$username."', password='".$password."', portaluserid='".$portal_userid."', portalkey='".$portal_key."', portalsecret='".$portal_secret."', tripayapiKey='".$tripay_apiKey."', tripayprivateKey='".$tripay_privateKey."', tripaymerchantCode='".$tripay_merchantCode."' where id=".$_SESSION['login']['id']);

if ($update) {
    echo "Update Sukses";
    if ($username != $_SESSION['login']['username'] or $password != $_SESSION['login']['password']) {
        echo "<script>window.location.href='login.php';</script>";
        exit;
    } else {
        $query = mysqli_query($conn, "select * from settings where id=".$_SESSION['login']['id']);
        $get = mysqli_fetch_array($query);
        $_SESSION['login'] = $get;
    }
    
} else {
    echo "Update Gagal";
}


?>