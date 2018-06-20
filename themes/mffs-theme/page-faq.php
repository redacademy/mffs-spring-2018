<?php
/**
 * The main template file.
 *
 * @package mffs_theme
 */

get_header(); ?>

	<div id="primary" class="content-area faq">
		<main id="main" class="site-main" role="main">

            <?php 
			if(have_posts()):
			while ( have_posts() ) : the_post(); ?>

            <!-- container for all faq content -->
            <div class="faq-main-content">

                <h2 class="title-no-bg">Frequently Asked Questions</h2>

                <!-- grid section for for faq titles -->
                <ul class="faq-section-grid">

				    <?php
                    $loop = CFS()->get( 'mffs_faq_categories', 21 );
                    $n = 1;                 
                    foreach ( $loop as $row ) { ?>

                    <!-- list containing title for each section -->
						<li class="faq-section-single">

                            <!-- title for each faq section -->
                            <h2 class="section-title"><?php echo $n++;?>. <?php echo $row['mffs_faq_section_title'];?></h2>

                            <!-- list for single questions/ answers -->
                            <ul class="faq-single-grid">

                                <?php      
                                    $loop2 = $row['mffs_faq_questions_loop'];
                                    $q = 1;
                                    foreach ( $loop2 as $row2 ) { ?>
                                
                                <!-- container for single questions/ answer -->
                                

                                    <li class="faq-single-item">
                                        
                                        <!-- yellow Q bubble Q1, Q2... -->
                                        <div class="faq-bubble">
                                            <p>Q <?php echo $q++; ?></p>
                                        </div>

                                        <!-- faq single question title -->
                                        <div class="faq-qest-ans-wrapper">
                                        <h2 class="faq-question"><?php echo $row2['mffs_faq_question_single'];?></h2>

                                        <!-- faq single answer -->
                                        <p class="faq-answer"><?php echo $row2['mffs_faq_answer_single'];?></p>
                                        </div>
                                    </li> <!-- end faq single item -->
                                <?php } ?>
                                
                            </ul><!-- end faq single grid -->
						</li><!-- end faq section single -->
						<?php } ?>
                </ul> <!-- end faq section grid -->
            </div><!-- enf faq main content -->
            <?php endwhile;
            else :
            endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>