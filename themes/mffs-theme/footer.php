<?php
/**
 * The template for displaying the footer.
 *
 * @package mffs_theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
                    <div class="support">
					    <p class="supporter-title">
                        Become a Supporter
                        </p>
                        <a class = "donate-button" href="#">Donate</a>
                    </div>
                    <address class="contact">
                    <h2>contact info</h2>
						<?php if ( is_active_sidebar( 'sidebar-contact-info' ) ) : ?>
							<div  class="widget-contact">
								<?php dynamic_sidebar( esc_html( 'sidebar-contact-info' ) ); ?>
							</div>
						<?php endif; ?>
					</div>
                    </address>
                    <div class="social-links">
                    <h2>Social Media</h2>
						<?php if ( is_active_sidebar( 'sidebar-custom' ) ) : ?>
							<div  class="widget-area">
								<?php dynamic_sidebar( esc_html( 'sidebar-custom' ) ); ?>
							</div>
						<?php endif; ?>
					</div>
                    <div class="news">
                        <p class="news-title">Newsletter</p>
                        <a href="<?php echo esc_url( home_url("/newsletter") ) ?>" class="news-subscribe">Click here to Subscribe!</a>
                    </div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

        <?php wp_footer(); ?>

	</body>
</html>
