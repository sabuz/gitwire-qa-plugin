<?php
/**
 * Plugin Name: Gitwire QA Test Plugin
 * Description: Scratch plugin used to QA gitwire's install/update/fatal-guard flows. Safe to delete.
 * Version: 1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'admin_notices', function () {
	echo '<div class="notice notice-info"><p>Gitwire QA test plugin v1.0.1 active.</p></div>';
} );

// Deliberate PHP parse error for gitwire fatal-guard QA (c7-1).
function gitwire_qa_broken() {
	echo "unterminated string
}
