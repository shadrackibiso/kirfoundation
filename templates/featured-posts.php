<div class="container">
    <div class="sectionLabel">
        featured posts
    </div>
    <div class="overflowContainer ">
        <div class="row mb-4 pl-3 pl-md-0">
            <?php
                $query = new WP_Query(
                    array(
                    'post_type'=>'blog',
                    'posts_per_page'=>4,
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
            <!-- =======
            content 
            ======== -->
            <div class="col-11 col-lg-3 col-md-5 p-0 pr-3 p-md-3 d-flex align-items-stretch">
                <div class="card shadow-sm">

                    <!-- card image -->
                    <div class="featuredImageContainer imageContainer">
                        <img class="coverImage" src="<?php the_post_thumbnail_url(); ?> " />
                        <!--post type label-->
                        <?php if ( 'video' == get_post_type() ) : ?>
                            <div class="postTypeLabel pt-2 pb-2 pl-3 pr-3">video</div>
                        <?php endif ?>
                    </div>

                    <!-- card body -->
                    <div class="card-body">
                        <!-- date -->
                        <p class="card-text color3 mb-2">
                            <?php echo get_the_date(); ?>
                        </p>
                        <!-- title -->
                        <h5 class="card-title featuredTitle title">
                            <?php the_title(); ?>
                        </h5>
                        <!-- button -->
                        <a href="<?php the_permalink(); ?>" class="mainBtn">read more</a>
                    </div>

                </div>
            </div>
            <!-- =======
            content end
            ======== -->
            <?php 
            endwhile; // end loop
            ?>
            <?php else: ?>
                <div class="col">
                    <p>Sorry, no post to display.</p>
                </div>
            <?php
            // Reset things, for good measure
            wp_reset_postdata();
            // end the loop
            endif;
            ?>
        </div>
    </div>
</div>