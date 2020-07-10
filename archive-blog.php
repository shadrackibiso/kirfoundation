<?php get_header(); ?>
    <!-- ==========      
        Hero
     ===========-->
    <div class="bannerSmall">
        <div class="bannerBlind"></div>
        <div class="bannerSmallContent">
            <div class="bannerSmallHead">Blog</div>
        </div>
    </div>
     <!-- ==========      
      MENTORS
     ===========-->
     <div class="section archiveSection">
         <!-- featured post -->
        <div class="row no-gutters mb-4 mb-md-5 dropShadow borderRound">
            <?php
                $query = new WP_Query(
                    array(
                    'post_type'=>'blog',
                    'posts_per_page'=>1,
                    'tax_query' => array(
                        array(
                            'taxonomy'  => 'category',
                            'field'     => 'slug',
                            'terms'     => 'featured',
                            'operator'  => 'IN'
                        )
                    )
                    )
                );

                if ( $query->have_posts() ) : 
                while ( $query->have_posts() ) : $query->the_post();
            ?>
            <!--  -->
            <div class="col-lg-6">
                <div>
                    <img src="<?php the_post_thumbnail_url(); ?>" class="coverImg" />
                </div>
            </div>
            <div class='col-lg-6 p-3'>
                <p style="font-size: 12px">FEATURED ARTICLE</p>
                <!-- title -->
                <h3 class="green title bold"><?php the_title(); ?></h3>
                <!-- excerpt -->
                <p class="grey cardExcerpt"><?php the_excerpt(); ?></p>
                <!-- footer -->
                <div class="cardFooter mt-4">
                    <!-- button -->
                    <div>
                        <a href="<?php the_permalink(); ?>" class="mainBtn">read more</a>
                    </div>
                    <!-- date -->
                    <div>
                        <p class='grey m-0'><?php echo get_the_date(); ?></p>
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
            // Reset things, for good measure
            wp_reset_postdata();
            // end the loop
            endif;
            ?>
        </div>

        <!-- all posts -->
        <div class="row">
            <?php
                $query = new WP_Query(
                    array(
                    'post_type'=>'blog',
                    'posts_per_page'=>6,
                    'tax_query' => array(
                        array(
                            'taxonomy'  => 'category',
                            'field'     => 'slug',
                            'terms'     => 'featured',
                            'operator'  => 'NOT IN'
                        )
                    )
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
                                    <a href="<?php the_permalink(); ?>" class="mainBtn">read more</a>
                                </div>
                                <!-- date -->
                                <div>
                                    <p class='grey m-0'><?php echo get_the_date(); ?></p>
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