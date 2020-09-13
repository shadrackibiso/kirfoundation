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
          <!-- logo -->
          <a href="/" class="btnLink">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo_text.svg" />
          </a>
        </div>
        <!-- nav logo end -->

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
          <!-- search form -->
          <form method="POST" class="searchForm shadow-sm ml-3">
            <input type="text" name="s" placeholder="Search..." />
            <button>
                <i class="fa fa-search"></i>
            </button>
          </form>
        </nav>
        <!-- desktop menu end -->

        <!-- =========
        HAMBURGER MENU
        ========== -->
        <div class="d-md-none menuIcon">
          <i class="fa fa-bars" onclick="document.getElementById('sideNav').style.display='flex'"></i>
        </div>
        <!-- menu icon end -->

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

            <!-- search form -->
            <div class="searchFormContainer pt-3 pb-3">
              <form method="POST" class="searchForm shadow-sm">
                <input type="text" name="s" placeholder="Search..." />
                <button>
                    <i class="fa fa-search"></i>
                </button>
              </form>
            </div>

            <!-- menu items -->
            <div class="sideNavMenuItems">
              <!-- routes -->
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
        <!-- sidenav end -->

      </div>
    </header>