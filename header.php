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
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,700,700i" rel="stylesheet">


<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/favicon/site.webmanifest">
<link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#1068a7">
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
			
			<div class="col-md-4">
				<a href="<?php echo get_home_url(); ?>" id="site-logo" class="header__logo">
					<img class="logo logo--light" src="<?php bloginfo('template_directory'); ?>/img/logo--light.svg" alt="The Banyans">
					<img class="logo logo--dark" src="<?php bloginfo('template_directory'); ?>/img/logo--dark.svg" alt="The Banyans">
				</a>
			</div>
			<a id="toggleMenu" class="toggle-menu">
					<span class="toggle-line"></span>
			</a>
			<div class="col-md-8">
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
