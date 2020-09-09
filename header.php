<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- ==========
        NAVBAR      
     ===========-->
     <header class="navBar" id="navbar">
       <div class="container">
       <!-- =========
      NAV LOGO
      ========== -->
      <div class="navLogo">
        <!-- hamburger menu -->
        <div class="d-md-none menuIcon mr-3">
          <i class="fa fa-bars" onclick="document.getElementById('sideNav').style.display='flex'"></i>
        </div>
        <!-- logo -->
        <a href="/" class="btnLink">
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/logo_black.svg" /> -->
          Greyich...
        </a>
      </div>
      <!-- =========
      DESKTOP MENU 
      ========== -->
      <nav class="navMenu d-none d-md-flex">
      <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'primary-menu',
                    'walker' => new wp_bootstrap_navwalker()
                )
                );
        ?>
      </nav>
      <!-- =========
      MOBILE SIDENAV 
      ========== -->
      <div class="sideNav d-lg-none" id="sideNav">
        <!-- backdrop -->
        <div
          class="backdrop"
          onclick="document.getElementById('sideNav').style.display='none'"
        ></div>
        <!-- sidenav menu -->
        <nav class="sideNavMenu d-lg-none" id="navMenuMobile">
          <!-- menu header -->
          <div class="sideNavHeader">
            <!-- menu label -->
            <div class="sideNavMenuLabel">Menu</div>
            <!-- close btn -->
            <div class="menuCloseBtn">
            <i class="fa fa-close" onclick="document.getElementById('sideNav').style.display='none'"></i>
            </div>
          </div>
          <!-- menu items -->
          <div class="sideNavMenuItems">
          <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'primary-menu',
                    'walker' => new wp_bootstrap_navwalker()
                )
            );
          ?>
          </div>
        </nav>
      </div>
      </div>
    </header>