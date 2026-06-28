<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="header-container">
        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" rel="home">
            <span class="logo-dot">•</span> Meridian
        </a>

        <!-- Desktop Navigation -->
        <nav id="site-navigation" class="main-navigation" aria-label="Main Navigation">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary-menu',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'nav-links',
                    'container'      => false,
                    'fallback_cb'    => 'meridian_studio_default_nav',
                )
            );
        ?>
        </nav>

        <!-- Header Actions -->
        <div class="header-actions">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">Start a project</a>
            <button type="button" class="menu-toggle" aria-controls="mobile-overlay" aria-expanded="false" aria-label="Toggle navigation menu">
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Navigation Fullscreen Overlay -->
<div id="mobile-overlay" class="mobile-navigation-overlay" aria-hidden="true">
    <div class="overlay-container">
        <button class="mobile-overlay-close" aria-label="Close mobile menu">Close</button>
        <nav class="mobile-menu-nav">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary-menu',
                    'menu_class'     => 'mobile-nav-links',
                    'container'      => false,
                    'fallback_cb'    => 'meridian_studio_default_mobile_nav',
                )
            );
            ?>
        </nav>
        <div class="mobile-overlay-footer">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary btn-full-width">Start a project</a>
        </div>
    </div>
</div>
