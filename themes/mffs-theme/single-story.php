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

		<nav><a href="<?php echo esc_url( home_url() )?>">Success Stories</a>
			 <i class="fas fa-caret-right"></i>
			 <a href="<?php echo esc_url( the_permalink() ) ?>"><?php echo esc_html( the_title() )?></a>
		</nav>

        <!-- first section story main content -->
        <section class="story-main">
            <img src="<?php echo esc_url( CFS()->get( 'mffs_success_image_top') ) ?>" alt="">

            <h2 class="title-no-bg">A new beginning with the help from MFFS.</h2>

            <p>Your donation will help us provide free and low cost counselling for someone like <?php echo esc_html( CFS()->get( 'mffs_success_story_name') ) ?> for a better life.</p>

            <h2 class="title-no-bg"><?php echo esc_html( CFS()->get( 'mffs_success_story_name') ) ?>'s Story</h2>

            <p><?php echo wp_kses( CFS()->get( 'mffs_success_story_content'), wp_kses_allowed_html( 'post' ) ) ?></p>

        </section> <!-- end story main content -->

        <!-- desktop first section story main content -->
         <section class="visible-desktop desktop-story-main">
             <div class="desktop-single-story-img">
                <h2>Success Stories</h2>
                <img src="<?php echo esc_url( CFS()->get( 'mffs_success_image_top') ) ?>" alt="">
            </div>
            
            <div class="desktop-single-story-new-beginning">
                <h2 class="desktop-title-no-bg"><?php echo esc_html( CFS()->get( 'mffs_success_story_name') ) ?>, a new beginning with the help from MFFS.</h2>

                <p>Your donation will help us provide free and low cost counselling for someone like <?php echo esc_html( CFS()->get( 'mffs_success_story_name') ) ?> for a better life.</p>
                <div class="desktop-donate"><a class="donate-button" href="#">Donate</a></div>
            </div>
        </section> <!-- end desktop first section story main content -->

        <!-- second section story mffs -->
        <section class="story-mffs">
            <div class="desktop-success-story-content">
                <h2><?php echo esc_html( CFS()->get( 'mffs_success_story_name' ) )?>'s Story</h2>
                <p><?php echo wp_kses( CFS()->get( 'mffs_success_story_content'), wp_kses_allowed_html( 'post' ) )?></p>
            </div>
            <div class="desktop-success-story-help">
                <img src="<?php echo esc_url( CFS()->get( 'mffs_success_image_mid') ) ?>" alt="">
                <h2 class="title-no-bg">The Help from MFFS</h2>
                <p><?php echo wp_kses( CFS()->get( 'mffs_success_story_mffs_help'), wp_kses_allowed_html( 'post' ) ) ?></p>
            </div>
            <div class="success-story-help">
                <h2 class="title-no-bg">The Help from MFFS</h2>
                <img src="<?php echo esc_url( CFS()->get( 'mffs_success_image_mid') ) ?>" alt="">
                <p><?php echo wp_kses( CFS()->get( 'mffs_success_story_mffs_help'), wp_kses_allowed_html( 'post' ) ) ?></p>
            </div>
        </section> <!-- end story mffs -->

        <!-- third section story future -->
        <section class="story-future">
            <div class="mobile-story-future">
                <h2 class="title-no-bg">A Bright Future</h2>
                <img src="<?php echo esc_url( CFS()->get( 'mffs_success_image_bottom') ) ?>" alt="">
                <p><?php echo wp_kses( CFS()->get( 'mffs_success_story_bright_future'), wp_kses_allowed_html( 'post' ) ) ?></p>
            </div>

            <div class="visible-desktop desktop-story-future">
                <img src="<?php echo esc_url( CFS()->get( 'mffs_success_image_bottom') ) ?>" alt="">
                <div class="desktop-story-future-content">
                    <h2 class="title-no-bg">A Bright Future</h2>
                    <p><?php echo wp_kses( CFS()->get( 'mffs_success_story_bright_future'), wp_kses_allowed_html( 'post' ) ) ?></p>
                </div>
            </div>
       </section> <!-- end story future -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
