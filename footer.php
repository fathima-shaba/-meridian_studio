<?php
/**
 * The template for displaying the footer
 *
 * @package Meridian_Studio
 */
?>

<footer class="site-footer">
    <div class="footer-container">
        <!-- Footer Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
            <span class="logo-dot">•</span> Meridian
        </a>

        <!-- Footer Menu -->
        <nav class="footer-navigation" aria-label="Footer Navigation">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'menu_id'        => 'footer-links-menu',
                    'menu_class'     => 'footer-nav-links',
                    'container'      => false,
                    'fallback_cb'    => 'meridian_studio_default_footer_nav',
                )
            );
            ?>
        </nav>

        <!-- Copyright -->
        <div class="footer-copyright">
            <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
