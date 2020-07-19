<div class="section">
    <h3 class="sectionLabel text-center">latest updates</h3>
    <div class="row">
        <?php
            $query = new WP_Query(
                array(
                'post_type'=>'blog',
                'posts_per_page'=>3,
                // 'tax_query' => array(
                //     array(
                //         'taxonomy'  => 'category',
                //         'field'     => 'slug',
                //         'terms'     => 'featured',
                //         'operator'  => 'NOT IN'
                //     )
                // )
                )
            );

            if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
        ?>
        <!--  -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <!-- image -->
                <div class="cardImage">
                    <img src="<?php the_post_thumbnail_url(); ?>" />
                </div>
                <!-- details -->
                <div class="cardDetails">
                    <!-- title -->
                    <h4 class="title bold green"><?php the_title(); ?></h4>
                    <!-- excerpt -->
                    <p class="grey mt-2">
                    <?php the_excerpt(); ?>
                    </p>
                    <div class="d-flex cardFooter">
                        <!-- button -->
                        <a href="<?php the_permalink(); ?>" class="mainBtn">read more</a>
                        <!-- post type -->
                        <div style="font-size: 12px">Blog</div>
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
        </div>
        <!--  -->
    </div>
    <!-- <div class="d-flex justify-content-center mt-5">
    <a href="#" class="secBtn">see all events</a>
    </div> -->
</div>