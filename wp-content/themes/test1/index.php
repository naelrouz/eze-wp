<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>
<body>
<?php bloginfo('name'); ?><br>
<?php bloginfo('description'); ?>


<?php if ( have_posts()) : while (have_posts()) : the_post(); ?>
	<h3><?php the_title(); ?></h3>
	<p><?php the_excerpt(); ?></p>
	<a href="<?php the_permalink(); ?>">Other</a>

<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>

<hr>
<?php //var_dump($posts);?>
<?php foreach ($posts as $item_post): ?>
	<h3><?php echo $item_post->post_title;?></h3>
	<p><?php echo $item_post->post_content;?></p>


<?php endforeach; ?>



</body>
</html>