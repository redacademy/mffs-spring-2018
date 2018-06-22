<?php
/**
 * The main template file.
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if(have_posts()):
			while ( have_posts() ) : the_post(); ?>


			<!-- First section with testomonials carousel -->
			<section class="stories">
				<h2 class="story-title page-title">Moving Forward Family Services</h2>

					<div class="main-carousel">

                        <?php $args = array('post_type' => 'story'); ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <div class="carousel-cell">
							<img class="carousel-image" src="<?php echo CFS()->get( 'mffs_success_image_top') ?>" alt="">
							<a href="<?php echo the_permalink() ?>" class="btn mobile-read-more">Read More</a>
							<div class="green-carousel-bar"></div>
                        </div>



                        <?php endwhile; ?>

                        <?php else: ?>
                            <h1>No posts here!</h1>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                    </div>

				<div class="story-info">
					<h2 class="story-title"><?php echo CFS()->get( 'mffs_stories_section_title') ?></h2>
					<p class = "story-content"><?php echo CFS()->get( 'mffs_stories_section_content') ?></p>
					<a href="<?php echo the_permalink() ?>" class="desktop-read-more">More Sucess Stories</a>
				</div>
			</section> <!-- end stories -->

			<!-- second section with impact circles stats -->
			<section class="impact">
				<h2 class="section-title">the<span> mffs </span> Impact</h2>



				<!-- yellow stat bubbles -->
				<div class="impact-circles">
				<ul class="impact-grid">
				<?php
					$loop = CFS()->get( 'mffs_impact');
						foreach ( $loop as $row ) { ?>
						<li>
							<span class='numscroller impact-value' data-min='1' data-max='<?php echo $row['mffs_stat_value'];?>' data-delay='10' data-increment='5'><?php echo $row['mffs_stat_value'];?></span>
							<div class="impact-title"><?php echo $row['mffs_stat_title'];?></div>
						</li>
						<?php } ?>

				</ul>
				</div>
			</section> <!-- end impact section -->

			<!-- third section inititiaves-->
			<section class="initiatives">
				<div class="visible-desktop initiatives-img">
					<img src="<?php echo CFS()->get( 'mffs_initiatives_img') ?>">
				</div>
				<div class="desktop-initiatives-content-wrapper">
					<h2 class="initiatives-title"><?php echo CFS()->get( 'mffs_initiatives_title') ?></h2>
					<div class="initiatives-content-wrapper">
						<p><?php echo CFS()->get( 'mffs_initiatives_content') ?></p>
					</div>
				</div>
			</section><!-- end inititiaves -->

			<!-- fourth section mission -->
			<section class="mission">
				<div class="desktop-mission-text-wrapper">
					<h2 class="section-title"><?php echo CFS()->get( 'mffs_mission_title') ?></h2>

					<div class="section-wrapper">
						<div class="green-img-bar">
							<div class="mission-img">
								<img src="<?php echo get_template_directory_uri();?>/assets/icons/if_Child-family-daughter-son-mother-fahter-grandfather-grandmother_3272468.svg" alt="">
							</div>
						</div>

						<p><?php echo CFS()->get( 'mffs_mission_content') ?></p>
					</div>
				</div>
				<div class="visible-desktop mission-img">
					<img src="<?php echo CFS()->get( 'mffs_desktop_mission_image') ?>">
				</div>
			</section>	<!-- end mission -->

			<!-- fifth section languages -->
			<section class="languages">
				<div class="languages-info">
					<h2 class="section-title">We Speak Your Languages</h2>
					<h3>Our services are offered in:</h3>

					<ul class="language-grid">
					<?php
						$loop = CFS()->get( 'mffs_languages_content');
							foreach ( $loop as $row ) { ?>
							<li>
								<?php echo $row['mffs_languages_single'];?>
							</li>
							<?php } ?>

					</ul>
				</div>
				<div class="language-img">
					<img src="<?php echo CFS()->get( 'mffs_language_img') ?>" alt="">
				</div>

			</section><!-- end languages -->

				<?php endwhile;
				else :
				endif;
				?>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
