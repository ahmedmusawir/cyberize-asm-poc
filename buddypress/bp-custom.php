<?php
/**
 * THIS FILE NEEDS TO BE AT /wp-content/plugins FOLDER
 */

/**
 * Make BuddyPress load up single members profile page by default instead of home.
 */
define('BP_DEFAULT_COMPONENT', 'profile' );


/**
 * Removes tab items from Member Single
 */
function bpcodex_remove_member_notifications_tab() {
	bp_core_remove_nav_item( 'home' );
	bp_core_remove_nav_item( 'activity' );
	bp_core_remove_nav_item( 'friends' );
  bp_core_remove_nav_item( 'groups' );
}
add_action( 'bp_actions', 'bpcodex_remove_member_notifications_tab' );