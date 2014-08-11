<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body id="go-marching" <?php body_class(); ?>>

	<script type="text/javascript">
		console.log( navigator.userAgent );
		if( navigator.userAgent.match(/iP(hone|od|ad)/i) ) {
		     jQuery('body').addClass('ios');
		}
	</script>