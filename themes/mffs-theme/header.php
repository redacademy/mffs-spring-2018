<?php
/**
 * The header for our theme.
 *
 * @package mffs_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

			<!-- heaeder Nav -->
			<nav id="site-navigation" class="main-navigation" role="navigation">

					<div class="menu-toggle">

						<button class="hamburger hamburger--collapse" type="button" aria-expanded="false" aria-controls="primary-menu">
						<?php esc_html('Primary Menu');?>
							<span class="hamburger-box">
								<span class="hamburger-inner">
								</span>
							</span>
							<span class="hamburger-label">Menu</span>
						</button>

					</div>

					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu'));?>
						

				</nav><!-- #site-navigation -->


				<!-- header middle logo -->
				<div class="site-branding">
					<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/assets/icons/leafs.svg" alt="">
					<p>mffs<span class="ca-tld">.ca</span></p></a>
				</div><!-- .site-branding -->

				<!-- donate button -->
				<div class="donate-button">
					<a href="#">donate</a>
				</div>
			


			</header><!-- #masthead -->

			<div id="content" class="site-content">
