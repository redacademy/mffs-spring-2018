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

        <!-- first section internship title -->
            <section class="internship-title">
                <h2 class="title-no-bg"><?php echo CFS()->get( 'mffs_internship_title', 19 ) ?></h2>
                <img src="<?php echo CFS()->get( 'mffs_internship_img', 19 ) ?>" alt="">
                <p><?php echo CFS()->get( 'mffs_internship_text', 19 ) ?></p>
            </section> <!-- end internship title -->

        <!-- second section internship contact -->
            <section class="internship-contact">
                <h2 class="section-title">Join our team!</h2>
                <p>Please contact</p>
                <a href="<?php echo CFS()->get( 'mffs_internship_contact', 19 ) ?>"><?php echo CFS()->get( 'mffs_internship_contact', 19 ) ?></a>
            </section><!-- end internship contact -->

        <!-- third section internship why -->
            <section class="internship-why">
                <h2 class="section-title">Why intern with us?</h2>
                <p><?php echo CFS()->get( 'mffs_internship_description', 19 ) ?></p>

                <ul class="why-grid">
				<?php
					$loop = CFS()->get( 'mffs_internship_qualities_list', 19 );
						foreach ( $loop as $row ) { ?>
						<li class="internship-quality-single">
							<img src="<?php echo $row['internship_icon'];?>" alt="">
                            <h2 class="title-no-bg"><?php echo $row['mffs_internship_quality_title'];?></h2>
                            <?php echo $row['mffs_internship_quality_text'];?>
						</li>
						<?php } ?>
				</ul>
            </section><!-- end internship why -->

            <!-- fourth section internship requirements -->
            <section class="internship-requirements">
                <h2 class="section-title">Internship-requirements</h2>
                <h2 class="desktop">Admissions Criteria<h2>
                <p><?php echo CFS()->get( 'mffs_internship_requirement_education', 19 ) ?></p>

                <ul class="requirements-grid">
				<?php
					$loop = CFS()->get( 'mffs_internship_requirements', 19 );
						foreach ( $loop as $row ) { ?>
						<li class="requirements-single">
                            <h2 class="title-no-bg"><?php echo $row['mffs_internship_requirement_title'];?></h2>
                            <?php echo $row['mffs_internship_requirement_text'];?>
                            <div class="yellow-dots"> &bull; &bull; &bull; </div>
                        </li>
						<?php } ?>
				</ul>


            </section>

            <!-- fifth contact section -->
            <section class="internship-contact">
                <h2 class="section-title">Join our team!</h2>
                <p>How to apply</p>
                <a href="<?php echo CFS()->get( 'mffs_internship_contact', 19 ) ?>"><?php echo CFS()->get( 'mffs_internship_contact', 19 ) ?></a>
            </section><!-- end internship contact -->
                  <?php endwhile;
			else :
		endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>