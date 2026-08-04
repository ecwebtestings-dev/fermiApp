document.addEventListener('DOMContentLoaded', function () {

    var accordion = document.getElementById('services-accordion');
    if (!accordion) return;

    var headers = Array.prototype.slice.call(accordion.querySelectorAll('.acc-header'));
    var isDesktop = function () {
        return window.matchMedia('(min-width: 993px)').matches;
    };

    function panelFor(header) {
        var id = header.getAttribute('data-panel');
        return accordion.querySelector('.acc-panel[data-panel-id="' + id + '"]');
    }

    function closeItem(header) {
        var panel = panelFor(header);
        header.classList.remove('is-active');
        header.setAttribute('aria-expanded', 'false');
        if (panel) panel.classList.remove('is-active');
    }

    function openItem(header) {
        var panel = panelFor(header);
        header.classList.add('is-active');
        header.setAttribute('aria-expanded', 'true');
        if (panel) panel.classList.add('is-active');
    }

    function closeAll() {
        headers.forEach(closeItem);
    }

    function isOpen(header) {
        return header.classList.contains('is-active');
    }

    headers.forEach(function (header) {
        header.addEventListener('click', function () {

            if (isDesktop()) {
                // Desktop behaves like classic tabs: exactly one open, no toggle-off.
                if (isOpen(header)) return;
                closeAll();
                openItem(header);
                return;
            }

            // Mobile accordion: tapping an open item closes it; tapping a closed
            // item closes whichever one is open and opens this one instead.
            if (isOpen(header)) {
                closeItem(header);
                return;
            }

            closeAll();
            openItem(header);

            // Let the expand animation start, then bring the opened tab into
            // view so the user can keep scrolling through its content.
            window.setTimeout(function () {
                header.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 80);
        });
    });

    // Keep exactly one item open when crossing the mobile/desktop breakpoint.
    window.addEventListener('resize', debounce(function () {
        var anyOpen = headers.some(isOpen);
        if (!anyOpen && headers.length) {
            openItem(headers[0]);
        }
    }, 150));

    function debounce(fn, wait) {
        var t;
        return function () {
            clearTimeout(t);
            t = setTimeout(fn, wait);
        };
    }
});




// ===== HEADER SCROLL EFFECTS =====
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('mainHeader');
    const headerBg = document.getElementById('headerBackground');
    let lastScrollY = window.scrollY;
    
    // Initial state
    headerBg.classList.remove('bg-gray-900/90', 'backdrop-blur-md', 'shadow-lg');
    
    function handleScroll() {
        const currentScrollY = window.scrollY;
        
        if (currentScrollY > 50) {
            // Scrolled down - add background
            headerBg.classList.add('bg-gray-900/95', 'backdrop-blur-md', 'shadow-lg');
            headerBg.classList.remove('bg-transparent');
        } else {
            // At top - transparent background
            headerBg.classList.remove('bg-gray-900/95', 'backdrop-blur-md', 'shadow-lg');
            headerBg.classList.add('bg-transparent');
        }
        
        // Hide/show header on scroll down/up (optional)
        if (currentScrollY > lastScrollY && currentScrollY > 100) {
            // Scrolling down - hide header
            header.style.transform = 'translateY(-100%)';
        } else {
            // Scrolling up - show header
            header.style.transform = 'translateY(0)';
        }
        
        lastScrollY = currentScrollY;
    }
    
    // Throttled scroll listener for performance
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                handleScroll();
                ticking = false;
            });
            ticking = true;
        }
    });
    
    // Initial check
    handleScroll();
});