<?php get_header(); ?>
    <!-- ==========      
        Hero
     ===========-->
    <div class="bannerSmall">
        <div class="bannerBlind"></div>
        <div class="bannerSmallContent">
            <div class="bannerSmallHead">Mentors</div>
        </div>
    </div>
     <!-- ==========      
      MENTORS
     ===========-->
     <div class="section archiveSection">
        <!-- all posts -->
        <div class="row">
            <?php
                $query = new WP_Query(
                    array(
                    'post_type'=>'mentor',
                    'posts_per_page'=>9,
                    )
                );

                if ( $query->have_posts() ) : 
                while ( $query->have_posts() ) : $query->the_post();
            ?>
                <!--  -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card dropShadow">
                        <div class="cardImage">
                            <img src="<?php the_post_thumbnail_url(); ?>" />
                        </div>
                        <div class="cardDetails">
                            <!-- title -->
                            <h4 class="title bold green"><?php the_title(); ?></h4>
                            <!-- excerpt -->
                            <p class="grey cardExcerpt"><?php the_excerpt(); ?></p>
                            <!-- button and socials -->
                            <div class="cardFooter mt-4">
                                <!-- button -->
                                <div>
                                    <a href="<?php the_permalink(); ?>" class="mainBtn">learn more</a>
                                </div>
                                <!-- socials -->
                                <div class="homeMentorSocials">
                                    <!-- facebook -->
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <!-- instagram -->
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <!-- twitter -->
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <!-- linkedin -->
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            <?php 
            endwhile; // end loop
            ?>
            <?php else: ?>
                <p>Sorry, no blog to display.</p>
            <?php
            // end the loop
            endif;
            // Reset things, for good measure
            wp_reset_postdata();
            ?>

            <!-- PAGE BUTTONS -->
            <div class="pagination mt-5 mb-5" style="width: 100%;">
                <span class="mr-2"><?php previous_posts_link();?></span>
                <span><?php next_posts_link();?></span>
            </div>
            <!--  -->

             <!--  -->
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