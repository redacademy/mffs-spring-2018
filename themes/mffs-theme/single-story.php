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

		<nav><a href="<?php echo home_url() ?>">Success Stories</a>
			 <i class="fas fa-caret-right"></i>
			 <a href="<?php echo the_permalink() ?>"><?php echo the_title()?></a>
		</nav>

        <!-- first section story main content -->
        <section class="story-main">
            <img src="<?php echo CFS()->get( 'mffs_success_image_top') ?>" alt="">

            <h2 class="title-no-bg">A new beginning with the help from MFFS.</h2>

            <p>Your donation will help us provide free and low cost counselling for someone like <?php echo CFS()->get( 'mffs_success_story_name') ?> for a better life.</p>

            <h2 class="title-no-bg"><?php echo CFS()->get( 'mffs_success_story_name') ?>'s Story</h2>

            <p><?php echo CFS()->get( 'mffs_success_story_content') ?></p>

        </section> <!-- end story main content -->

        <!-- desktop first section story main content -->
         <!-- <section class="visible-desktop">
             <h2>Success Stories</h2>
            <img src="<?php echo CFS()->get( 'mffs_success_image_top') ?>" alt="">

            <h2 class="desktop-title-no-bg"><?php echo CFS()->get( 'mffs_success_story_name') ?>a new beginning with the help from MFFS.</h2>

            <p>Your donation will help us provide free and low cost counselling for someone like <?php echo CFS()->get( 'mffs_success_story_name') ?> for a better life.</p>
            <div class="desktop-donate"><a class="donate-button" href="#">Donate</a></div> -->

        </section> <!-- end desktop first section story main content -->

        <!-- second section story mffs -->
        <section class="story-mffs">
            <h2 class="title-no-bg">The Help from MFFS</h2>
            <img src="<?php echo CFS()->get( 'mffs_success_image_mid') ?>" alt="">
            <p><?php echo CFS()->get( 'mffs_success_story_mffs_help') ?></p>
        </section> <!-- end story mffs -->

        <!-- third section story future -->
        <section class="story-future">
            <h2 class="title-no-bg">A Bright Future</h2>
            <img src="<?php echo CFS()->get( 'mffs_success_image_bottom') ?>" alt="">
            <p><?php echo CFS()->get( 'mffs_success_story_bright_future') ?></p>
        </section> <!-- end story future -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
