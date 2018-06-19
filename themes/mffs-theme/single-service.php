<?php
/**
 * The template for displaying all single posts.
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area services-fees-container">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<nav>
			 <a href="<?php echo home_url("/services") ?>">Services</a>
			 <i class="fas fa-caret-right"></i>
			 <a href="<?php echo the_permalink() ?>"><?php echo the_title()?></a>
		</nav>

		<section class="single-service-content">
			<h2 class="section-title"><?php echo the_title() ?></h2>
			<?php echo the_content()?>
		</section>

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
							</li>
						</ul>
					</div>

				</section>
				<!-- end fifth section services info -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
