<?php get_header(); ?>
		
		<div class="content">
		<?php if (have_posts()) : ?>
 		<?php while (have_posts()) : the_post(); ?>
			<div class="post">
				<h1><?php the_title(); ?></h1>
				<h2><img src="/wp-content/themes/ezequielgomez/images/time.png"><?php the_date(); ?></h2>
				<div class="text">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="comment">
				<?php comments_template(); ?>
			</div>
		</div>
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<?php else : ?>
		<?php endif; ?>
		</div>
<?php get_footer(); ?>