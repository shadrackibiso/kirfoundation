<?php get_header(); ?>
    <!-- ==========      
        Hero
     ===========-->
    <div class="bannerSmall">
        <div class="bannerBlind"></div>
        <div class="bannerSmallContent">
            <div class="bannerSmallHead">Mentor</div>
        </div>
    </div>
     <!-- ==========      
      INTRO
     ===========-->
     <div class="section archiveSection">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <!-- post image -->
                <div class="col-lg-5">
                    <div class="dropShadow">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="coverImg" />
                    </div>
                </div>
                <!-- post title -->
                <div class="col-lg-7 mt-3 mt-lg-0 pr-lg-5">
                    <!-- title -->
                    <h2 class="title bold green"><?php the_title(); ?></h2>
                    <!-- date -->
                    <h4 class='grey m-0'><?php echo get_post_meta( $post->ID, "mentor_designation", true ); ?></h4>
                    <!-- social network links -->
                    <div class="cardSocials mt-3">
                        <a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- post content -->
                <div class="col mt-3 mt-lg-0">
                    <article class="mt-3"><?php the_content(); ?></article>
                </div>
                <!--  -->
            <?php endwhile; // end loop?>
            <?php wp_reset_postdata(); ?>
            <?php else: ?> <p>Sorry, no post to display.</p>
            <?php endif; ?>
        </div>
     </div>
     <!-- ==========      
      NEWSLETTER
     ===========-->
     <?php get_template_part('includes/newsletter');?>
     <!-- ==========      
      UPDATES
     ===========-->
     <?php get_template_part('includes/updates') ?>
    <!-- ==========      
      FOOTER
     ===========-->
    <?php get_footer(); ?>