


//PRELOADER
const loader=document.getElementById('loader');
window.addEventListener('load',()=>{
    loader.style.display='none'
});

        AOS.init({
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });
        
            const navbar = document.getElementById('navbar');
            const menuToggle = document.getElementById('menuToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            const userTriggers = document.querySelectorAll('.user-account-trigger');
            const userProfile = document.getElementById('user-profile');
            const overlay = document.getElementById('menuOverlay');

            // Helper function to close mobile menu
            function closeMobileMenu() {
                mobileMenu.classList.remove('active');
                overlay.classList.remove('active');

                if (menuToggle) {
                    menuToggle.classList.remove('active');
                    menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
                }
           }

            // Helper function to close user profile
            function closeUserProfile() {
                userProfile.classList.remove('active');
            }

            // Helper function to close both
            function closeAll() {
                closeMobileMenu();
                closeUserProfile();
            }


            menuToggle?.addEventListener('click', (e) => {
                e.stopPropagation();

                mobileMenu.classList.toggle('active');
                overlay.classList.toggle('active');

                menuToggle.innerHTML = mobileMenu.classList.contains('active')
                    ? '<i class="fas fa-times"></i>'
                    : '<i class="fas fa-bars"></i>';

                if (mobileMenu.classList.contains('active')) {
                    closeUserProfile();
                }
            });

            overlay.addEventListener('click', () => {
                closeMobileMenu();
            });
            
            userTriggers.forEach(trigger => {
                trigger.addEventListener('click', (e) => {
                    e.stopPropagation();
                    userProfile.classList.toggle('active');
                    
                    // Close mobile menu when opening user profile
                    if (userProfile.classList.contains('active')) {
                        closeMobileMenu();
                    }
                });
            });

            // Close when clicking outside
            document.addEventListener('click', (e) => {
                const isClickInsideMobileMenu = mobileMenu.contains(e.target);
                const isClickInsideMenuToggle = menuToggle?.contains(e.target);
                const isClickInsideUserProfile = userProfile.contains(e.target);
                const isClickInsideUserTrigger = Array.from(userTriggers).some(trigger => trigger.contains(e.target));
                
                // Close mobile menu if click is outside
                if (!isClickInsideMobileMenu && !isClickInsideMenuToggle && mobileMenu.classList.contains('active')) {
                    closeMobileMenu();
                }
                
                // Close user profile if click is outside
                if (!isClickInsideUserProfile && !isClickInsideUserTrigger && userProfile.classList.contains('active')) {
                    closeUserProfile();
                }
            });

            // Prevent clicks inside user profile from bubbling
            userProfile.addEventListener('click', (e) => {
                e.stopPropagation();
            });

            // Close on escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    closeAll();
                }
            });

            // Close on scroll for mobile
            window.addEventListener('scroll', () => {
                if (window.innerWidth <= 768) {
                    if (mobileMenu.classList.contains('active')) {
                        closeMobileMenu();
                    }
                    if (userProfile.classList.contains('active')) {
                        closeUserProfile();
                    }
                }
            }, { passive: true });
                    


        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab');
            const isMobile = window.innerWidth <= 992;

            function closeAllTabs() {
                document.querySelectorAll('.tab-content-mobile').forEach(content => {
                    content.classList.remove('active');
                });
                document.querySelectorAll('.tab').forEach(tab => {
                    tab.classList.remove('active');
                });
            }

            function openTab(tabElement) {
                const tabId = tabElement.dataset.tab;
                const contentElement = document.getElementById(tabId + '-mobile');
                
                if (isMobile) {
                    if (tabElement.classList.contains('active')) {
                        tabElement.classList.remove('active');
                        contentElement.classList.remove('active');
                    } else {
                        closeAllTabs();
                        tabElement.classList.add('active');
                        contentElement.classList.add('active');
                    }
                } else {
                    closeAllTabs();
                    tabElement.classList.add('active');
                    contentElement.classList.add('active');
                }
            }

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    openTab(this);
                });
            });

            if (!isMobile && tabs.length > 0) {
                openTab(tabs[0]);
            }

            window.addEventListener('resize', function() {
                const newIsMobile = window.innerWidth <= 992;
                if (newIsMobile !== isMobile) {
                    location.reload(); 
                }
            });

            
            if (window.innerWidth <= 768) {
                // Remove active class from all tabs
                document.querySelectorAll('.tab').forEach(tab => {
                    tab.classList.remove('active');
                });
                
                // Add active class to commercial tab
                document.querySelector('.tab[data-tab="commercial"]').classList.add('active');
                
                // Hide all content
                document.querySelectorAll('.tab-content-mobile').forEach(content => {
                    content.classList.remove('active');
                });
                
                // Show commercial content
                document.getElementById('commercial-mobile').classList.add('active');
            }
        });


        //==========CALL TO ACTION SECTION================
        
