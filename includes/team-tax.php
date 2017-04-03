<?php

if ( ! function_exists( 'wcd_team_role_taxonomy' ) ) {

// Register Custom Taxonomy
function wcd_team_role_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Positions', 'Taxonomy General Name', 'wcd-team' ),
		'singular_name'              => _x( 'Position', 'Taxonomy Singular Name', 'wcd-team' ),
		'menu_name'                  => __( 'Position', 'wcd-team' ),
		'all_items'                  => __( 'All Positions', 'wcd-team' ),
		'parent_item'                => __( 'Parent Position', 'wcd-team' ),
		'parent_item_colon'          => __( 'Parent Position:', 'wcd-team' ),
		'new_item_name'              => __( 'New Position', 'wcd-team' ),
		'add_new_item'               => __( 'Add New Position', 'wcd-team' ),
		'edit_item'                  => __( 'Edit Position', 'wcd-team' ),
		'update_item'                => __( 'Update Position', 'wcd-team' ),
		'view_item'                  => __( 'View Position', 'wcd-team' ),
		'separate_items_with_commas' => __( 'Separate positions with commas', 'wcd-team' ),
		'add_or_remove_items'        => __( 'Add or remove positions', 'wcd-team' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wcd-team' ),
		'popular_items'              => __( 'Popular Positions', 'wcd-team' ),
		'search_items'               => __( 'Search Positions', 'wcd-team' ),
		'not_found'                  => __( 'Position Not Found', 'wcd-team' ),
		'no_terms'                   => __( 'No Positions', 'wcd-team' ),
		'items_list'                 => __( 'Positions list', 'wcd-team' ),
		'items_list_navigation'      => __( 'Positions list navigation', 'wcd-team' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'role', array( 'team' ), $args );

}
add_action( 'init', 'wcd_team_role_taxonomy', 0 );

}