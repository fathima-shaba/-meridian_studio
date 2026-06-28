/**
 * Meridian Studio Theme Interactions
 *
 * Handles:
 * 1. Sticky shrinking header
 * 2. Mobile fullscreen hamburger menu
 * 3. Scroll reveal animations via IntersectionObserver
 * 4. Contact form validation, inline errors, shake, and success states
 */

document.addEventListener('DOMContentLoaded', () => {
    initStickyHeader();
    initMobileMenu();
    initScrollReveal();
    initContactForm();
});

/**
 * 1. Sticky Shrinking Header
 * Shrinks from 60px to 52px and adds a hairline border after 40px scroll.
 */
function initStickyHeader() {
    const header = document.getElementById('masthead');
    if (!header) return;

    const handleScroll = () => {
        if (window.scrollY > 40) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };

    // Run on load in case page is already scrolled
    handleScroll();
    window.addEventListener('scroll', handleScroll, { passive: true });
}

/**
 * 2. Mobile Fullscreen Hamburger Menu
 */
function initMobileMenu() {
    const toggleBtn = document.querySelector('.menu-toggle');
    const overlay = document.getElementById('mobile-overlay');
    if (!toggleBtn || !overlay) return;

    toggleBtn.addEventListener('click', () => {
        const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
        
        toggleBtn.setAttribute('aria-expanded', !isExpanded);
        toggleBtn.classList.toggle('active');
        
        overlay.setAttribute('aria-hidden', isExpanded);
        overlay.classList.toggle('open');
        
        document.body.classList.toggle('no-scroll');
    });

    // Close menu when clicking on overlay nav links
    const overlayLinks = overlay.querySelectorAll('a');
    overlayLinks.forEach(link => {
        link.addEventListener('click', () => {
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.classList.remove('active');
            overlay.setAttribute('aria-hidden', 'true');
            overlay.classList.remove('open');
            document.body.classList.remove('no-scroll');
        });
    });
}

/**
 * 3. Scroll Reveal Animations (Intersection Observer)
 * Staggers entrance fade-up and reveals sections as they enter viewport.
 */
function initScrollReveal() {
    // Respect user prefers-reduced-motion setting
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        document.querySelectorAll('.fade-up, .reveal-section').forEach(el => {
            el.classList.add('in-view');
        });
        return;
    }

    const revealCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target); // Animate only once
            }
        });
    };

    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -10% 0px', // Trigger slightly before element is fully visible
        threshold: 0.15
    };

    const observer = new IntersectionObserver(revealCallback, observerOptions);

    // Track sections and individual fade-up elements
    const elementsToReveal = document.querySelectorAll('.reveal-section, .fade-up');
    elementsToReveal.forEach(el => observer.observe(el));
}

/**
 * 4. Contact Form Validation & Submission Animations
 */
function initContactForm() {
    const form = document.getElementById('meridian-enquiry-form');
    if (!form) return;

    const inputs = form.querySelectorAll('input[required], textarea[required]');
    const submitBtn = form.querySelector('.submit-btn');

    // Email regex helper
    const isValidEmail = (email) => {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    };

    // Show field error state
    const showError = (input, message) => {
        const group = input.closest('.form-group');
        group.classList.add('invalid');
        const errorSpan = group.querySelector('.error-msg');
        if (errorSpan) {
            errorSpan.textContent = message;
        }
    };

    // Clear field error state
    const clearError = (input) => {
        const group = input.closest('.form-group');
        group.classList.remove('invalid');
        const errorSpan = group.querySelector('.error-msg');
        if (errorSpan) {
            errorSpan.textContent = '';
        }
    };

    // Validate a single field
    const validateField = (input) => {
        if (!input.value.trim()) {
            showError(input, 'This field is required');
            return false;
        }

        if (input.type === 'email' && !isValidEmail(input.value.trim())) {
            showError(input, 'Enter a valid email');
            return false;
        }

        clearError(input);
        return true;
    };

    // Validate on Blur
    inputs.forEach(input => {
        input.addEventListener('blur', () => {
            validateField(input);
        });

        // Clear error as user types to be friendly
        input.addEventListener('input', () => {
            if (input.value.trim()) {
                clearError(input);
            }
        });
    });

    // Handle Form Submit
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        let isFormValid = true;
        
        // Validate all fields
        inputs.forEach(input => {
            const isFieldValid = validateField(input);
            if (!isFieldValid) {
                isFormValid = false;
            }
        });

        if (!isFormValid) {
            // Form is invalid: shake form container to draw attention
            const container = form.closest('.contact-form-container');
            container.classList.add('shake-anim');
            
            // Remove shake class after animation completes
            setTimeout(() => {
                container.classList.remove('shake-anim');
            }, 500);
            return;
        }

        // Form is valid: begin transition animations
        // 1. Enter Submitting state (shows spinner, hides default text)
        submitBtn.classList.add('submitting');
        submitBtn.disabled = true;
        inputs.forEach(inp => inp.disabled = true);

        // Simulate server network request delay
        setTimeout(() => {
            // 2. Enter Success state (hides spinner, shows tick mark)
            submitBtn.classList.remove('submitting');
            submitBtn.classList.add('success-tick');

            // 3. Show a friendly overlay success message and clear form fields
            setTimeout(() => {
                const alertContainer = form.querySelector('.form-status-alert');
                alertContainer.innerHTML = `
                    <div class="success-message">
                        <h3>Enquiry Sent!</h3>
                        <p>Thank you for reaching out. We will review your project and get back to you within two working days.</p>
                    </div>
                `;
                alertContainer.classList.add('show');
                
                // Reset form fields
                form.reset();
                
                // Restore button states after a short while
                setTimeout(() => {
                    submitBtn.classList.remove('success-tick');
                    submitBtn.disabled = false;
                    inputs.forEach(inp => inp.disabled = false);
                    alertContainer.classList.remove('show');
                    alertContainer.innerHTML = '';
                }, 5000);
                
            }, 1000);

        }, 2000);
    });
}
