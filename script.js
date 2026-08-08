

 
(function() {
    var loader = document.getElementById('loader');
    var spinner = document.getElementById('spinner');
    
    if (!loader) return;
    
    function hideLoader() {
        // Stop spinner
        if (spinner) {
            spinner.style.animation = 'none';
            spinner.style.animationPlayState = 'paused';
        }
        
        // Hide loader
        loader.classList.add('hidden');
        
        // Remove from DOM
        setTimeout(function() {
            loader.style.display = 'none';
        }, 400);
    }
    
    // Show loader immediately
    loader.style.display = 'flex';
    
    // Hide when ready
    if (document.readyState === 'complete') {
        setTimeout(hideLoader, 200);
    } else {
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(hideLoader, 300);
        });
        window.addEventListener('load', function() {
            setTimeout(hideLoader, 200);
        });
    }
    
    // Force hide after 3 seconds
    setTimeout(hideLoader, 3000);
})();









        AOS.init({
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });
        
    //         const navbar = document.getElementById('navbar');
    //         const menuToggle = document.getElementById('menuToggle');
    //         const mobileMenu = document.getElementById('mobileMenu');
    //         const userTriggers = document.querySelectorAll('.user-account-trigger');
    //         //const userProfile = document.getElementById('user-profile');
    //         const overlay = document.getElementById('menuOverlay');

    //         // Helper function to close mobile menu
    //         function closeMobileMenu() {
    //             mobileMenu.classList.remove('active');
    //             overlay.classList.remove('active');

    //             if (menuToggle) {
    //                 menuToggle.classList.remove('active');
    //                 menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
    //             }
    //        }

    //         // Helper function to close user profile
    //         function closeUserProfile() {
    //             userProfile.classList.remove('active');
    //         }

    //         // Helper function to close both
    //         function closeAll() {
    //             closeMobileMenu();
    //             closeUserProfile();
    //         }


    //         menuToggle?.addEventListener('click', (e) => {
    //             e.stopPropagation();

    //             mobileMenu.classList.toggle('active');
    //             overlay.classList.toggle('active');

    //             menuToggle.innerHTML = mobileMenu.classList.contains('active')
    //                 ? '<i class="fas fa-times"></i>'
    //                 : '<i class="fas fa-bars"></i>';

    //             if (mobileMenu.classList.contains('active')) {
    //                 closeUserProfile();
    //             }
    //         });

    //         overlay.addEventListener('click', () => {
    //             closeMobileMenu();
    //         });
            
    //         userTriggers.forEach(trigger => {
    //             trigger.addEventListener('click', (e) => {
    //                 e.stopPropagation();
    //                 userProfile.classList.toggle('active');
                    
    //                 // Close mobile menu when opening user profile
    //                 if (userProfile.classList.contains('active')) {
    //                     closeMobileMenu();
    //                 }
    //             });
    //         });

    //       document.addEventListener('click', (e) => {
    // const isClickInsideMobileMenu =
    //     mobileMenu?.contains(e.target);

    // const isClickInsideMenuToggle =
    //     menuToggle?.contains(e.target);

    // const isClickInsideUserProfile =
    //     userProfile?.contains(e.target);

    // const isClickInsideUserTrigger =
    //     Array.from(userTriggers).some(trigger =>
    //         trigger.contains(e.target)
    //     );

    // if (
    //     !isClickInsideMobileMenu &&
    //     !isClickInsideMenuToggle &&
    //     mobileMenu?.classList.contains('active')
    // ) {
    //     closeMobileMenu();
    // }

    // if (
    //     !isClickInsideUserProfile &&
    //     !isClickInsideUserTrigger &&
    //     userProfile?.classList.contains('active')
    // ) {
    //     closeUserProfile();
    // }
    //         });

            // Prevent clicks inside user profile from bubbling
            // userProfile.addEventListener('click', (e) => {
            //     e.stopPropagation();
            // });

            // // Close on escape key
            // document.addEventListener('keydown', (e) => {
            //     if (e.key === 'Escape') {
            //         closeAll();
            //     }
            // });

            // // Close on scroll for mobile
            // window.addEventListener('scroll', () => {
            //     if (window.innerWidth <= 768) {
            //         if (mobileMenu.classList.contains('active')) {
            //             closeMobileMenu();
            //         }
            //         // if (userProfile.classList.contains('active')) {
            //         //     closeUserProfile();
            //         // }
            //     }
            // }, { passive: true });
                    



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


