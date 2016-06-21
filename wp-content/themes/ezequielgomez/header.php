<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="/wp-content/themes/ezequielgomez/style/styles.css">
	<meta charset="utf-8">
	<title>
		<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
		<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;–езультаты&nbsp; поиска<?php } ?>
		<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;јрхив автора<?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
		<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;јрхив&nbsp;| &nbsp;<?php single_cat_title(); ?><?php } ?>
		<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;јрхив&nbsp; <?php the_time('F'); ?><?php } ?>
		<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;ћетки&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>
	</title>
	<link rel="shortcut icon" href="/wp-content/themes/ezequielgomez/images/favicon.ico" />
	<?php wp_head(); ?>
</head>
<body>
		<div class="header">
			<div class="logo"><a href="/"><img src="/wp-content/themes/ezequielgomez/images/logo.png"></a></div>
		</div>
		
		<div class="menu">
			<?php
			    if ( function_exists( 'wp_nav_menu' ) )
			        wp_nav_menu( 
				        array( 
				        'theme_location' => 'custom-menu',
				        'fallback_cb'=> 'custom_menu',
				        'container' => 'ul',
				        'menu_id' => 'nav',
				        'menu_class' => 'nav') 
					);
			    else custom_menu();
			?>
		</div>