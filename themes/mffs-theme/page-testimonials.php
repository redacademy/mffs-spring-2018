<?php
/**
 * The internship template file.
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main internship" role="main">
        <?php
			if(have_posts()):
			while ( have_posts() ) : the_post(); ?>


                <section class="testimonials">
                    <h2 class="title-no-bg">Testimonials</h2>

                        <ul class="testimonials-grid">
                            <?php
                            $loop = CFS()->get( 'mffs_testimonials_loop', 126 );
                            foreach ( $loop as $row ) { ?>

                            <li class="testimonial-single">
                                <i class="fas fa-quote-left"></i>
                                <blockquote><?php echo wp_kses( $row['mffs_testimonial_text'], wp_kses_allowed_html( 'post' ) );?></blockquote>
                                <p><span class= "dash">&#8213;</span><?php echo esc_html( $row['mffs_testimonial_author'] );?></p>
                            </li>


                            <?php } ?>
                    </ul>


                </section>



                  <?php endwhile;
			else :
		endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>