<?php
/*
Author	: Irfan Maulana
Website ini dibuat hanya untuk keisengan & belajar saja
tidak untuk dijual belikan, karena code ini bersifat gratis
siapapun boleh memilikinya secara gratis untuk keperluan belajar
*/

// include file koneksi database
require('koneksi.php');

// ambil data JSON
$json = file_get_contents("php://input");

// ambil callback signature
$callbackSignature = isset($_SERVER['HTTP_X_CALLBACK_SIGNATURE']) ? $_SERVER['HTTP_X_CALLBACK_SIGNATURE'] : '';

// generate signature untuk dicocokkan dengan X-Callback-Signature
$signature = hash_hmac('sha256', $json, $settings['tripayprivateKey']);

// validasi signature
if( $callbackSignature !== $signature ) {
    exit("Invalid Signature"); // signature tidak valid, hentikan proses
}

$data = json_decode($json, true);
$event = $_SERVER['HTTP_X_CALLBACK_EVENT'];

if( $event == 'payment_status' )
{
    
    if( $data['status'] == 'PAID' ) //PAID, UNPAID, REFUND, EXPIRED, FAILED, // paid_at = 1599838650
    {
        $reference = $data['reference'];
        $merchant_ref = $data['merchant_ref'];
        $total_amount = $data['total_amount'];
        
        $update_pembayaran = mysqli_query($conn, "update transaksi set status_pembayaran='success' where reference='".$reference."' and ref='".$merchant_ref."' and status_pembayaran='waiting' limit 1");
        
        $query = mysqli_query($conn, "select * from transaksi where reference='".$reference."' and ref='".$merchant_ref."' and status_pembayaran='success' and status_trx='pending' order by id desc limit 1");
        $cek = mysqli_num_rows($query);
        
        if ($cek > 0) {
            $get = mysqli_fetch_array($query);
            
            $ke = mysqli_num_rows(mysqli_query($conn, "select * from transaksi where nomer = '".$get['nomer']."' and status_pembayaran='success' and waktu_pembelian >= ".strtotime(date("m/d/Y", time()))));
            
            $url = 'https://portalpulsa.com/api/connect/';
    
            $header = array(
            'portal-userid: '.$settings['portaluserid'],
            'portal-key: '.$settings['portalkey'], // lihat hasil autogenerate di member area
            'portal-secret: '.$settings['portalsecret'], // lihat hasil autogenerate di member area
            );
            
            $data = array(
            'inquiry' => 'I', // konstan
            'code' => $get['kode_produk'], // kode produk
            'phone' => $get['nomer'], // nohp pembeli
            'trxid_api' => $merchant_ref, // Trxid / Reffid dari sisi client
            'no' => strval($ke+1), // untuk isi lebih dari 1x dlm sehari, isi urutan 1,2,3,4,dst
            );
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            $result = curl_exec($ch);
            
            $output = json_decode($result, true);
            
            $status_trx = (($output['result'] == 'success') ? 'sukses' : 'gagal');
            $keterangan = $output['message'];
            
            mysqli_query($conn, "update transaksi set status_trx='".$status_trx."', keterangan='".$keterangan."' where reference='".$reference."' and ref='".$merchant_ref."' order by id desc limit 1");
            
            
        }
    }
}

echo json_encode(['success' => true]); // berikan respon yang sesuai

?>