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
	?>
      <!-- END OF WP_HEAD() -->
   </head>
   <body class="page-template-default page page-id-12  wp-embed-responsive oxygen-body" >
      <?php include "../menu.php"; ?>
      <div id='inner_content-3-228' class='ct-inner-content'>
         <section id="section-2-244" class=" ct-section" >
            <div class="ct-section-inner-wrap">
               <div id="new_columns-3-244" class="ct-new-columns" >
                  <div id="div_block-4-244" class="ct-div-block" >
                     <h1 id="headline-5-244" class="ct-headline atomic-primary-heading">Selamat Datang Admin !</h1>
                  </div>
                  <div id="div_block-9-244" class="ct-div-block" >
                     <div id="_rich_text-94-12" class="oxy-rich-text" >
                        <div class="form">
                           <form id="form-login">
                              <div class="form-title">Form Login Admin</div>
                              <div class="form-content">
								<div id="respon"></div>
                                 <label>Username </label>
                                 <input type="text" required name="username" id="username">
                                 <br>
                                 <label>Password </label>
                                 <input type="password" required name="password" id="password">
								 <button class="submit" id="login" name="login" type="submit">Order</button>
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
      </div>
      <!-- WP_FOOTER -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  
	<script>
	$(document).ready(function() {
	$( ".oxy-menu-toggle" ).bind( "click", function(e) {
		$('.oxy-nav-menu').toggleClass('oxy-nav-menu-open');
		e.stopPropagation(); 
	});
	$("button#login").click(function(){
	    $('div#respon').html('Loading');
		$.ajax({
			url: "proses-login.php",
			type: "post",
			data: $('form#form-login').serialize(),
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