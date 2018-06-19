<?php
/**
 * The main template file.
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- outputs the data from the custom post type services, category (taxonomy: mental-well-being) -->
				<h2 class="title-no-bg">Services</h2>
				<!-- first section mental well being -->
				<section class="services-mwb">
					<h2 class="section-title">Mental well-being</h2>

						<?php $service_posts = get_posts(array(
							'post_type' => 'service',
							'service_type' => 'mental-well-being',
							'posts_per_page' => 10
						));
						if (! empty( $service_posts) && ! is_wp_error( $service_posts )) : ?>
						<?php foreach($service_posts as $term) : ?>
								<a href="<?php echo get_the_permalink($term) ?>" class="btn"><?php echo get_the_title($term) ?></a>
					<?php endforeach; ?>

					<?php  endif; ?>

				</section><!-- end section services -->


				<!-- second section family -->
				<section class="services-family">
					<h2 class="section-title">Family Servies</h2>

					<?php $family_posts = get_posts(array(
						'post_type' => 'service',
						'service_type' => 'family-services',
						'posts_per_page' => 10
					));

					if (! empty( $family_posts) && ! is_wp_error( $family_posts )) : ?>



                    <?php foreach($family_posts as $term) : ?>

                            <a href="<?php echo get_the_permalink($term) ?>" class="btn"><?php echo get_the_title($term) ?></a>
                <?php endforeach; ?>

                <?php  endif; ?>
				</section><!-- end family secion -->

				<!-- third section fees -->
				<section class="services-fees">
					<h2 class="section-title">Fees</h2>

					<div class="fees-top">
						<div class="fees-single"><?php echo CFS()->get( 'mffs_fees_individual', 15 ) ?></div>
						<div class="fees-family"><?php echo CFS()->get( 'mffs_fees_couples_family', 15 ) ?></div>
					</div>

					<div class="fees-bottom">
						<?php echo CFS()->get( 'mffs_fees_cant_afford', 15 ) ?>
					</div>

				</section>
				<!-- end seciton fees -->

				<!-- fourth section get counselling -->
				<section class="services-get">
					<h2 class="section-title">Get Counselling</h2>

					<p>Provide us with your email and we’ll send you the pre-intake form.</p>
					<input type="email">
					<a href="<?php echo CFS()->get( 'mffs_services_pre_intake_form', 15 ) ?>" download>Download</a>
					<p>Next, fill out the form then proceed to choose one of the following</p>

				</section>
				<!-- end forurth secton get counselling -->

				<!-- fifth section services info -->
				<section class="services-info">
					<h2 class="title-no-bg">Choose one of the following</h2>
					<div class="services-info-bubbles">
						<ul>
							<li>
								<i class="fas fa-phone"></i>
								<p>Text or call us</p>
                            	<a href="tel:123456789">778-321-3054</a>
							</li>
							<li>
								<i class="fas fa-fax"></i>
								<p>Fax us</p>
                            	<a href="tel:123456789">778-321-3054</a>
							</li>
							<li>
								<i class="far fa-envelope"></i>
								<p>Email us</p>
                            	<a href="tel:123456789">778-321-3054</a>
							</li>
							<li>
								<i class="fas fa-male"></i>
								<p>Drop in</p>
                            	<p>103 – 12827 76th Avenue, Surrey
									Fri. & Sun. 12pm-2pm for</p>
							</li>
						</ul>
					</div>

				</section>
				<!-- end fifth section services info -->





		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
