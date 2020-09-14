<?php
/*
Author	: Irfan Maulana
Website ini dibuat hanya untuk keisengan & belajar saja
tidak untuk dijual belikan, karena code ini bersifat gratis
siapapun boleh memilikinya secara gratis untuk keperluan belajar
*/
?>

<!DOCTYPE html>
<html lang="en-US" >
   <head>
	<?php
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
	
	
	?>
      <!-- END OF WP_HEAD() -->
   </head>
   <body class="page-template-default page page-id-12  wp-embed-responsive oxygen-body" >
      <?php include "../menu.php"; ?>
      <div id='inner_content-3-228' class='ct-inner-content'>
         <section id="section-11-244" class=" ct-section" >
            <div class="ct-section-inner-wrap">
               <div class="form">
                   <form id="form-settings">
                      <div class="form-title">Setting Website</div>
                      <div class="form-content">
						<div id="respon"></div>
                         <label>Nama Toko *max 10 karakter</label>
                         <input type="text" required name="nama_toko" id="nama_toko" value="<?php echo $get['nama_toko']; ?>">
                         <br>
                         <label>Title Website </label>
                         <input type="text" required name="title" id="title" value="<?php echo $get['title']; ?>">
                         <br>
                         <label>Keuntungan/Margin </label>
                         <input type="text" required name="margin" id="margin" value="<?php echo $get['margin']; ?>">
                         <br>
                         <label>Username (admin)</label>
                         <input type="text" required name="username" id="username" value="<?php echo $get['username']; ?>">
                         <br>
                         <label>Password (admin)</label>
                         <input type="text" required name="password" id="password" value="<?php echo $get['password']; ?>">
                         <br>
                         <label>Portal UserID </label>
                         <input type="text" required name="portaluserid" id="portaluserid" value="<?php echo $get['portaluserid']; ?>">
                         <br>
                         <label>Portal Key </label>
                         <input type="text" required name="portalkey" id="portalkey" value="<?php echo $get['portalkey']; ?>">
                         <br>
                         <label>Portal Secret </label>
                         <input type="text" required name="portalsecret" id="portalsecret" value="<?php echo $get['portalsecret']; ?>">
                         <br>
                         <label>Tripay APIKEY </label>
                         <input type="text" required name="tripayapiKey" id="tripayapiKey" value="<?php echo $get['tripayapiKey']; ?>">
                         <br>
                         <label>Tripay Private Key </label>
                         <input type="text" required name="tripayprivateKey" id="tripayprivateKey" value="<?php echo $get['tripayprivateKey']; ?>">
                         <br>
                         <label>Tripay Merchant Code </label>
                         <input type="text" required name="tripaymerchantCode" id="tripaymerchantCode" value="<?php echo $get['tripaymerchantCode']; ?>">
                         <br>
                         
						 <button class="submit" id="update" type="submit">Update</button>
                      </div>
                   </form>
                </div>
            </div>
         </section>
      </div>
      <!-- WP_FOOTER -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  
	<script>
	$(document).ready(function() {
	$( ".oxy-menu-toggle" ).bind( "click", function(e) {
		$('.oxy-nav-menu').toggleClass('oxy-nav-menu-open');
		e.stopPropagation(); 
	});
	$("button#update").click(function(){
	    $('div#respon').html('Loading');
		$.ajax({
			url: "proses-update.php",
			type: "post",
			data: $('form#form-settings').serialize(),
			success: function (response) {
				$('div#respon').html(response);
				$('html, body').animate({ scrollTop: 0 }, 0);
                //nice and slow :)
                $('html, body').animate({ scrollTop: 0 }, 'slow');
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	return false;
	});
	});
	</script>
	  
      <script type="text/javascript">
         jQuery(document).ready( function() {
             jQuery('.ct-section:has(.oxy-shape-divider)').css({position: 'relative', overflowX: 'hidden'});
         });
      </script><script type="text/javascript" id="ct-footer-js"></script><!-- /WP_FOOTER --> 
	  
   </body>
</html>