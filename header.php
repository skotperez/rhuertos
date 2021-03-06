<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _mbbasetheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<!--[if lt IE 9]>
	    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<header id="masthead" class="site-header" role="banner">
		<div id="pre" class="bargd">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="brand notext">
							<a class="text-center" href="<?php echo esc_url( home_url( '/' )); ?>"><?php echo MB_BLOGNAME; ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav id="pre-menu" class="navbar navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#pre-menu-collapse">
						<span class="sr-only"><?php _e('Show/hide menu','_mbbasetheme') ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="pre-menu-collapse">
					<?php $location = "header";
					if ( has_nav_menu( $location ) ) {
						$args = array(
							'theme_location'  => $location,
							'container' => false,
							'menu_id' => 'navbar-header',
							'menu_class' => 'nav navbar-nav navbar-left navbar-menu'
						);
						wp_nav_menu( $args );
					} ?>
						<?php $label = '<i class="fa fa-search"></i> ';
						$placeholder = __('Search','_mbbasetheme');
						_mbbasetheme_get_searchform('huertos','navbar-form navbar-right',false,$label,$placeholder); ?>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
