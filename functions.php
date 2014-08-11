<?php

if ( ! isset( $content_width ) )
	$content_width = 750;

function gomarching_setup() {
	register_nav_menus( array(
		'sidebar' => __( 'Sidebar Menu', 'growing-panes' ),
	) );

	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video', 'quote', 'link', 'status' )  );

	add_image_size( 'feature', 750 );
}
add_action( 'after_setup_theme', 'gomarching_setup' );

function gomarching_scripts() {
	wp_enqueue_style( 'gomarching-style', get_stylesheet_uri() );
	wp_enqueue_style( 'gomarching-reset', get_template_directory_uri() . '/reset.css' ) ;
	wp_enqueue_style( 'genericons-css', get_template_directory_uri() . '/genericons/genericons.css' ) ;
	wp_enqueue_script( 'gomarching-script', get_template_directory_uri() . '/scripts.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'gomarching_scripts' );

function gomarching_infinite_scroll_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container'       => 'main',
		'footer'          => false,
	) );
}
add_action( 'after_setup_theme', 'gomarching_infinite_scroll_setup' );

function extract_first_post_image() {
	global $post;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	return $first_img;
}

function get_tonesque_bg() {
	if ( ! class_exists( 'Tonesque' ) )
		require( 'inc/tonesque.php' );

	if ( get_background_image() == '' ) {
		$contrast = '255,255,255';
		$color = '0,0,0';
	} else {
		$tonesque = new Tonesque( get_background_image() );
		$color = $tonesque->color( 5, 'rgb' );
		$contrast = $tonesque->contrast();
	}
	return array(
		'color'    => $color,
		'contrast' => $contrast,
	);
}

function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( '', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '&hellip;';
	} else {
		echo $excerpt;
	}
}
?>