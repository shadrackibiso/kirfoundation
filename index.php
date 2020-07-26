<?php get_header(); ?>
<div class="container-fluid p-0">
    <div class="row no-gutters">

        <!-- side nav -->
        <div class="col-lg-2">
            <?php get_template_part('sidenav') ?>
        </div>

        <!-- content -->
        <div class="col-lg-10 bodyContainer">
            <!-- ==========      
            POPULAR
            ===========-->
            <div class="p-0 pl-0 pr-0 pr-md-3 pl-md-3 pt-3">
                <h5 class="sectionLabel pb-3 pl-3 pl-md-0 mb-0">popular</h5>
                <div class="overflowContainer pl-3 pl-md-0">
                <div class="row align-items-stretch no-gutters pr-3 pr-lg-0">
                    <?php
                    $query = new WP_Query(
                        array(
                        'post_type'=>'movie',
                        'posts_per_page'=> 6,
                        'tax_query' => array(
                            array(
                                'taxonomy'  => 'movie_category',
                                'field'     => 'slug',
                                'terms'     => 'popular',
                                'operator'  => 'IN'
                            )
                        )
                        )
                    );
                    if ( $query->have_posts() ) : 
                    while ( $query->have_posts() ) : $query->the_post();
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
                    <div class="col-lg-6 d-mlg-none mb-2 p-1"></div>
                </div>
                </div>
            </div>
             <!-- ==========      
                RECENT
            ===========-->
            <div class="container-fluid p-3">
                <h5 class="sectionLabel pb-3 mb-0">recent</h5>
                <div class="row align-items-stretch no-gutters">
                    <?php
                    $query = new WP_Query(
                        array(
                        'post_type'=>'movie',
                        'posts_per_page'=> 12,
                        'tax_query' => array(
                            array(
                                'taxonomy'  => 'movie_category',
                                'field'     => 'slug',
                                'terms'     => 'popular',
                                'operator'  => 'NOT IN'
                            )
                        )
                        )
                    );
                    if ( $query->have_posts() ) : 
                    while ( $query->have_posts() ) : $query->the_post();
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