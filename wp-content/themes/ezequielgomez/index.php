<?php get_header(); ?>
		<div class="content">
		<?php if (have_posts()) : ?>
  		<?php while (have_posts()) : the_post(); ?>
			<div class="post">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<h2><img src="/wp-content/themes/ezequielgomez/images/time.png"><?php the_date(); ?>&nbsp;&nbsp;&nbsp;<img src="/wp-content/themes/ezequielgomez/images/comm.png"><?php comments_popup_link('Leave a comment', '1 comment', '% comments'); ?></h2>
				<div class="text">
					<?php the_content('',TRUE); ?>
				</div>
			</div>
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
			<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
		<?php else : ?>
		<?php endif; ?>
		</div>
<?php get_footer(); ?>