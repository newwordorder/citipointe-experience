<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>

<footer class="footer bg--dark">
	<div class="container footer__top">

		<div class="row align-items-center">
		<div class="col-md-4">
				<h4>The Bible for everyone</h4>
			</div>
			<div class="col-md-4 text-center">
				<a href="<?php echo get_home_url(); ?>" id="" class="footer__logo mb-4">
					<img class="footer__logo" src="<?php bloginfo('template_directory'); ?>/img/logo--light.svg" alt="Logo">
				</a>
				
			</div>
			<div class="col-md-4">
			<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer-social',
						'container_class' => 'footer-social',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'fallback_cb'     => '',
						'menu_id'         => 'footer__social',
					)
				); ?>
				
			</div>
		</div>
		<div class="row">
			<div class="col text-center">
			<p>© Copyright United Bible Societies<br>  <a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a></p>
			</div>
		</div>

</footer>


<!-- START Cookie-Alert -->
<div class="alert text-center cookiealert" role="alert">
    &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="https://cookiesandyou.com/" target="_blank">Learn more</a>

    <a class="btn btn--solid acceptcookies" aria-label="Close">
        OK
			</a>
</div>
<!-- END Cookie-Alert -->


<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiW6C2-1fkU_DUPQXbJUHIQTVFo9LMkCs"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/fontawesome-all.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tabs.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/cookiealert.js"></script>


    

<script>
	AOS.init();
</script>


</body>

</html>
