<div class="col-lg-4 col-md-6 mb-4">
    <div class="card">
        <div class="cardImage">
            <img src="<?php the_post_thumbnail_url(); ?>" />
        </div>
        <div class="cardDetails">
            <!-- title -->
            <h4 class="title green"><?php the_title(); ?></h4>
            <!-- designation -->
            <p class="mentorDesignation">
                <?php echo get_post_meta( $post->ID, "mentor_designation", true ); ?>
            </p>
            <!-- excerpt -->
            <p class="grey cardExcerpt"><?php the_excerpt(); ?></p>
            <!-- button and socials -->
            <div class="cardFooter mt-4">
                <!-- button -->
                <div>
                    <a href="<?php the_permalink(); ?>" class="mainBtn">learn more</a>
                </div>
                <!-- socials -->
                <!-- <div class="cardSocials">
                    <a href="#" title="facebook" class="noBorder"><i class="fa fa-facebook"></i></a>
                    <a href="#" title="instagram"  class="noBorder"><i class="fa fa-instagram"></i></a>
                    <a href="#" title="twitter"  class="noBorder"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="linkedin"  class="noBorder"><i class="fa fa-linkedin"></i></a>
                </div> -->
            </div>
        </div>
    </div>
</div>