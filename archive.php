<?php get_header(); ?>
<!-- breadcrumbs -->
<?php get_template_part('templates/breadcrumbs') ?>
<!-- ==========      
    CONTENT
===========-->
<div class="container mb-5">
    <!-- <div class="sectionLabel">
    </div> -->
    <!-- content loop -->
    <div class="row">
        <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
            <!--  -->
                <?php get_template_part('templates/post-card-template'); ?>
            <!--  -->
        <?php endwhile; // end while ?>
        <!-- pagination -->
        <div class="col-12 mt-3">
            <div class="pagination p-1">
                <?php echo paginate_links() ?>
            </div>
        </div>
        <!--  -->
        <?php else: ?>
            <div class="col-12">
                <p>Sorry, no post to display.</p>
            </div>
        <?php
        // Reset things
        wp_reset_postdata();
        // end the loop
        endif;
        ?>
    </div>
</div>
<!-- ==========      
    NEWSLETTER
===========-->
<?php get_template_part('templates/newsletter') ?>
<!-- ==========      
    FOOTER
===========-->
<?php get_footer(); ?>
