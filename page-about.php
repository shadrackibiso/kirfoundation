<?php get_header(); ?>
    <!-- ==========      
        Hero
     ===========-->
    <div class="bannerSmall">
        <div class="bannerBlind"></div>
        <div class="bannerSmallContent">
            <div class="bannerSmallHead">About Us</div>
        </div>
    </div>
     <!-- ==========      
      ABOUT
     ===========-->
     <div class="section aboutSection pt-2 pt-md-5">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <h5><?php the_content(); ?></h5>
            <div class="cardSocials mt-3">
                <a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" title="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
        <?php endwhile; // end loop?>
        <?php wp_reset_postdata(); ?>
        <?php else: ?> <p>Sorry, no post to display.</p>
        <?php endif; ?>
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