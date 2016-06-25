<?php
/**
 * The main template file
 *
 */

get_header(); ?>

	<div id="page-preloader">
		<h1 id="loader" class="load">
			<span>l</span>
			<span>o</span>
			<span>a</span>
			<span>d</span>
			<span>i</span>
			<span>n</span>
			<span>g</span>
		</h1>

		<video id="bgvid">
			<source src="/wp-content/uploads/logo-anim.mp4" type="video/mp4">
		</video>

<!--		poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg"-->

	</div>



	<section class="contents__above cover" id="js-above">
		<div class="cover__inner is-visible" id="js-cover">

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>
			</nav>
			<!-- #site-navigation -->

			<h1 class="cover__ttl" id="js-text">Welcome</h1>
			<p class="cover__txt" id="js-second-text"><a href="#primary">Scroll</a></p>
			<!--            <ul class="cover__list" id="js-second-text">-->
			<!--                <li><a href="#one">Concept</a></li>-->
			<!--                <li><a href="#two">Designer</a></li>-->
			<!--            </ul>-->
		</div>
		<div class="cover__bg" style="background-image:url('/wp-content/uploads/2015/11/image3-1024x683.jpeg');"></div>
		<div class="cover__bg--filter"></div>
	</section>

	<div id="main" class="site-main">
	<div id="page" class="hfeed site">


	<div id="primary" class="hideme content-area">
		<div id="content" class="site-content archive" role="main">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content-archive', get_post_format() ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</div><!-- #content -->
		
		<?php portfolio_paging_nav(); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>