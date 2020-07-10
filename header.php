<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KR Foods</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- ==========
        NAVBAR      
     ===========-->
    <header class="navBar">
      <div class="navLogo">
        <a href="#" class="btnLink">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
        </a>
      </div>
      <nav class="navMenu d-none d-lg-flex">
      <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'walker' => new wp_bootstrap_navwalker()
                )
                );
        ?>
      </nav>
      <!-- MOBILE MENU -->
      <div class="d-lg-none menuIcon">
        <i class="fa fa-bars" onclick="document.getElementById('mobileSideNav').style.display='flex'"></i>
      </div>
      <div class="mobileSideNav" id="mobileSideNav">
        <div
          class="navBlind"
          onclick="document.getElementById('mobileSideNav').style.display='none'"
        ></div>
        <nav class="navMenuMobile d-lg-none shadow-lg" id="navMenuMobile">
          <ul>
            <li class="menuCloseBtn">
              <i class="fa fa-close" onclick="document.getElementById('mobileSideNav').style.display='none'"></i>
            </li>
          </ul>
          <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'walker' => new wp_bootstrap_navwalker()
                )
            );
          ?>
        </nav>
      </div>
    </header>