// ===== TESTIMONIALS CAROUSEL (SIMPLIFIED) =====
(function() {
    'use strict';
    
    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
    
    function init() {
        // Get elements with null checks
        const carousel = document.getElementById('testCarousel');
        if (!carousel) return;
        
        const cards = carousel.querySelectorAll('.test-card');
        if (!cards.length) return;
        
        const prevBtn = document.getElementById('testPrev');
        const nextBtn = document.getElementById('testNext');
        const dotsContainer = document.getElementById('testDots');
        
        let currentIndex = 0;
        let isMobile = window.innerWidth <= 768;
        let isAnimating = false;
        
        // Helper functions
        const isMobileDevice = () => window.innerWidth <= 768;
        
        const updateDots = () => {
            if (!dotsContainer) return;
            const dots = dotsContainer.querySelectorAll('button');
            dots.forEach((dot, i) => {
                dot.className = `w-2.5 h-2.5 rounded-full transition-all duration-300 ${
                    i === currentIndex ? 'bg-amber-500 scale-150' : 'bg-gray-300 hover:bg-amber-300'
                }`;
            });
        };
        
        const updateCarousel = () => {
            if (isAnimating) return;
            isAnimating = true;
            
            // Clamp index
            if (currentIndex >= cards.length) currentIndex = 0;
            if (currentIndex < 0) currentIndex = cards.length - 1;
            
            // Update dots
            updateDots();
            
            // Update cards
            const mobile = isMobileDevice();
            cards.forEach((card, index) => {
                if (mobile) {
                    card.style.display = index === currentIndex ? 'block' : 'none';
                    card.style.opacity = index === currentIndex ? '1' : '0';
                    card.style.transform = index === currentIndex ? 'scale(1)' : 'scale(0.95)';
                } else {
                    card.style.display = 'block';
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                }
            });
            
            setTimeout(() => { isAnimating = false; }, 400);
        };
        
        const goToSlide = (index) => {
            if (isAnimating) return;
            currentIndex = index;
            updateCarousel();
        };
        
        const nextSlide = () => {
            currentIndex = (currentIndex + 1) % cards.length;
            updateCarousel();
        };
        
        const prevSlide = () => {
            currentIndex = (currentIndex - 1 + cards.length) % cards.length;
            updateCarousel();
        };
        
        // Create dots
        if (dotsContainer) {
            dotsContainer.innerHTML = '';
            cards.forEach((_, i) => {
                const dot = document.createElement('button');
                dot.className = `w-2.5 h-2.5 rounded-full transition-all duration-300 ${
                    i === 0 ? 'bg-amber-500 scale-150' : 'bg-gray-300 hover:bg-amber-300'
                }`;
                dot.setAttribute('data-index', i);
                dot.addEventListener('click', () => goToSlide(i));
                dotsContainer.appendChild(dot);
            });
        }
        
        // Touch support
        let touchStartX = 0;
        carousel.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });
        
        carousel.addEventListener('touchend', (e) => {
            const diff = touchStartX - e.changedTouches[0].screenX;
            if (Math.abs(diff) > 50) {
                diff > 0 ? nextSlide() : prevSlide();
            }
        }, { passive: true });
        
        // Button events
        if (prevBtn) prevBtn.addEventListener('click', prevSlide);
        if (nextBtn) nextBtn.addEventListener('click', nextSlide);
        
        // Keyboard events
        document.addEventListener('keydown', (e) => {
            if (carousel.offsetParent !== null) {
                if (e.key === 'ArrowLeft') prevSlide();
                if (e.key === 'ArrowRight') nextSlide();
            }
        });
        
        // Resize handler
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                const newIsMobile = isMobileDevice();
                if (newIsMobile !== isMobile) {
                    isMobile = newIsMobile;
                    updateCarousel();
                }
            }, 250);
        });
        
        // Initialize
        updateCarousel();
    }
})();







// ===== FAQ ACCORDION WITH SMOOTH ANIMATIONS (NO AUTO-SCROLL) =====
function toggleFaq(button) {
    const item = button.closest('.faq-item');
    const answer = item.querySelector('.faq-answer');
    const arrow = button.querySelector('.fa-chevron-down');
    const isActive = item.classList.contains('active');
    
    // Close all other items
    const allItems = document.querySelectorAll('.faq-item');
    allItems.forEach(otherItem => {
        if (otherItem !== item && otherItem.classList.contains('active')) {
            const otherAnswer = otherItem.querySelector('.faq-answer');
            const otherArrow = otherItem.querySelector('.fa-chevron-down');
            const otherButton = otherItem.querySelector('.faq-question');
            
            otherItem.classList.remove('active');
            otherButton.classList.remove('text-amber-600');
            otherAnswer.style.maxHeight = '0';
            otherAnswer.style.opacity = '0';
            otherArrow.style.transform = 'rotate(0deg)';
        }
    });
    
    // Toggle current item
    if (isActive) {
        item.classList.remove('active');
        button.classList.remove('text-amber-600');
        answer.style.maxHeight = '0';
        answer.style.opacity = '0';
        arrow.style.transform = 'rotate(0deg)';
    } else {
        item.classList.add('active');
        button.classList.add('text-amber-600');
        answer.style.maxHeight = answer.scrollHeight + 'px';
        answer.style.opacity = '1';
        arrow.style.transform = 'rotate(180deg)';
        
    }
}






