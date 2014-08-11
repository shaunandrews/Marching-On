<?php get_header(); ?>

	<div id="main">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post();
				get_template_part( 'content' ); 
			endwhile; ?>

		<?php else : ?>

			<h1>No results found.</h1>

		<?php endif; ?>
	</div>

<?php get_footer(); ?>