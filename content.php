<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<ul class="entry-nav">
		<li class="entry-nav-prev">Prev</li>
		<li class="entry-nav-next">Next</li>
	</ul>
	<div class="entry-main">
		<?php if ( get_the_title() !== '' ): ?>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php endif; ?>
		<p class="entry-date"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo get_the_date(); ?> @ <?php echo get_the_time(); ?></a></p>

		<?php if ( get_the_excerpt() !== '' ): ?>
		<div class="entry-content">
			<?php the_excerpt_max_charlength( '200' ); ?>
		</div>
		<?php endif; ?>
	</div>

	<?php
		$first_post_image = extract_first_post_image();
		if ( $first_post_image == null ) {
			$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
			$entry_media = 'background-color: #'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)] . ';';
		} else {
			$entry_media = "background-image: url('$first_post_image');";
		}
	?>
	<div class="entry-media" style="<?php echo $entry_media; ?>;"></div>
</article>