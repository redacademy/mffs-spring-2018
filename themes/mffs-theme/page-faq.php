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

            <h2 class="title-no-bg">Frequently Asked Questions</h2>
             <ul class="faq-section-grid">

				    <?php
                    $loop = CFS()->get( 'mffs_faq_categories', 21 );
                    $n = 1;                 
                    foreach ( $loop as $row ) { ?>
						<li class="faq-section-single">

                            <!-- title for each faq section -->
                            <h2 class="section-title"><?php echo $n++;?>.<?php echo $row['mffs_faq_section_title'];?></h2>

                            <ul class="faq-single-grid">
                                <?php      
                                    $loop2 = $row['mffs_faq_questions_loop'];
                                    $q = 1;
                                    foreach ( $loop2 as $row2 ) { ?>
                            <div class="faq-content">
                                    <li class="faq-single-item">
                                        <div class="faq-bubble">
                                            <p>Q <?php echo $q++; ?></p>
                                        </div>
                                        <!-- faq single question title -->
                                        <h2 class="faq-question"><?php echo $row2['mffs_faq_question_single'];?></h2>
                                        <!-- faq single answer -->
                                        <p class="faq-answer"><?php echo $row2['mffs_faq_answer_single'];?></p>
                                    </li>
                                <?php } ?>
                            </ul>
                            </div>
						</li>
						<?php } ?>
                </ul>
                <?php endwhile;
			else :
		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>