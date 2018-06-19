<?php
/**
 * The template for displaying archive pages.
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="newsletter-form">
                <form class="mc-email-form">
                <input class="mc-input "type="email" name="email-form" value="Email"><br>
                <input class="mc-submit" type="submit" value="Submit">
                <input class="mc-back" type="button" value="Back" onclick="history.back(-1)" />
            </form>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

