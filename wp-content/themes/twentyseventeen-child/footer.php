<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>	
<style>
	body {
		font-family: Lato;
	}
	.widget-title {
		color: #dadada !important;
	}
	.navigation-top {
		box-shadow: 0 3px 3px -3px rgba(0,0,0,1);
	}
	.page-title{
		color: #dadada;
	}
	.site-content-contain {
		background-color: #242832;
		color: #dadada;
	}
	label{
		color: #dadada;
	}
	a{
		color: #dedede;
	}
	a:hover {
		color: #dedede !important;
	}
	#top-menu a:hover {
		color: #975C33 !important;
	}
	a:hover .nav-title, a:hover .icon{
		color: #dadada!important;
	} 
	iframe{
		width: 100%;
		border-radius: 4px;
	}
	
	.start-service-div{
		padding-top: 100px;
		width: 100%;
		margin: auto;
		display: flex;
	}
	.start-service{
		padding: 10px;
		margin: 10px;
		width: 33%;
		border: 1px solid #dadada;
		border-radius: 4px;
	}
	.start-service i{
		font-size: 60px;
	}
</style>

		</div><!-- #content -->
		<script type="text/javascript">
			if (document.querySelector('.your-ref') != null){

				if ("<?=$_POST['your-ref'] ?>" != ""){
					document.querySelector('.your-ref').childNodes[0].value = "<?=$_POST['your-ref']?>";
				}
			}
			if (document.querySelector('.page-header h1')){
				if (document.querySelector('.page-header h1').innerHTML.includes('Chalet')){
					document.querySelector('.wrap .page-header').parentNode.style.margin = "0";
					document.querySelector('.wrap .page-header').parentNode.style.maxWidth = "100%";
					document.querySelector('.wrap .page-header').parentNode.childNodes[4].style.maxWidth = "100%";
					document.querySelector('.wrap .page-header').parentNode.childNodes[4].style.marginLeft = "0";
					document.querySelector('.wrap .page-header').parentNode.childNodes[4].style.marginRight = "0";
					document.querySelector('.wrap .page-header').parentNode.childNodes[4].childNodes[1].style.display = "flex";
					document.querySelector('.wrap .page-header').parentNode.childNodes[4].childNodes[1].style.flexWrap = "wrap";
					document.querySelector('.wrap .page-header').parentNode.parentNode.style.width = "98vw";

					if (window.innerWidth < 1100){
						for (i = 0 ; i < document.querySelectorAll('article').length ; i++){
							document.querySelectorAll('article')[i].style.width = "48%";
						}
						
					}
					if (window.innerWidth < 700){
						for (i = 0 ; i < document.querySelectorAll('article').length ; i++){
							document.querySelectorAll('article')[i].style.width = "98%";
						}
					}
					

					

					
				}
			}

			setTimeout(() => {
				var title = document.querySelectorAll('.entry-header h2');
				for (i = 0 ; i < title.length ; i++){
					if (title[i].innerHTML.includes('Dernier') == true){
						var isChalet = true;
					}
				}
				if (isChalet) {
					var image = document.querySelectorAll('.fixed-height-image img');
					for (i = 0 ; i < image.length ; i++){
						image[i].style.width = "500px";
					}
					console.log('ischalet');
				}
				console.log('end');
				
			}, 1000);
			
			
		</script>

		<footer id="colophon" class="site-footer" role="contentinfo" style="border: none; background-color: #242832; color:#dadada; margin-top: 0;">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );
				/*
				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif; */

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
