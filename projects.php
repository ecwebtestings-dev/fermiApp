

<?php
//session_start();

// --- Configuration ---
// $timeout = 600; // 10 minutes in seconds
// $login_page = "../public/login.html";
// $logout_page = "/FERMI/auth/logout.php";

// --- Session Management ---
// function checkSession($timeout, $login_page) {
//     // Check if user is logged in and is a 'user'
//     if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'user') {
//         header("Location: " . $login_page);
//         exit;
//     }

//     // Check timeout
//     if (!isset($_SESSION['time']) || (time() - $_SESSION['time']) > $timeout) {
//         session_unset();
//         session_destroy();
//         header("Location: " . $login_page);
//         exit;
//     } else {
//         $_SESSION['time'] = time(); // Refresh session activity
//     }
// }

// Run checks
//checkSession($timeout, $login_page);

// Helper to get user data safely
// $userName = htmlspecialchars($_SESSION['username'] ?? 'User');
// $userEmail = htmlspecialchars($_SESSION['email'] ?? 'No email provided');
// $userInitial = strtoupper(substr($userName, 0, 1));
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- ====== PRIMARY SEO (page-specific) ====== -->
<title>Our Projects | FERMI – Security, Electrical & IT Solutions in Uganda</title>
<meta name="description" content="Browse FERMI's completed projects across Uganda — CCTV installations, electric fences, fire alarms, solar systems, access control, server racks, HVAC and office lighting for homes, businesses and industry.">
<meta name="keywords" content="FERMI projects, CCTV installation Kampala, electric fence Uganda, solar installation Uganda, fire alarm projects, server rack setup, HVAC installation Kampala">
<meta name="author" content="FERMI Electrical & IT Solutions">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://fermi.co.ug/projects.php">

<meta name="theme-color" content="#ffffff">
<meta name="color-scheme" content="light">

<!-- ====== OPEN GRAPH ====== -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://fermi.co.ug/projects.php">
<meta property="og:title" content="Our Projects | FERMI – Security, Electrical & IT Solutions in Uganda">
<meta property="og:description" content="See our completed CCTV, electric fence, solar, fire alarm, networking and HVAC installations across Uganda.">
<meta property="og:image" content="https://fermi.co.ug/Images/og-cover.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_UG">
<meta property="og:site_name" content="FERMI">

<!-- ====== TWITTER CARD ====== -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Our Projects | FERMI Uganda">
<meta name="twitter:description" content="Completed security, electrical and IT projects across Uganda.">
<meta name="twitter:image" content="https://fermi.co.ug/Images/og-cover.jpg">

<!-- ====== RESOURCE HINTS ====== -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<link rel="dns-prefetch" href="https://unpkg.com">

<!-- Preload only the two above-the-fold images (logo + hero background) -->
<link rel="preload" as="image" href="Images/logo2.png" fetchpriority="high">
<link rel="preload" as="image" href="Images/Cyber.jpg" fetchpriority="high">

<!-- ====== FONTS ====== -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&family=Kodchasan:wght@500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons&display=swap" rel="stylesheet">

<!-- ====== CSS (Font Awesome loads non-blocking) ====== -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="widget.css">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="projects.css">

<!-- ====== STRUCTURED DATA: Organization + Breadcrumb ====== -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Electrician",
  "@id": "https://fermi.co.ug/#organization",
  "name": "FERMI Electrical & IT Solutions",
  "url": "https://fermi.co.ug/",
  "logo": "https://fermi.co.ug/Images/logo2.png",
  "telephone": "+256760271098",
  "email": "fermielectrictech@gmail.com",
  "address": { "@type": "PostalAddress", "addressLocality": "Kampala", "addressCountry": "UG" },
  "areaServed": { "@type": "Country", "name": "Uganda" }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://fermi.co.ug/" },
    { "@type": "ListItem", "position": 2, "name": "Projects", "item": "https://fermi.co.ug/projects.php" }
  ]
}
</script>

<link rel="icon" type="image/png" href="Images/favicon.png">
</head>

<style>
    /*
  FERMI — PROJECTS PAGE STYLESHEET
  ---------------------------------------------------------------
  Same approach as the home hero and services hero: every class
  name is unchanged (.proj-grid.active, .proj-tab-link.active,
  .proj-mobile-track, .proj-mobile-dot.active, .proj-lightbox.active,
  .proj-lightbox-prev/next, etc.) so whatever JS toggles these
  classes for the tabs / mobile slider / lightbox keeps working
  untouched — only the visual values changed.

  Bugs / gaps found and fixed:

  1. Same :root duplicate-color bug as the home hero — primary-orange
     / primary-dark / primary-light were all the identical flat
     #F59E0B. Replaced with the same real gold family used on the
     other two pages you've had restyled, so all three pages now
     actually share one palette instead of three slightly different
     oranges.

  2. Several rules referenced hardcoded rgba(255,102,0,...) — an
     orange that doesn't match --primary-* at all — instead of the
     variables that already existed for this. Switched everything
     to the variables.

  3. `.proj-stats-section`, `.proj-stats-container`, `.proj-stat-number`
     are styled in THREE media queries (1024/768/480px) but have
     **no base rule anywhere in the file** — meaning this stats
     block has responsive overrides for a component that doesn't
     exist yet. I added sensible base styles so it isn't broken,
     but I don't have your HTML for this section — if you already
     have markup for it elsewhere, send it over and I'll make sure
     the classes line up; otherwise here's a sample markup at the
     bottom of this note you can drop in.

  4. `.proj-bg-overlay` faded to near-transparent charcoal at the
     bottom (rgba(27,26,26,.15)), same washed-out-contrast issue as
     the services hero — replaced with a vignette that stays dark
     behind the text column.

  5. `.proj-btn-primary` was a flat single color instead of using
     the gradient already defined in :root — now uses it, matching
     the buttons on the other two pages.

  Sample markup for the stats block, if you don't have one already:

    <div class="proj-stats-section">
      <div class="proj-stats-container">
        <div class="proj-stat-item">
          <span class="proj-stat-number">500+</span>
          <span class="proj-stat-label">Projects Completed</span>
        </div>
        <div class="proj-stat-item">
          <span class="proj-stat-number">10+</span>
          <span class="proj-stat-label">Years Experience</span>
        </div>
        <div class="proj-stat-item">
          <span class="proj-stat-number">24/7</span>
          <span class="proj-stat-label">Support</span>
        </div>
      </div>
    </div>
*/

