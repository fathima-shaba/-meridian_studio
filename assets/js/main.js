const menuToggle = document.querySelector('.menu-toggle');
const mobileOverlay = document.querySelector('#mobile-overlay');
const overlayClose = document.querySelector('.mobile-overlay-close');
const contactForm = document.querySelector('#meridian-enquiry-form');

function setMobileMenuOpen(isOpen) {
    if (!mobileOverlay || !menuToggle) {
        return;
    }

    mobileOverlay.classList.toggle('open', isOpen);
    mobileOverlay.setAttribute('aria-hidden', String(!isOpen));
    menuToggle.setAttribute('aria-expanded', String(isOpen));
    menuToggle.classList.toggle('active', isOpen);
    document.body.classList.toggle('no-scroll', isOpen);
}

if (menuToggle && mobileOverlay) {
    menuToggle.addEventListener('click', () => {
        const isOpen = !mobileOverlay.classList.contains('open');
        setMobileMenuOpen(isOpen);
    });
}

if (overlayClose && mobileOverlay && menuToggle) {
    overlayClose.addEventListener('click', () => {
        setMobileMenuOpen(false);
    });
}

if (mobileOverlay && menuToggle) {
    const overlayLinks = mobileOverlay.querySelectorAll('a');
    overlayLinks.forEach((link) => {
        link.addEventListener('click', () => {
            setMobileMenuOpen(false);
        });
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && mobileOverlay.classList.contains('open')) {
            setMobileMenuOpen(false);
        }
    });
}

if (contactForm) {
    const emailField = contactForm.querySelector('input[type="email"]');
    const submitButton = contactForm.querySelector('button[type="submit"]');
    const statusAlert = contactForm.querySelector('.form-status-alert');

    function validateField(field) {
        const errorNode = field.closest('.form-group')?.querySelector('.error-msg');
        if (!field.checkValidity()) {
            field.classList.add('invalid');
            if (errorNode) {
                errorNode.textContent = field.validationMessage;
            }
            return false;
        }

        field.classList.remove('invalid');
        if (errorNode) {
            errorNode.textContent = '';
        }
        return true;
    }

    if (emailField) {
        emailField.addEventListener('blur', () => validateField(emailField));
    }

    contactForm.addEventListener('submit', (event) => {
        const requiredFields = Array.from(contactForm.querySelectorAll('[required]'));
        let valid = true;

        requiredFields.forEach((field) => {
            if (!validateField(field)) {
                valid = false;
            }
        });

        if (!valid) {
            event.preventDefault();
            contactForm.querySelector(':invalid')?.focus();
            if (statusAlert) {
                statusAlert.textContent = 'Please correct the errors highlighted above.';
                statusAlert.classList.add('alert-error');
                statusAlert.classList.remove('alert-success');
            }
            return;
        }

        event.preventDefault();

        if (submitButton) {
            submitButton.disabled = true;
            submitButton.classList.add('submitting');
            submitButton.querySelector('.btn-text').textContent = 'Sending…';
        }

        if (statusAlert) {
            statusAlert.textContent = '';
            statusAlert.classList.remove('alert-error', 'alert-success');
        }

        window.setTimeout(() => {
            if (statusAlert) {
                statusAlert.textContent = 'Thanks — your message has been received.';
                statusAlert.classList.add('alert-success');
            }
            contactForm.reset();
            if (submitButton) {
                submitButton.disabled = false;
                submitButton.classList.remove('submitting');
                submitButton.classList.add('success-tick');
                submitButton.querySelector('.btn-text').textContent = 'Send enquiry →';
            }
            window.setTimeout(() => {
                if (submitButton) {
                    submitButton.classList.remove('success-tick');
                }
            }, 2000);
        }, 750);
    });
}

const revealTargets = document.querySelectorAll('.fade-up, .reveal-section');
if (revealTargets.length) {
    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.15,
            }
        );

        revealTargets.forEach((target) => revealObserver.observe(target));
    } else {
        revealTargets.forEach((target) => target.classList.add('in-view'));
    }
}
