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

            <!-- first section annual reports -->
			<section class="reports-info-img">

                <div class="reports-info">
                    <h2 class="section-title">Annual Reports</h2>
                    <p><?php echo wp_kses( CFS()->get( 'mffs_reports_info', 99 ), wp_kses_allowed_html( 'post' ) ) ?></p>
                </div>

                <div class="reports-img">
                <ul class="reports-img-grid">
                    <?php
                        $loop = CFS()->get( 'reports_images', 99 );
                            foreach ( $loop as $row ) { ?>
                            <li class="reports-image-single">
                                <img src="<?php echo esc_url( $row['mffs_report_image_single'] );?>" alt="">
                            </li>
                            <?php } ?>
                    </ul>
                </div>
            </section><!-- end reports annual -->

            <!-- second section latest report version -->
            <section class="reports-version-archive">

                <!-- reports bottom left side, img, info, download -->
                <div class="reports-version-latest">
                    <h2 class="section-title">Latest Version</h2>
                    <div class="reports-img-dl">
                       <div class="reports-image">
                            <img src="<?php echo esc_url( CFS()->get( 'mffs_reports_image', 99 ) ) ?>" alt="">
                        </div>
                        <div class="reports-dl">
                            <p><?php echo wp_kses( CFS()->get( 'mffs_reports_archive_info', 99 ), wp_kses_allowed_html( 'post' ) ) ?></p>
                            <a href="<?php echo esc_url( CFS()->get( 'mffs_annual_report', 99 ) ) ?>" download>Download</a>
                        </div>
                    </div>
                </div>

                <!-- reports bottom right side, reports archive -->
                <div class="reports-archive">
                    <h2 class="section-title">Archives</h2>

                    <ul class="report-archive-grid">
                    <?php
                        $loop = CFS()->get( 'mffs_report_archive', 99 );
                            foreach ( $loop as $row ) { ?>
                            <li class="reports-single">
                                <a href="<?php echo esc_url( $row['mffs_archive_report_single'] );?>">- <?php echo esc_html( $row['mffa_archive_report_title'] );?></a>
                            </li>
                            <?php } ?>
                    </ul>
                </div>
            </section><!-- end reports version -->

                     <?php endwhile;
			else :
		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>