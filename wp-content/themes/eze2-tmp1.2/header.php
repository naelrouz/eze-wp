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
<!--	<script charset="utf-8" src="--><?php //bloginfo('template_url'); ?><!--/js/coolblack.lib.js"></script>-->

	<script
		src="https://code.jquery.com/jquery-2.2.4.js"
		integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
		crossorigin="anonymous"></script>

	<script  src="<?php bloginfo('template_url'); ?>/js/coolblack2.js"></script>
	<script charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/cookie.js"></script>
	<script charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/TweenMax.min.js"></script>
	<script>
		$(window).on('load', function () {

			var topSectionTween = new TimelineMax(), loaderDelay = 5600;

			function topSectionAnimate() {

				//TweenLite.set(', {letterSpacing: '5px'});
				topSectionTween
				//        .staggerTo($('#js-text span'), 1, {
				//            ease: Power2.easeOut,
				////                ease: Power2.easeInOut,
				//            cycle: {
				//                delay: function () {
				//                    return Math.random() * 1
				//                }
				//            },
				//            opacity: 1,
				//            scale: 1,
				//        })
					.to(".cover__bg", 3, {
						opacity: 1,
						scale: 1.1,
					},'-=0');
			}
			
			if (getCookie('screen') != 'yes') {
				document.cookie = "screen=yes; path=/;";


				var preloader = $('#page-preloader'),
					load = preloader.find('.load'),
					vid = document.getElementById("bgvid");

				preloader.css( 'display', 'block' );

//				load.delay(300).fadeOut(300);
				load.fadeOut(100);

				function playVid() {
					vid.play();
				}
				playVid();

				$('#bgvid').css({
					     opacity: 1,
					 });

				preloader.delay(loaderDelay).fadeOut(1000);

				setTimeout(topSectionAnimate, loaderDelay);


			}else {
				topSectionAnimate();
			}


		});
	</script>
	<!-- / CoolBlack -->
	<style></style>
</head>
<body <?php body_class(); ?>>
	<!--[if lte IE 8]>
	<div id="ie-toolbar"><div><?php _e('You\'re using an unsupported version of Internet Explorer. Please <a href="http://windows.microsoft.com/en-us/internet-explorer/products/ie/home">upgrade your browser</a> for the best user experience on our site. Thank you.', 'portfolio') ?></div></div>
	<![endif]-->
