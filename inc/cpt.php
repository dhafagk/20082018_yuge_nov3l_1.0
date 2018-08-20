<?php

function penerjemah() {

	$labels = array(
		'name'                       => _x( 'Penerjemah', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Penerjemah', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Penerjemah', 'text_domain' ),
		'all_items'                  => __( 'All Penerjemah', 'text_domain' ),
		'parent_item'                => __( 'Parent Penerjemah', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Penerjemah:', 'text_domain' ),
		'new_item_name'              => __( 'New Penerjemah Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Penerjemah', 'text_domain' ),
		'edit_item'                  => __( 'Edit Penerjemah', 'text_domain' ),
		'update_item'                => __( 'Update Penerjemah', 'text_domain' ),
		'view_item'                  => __( 'View Penerjemah', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Penerjemah with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Penerjemah', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Penerjemah', 'text_domain' ),
		'search_items'               => __( 'Search Penerjemah', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'penerjemah', 'post', $args );

}
add_action( 'init', 'penerjemah', 0 );

function editor() {

	$labels = array(
		'name'                       => _x( 'Editor', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Editor', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Editor', 'text_domain' ),
		'all_items'                  => __( 'All Editor', 'text_domain' ),
		'parent_item'                => __( 'Parent Editor', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Editor:', 'text_domain' ),
		'new_item_name'              => __( 'New Editor Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Editor', 'text_domain' ),
		'edit_item'                  => __( 'Edit Editor', 'text_domain' ),
		'update_item'                => __( 'Update Editor', 'text_domain' ),
		'view_item'                  => __( 'View Editor', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Editor with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Editor', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Editor', 'text_domain' ),
		'search_items'               => __( 'Search Editor', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'					 => true,
	);
	register_taxonomy( 'editor', 'post', $args );

}
add_action( 'init', 'editor', 0 );

function novel() {

	$labels = array(
		'name'                => _x( 'Novel', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Novel', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Novel', 'text_domain' ),
		'name_admin_bar'      => __( 'Novel', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Novel :', 'text_domain' ),
		'all_items'           => __( 'All Novel', 'text_domain' ),
		'add_new_item'        => __( 'Add New Novel', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Novel', 'text_domain' ),
		'edit_item'           => __( 'Edit Novel', 'text_domain' ),
		'update_item'         => __( 'Update Novel', 'text_domain' ),
		'view_item'           => __( 'View Novel', 'text_domain' ),
		'search_items'        => __( 'Search Novel', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Novel', 'text_domain' ),
		'description'         => __( 'Novel', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-book-alt',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'novel', $args );

}
add_action( 'init', 'novel', 0 );

?>