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
                        <p>
                        Contact us
                        </p>
                        <div class="tel-info">
                            <i class="fas fa-phone"></i>
                            <a href="tel:123456789">778-321-3054</a>
                        </div>
                        <div class="contact-address">
                        <i class="fas fa-map-marker-alt"></i>
                            <p class="address">103 – 12827 76th Avenue Surrey, BC</p>
                        </div>
                    </address>
                    <div class="news">
                        <p class="news-title">Newsletter</p>
                        <a href="<?php echo home_url("/newsletter") ?>" class="news-subscribe">Click here to Subscribe!</a>
                    </div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
