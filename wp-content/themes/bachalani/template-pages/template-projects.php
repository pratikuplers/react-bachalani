<?php
/**
 * Template Name: Projects Template
*/
get_header(); ?>


<section class="projects_sec">
    <div class="container">
        <div class="title_filter_links clearfix">
            <h2>Projects</h2>
            <ul class="filter_links">
                <li><a href="#" title="Residential">Residential</a></li>
                <li><a href="#" title="Commercial">Commercial</a></li>
                <li><a href="#" class="active" title="All">All</a></li>
            </ul>
        </div>
        <div class="projects_list_wrap">
            <div class="projects_list">
                <a href="#" title="Beverly Hills Townhouse">
                    <figure style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/beverly_hills.jpg);"><!-- Image Design in the bg --></figure>
                    <h3>Beverly Hills Townhouse</h3>
                </a>
            </div>
            <div class="projects_list">
                <a href="#" title="Tamarama">
                    <figure style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/tamarama.jpg);"><!-- Image Design in the bg --></figure>
                    <h3>Tamarama</h3>
                </a>
            </div>
            <div class="projects_list">
                <a href="#" title="Bronte">
                    <figure style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bronte.jpg);"><!-- Image Design in the bg --></figure>
                    <h3>Bronte</h3>
                </a>
            </div>
            <div class="projects_list">
                <a href="#" title="Dulwich Hill">
                    <figure style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/dulwich_hill.jpg);"><!-- Image Design in the bg --></figure>
                    <h3>Dulwich Hill</h3>
                </a>
            </div>
            <div class="projects_list">
                <a href="#" title="Paddington">
                    <figure style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/paddington.jpg);"><!-- Image Design in the bg --></figure>
                    <h3>Paddington</h3>
                </a>
            </div>
            <div class="projects_list">
                <a href="#" title="Glebe">
                    <figure style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/glebe.jpg);"><!-- Image Design in the bg --></figure>
                    <h3>Glebe</h3>
                </a>
            </div>
            <div class="projects_list">
                <a href="#" title="Gordons Bay">
                    <figure style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/gordons_bay.jpg);"><!-- Image Design in the bg --></figure>
                    <h3>Gordons Bay</h3>
                </a>
            </div>
            <div class="projects_list">
                <a href="#" title="">
                    <figure style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/hair_salon.jpg);"><!-- Image Design in the bg --></figure>
                    <h3>Hairdressing Salon</h3>
                </a>
            </div>
        </div>

        <div class="load_more_btn_wrap">
            <a href="#" title="View More" class="button">View More</a>
        </div>
    </div>
</section>


<?php get_footer(); ?>