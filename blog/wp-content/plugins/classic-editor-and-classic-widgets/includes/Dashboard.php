<?php

namespace GRIM_CEW;

use GRIM_CEW\Vendor\Controller;

class Dashboard extends Controller {

	/**
	 * Dashboard constructor.
	 */
	public function __construct() {
		// Remove Try Gutenberg Panel
		remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );

		// Disable Gutenberg Editor for Posts
		add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

		// Disable Block Editor for Widgets
		add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
		add_filter( 'use_widgets_block_editor', '__return_false' );
	}

}