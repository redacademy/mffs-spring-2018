<?php
/**
 * The main template file.
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area about">
		<main id="main" class="site-main" role="main">
			
		<!-- first section with carousel -->
			<section class="about-carousel">
				<!-- TODO add carousel -->
			</section> 	<!-- end about-arousel -->

			<!-- TODO add button here for view annual report -->

		<!-- second section about-do -->
			<section class="about-do">
				<h2 class="section-title">What We Do</h2>
				<ul class="about-go-grid">
					<li>
						<img src="<?php echo get_template_directory_uri();?>/assets/icons/if_Child-balloons-mother-daughter_3272439.svg" alt="">
						<p>Awesome internship program</p>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri();?>/assets/icons/down_woman.svg" alt="">
						<p>Low fee counselling</p>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri();?>/assets/icons/if_Child-family-daughter-son-mother-fahter-grandfather-grandmother_3272468.svg" alt="">
						<p>Awesome internship program</p>
					</li>
				</ul>
			</section> <!-- end about-do -->

			<!-- third section about-values -->
			<section class="about-values">
				<h2 class="section-title">Our Values</h2>
				<p><?php echo CFS()->get( 'mffs_our_values', 17 ) ?></p>
			</section> <!-- end about-values -->

			<!-- fourth section about-team -->
			<section class="about-team">
				<h2 class="section-title">Our Team</h2>

				<ul class="team-grid">
				<?php
					$loop = CFS()->get( 'mffs_our_team', 17 );
						foreach ( $loop as $row ) { ?>
						<li class="team-member-single">
							<img src="<?php echo $row['mffs_team_img'];?>" alt="">
							<p><?php echo $row['mffs_team_position'];?></p>
							<P><?php echo $row['mffs_team_member_name'];?></P>
						</li>
						<?php } ?>
				</ul>

			  <p><?php echo CFS()->get( 'mffs_team_description', 17 ) ?></p>
			</section><!-- end about-team -->

			<!-- fifth section about-awards -->
			<section class="about-awards">
				<div class="award-container">
					<h2 class="section-title">Awards of Recognition</h2>
					<img src="<?php echo get_template_directory_uri();?>/assets/icons/if_ribbon__badge__award__medal__achievement__awards__star_2528016.svg" alt="">
				</div>
				<ul class="awards-grid">
				<?php
					$loop = CFS()->get( 'mffs_about_awards', 17 );
						foreach ( $loop as $row ) { ?>
						<li>
							<?php echo $row['mffs_about_awards_single'];?>
						</li>
				<?php } ?>
				</ul>
			</section> <!-- end about-awards -->

			<!-- sixth section about-disclaimer -->
			<section class="about-disclaimer">
				<h2 class="section-title">Disclaimer</h2>
				<ol class="disclaimer-grid">
				<?php
					$loop = CFS()->get( 'mffs_about_disclaimer', 17 );
						foreach ( $loop as $row ) { ?>
						<li>
							<?php echo $row['mffs_about_disclaimer_single'];?>
						</li>
				<?php } ?>
				</ol>
			</section> <!-- end about-disclaimer -->

			<!-- seventh section about-refuse -->
			<section class="about-refuse">
				<h2 class="section-title uppercase">Mffs right to refuse</h2>
				<p><?php echo CFS()->get( 'mffs_about_refuse', 17 ) ?></p>
			</section> 	<!-- end about-refuse -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>