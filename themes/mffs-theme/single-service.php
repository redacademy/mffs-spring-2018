<?php
/**
 * The template for displaying all single posts.
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<nav><a href="<?php echo home_url("/services") ?>">Services</a>
			 <i class="fas fa-caret-right"></i>
			 <a href="<?php echo the_permalink() ?>"><?php echo the_title()?></a>
		</nav>

		<section class="single-service-content">
			<h2 class="section-title"><?php echo the_title() ?></h2>
			<p><?php echo the_content() ?></p>
		</section>


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
