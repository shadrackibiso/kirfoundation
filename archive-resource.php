<?php get_header(); ?>
    <!-- ==========      
        Hero
     ===========-->
    <div class="bannerSmall">
        <div class="bannerBlind"></div>
        <div class="bannerSmallContent">
            <div class="bannerSmallHead">Resources</div>
        </div>
    </div>
     <!-- ==========      
      RESOURCES
     ===========-->
     <div class="section pt-5 pb-5">
         <!-- intro -->
         <article>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </article>
        <!-- tab -->
        <div class="tab">
            <button class="activeTab tabBtn" onclick="showTab(event, 1)">downloads</button>
            <button class="tabBtn" onclick="showTab(event, 2)">reports</button>
            <button class="tabBtn" onclick="showTab(event, 3)">videos</button>
        </div>
     </div>
    
     <!-- loop -->
     <div class="section archiveSection pt-0">
        <!-- startups -->
        <div class="row tabContent" id="tab1">
            <?php
                $query = new WP_Query(
                    array(
                    'post_type'=>'resource',
                    'posts_per_page'=>9,
                    'tax_query' => array(
                        array(
                            'taxonomy'  => 'resource_category',
                            'field'     => 'slug',
                            'terms'     => 'downloads',
                            'operator'  => 'IN'
                        )
                    )
                    )
                );
                if ( $query->have_posts() ) : 
                while ( $query->have_posts() ) : $query->the_post();
            ?>
                <!--  -->
                <?php get_template_part('includes/community-card');?>
                <!--  -->
            <?php 
            endwhile; // end loop
            ?>
            <?php else: ?>
                <p>Sorry, no hub to display.</p>
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
        </div>

        <!-- hubs -->
        <div class="row tabContent" id="tab2">
            <?php
                $query = new WP_Query(
                    array(
                        'post_type'=>'resource',
                        'posts_per_page'=>9,
                        'tax_query' => array(
                            array(
                                'taxonomy'  => 'resource_category',
                                'field'     => 'slug',
                                'terms'     => 'reports',
                                'operator'  => 'IN'
                            )
                        )
                    )
                );
                if ( $query->have_posts() ) : 
                while ( $query->have_posts() ) : $query->the_post();
            ?>
                <!--  -->
                <?php get_template_part('includes/community-card');?>
                <!--  -->
            <?php 
            endwhile; // end loop
            ?>
            <?php else: ?>
                <p>Sorry, no hub to display.</p>
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
        </div>

        <!-- angel networks -->
        <div class="row tabContent" id="tab3">
            <?php
                $query = new WP_Query(
                    array(
                        'post_type'=>'resource',
                        'posts_per_page'=>9,
                        'tax_query' => array(
                            array(
                                'taxonomy'  => 'resource_category',
                                'field'     => 'slug',
                                'terms'     => 'videos',
                                'operator'  => 'IN'
                            )
                        )
                    )
                );
                if ( $query->have_posts() ) : 
                while ( $query->have_posts() ) : $query->the_post();
            ?>
                <!--  -->
                <?php get_template_part('includes/community-card');?>
                <!--  -->
            <?php 
            endwhile; // end loop
            ?>
            <?php else: ?>
                <p>Sorry, no hub to display.</p>
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