<?php
/**
 * Template part for displaying pages on front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

global $twentyseventeencounter;

?>
<style type="text/css">

.site-branding-text{
		position: relative;
		bottom: 500px;
	}
	.custom-logo-link{
		position: relative;
    	bottom: 500px;
	}
	@media screen and (max-width: 740px){
		.site-branding-text{
		position: relative;
		bottom: 300px;
	}
	.custom-logo-link{
		position: relative;
    	bottom: 300px;
	}
	}

	.mySlides, .mySlides2 {
			box-shadow: none !important;
	}
	.info {
		background-color: #dadada !important;
		color: #242832 !important;
	}
	.info2 {
		background-color: #dadada !important;
		color: #242832 !important;
	}

	article {
		background-color: #242832;
    color: #dadada;
		border: none !important;
	}

	#post-10 .wrap {
		margin:0 !important;
		text-align: center;
	}
	#post-10 .wrap .entry-content{
		width: 90vw;
	}
	#post-10 {
		/*height: 85vh;*/
	}
	@media screen and (max-width: 750px){
		#post-10 .wrap .entry-content{
			width: 85vw;
		}
	}
	#post-10 .wrap .entry-content h2{
		color: #975C33;

	}
	
	* {box-sizing:border-box}

	/* Slideshow container */
	.slideshow-container {
	  max-width: 1000px;
	  position: relative;
	  margin: auto;
	}

	/* Hide the images by default */
	.mySlides {
	  display: none;
	}
	.mySlides2 {
	  display: none;
	}

	/* Next & previous buttons */
	.prev, .next {
		background-color: rgba(50,50,50,0.6);
	  cursor: pointer;
	  position: relative;
	  bottom: 20em;
	  width: auto;
	  margin-top: 100px;
	  padding: 16px;
	  color: white;
	  font-weight: bold;
	  font-size: 18px;
	  transition: 0.6s ease;
	  border-radius: 0 3px 3px 0;
	  user-select: none;
	}
	@media screen and (max-width: 750px){
		.prev, .next {
			bottom: 15em;
		}
	}

	/* Position the "next button" to the right */
	.next {
	  right: 0;
	  border-radius: 3px 0 0 3px;
	}

	/* On hover, add a black background color with a little bit see-through */
	.prev:hover, .next:hover {
	  background-color: rgba(0,0,0,0.8);
	}

	/* Caption text */
	.text {
	  color: #f2f2f2;
	  font-size: 15px;
	  padding: 8px 12px;
	  position: absolute;
	  bottom: 8px;
	  width: 100%;
	  text-align: center;
	}

	/* Number text (1/3 etc) */
	.numbertext {
	  color: #f2f2f2;
	  font-size: 12px;
	  padding: 8px 12px;
	  position: absolute;
	  top: 0;
	}

	/* The dots/bullets/indicators */
	.dot {
	  cursor: pointer;
	  height: 15px;
	  width: 15px;
	  margin: 0 2px;
	  background-color: #bbb;
	  border-radius: 50%;
	  display: inline-block;
	  transition: background-color 0.6s ease;
	}

	.dot2 {
	  cursor: pointer;
	  height: 15px;
	  width: 15px;
	  margin: 0 2px;
	  background-color: #bbb;
	  border-radius: 50%;
	  display: inline-block;
	  transition: background-color 0.6s ease;
	}

	.active, .dot:hover {
	  background-color: #717171;
	}
	.active, .dot2:hover {
	  background-color: #717171;
	}

	/* Fading animation */
	.fade {
	  -webkit-animation-name: fade;
	  -webkit-animation-duration: 1.5s;
	  animation-name: fade;
	  animation-duration: 1.5s;
	}

	@-webkit-keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	@keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}
	#menu-cara li:hover {
		transition: 0.1s;
		border-top: 2px solid;
	}
</style>

