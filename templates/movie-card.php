<div class="col col-lg-2 col-6 col-md-3 mb-2 p-1">
    <div class="movieCard">
        <a href="<?php the_permalink(); ?>" class="movieCardLink">
            <!-- movie image -->
            <div class="movieCardImage imageContainer">
                <img src="<?php the_post_thumbnail_url(); ?>" class="coverImg" />
            </div>
            <!-- movie title -->
            <p class="movieCardTitle mb-1 pl-2 pr-2 pt-2 pb-0">
                <?php the_title(); ?>
            </p>
        </a>
        <!-- movie details -->
        <div class="movieCardDetails d-flex justify-content-between pt-0 pr-2 pl-2 pb-2">
            <!-- movie year -->
            <!-- <div class="movieCardDate">
                <?php echo the_date() ?>
            </div> -->
            <!-- movie rating -->
            <div class="movieCardRating">
                <i class="fa fa-star mr-1"></i>
                <span>
                    <?php echo get_post_meta( $post->ID, "rating", true ) ?>
                </span>
            </div>
        </div>
    </div>
</div>