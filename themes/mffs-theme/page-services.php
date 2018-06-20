<?php
/**
 * The main template file.
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area services-fees-container">
		<main id="main" class="site-main" role="main">
<!-- outputs the data from the custom post type services, category (taxonomy: mental-well-being) -->
				<h2 class="title-no-bg">Services</h2>


				<!-- first section mental well being -->
				<h2 class="section-title">Mental well-being</h2>
				<section class="services-mwb">
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
				<h2 class="section-title">Family Servies</h2>
				<section class="services-family">
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

					<div class="desktop">
						<h2>We turn no one down</h2>
						<p>Can't afford counselling fees? We offer free and low cost counselling with proof of income.</p>
					</div>

				</section>
				<!-- end seciton fees -->
				<!-- fourth section get counselling -->
				<section class="services-get">
					<h2 class="section-title">Get Counselling</h2>

					<p>Provide us with your email and we’ll send you the pre-intake form.</p>
					<div class="email-counseling">
						<input type="email" placeholder="example@gmail.com" onfocus="this.value=''" onblur="this.value=''">
						<a href="<?php echo CFS()->get( 'mffs_services_pre_intake_form', 15 ) ?>" download>Submit</a>
					</div>
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
                            	<a href="mailto:counsellor@
									movingforwardfamilyservices.com" >counsellor@movingforwardfamily<br>services.com</a>
							</li>
							<li>
								<i class="fas fa-user"></i>
								<p>Drop in</p>
                            	<p>103 – 12827 76th Avenue, Surrey
									Fri. & Sun. 12pm-2pm for</p>
								<p class="desktop-drop-in-text">Come to an intake drop-in session (Fridays and Sundays from 12-2 PM at our main office: 103 – 12827 76th Avenue, Surrey) and you will have the opportunity to be seen immediately.</p>
</p>
							</li>
						</ul>
					</div>

				</section>
				<!-- end fifth section services info -->





		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
