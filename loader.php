<?php
/*
Plugin name: BBG Custom BP Visibility
Description: Creates custom visibility levels for xprofile fields in BP 1.6+
Version: 1.0
License: GPLv2
Author: Boone B Gorges
*/

/**
 * Load BP functions safely
 */
function bbg_cpbv_loader() {
	include( dirname(__FILE__) . '/bbg-custom-bp-field-visibility.php' );
}
add_action( 'bp_include', 'bbg_cpbv_loader' );

?>