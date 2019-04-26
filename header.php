<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5N8XH4P');</script>
	<!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- Sharpspring -->
	<script type="text/javascript">
		var _ss = _ss || [];
		_ss.push(['_setDomain', 'https://koi-3QND212D12.marketingautomation.services/net']);
		_ss.push(['_setAccount', 'KOI-442ENL6DGI']);
		_ss.push(['_trackPageView']);
	(function() {
		var ss = document.createElement('script');
		ss.type = 'text/javascript'; ss.async = true;
		ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QND212D12.marketingautomation.services/client/ss.js?ver=1.1.1';
		var scr = document.getElementsByTagName('script')[0];
		scr.parentNode.insertBefore(ss, scr);
	})();
	</script>
	<!-- end Sharpspring -->

	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#1068a7">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5N8XH4P"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- ******************* The Navbar Area ******************* -->
<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
<div class="header">
	<div id="header" class="header-top" >
		<div class="header__inner" >
			<div class="d-flex align-items-center w-100">
				<div class="col-md-4">
					<a href="<?php echo get_home_url(); ?>" id="site-logo" class="header__logo">
						<img class="logo logo--light" src="<?php bloginfo('template_directory'); ?>/img/logo--light.svg" alt="Tour Citipointe">
						<img class="logo logo--dark" src="<?php bloginfo('template_directory'); ?>/img/logo--dark.svg" alt="Tour Citipointe">
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

<div id="content" class="page">
