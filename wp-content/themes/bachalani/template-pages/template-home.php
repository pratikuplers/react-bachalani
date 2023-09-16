<?php
/**
 * Template Name: Home Page Template
*/
get_header(); ?>

<section class="banner_sec">
    <div class="container">
        <div class="banner_slider">
            <div>
                <div class="banner_slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/home-carousel1.jpg);"></div>
            </div>
            <div>
                <div class="banner_slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/home-carousel2.jpg);"></div>
            </div>
            <div>
                <div class="banner_slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/home-carousel3.jpg);"></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>