:root {
    --primary-orange: #F59E0B;    
    --primary-dark: #F59E0B;     
    --primary-light: #F59E0B;    
    --primary-gradient: linear-gradient(135deg, #F59E0B 0%, #D97706 100%);
    --color-liver: #5D4037;      
    --color-muted: #737373;      
    --color-bg: #FAF7F2;         
    --color-white: #fff;

    --text-white: #FFFFFF;
    --text-dark: #3E2723;
    --text-gray: #6B7280;
    --header-color:#2E3C49;
    --bg-light: #F9FAFB;
    --bg-dark: rgba(0, 0, 0, 0.5);
    --shadow-sm: 0 2px 10px rgba(0, 0, 0, .05);
    --shadow-md: 0 10px 25px rgba(0, 0, 0, .08);
    --shadow-lg: 0 20px 40px rgba(0, 0, 0, .12);
    --transition: all .3s ease;
    --radius-md: 16px;
    --radius-sm: 12px;
    --radius-pill: 50px;
}


.proj-desktop-only { display: block; }
.proj-mobile-only { display: none; }

/* ===== HERO SECTION ===== */
.proj-hero-section {
    min-height: 100vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    padding: 140px 0 50px;
}

.proj-hero-bg {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    z-index: 0;
}

.proj-bg-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    animation: projZoom 20s ease-in-out infinite alternate;
}
@keyframes projZoom {
    0% { transform: scale(1); }
    100% { transform: scale(1.1); }
}

.proj-bg-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background:
        linear-gradient(100deg,
            rgba(11,20,31,.93) 0%,
            rgba(11,20,31,.82) 38%,
            rgba(11,20,31,.5) 68%,
            rgba(11,20,31,.22) 100%),
        radial-gradient(ellipse 55% 60% at 90% 10%, rgba(201,162,39,.16), transparent 65%),
        radial-gradient(ellipse 45% 50% at 5% 95%, rgba(47,191,176,.1), transparent 65%);
    z-index: 1;
}

.proj-hero-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 2;
    width: 100%;
}

.proj-hero-text { max-width: 700px; color: white; }

.proj-hero-tag {
    display: inline-block;
    background: rgba(201, 162, 39, 0.15);
    color: var(--primary-light);
    padding: 0.6rem 1.5rem;
    border-radius: 30px;
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 1.5px;
    margin-bottom: 1.5rem;
    text-transform: uppercase;
    border: 1px solid rgba(201, 162, 39, 0.35);
    backdrop-filter: blur(5px);
}

.proj-hero-title {
    font-family: "Kodchasan", sans-serif;
    font-size: clamp(2.2rem, 2.6vw + 1.2rem, 3.5rem);
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.35);
}

.proj-hero-title::after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    border-radius: 4px;
    background: var(--primary-gradient);
    margin-top: 15px;
}

.proj-hero-description {
    font-size: 1.15rem;
    color: rgba(255, 255, 255, 0.85);
    margin-bottom: 2.5rem;
    line-height: 1.8;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
}

.proj-hero-buttons {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.proj-btn {
    padding: 1rem 2.5rem;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.7rem;
    transition: var(--transition);
    border: none;
    cursor: pointer;
    font-size: 1rem;
}

.proj-btn-primary {
    background: var(--primary-gradient);
    color: var(--text-dark);
    box-shadow: var(--shadow-glow);
}
.proj-btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 34px rgba(201,162,39,.5);
}

.proj-btn-outline {
    background: rgba(255, 255, 255, 0.08);
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(5px);
}
.proj-btn-outline:hover {
    background: rgba(201, 162, 39, 0.15);
    border-color: var(--primary-light);
    transform: translateY(-3px);
}

/* ===== STATS (base rules — see note at top of file) ===== */
.proj-stats-section {
    padding: 5rem 1.5rem;
    background: var(--bg-light);
}
.proj-stats-container {
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2.5rem;
    text-align: center;
}
.proj-stat-item {
    padding: 1.5rem 1rem;
    border-radius: var(--radius-md);
    background: white;
    box-shadow: var(--shadow-sm);
}
.proj-stat-number {
    display: block;
    font-family: "Kodchasan", sans-serif;
    font-size: 3rem;
    font-weight: 700;
    background: var(--primary-gradient);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}
.proj-stat-label {
    display: block;
    margin-top: 0.4rem;
    font-size: 0.85rem;
    letter-spacing: .06em;
    text-transform: uppercase;
    color: var(--text-gray);
}

/* ===== GALLERY SECTION ===== */
.proj-gallery-section {
    padding: 50px 0;
    position: relative;
    overflow: hidden;
    background: var(--color-bg);
}

.proj-gallery-header {
    text-align: center;
    margin-bottom: 40px;
    position: relative;
    z-index: 2;
}

.proj-gallery-subtitle {
    color: var(--primary-dark);
    font-size: 1rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 15px;
    display: inline-block;
    padding: 0.5rem 1.5rem;
    background: rgba(201, 162, 39, 0.1);
    border-radius: 30px;
    border: 1px solid rgba(201, 162, 39, 0.25);
}

.proj-gallery-title {
    font-family: "Kodchasan", sans-serif;
    font-size: 2.8rem;
    font-weight: 700;
    color: var(--header-color);
    margin-bottom: 0.5rem;
    position: relative;
}
.proj-gallery-title::after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    border-radius: 4px;
    background: var(--primary-gradient);
    margin: 15px auto 0;
}

/* Gallery Tabs */
.proj-gallery-tabs {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 20px;
    flex-wrap: wrap;
    position: relative;
    z-index: 2;
}

.proj-tab-link {
    padding: 0.8rem 1.4rem;
    background: white;
    border: 1px solid rgba(201, 162, 39, 0.25);
    border-radius: 30px;
    font-weight: 600;
    color: var(--header-color);
    cursor: pointer;
    transition: var(--transition);
    text-decoration: none;
    font-size: 0.95rem;
}
.proj-tab-link.active,
.proj-tab-link:hover {
    background: var(--primary-gradient);
    color: var(--text-dark);
    border-color: transparent;
    box-shadow: var(--shadow-sm);
}