// /// ===== SERVICES SLIDER =====
// document.addEventListener('DOMContentLoaded', function() {
//     const track = document.getElementById('servicesSlider');
//     const prevBtns = document.querySelectorAll('#sliderPrev, #sliderPrevMobile');
//     const nextBtns = document.querySelectorAll('#sliderNext, #sliderNextMobile');
//     const dotContainers = document.querySelectorAll('#sliderDots, #sliderDotsMobile');
    
//     let currentIndex = 0;
//     let cardWidth = 0;
//     let visibleCards = 0;
//     let totalSlides = 0;
//     let isAnimating = false;
    
//     function getVisibleCards() {
//         if (window.innerWidth >= 1024) return 3;
//         if (window.innerWidth >= 640) return 2;
//         return 1;
//     }
    
//     function getCardWidth() {
//         const firstCard = track.querySelector('.service-card');
//         if (!firstCard) return 0;
//         // Include gap (16px for md, 24px for lg)
//         const gap = window.innerWidth >= 1024 ? 24 : 16;
//         return firstCard.offsetWidth + gap;
//     }
    
//     function updateSlider() {
//         const totalCards = track.querySelectorAll('.service-card').length;
//         visibleCards = getVisibleCards();
//         cardWidth = getCardWidth();
//         totalSlides = Math.ceil(totalCards / visibleCards);
        
//         // Clamp current index
//         if (currentIndex >= totalSlides) currentIndex = totalSlides - 1;
//         if (currentIndex < 0) currentIndex = 0;
        
//         // Calculate scroll position
//         const scrollPosition = currentIndex * cardWidth * visibleCards;
//         track.scrollTo({
//             left: scrollPosition,
//             behavior: 'smooth'
//         });
        
//         // Update dots
//         dotContainers.forEach(container => {
//             const dots = container.querySelectorAll('button');
//             dots.forEach((dot, i) => {
//                 dot.classList.toggle('bg-amber-500', i === currentIndex);
//                 dot.classList.toggle('bg-[#E5DDD5]', i !== currentIndex);
//                 dot.classList.toggle('scale-150', i === currentIndex);
//             });
//         });
//     }
    
//     function goToSlide(index) {
//         if (isAnimating) return;
//         if (index < 0) index = totalSlides - 1;
//         if (index >= totalSlides) index = 0;
//         currentIndex = index;
//         isAnimating = true;
//         updateSlider();
//         setTimeout(() => { isAnimating = false; }, 500);
//     }
    
//     // Event listeners for navigation buttons
//     prevBtns.forEach(btn => {
//         btn.addEventListener('click', () => goToSlide(currentIndex - 1));
//     });
    
//     nextBtns.forEach(btn => {
//         btn.addEventListener('click', () => goToSlide(currentIndex + 1));
//     });
    
//     // Dot click listeners
//     dotContainers.forEach(container => {
//         const dots = container.querySelectorAll('button');
//         dots.forEach((dot, i) => {
//             dot.addEventListener('click', () => goToSlide(i));
//         });
//     });
    
//     // Touch/swipe support
//     let touchStartX = 0;
//     let touchEndX = 0;
    
//     track.addEventListener('touchstart', (e) => {
//         touchStartX = e.changedTouches[0].screenX;
//     }, { passive: true });
    
   
// });





// ===== COUNT-UP ANIMATION =====
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for counters
    const counters = document.querySelectorAll('.counter');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-target'));
                let current = 0;
                const increment = target / 60; // 60 frames for smooth animation
                
                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.ceil(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };
                
                updateCounter();
                observer.unobserve(counter);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => observer.observe(counter));
});



// ===== SCROLL TO TOP BUTTON =====
// Optional: Show/hide button based on scroll position
window.addEventListener('scroll', function() {
    const scrollBtn = document.querySelector('.footer-bottom button');
    if (scrollBtn) {
        if (window.scrollY > 500) {
            scrollBtn.style.opacity = '1';
            scrollBtn.style.pointerEvents = 'auto';
        } else {
            scrollBtn.style.opacity = '0';
            scrollBtn.style.pointerEvents = 'none';
        }
    }
});