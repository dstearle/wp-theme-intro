<!doctype html>

<html <?php language_attributes(); ?>>

    <head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <title>
            
            <?php bloginfo('name'); ?>

            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        
        </title>

        <!-- Bootstrap core CSS -->
        <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
        <?php wp_head(); ?>

    </head>

    <body>

        <!-- Header -->
        <header class="blog-header py-3">

            <div class="row flex-nowrap justify-content-between align-items-center">

                <!-- Subscribe -->
                <div class="col-4 pt-1">
                    <a class="text-muted" href="#">Subscribe</a>
                </div>

                <!-- Page Title -->
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#"><?php bloginfo('name'); ?></a>
                </div>
                
                <!-- Sign Up -->
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>

            </div>

        </header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <!-- Collapse Toggle -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
                
                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbar-content">

                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'depth'          => 2,
                        'menu_class'     => 'navbar-nav ml-auto',
                        'walker'         => new Bootstrap_NavWalker(),
                        'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
                    ) );
                ?>

            </div>

        </nav>