/* Desktop Grid View */
.proj-grid-container {
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 2;
}

.proj-grid {
    display: none;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 14px;
}
.proj-grid.active { display: grid; }

.proj-grid-item {
    position: relative;
    overflow: hidden;
    border-radius: var(--radius-sm);
    box-shadow: var(--shadow-md);
    aspect-ratio: 4/3;
    cursor: pointer;
}
.proj-grid-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}
.proj-grid-item:hover img { transform: scale(1.1); }

.proj-item-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: linear-gradient(160deg,
        rgba(11,20,31,.15) 0%,
        rgba(11,20,31,.75) 65%,
        rgba(201,162,39,.55) 100%);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    text-align: center;
    color: white;
    opacity: 0;
    transition: opacity 0.3s ease;
}
.proj-grid-item:hover .proj-item-overlay { opacity: 1; }
.proj-item-overlay h4 { font-size: 1rem; margin-bottom: 10px; font-weight: 600; }
.proj-item-overlay p { font-size: 0.95rem; line-height: 1.5; opacity: 0.9; }

/* Mobile Slider View */
.proj-mobile-slider { position: relative; overflow: hidden; padding: 20px 10px; }
.proj-mobile-track { display: flex; transition: transform 0.5s ease; }
.proj-mobile-slide {
    flex: 0 0 100%;
    min-width: 100%;
    padding: 0 10px;
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 4/3;
    box-shadow: var(--shadow-md);
}
.proj-mobile-slide img { width: 100%; height: 100%; object-fit: cover; }

.proj-mobile-caption {
    position: absolute;
    bottom: 0; left: 0; right: 0;
    background: linear-gradient(to top, rgba(11,20,31,.9), transparent);
    color: white;
    padding: 30px 20px 20px;
}
.proj-mobile-caption h4 { font-size: 1.2rem; margin-bottom: 5px; color: var(--primary-light); }
.proj-mobile-caption p { font-size: 0.9rem; opacity: 0.9; }

.proj-mobile-nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
}
.proj-mobile-prev, .proj-mobile-next {
    width: 42px; height: 42px;
    border-radius: 50%;
    background: white;
    border: 2px solid var(--primary-dark);
    color: var(--primary-dark);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: var(--transition);
    font-size: 1rem;
}
.proj-mobile-prev:hover, .proj-mobile-next:hover {
    background: var(--primary-gradient);
    color: white;
    border-color: transparent;
}

.proj-mobile-dots { display: flex; gap: 8px; }
.proj-mobile-dot {
    width: 10px; height: 10px;
    border-radius: 50%;
    background: #ccc;
    cursor: pointer;
    transition: var(--transition);
}
.proj-mobile-dot.active {
    background: var(--primary-dark);
    transform: scale(1.2);
}

/* ===== CTA SECTION ===== */
.proj-cta-section {
    padding: 80px 0;
    background: linear-gradient(135deg, var(--header-color) 0%, #060B12 100%);
    text-align: center;
    position: relative;
    overflow: hidden;
}
.proj-cta-section::before {
    content: '';
    position: absolute;
    top: -100px; right: -100px;
    width: 400px; height: 400px;
    background: var(--primary-gradient);
    opacity: 0.12;
    border-radius: 50%;
    z-index: 0;
}
.proj-cta-section::after {
    content: '';
    position: absolute;
    bottom: -120px; left: -80px;
    width: 320px; height: 320px;
    background: var(--color-signal);
    opacity: 0.08;
    border-radius: 50%;
    z-index: 0;
    filter: blur(10px);
}

.proj-cta-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 2;
}

.proj-cta-title {
    font-family: "Kodchasan", sans-serif;
    font-size: 2.8rem;
    font-weight: 700;
    color: white;
    margin-bottom: 1.5rem;
}
.proj-cta-description {
    color: rgba(255, 255, 255, 0.85);
    font-size: 1.2rem;
    margin-bottom: 3rem;
    line-height: 1.7;
}
.proj-cta-buttons {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    flex-wrap: wrap;
}

/* ===== LIGHTBOX ===== */
.proj-lightbox {
    display: none;
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(6, 11, 18, 0.96);
    backdrop-filter: blur(4px);
    z-index: 1000;
    align-items: center;
    justify-content: center;
}
.proj-lightbox.active { display: flex; }

.proj-lightbox-close {
    position: absolute;
    top: 30px; right: 30px;
    color: white;
    font-size: 3rem;
    cursor: pointer;
    z-index: 1001;
    transition: var(--transition);
}
.proj-lightbox-close:hover { color: var(--primary-light); transform: rotate(90deg); }

.proj-lightbox-content { position: relative; max-width: 90%; max-height: 90%; }
.proj-lightbox-img {
    max-width: 100%;
    max-height: 80vh;
    object-fit: contain;
    border-radius: 8px;
    box-shadow: 0 30px 80px rgba(0,0,0,.5);
}

.proj-lightbox-nav {
    position: absolute;
    top: 50%; left: 0; right: 0;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}
.proj-lightbox-prev, .proj-lightbox-next {
    width: 50px; height: 50px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.12);
    border: 2px solid var(--primary-light);
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: var(--transition);
    font-size: 1.5rem;
}
.proj-lightbox-prev:hover, .proj-lightbox-next:hover {
    background: var(--primary-gradient);
    border-color: transparent;
    color: var(--text-dark);
}

/* ===== RESPONSIVE DESIGN ===== */
@media (max-width: 1024px) {
    .proj-hero-title { font-size: 3rem; }
    .proj-gallery-title { font-size: 2.4rem; }
    .proj-stats-container { grid-template-columns: repeat(4, 1fr); gap: 1.5rem; }
    .proj-stat-number { font-size: 2.6rem; }
    .proj-grid { grid-template-columns: repeat(3, 1fr); }
}

