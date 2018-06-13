<?php
/**
 * The main template file.
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- First section with testomonials carousel -->
			<section class="stories">
				<h2 class="story-title">Moving Forward Family Services</h2>
				<div class="carousel">
					carousel
				</div>
				<div class="story-info">
					<h2 class="story-title"><?php echo CFS()->get( 'mffs_stories_section_title', 12 ) ?></h2>
					<p><?php echo CFS()->get( 'mffs_stories_section_content', 12 ) ?></p>
				</div>
			</section> <!-- end stories -->

			<!-- second section with impact circles stats -->
			<section class="impact">
				<h2 class="section-title">the<span> mffs </span> Impact</h2>

				<!-- yellow stat bubbles -->
				<ul class="impact-grid">
				<?php
					$loop = CFS()->get( 'mffs_impact', 12 );
						foreach ( $loop as $row ) { ?>
						<li>
							<?php echo $row['mffs_stat_value'];
								  echo $row['mffs_stat_title'];?>
						</li>
						<?php } ?>

				</ul>
			</section> <!-- end impact section -->

			<!-- third section inititiaves-->
			<section class="initiatives">
				<h2 class="section-title"><?php echo CFS()->get( 'mffs_initiatives_title', 12 ) ?></h2>

				<div class="section-wrapper">
					<div class="initiatives-img">
						<!-- place inititaves photo here -->
					</div>
					<p><?php echo CFS()->get( 'mffs_initiatives_content', 12 ) ?></p>
				</div>
			</section><!-- end inititiaves -->

			<!-- fourth section mission -->
			<section class="mission">
				<h2 class="section-title"><?php echo CFS()->get( 'mffs_mission_title', 12 ) ?></h2>

				<div class="section-wrapper">
					<div class="mission-img">
						<div class="green-img-bar">

						</div>
						<img src="<?php echo get_template_directory_uri();?>/assets/icons/if_Child-family-daughter-son-mother-fahter-grandfather-grandmother_3272468.svg" alt="">
					</div>
					<p><?php echo CFS()->get( 'mffs_mission_content', 12 ) ?></p>
				</div>

			</section>	<!-- end mission -->

			<!-- fifth section languages -->
			<section class="languages">
				<h2 class="section-title">We Speak Your Languages</h2>
				<h3>Our services are offered in:</h3>

				<ul class="language-grid">
				<?php
					$loop = CFS()->get( 'mffs_languages_content', 12 );
						foreach ( $loop as $row ) { ?>
						<li>
							<?php echo $row['mffs_languages_single'];?>
						</li>
						<?php } ?>

				</ul>

				<div class="language-img">
					<?php echo CFS()->get( 'mffs_language_img', 12 ) ?>
				</div>

			</section><!-- end languages -->


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
