<?php
/**
 * Meridian Studio Theme Functions and Definitions
 *
 * @package Meridian_Studio
 */

if ( ! function_exists( 'meridian_studio_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function meridian_studio_setup() {
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-logo' );

        register_nav_menus(
            array(
                'primary-menu' => esc_html__( 'Primary Navigation Menu', 'meridian-theme' ),
                'footer-menu'  => esc_html__( 'Footer Navigation Menu', 'meridian-theme' ),
            )
        );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'meridian_studio_setup' );

/**
 * Fallback main navigation.
 */
function meridian_studio_default_nav() {
    echo '<ul class="nav-links">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Work</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/services' ) ) . '">Services</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/about' ) ) . '">Studio</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/journal' ) ) . '">Journal</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">Contact</a></li>';
    echo '</ul>';
}

/**
 * Fallback mobile navigation.
 */
function meridian_studio_default_mobile_nav() {
    echo '<ul class="mobile-nav-links">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Work</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/services' ) ) . '">Services</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/about' ) ) . '">Studio</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/journal' ) ) . '">Journal</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">Contact</a></li>';
    echo '</ul>';
}

/**
 * Fallback footer navigation.
 */
function meridian_studio_default_footer_nav() {
    echo '<ul class="footer-nav-links">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Work</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/services' ) ) . '">Services</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/about' ) ) . '">Studio</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/journal' ) ) . '">Journal</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">Contact</a></li>';
    echo '</ul>';
}

/**
 * Enqueue scripts and styles.
 */
function meridian_studio_scripts() {
    wp_enqueue_style(
        'meridian-fonts',
        'https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&family=IBM+Plex+Mono:ital,wght@0,400;0,500;1,400&family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;1,6..72,400&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'meridian-style',
        get_stylesheet_uri(),
        array( 'meridian-fonts' ),
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_script(
        'meridian-theme-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'meridian_studio_scripts' );

/**
 * Template fallback for known static page slugs when pages are missing.
 */
function meridian_studio_template_fallback( $template ) {
    if ( ! is_404() ) {
        return $template;
    }

    $request_path = wp_parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
    $home_path = wp_parse_url( home_url(), PHP_URL_PATH );

    if ( $home_path && strpos( $request_path, $home_path ) === 0 ) {
        $request_path = substr( $request_path, strlen( $home_path ) );
    }

    $slug = trim( $request_path, '/' );
    $fallback_templates = array(
        'about'    => 'page-about.php',
        'services' => 'page-services.php',
        'contact'  => 'page-contact.php',
        'journal'  => 'page-journal.php',
        'work'     => 'page-work.php',
    );

    if ( isset( $fallback_templates[ $slug ] ) ) {
        $fallback_file = locate_template( $fallback_templates[ $slug ] );
        if ( $fallback_file ) {
            status_header( 200 );
            nocache_headers();
            global $wp_query;
            $wp_query->is_404 = false;
            return $fallback_file;
        }
    }

    return $template;
}
add_filter( 'template_include', 'meridian_studio_template_fallback' );

/**
 * Filter the excerpt length.
 */
function meridian_studio_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'meridian_studio_excerpt_length', 999 );
