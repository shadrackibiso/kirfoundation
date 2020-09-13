<div class="mb-5 p-4 sidebar">

    <!-- ==========      
    SEARCH BOX
    ===========-->
    <form method="POST" class="mb-5 searchForm shadow-sm">
        <input type="text" name="s" placeholder="Search..." />
        <button>
            <i class="fa fa-search"></i>
        </button>
    </form>
    <!-- search box end -->

    <!-- ==========      
    POPULAR  POSTS
    ===========-->
    <div class="sectionLabel d-flex justify-content-center">
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
                    <h5 class="post-title title">
                        <?php the_title(); ?>
                    </h5>
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
    <!-- popular posts end -->

    <!-- ==========      
        JOIN GREYICH
    ===========-->
    <div class="sidebarJoinBanner p-3 mt-5 mb-3 shadow-sm text-center">
        <h3 class="text-capitalize title">share your stories.</h3>
        <a href="#" class="btn-3 mt-3">join greyich</a>
    </div>
    <!-- join greyich end -->

    <!-- ==========      
        CATEGORIES
    ===========-->
    <div class="mt-5">
        <div class="sectionLabel d-flex justify-content-center">
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
    <!-- categories end -->

    <!--  -->
</div>