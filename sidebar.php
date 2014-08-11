<div id="sidebar">
	<div id="sidebar-header">
		<span class="header-image">
			<?php echo get_avatar( get_option( 'admin_email' ), 240 ); ?>
		</span>

		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h1>

		<?php /* <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> */ ?>
	</div>

	<?php wp_nav_menu( array(
		'theme_location' => 'sidebar',
		'depth' => 1,
	) ); ?>
</div>