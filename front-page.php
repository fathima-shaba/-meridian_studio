<?php
/**
 * The front-page template file
 *
 * @package Meridian_Studio
 */

get_header();
?>

<main class="site-main">

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="hero-container">
            <div class="hero-content">
                <div class="eyebrow fade-up" data-delay="0">BRAND & DIGITAL STUDIO — EST. 2018</div>
                <h1 class="display-title fade-up" data-delay="60">
                    We build brands<br>that <span class="accent-text"><em>move.</em></span>
                </h1>
                <p class="hero-subtitle fade-up" data-delay="120">
                    Strategy, identity and websites for companies with momentum — designed and built under one roof.
                </p>
                <div class="hero-actions fade-up" data-delay="180">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">Start a project</a>
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-secondary">View our work</a>
                </div>
                
                <!-- Client Logotypes -->
                <div class="client-logos fade-up" data-delay="240">
                    <span class="client-logo">Northwind</span>
                    <span class="client-logo">Atlas</span>
                    <span class="client-logo">Lumen</span>
                    <span class="client-logo">Field Notes</span>
                </div>
            </div>
            
            <div class="hero-image-wrapper fade-up" data-delay="120">
                <!-- Large Image Placeholder -->
                <div class="image-placeholder aspect-hero">
                    <svg viewBox="0 0 1440 980" width="100%" height="100%">
                        <rect width="100%" height="100%" fill="var(--color-mist)" />
                        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="24" fill="var(--color-stone)">1440×980 · hero.jpg</text>
                    </svg>
                </div>
                
                <!-- Overlapping Stats Card -->
                <div class="stats-card">
                    <div class="stats-number">120+</div>
                    <div class="stats-label">brands shaped since 2018</div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT WE DO & SELECTED WORK SECTION -->
    <section class="section-padding reveal-section">
        <div class="grid-container">
            <div class="services-intro">
                <h2 class="section-title">What we do</h2>
                <div class="section-eyebrow">04 SERVICES</div>
            </div>
            
            <div class="services-columns">
                <div class="service-col">
                    <span class="service-number">01</span>
                    <h3 class="service-name">Brand Strategy</h3>
                    <p class="service-desc">Positioning, naming, messaging and the story that holds it together.</p>
                </div>
                <div class="service-col">
                    <span class="service-number">02</span>
                    <h3 class="service-name">Identity Design</h3>
                    <p class="service-desc">Logo systems, type, colour and the rules that keep them consistent.</p>
                </div>
                <div class="service-col">
                    <span class="service-number">03</span>
                    <h3 class="service-name">Web Design & Build</h3>
                    <p class="service-desc">Sites that load fast, read clearly and convert — designed and built in-house.</p>
                </div>
                <div class="service-col">
                    <span class="service-number">04</span>
                    <h3 class="service-name">Content & Motion</h3>
                    <p class="service-desc">Art direction, photography and motion that gives the brand a pulse.</p>
                </div>
            </div>
            
            <div class="portfolio-grid">
                <!-- Project 1 -->
                <div class="portfolio-card">
                    <div class="portfolio-image-wrapper">
                        <div class="image-placeholder aspect-card">
                            <svg viewBox="0 0 640 440" width="100%" height="100%">
                                <rect width="100%" height="100%" fill="var(--color-mist)" />
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="18" fill="var(--color-stone)">640×440</text>
                            </svg>
                        </div>
                    </div>
                    <div class="portfolio-meta">
                        <h3 class="portfolio-title">Northwind</h3>
                        <span class="portfolio-tags">Identity · Web</span>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="portfolio-card">
                    <div class="portfolio-image-wrapper">
                        <div class="image-placeholder aspect-card">
                            <svg viewBox="0 0 640 440" width="100%" height="100%">
                                <rect width="100%" height="100%" fill="var(--color-mist)" />
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="18" fill="var(--color-stone)">640×440</text>
                            </svg>
                        </div>
                    </div>
                    <div class="portfolio-meta">
                        <h3 class="portfolio-title">Atlas Coffee</h3>
                        <span class="portfolio-tags">Brand · Packaging</span>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="portfolio-card">
                    <div class="portfolio-image-wrapper">
                        <div class="image-placeholder aspect-card">
                            <svg viewBox="0 0 640 440" width="100%" height="100%">
                                <rect width="100%" height="100%" fill="var(--color-mist)" />
                                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="18" fill="var(--color-stone)">640×440</text>
                            </svg>
                        </div>
                    </div>
                    <div class="portfolio-meta">
                        <h3 class="portfolio-title">Lumen Health</h3>
                        <span class="portfolio-tags">Strategy · Web</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL BAND -->
    <section class="section-padding reveal-section">
        <div class="grid-container testimonial-container">
            <blockquote class="home-testimonial">
                <p>&ldquo;Meridian helped us define our digital voice. Their stubborn belief that good design pays for itself proved absolutely correct. Our conversion rate increased by 40% after the relaunch.&rdquo;</p>
                <cite class="testimonial-author">
                    <span class="author-name">Marcus Vance</span>
                    <span class="author-title">CEO, Northwind</span>
                </cite>
            </blockquote>
        </div>
    </section>

    <!-- CTA BAND -->
    <section class="cta-band reveal-section">
        <div class="cta-container">
            <h2 class="cta-title">Have a project in mind?</h2>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-secondary btn-white">Start a project &rarr;</a>
        </div>
    </section>

</main>

<?php
get_footer();
