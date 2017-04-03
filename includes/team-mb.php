<?php

if ( ! function_exists( 'wcd_team_register_meta_boxes' ) ) {
    
function wcd_team_register_meta_boxes( $meta_boxes ) {
    
    $meta_boxes[] = array (
      'id'          => 'team-social-links',
      'title'       => __('Team Member Social Links', 'wcd-team'),
      'pages'       =>   array ( 'team' ),
      'context'     => 'side',
      'priority'    => 'low',
      'autosave'    => false,
      'fields'      =>   array (
         
        array (
          'id'      => 'phone',
          'type'    => 'text',
          'name'    => __('Phone', 'wcd-team'),
        ),
         
        array (
          'id'      => 'email',
          'type'    => 'email',
          'name'    => __('Email', 'wcd-team'),
        ),
         
        array (
          'id'      => 'facebook_url',
          'type'    => 'url',
          'name'    => __('Facebook URL', 'wcd-team'),
        ),
         
        array (
          'id'      => 'twitter_url',
          'type'    => 'url',
          'name'    => __('Twitter URL', 'wcd-team'),
        ),
         
        array (
          'id'      => 'linkedin_url',
          'type'    => 'url',
          'name'    => __('LinkedIn URL', 'wcd-team'),
        ),
         
        array (
          'id'      => 'google_url',
          'type'    => 'url',
          'name'    => __('Google URL', 'wcd-team'),
        ),
         
        array (
          'id'      => 'youtube_url',
          'type'    => 'url',
          'name'    => __('YouTube URL', 'wcd-team'),
        ),
         
        array (
          'id'      => 'instagram_url',
          'type'    => 'url',
          'name'    => __('Instagram URL', 'wcd-team'),
        ),
      ),
    );

    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'wcd_team_register_meta_boxes' );
    
}