<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700,800&subset=latin,vietnamese,latin-ext' rel='stylesheet' type='text/css'>

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="site-container" class="site-container">
	<header class="site-header">
		<div class="container clearfix">
			<a href="<?= esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?= get_template_directory_uri(); ?>/images/logo.jpg" alt="<?php bloginfo( 'name' ); ?>" /></a>
			<div class="meta-info">
				<div class="slogan">
					<p class="h1"><?php bloginfo( 'description' ); ?></p>
					<div>
						<p>Share the Power of Witch Hazel</p>
                        <span>
                            <a href="#" class="facebook"><i class="fa fa-facebook-square"></i></a>
                            <a href="#" class="email"><i class="fa fa-envelope-o"></i></a>
                        </span>
					</div>
				</div>
				<div class="language">
					<a href="javascript:void(0);" class="language--toggle"></a>
					<ul class="language--menu">
						<li><a href="#">Vietnamese</a></li>
						<li><a href="#">English</a></li>
					</ul>
				</div>
			</div>
		</div>

		<nav class="site-menu">
			<div class="container">
				<?php
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class' => 'main-menu',
						'container' => 'ul'
					) );
				} ?>
			</div>
			<div class="bar"></div>
		</nav>
	</header>

