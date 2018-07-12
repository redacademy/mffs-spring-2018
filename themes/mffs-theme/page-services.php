<?php
/**
 * The main template file.
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area services-all-container">
		<main id="main" class="site-main" role="main">
<!-- outputs the data from the custom post type services, category (taxonomy: mental-well-being) -->
				<h2 class="title-no-bg">Services <span class = "index-service">Index</span></h2>


				<div class="fee-service-container">
		<!-- end of services fee wrapper -->
				</div>
				<!-- end of fee-service-container -->
						<div class="visible-desktop no-turn-down">
							<!-- hidden in mobile size -->
							<h2>We turn no one down!</h2>
							<p>Can't afford counselling fees?<br>We offer free and low cost counselling with proof of income.</p>
						</div>
					</section>

				<!-- end seciton fees -->
				<!-- fourth section get counselling -->
				<section class="services-get">
					<h2 class="section-title">Get Counselling</h2>
					<section class="visible-desktop councelling-wrapper">
						<div class="counselling-download">
							<!-- counselling content that should only be visible in desktop view -->
							<img class="steps-image" src="<?php echo esc_url( get_template_directory_uri() )?>/assets/icons/Stepper.svg" alt="counselling steps">
							<div class="download-frm-btn-wrapper">
								<p>Download and fill out the pre-intake form.</p>
								<div class="form-btn-wrapper">
									<a href="<?php echo esc_url( CFS()->get( 'mffs_services_pre_intake_form', 15 ) )?>" download>Download Form</a>
									<a href="<?php echo esc_url( CFS()->get( 'mffs_services_terms_of_service', 15 ) )?>" download>Terms of Service</a>
								</div>
								<p>* by downloading this form you agree to our terms of service</p>
							</div>
						</div>
					</section>

					<p class="mobile">Provide us with your email and we’ll send you the pre-intake form.</p>
					<!-- only visible in mobile -->
					<div class="email-counseling mobile">
						<input class="mobile" type="email" placeholder="example@gmail.com" onfocus="this.value=''" onblur="this.value=''">
						<a class="mobile" href="<?php echo esc_url( CFS()->get( 'mffs_services_pre_intake_form', 15 ) )?>" download>Submit</a>
					</div>
					<p class="mobile">Next, fill out the form then proceed to choose one of the following</p>

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
								<p class="mobile">Drop in</p>
                            	<p class="mobile">103 – 12827 76th Avenue, Surrey
									Fri. & Sun. 12pm-2pm for</p>
								<p class="visible-desktop services-last-para">Come to an intake drop-in session (Fridays and Sundays from 12-2 PM at our main office: 103 – 12827 76th Avenue, Surrey) and you will have the opportunity to be seen immediately.</p>
							</li>
						</ul>
					</div>

				</section>
				<!-- end fifth section services info -->
				<section class="visible-desktop referrals-wrapper">
					<!-- referral -->
					<h2>Referrals</h2>
					<p class="referral-form">Download and fill out the referral form, then fax to us. </p>
					<div class="download-btn-wrapper">
						<a href="<?php echo esc_url( CFS()->get( 'mffs_services_pre_intake_form', 15 ) )?>" class="form-download" download>Download Form</a>
						<a href="<?php echo esc_url( CFS()->get( 'mffs_services_terms_of_service', 15 ) )?>" class="refrral-terms" download>Terms of Service</a>
					</div>
					<p class="fax-icon"><i class="fas fa-fax"></i><span class="fax-no">Fax to: 778-732-0448</span></p>
					<p class="terms-service">* by downloading this form you agree to our terms of service</p>
				</section>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