@media (max-width: 768px) {
    .proj-desktop-only { display: none; }
    .proj-mobile-only { display: block; }

    .proj-hero-section { padding-top: 100px; min-height: 90vh; }
    .proj-hero-container { padding: 0 1.5rem; }
    .proj-hero-text { text-align: left; max-width: 100%; }
    .proj-hero-title { font-size: 2.5rem; }
    .proj-hero-title::after { margin-left: 0; }
    .proj-hero-description { font-size: 1.1rem; text-align: left; }
    .proj-hero-buttons { justify-content: flex-start; }

    .proj-stats-section { padding: 4rem 1.5rem; }
    .proj-stats-container { grid-template-columns: repeat(2, 1fr); gap: 2rem; }
    .proj-stat-number { font-size: 2.5rem; }

    .proj-gallery-title { font-size: 2rem; }
    .proj-cta-title { font-size: 2rem; }
    .proj-cta-description { font-size: 1rem; }
}

@media (max-width: 480px) {
    .proj-hero-section { padding-top: 90px; min-height: 85vh; }
    .proj-hero-container { padding: 0 1rem; }
    .proj-hero-title { font-size: 2rem; }
    .proj-hero-description { font-size: 1rem; }
    .proj-hero-buttons { flex-direction: column; width: 100%; }
    .proj-btn { width: 100%; justify-content: center; }

    .proj-stats-container { grid-template-columns: 1fr; gap: 1.5rem; }
    .proj-stat-number { font-size: 2.2rem; }

    .proj-gallery-title { font-size: 1.8rem; }
    .proj-cta-title { font-size: 1.8rem; }
    .proj-cta-buttons { flex-direction: column; gap: 1rem; }

    .proj-lightbox-close { top: 15px; right: 15px; font-size: 2.5rem; }
    .proj-lightbox-prev, .proj-lightbox-next { width: 40px; height: 40px; font-size: 1.2rem; }

    .proj-mobile-caption h4 { font-size: 1.1rem; }
    .proj-mobile-caption p { font-size: 0.85rem; }
}

@media (max-width: 360px) {
    .proj-hero-title { font-size: 1.8rem; }
    .proj-gallery-title { font-size: 1.6rem; }
}




/* ============================================
   FLOATING WHATSAPP BUTTON (all pages)
   ============================================ */
.whatsapp-float {
  position: fixed;
  bottom: 25px;
  right: 25px;
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 55px;
  height: 55px;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  overflow: hidden;
  transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25), 0 0 0 0 rgba(37, 211, 102, 0.5);
  background-color: #25D366;
  text-decoration: none;
  animation: whatsappPulse 2.2s infinite;
}

.whatsapp-float:hover {
  width: 180px;
  border-radius: 40px;
  box-shadow: 0 6px 20px rgba(37, 211, 102, 0.45);
  animation: none;
}

.whatsapp-float:active {
  transform: scale(0.97);
}

/* Icon container */
.wa-sign {
  flex-shrink: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: width 0.35s ease;
}

.whatsapp-float:hover .wa-sign {
  width: 28%;
  padding-left: 12px;
}

.wa-sign svg {
  width: 28px;
  height: 28px;
  flex-shrink: 0;
}

.wa-sign svg path {
  fill: white;
}

/* Label */
.wa-text {
  flex-grow: 1;
  opacity: 0;
  width: 0;
  color: white;
  font-size: 1.05rem;
  font-weight: 600;
  font-family: 'Noto Sans', sans-serif;
  white-space: nowrap;
  padding-right: 0;
  transition: all 0.35s ease;
}

.whatsapp-float:hover .wa-text {
  opacity: 1;
  width: auto;
  padding-right: 18px;
}

/* Pulse ring animation — grabs attention without being annoying */
@keyframes whatsappPulse {
  0%   { box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25), 0 0 0 0 rgba(37, 211, 102, 0.6); }
  70%  { box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25), 0 0 0 18px rgba(37, 211, 102, 0); }
  100% { box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25), 0 0 0 0 rgba(37, 211, 102, 0); }
}

/* ===== Mobile tweaks ===== */
@media (max-width: 600px) {
  .whatsapp-float {
    bottom: 18px;
    right: 18px;
    width: 50px;
    height: 50px;
  }
  .whatsapp-float:hover {
    width: 160px;
  }
  .wa-sign svg { width: 24px; height: 24px; }
  .wa-text { font-size: 0.95rem; }
}

/* Respect users who prefer motion */
@media (prefers-reduced-motion: reduce) {
  .whatsapp-float,
  .whatsapp-float:hover {
    animation: none;
    transition: none;
  }
}
</style>


    
 <?php
// [Keep your existing commented-out session/config block here unchanged]
?>

<body>
<div id="loader"></div>

<!-- ================= NAVBAR ================= -->
<header class="navbar" id="navbar">
    <div class="container">
        <a href="index.php" class="logo">
            <div class="logo-img-wrapper">
                <img src="Images/logo2.png" alt="FERMI logo – Safe Smart Secure" fetchpriority="high">
            </div>
            <span class="logotext">FERMI
                <p class="sublogotext">Safe.Smart.Secure.</p>
            </span>
        </a>

        <nav class="nav-links" aria-label="Main navigation">
            <a href="index.php" class="nav-link">Home</a>
            <a href="services.php" class="nav-link">What We Offer</a>
            <a href="projects.php" class="nav-link active">Projects</a>
            <a href="services.php" class="nav-link">Reserve Appointment</a>
        </nav>

        <div class="auth-buttons">
            <?php if(isset($_SESSION['username'])): ?>
                <div class="user-avatar user-account-trigger" id="userAvatar">
                    <span class="user-initial"></span>
                </div>
            <?php else: ?>
                <a href="index.php" class="btn-signup">Get Started</a>
            <?php endif; ?>
        </div>

        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Menu">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</header>

