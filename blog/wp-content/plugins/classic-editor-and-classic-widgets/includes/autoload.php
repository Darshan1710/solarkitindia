<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// Language Files
if ( ! is_textdomain_loaded( 'classic-editor-and-classic-widgets' ) ) {
	load_plugin_textdomain( 'classic-editor-and-classic-widgets', false, 'classic-editor-and-classic-widgets/languages' );
}

// WP Admin
if ( is_admin() ) {
	require_once( GRIM_CEW_INCLUDES . 'vendor/Controller.php' );
	require_once( GRIM_CEW_INCLUDES . 'Dashboard.php' );
	$grim_cew_dashboard  = new GRIM_CEW\Dashboard();
}