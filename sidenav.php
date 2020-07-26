<div class="sideNav" id="sideNav">
    <div class="backdrop d-lg-none"
    onclick="document.getElementById('sideNav').style.display='none'"
    ></div>
    <nav class="sideNavMenu shadow-lg" id="sideNavMenu">
        <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'primary-menu',
                    'walker' => new wp_bootstrap_navwalker()
                )
            );
        ?>
        <!-- -------------
            movies by year 
        ------------- -->
        <div class="menuLabel" onclick="this.childNodes[3].classList.toggle('rotateCaret'); this.nextElementSibling.classList.toggle('d-none')">
            <span>movies by year</span>
            <span class="dropdownCaret"><i class="fa fa-caret-down"></i></span>
        </div>
        <!-- menu -->
        <div class="menuDropDown d-none">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'movie-year',
                        'walker' => new wp_bootstrap_navwalker()
                    )
                );
            ?>
        </div>
        <!-- -------------
            movies by genre
        ------------- -->
        <div class="menuLabel" onclick="this.childNodes[3].classList.toggle('rotateCaret'); this.nextElementSibling.classList.toggle('d-none')">
            <span>movies by genre</span>
            <span class="dropdownCaret"><i class="fa fa-caret-down"></i></span>
        </div>
        <!-- menu -->
        <div class="menuDropDown d-none">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'movie-genre',
                        'walker' => new wp_bootstrap_navwalker()
                    )
                );
            ?>
        </div>
    </nav>
</div>