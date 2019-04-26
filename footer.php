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
	<div class="container">

		<div class="row align-items-center">

			<div class="col-md-4 text-center">
				<a href="<?php echo get_home_url(); ?>" id="" class="footer__logo mb-4">
					<img class="footer__logo" src="<?php bloginfo('template_directory'); ?>/img/logo--light.svg" alt="Logo">
				</a>
				
			</div>
			<div class="col-md-8">
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
				<p>© Copyright Citipointe Christian College<br>  <a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a></p>
			</div>
		</div>

</footer>

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fontawesome-all.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tabs.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<script>
	AOS.init();
</script>

<!-- Sharpspring native form -->
<script type="text/javascript">
    var __ss_noform = __ss_noform || [];
    __ss_noform.push(['baseURI', 'https://app-3QND212D12.marketingautomation.services/webforms/receivePostback/MzawMDEzNTI2BwA/']);
    __ss_noform.push(['endpoint', '80cc306e-10aa-447b-a9f5-3ccf3c3d3594']);
</script>
<script type="text/javascript" src="https://koi-3QND212D12.marketingautomation.services/client/noform.js?ver=1.24" ></script>
<!-- end Sharpspring native form -->

<!-- Link form to thank-you page -->
<script>
	document.addEventListener( 'wpcf7mailsent', function( event ) {
			location = './thank-you';
	}, false );
</script>
<!-- end Link form to thank-you page -->

<!-- Enque slider -->
<script>
  var mySwiper = new Swiper ('.gallery', {
    // Optional parameters
	direction: 'horizontal',
    loop: true,

		autoplay: {
			delay: 5000,
		},

    // Navigation arrows
    navigation: {
      nextEl: '.next',
      prevEl: '.prev',
    },

  })
</script>
<!-- end Enque slider -->

</body>

</html>
