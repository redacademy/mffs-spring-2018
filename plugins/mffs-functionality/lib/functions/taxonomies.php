<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

function inhabitent_register_service() {

	$labels = array(
		'name'                       => 'Service Types',
		'singular_name'              => 'Service Type',
		'menu_name'                  => 'Service Type',
		'all_items'                  => 'All Service Types',
		'parent_item'                => 'Parent Service Type',
		'parent_item_colon'          => 'Parent Service Type:',
		'new_item_name'              => 'New Service Type Name',
		'add_new_item'               => 'Add New Service Type',
		'edit_item'                  => 'Edit Service Type',
		'update_item'                => 'Update Service Type',
		'view_item'                  => 'View Service Type',
		'separate_items_with_commas' => 'Separate Service types with commas',
		'add_or_remove_items'        => 'Add or remove Service types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Service Types',
		'search_items'               => 'Search Service Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Service types list',
		'items_list_navigation'      => 'Service types list navigation',
	);
	$rewrite = array(
		'slug'                       => 'service-type',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'service_type', array( 'service' ), $args );

}
add_action( 'init', 'inhabitent_register_service', 0 );
