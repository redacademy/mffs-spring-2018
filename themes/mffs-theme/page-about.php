<?php
/**
 * The main template file.
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area about">
		<main id="main" class="site-main" role="main">

		<?php
			if(have_posts()):
			while ( have_posts() ) : the_post(); ?>

		<div class="about-view-reports">
			<h2>About Us  |</h2>
			<a href="<?php echo esc_url( home_url("/reports") ) ?>">View Annual Reports</a>
		</div>

		<!-- first section with carousel -->
			<section class="about-carousel">
				<div class="main-carousel">

                    <?php
                    $loop = CFS()->get( 'mffs_about_carousel');
                    foreach ( $loop as $row ) { ?>

						<div class="carousel-cell">
                            <img class="carousel-image" src="<?php echo esc_url( $row['mffs_about_carousel_image'] );?>" alt="">
                        </div>

						<?php } ?>

				</div>
				<div class="desktop-about-quote">
					<h2>Counselling for all</h2>
					<?php echo wp_kses( CFS()->get( 'mffs_about_quotes'), wp_kses_allowed_html( 'post' ) ) ?>
				</div>
			</section> 	<!-- end about-arousel -->

		<!-- second section about-do -->
			<section class="about-do">
				<h2 class="section-title">What We Do</h2>
				<ul class="about-do-grid">
					<li>
						<img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/icons/if_Child-balloons-mother-daughter_3272439.svg" alt="">
						<p>Awesome Internship Program</p>
					</li>
					<li>
						<img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/icons/down_woman.svg" alt="">
						<p>Low-Barrier Counselling</p>
					</li>
					<li>
						<img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/icons/if_Child-family-daughter-son-mother-fahter-grandfather-grandmother_3272468.svg" alt="">
						<p>Services for Everyone</p>
					</li>
				</ul>
			</section> <!-- end about-do -->

			<!-- third section about-values -->
			<section class="about-values">
				<h2 class="section-title">Our Values</h2>
				<p><?php echo wp_kses( CFS()->get( 'mffs_our_values', 17 ), wp_kses_allowed_html( 'post' ) ) ?></p>
			</section> <!-- end about-values -->

			<!-- fourth section about-team -->
			<section class="about-team">
				<h2 class="section-title">Our Team</h2>

				<ul class="team-grid">
				<?php
					$loop = CFS()->get( 'mffs_our_team', 17 ) ;
					$i =1;
						foreach ( $loop as $row ) { ?>
						<li class="team-member-single team-single-<?php echo esc_url( $i++ ); ?>">
							<img src="<?php echo esc_url( $row['mffs_team_img'] );?>" alt="">
							<p><?php echo esc_html( $row['mffs_team_position'] );?></p>
							<P><?php echo esc_html( $row['mffs_team_member_name'] );?></P>
						</li>
						<?php } ?>
				</ul>

			  <p><?php echo wp_kses( CFS()->get( 'mffs_team_description', 17 ), wp_kses_allowed_html( 'post' ) ) ?></p>
			</section><!-- end about-team -->

			<!-- fifth section about-awards -->
			<section class="about-awards">
				<div class="award-container">
					<h2 class="section-title">Awards of Recognition</h2>
					<img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/icons/if_ribbon__badge__award__medal__achievement__awards__star_2528016.svg" alt="">
				</div>
				<ul class="awards-grid">
				<?php
					$loop = CFS()->get( 'mffs_about_awards', 17 ) ;
						foreach ( $loop as $row ) { ?>
						<li>
							<?php echo wp_kses( $row['mffs_about_awards_single'], wp_kses_allowed_html( 'post' ) ); ?>
						</li>
				<?php } ?>
				</ul>
			</section> <!-- end about-awards -->

			<!-- sixth section about-disclaimer -->
			<section class="about-disclaimer">
				<h2 class="section-title">Disclaimer</h2>
				<ol class="disclaimer-grid">
				<?php
					$loop = CFS()->get( 'mffs_about_disclaimer', 17);
						foreach ( $loop as $row ) { ?>
						<li>
							<?php echo wp_kses( $row['mffs_about_disclaimer_single'], wp_kses_allowed_html( 'post' ) );?>
						</li>
				<?php } ?>
				</ol>
			</section> <!-- end about-disclaimer -->

			<!-- seventh section about-refuse -->
			<section class="about-refuse">
				<h2 class="section-title">MFFS Right to Refuse</h2>
				<p><?php echo wp_kses( CFS()->get( 'mffs_about_refuse', 17 ), wp_kses_allowed_html( 'post' ) ) ?></p>
			</section> 	<!-- end about-refuse -->

				<?php endwhile;
			else :
		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>