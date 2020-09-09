<div class="col-lg-4 col-md-5 mb-4  d-flex align-items-stretch">
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
            <!-- excerpt -->
            <p class="color3 mt-3">
                <?php the_excerpt(); ?>
            </p>
            <!-- button -->
            <a href="<?php the_permalink(); ?>" class="mainBtn">read more</a>
        </div>

    </div>
</div>