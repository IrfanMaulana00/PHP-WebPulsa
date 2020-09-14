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
         
         
         <section id="section-11-244" class=" ct-section" >
            <div class="ct-section-inner-wrap">
               <h2 id="headline-12-244" class="ct-headline atomic-secondary-heading">Daftar harga</h2>
               <div id="_rich_text-117-13" class="oxy-rich-text" >
                  <div class="harga">
                     <table>
                        <tr>
                           <th>Id</th>
                           <th>Code</th>
                           <th>Deskrpsi</th>
                           <th>Harga</th>
                           <th>Status</th>
                        </tr>
                        <?php
                        
                        $query = mysqli_query($conn, "select * from produk");
                        $x = 1;
                        $produk = "";
                        while($get = mysqli_fetch_array($query)) {
                            if ($produk != $get['provider']) {
                                echo "<tr><td colspan='5' style='font-size:larger; font-weight: bold;'>".$get['provider']."</td></tr>";
                                $produk = $get['provider'];
                            }
                            echo "<tr>
                                   <td>".$x."</td>
                                   <td>".$get['code']."</td>
                                   <td>".$get['description']."</td>
                                   <td>".number_format(($get['price']+$settings['margin']) ,0,',','.')."</td>
                                   <td>".$get['status']."</td>
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
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	  
      <script type="text/javascript">
         
		 $( ".oxy-menu-toggle" ).bind( "click", function(e) {
			$('.oxy-nav-menu').toggleClass('oxy-nav-menu-open');
			e.stopPropagation(); 
		});
      </script>
      <script type="text/javascript">
         jQuery(document).ready( function() {
             jQuery('.ct-section:has(.oxy-shape-divider)').css({position: 'relative', overflowX: 'hidden'});
         });
      </script><script type="text/javascript" id="ct-footer-js"></script><!-- /WP_FOOTER --> 
	  
   </body>
</html>