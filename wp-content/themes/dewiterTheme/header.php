<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<style media="screen">
	.wp-block-latest-posts p {
		display: none;
	}

	.wp-block-image:hover{
		background: #babfc9;
		transition: 1s;
		-webkit-filter: grayscale(100%); /* Ch 23+, Saf 6.0+, BB 10.0+ */
		filter: grayscale(100%);
	}

	.entry-content > p {
		margin-left: 340px;
	}

	.wp-block-latest-posts.is-grid li{
		text-align: center;
		font-weight: 600;
	}
	.wp-block-image img {
		float: left;
		width: 300px;
		height: 300px;
		background-size: cover;
	}

	.wp-block-gallery.is-cropped .blocks-gallery-item img  {
		float: left;
		width: 300px !important;
		height: 300px !important;
		background-size: cover;
		margin-top: 24px;
	}

	.page-one-column .panel-content .wrap {
		max-width: 100% !important;
	}

	.page .panel-content .entry-title {
		font-size: 2rem !important;
		font-weight: 600 !important;
	}
	.navigation-top {
		background: #929cab !important;
		border-top: none !important;
		border-bottom: none !important;
	}
	.navigation-top .current-menu-item > a, .navigation-top .current_page_item > a {
		color: white !important;
	}
	.navigation-top a {
		color: white !important;
	}

	.site-footer {
		background: #929cab !important;
		border-top: none !important;

	}

	h2.widget-title {
		color: white !important;
	}
	.site-info a {
		color: white !important;
	}

	form {
		width: 75%;
	}

</style>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">

			<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<div class="navigation-top">
					<div class="wrap">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div><!-- .wrap -->
				</div><!-- .navigation-top -->
			<?php endif; ?>

		</header><!-- #masthead -->

		<?php

		/*
		* If a regular post or page, and not the front page, show the featured image.
		* Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
		*/
		if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
			echo '<div class="single-featured-image-header">';
			echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
			echo '</div><!-- .single-featured-image-header -->';
		endif;
		?>

		<div class="site-content-contain">
			<div id="content" class="site-content">
