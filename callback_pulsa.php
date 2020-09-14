<?php
/*
Author	: Irfan Maulana
Website ini dibuat hanya untuk keisengan & belajar saja
tidak untuk dijual belikan, karena code ini bersifat gratis
siapapun boleh memilikinya secara gratis untuk keperluan belajar
*/

// include file koneksi database
require('koneksi.php');

if($_SERVER['REMOTE_ADDR']=='172.104.161.223'){ // memastikan data terikirim dari server portalpulsa

$data = json_decode($_POST['content'], true);

$trxid  = $data['trxid'];
$nomer  = $data['phone'];
$ref    = $data['trxid_api'];
$status = $data['status']; //1:pending, 2:gagal, 3:refund, 4:sukses
$sn     = $data['sn'];
$note   = $data['note'];

$status_trx = array(1 => 'pending', 2 => 'gagal', 3 => 'refund', 4 => 'sukses');

$query = mysqli_query($conn, "select * from transaksi where nomer='".$nomer."' and ref='".$ref."' order by id desc limit 1");
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    
    $update = mysqli_query($conn, "update transaksi set status_trx = '".$status_trx[$status]."', keterangan = '".(($status == 4) ? $sn : $note)."', trxid = '".$trxid."' where nomer='".$nomer."' and ref='".$ref."' order by id desc limit 1");
    
}


}