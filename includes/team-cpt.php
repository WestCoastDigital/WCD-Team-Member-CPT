<?php

if ( ! function_exists('wcd_team_custom_post_type') ) {

// Register Custom Post Type
function wcd_team_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'wcd-team' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'wcd-team' ),
		'menu_name'             => __( 'Team Members', 'wcd-team' ),
		'name_admin_bar'        => __( 'Team Member', 'wcd-team' ),
		'archives'              => __( 'Team Member Archives', 'wcd-team' ),
		'attributes'            => __( 'Team MemberAttributes', 'wcd-team' ),
		'parent_item_colon'     => __( 'Parent Team Member:', 'wcd-team' ),
		'all_items'             => __( 'All Team Members', 'wcd-team' ),
		'add_new_item'          => __( 'Add New Team Member', 'wcd-team' ),
		'add_new'               => __( 'Add Team Member', 'wcd-team' ),
		'new_item'              => __( 'New Team Member', 'wcd-team' ),
		'edit_item'             => __( 'Edit Team Member', 'wcd-team' ),
		'update_item'           => __( 'Update Team Member', 'wcd-team' ),
		'view_item'             => __( 'View Team Member', 'wcd-team' ),
		'view_items'            => __( 'View Team Members', 'wcd-team' ),
		'search_items'          => __( 'Search Team Member', 'wcd-team' ),
		'not_found'             => __( 'Team Member not found', 'wcd-team' ),
		'not_found_in_trash'    => __( 'Team Member not found in Trash', 'wcd-team' ),
		'featured_image'        => __( 'Profile Image', 'wcd-team' ),
		'set_featured_image'    => __( 'Set profile image', 'wcd-team' ),
		'remove_featured_image' => __( 'Remove profile image', 'wcd-team' ),
		'use_featured_image'    => __( 'Use as profile image', 'wcd-team' ),
		'insert_into_item'      => __( 'Insert into Team Member', 'wcd-team' ),
		'uploaded_to_this_item' => __( 'Uploaded to Team Member', 'wcd-team' ),
		'items_list'            => __( 'Team Members list', 'wcd-team' ),
		'items_list_navigation' => __( 'Teas m Memberlist navigation', 'wcd-team' ),
		'filter_items_list'     => __( 'Filter Team Members list', 'wcd-team' ),
	);
	$args = array(
		'label'                 => __( 'Team Member', 'wcd-team' ),
		'description'           => __( 'Adds a simple interface to create Team Members on your website', 'wcd-team' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'wcd_team_custom_post_type', 0 );

}