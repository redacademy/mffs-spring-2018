<?php
/**
 * The main template file.
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area donate-page">
		<main id="main" class="site-main" role="main">

        <?php
			if(have_posts()):
            while ( have_posts() ) : the_post(); ?>

            <div class="about-view-reports">
                <h2>Support Us  |</h2>
                <a href="<?php echo esc_url( home_url("/reports") ) ?>">View Annual Reports</a>
		    </div>

            <div class="donate-desktop-flex">
                            <!-- fisrt section donate testimonials -->
                <section class="donate-testimonials">
                    <div class="main-carousel">

                        <?php
                        $loop = CFS()->get( 'mffs_donate_carousel');
                        foreach ( $loop as $row ) { ?>

                            <div class="carousel-cell">
                                <img class="carousel-image" src="<?php echo esc_url( $row['mffs_donate_carousel_image'] );?>" alt="">
                                <p><?php echo wp_kses( $row['mffs_donate_carousel_text'], wp_kses_allowed_html( 'post' ) );?></p>
                            </div>

                            <?php } ?>

                    </div>
                </section> <!-- end donate testimonials -->

                <!-- second section donate button wth dropdown -->
                <section class="donate-dropdown-button">
                    <h2 class="title-no-bg">Hello What is going on here!!!</h2>
                    <select>
                        <ul>
                            <?php
                                $loop = CFS()->get( 'mffs_donation_drop_down_loop', 23);
                                    foreach ( $loop as $row ) { ?>
                                    <li>
                                        <div class="donate-dropdown-menu"><option><?php echo esc_html( $row['mffs_donation_drop_down_selection'] );?></option></div>
                                    </li>
                            <?php } ?>
                        </ul>
                    </select>
                    <a class ="donate-button" id="donate-redirect" href="https://www.canadahelps.org/en/charities/Moving-Forward-Family-Services-Society/" target="_blank">Donate</a>

                    <p class="donate-redirect">You will be re-direcetd to CanadaHelps.org</p>


                    <div class="popup-inner">
                        <i class="fas fa-heart"></i>
                        <p>Thank you very much for your support!</p>
                        <p>You will be redirected to canada helps.org page now.</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/gifs/loadingdots.gif" alt="">
                        <a href="https://www.canadahelps.org/en/charities/Moving-Forward-Family-Services-Society/" target="_blank">Click here if the browser does not refresh</a>
                    </div>


                </section> <!-- end donate dropdown button -->
            </div>

            <div class="donate-desktop-impact">
                <section class="impact">
				<h2 class="section-title">Our Impact</h2>
				<!-- yellow stat bubbles -->
				<div class="impact-circles">
                    <ul class="impact-grid">
                    <?php
                        $loop = CFS()->get( 'mffs_impact', 12);
                            foreach ( $loop as $row ) { ?>
                            <li>
                                <div class="circle">
                                    <span class='numscroller impact-value' data-min='1' data-max='<?php echo esc_html( $row['mffs_stat_value'] );?>' data-delay='10' data-increment='5'><?php echo esc_html( $row['mffs_stat_value'] );?></span>
                                    <div class="impact-title"><?php echo esc_html( $row['mffs_stat_title'] );?></div>
                                </div>
                            </li>
                            <?php } ?>
                    </ul>
				</div>
			</section> <!-- end impact section -->
            </div>

            <!-- third section where donation money is going -->
            <section class="donate-where">
                <h2 class="section-title">Where is your money going?</h2>

                <ul class="donate-where-grid">
				<?php
					$loop = CFS()->get( 'mffs_donation_reason_loop', 23 );
						foreach ( $loop as $row ) { ?>
						<li class="donate-where-single">
                            <img src="<?php echo esc_url( $row['mffs_donation_img_single'] );?>" alt="">
                            <h2 class="title-no-bg"><?php echo esc_html( $row['mffs_donation_single_title'] );?></h2>
							<P><?php echo wp_kses( $row['mffs_donation_single_text'], wp_kses_allowed_html( 'post' ) );?></P>
						</li>
						<?php } ?>
                </ul>

                <!-- donate annual reports button -->
                <a href="<?php echo esc_url( CFS()->get( 'mffs_donation_annual_report', 23 ) ) ?>" download>View Annual Reports</a>
            </section><!-- end donate where -->

            <!-- fourth section donation help -->
            <section class="donate-help">
                <h2 class="section-title">How else can you help?</h2>
                <h2 class="title-no-bg"> <?php echo esc_html( CFS()->get( 'mffs_donation_help_title', 23 ) ) ?> </h2>

                <a href="<?php echo esc_url( CFS()->get( 'mffs_donation_partner_url', 23 ) ) ?>" target="_blank">
                    <img src="<?php echo esc_url( CFS()->get( 'mffs_donation_partner_img', 23 ) ) ?>" alt=""/>
                </a>
                <?php echo wp_kses( CFS()->get( 'mffs_donation_partner_description_text', 23 ), wp_kses_allowed_html( 'post' ) ) ?>
            </section><!-- end donate help -->

            <!-- fifthe section donation info -->
            <section class="donate-info">
                <ul class="donate-info-grid">
				<?php
					$loop = CFS()->get( 'mffs_donation_info_loop', 23 );
						foreach ( $loop as $row ) { ?>
						<li class="donate-info-single">
                            <h2 class="title-no-bg"><?php echo esc_html( $row['mffs_donation_info_title'] );?></h2>
		                    <P><?php echo wp_kses( $row['mffs_donation_info_text'], wp_kses_allowed_html( 'post' ) );?></P>
						</li>
						<?php } ?>
                </ul>
            </section><!-- end donate info -->

            <section class="donate-desktop-help">
                <h2 class="help-title">How else can you help?</h2>
                <div class="donate-desktop-help-grid-top">
                    <h2 class="count">Donate while shopping for groceries!</h2>
                    <?php echo wp_kses( CFS()->get( 'mffs_desktop_donation_partner_description_text', 23 ), wp_kses_allowed_html( 'post' ) ) ?>
                    <a href="<?php echo esc_url( CFS()->get( 'mffs_donation_partner_url', 23 ) ) ?>" target="_blank">
                        <img src="<?php echo esc_url( CFS()->get( 'mffs_donation_partner_img', 23 ) ) ?>" alt=""/>
                    </a>
                </div>
                <div class="donate-desktop-help-grid-bottom">
                    <ul class="donate-info-grid">
                        <?php
                        $loop = CFS()->get( 'mffs_donation_info_loop', 23 );
                            foreach ( $loop as $row ) { ?>
                            <li class="donate-info-single">
                                <h2 class="title-no-bg count"><?php echo esc_html( $row['mffs_donation_info_title'] );?></h2>
                                <?php echo wp_kses( $row['mffs_donation_info_text'], wp_kses_allowed_html( 'post' ));?>
                            </li>
                            <?php } ?>
                    </ul>
                </div>

            </section>

            	<?php endwhile;
			else :
		endif;
		?>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>