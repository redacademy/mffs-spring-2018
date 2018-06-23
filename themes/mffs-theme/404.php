<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				
				<header class="page-header">
					<a href="<?php echo esc_url( get_home_url() ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/icons/MFFSLOGO.svg" alt=""></a>
				</header><!-- .page-header -->

				<div class="page-content">
					<h1 class="page-title"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
				</div><!-- .page-content -->

				<div class="home-button">
					<a href="<?php echo esc_url( home_url() ) ?>">home</a>
				</div><!-- home button -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
