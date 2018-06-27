<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package mffs_theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function mffs_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'mffs_body_classes' );


// Adding the SVG Format to the Allowed File Types

function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action( 'upload_mimes', 'add_file_types_to_uploads' );


// Remove Admin Backend Menus for all users except admin

function remove_menus () {
	global $menu;
	$user = wp_get_current_user();
		if (!current_user_can('administrator')) { // Is not administrator,
			$restricted = array(__('Posts'), __('Links'),__('Appearance'), __('Tools'), __('Users'), __('Settings'), __('Plugins'));
			end ($menu);
			while (prev($menu)){
				$value = explode(' ',$menu[key($menu)][0]);
				if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
			}
		}

		// remove_menu_page( 'edit.php?post_type=cfs' );
	}
	add_action('admin_menu', 'remove_menus');
