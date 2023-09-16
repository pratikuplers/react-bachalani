<?php
/**
 * Template Name: Contact Template
*/
get_header(); ?>

<section class="inner_banner_sec">
    <div class="container">
        <div class="inner_banner_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/contact_hero.jpg);">
            <!-- Banner Image Define in the BG -->
        </div>
    </div>
</section>

<section class="title_content_sec get_in_touch_sec">
    <div class="container clearfix">
        <h2>Get in touch</h2>
        <div class="content_right">
            <div class="contact_content">
                <p>Would you like to discuss an upcoming project with us?</p>
                <p>
                    <strong>PHONE</strong>
                    <a href="tel:0295673000" title="Call us">02 9567 3000</a>
                </p>
                <p>
                    <strong>EMAIL</strong>
                    <a href="mailto:admin@bachalani.com.au" title="Mail us">admin@bachalani.com.au</a>
                </p>
            </div>
            <div class="contact_form">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]') ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>