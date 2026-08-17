<?php
/**
 * Plugin Name: Gitwire QA Test Plugin
 * Description: Scratch plugin used to QA gitwire's install/update/fatal-guard flows. Safe to delete.
 * Version: 1.0.5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'admin_notices', function () {
	echo '<div class="notice notice-info"><p>Gitwire QA test plugin v1.0.5.</p></div>';
} );

function gitwire_qa_fix_verification_break() {
	echo "unterminated
}
