<?php 

    function wpb_customize_register($wp_customize) {

        // Showcase Section
        $wp_customize->add_section('showcase', array(

                'title' => __('Showcase', 'wp-theme-intro'),
                'description' => sprintf(__('Options for showcase', 'wp-theme-intro')),
                'priority' => 130,

            )
    
        );

        // Showcase Image
        $wp_customize->add_setting('showcase_image', array(

                'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
                'type' => 'theme_mod',

            )

        );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(

                    'label' => __('Showcase Image', 'wp-theme-intro'),
                    'section' => 'showcase',
                    'settings' => 'showcase_image',
                    'priority' => 1

                )

            )

        );

        // Showcase Heading
        $wp_customize->add_setting('showcase_heading', array(

                'default' => _x('Custom WP Bootstrap Theme', 'wp-theme-intro'),
                'type' => 'theme_mod',

            )

        );

        $wp_customize->add_control('showcase_heading', array(

                'label' => __('Heading', 'wp-theme-intro'),
                'section' => 'showcase',
                'priority' => 2

            )

        );

        // Showcase Text
        $wp_customize->add_setting('showcase_text', array(

                'default' => _x('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam cumque distinctio perspiciatis at incidunt fuga praesentium facere dolore ut natus.', 'wp-theme-intro'),
                'type' => 'theme_mod',

            )

        );

        $wp_customize->add_control('showcase_text', array(

                'label' => __('Text', 'wp-theme-intro'),
                'section' => 'showcase',
                'priority' => 3

            )

        );

        // Showcase Button URL
        $wp_customize->add_setting('btn_url', array(

                'default' => _x('http://test.com', 'wp-theme-intro'),
                'type' => 'theme_mod',

            )

        );

        $wp_customize->add_control('btn_url', array(

                'label' => __('Button URL', 'wp-theme-intro'),
                'section' => 'showcase',
                'priority' => 4

            )

        );

        $wp_customize->add_setting('btn_text', array(

                'default' => _x('Read More', 'wp-theme-intro'),
                'type' => 'theme_mod',

            )

        );

        $wp_customize->add_control('btn_text', array(

                'label' => __('Button Text', 'wp-theme-intro'),
                'section' => 'showcase',
                'priority' => 5

            )

        );

    }

    add_action('customize_register', 'wpb_customize_register');

?>