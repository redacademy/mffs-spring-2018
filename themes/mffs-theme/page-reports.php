<?php
/**
 * The main template file.
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area about">
		<main id="main" class="site-main" role="main">

            <!-- first section annual reports -->
			<section class="reports-info-img">
                <div class="reports-info">
                <h2 class="section-title">Annual Reports</h2>
                <p></p>
                </div>
                <div class="reports-img">
                </div>
            </section><!-- end reports annual -->

            <!-- second section latest report version -->
            <section class="reports-version-archive">

                <div class="reports-version-latest">
                    <h2 class="section-title">Latest Version</h2>
                </div>

                <div class="reports-archive">
                    <h2 class="section-title">Archives</h2>

                </div>
            </section><!-- end reports version -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>