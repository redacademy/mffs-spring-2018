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
					<h2 class="story-title">Donations that help change peoples lives</h2>
					<p>Your donation will help provide a free and low cost counselling for someone in need.</p>
				</div>
			</section> <!-- end stories -->

			<!-- second section with impact circles stats -->
			<section class="impact">
				<h2 class="section-title">the<span> mffs </span> Impact</h2>
				<ul class="impact-grid">
					<li><?php echo CFS()->get( 'mffs_clients_served', 12 ); ?></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
<?php
				$loop = CFS()->get( 'mffs_impact', 12 );
foreach ( $loop as $row ) {
    echo $row['	mffs_stat_value'];
    echo $row['	mffs_stat_title'];
} 

?>
			</section> <!-- end impact section -->

			<!-- third section inititiaves-->
			<section class="initiatives">
				<h2 class="section-title">Our Initiatives</h2>

				<div class="section-wrapper">
					<div class="initiatives-img">
						<!-- place inititaves photo here -->
					</div>
					<p>No one should be turned away from quality counselling services because of lack of funds or long waitlists. That is why we aim to provide accessible and affordable counselling by the support of you donation.</p>
				</div>
			</section><!-- end inititiaves -->

			<!-- fourth section mission -->
			<section class="mission">
				<h2 class="section-title">Our Mission</h2>

				<div class="section-wrapper">
					<div class="mission-img">
						<div class="green-img-bar">

						</div>
						<img src="<?php echo get_template_directory_uri()?>/assets/icons/if_Child-family-daughter-son-mother-fahter-grandfather-grandmother_3272468.svg" alt="">
					</div>
					<p>Moving Forward Family Services uses a client-centered, anti-oppressive approach to provide safe, accessible, affordable counselling to all.</p>
				</div>

			</section>	<!-- end mission -->

			<!-- fifth section languages -->
			<section class="languages">
				<h2 class="section-title">We Speak Your Languages</h2>
				<h3>Our services are offered in:</h3>

				<ul>
					<li>English</li>
					<li>Arabic</li>
					<li>Bengali</li>
					<li>Hindi</li>
					<li>Russian</li>
					<li>Farsi</li>
					<li>Korean</li>
					<li>Cantonese</li>
					<li>Urdu</li>
					<li>Spanish</li>
					<li>Mandarin</li>
					<li>Ukrainian</li>
				</ul>

				<div class="language-img">
					<!-- insert language pic here -->
				</div>

			</section><!-- end languages -->


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
