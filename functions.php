<?php

	// Register Nav Walker class_alias
	require get_template_directory() . '/bootstrap-navwalker.php';

	// Regist Nav Menus
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
	) );

?>