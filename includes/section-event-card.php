<!-- event card -->
<div class="row eventCard no-gutters mb-5">
    <!-- event image -->
<div class="col-md-5 eventCardImage">
    <img src="<?php the_post_thumbnail_url(); ?>" /> 
</div>

<div class="col-md-7 eventCardContent">
    <!-- event title -->
    <div class="eventCardTitle">
    <?php the_title(); ?>
    </div>
    <!-- event description -->
    <div class="eventCardDescription">
    <?php the_excerpt(); ?>
    </div>
    <div class="row eventCardDetails">
        <!-- event date -->
    <div class="col-lg-12 eventCardDetail">
        <img src="<?php echo get_template_directory_uri(); ?>/images/calendar.svg" />
        <div><?php echo get_post_meta( $post->ID, "event_date", true ); ?></div>
    </div>
    <!-- event time -->
    <div class="col-lg-12 eventCardDetail">
        <img src="<?php echo get_template_directory_uri(); ?>/images/time.svg" />
        <div><?php echo get_post_meta( $post->ID, "event_time", true ); ?></div>
    </div>
    <!-- event venue -->
    <div class="col-lg-12 eventCardDetail">
        <img src="<?php echo get_template_directory_uri(); ?>/images/location.svg" />
        <div><?php echo get_post_meta( $post->ID, "event_venue", true ); ?></div>
    </div>
    </div>
    <!-- event register button -->
    <div class="eventCardBtns">
    <a href="<?php echo get_post_meta( $post->ID, "event_registration_link", true ); ?>" class="mainBtn">register now</a>
    <a href="<?php the_permalink(); ?>" class="subBtn">read more</a>
    </div>
</div>
</div>
<!--  -->