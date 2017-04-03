<?php

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

if ( ! function_exists( 'wcd_team_role_taxonomy' ) ) {

// Register required plugins
function wcd_team_register_required_plugins() {

	$plugins = array(

		array(
			'name'      => 'Meta Box',
			'slug'      => 'meta-box',
			'required'  => true,
		),

	);

	$config = array(
		'id'           => 'wcd-team',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'plugins.php', 
		'capability'   => 'manage_options',
		'has_notices'  => true, 
		'dismissable'  => false,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '', 
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'wcd_team_register_required_plugins' );
    
}