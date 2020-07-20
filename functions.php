<?php

	// Register Nav Walker class_alias
	require get_template_directory() . '/bootstrap-navwalker.php';

	// Register Nav Menus
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
	) );

	// Excerpt Length Control
	function set_excerpt_length() {

		// The length of the post excerpt to be used
		return 45;

	}

	add_filter('excerpt_length', 'set_excerpt_length');

?>