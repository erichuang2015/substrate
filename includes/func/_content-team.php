<?php
/************************************************************************************
*** Team
	Post type for 'projects'
************************************************************************************/
// Register Team Post Type
function team() {

	$labels = array(
		'name'                  => _x( 'Team', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Team', 'text_domain' ),
		'name_admin_bar'        => __( 'Team', 'text_domain' ),
		'archives'              => __( 'Member Archives', 'text_domain' ),
		'attributes'            => __( 'Member Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Member:', 'text_domain' ),
		'all_items'             => __( 'All Members', 'text_domain' ),
		'add_new_item'          => __( 'Add New Member', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Member', 'text_domain' ),
		'edit_item'             => __( 'Edit Member', 'text_domain' ),
		'update_item'           => __( 'Update Member', 'text_domain' ),
		'view_item'             => __( 'View Member', 'text_domain' ),
		'view_items'            => __( 'View Members', 'text_domain' ),
		'search_items'          => __( 'Search Member', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Headshot', 'text_domain' ),
		'set_featured_image'    => __( 'Set headshot image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove headshot image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as headshot image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into member', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this member', 'text_domain' ),
		'items_list'            => __( 'Members list', 'text_domain' ),
		'items_list_navigation' => __( 'Members list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter members list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
		'rewrite' 			  	=> array( 'with_front' => false),
	);
	register_post_type( 'Team', $args );

}
add_action( 'init', 'team', 0 );
?>
