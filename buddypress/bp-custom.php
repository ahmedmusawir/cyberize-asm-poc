<?php
/**
 * THIS FILE NEEDS TO BE AT /wp-content/plugins FOLDER
 */

/**
 * To completely control the profile page layout by member type
 */
add_filter( 'bp_template_hierarchy_members_single_item', function ( $templates ) {

	$member_types = bp_get_member_type( bp_displayed_user_id(), false );
	foreach ( $member_types as $member_type ) {
		array_unshift( $templates, "members/single/index-type-{$member_type}.php" );
	}

	return $templates;
} );

/**
 * Make BuddyPress load up single members profile page by default instead of home.
 */
define('BP_DEFAULT_COMPONENT', 'profile' );

/**
 * Enabling HTML in Xprofile get data 
 */
function stuff_i_want_triggered_after_bp_loads(){

  remove_filter( 'xprofile_get_field_data', 'wp_filter_kses', 1 );

  global $allowedtags;
	
    $allowedtags['a'] = array(
            'href'   => array (),
            'title'  => array (),
            'target' => array ()
    );

    $allowedtags['pre'] = array('class'=>array());
    $allowedtags['p'] = array('class'=>array());
    $allowedtags['h1'] = array('class'=>array());
    $allowedtags['h2'] = array('class'=>array());
    $allowedtags['h3'] = array('class'=>array());
    $allowedtags['h4'] = array('class'=>array());
    $allowedtags['h5'] = array('class'=>array());
    $allowedtags['h6'] = array('class'=>array());
    $allowedtags['ul'] = array('class'=>array());
    $allowedtags['li'] = array('class'=>array());
    $allowedtags['br'] = array('class'=>array());
    $allowedtags['hr'] = array('class'=>array());
    $allowedtags['code'] = array('class'=>array());
    $allowedtags['strong'] = array('class'=>array());
  
}
  
add_action('init', 'stuff_i_want_triggered_after_bp_loads');

/**
 * AVATAR SIZE CHANGE
 */
if ( ! defined( 'BP_AVATAR_THUMB_WIDTH' ) )
	define( 'BP_AVATAR_THUMB_WIDTH', 50 ); //change this with your desired thumb width

if ( ! defined( 'BP_AVATAR_THUMB_HEIGHT' ) )
	define( 'BP_AVATAR_THUMB_HEIGHT', 50 ); //change this with your desired thumb height

if ( ! defined( 'BP_AVATAR_FULL_WIDTH' ) )
	define( 'BP_AVATAR_FULL_WIDTH', 350 ); //change this with your desired full size,weel I changed it to 260 :)

if ( ! defined( 'BP_AVATAR_FULL_HEIGHT' ) )
	define( 'BP_AVATAR_FULL_HEIGHT', 350 ); //change this to default height for full avatar

/**
 * Removes tab items from Member Single
 */
// function bpcodex_remove_member_notifications_tab() {
// 	bp_core_remove_nav_item( 'home' );
// 	bp_core_remove_nav_item( 'activity' );
// 	bp_core_remove_nav_item( 'friends' );
//   bp_core_remove_nav_item( 'groups' );
// }
// add_action( 'bp_actions', 'bpcodex_remove_member_notifications_tab' );