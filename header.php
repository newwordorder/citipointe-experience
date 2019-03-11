<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory'); ?>/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Permanent+Marker" rel="stylesheet">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>



	<!-- ******************* The Navbar Area ******************* -->
<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
<div class="header">
<div class="gradient-bar"></div>
<div id="header" class="header-top" >
	<div class="header__inner" >
		<div class="d-flex align-items-center w-100">
			
			<div class="col-md-3">
				<a href="<?php echo get_home_url(); ?>" id="site-logo" class="header__logo">
					<img class="logo logo--light" src="<?php bloginfo('template_directory'); ?>/img/logo--light.svg" alt="The Banyans">
					<img class="logo logo--dark" src="<?php bloginfo('template_directory'); ?>/img/logo--dark.svg" alt="The Banyans">
				</a>
			</div>
			<a id="toggleMenu" class="toggle-menu">
					<span class="toggle-line"></span>
			</a>
			<div class="col-md-9">
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'header-nav header-nav__primary',
						'container_id'    => '',
						'menu_class'      => 'menu header__primary',
						'fallback_cb'     => '',
						'menu_id'         => 'header__primary',
					)
				); ?>
			</div>
			
		
		</div>
	</div><!-- .container -->

</div><!-- #header -->
	
</div>


<script>

(function($) {
		$(".toggle-menu").click(function () {
			$(".toggle-menu,#header__primary").toggleClass("is-active");
	});
})( jQuery );
</script>


	<div class="page">
