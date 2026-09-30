document.addEventListener('DOMContentLoaded', () => {
    // Automatically add animation class to primary elements
    const elementsToAnimate = document.querySelectorAll('h1, h2, .card, .service-card, .btn');
    elementsToAnimate.forEach((el, index) => {
        el.classList.add('animate-on-scroll');
        // Add a slight stagger effect based on index modulo for siblings
        if (index % 3 === 1) el.classList.add('delay-100');
        if (index % 3 === 2) el.classList.add('delay-200');
    });

    // 1. Scroll Fade-Up Animations
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    
    if ('IntersectionObserver' in window) {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.10
        };
        
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        animatedElements.forEach(el => observer.observe(el));
    } else {
        animatedElements.forEach(el => el.classList.add('is-visible'));
    }

    // 2. Interactive Form Enhancement
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.removeAttribute('onsubmit');
        
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const submitBtn = form.querySelector('button[type="submit"]') || form.querySelector('.btn');
            const statusMsg = form.querySelector('.form-status');
            
            if (submitBtn) {
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Sending...';
                submitBtn.disabled = true;
                submitBtn.style.opacity = '0.7';
                submitBtn.style.cursor = 'wait';
                
                // Simulate network request
                setTimeout(() => {
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                    submitBtn.style.opacity = '1';
                    submitBtn.style.cursor = 'pointer';
                    
                    if (statusMsg) {
                        statusMsg.style.display = 'block';
                        statusMsg.textContent = 'Thank you! Your message has been sent successfully.';
                        statusMsg.style.color = '#008a00';
                        statusMsg.style.fontWeight = '500';
                    }
                    form.reset();
                }, 1500);
            }
        });
    });
});
