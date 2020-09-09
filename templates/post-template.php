<div class="col-12 mb-5">
    <div class="post card shadow-sm">
        <div class="imageContainer">
            <img class="coverImage" src="<?php the_post_thumbnail_url(); ?>" />
            <!--post type label-->
            <?php if ( 'video' == get_post_type() ) : ?>
                <div class="postTypeLabel pt-2 pb-2 pl-3 pr-3">video</div>
            <?php endif ?>
        </div>
        <div class="post-body card-body pb-4">
            <!-- details -->
            <div class="d-flex mb-3">
                <!-- date -->
                <p class="post-date color3 mb-0">
                    <?php echo get_the_date(); ?> | 
                </p>
                <!-- author -->
                <p class="post-author color3 mb-0 ml-1">
                    <?php echo get_the_author(); ?>
                </p>
            </div>
            <!-- title -->
                <h3 class="post-title title">
                    <?php the_title(); ?>
                </h3>
            <!-- excerpt -->
            <p class="color3 mt-3">
                <?php the_excerpt(); ?>
            </p>
            <!-- button -->
            <a href="<?php the_permalink(); ?>" class="mainBtn">read more</a>
        </div>
    </div>
</div>