<?php
/*
Author	: Irfan Maulana
Website ini dibuat hanya untuk keisengan & belajar saja
tidak untuk dijual belikan, karena code ini bersifat gratis
siapapun boleh memilikinya secara gratis untuk keperluan belajar
*/
?>

<header id="_header-2-225" class="oxy-header-wrapper oxy-overlay-header oxy-header" >
         <div id="_header_row-10-225" class="oxy-header-row" >
            <div class="oxy-header-container">
               <div id="_header_left-11-225" class="oxy-header-left" ><a id="link-12-225" class="ct-link atomic-logo" href="index.php" target="_self" ><img id="image-13-225" alt="" src="/assets/images/oxygen-logo-blue.png" class="ct-image"/></a></div>
               <div id="_header_center-14-225" class="oxy-header-center" ></div>
               <div id="_header_right-15-225" class="oxy-header-right" >
                  <div id="div_block-16-225" class="ct-div-block" >
                     <nav id="_nav_menu-17-225" class="oxy-nav-menu oxy-nav-menu-dropdowns oxy-nav-menu-dropdown-arrow" >
                        <div class='oxy-menu-toggle'>
                           <div class='oxy-nav-menu-hamburger-wrap'>
                              <div class='oxy-nav-menu-hamburger'>
                                 <div class='oxy-nav-menu-hamburger-line'></div>
                                 <div class='oxy-nav-menu-hamburger-line'></div>
                                 <div class='oxy-nav-menu-hamburger-line'></div>
                              </div>
                           </div>
                        </div>
                        <div class="menu-example-menu-container">
                           <ul id="menu-example-menu" class="oxy-nav-menu-list">
                              <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="/">Order</a></li>
                              <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a href="/harga.php">Harga</a></li>
                              <?php
                              if (isset($_SESSION['login'])) { ?>
                                <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a href="/admin/index.php">Admin Menu</a></li>
                              <?php } ?>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>