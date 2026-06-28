<?php
/**
 * Template Name: Work Template
 *
 * @package Meridian_Studio
 */

get_header();
?>

<main class="site-main page-padding work-page">
    <div class="grid-container reveal-section">
        <header class="section-header">
            <h1 class="display-title">Our Work</h1>
        </header>
        <section class="services-intro-row">
            <div class="services-intro-row__header">
                <h2 class="section-title">What we do</h2>
                <div class="section-eyebrow">04 SERVICES</div>
            </div>
            <div class="services-columns services-columns--work-page">
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
        </section>
        <section class="portfolio-grid">
            <div class="portfolio-card">
                <div class="portfolio-image-wrapper">
                    <div class="image-placeholder aspect-card"></div>
                </div>
                <div class="portfolio-meta">
                    <h3 class="portfolio-title">Featured Project</h3>
                    <span class="portfolio-tags">Brand · Web</span>
                </div>
            </div>
            <div class="portfolio-card">
                <div class="portfolio-image-wrapper">
                    <div class="image-placeholder aspect-card"></div>
                </div>
                <div class="portfolio-meta">
                    <h3 class="portfolio-title">Featured Project</h3>
                    <span class="portfolio-tags">Strategy · Motion</span>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
get_footer();
