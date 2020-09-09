<div class="mb-5">
     <!-- ==========      
            POPULAR  POSTS
    ===========-->
    <div class="sectionLabel">
        popular posts
    </div>
    <div class="row mt-4">
        <?php
        $query = new WP_Query(
            array(
            'post_type'=>'blog',
            'posts_per_page'=>4,
            // 'tax_query' => array(
            //     array(
            //         'taxonomy'  => 'blog_category',
            //         'field'     => 'slug',
            //         'terms'     => 'featured',
            //         'operator'  => 'IN'
            //     )
            // )
            )
        );

        if ( $query->have_posts() ) : 
        while ( $query->have_posts() ) : $query->the_post();
    ?>
    <!-- POST CONTENT -->
    <div class="col-12 mb-3">
        <div class="post">
            <div class="card shadow-sm">
                <div class="post-body card-body">
                    <!-- date -->
                    <p class="post-date">
                        <?php echo get_the_date(); ?>
                    </p>
                    <!-- title -->
                    <h6 class="post-title title">
                        <?php the_title(); ?>
                    </h6>
                    <!-- button -->
                    <a href="<?php the_permalink(); ?>" class="mainBtn">read more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- POST CONTENT END -->
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

    <!-- ==========      
        CATEGORIES
    ===========-->
    <div class="mt-3">
        <div class="sectionLabel">
            categories
        </div>
        <div class="sideBarCategories">
            <ul>
            <?php
            // Get all the categories
            $categories = get_terms( 'blog_category' );
            // Loop through all the returned terms
            foreach ( $categories as $category ):
            ?>
                <!-- display each package category in mini menu -->
                <li>
                    <a href="<?php echo esc_url( get_term_link( $category ) ) ?>">
                        <?php echo $category->name; ?>
                    </a>
                </li>
            <?php
            // Reset things, for good measure
            wp_reset_postdata();
            // end the loop
            endforeach;
            ?>
            </ul>
        </div>
    </div>
    <!--  -->
</div>