document.addEventListener('DOMContentLoaded', function() {
    const ctaButtons = document.querySelectorAll('.cta-btn');
    
    // Ripple effect for buttons
    ctaButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.5);
                transform: scale(0);
                animation: ctaRippleEffect 0.6s linear;
                width: ${size}px;
                height: ${size}px;
                top: ${y}px;
                left: ${x}px;
                pointer-events: none;
                z-index: 10;
            `;
            
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
    
    // Add ripple animation style
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ctaRippleEffect {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);




    
 //Why Choose Us Section - Mobile Slider and Toggle Functionality
document.addEventListener('DOMContentLoaded', function() {
    initWhyUsSlider();
    startAutoRotation();
});

let autoRotateInterval;
let currentIndex = 0;
let isAnyTextOpen = false;

function initWhyUsSlider() {
    const cards = document.querySelectorAll('.why-us-card');
    const dots = document.querySelectorAll('.why-us-dot');
    const prevBtn = document.querySelector('.why-us-slider-prev');
    const nextBtn = document.querySelector('.why-us-slider-next');
    
    function showSlide(index) {
        if (window.innerWidth > 480) return;
        
        if (index < 0) index = cards.length - 1;
        if (index >= cards.length) index = 0;
        
        document.querySelector('.why-us-cards').style.transform = `translateX(-${index * 100}%)`;
        
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
        
        currentIndex = index;
    }
    
    if (prevBtn && nextBtn) {
        prevBtn.addEventListener('click', () => {
            stopAutoRotation();
            showSlide(currentIndex - 1);
            startAutoRotation();
        });
        
        nextBtn.addEventListener('click', () => {
            stopAutoRotation();
            showSlide(currentIndex + 1);
            startAutoRotation();
        });
    }
    
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            stopAutoRotation();
            showSlide(index);
            startAutoRotation();
        });
    });
    
    // Handle window resize
    window.addEventListener('resize', () => {
        if (window.innerWidth > 480) {
            document.querySelector('.why-us-cards').style.transform = 'translateX(0)';
            stopAutoRotation();
        } else {
            showSlide(currentIndex);
            startAutoRotation();
        }
    });
    
    window.showSlide = showSlide;
}

function startAutoRotation() {
    if (window.innerWidth > 480) return;
    if (isAnyTextOpen) return;
    
    stopAutoRotation();
    autoRotateInterval = setInterval(() => {
        if (!isAnyTextOpen && window.innerWidth <= 480) {
            const dots = document.querySelectorAll('.why-us-dot');
            let nextIndex = currentIndex + 1;
            if (nextIndex >= dots.length) nextIndex = 0;
            
            document.querySelector('.why-us-cards').style.transform = `translateX(-${nextIndex * 100}%)`;
            
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === nextIndex);
            });
            
            currentIndex = nextIndex;
        }
    }, 5000);
}

function stopAutoRotation() {
    if (autoRotateInterval) {
        clearInterval(autoRotateInterval);
    }
}

// Toggle text overlay with blur effect
function toggleWhyUsText(btn) {
    const cardIndex = btn.getAttribute('data-card');
    const textOverlay = document.getElementById(`card-text-${cardIndex}`);
    
    // Close any open text overlays first
    document.querySelectorAll('.why-us-text.active').forEach(openText => {
        if (openText.id !== `card-text-${cardIndex}`) {
            openText.classList.remove('active');
            const prevBtn = openText.previousElementSibling;
            if (prevBtn && prevBtn.classList.contains('why-us-toggle-btn')) {
                prevBtn.style.opacity = '1';
                prevBtn.style.pointerEvents = 'auto';
            }
        }
    });
    
    // Open the clicked card's text with blur effect
    textOverlay.classList.add('active');
    btn.style.opacity = '0';
    btn.style.pointerEvents = 'none';
    
    // Stop auto rotation when text is open
    isAnyTextOpen = true;
    stopAutoRotation();
}

// Close text overlay
function closeWhyUsText(btn) {
    const cardIndex = btn.getAttribute('data-card');
    const textOverlay = document.getElementById(`card-text-${cardIndex}`);
    const toggleBtn = textOverlay.previousElementSibling;
    
    textOverlay.classList.remove('active');
    toggleBtn.style.opacity = '1';
    toggleBtn.style.pointerEvents = 'auto';
    
    // Resume auto rotation when text is closed
    isAnyTextOpen = false;
    if (window.innerWidth <= 480) {
        startAutoRotation();
    }
}

// Slide navigation
function slideWhyUs(direction) {
    if (window.innerWidth > 480) return;
    
    const cards = document.querySelectorAll('.why-us-card');
    const dots = document.querySelectorAll('.why-us-dot');
    
    dots.forEach((dot, index) => {
        if (dot.classList.contains('active')) currentIndex = index;
    });
    
    let newIndex = currentIndex + direction;
    if (newIndex < 0) newIndex = cards.length - 1;
    if (newIndex >= cards.length) newIndex = 0;
    
    document.querySelector('.why-us-cards').style.transform = `translateX(-${newIndex * 100}%)`;
    
    dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === newIndex);
    });
    
    currentIndex = newIndex;
    
    // Stop and restart auto rotation
    stopAutoRotation();
    startAutoRotation();
}

function goToWhyUsSlide(index) {
    if (window.innerWidth > 480) return;
    
    const cards = document.querySelectorAll('.why-us-card');
    const dots = document.querySelectorAll('.why-us-dot');
    
    document.querySelector('.why-us-cards').style.transform = `translateX(-${index * 100}%)`;
    
    dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === index);
    });
    
    currentIndex = index;
    
    // Stop and restart auto rotation
    stopAutoRotation();
    startAutoRotation();
}

// Global functions for onclick handlers
window.toggleWhyUsText = toggleWhyUsText;
window.closeWhyUsText = closeWhyUsText;
window.slideWhyUs = slideWhyUs;
window.goToWhyUsSlide = goToWhyUsSlide;

});



// FAQ Toggle Function
function toggleFaq(element) {
    
    const allQuestions = document.querySelectorAll('.faq-question');
    const allAnswers = document.querySelectorAll('.faq-answer');
    
    allQuestions.forEach((q, index) => {
        if (q !== element) {
            q.classList.remove('active');
            allAnswers[index].classList.remove('active');
        }
    });
    
    element.classList.toggle('active');
    const answer = element.nextElementSibling;
    answer.classList.toggle('active');
}
// Make function globally available
window.toggleFaq = toggleFaq;


//TESTIMONIALS
// Testimonial Carousel for Mobile
    document.addEventListener('DOMContentLoaded', function() {
        const testimonialCarousel = document.getElementById('testCarousel');
        const testimonialCards = document.querySelectorAll('.test-card');
        const prevBtn = document.getElementById('testPrev');
        const nextBtn = document.getElementById('testNext');
        const dotsContainer = document.getElementById('testDots');
        
        let currentIndex = 0;
        let autoRotateInterval;
        let isMobile = window.innerWidth <= 768;
        
        // Initialize carousel on mobile
        function initCarousel() {
            isMobile = window.innerWidth <= 768;
            
            if (isMobile) {
                // Create dots
                createDots();
                
                // Start auto-rotation
                startAutoRotate();
                
                // Add touch/swipe support
                addTouchSupport();
            } else {
                // Reset to grid layout on desktop
                testimonialCards.forEach(card => {
                    card.classList.remove('active');
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                });
                // Set first card as active on desktop
                if (testimonialCards.length > 0) {
                    testimonialCards[0].classList.add('active');
                }
                
                // Stop auto-rotation
                stopAutoRotate();
            }
        }
        
        // Create navigation dots
        function createDots() {
            if (!dotsContainer) return;
            
            dotsContainer.innerHTML = '';
            testimonialCards.forEach((_, index) => {
                const dot = document.createElement('span');
                dot.className = 'test-dot';
                if (index === currentIndex) dot.classList.add('active');
                dot.setAttribute('data-index', index);
                dot.addEventListener('click', () => goToSlide(index));
                dotsContainer.appendChild(dot);
            });
        }
        
        // Go to specific slide
        function goToSlide(index) {
            currentIndex = index;
            updateCarousel();
            resetAutoRotate();
        }
        
        // Update carousel display
        function updateCarousel() {
            testimonialCards.forEach((card, index) => {
                if (index === currentIndex) {
                    card.classList.add('active');
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                } else {
                    card.classList.remove('active');
                    card.style.opacity = '0.7';
                    card.style.transform = 'scale(0.95)';
                }
            });
            
            // Update dots
            const dots = document.querySelectorAll('.test-dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
            
            // Scroll to active card
            if (testimonialCarousel && testimonialCards[currentIndex]) {
                testimonialCarousel.scrollTo({
                    left: testimonialCards[currentIndex].offsetLeft - testimonialCarousel.offsetLeft,
                    behavior: 'smooth'
                });
            }
        }
        
        // Next slide
        function nextSlide() {
            currentIndex = (currentIndex + 1) % testimonialCards.length;
            updateCarousel();
        }
        
        // Previous slide
        function prevSlide() {
            currentIndex = (currentIndex - 1 + testimonialCards.length) % testimonialCards.length;
            updateCarousel();
        }
        
        // Auto-rotation
        function startAutoRotate() {
            if (!isMobile) return;
            
            stopAutoRotate();
            autoRotateInterval = setInterval(nextSlide, 5000);
        }
        
        function stopAutoRotate() {
            if (autoRotateInterval) {
                clearInterval(autoRotateInterval);
            }
        }
        
        function resetAutoRotate() {
            stopAutoRotate();
            startAutoRotate();
        }
        
        // Touch/swipe support
        function addTouchSupport() {
            if (!testimonialCarousel) return;
            
            let touchStartX = 0;
            let touchEndX = 0;
            
            testimonialCarousel.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
                stopAutoRotate();
            }, { passive: true });
            
            testimonialCarousel.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
                setTimeout(startAutoRotate, 5000);
            }, { passive: true });
            
            function handleSwipe() {
                const swipeThreshold = 50;
                const difference = touchStartX - touchEndX;
                
                if (Math.abs(difference) > swipeThreshold) {
                    if (difference > 0) {
                        nextSlide();
                    } else {
                        prevSlide();
                    }
                }
            }
        }
        
        // Event Listeners
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetAutoRotate();
            });
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetAutoRotate();
            });
        }
        
        // Pause auto-rotate on hover
        if (testimonialCarousel) {
            testimonialCarousel.addEventListener('mouseenter', stopAutoRotate);
            testimonialCarousel.addEventListener('mouseleave', startAutoRotate);
        }
        
        // Handle window resize
        window.addEventListener('resize', () => {
            initCarousel();
        });
        
        // Initialize on load
        initCarousel();
    });

    //BACKTO TOP
    // Back to Top Button Functionality
document.addEventListener('DOMContentLoaded', function() {
    const backToTopButton = document.getElementById('backToTop');
    
    if (backToTopButton) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });
        
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});




// Slider functionality
document.addEventListener('DOMContentLoaded', function() {
    const sliderTrack = document.getElementById('servicesSlider');
    const prevBtn = document.getElementById('sliderPrev');
    const nextBtn = document.getElementById('sliderNext');
    const dotsContainer = document.getElementById('sliderDots');
    const cards = document.querySelectorAll('.service-card');
    
    if (!sliderTrack || cards.length === 0) return;
    
    let currentIndex = 0;
    let cardWidth = 0;
    let gap = 20;
    let autoRotateInterval;
    let cardsPerSlide = 3; // Default for desktop
    
    // Initialize slider
    function initSlider() {
        updateCardDimensions();
        updateCardsPerSlide();
        createDots();
        startAutoRotate(); // Start auto-rotate for all devices
        
        // Show/hide navigation based on screen size
        const sliderNav = document.querySelector('.slider-nav');
        if (sliderNav) {
            sliderNav.style.display = 'flex'; // Always show navigation
        }
    }
    
    // Update cards per slide based on screen width
    function updateCardsPerSlide() {
        if (window.innerWidth <= 480) {
            cardsPerSlide = 1;
        } else if (window.innerWidth <= 768) {
            cardsPerSlide = 1; // Mobile still shows 1 card
        } else if (window.innerWidth <= 992) {
            cardsPerSlide = 2; // Tablet shows 2 cards
        } else {
            cardsPerSlide = 3; // Desktop shows 3 cards
        }
    }
    
    // Update card dimensions
    function updateCardDimensions() {
        if (cards.length > 0) {
            cardWidth = cards[0].offsetWidth;
            const trackStyles = window.getComputedStyle(sliderTrack);
            const gapValue = parseFloat(trackStyles.gap);
            if (!isNaN(gapValue)) gap = gapValue;
        }
    }
    
    // Calculate total slides
    function getTotalSlides() {
        return Math.ceil(cards.length / cardsPerSlide);
    }
    
    // Create navigation dots
    function createDots() {
        if (!dotsContainer) return;
        
        dotsContainer.innerHTML = '';
        const totalSlides = getTotalSlides();
        
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement('span');
            dot.className = `slider-dot ${i === 0 ? 'active' : ''}`;
            dot.setAttribute('data-index', i);
            dot.addEventListener('click', () => {
                goToSlide(i * cardsPerSlide);
                resetAutoRotate();
            });
            dotsContainer.appendChild(dot);
        }
    }
    
    // Go to specific slide
    function goToSlide(index) {
        if (index < 0) index = 0;
        if (index >= cards.length) index = cards.length - cardsPerSlide;
        
        const scrollAmount = index * (cardWidth + gap);
        sliderTrack.scrollTo({
            left: scrollAmount,
            behavior: 'smooth'
        });
        
        updateActiveDot(Math.floor(index / cardsPerSlide));
        currentIndex = index;
    }
    
    // Update active dot based on scroll position
    function updateActiveDot(slideIndex) {
        const dots = document.querySelectorAll('.slider-dot');
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === slideIndex);
        });
    }
    
    // Next slide
    function nextSlide() {
        const nextIndex = currentIndex + cardsPerSlide;
        if (nextIndex < cards.length) {
            goToSlide(nextIndex);
        } else {
            // Loop back to start
            goToSlide(0);
        }
    }
    
    // Previous slide
    function prevSlide() {
        const prevIndex = currentIndex - cardsPerSlide;
        if (prevIndex >= 0) {
            goToSlide(prevIndex);
        } else {
            // Go to last slide
            goToSlide(cards.length - cardsPerSlide);
        }
    }
    
    // Auto-rotate
    function startAutoRotate() {
        stopAutoRotate();
        autoRotateInterval = setInterval(nextSlide, 5000); // Rotate every 5 seconds
    }
    
    function stopAutoRotate() {
        if (autoRotateInterval) {
            clearInterval(autoRotateInterval);
        }
    }
    
    function resetAutoRotate() {
        stopAutoRotate();
        startAutoRotate();
    }
    
    // Event listeners
    if (prevBtn && nextBtn) {
        prevBtn.addEventListener('click', () => {
            prevSlide();
            resetAutoRotate();
        });
        
        nextBtn.addEventListener('click', () => {
            nextSlide();
            resetAutoRotate();
        });
    }
    
    // Track scroll events to update active dot
    sliderTrack.addEventListener('scroll', () => {
        const scrollPosition = sliderTrack.scrollLeft;
        const newIndex = Math.round(scrollPosition / (cardWidth + gap));
        if (newIndex !== currentIndex && newIndex >= 0 && newIndex < cards.length) {
            currentIndex = newIndex;
            updateActiveDot(Math.floor(currentIndex / cardsPerSlide));
        }
    });
    
    // Pause auto-rotate on hover/interaction
    sliderTrack.addEventListener('mouseenter', stopAutoRotate);
    sliderTrack.addEventListener('mouseleave', startAutoRotate);
    sliderTrack.addEventListener('touchstart', stopAutoRotate);
    sliderTrack.addEventListener('touchend', () => setTimeout(startAutoRotate, 5000));
    
    // Handle window resize
    window.addEventListener('resize', () => {
        updateCardDimensions();
        updateCardsPerSlide();
        createDots();
        
        // Adjust current index if needed
        if (currentIndex > cards.length - cardsPerSlide) {
            goToSlide(cards.length - cardsPerSlide);
        }
    });
    
    // Initialize on load
    initSlider();
    
    // Update dimensions after images load
    window.addEventListener('load', updateCardDimensions);
});





const heroSlides = document.querySelectorAll(".slide");
const heroSlider = document.querySelector(".circle-slider");
let heroCurrentSlide = 0;
let heroInterval;
function heroShowSlide(index) {

    // Remove active classes
    heroSlides.forEach(slide => slide.classList.remove("active"));
    // Add active classes
    heroSlides[index].classList.add("active");
    heroCurrentSlide = index;
}
function heroNextSlide() {
    let next = heroCurrentSlide + 1;
    if (next >= heroSlides.length) {
        next = 0;
    }
    heroShowSlide(next);
}

function heroPreviousSlide() {
    let prev = heroCurrentSlide - 1;
    if (prev < 0) {
        prev = heroSlides.length - 1;
    }
    heroShowSlide(prev);
}
function heroStartSlider() {
    heroInterval = setInterval(heroNextSlide, 2000);
}
function heroStopSlider() {
    clearInterval(heroInterval);

}

heroShowSlide(0);
heroStartSlider();