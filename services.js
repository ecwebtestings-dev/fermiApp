document.addEventListener('DOMContentLoaded', function () {
    // ===== SERVICES ACCORDION =====
    var accordion = document.getElementById('services-accordion');
    
    if (accordion) {
        var headers = Array.prototype.slice.call(accordion.querySelectorAll('.acc-header'));
        
        if (headers.length > 0) {
            var isDesktop = function () {
                return window.matchMedia('(min-width: 993px)').matches;
            };

            function panelFor(header) {
                var id = header.getAttribute('data-panel');
                if (!id) return null;
                return accordion.querySelector('.acc-panel[data-panel-id="' + id + '"]');
            }

            function closeItem(header) {
                var panel = panelFor(header);
                header.classList.remove('is-active');
                header.setAttribute('aria-expanded', 'false');
                if (panel) {
                    panel.classList.remove('is-active');
                }
            }

            function openItem(header) {
                var panel = panelFor(header);
                header.classList.add('is-active');
                header.setAttribute('aria-expanded', 'true');
                if (panel) {
                    panel.classList.add('is-active');
                }
            }

            function closeAll() {
                headers.forEach(closeItem);
            }

            function isOpen(header) {
                return header.classList.contains('is-active');
            }

            // Handle header clicks
            headers.forEach(function (header) {
                header.addEventListener('click', function () {
                    var panel = panelFor(header);
                    if (!panel) return;

                    if (isDesktop()) {
                        if (isOpen(header)) return;
                        closeAll();
                        openItem(header);
                        return;
                    }

                    if (isOpen(header)) {
                        closeItem(header);
                        return;
                    }

                    closeAll();
                    openItem(header);

                    window.setTimeout(function () {
                        header.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }, 100);
                });
            });

            // Keep exactly one item open when crossing breakpoints
            var resizeTimeout;
            window.addEventListener('resize', function () {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(function () {
                    var anyOpen = headers.some(isOpen);
                    if (!anyOpen && headers.length > 0) {
                        openItem(headers[0]);
                    }
                }, 150);
            });

            // Initialize: Open first item
            if (headers.length > 0) {
                openItem(headers[0]);
            }
        }
    }
});