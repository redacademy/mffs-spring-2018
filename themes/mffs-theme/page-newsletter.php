<?php
/**
 * The template for displaying archive pages.
 *
 * @package mffs_theme
 */

 ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <!-- <div class="newsletter-form">
                <form class="mc-email-form">
                <input class="mc-input "type="email" name="email-form" value="Email"><br>
                <input class="mc-submit" type="submit" value="Submit">
                <input class="mc-back" type="button" value="Back" onclick="history.back(-1)" />
            </form> -->

            <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
            <style type="text/css">
                #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div id="mc_embed_signup">
            <form action="https://movingforwardfamilyservices.us18.list-manage.com/subscribe/post?u=677bf48dbd8eabcb58137d396&amp;id=669ad81c9a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_677bf48dbd8eabcb58137d396_669ad81c9a" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
            </form>
            </div>
            <input class="mc-back" type="button" value="Back" onclick="history.back(-1)" />

            <!--End mc_embed_signup-->
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

