<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bachalani
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site_wrapper">

	<header id="header">
		<div class="container">
			<a href="#" title="Bachalani Construction" class="bachalani_logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/bachalani-logo.svg" alt="Bachalani Construction" />
			</a>
			<div class="enumenu_ul">
				<nav>
					<ul class="enumenu_ul_inner">
						<li><a href="#" title="Home">Home</a></li>
						<li><a href="#" title="Projects">Projects</a></li>
						<li><a href="#" title="Remedial">Remedial</a></li>
						<li><a href="#" title="About">About</a></li>
						<li><a href="#" title="News">News</a></li>
						<li><a href="#" title="Contact">Contact</a></li>
					</ul>
				</nav>
				<a href="#" title="Instagram" class="instagram_icon">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Insta_icon.svg" alt="Instagram" />
				</a>
			</div>			
		</div>		
	</header><!-- #masthead -->