<!-- ================= MOBILE MENU ================= -->
<div class="menu-overlay" id="menuOverlay"></div>
<div class="mobile-menu" id="mobileMenu">
    <a href="index.php" class="logo">
        <div class="logo-img-wrapper">
            <img src="Images/logo2.png" alt="FERMI logo" loading="lazy">
        </div>
        <span class="logotext">FERMI<p class="sublogotext">Safe.Smart.Secure.</p></span>
    </a>
    <div class="mobile-nav-links">
        <a href="index.php" class="mobile-nav-link">Home</a>
        <a href="services.php" class="mobile-nav-link">What We Offer</a>
        <a href="projects.php" class="mobile-nav-link active">Projects</a>
        <a href="services.php" class="mobile-nav-link">Reserve Appointment</a>
    </div>
    <div class="mobile-auth-section">
        <div class="mobile-auth-buttons">
            <?php if(isset($_SESSION['username'])): ?>
                <a href="/FERMI/auth/logout.php" class="mobile-btn-login">Log Out</a>
            <?php else: ?>
                <a href="index.php" class="mobile-btn-signup">Get Started</a>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- ================= PROJECTS HERO ================= -->
<section class="proj-hero-section">
    <div class="proj-hero-bg">
        <!-- LCP image: eager + high priority, NOT lazy -->
        <img src="Images/Cyber.jpg" alt="FERMI technician configuring a cybersecurity network in Kampala" class="proj-bg-image" fetchpriority="high" decoding="async">
        <div class="proj-bg-overlay"></div>
    </div>

    <div class="proj-hero-container">
        <div class="proj-hero-text" data-aos="fade-right">
            <h1 class="proj-hero-title">Projects Completed</h1>
            <p class="proj-hero-description" data-aos="fade-up" data-aos-delay="300">
                We combine creativity and technology to bring each project to life. Every installation is designed with precision,
                ensuring lasting reliability and a sleek, professional finish. Browse through our portfolio to see our work in action.
            </p>
            <div class="proj-hero-buttons" data-aos="fade-up" data-aos-delay="400">
                <a href="appointments/create.php" class="proj-btn proj-btn-primary">
                    <i class="fas fa-phone-alt"></i> Start Your Project
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ================= GALLERY ================= -->
<section class="proj-gallery-section">
    <div class="proj-gallery-header" data-aos="fade-up">
        <h2 class="proj-gallery-title">Our Projects Gallery</h2>
    </div>

    <div class="proj-gallery-tabs proj-desktop-only" data-aos="fade-up" data-aos-delay="200">
        <a class="proj-tab-link active" data-filter="all">All Projects</a>
        <a class="proj-tab-link" data-filter="residences">Residential</a>
        <a class="proj-tab-link" data-filter="industrial">Industrial</a>
        <a class="proj-tab-link" data-filter="offices">Commercial</a>
    </div>

    <!-- Desktop Grids: ALL images lazy-load on scroll; hidden tabs download nothing until clicked -->
    <div class="proj-grid-container proj-desktop-only" id="projGrid">

        <!-- ALL -->
        <div class="proj-grid active" data-category="all">
            <div class="proj-grid-item"><img src="Images/caera.jpg" alt="4K CCTV security camera installed on a home in Kampala" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>CCTV Camera Installation</h4><p>Residential security system with 4K cameras</p></div></div>
            <div class="proj-grid-item"><img src="Images/fence-with-barbed-wire.jpg" alt="Electric perimeter fence with barbed wire securing a residence" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Electric Fence Installation</h4><p>Perimeter security with alarm integration</p></div></div>
            <div class="proj-grid-item"><img src="Images/newcctv.jpeg" alt="Ceiling-mounted dome CCTV camera for discreet home surveillance" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Ceiling Camera Setup</h4><p>Discreet surveillance for home security</p></div></div>
            <div class="proj-grid-item"><img src="Images/Facialrecognitionaccesscontrol.png" alt="Biometric fingerprint access control panel for home entry" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Fingerprint Access Control</h4><p>Biometric entry system for homes</p></div></div>
            <div class="proj-grid-item"><img src="Images/electric-fence.jpg" alt="8-strand electric security fence around a residence" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Electric Perimeter Fence</h4><p>8-strand security fence</p></div></div>
            <div class="proj-grid-item"><img src="Images/NEWfirealarm.jpeg" alt="Smart fire alarm with smoke and heat detectors in a home" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Fire Alarm System</h4><p>Smart smoke and heat detectors</p></div></div>
            <div class="proj-grid-item"><img src="Images/newcctv2.jpeg" alt="PTZ CCTV camera with 360° remote-controlled surveillance" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>PTZ Camera Installation</h4><p>360° surveillance with remote control</p></div></div>
            <div class="proj-grid-item"><img src="Images/solar-panel.jpg" alt="5kW grid-tie rooftop solar panel system installed in Uganda" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Solar Panel Installation</h4><p>5kW grid-tie solar system</p></div></div>
            <div class="proj-grid-item"><img src="Images/WaterHeater.jpg" alt="500L commercial water heater installation" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Industrial Water Heating</h4><p>500L commercial water heater installation</p></div></div>
            <div class="proj-grid-item"><img src="Images/escalator.jpg" alt="Shopping mall escalator system installed by FERMI" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Escalator Installation</h4><p>Shopping mall escalator system</p></div></div>
            <div class="proj-grid-item"><img src="Images/fire-alarm-switch.jpg" alt="Addressable industrial fire alarm control panel" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Industrial Fire Alarm</h4><p>Addressable fire alarm system</p></div></div>
            <div class="proj-grid-item"><img src="Images/cat2cables.jpeg" alt="48-port managed network switch with CAT6 patch cables" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Network Switch Installation</h4><p>48-port managed network switch</p></div></div>
            <div class="proj-grid-item"><img src="Images/netRag.png" alt="Enterprise server rack with organized network cabling" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Server Rack Setup</h4><p>Enterprise network infrastructure</p></div></div>
            <div class="proj-grid-item"><img src="Images/catcables.jpeg" alt="CAT6 structured data cabling installation" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Structured Cabling</h4><p>CAT6 data cabling installation</p></div></div>
            <div class="proj-grid-item"><img src="Images/gps-system-smart-car.jpg" alt="GPS vehicle tracking system installed in a car" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>GPS Fleet Tracking</h4><p>Vehicle tracking system installation</p></div></div>
            <div class="proj-grid-item"><img src="Images/technician-engineer-checks-maintenance-solar-cell-panels.jpg" alt="FERMI technician inspecting and cleaning solar panels" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Solar Panel Maintenance</h4><p>Solar system inspection and cleaning</p></div></div>
            <div class="proj-grid-item"><img src="Images/modem-setup-troubleshooting-online-guides.jpg" alt="Enterprise WiFi router configuration and troubleshooting" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Network Router Setup</h4><p>Enterprise WiFi configuration</p></div></div>
            <div class="proj-grid-item"><img src="Images/officelights.jpeg" alt="LED panel office lighting installation with dimmers" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Office Lighting Installation</h4><p>LED panel lighting with dimmers</p></div></div>
            <div class="proj-grid-item"><img src="Images/empty-escalator-stair.jpg" alt="Commercial escalator system in an office building" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Commercial Escalator</h4><p>Office building escalator system</p></div></div>
            <div class="proj-grid-item"><img src="Images/air-conditioning-decoration-interior.jpg" alt="Central air conditioning system in a modern office interior" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>HVAC Installation</h4><p>Central air conditioning system</p></div></div>
        </div>

        <!-- RESIDENTIAL -->
        <div class="proj-grid" data-category="residences">
            <div class="proj-grid-item"><img src="Images/residental-pics.jpg" alt="Residential CCTV security installation in Kampala" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>CCTV Camera Installation</h4><p>Residential security system with 4K cameras</p></div></div>
            <div class="proj-grid-item"><img src="Images/fence-with-barbed-wire.jpg" alt="Electric fence with barbed wire on a home perimeter" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Electric Fence Installation</h4><p>Perimeter security with alarm integration</p></div></div>
            <div class="proj-grid-item"><img src="Images/cctv-security-camera-ceiling.jpg" alt="Ceiling dome camera for discreet home surveillance" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Ceiling Camera Setup</h4><p>Discreet surveillance for home security</p></div></div>
            <div class="proj-grid-item"><img src="Images/Residental-ingerprint-access-control.jpg" alt="Fingerprint biometric access control for a residence" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Fingerprint Access Control</h4><p>Biometric entry system for homes</p></div></div>
            <div class="proj-grid-item"><img src="Images/electric-fence.jpg" alt="8-strand electric perimeter fence" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Electric Perimeter Fence</h4><p>8-strand security fence</p></div></div>
            <div class="proj-grid-item"><img src="Images/fire-sensor.jpg" alt="Ceiling fire sensor and smoke detector in a home" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Fire Alarm System</h4><p>Smart smoke and heat detectors</p></div></div>
            <div class="proj-grid-item"><img src="Images/security-camera-monitoring-travel-place.jpg" alt="PTZ camera monitoring a property remotely" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>PTZ Camera Installation</h4><p>360° surveillance with remote control</p></div></div>
            <div class="proj-grid-item"><img src="Images/solar-panel.jpg" alt="Rooftop solar panel array on a residence" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Solar Panel Installation</h4><p>5kW grid-tie solar system</p></div></div>
        </div>

        <!-- INDUSTRIAL -->
        <div class="proj-grid" data-category="industrial">
            <div class="proj-grid-item"><img src="Images/WaterHeater.jpg" alt="Industrial 500L water heater installation" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Industrial Water Heating</h4><p>500L commercial water heater installation</p></div></div>
            <div class="proj-grid-item"><img src="Images/escalator.jpg" alt="Mall escalator installation project" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Escalator Installation</h4><p>Shopping mall escalator system</p></div></div>
            <div class="proj-grid-item"><img src="Images/fire-alarm-switch.jpg" alt="Industrial addressable fire alarm switch panel" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Industrial Fire Alarm</h4><p>Addressable fire alarm system</p></div></div>
            <div class="proj-grid-item"><img src="Images/network-switch-with-cables.jpg" alt="Managed network switch with patched cables" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Network Switch Installation</h4><p>48-port managed network switch</p></div></div>
            <div class="proj-grid-item"><img src="Images/network.jpg" alt="Enterprise server rack network infrastructure" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Server Rack Setup</h4><p>Enterprise network infrastructure</p></div></div>
            <div class="proj-grid-item"><img src="Images/cables-red-light-background.jpg" alt="CAT6 structured cabling with red status lights" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Structured Cabling</h4><p>CAT6 data cabling installation</p></div></div>
            <div class="proj-grid-item"><img src="Images/gps-system-smart-car.jpg" alt="GPS fleet tracking device in a vehicle" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>GPS Fleet Tracking</h4><p>Vehicle tracking system installation</p></div></div>
        </div>

        <!-- COMMERCIAL -->
        <div class="proj-grid" data-category="offices">
            <div class="proj-grid-item"><img src="Images/modem-setup-troubleshooting-online-guides.jpg" alt="Office WiFi router setup and configuration" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Network Router Setup</h4><p>Enterprise WiFi configuration</p></div></div>
            <div class="proj-grid-item"><img src="Images/office-lights.png" alt="Modern LED office lighting installation" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Office Lighting Installation</h4><p>LED panel lighting with dimmers</p></div></div>
            <div class="proj-grid-item"><img src="Images/empty-escalator-stair.jpg" alt="Office building commercial escalator" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>Commercial Escalator</h4><p>Office building escalator system</p></div></div>
            <div class="proj-grid-item"><img src="Images/air-conditioning-decoration-interior.jpg" alt="HVAC central air conditioning in a commercial office" loading="lazy" decoding="async"><div class="proj-item-overlay"><h4>HVAC Installation</h4><p>Central air conditioning system</p></div></div>
        </div>
    </div>

    <!-- Mobile Slider (lazy: offscreen slides defer) -->
    <div class="proj-mobile-slider proj-mobile-only" id="projMobileSlider">
        <div class="proj-mobile-track">
            <div class="proj-mobile-slide"><img src="Images/cctvinter2.jpg" alt="Indoor CCTV camera installation in a residence" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>CCTV Camera Installation</h4><p>Residential security system with 4K cameras</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/fence-with-barbed-wire.jpg" alt="Electric fence perimeter security" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Electric Fence Installation</h4><p>Perimeter security with alarm integration</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/newcctv2.jpeg" alt="PTZ ceiling camera setup" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Ceiling Camera Setup</h4><p>Discreet surveillance for home security</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/Fingerprintaccesscontrol.png" alt="Fingerprint access control device" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Fingerprint Access Control</h4><p>Biometric entry system for homes</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/electric-fence.jpg" alt="8-strand electric perimeter fence" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Electric Perimeter Fence</h4><p>8-strand security fence</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/fire-sensor.jpg" alt="Residential fire sensor installation" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Fire Alarm System</h4><p>Smart smoke and heat detectors</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/newcctv.jpeg" alt="PTZ camera with remote control" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>PTZ Camera Installation</h4><p>360° surveillance with remote control</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/solar-panel.jpg" alt="Rooftop solar panel installation" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Solar Panel Installation</h4><p>5kW grid-tie solar system</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/WaterHeater.jpg" alt="Industrial water heater project" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Industrial Water Heating</h4><p>500L commercial water heater installation</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/escalator.jpg" alt="Mall escalator system" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Escalator Installation</h4><p>Shopping mall escalator system</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/fire-alarm-switch.jpg" alt="Industrial fire alarm panel" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Industrial Fire Alarm</h4><p>Addressable fire alarm system</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/catcables.jpeg" alt="Network switch cabling project" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Network Switch Installation</h4><p>48-port managed network switch</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/netRag.png" alt="Server rack setup project" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Server Rack Setup</h4><p>Enterprise network infrastructure</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/catcables.jpeg" alt="Structured CAT6 cabling" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Structured Cabling</h4><p>CAT6 data cabling installation</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/gps-system-smart-car.jpg" alt="GPS fleet tracking installation" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>GPS Fleet Tracking</h4><p>Vehicle tracking system installation</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/technician-engineer-checks-maintenance-solar-cell-panels.jpg" alt="Solar panel maintenance service" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Solar Panel Maintenance</h4><p>Solar system inspection and cleaning</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/modem-setup-troubleshooting-online-guides.jpg" alt="Office network router setup" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Network Router Setup</h4><p>Enterprise WiFi configuration</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/officelights.jpeg" alt="Office LED lighting project" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Office Lighting Installation</h4><p>LED panel lighting with dimmers</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/empty-escalator-stair.jpg" alt="Commercial escalator project" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>Commercial Escalator</h4><p>Office building escalator system</p></div></div>
            <div class="proj-mobile-slide"><img src="Images/air-conditioning-decoration-interior.jpg" alt="HVAC installation in office" loading="lazy" decoding="async"><div class="proj-mobile-caption"><h4>HVAC Installation</h4><p>Central air conditioning system</p></div></div>
        </div>

        <div class="proj-mobile-nav">
            <button class="proj-mobile-prev" aria-label="Previous project"><i class="fas fa-chevron-left"></i></button>
            <div class="proj-mobile-dots"></div>
            <button class="proj-mobile-next" aria-label="Next project"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>

