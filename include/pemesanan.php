<?php
/*
Author	: Irfan Maulana
Website ini dibuat hanya untuk keisengan & belajar saja
tidak untuk dijual belikan, karena code ini bersifat gratis
siapapun boleh memilikinya secara gratis untuk keperluan belajar
*/

set_time_limit(0);
include "../koneksi.php";

$nomor = ((isset($_POST['nomor'])) ? ((strlen($_POST['nomor']) > 0) ? strtolower($_POST['nomor']) : null) : null);
$operator = ((isset($_POST['operator'])) ? ((strlen($_POST['operator']) > 0) ? strtoupper($_POST['operator']) : null) : null);
$pembayaran = ((isset($_POST['pembayaran'])) ? ((strlen($_POST['pembayaran']) > 0) ? strtoupper($_POST['pembayaran']) : null) : null);

if ($nomor == null or $operator == null or $pembayaran == null) {
	echo "<font color='red'>Form tidak lengkap</font>"; exit;
} else {
	
	$query = mysqli_query($conn, "select * from settings");
	$get = mysqli_fetch_array($query);
	$margin = $get['margin'];
	
	$query = mysqli_query($conn, "select * from produk where code='".$operator."' limit 1");
	$cek = mysqli_num_rows($query);
	if ($cek == 0){
	    echo "<font color='red'>Paket tidak tersedia</font>";
	} else {
	    $get1 = mysqli_fetch_array($query);
	    
	    $deskripsi = $get1['description'];
	    $total = (int) ($get1['price']+$margin);
	    $ref = "INV".substr(time(), -6);
	    
	    $apiKey = $settings['tripayapiKey'];
	    $privateKey = $settings['tripayprivateKey'];
	    $merchantCode = $settings['tripaymerchantCode'];
        
        if ($pembayaran == "BNIVA" or $pembayaran == "MYBVA" or $pembayaran == "PERMATAVA") {
            $customer_name  = $settings['nama_toko'];
        } else {
            $customer_name  = "Pulsa ".$nomor;
        }

        $data = [
          'method'            => $pembayaran,
          'merchant_ref'      => $ref,
          'amount'            => $total,
          'customer_name'     => $customer_name,
          'customer_email'    => $nomor."@gmail.com",
          'customer_phone'    => strval($nomor),
          'order_items'       => [
            [
              'sku'       => "PULSA",
              'name'      => "PULSA ".$operator,
              'price'     => $total,
              'quantity'  => 1
            ]
          ],
          'callback_url'      => 'https://'.$_SERVER['SERVER_NAME'].'/callback.php',
          'return_url'        => 'https://'.$_SERVER['SERVER_NAME'].'/redirect.php',
          'expired_time'      => (time()+(24*60*60)), // 24 jam
          'signature'         => hash_hmac('sha256', $merchantCode.$ref.$total, $privateKey)
        ];
        
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_FRESH_CONNECT     => true,
          CURLOPT_URL               => "https://payment.tripay.co.id/api/transaction/create",
          CURLOPT_RETURNTRANSFER    => true,
          CURLOPT_HEADER            => false,
          CURLOPT_CONNECTTIMEOUT    => 0,
          CURLOPT_TIMEOUT           => 100,
          CURLOPT_HTTPHEADER        => array(
            "Authorization: Bearer ".$apiKey
          ),
          CURLOPT_FAILONERROR       => false,
          CURLOPT_POST              => true,
          CURLOPT_POSTFIELDS        => http_build_query($data)
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        if ($error_number = curl_errno($curl)) {
            if (in_array($error_number, array(CURLE_OPERATION_TIMEDOUT, CURLE_OPERATION_TIMEOUTED))) {
                echo "Time Out"; exit;
            }
        }
        
        curl_close($curl);
            
            $respon = json_decode($response, true);
            
            if ($respon['success'] == true) {
                
                $save = mysqli_query($conn, "insert into transaksi (reference, ref, nomer, kode_produk, harga, rek_va, waktu_pembelian) values('".$respon['data']['reference']."', '".$ref."', '".$nomor."', '".$operator."', ".$total.", '".$respon['data']['pay_code']."', '".time()."')");
                
                if ($save) {
echo '<font color="blue">INVOICE !!<br>
Pembelian : '.$deskripsi.'<br>
Harga : Rp '.number_format($total,0,',','.').'<br>
Virtual Account : '.$respon['data']['pay_code'].'<br>
Waktu transfer 1x24 jam.
<br><br>
Terima Kasih ^_^</font>';
                } else {
                    echo "Silahkan coba lagi";
                }
        
            } else {
                print_r($respon['message']);
            }
	}
	
}



?>