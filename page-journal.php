<?php
/**
 * Template Name: Journal Template
 *
 * @package Meridian_Studio
 */

get_header();
?>

<main class="site-main page-padding">
    <div class="grid-container reveal-section">
        <header class="journal-header">
            <h1 class="display-title journal-title">Journal</h1>
        </header>

        <section class="featured-post-section">
            <div class="featured-post-card">
                <div class="featured-image-wrapper">
                    <a href="#">
                        <div class="image-placeholder aspect-featured">
                            <svg viewBox="0 0 760 460" width="100%" height="100%">
                                <rect width="100%" height="100%" fill="var(--color-mist)" />
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="18" fill="var(--color-stone)">760×460</text>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="featured-content">
                    <div class="card-eyebrow">FEATURED &middot; JOURNAL</div>
                    <h2 class="featured-title"><a href="#">Sample featured article</a></h2>
                    <p class="featured-excerpt">A short preview of the article to demonstrate layout when there are no posts.</p>
                    <div class="card-meta">June 2026 &middot; 2 MIN READ</div>
                </div>
            </div>
        </section>

        <section class="journal-grid-section">
            <div class="journal-grid">
                <!-- Placeholder cards to show structure when no posts exist -->
                <?php for ( $i = 0; $i < 4; $i++ ) : ?>
                    <article class="journal-card">
                        <div class="card-image-wrapper">
                            <a href="#">
                                <div class="image-placeholder aspect-card">
                                    <svg viewBox="0 0 640 440" width="100%" height="100%">
                                        <rect width="100%" height="100%" fill="var(--color-mist)" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="card-info">
                            <div class="card-category">Category</div>
                            <h3 class="card-title"><a href="#">Sample article title</a></h3>
                            <div class="card-meta">June 2026 &middot; 3 min</div>
                        </div>
                    </article>
                <?php endfor; ?>
            </div>
        </section>
    </div>
</main>

<?php
get_footer();
