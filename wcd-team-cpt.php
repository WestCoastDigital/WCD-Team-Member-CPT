<?php

/*
Plugin Name: WCD Team Member CPT
Plugin URI: https://beaverlodgehq.com/downloads/wcd-team-cpt
Description: Adds a simple interface to create Team Members on your website
Version: 1.0
Author: West Coast Digital
Author URI: https://westcoastdigital.com.au
Text Domain: wcd-team
Domain Path: /languages
*/

if ( !post_type_exists( 'team' ) ) {
    
   require_once( '/includes/team-cpt.php' );
   require_once( '/includes/team-plugins.php' );
   require_once( '/includes/team-mb.php' );
    
}

if ( !taxonomy_exists( 'role' ) ) {
    
   require_once( '/includes/team-tax.php' );
    
}