<?php
/**
*Plugin Name: MFFS Login
*Plugin URI: https://movingforwardfamilies.com/
*Description: Custom MFFS WP Login
*Version: 1.0.0
*Author: Jason Murphy
*/

if ( ! function_exists( 'add_action' ) ) {
	echo 'Not allowed!';
	exit();
}



/**
 * Hooks: Actions & Filters
 */
add_action('login_head', 'mffs_login_logo');
add_filter('login_headerurl', 'mffs_login_logo_url');
add_filter('login_headertitle', 'mffs_login_title');



function mffs_login_logo(){
    $login_logo = plugin_dir_url( __FILE__ ) . 'images/MFFSLOGO.svg';

    echo '<style>
        .login{
            background: #bfccd0;
        }

        .login h1 a {
            background: url(' . $login_logo . ') no-repeat !important;
            background-size: 320px 100px !important;
            width: 320px !important;
            height: 80px !important;
        }

        .login form input[type=checkbox], .login input[type=text], .login form input[type=password]{
            color: #245865;
        }

        .login form input[type=checkbox]:focus, .login input[type=text]:focus, .login form input[type=password]:focus{
            border-color: #245865;
            box-shadow: 0 0 2px #245865;
        }

        .login form input[type=submit], .login form input[type=submit]:focus, .login form input[type=submit]:hover{
            background: #245865;
            border-color: #245865;
            box-shadow: 2px 2px #4c6f7b;
            text-shadow: none;
        } 

    </style>';
}

function mffs_login_logo_url($url){
    return home_url();
}

function mffs_login_title(){
    return 'MFFS Login';
}
