<?php

	// Register Nav Walker class_alias
	require get_template_directory() . '/bootstrap-navwalker.php';

	// Register Nav Menus
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
	) );

	// Theme Support
	function wpb_theme_setup() {

		// Post Thumbnails
		add_theme_support('post-thumbnails');

		// Post Formats
		add_theme_support('post-formats', array('aside', 'gallery'));

	}

	add_action('after_setup_theme', 'wpb_theme_setup');

	// Excerpt Length Control
	function set_excerpt_length() {

		// The length of the post excerpt to be used
		return 45;

	}

	add_filter('excerpt_length', 'set_excerpt_length');

	// Widget Locations
	function wpb_init_widgets($id) {

		// Sidebar Widget
		register_sidebar(
			array(
				'name' => 'Sidebar',
				'id' => 'sidebar',
				'before_widget' => '<div class="sidebar-module">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>'
			)
		);

		// Box1 Widget
		register_sidebar(
			array(
				'name' => 'Box1',
				'id' => 'box1',
				'before_widget' => '',
				'after_widget' => '',
				'before_title' => '<h3>',
				'after_title' => '</h3>'
			)
		);

		// Box2 Widget
		register_sidebar(
			array(
				'name' => 'Box2',
				'id' => 'box2',
				'before_widget' => '',
				'after_widget' => '',
				'before_title' => '<h3>',
				'after_title' => '</h3>'
			)
		);

		// Box3 Widget
		register_sidebar(
			array(
				'name' => 'Box3',
				'id' => 'box3',
				'before_widget' => '',
				'after_widget' => '',
				'before_title' => '<h3>',
				'after_title' => '</h3>'
			)
		);

	}

	add_action('widgets_init', 'wpb_init_widgets');

	// Customizer File
	require get_template_directory(). '/inc/customizer.php';

?>