<?php get_header(); ?>
<!-- breadcrumbs -->
<?php get_template_part('templates/breadcrumbs') ?>
<!--  -->
<div class="container">
    <div class="row">
        <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
        <!--  -->
        <div class="col-lg-8 mb-3">
            <!-- post title -->
            <h2 class="title  font-weight-bold">
                <?php the_title() ?>
            </h2>
            <!-- post details -->
            <div class="d-flex">
                <!-- date -->
                <p class="post-date color3 mb-0">
                    <?php echo get_the_date(); ?> | 
                </p>
                <!-- author -->
                <p class="post-author color3 mb-0 ml-1">
                    <?php echo get_the_author(); ?>
                </p>
            </div>
            <!-- social share -->
            <p>
                <?php echo do_shortcode('[shared_counts]'); ?>
            </p>
        </div>
        <!-- ==========      
            CONTENT
        ===========-->
        <div class="col-lg-8 mb-5">
            <!-- post image -->
            <?php if ( 'video' != get_post_type() ) : ?>
            <div class="singleImage">
                <div class="imageContainer shadow">
                    <img class="coverImage" src="<?php the_post_thumbnail_url(); ?>" />
                </div>
            </div>
            <?php endif ?>
            <!-- post content -->
            <article class="mt-4">
                <?php the_content(); ?>
            </article>
            <!--  -->
        </div>
         <!-- ==========      
            SIDE BAR
        ===========-->
        <div class="col-lg-4">
        <?php get_template_part('templates/sidebar') ?>
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
    </div>
</div>

<!-- ==========      
    FEATURED  POSTS
===========-->
<?php get_template_part('templates/featured-posts') ?>
<!-- ==========      
    NEWSLETTER
===========-->
<?php get_template_part('templates/newsletter') ?>
<!-- ==========      
    FOOTER
===========-->
<?php get_footer(); ?>