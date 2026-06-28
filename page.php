<?php
/**
 * The template for displaying all pages.
 *
 * @package Meridian_Studio
 */

get_header();
?>

<main class="site-main page-padding">
    <div class="grid-container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-page' ); ?>>
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
                <p>Sorry, we couldn’t locate this page. Please return to the homepage or use the navigation above.</p>
            </section>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
