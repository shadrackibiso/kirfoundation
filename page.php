<?php get_header(); ?>
<!-- breadcrumbs -->
<?php get_template_part('templates/breadcrumbs') ?>
<!-- ==========      
    CONTENT
===========-->
<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
    <!--  -->
    <div class="container mb-5">
        <!-- page title -->
        <div class="sectionLabel">
            <?php the_title() ?>
        </div>
        <article>
            <?php the_content(); ?>
        </article>
    </div>
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
<!-- ==========      
    FEATURED  POSTS
===========-->
<!-- ==========      
    NEWSLETTER
===========-->
<?php get_template_part('templates/newsletter') ?>
<!-- ==========      
    FOOTER
===========-->
<?php get_footer(); ?>