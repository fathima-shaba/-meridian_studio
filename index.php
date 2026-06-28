<?php
/**
 * Fallback template for Meridian theme.
 */
get_header();
?>
<main class="site-main container">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-summary' ); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <section class="no-results">
            <h2>Nothing Found</h2>
            <p>It seems we can’t find what you’re looking for. Please try again later.</p>
        </section>
    <?php endif; ?>
</main>
<?php
get_footer();
