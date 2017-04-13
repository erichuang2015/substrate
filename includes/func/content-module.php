<?php
/************************************************************************************
*** Module (Content Module)
	Post type for 'Module'. Create repeatable code blocks to use as shortcodes
************************************************************************************/
// Register Module Post Type
function content_module() {

	$labels = array(
		'name'                  => _x( 'Module', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Module', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Modules', 'text_domain' ),
		'name_admin_bar'        => __( 'Modules', 'text_domain' ),
		'archives'              => __( 'Module Archives', 'text_domain' ),
		'attributes'            => __( 'Module Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Module:', 'text_domain' ),
		'all_items'             => __( 'All Modules', 'text_domain' ),
		'add_new_item'          => __( 'Add New Module', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Module', 'text_domain' ),
		'edit_item'             => __( 'Edit Module', 'text_domain' ),
		'update_item'           => __( 'Update Module', 'text_domain' ),
		'view_item'             => __( 'View Module', 'text_domain' ),
		'view_items'            => __( 'View Modules', 'text_domain' ),
		'search_items'          => __( 'Search Module', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into module', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this module', 'text_domain' ),
		'items_list'            => __( 'Modules list', 'text_domain' ),
		'items_list_navigation' => __( 'Modules list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter modules list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Module', 'text_domain' ),
		'description'           => __( 'Modular content block to be used as shortcode in other content types', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor'),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-layout',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'module', $args );

}
add_action( 'init', 'content_module', 0 );
?>