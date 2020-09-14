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
	include "koneksi.php";
	include "meta.php"; 
	?>
      <!-- END OF WP_HEAD() -->
   </head>
   <body class="page-template-default page page-id-12  wp-embed-responsive oxygen-body" >
      <?php include "menu.php"; ?>
      <div id='inner_content-3-228' class='ct-inner-content'>
         <section id="section-2-244" class=" ct-section" >
            <div class="ct-section-inner-wrap">
               <div id="new_columns-3-244" class="ct-new-columns" >
                  <div id="div_block-4-244" class="ct-div-block" >
                     <h1 id="headline-5-244" class="ct-headline atomic-primary-heading">Pulsa Termurah se Depok</h1>
                     <div id="text_block-6-244" class="ct-text-block atomic-subheading" >Masih cari pulsa yang lebih murah?&nbsp;&nbsp;<br>disini paling murah!</div>
                  </div>
                  <div id="div_block-9-244" class="ct-div-block" >
                     <div id="_rich_text-94-12" class="oxy-rich-text" >
                        <div class="form">
                           <form id="order">
                              <div class="form-title">Form Pembelian</div>
                              <div class="form-content">
								<div id="respon"></div>
                                 <label>Nomor </label>
                                 <input type="number" required name="nomor" id="nomor">
                                 
                                 <label>Pilihan </label>
								 <select id="operator" required name="operator">
								     <option>Masukkan Nomor</option>
								 </select>
								 <br>
                                 <label>Pembayaran </label>
                                 <select id="pembayaran" required name="pembayaran">
                                     <option value="BNIVA">BNI Virtual Account</option>
                                     <option value="MYBVA">Maybank Virtual Account</option>
                                     <option value="PERMATAVA">Permata Virtual Account</option>
                                     <option value="BRIVA">BRI Virtual Account</option>
                                     <option value="MANDIRIVA">Mandiri Virtual Account</option>
                                     <option value="ALFAMART">Alfamart</option>
                                     <option value="INDOMARET">Indomaret</option>
								 </select>
								 <br>
								 <button class="submit" id="order" type="submit">Order</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="-shape-divider-95-12" class="oxy-shape-divider ">
                  <div class="oxy_shape_divider" >
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
                        <path fill="currentColor" fill-opacity="1" d="M0,288L1440,0L1440,320L0,320Z"></path>
                     </svg>
                  </div>
               </div>
            </div>
         </section>
         <section id="section-90-244" class=" ct-section" >
            <div class="ct-section-inner-wrap">
               <h2 id="headline-91-244" class="ct-headline atomic-tritary-heading">Support Bank</h2>
               <div id="-shape-divider-99-12" class="oxy-shape-divider ">
                  <div class="oxy_shape_divider" >
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
                        <path fill="currentColor" fill-opacity="1" d="M0,288L1440,0L1440,320L0,320Z"></path>
                     </svg>
                  </div>
               </div>
               <div id="div_block-100-12" class="ct-div-block" >
                  <div id="div_block-105-12" class="ct-div-block logo-bank" ><img id="image-101-12" alt="" src="assets/images/bri.png" class="ct-image"/></div>
                  <div id="div_block-106-12" class="ct-div-block" ><img id="image-102-12" alt="" src="assets/images/o_1b2plgvck1jng1mma1mv81apcf99a.jpg" class="ct-image logo-bank"/></div>
                  <div id="div_block-107-12" class="ct-div-block" ><img id="image-103-12" alt="" src="assets/images/logo-BNI-46-1.png" class="ct-image logo-bank"/></div>
                  <div id="div_block-108-12" class="ct-div-block" ><img id="image-104-12" alt="" src="assets/images/836405_720.jpg" class="ct-image logo-bank"/></div>
               </div>
            </div>
         </section>
         <section id="section-11-244" class=" ct-section" >
            <div class="ct-section-inner-wrap">
               <h2 id="headline-12-244" class="ct-headline atomic-secondary-heading">Data Pembelian</h2>
               <div id="text_block-13-244" class="ct-text-block atomic-subheading" >Data semua pembelian</div>
               <div id="_rich_text-117-13" class="oxy-rich-text" >
                  <div class="harga">
                     <table>
                        <tr>
                           <th>Id</th>
                           <th>Produk</th>
                           <th>Nomer</th>
                           <th>Status</th>
                           <th>Keterangan</th>
                           <th>Tanggal</th>
                        </tr>
                        <?php
                        
                        $query = mysqli_query($conn, "select * from transaksi inner join produk on transaksi.kode_produk = produk.code order by transaksi.id desc");
                        $x = 1;
                        while($get = mysqli_fetch_array($query)) {
                            
                            echo "<tr>
                                   <td>".$x."</td>
                                   <td>".$get['description']."</td>
                                   <td>".substr($get['nomer'], 0, strlen($get['nomer'])-6).str_repeat("*", 6)."</td>
                                   <td>".$get['status_trx']."</td>
                                   <td>".$get['keterangan']."</td>
                                   <td>".date("d/m/Y H:i", $get['waktu_pembelian'])."</td>
                                </tr>";
                            
                        $x++;    
                        }
                        
                        ?>
                        
                     </table>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <section id="section-20-225" class=" ct-section" >
         <div class="ct-section-inner-wrap">
         </div>
      </section>
      <!-- WP_FOOTER -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  
	<script>
	$(document).ready(function() {
	$( ".oxy-menu-toggle" ).bind( "click", function(e) {
		$('.oxy-nav-menu').toggleClass('oxy-nav-menu-open');
		e.stopPropagation(); 
	});
	$( "#nomor" ).keyup(function() {
		$.ajax({
			url: "include/produk.php",
			type: "post",
			data: $('form#order').serialize(),
			success: function (response) {
				$('select#operator').html(response);
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
		return false;
	});
	$("button#order").click(function(){
	    $('div#respon').html('Loading');
		$.ajax({
			url: "include/pemesanan.php",
			type: "post",
			data: $('form#order').serialize(),
			success: function (response) {
				$('div#respon').html(response);
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