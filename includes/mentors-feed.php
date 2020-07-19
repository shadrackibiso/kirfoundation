<div class="section">
    <h2 class="sectionLabel">connect with mentors</h2>
    <div class="row">
        <?php
            $query = new WP_Query(
                array(
                'post_type'=>'mentor',
                'posts_per_page'=>6,
                )
            );
            if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
        ?>
        <!--  -->
        <div class="col-lg-2 col-md-4 mb-3 mb-lg-0 d-flex justify-content-center align-items-center flex-column text-center ">
            <div class="homeMentorImage">
                <img class="coverImg" src="<?php echo get_template_directory_uri(); ?>/images/avatar.jpg" />
            </div>
            <!-- title -->
            <h5 class="title">louis m. iwegbuna</h5>
            <!-- designation -->
            <p class="homeMentorDesignation">BDM, AutoDesk</p>
            <!-- socials -->
            <div class="homeMentorSocials">
                <!-- facebook -->
                <a href="#">
                    <i class="fa fa-facebook"></i>
                </a>
                <!-- instagram -->
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
                <!-- twitter -->
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
                <!-- linkedin -->
                <a href="#">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
        </div>
        <?php 
        endwhile; // end loop
        ?>
        <?php else: ?>
            <p>Sorry, no mentor to display.</p>
        <?php
        // end the loop
        endif;
        // Reset things, for good measure
        wp_reset_postdata();
        ?>
    </div>
    <div class="d-flex justify-content-center mt-3 mt-lg-5">
        <a href="/mentor" class="mainBtn mb-3 mb-md-0 mr-md-3">see more mentors</a>
    </div>
</div>