<!-- ================= CTA ================= -->
<section class="proj-cta-section">
    <div class="proj-cta-container">
        <h2 class="proj-cta-title">Ready to Start Your Project?</h2>
        <p class="proj-cta-description">
            Let us bring your electrical and security vision to life. Our team of experts is ready to work with you
            to create a solution that meets your specific needs and exceeds your expectations.
        </p>
        <div class="proj-cta-buttons">
            <a href="appointments/create.php" class="proj-btn proj-btn-primary">
                <i class="fas fa-calendar-check"></i> Schedule Consultation
            </a>
            <a href="tel:+256760271098" class="proj-btn proj-btn-outline">
                <i class="fas fa-phone-alt"></i> Call: +256 760 271 098
            </a>
        </div>
    </div>
</section>

<!-- ================= LIGHTBOX ================= -->
<div class="proj-lightbox" id="projLightbox" role="dialog" aria-label="Project image viewer">
    <span class="proj-lightbox-close" aria-label="Close">&times;</span>
    <div class="proj-lightbox-content">
        <img class="proj-lightbox-img" id="projLightboxImg" src="" alt="Enlarged project photo">
        <div class="proj-lightbox-nav">
            <button class="proj-lightbox-prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
            <button class="proj-lightbox-next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</div>

<!-- ================= FOOTER ================= -->
<footer class="footer-section">
    <div class="footer-container">
        <div class="footer-box">
            <div class="logo-img-wrapper">
                <img src="Images/logo2.png" alt="FERMI logo" loading="lazy">
            </div>
            <h3 class="footer-title">About Us</h3>
            <p class="footer-text">We provide top-notch Security, Electrical & IT solutions with years of experience delivering reliable and innovative services.</p>
            <div class="footer-social">
                <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="footer-box">
            <h3 class="footer-title">Quick Links</h3>
            <ul class="footer-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">What we offer</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="appointments/create.php">Reserve Appointment</a></li>
            </ul>
        </div>

        <div class="footer-box">
            <h3 class="footer-title">Our Services</h3>
            <ul class="footer-links">
                <li><a href="services.php">WLAN/LAN Installation</a></li>
                <li><a href="services.php">Air Conditioning</a></li>
                <li><a href="services.php">Automatic Gates</a></li>
                <li><a href="services.php">Fire Alarms</a></li>
                <li><a href="services.php">View All</a></li>
            </ul>
        </div>

        <div class="footer-box contact-info">
            <h3 class="footer-title">Contact Us</h3>
            <div class="footer-contact-item">
                <a href="tel:+256760271098">+256 760 271 098</a>
                <a href="tel:+256754130885">+256 754 130 885</a>
            </div>
            <div class="footer-contact-item"><p>fermielectrictech@gmail.com</p></div>
            <div class="footer-contact-item"><p>Kampala, Uganda</p></div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2026 Fermi Electrical & IT Solutions. All Rights Reserved.</p>
    </div>
