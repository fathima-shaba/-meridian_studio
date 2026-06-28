<?php
/**
 * The template for displaying the Journal (listing) page
 *
 * @package Meridian_Studio
 */

get_header();
?>

<main class="site-main page-padding">
    <div class="grid-container reveal-section">
        
        <!-- JOURNAL HEADER -->
        <header class="journal-header">
            <h1 class="display-title journal-title">Journal</h1>
            
            <!-- Category Tabs -->
            <nav class="category-navigation" aria-label="Journal Categories">
                <ul class="category-list">
                    <li class="category-item active"><a href="#">All</a></li>
                    <li class="category-item"><a href="#">Strategy</a></li>
                    <li class="category-item"><a href="#">Process</a></li>
                    <li class="category-item"><a href="#">Build</a></li>
                    <li class="category-item"><a href="#">Craft</a></li>
                </ul>
            </nav>
        </header>

        <!-- FEATURED POST BLOCK -->
        <section class="featured-post-section">
            <div class="featured-post-card">
                <!-- Featured Image -->
                <div class="featured-image-wrapper">
                    <a href="<?php echo esc_url( home_url( '/journal/the-case-for-slower-brands' ) ); ?>">
                        <div class="image-placeholder aspect-featured">
                            <svg viewBox="0 0 760 460" width="100%" height="100%">
                                <rect width="100%" height="100%" fill="var(--color-mist)" />
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="18" fill="var(--color-stone)">760×460 · featured.jpg</text>
                            </svg>
                        </div>
                    </a>
                </div>
                
                <!-- Featured Content -->
                <div class="featured-content">
                    <div class="card-eyebrow">FEATURED &middot; STRATEGY</div>
                    <h2 class="featured-title">
                        <a href="<?php echo esc_url( home_url( '/journal/the-case-for-slower-brands' ) ); ?>">The case for slower brands</a>
                    </h2>
                    <p class="featured-excerpt">
                        Why the brands that endure are rarely the ones in the biggest hurry &mdash; and how to build for the long game.
                    </p>
                    <div class="card-meta">MAY 2026 &middot; 6 MIN READ</div>
                </div>
            </div>
        </section>

        <!-- JOURNAL GRID -->
        <section class="journal-grid-section">
            <div class="journal-grid">
                
                <!-- Card 1 -->
                <article class="journal-card">
                    <div class="card-image-wrapper">
                        <a href="<?php echo esc_url( home_url( '/journal/the-case-for-slower-brands' ) ); ?>">
                            <div class="image-placeholder aspect-card">
                                <svg viewBox="0 0 640 440" width="100%" height="100%">
                                    <rect width="100%" height="100%" fill="var(--color-mist)" />
                                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="16" fill="var(--color-stone)">640×440</text>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="card-info">
                        <div class="card-category">Strategy</div>
                        <h3 class="card-title">
                            <a href="<?php echo esc_url( home_url( '/journal/the-case-for-slower-brands' ) ); ?>">The case for slower brands</a>
                        </h3>
                        <div class="card-meta">May 2026 &middot; 6 min</div>
                    </div>
                </article>
                
                <!-- Card 2 -->
                <article class="journal-card">
                    <div class="card-image-wrapper">
                        <a href="#">
                            <div class="image-placeholder aspect-card">
                                <svg viewBox="0 0 640 440" width="100%" height="100%">
                                    <rect width="100%" height="100%" fill="var(--color-mist)" />
                                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="16" fill="var(--color-stone)">640×440</text>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="card-info">
                        <div class="card-category">Process</div>
                        <h3 class="card-title">
                            <a href="#">Design systems that actually scale</a>
                        </h3>
                        <div class="card-meta">Apr 2026 &middot; 9 min</div>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="journal-card">
                    <div class="card-image-wrapper">
                        <a href="#">
                            <div class="image-placeholder aspect-card">
                                <svg viewBox="0 0 640 440" width="100%" height="100%">
                                    <rect width="100%" height="100%" fill="var(--color-mist)" />
                                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="16" fill="var(--color-stone)">640×440</text>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="card-info">
                        <div class="card-category">Build</div>
                        <h3 class="card-title">
                            <a href="#">What we learned shipping 40 sites</a>
                        </h3>
                        <div class="card-meta">Mar 2026 &middot; 5 min</div>
                    </div>
                </article>

                <!-- Card 4 -->
                <article class="journal-card">
                    <div class="card-image-wrapper">
                        <a href="#">
                            <div class="image-placeholder aspect-card">
                                <svg viewBox="0 0 640 440" width="100%" height="100%">
                                    <rect width="100%" height="100%" fill="var(--color-mist)" />
                                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="16" fill="var(--color-stone)">640×440</text>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="card-info">
                        <div class="card-category">Craft</div>
                        <h3 class="card-title">
                            <a href="#">The craft of slow execution</a>
                        </h3>
                        <div class="card-meta">Feb 2026 &middot; 8 min</div>
                    </div>
                </article>

            </div>
        </section>

    </div>
</main>

<?php
get_footer();
