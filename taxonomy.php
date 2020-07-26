<?php get_header(); ?>
<div class="container-fluid p-0">
    <div class="row no-gutters">

        <!-- side nav -->
        <div class="col-lg-2">
            <?php get_template_part('sidenav') ?>
        </div>

        <!-- content -->
        <div class="col-lg-10 bodyContainer">
            <div class="container-fluid p-3">
                <h5 class="sectionLabel pb-3 mb-0">genre:
                <?php 
                $term = get_queried_object();
                echo $term->slug; 
                ?>
                </h5>
                <div class="row align-items-stretch no-gutters">
                    <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    ?>
                    <!--  -->
                    <?php get_template_part('templates/movie-card') ?>
                    <!--  -->
                    <?php endwhile; // end while ?>
                    <?php else: ?>
                        <p style="color: grey">Sorry, no post to display.</p>
                    <?php
                    // Reset things
                    wp_reset_postdata();
                    // end the loop
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========      
    FOOTER
    ===========-->