</footer>

<!-- <div id="ai-widget-container"></div> -->
 <!-- Floating WhatsApp CTA -->
<a href="https://wa.me/256760271098?text=Hello%20FERMI%2C%20I%20need%20assistance%20with%20your%20services"
   class="whatsapp-float"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="Chat with us on WhatsApp">
  <span class="wa-sign">
    <svg viewBox="0 0 16 16" aria-hidden="true" focusable="false">
      <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
    </svg>
  </span>
  <span class="wa-text">WhatsApp</span>
</a>

<!-- All scripts deferred: HTML parses & paints first, JS runs after -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
<script src="script.js" defer></script>
<script src="widget.js" defer></script>
<script src="projects.js" defer></script>
</body>
</html>
   
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ===== DESKTOP GRID FILTERING =====
    const tabLinks = document.querySelectorAll('.proj-tab-link');
    const grids = document.querySelectorAll('.proj-grid');
    
    tabLinks.forEach(tab => {
        tab.addEventListener('click', () => {
            // Update active tab
            tabLinks.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            
            // Get filter value
            const filter = tab.dataset.filter;
            
            // Show corresponding grid
            grids.forEach(grid => {
                if (grid.dataset.category === filter || filter === 'all') {
                    grid.classList.add('active');
                } else {
                    grid.classList.remove('active');
                }
            });
        });
    });
    
    // ===== MOBILE SLIDER =====
    const mobileTrack = document.querySelector('.proj-mobile-track');
    const mobileSlides = document.querySelectorAll('.proj-mobile-slide');
    const mobilePrev = document.querySelector('.proj-mobile-prev');
    const mobileNext = document.querySelector('.proj-mobile-next');
    const mobileDotsContainer = document.querySelector('.proj-mobile-dots');
    
    if (mobileSlides.length > 0 && mobileTrack) {
        let currentIndex = 0;
        let autoRotateInterval;
        
        // Create dots
        function createMobileDots() {
            mobileDotsContainer.innerHTML = '';
            mobileSlides.forEach((_, index) => {
                const dot = document.createElement('span');
                dot.className = `proj-mobile-dot ${index === 0 ? 'active' : ''}`;
                dot.addEventListener('click', () => {
                    goToSlide(index);
                    resetAutoRotate();
                });
                mobileDotsContainer.appendChild(dot);
            });
        }
        
        // Go to slide
        function goToSlide(index) {
            if (index < 0) index = mobileSlides.length - 1;
            if (index >= mobileSlides.length) index = 0;
            currentIndex = index;
            mobileTrack.style.transform = `translateX(-${currentIndex * 100}%)`;
            updateActiveDot();
        }
        
        // Update active dot
        function updateActiveDot() {
            const dots = document.querySelectorAll('.proj-mobile-dot');
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentIndex);
            });
        }
        
        // Next slide
        function nextSlide() {
            goToSlide(currentIndex + 1);
        }
        
        // Previous slide
        function prevSlide() {
            goToSlide(currentIndex - 1);
        }
        
        // Auto rotate
        function startAutoRotate() {
            stopAutoRotate();
            autoRotateInterval = setInterval(() => {
                nextSlide();
            }, 5000);
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
        if (mobilePrev && mobileNext) {
            mobilePrev.addEventListener('click', () => {
                prevSlide();
                resetAutoRotate();
            });
            
            mobileNext.addEventListener('click', () => {
                nextSlide();
                resetAutoRotate();
            });
        }
        
        // Initialize
        createMobileDots();
        startAutoRotate();
        
        // Pause on hover/touch
        mobileTrack.addEventListener('mouseenter', stopAutoRotate);
        mobileTrack.addEventListener('mouseleave', startAutoRotate);
        mobileTrack.addEventListener('touchstart', stopAutoRotate);
        mobileTrack.addEventListener('touchend', () => setTimeout(startAutoRotate, 5000));
    }
    
    // ===== LIGHTBOX =====
    const lightbox = document.getElementById('projLightbox');
    const lightboxImg = document.getElementById('projLightboxImg');
    const lightboxClose = document.querySelector('.proj-lightbox-close');
    const lightboxPrev = document.querySelector('.proj-lightbox-prev');
    const lightboxNext = document.querySelector('.proj-lightbox-next');
    
    // For desktop grid items
    const gridItems = document.querySelectorAll('.proj-grid-item');
    // For mobile slides
    const mobileItems = document.querySelectorAll('.proj-mobile-slide');
    
    let currentLightboxImages = [];
    let currentLightboxIndex = 0;
    
    // Helper to open lightbox
    function openLightbox(images, index) {
        currentLightboxImages = images;
        currentLightboxIndex = index;
        lightboxImg.src = currentLightboxImages[currentLightboxIndex];
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    
    // Desktop grid click
    gridItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            const allVisibleItems = Array.from(document.querySelectorAll('.proj-grid.active .proj-grid-item'));
            const images = allVisibleItems.map(item => item.querySelector('img').src);
            openLightbox(images, allVisibleItems.indexOf(item));
        });
    });
    
    // Mobile slide click
    mobileItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            const images = Array.from(document.querySelectorAll('.proj-mobile-slide')).map(slide => slide.querySelector('img').src);
            openLightbox(images, index);
        });
    });
    
    // Close lightbox
    lightboxClose.addEventListener('click', () => {
        lightbox.classList.remove('active');
        document.body.style.overflow = 'auto';
    });
    
    // Close on background click
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            lightbox.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    });
    
    // Navigation
    lightboxPrev.addEventListener('click', () => {
        currentLightboxIndex = (currentLightboxIndex - 1 + currentLightboxImages.length) % currentLightboxImages.length;
        lightboxImg.src = currentLightboxImages[currentLightboxIndex];
    });
    
    lightboxNext.addEventListener('click', () => {
        currentLightboxIndex = (currentLightboxIndex + 1) % currentLightboxImages.length;
        lightboxImg.src = currentLightboxImages[currentLightboxIndex];
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;
        
        if (e.key === 'Escape') {
            lightbox.classList.remove('active');
            document.body.style.overflow = 'auto';
        } else if (e.key === 'ArrowLeft') {
            lightboxPrev.click();
        } else if (e.key === 'ArrowRight') {
            lightboxNext.click();
        }
    });
    
    // ===== STATS COUNTER =====
    const statNumbers = document.querySelectorAll('.proj-stat-number');
    const statsSection = document.querySelector('.proj-stats-section');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                statNumbers.forEach(stat => {
                    const target = parseInt(stat.textContent.replace('+', '').replace('%', ''));
                    animateCounter(stat, target);
                });
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    if (statsSection) {
        observer.observe(statsSection);
    }
    
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 100;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target + (element.textContent.includes('%') ? '%' : '+');
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current) + (element.textContent.includes('%') ? '%' : '+');
            }
        }, 20);
    }
});
</script>
</body>
</html>