<nav class="site-navigation" aria-label="Primary Menu">
    <div class="container nav-inner">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'primary-menu',
            'fallback_cb'    => 'wp_page_menu',
        ) );
        ?>
    </div>
</nav>
