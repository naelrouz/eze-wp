<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">Введите пароль.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = '';
?>
<?php if ($comments) : ?>

	<h1 id="comments"><?php comments_number('No comments yet', 'Comments:', 'Comments:' );?></h4>

    <div class="commentlist alert alert-success">
		<?php wp_list_comments('avatar_size=64'); ?>
	</div>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<div id="respond">
<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>Пожалуйста,  <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">зарегистрируйтесь </a> для комментирования.</p>
<?php else : ?>

<!--тут форма-->
<h1>Leave a comment:</h1>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="form">

	<?php if ( $user_ID ) : ?>
	
	<p>Hello, <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Выйти">Logout &raquo;</a></p>
	
	<?php else : ?>
	
	<div class="input-prepend">
		<div class="commans">Name *<input class="string" type="text" name="author"></div>
	</div>
				        
	<div class="input-prepend">
		<div class="commans">E-mail *<input class="string" type="text" name="email"></div>
	</div>
				        
	<div class="input-prepend">
		<div class="commans">Website<input class="string" type="text" name="url"></div>
	</div>
	
	<?php endif; ?>
	
	<textarea class="string1" id="comment" style="display: none;" name="comment"></textarea>
	
	<div class="commans1">Comment</div>
	<textarea class="string1" id="real-comment" name="real-comment"></textarea>
	
	<?php if( function_exists(checkbot_show) ) { checkbot_show(); } ?>
	<p><input name="submit" type="submit" id="submit" tabindex="5" value="Send Comment" class="commbut" />
	<?php comment_id_fields(); ?>
	</p>
	<?php do_action('comment_form', $post->ID); ?>

</form>
<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>