<?php
/**
 * The template for displaying all pages
 *
 */

get_header(); ?>

	<section class="contents__above cover" id="js-above">
		<div class="cover__inner is-visible" id="js-cover">

			<nav id="site-navigation" class="main-navigation" role="navigation">

				<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>

			</nav>
			<!-- #site-navigation -->

			<h1 class="cover__ttl" id="js-text"><?php the_title(); ?></h1>
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



	<div id="primary" class="hideme content-area<?php if (!(have_comments() || comments_open())) : ?> no-comments-area<?php endif; ?>">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<article class="hideme" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div>
						<header class="entry-header">
							<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
							<div class="entry-thumbnail">
<!--								--><?php //the_post_thumbnail(); ?>
							</div>
							<?php endif; ?>
	
							<h1 class="entry-title">
<!--								--><?php //the_title(); ?>
							</h1>
						</header><!-- .entry-header -->
	
						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages( array(
								'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'portfolio' ) . '</span>',
								'after' => '</div>',
								'link_before' => '<span>',
								'link_after' => '</span>'
							) ); ?>
						</div><!-- .entry-content -->
	
						<footer class="entry-meta">
							<?php edit_post_link( __( 'Edit', 'portfolio' ), '<span class="edit-link">', '</span>' ); ?>
						</footer><!-- .entry-meta -->
					</div>
				</article><!-- #post -->
			<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
	
	<?php comments_template(); ?>

<?php get_footer(); ?>