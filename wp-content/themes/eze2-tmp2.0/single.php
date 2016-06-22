<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

	<section class="contents__above cover" id="js-above">
		<div class="cover__inner is-visible" id="js-cover">

			<nav id="site-navigation" class="main-navigation" role="navigation">

				<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>

			</nav>
			<!-- #site-navigation -->

			<h1 class="cover__ttl" id="x-js-text"><?php the_title(); ?></h1>
			<p class="cover__txt" id="js-second-text"><a href="#primary">Scroll</a></p>
			<!--            <ul class="cover__list" id="js-second-text">-->
			<!--                <li><a href="#one">Concept</a></li>-->
			<!--                <li><a href="#two">Designer</a></li>-->
			<!--            </ul>-->
		</div>
		<div class="cover__bg" style="background-image:url('<?php echo getPostThumbnailUrl($post) ?>');"></div>
		<div class="cover__bg--filter"></div>
	</section>

	<div id="main" class="site-main">
	<div id="page" class="hfeed site">

	

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
	
	<?php if(get_theme_mod('portfolio_show_post_navigation', '1') == '1') : ?>
	<?php 
		previous_post_link( 
			'<div id="prev-post">%link</div>', 
			'<i class="fa fa-arrow-left"></i>', 
			(get_theme_mod('portfolio_show_post_navigation_same_taxonomy', '0') == '0' ? FALSE : TRUE)
		); 
	?>
	<?php 
		next_post_link( 
			'<div id="next-post">%link</div>', 
			'<i class="fa fa-arrow-right"></i>', 
			(get_theme_mod('portfolio_show_post_navigation_same_taxonomy', '0') == '0' ? FALSE : TRUE)
		); 
	?>
	<?php endif; ?>
	
	<?php get_template_part( 'content', 'footer' ); ?>
	<?php comments_template(); ?>

<?php get_footer(); ?>