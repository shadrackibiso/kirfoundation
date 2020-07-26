<?php get_header(); ?>
<div class="container-fluid p-0">
    <div class="row no-gutters">

        <!-- side nav -->
        <div class="col-lg-2">
            <?php get_template_part('sidenav') ?>
        </div>

        <!-- content -->
        <div class="col-lg-10 bodyContainer">
            <div class="p-3">
                <div class="row no-gutters">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <!-- movie image -->
                    <div class="col-lg-3 col-md-4 singleMovieImage">
                        <div class="imageContainer">
                            <img src="<?php the_post_thumbnail_url(); ?>" class="coverImg" />
                        </div>
                    </div>
                    <!-- movie details -->
                    <div class="col-lg-5 col-md-8 pl-md-3 pt-3 pt-md-0">
                        <!-- movie title -->
                        <h3 class="text-white"><?php the_title(); ?></h3>
                        <div class=" pt-1 pb-3 d-flex align-items-center">
                            <!-- movie year-->
                            <div class="singleMovieYear pr-3">
                                <a href="/<?php echo date("Y", strtotime($post->post_date)) ?>-movies">
                                    <?php echo date("Y", strtotime($post->post_date)) ?>
                                </a>
                            </div>
                            <!-- movie rating -->
                            <div class="singleMovieRating">
                                <i class="fa fa-star mr-1"></i>
                                <span>
                                    <?php echo get_post_meta( $post->ID, "rating", true ) ?>
                                </span>
                            </div>
                        </div>
                        <!-- movie categories -->
                        <?php 
                            // Get the taxonomy's terms
                            $terms = get_the_terms( $post->ID, 'movie_category' );
                            // Check if any term exists
                            if ( ! empty( $terms ) && is_array( $terms ) ):
                                // Run a loop and print them all
                                foreach ( $terms as $term ):
                        ?>
                                    <a href="<?php echo esc_url( get_term_link( $term ) ) ?>" class="movieCategory">
                                        <?php echo $term->name; ?>
                                    </a>
                        <?php
                            endforeach;
                            endif
                        ?>
                        <!-- movie description -->
                        <div class="movieDescription mt-3"><?php the_content(); ?></div>
                        <hr/>
                        <!-- movie download button -->
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <a href="#" class="mainBtn downloadBtn">
                                    <span>Download - 480p</span>
                                    <span> <?php echo get_post_meta( $post->ID, "480p size", true ) ?></span>
                                </a>
                            </div>
                        </div>
                        <hr/>
                    </div>
                    <!--  -->
                    <?php endwhile; // end loop?>
                    <?php wp_reset_postdata(); ?>
                    <?php else: ?> <p style="color: grey">Sorry, no post to display.</p>
                    <?php endif; ?>
                </div>
             </div>

             <!-- more movies -->
             <div class="pl-0 pr-0 pr-md-3 pl-md-3">
                <h5 class="sectionLabel mb-0 mt-3 mt-md-5 pb-3 pl-3 pl-md-0">see also</h5>
                <div class="overflowContainer pl-3 pl-md-0">
                    <div class="row align-items-stretch no-gutters pr-3 pr-lg-0">
                        <?php
                        $query = new WP_Query(
                            array(
                            'post_type'=>'movie',
                            'posts_per_page'=> 6,
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

        </div>

    </div>
</div>

<!-- ==========      
    FOOTER
    ===========-->