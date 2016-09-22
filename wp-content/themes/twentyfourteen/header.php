<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet"> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>
	<div class="header-top">
		<div class="header-link-top">
			<div class="lfloat">
				<p>SẢN PHẨM NẤM LIM XANH CỦA công ty TNHH Nông Lâm sản Tiên Phước Là THƯƠNG HIỆU ĐỘC QUYỀN CHĨNH HÃNG</p>
			</div>
			<div class="rfloat">
				<span class="hotline">Hotline: 04.3797.0138</span>
				<span class="search-top">search</span>
			</div>
		</div>
	</div>
	<div class="header-container">
		<div class="header">
			<header id="masthead" class="site-header" role="banner">
				<div class="header-main">
					<div class="logo">
						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Nấm lim xanh" /></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Nấm lim xanh" /></a></p>
						<?php endif;?>
					</div>
					<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
						<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
						<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
					</nav>
				</div>
				<?php 
				if ( is_front_page() && is_home() ) :
					echo do_shortcode("[metaslider id=4]");
				endif;
				?>
			</header><!-- #masthead -->
		</div><!-- #header -->
	</div><!-- #header-container -->
	<div class="main-container">
		<div class="main">
			<div id="main" class="site-main">
