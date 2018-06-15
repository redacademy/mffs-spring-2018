<?php
/**
 * The main template file.
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area about">
		<main id="main" class="site-main" role="main">

            <h2 class="title-no-bg">Frequently Asked Questions</h2>
             <ul class="faq-section-grid">

				    <?php
                    $loop = CFS()->get( 'mffs_faq_categories', 21 );                  
                    foreach ( $loop as $row ) { ?>
						<li class="faq-section-single">

                            <!-- title for each faq section -->
                            <h2 class="section-title"><?php echo $row['mffs_faq_section_title'];?></h2>
                            
                             <ul class="faq-single-grid">
                                <?php      
                                    $loop2 = $row['mffs_faq_questions_loop'];
                                    foreach ( $loop2 as $row2 ) { ?>
                                    <li class="faq-single-item">

                                        <!-- faq single question -->
                                        <p class="faq-question"><?php echo $row2['mffs_faq_question_single'];?></p>
                                        <!-- fa  single answer -->
                                        <p class="faq-answer"><?php echo $row2['mffs_faq_answer_single'];?></p>
                                    </li>
                                <?php } ?>
                            </ul>
						</li>
						<?php } ?>
                </ul>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>