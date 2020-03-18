<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<style>
	.post-thumbnail:hover > div, .post-thumbnail:focus > div {
		display: block! important;

	}
	.post-thumbnail a:hover div, .post-thumbnail a:focus div {
		display: block! important;

	}
	.post-thumbnail a:hover img, .post-thumbnail a:focus img {
		opacity: 0.4;

	}
	img:hover ~ div, img:focus ~ div {
		display: block! important;

	}

	#content {
		width: 100vw !important;
		background-color: #242832;
		color: #dadada;
	}

</style>

<article style="width: 25%; padding: 25px;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php

	
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
				if ( is_single() ) {
					twentyseventeen_posted_on();
				} else {
					echo twentyseventeen_time_link();
					twentyseventeen_edit_link();
				};
			echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail" style="position: relative;">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
				<div style="transition: 0.5s; font-size: 25px; display: none; position: absolute; top: 50%; width: 100%; text-align: center; color: #dadada;"><?php the_field('prix', get_the_id()); ?>€</div>
				<div style="transition: 0.5s; font-size: 25px; display: none; position: absolute; top: 15%; right: 5%; color: #dadada;"><?php the_field('chambres', get_the_id()); ?> chambres</div>
				<div style="transition: 0.5s; font-size: 25px; display: none; position: absolute; top: 15%; left: 5%; color: #dadada;"><?php the_field('surface', get_the_id()); ?>m²</div>
			</a>
			
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div><!-- .entry-contenteeeee -->

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

	<script type="text/javascript">
		function intervalHover(){
			setInterval(checkHover(), 1000);
		}
		function checkHover(){

			for (i=0 ; i < document.querySelectorAll('article').length ; i++){

				if ( $('.post-thumbnail').is(':hover') ) {
					console.log('hover');
				}

			}
		}
		setTimeout(intervalHover(), 5000);

		


		

		
	</script>

</article><!-- #post-## -->