<article id="panel<?php echo $twentyseventeencounter; ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap" style="">
			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

				<?php twentyseventeen_edit_link( get_the_ID() ); ?>

			</header><!-- .entry-header -->

			<div class="entry-content" style="">
				<div style="">
				<div style="text-align: center; margin-top: 10px;"><p>Derniers Chalets En location</p></div>
				<?php
					
					/* translators: %s: Name of current post */
					/*
					the_content( sprintf(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
						get_the_title()
					) ); */

					if (get_the_ID() == '316'){
						//starrrrt
						$args['post_type'] = "chalets_louer";
						$args['numberposts'] = 5;
						$args['category'] = 9;
						$aLouer = get_posts($args);
						$target = false;
						//var_dump('<pre>');
						foreach ($aLouer as $k => $v){
							//var_dump($v->post_title);
							//var_dump($v->guid);
							//var_dump(get_field('prix', $v->ID));
							//var_dump(get_field('surface', $v->ID));
							//var_dump(get_field('chambres', $v->ID));
							//var_dump(get_the_post_thumbnail_url($v->ID));

				?>
					<div class="col-xs-6 col-md-3">
						<div class="thumbnail" style="position: relative;">
							<?php if( !empty($v->guid) ){ ?>
							<a href="<?php echo $v->guid; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
								<div class="info" style="background-color: rgba(50,50,50);padding: 10px; border-radius: 4px 4px 0px 0px; color: rgba(218,218,218);">
									<div style="text-align: center;">

										<span> <?php echo $v->post_title ?> </span>

									</div>

									<div style="display: flex; justify-content: space-around;"> 
										<span><?php the_field('chambres', $v->ID); ?> chambres</span> 
										<span><?php the_field('prix', $v->ID); ?>€</span> 
										<span> <?php the_field('surface', $v->ID); ?>m² </span>
									</div>
								</div>	
								<img style="border-radius: 0px 0px 4px 4px;" class="mySlides" src="<?php echo get_the_post_thumbnail_url($v->ID); ?>" alt="<?php echo $v->post_title; ?>" title="<?php echo $v->post_title; ?>">
							<?php if( !empty($v->guid) ){ ?>
							</a>

							<?php } ?>
						</div>
					</div>


								<?php
							}	?>
							<!-- The dots/circles -->
							<div style="text-align:center;margin-top: 10px;">
							
								<?php for ($i = 1 ; $i <= 5 ; $i++) { ?>

									<span class="dot" onclick="currentSlide(<?=$i?>)"></span> 

								<?php } ?>

							</div>		
							<div style="margin-bottom: -160px; text-align: center; display: flex; justify-content: space-between;">
								<button class="prev" onclick="plusSlides(-1)">&#10094;</button>
								<button class="next" onclick="plusSlides(+1)">&#10095;</button>
							</div>	
						 </div>
						 <?php
						 the_content( sprintf(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
						get_the_title()
					) ); ?>
						 <div style="">
						<!-- -->
						<div style="text-align: center;"><p>Derniers Chalets En vente</p></div>

						<?php
							$args['post_type'] = "chalets_louer";
							$args['numberposts'] = 5;
							$args['category'] = 10;
							$aLouer = get_posts($args);
							$target = false;
							//var_dump('<pre>');
							foreach ($aLouer as $k => $v){
								//var_dump($v->post_title);
								//var_dump($v->guid);
								//var_dump(get_field('prix', $v->ID));
								//var_dump(get_field('surface', $v->ID));
								//var_dump(get_field('chambres', $v->ID));
								//var_dump(get_the_post_thumbnail_url($v->ID));

								?>
								<div class="col-xs-6 col-md-3">
									<div class="thumbnail" style="position: relative;">
										<?php if( !empty($v->guid) ){ ?>
										<a href="<?php echo $v->guid; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
											<div class="info2" style="background-color: rgba(50,50,50); padding: 10px; border-radius: 4px 4px 0px 0px; color: rgba(218,218,218);">
												<div style="text-align: center;">

													<span> <?php echo $v->post_title ?> </span>

												</div>

												<div style="display: flex; justify-content: space-around;"> 
													<span><?php the_field('chambres', $v->ID); ?> chambres</span> 
													<span><?php the_field('prix', $v->ID); ?>€</span> 
													<span> <?php the_field('surface', $v->ID); ?>m² </span>
												</div>
											</div>	
											<img style="border-radius: 0px 0px 4px 4px;" class="mySlides2" src="<?php echo get_the_post_thumbnail_url($v->ID); ?>" alt="<?php echo $v->post_title; ?>" title="<?php echo $v->post_title; ?>">
										<?php if( !empty($v->guid) ){ ?>
										</a>

										<?php } ?>
									</div>
								</div>


								<?php
							}	?>
							<!-- The dots/circles -->
							<div style="text-align:center;margin-top: 10px;">
							
								<?php for ($i = 1 ; $i <= 5 ; $i++) { ?>

									<span class="dot2" onclick="currentSlide2(<?=$i?>)"></span> 

								<?php } ?>

							</div>		
							<div style="text-align: center; display: flex; justify-content: space-between;">
								<button class="prev" onclick="plusSlides2(-1)">&#10094;</button>
								<button class="next" onclick="plusSlides2(+1)">&#10095;</button>
							</div>	
								
				<?php
					}
				?>
				</div>
			</div><!-- .entry-content -->

			<?php
			// Show recent blog posts if is blog posts page (Note that get_option returns a string, so we're casting the result as an int).
			if ( get_the_ID() === (int) get_option( 'page_for_posts' )  ) : ?>

				<?php // Show four most recent posts.
				$recent_posts = new WP_Query( array(
					'posts_per_page'      => 3,
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
					'no_found_rows'       => true,
				) );
				?>

		 		<?php if ( $recent_posts->have_posts() ) : ?>

					<div class="recent-posts">

						<?php
						while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
							get_template_part( 'template-parts/post/content', 'excerpt' );
						endwhile;
						wp_reset_postdata();
						?>
					</div><!-- .recent-posts -->
				<?php endif; ?>
			<?php endif; ?>

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

	<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	// Next/previous controls
	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	// Thumbnail image controls
	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  var infos = document.getElementsByClassName("info");
	  if (n > slides.length) {slideIndex = 1} 
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none"; 
		infos[i].style.display = "none"; 
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block"; 
	  infos[slideIndex-1].style.display = "block"; 
	  dots[slideIndex-1].className += " active";
	}

	var slideIndex2 = 1;
	showSlides2(slideIndex2);

	// Next/previous controls
	function plusSlides2(n) {
	  showSlides2(slideIndex2 += n);
	}

	// Thumbnail image controls
	function currentSlide2(n) {
	  showSlides2(slideIndex2 = n);
	}

	function showSlides2(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides2");
	  var dots = document.getElementsByClassName("dot2");
	  var infos = document.getElementsByClassName("info2");
	  if (n > slides.length) {slideIndex2 = 1} 
	  if (n < 1) {slideIndex2 = slides.length}
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none"; 
		infos[i].style.display = "none"; 
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex2-1].style.display = "block"; 
	  infos[slideIndex2-1].style.display = "block"; 
	  dots[slideIndex2-1].className += " active";
	}
	</script>

</article><!-- #post-## -->
