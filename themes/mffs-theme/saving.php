	<?php $service_posts = get_posts(array(
									'post_type' => 'service',
									'service_type' => 'mental-well-being',
									'posts_per_page' => 10
								));
								if (! empty( $service_posts) && ! is_wp_error( $service_posts )) : ?>
								<?php foreach($service_posts as $term) : ?>
										<a href="<?php echo esc_url( get_the_permalink($term) ) ?>" class="btn"><?php echo esc_html( get_the_title($term) ) ?></a>
							<?php endforeach; ?>

							<?php  endif; ?>


	<?php $family_posts = get_posts(array(
									'post_type' => 'service',
									'service_type' => 'family-services',
									'posts_per_page' => 10
								));

								if (! empty( $family_posts) && ! is_wp_error( $family_posts )) : ?>
								<?php foreach($family_posts as $term) : ?>

										<a href="<?php echo esc_url( get_the_permalink($term) ) ?>" class="btn"><?php echo esc_html( get_the_title($term) ) ?></a>
							<?php endforeach; ?>
							<?php  endif; ?>



					<!-- first section mental well being -->

					<div class="service-list-info-top">
						<?php echo wp_kses( CFS()->get( 'mffs_services_list_info_top', 15 ), wp_kses_allowed_html( 'post' ) ) ?>
					</div>

					<div class="whole-service-grid">
						<div class="mental-wb-wrapper">
						<h2 class="section-title"><?php echo esc_html( CFS()->get( 'mffs_services_list_top_left_title', 15 ) ) ?></h2>
						<section class="services-mwb">
							<?php echo wp_kses( CFS()->get( 'mffs_services_list_top_left', 15 ), wp_kses_allowed_html( 'post' ) ) ?>
						</section><!-- end section services -->
						</div>
						<!-- second section family -->
						<div class="family-serv-wrapper">
							<h2 class="section-title"><?php echo esc_html( CFS()->get( 'mffs_services_list_top_right_title', 15 ) ) ?></h2>
							<section class="services-family">
								<?php echo wp_kses( CFS()->get( 'services_list_top_right', 15 ), wp_kses_allowed_html( 'post' ) ) ?>
							</section><!-- end family secion -->
						</div>
						<!-- end of family services wrapper -->
					</div>
					<!-- end of whole services grid -->
					<!-- third section fees -->
					<div class="services-fee-wrapper">
						<section class="services-fees">
								<h2 class="section-title">Fees<span class= "asterisk">*</span></h2>
								<div class="fees-top">
									<div class="fees-single"><?php echo wp_kses( CFS()->get( 'mffs_fees_individual', 15 ), wp_kses_allowed_html( 'post' ) ) ?></div>
									<div class="fees-family"><?php echo wp_kses( CFS()->get( 'mffs_fees_couples_family', 15 ), wp_kses_allowed_html( 'post' ) ) ?></div>
								</div>
								<div class="fees-bottom">
									<?php echo wp_kses( CFS()->get( 'mffs_fees_cant_afford', 15 ), wp_kses_allowed_html( 'post' ) ) ?>
								</div>
						</section>
					</div>
						



						<div class="popup-inner">
                        <i class="fas fa-heart"></i>
                        <p>Thank you very much for your support!</p>
                        <p>You will be redirected to canada helps.org page now.</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/gifs/loadingdots.gif" alt="">
                        <a href="https://www.canadahelps.org/en/charities/Moving-Forward-Family-Services-Society/" target="_blank">Click here if the browser does not refresh</a>
                    </div>
