
<?php
/*
 * Template Name: movie year
 * description: >-
  Page template without sidebar
 */
?>
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
                <h5 class="sectionLabel pb-3 mb-0">
                <?php the_title(); ?>
                </h5>
                <div class="row align-items-stretch no-gutters">
                    <?php 
                    $args = array(
                        'post_type' => 'movie',
                        'date_query' => array(
                            'year' => date("Y", strtotime($post->post_date))
                        ),
                    );
                    
                    $query = new WP_Query($args);
                    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
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