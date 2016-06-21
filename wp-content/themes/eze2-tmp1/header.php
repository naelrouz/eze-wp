<?php
/**
 *
 * The Header template for our theme
 *
 **/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<!-- CoolBlack -->
	<!-- css -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/coolblack.css" media="all">

	<?php wp_head(); ?>

	<!-- js -->
	<script charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/coolblack.jquery.js"></script>
	<script charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/coolblack.js"></script>
	<script>
		$(window).on('load', function () {
			var $preloader = $('#page-preloader'),

			$preloader.delay(13500).fadeOut('slow');
		});
	</script>
	<!-- / CoolBlack -->
	<style>

	</style>

</head>
<body <?php body_class(); ?>>
	<!--[if lte IE 8]>
	<div id="ie-toolbar"><div><?php _e('You\'re using an unsupported version of Internet Explorer. Please <a href="http://windows.microsoft.com/en-us/internet-explorer/products/ie/home">upgrade your browser</a> for the best user experience on our site. Thank you.', 'portfolio') ?></div></div>
	<![endif]-->
<div id="page-preloader">
	<h1 class="load">
		<span>l</span>
		<span>o</span>
		<span>a</span>
		<span>d</span>
		<span>i</span>
		<span>n</span>
		<span>g</span>
	</h1>
</div>


				
		