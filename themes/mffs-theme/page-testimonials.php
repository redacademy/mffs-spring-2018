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
                            <blockquote><?php echo $row['mffs_testimonial_text'];?></blockquote>
                                <p><?php echo $row['mffs_testimonial_author'];?></p>
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