<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bachalani
 */

get_header();
?>

	<main id="primary" class="site-main">
	<section class="error-404 not-found">
		<div class="main-con-sec error-main text-center">
			
			<div class="error-logo">
                <a href="#" title="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bachalani-logo.svg" alt="">
                </a>
            </div>
            <h1>404</h1>
                
				<h3>PAGE NOT FOUND!</h3>
				
			<div class="page-content">
				<p>The page you are looking for might have been removed, had it’s name changed, or it temporarily unavailable.</p>
					
					<div class="ctmbtn">
						<a href="#" class="button">Back to home</a>
					</div>
							</div><!-- .entry-content -->
		</div>
	</section>
	</main><!-- #main -->

<?php
get_footer();
