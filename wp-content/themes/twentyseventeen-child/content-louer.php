<?php

/**
 * The template for displaying A louer
 *
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen_Child
 * @since 1.0
 * @version 1.0
 */

	if ( !function_exists('get_field') ) return;

?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


<h3 style="color: #dadada;"><?php print_r($wp_query->queried_object->post_title); ?></h3>

<?php
    $images = acf_photo_gallery('image', $post->ID);
if( count($images) ):
        foreach($images as $image):
            $id = $image['id']; // The attachment id of the media
            $title = $image['title']; //The title
            $caption= $image['caption']; //The caption
            $full_image_url= $image['full_image_url']; //Full size image url
            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 1080, 720); //Resized size to 262px width by 160px height image url
            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
            $url= $image['url']; //Goto any link when clicked
            $target= $image['target']; //Open normal or new tab
            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
?>
<div class="col-xs-6 col-md-3">
    <div class="thumbnail">
        <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
            <img class="mySlides" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
        <?php if( !empty($url) ){ ?></a><?php } ?>
    </div>
</div>
<?php endforeach; endif;
?>
<?php  $nbrImage = count($images); ?>
<?php if ($nbrImage) { ?>
<!-- The dots/circles -->
<div style="text-align:center;">
  
	<?php for ($i = 1 ; $i <= $nbrImage ; $i++) { ?>

		  <span class="dot" onclick="currentSlide(<?=$i?>)"></span> 

	<?php } ?>

</div>

<?php } ?>

<div style="text-align: center; display: flex; justify-content: space-between;">
	<button class="prev" onclick="plusSlides(-1)">&#10094;</button>
	<button class="next" onclick="plusSlides(+1)">&#10095;</button>
</div>


<style type="text/css">
	
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

	@media screen and (max-width: 750px){
		.prev, .next {
			bottom: 8em !important;
		}
	}

	/* Next & previous buttons */
	.prev, .next {
		background-color: rgba(50,50,50,0.6);
	  cursor: pointer;
	  position: relative;
	  bottom: 20em;
	  width: auto;
	  margin-top: -22px;
	  padding: 16px;
	  color: white;
	  font-weight: bold;
	  font-size: 18px;
	  transition: 0.6s ease;
	  border-radius: 0 3px 3px 0;
	  user-select: none;
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

	.active, .dot:hover {
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

<div>
	<ul id="menu-cara" style="display: flex; justify-content: space-around; border-bottom: 2px solid; transition: 0.5s;">
		<li style="list-style-type: none; cursor: pointer; padding: 10px; border-top: 2px solid;" onclick="showEssential();">L'essentiel</li>
		<li style="list-style-type: none; cursor: pointer; padding: 10px;" onclick="showCara();">Caractéristiques</li>
	</ul>
</div>

<div style="display: flex;">
	<div id="essential" style="overflow: hidden; transition: 0.5s; display: flex; justify-content: space-around;">
		<div>
			<div><i class="fas fa-bed" style="font-size: 55px; margin-right: 20px;"></i> <?php the_field('chambres'); ?> Chambres</div>
			<div><i class="fas fa-bath" style="font-size: 55px; margin-right: 20px;"></i><?php the_field('salles_de_bains'); ?> Salles de Bains</div>
			<div><i class="fas fa-home" style="font-size: 55px; margin-right: 20px;"></i><?php the_field('surface'); ?>m²</div>
		</div>
		
		<div>
			<p style="font-size: 25px; margin-top: 50%; border: 2px solid; padding: 10px;"> <?php the_field('prix'); ?> € </p>
		</div>
	</div>

	<div id="cara" style="overflow: hidden; transition: 0.5s;">
		<ul style="list-style-type: none;">
			<li><strong>Prix : </strong> <?php the_field('prix'); ?> € </li>
			<li><strong>Surface : </strong> <?php the_field('surface'); ?> m²</li>
			<li><strong>Nombre de Chambres : </strong> <?php the_field('chambres'); ?></li>
			<li><strong>Nombre de Salles de Bains : </strong> <?php the_field('salles_de_bains'); ?> </li>
			<li><strong>Localisation : </strong> <?php the_field('localisation'); ?> </li>
			<li><strong>Les Plus : </strong><?php 
			$plus = get_field('les_plus');
			if( $plus ): ?>
			<ul style="list-style-type: none;">
				<?php foreach( $plus as $v ): ?>
					<li><?php echo $v; ?></li>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?></li>
			
			<li><strong>Disponible : </strong> <?php the_field('disponibilites'); ?> </li>
		</ul>
	</div>
</div>

<div style="text-align: center; margin-top: 10px;">
	<form action="https://chalets-et-caviar.hedi-hafsi.com/contact" method="post">
		<input type="hidden" name="your-ref" value="<?=$wp_query->queried_object->post_title?>">
		<button type="submit">Nous contactez pour ce bien</button>
	</form>
</div>


<script type="text/javascript">
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
	  if (n > slides.length) {slideIndex = 1} 
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none"; 
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block"; 
	  dots[slideIndex-1].className += " active";
	}

	function showEssential() {
		document.getElementById('cara').style.height = "0";
		document.getElementById('essential').style.height = "100%";
		document.getElementById('cara').style.width = "0";
		document.getElementById('essential').style.width = "100%";

		document.querySelector('#menu-cara li:nth-of-type(1)').style.borderTop = "2px solid";
		document.querySelector('#menu-cara li:nth-of-type(2)').style.borderTop = "";

	}
	function showCara(){
		document.getElementById('cara').style.height = "100%";
		document.getElementById('essential').style.height = "0";
		document.getElementById('cara').style.width = "100%";
		document.getElementById('essential').style.width = "0";

		document.querySelector('#menu-cara li:nth-of-type(1)').style.borderTop = "";
		document.querySelector('#menu-cara li:nth-of-type(2)').style.borderTop = "2px solid";
	}
	showEssential();
</script>


<p> <?php the_content(); ?> </p>

