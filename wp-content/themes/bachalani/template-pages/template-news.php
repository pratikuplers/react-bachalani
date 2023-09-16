<?php
/**
 * Template Name: News Template
*/
get_header(); ?>

<section class="inner_banner_sec">
    <div class="container">
        <div class="inner_banner_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/news_hero.jpg);">
            <!-- Banner Image Define in the BG -->
        </div>
    </div>
</section>

<section class="news_listing_sec">
    <div class="container">
        <div class="news_listing_wrap">
            <div class="news_listing">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder_image1.jpg" alt="" />
                </figure>
                <div class="news_list_content">
                    <h3>News article</h3>
                    <p>November 2022Dam, volessi iusantium, comnit oditia voles aut elendi cum quatem. Nequam, odi blam facculla et aut ut omnis alita nobit prehent que verio. Nam autatusae prati ressit iunt exeres dolupiet, susa con pos aut aut aut aperfer atius.</p>
                    <span class="date">November 2022</span>
                    <a href="#" title="Read More" class="button">Read More</a>
                </div>
            </div>
            <div class="news_listing">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder_image2.jpg" alt="" />
                </figure>
                <div class="news_list_content">
                    <h3>News article</h3>
                    <p>November 2022Dam, volessi iusantium, comnit oditia voles aut elendi cum quatem. Nequam, odi blam facculla et aut ut omnis alita nobit prehent que verio. Nam autatusae prati ressit iunt exeres dolupiet, susa con pos aut aut aut aperfer atius.</p>
                    <span class="date">November 2022</span>
                    <a href="#" title="Read More" class="button">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>