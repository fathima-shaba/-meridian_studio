<?php
/**
 * The template for displaying all single posts
 *
 * @package Meridian_Studio
 */

// Temporary fallback: if a single post uses the 'about' slug,
// load the About / Studio page template so the Studio layout appears.
$queried_post = get_queried_object();
if ( isset( $queried_post->post_name ) && 'about' === $queried_post->post_name ) {
    locate_template( 'page-about.php', true, true );
    return;
}
get_header();
?>

<main class="site-main page-padding">
    <article class="single-post-wrapper reveal-section">
        
        <?php
        // Loop start if there are posts
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <!-- Post Header -->
                <header class="post-header">
                    <div class="post-eyebrow">
                        <?php 
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo esc_html( strtoupper( $categories[0]->name ) ) . ' &middot; ';
                        }
                        echo esc_html( get_the_date( 'F Y' ) );
                        // Basic read time estimate (word count / 200)
                        $word_count = str_word_count( strip_tags( get_the_content() ) );
                        $read_time = max( 1, ceil( $word_count / 200 ) );
                        echo ' &middot; ' . esc_html( $read_time ) . ' MIN READ';
                        ?>
                    </div>
                    <h1 class="display-title post-title"><?php the_title(); ?></h1>
                    <div class="post-author">
                        By <?php the_author(); ?>
                    </div>
                </header>

                <!-- Post Featured Image -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-hero-image">
                        <?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) ); ?>
                    </div>
                <?php else: ?>
                    <div class="post-hero-image">
                        <div class="image-placeholder aspect-article-hero">
                            <svg viewBox="0 0 1240 540" width="100%" height="100%">
                                <rect width="100%" height="100%" fill="var(--color-mist)" />
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="20" fill="var(--color-stone)">1240×540 · article-hero.jpg</text>
                            </svg>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Post Body Content -->
                <div class="post-content-container">
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php
            endwhile;
        else :
            // Fallback content matching page 11 brief exactly
            ?>
            <!-- Post Header Fallback -->
            <header class="post-header">
                <div class="post-eyebrow">STRATEGY &middot; MAY 2026 &middot; 6 MIN READ</div>
                <h1 class="display-title post-title">The case for slower brands</h1>
                <div class="post-author">
                    By Elena Marsh &mdash; Strategy Lead
                </div>
            </header>

            <!-- Post Featured Image Fallback -->
            <div class="post-hero-image">
                <div class="image-placeholder aspect-article-hero">
                    <svg viewBox="0 0 1240 540" width="100%" height="100%">
                        <rect width="100%" height="100%" fill="var(--color-mist)" />
                        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="20" fill="var(--color-stone)">1240×540 · article-hero.jpg</text>
                    </svg>
                </div>
            </div>

            <!-- Post Body Content Fallback -->
            <div class="post-content-container">
                <div class="entry-content">
                    <p>
                        Most brand failures aren't loud. They're a slow drift &mdash; a logo tweaked here, a tone shifted there &mdash; until nothing quite fits together. The antidote isn't more activity. It's restraint, and a system you trust enough to leave alone.
                    </p>
                    
                    <blockquote class="pull-quote">
                        <p>&ldquo;The brands that endure are rarely the ones in the biggest hurry.&rdquo;</p>
                    </blockquote>
                    
                    <p>
                        A slower brand makes fewer, better decisions and lets them compound. It treats consistency as a feature, not a constraint &mdash; and that is exactly what a good design system protects.
                    </p>
                </div>
            </div>
            <?php
        endif;
        ?>

    </article>
</main>

<?php
get_footer();
