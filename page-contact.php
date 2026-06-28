<?php
/**
 * Template Name: Contact Template
 *
 * @package Meridian_Studio
 */

get_header();
?>

<main class="site-main page-padding">
    <div class="grid-container contact-layout reveal-section">
        
        <!-- Left Column: Details -->
        <div class="contact-info-col">
            <div class="eyebrow fade-up" data-delay="0">GET IN TOUCH</div>
            <h1 class="display-title contact-title fade-up" data-delay="60">
                Let's build<br>something good.
            </h1>
            <p class="contact-subtitle fade-up" data-delay="120">
                Tell us a little about your project and we'll be back within two working days.
            </p>
            
            <div class="contact-details fade-up" data-delay="180">
                <div class="details-block">
                    <span class="details-label">EMAIL</span>
                    <a href="mailto:hello@meridian.studio" class="details-link">hello@meridian.studio</a>
                </div>
                <div class="details-block">
                    <span class="details-label">STUDIO</span>
                    <address class="details-address">14 Calder Lane, Bristol</address>
                </div>
            </div>

            <!-- Optional Embedded Map Block Placeholder (from brief page 3/12) -->
            <div class="contact-map-placeholder fade-up" data-delay="240">
                <div class="image-placeholder aspect-map">
                    <svg viewBox="0 0 400 250" width="100%" height="100%">
                        <rect width="100%" height="100%" fill="var(--color-mist)" />
                        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="12" fill="var(--color-stone)">Embedded Map Block Placeholder</text>
                    </svg>
                </div>
            </div>
        </div>
        
        <!-- Right Column: Enquiry Form Box -->
        <div class="contact-form-col fade-up" data-delay="120">
            <div class="contact-form-container">
                <form id="meridian-enquiry-form" method="post" action="" novalidate>
                    
                    <!-- Form Name Field -->
                    <div class="form-group">
                        <label for="contact-name">Name *</label>
                        <input type="text" name="name" id="contact-name" required autocomplete="name">
                        <span class="error-msg" aria-live="polite"></span>
                    </div>
                    
                    <!-- Form Email Field -->
                    <div class="form-group">
                        <label for="contact-email">Email *</label>
                        <input type="email" name="email" id="contact-email" required autocomplete="email">
                        <span class="error-msg" aria-live="polite"></span>
                    </div>
                    
                    <!-- Form Company Field -->
                    <div class="form-group">
                        <label for="contact-company">Company</label>
                        <input type="text" name="company" id="contact-company" autocomplete="organization">
                        <span class="error-msg" aria-live="polite"></span>
                    </div>
                    
                    <!-- Form Budget Field -->
                    <div class="form-group">
                        <label for="contact-budget">Project budget</label>
                        <div class="select-wrapper">
                            <select name="budget" id="contact-budget">
                                <option value="" disabled selected>Select a range</option>
                                <option value="under-10k">Under $10,000</option>
                                <option value="10k-25k">$10,000 – $25,000</option>
                                <option value="25k-50k">$25,000 – $50,000</option>
                                <option value="50k-plus">$50,000+</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Form Message Field -->
                    <div class="form-group">
                        <label for="contact-message">Message *</label>
                        <textarea name="message" id="contact-message" rows="5" required></textarea>
                        <span class="error-msg" aria-live="polite"></span>
                    </div>
                    
                    <!-- Form Submit -->
                    <div class="form-footer">
                        <p class="form-instruction">* required &mdash; inline validation on blur &amp; submit</p>
                        <button type="submit" class="btn btn-primary submit-btn">
                            <span class="btn-text">Send enquiry &rarr;</span>
                            <span class="btn-spinner" aria-hidden="true"></span>
                            <span class="btn-tick" aria-hidden="true">&#10003;</span>
                        </button>
                    </div>

                    <!-- General Submission Messages -->
                    <div class="form-status-alert" aria-live="polite"></div>
                </form>
            </div>
        </div>

    </div>
</main>

<?php
get_footer();
