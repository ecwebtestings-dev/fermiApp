

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

<link rel="shortcut icon" href="/Images/favicon.png" type="image/x-icon">
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


<script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: "#F59E0B",
                    primaryDark: "#D97706",
                    background: "#0B1220",
                    card: "#111827",
                    muted: "#94A3B8",
                    liver: "#5D4037"
                },
                fontFamily: {
                    body: ["Noto Sans", "sans-serif"],
                    heading: ["Kodchasan", "sans-serif"]
                },
                boxShadow: {
                    glow: "0 0 60px rgba(245,158,11,.35)"
                }
            }
        }
    }
    </script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Electrician",
  "@id": "https://fermi.co.ug/#organization",
  "name": "FERMI Electrical & IT Solutions",
  "alternateName": "Fermi Electrotech",
  "url": "https://fermi.co.ug/",
  "logo": "https://fermi.co.ug/Images/logo2.png",
  "image": "https://fermi.co.ug/Images/og-cover.jpg",
  "telephone": "+256760271098",
  "email": "fermielectrictech@gmail.com",
  "priceRange": "$$",
  "description": "Certified security systems, electrical installations, and IT networking for residential, commercial, and industrial clients in Uganda.",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Kampala",
    "addressCountry": "UG"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "0.3476",
    "longitude": "32.5825"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
    "opens": "00:00",
    "closes": "23:59"
  },
  "areaServed": {
    "@type": "Country",
    "name": "Uganda"
  }
}
</script>

<link rel="icon" type="image/png" href="Images/favicon.png">
</head>

<style>
  

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


<!-- ================= PRELOADER  ================= -->
<div id="loader" class="fixed inset-0 z-[99999] flex items-center justify-center bg-orange-500">
    <div class="flex flex-col items-center gap-6">
        
        <div class="relative w-16 h-16 md:w-20 md:h-20">
            <!-- Outer ring -->
            <div class="absolute inset-0 border-4 border-white/20 rounded-full"></div>
            <!-- Animated ring -->
            <div class="absolute inset-0 border-4 border-t-white border-r-transparent border-b-transparent border-l-transparent rounded-full animate-spin"></div>
        </div>
        
        <!-- Logo -->
        <div class="text-center">
            <img src="./Images/logo2.png" alt="Fermi Logo" class="h-10 md:h-14 w-auto mx-auto mb-2 animate-pulse" />
            <p class="text-white font-semibold text-xs md:text-sm tracking-widest uppercase">Loading...</p>
        </div>
    </div>
</div>


<!-- ================= HEADER / NAVBAR (PREMIUM WHITE & ORANGE) ================= -->
<header class="fixed inset-x-0 top-0 z-50 transition-all duration-500" id="mainHeader">
    <div class="bg-white/95 backdrop-blur-lg border-b border-orange-100/50 shadow-sm transition-all duration-500" id="headerBackground">
        <nav aria-label="Global" class="flex items-center justify-between p-3 md:p-4 lg:px-8 max-w-7xl mx-auto">
            
            <!-- Logo -->
            <div class="flex lg:flex-1">
                <a href="index.php" class="-m-1.5 p-1.5 flex items-center gap-3 group">
                    <span class="sr-only">FERMI</span>
                    <img src="./Images/logo2.png" alt="Fermi Logo" class="h-10 md:h-12 w-auto transition-transform duration-300 group-hover:scale-105" />
                    <div class="sm:block">
                        <span class="block text-gray-900 font-bold text-xl tracking-tight">FERMI</span>
                        <span class="block text-orange-500 text-xs font-medium -mt-1 tracking-wider">Safe.Smart.Secure.</span>
                    </div>
                </a>
            </div>

            <!-- Desktop Nav Links -->
            <div class="hidden lg:flex lg:gap-x-10 xl:gap-x-12">
                <a href="index.php" class="text-sm font-semibold text-orange-600 relative group">
                    Home
                   
                </a>
                <a href="services.php" class="text-sm font-medium text-gray-700 hover:text-orange-600 transition-colors duration-300 relative group">
                    What We Offer
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-500 rounded-full transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="projects.php" class="text-sm font-medium text-gray-700 hover:text-orange-600 transition-colors duration-300 relative group">
                    Projects
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-500 rounded-full transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="services.php" class="text-sm font-medium text-gray-700 hover:text-orange-600 transition-colors duration-300 relative group">
                    Reserve Appointment
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-500 rounded-full transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            <!-- Desktop CTA Buttons -->
            <div class="hidden lg:flex lg:flex-1 lg:justify-end items-center gap-4">
               
                <a href="index.php" class="rounded-full bg-gradient-to-r from-orange-500 to-orange-600 px-6 py-2.5 text-sm font-semibold text-white shadow-sm shadow-orange-500/25 hover:shadow-orange-500/40 hover:-translate-y-0.5 transition-all duration-300">
                    Get Started
                    <i class="fas fa-arrow-right ml-2 text-xs"></i>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="flex lg:hidden">
                <button type="button" command="show-modal" commandfor="mobile-menu" class="inline-flex items-center justify-center rounded-lg p-2.5 text-gray-600 hover:text-orange-600 hover:bg-orange-50 transition-all duration-300">
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" data-slot="icon" aria-hidden="true" class="size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </nav>
    </div>

    <!-- Mobile Menu Dialog -->
    <el-dialog>
        <dialog id="mobile-menu" class="backdrop:bg-black/40 lg:hidden">
            <div tabindex="0" class="fixed inset-0 focus:outline-none">
                <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full max-w-sm overflow-y-auto bg-white p-6 shadow-2xl border-l border-orange-100/50">
                    
                    <div class="flex items-center justify-between">
                        <a href="index.php" class="flex items-center gap-3">
                            <img src="./Images/logo2.png" alt="Fermi Logo" class="h-8 w-auto" />
                            <div>
                                <span class="block text-gray-900 font-bold text-lg">FERMI</span>
                                <span class="block text-orange-500 text-xs -mt-1">Safe.Smart.Secure.</span>
                            </div>
                        </a>
                        <button type="button" command="close" commandfor="mobile-menu" class="rounded-lg p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-all duration-300">
                            <span class="sr-only">Close menu</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" data-slot="icon" aria-hidden="true" class="size-6">
                                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>

                    <div class="mt-8 flow-root">
                        <div class="-my-6 divide-y divide-gray-100">
                            <div class="space-y-3 py-6">
                                <a href="index.php" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-orange-600 ">
                                    Home
                                </a>
                                <a href="services.php" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-medium text-gray-700 ">
                                    What We Offer
                                </a>
                                <a href="projects.php" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-medium text-gray-700 ">
                                    Projects
                                </a>
                                <a href="services.php" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-medium text-gray-700 ">
                                    Reserve Appointment
                                </a>
                            </div>
                            <div class="py-6 space-y-3">
                                <a href="tel:+256760271098" class="flex items-center justify-center gap-2 -mx-3 rounded-lg px-3 py-3 text-base font-medium text-gray-700 bg-gray-50 hover:bg-gray-100 transition-colors duration-300">
                                    <i class="fas fa-phone-alt text-orange-500"></i>
                                    +256 760 271 098
                                </a>
                                <a href="index.php" class="block -mx-3 rounded-lg px-3 py-3 text-base font-semibold text-white bg-gradient-to-r from-orange-500 to-orange-600 text-center hover:shadow-lg hover:shadow-orange-500/25 transition-all duration-300">
                                    Get Started
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </el-dialog-panel>
            </div>
        </dialog>
    </el-dialog>

</header>

 <!-- ================= ABOUT / PROJECTS SECTION ================= -->
<section class="relative flex flex-col lg:flex-row items-center justify-center gap-10 lg:gap-20 py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white min-h-screen overflow-hidden">

    <!-- Decorative Background Accent -->
    <div class="absolute top-0 right-0 -translate-y-1/4 translate-x-1/4 w-[500px] h-[500px] bg-orange-50 rounded-full blur-3xl opacity-60 pointer-events-none" aria-hidden="true"></div>

    <!-- Image Container -->
    <div class="flex-1 w-full max-w-xl lg:max-w-none mt-8 lg:mt-0 relative group">
        <div class="absolute inset-0 bg-orange-500 rounded-lg translate-x-3 translate-y-3 opacity-20 transition-transform duration-300 group-hover:translate-x-4 group-hover:translate-y-4" aria-hidden="true"></div>
        <img
            src="Images/smart-home.jpg"
            alt="Professional electrical and smart home services"
            class="relative w-full h-auto min-h-[300px] md:min-h-[400px] lg:min-h-[550px] object-cover rounded-lg shadow-xl transition-transform duration-300 group-hover:-translate-y-1"
            loading="lazy"
        />
    </div>

    <!-- Content Container -->
    <div class="flex-1 max-w-2xl lg:max-w-[600px] w-full text-left">
        

        <!-- Heading -->
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 mb-5 leading-tight">
            Responsive &amp; Professional
        </h2>

        <!-- Description -->
        <p class="text-gray-600 text-base md:text-lg leading-relaxed mb-8 max-w-prose">
            We go the extra mile on every project. The value we provide clients comes from our level of skill
            and performance, as well as our knowledge and professionalism. Rest assured, we put the same level
            of energy into every project we take on.
        </p>

        <!-- Contact Info Card -->
        <div class="bg-gray-50 border border-gray-100 rounded-xl p-6 inline-block w-full sm:w-auto hover:shadow-md transition-shadow duration-300">
            <h4 class="font-semibold text-gray-700 text-sm uppercase tracking-wide mb-2">Call us today</h4>
            <p class="text-2xl md:text-3xl font-bold text-orange-500 flex items-center gap-3">
                <span class="flex items-center justify-center w-10 h-10 rounded-full bg-orange-100 text-orange-500 text-base shrink-0">
                    <i class="fas fa-phone-alt"></i>
                </span>
                +256 760271098
            </p>
            <p class="text-gray-500 text-sm mt-3 ml-[52px]">We're available 24/7, 365 days a year.</p>
        </div>
    </div>
</section>

<!-- ================= GALLERY SECTION ================= -->
<section class="relative py-20 md:py-28 bg-gray-50 overflow-hidden">

    <!-- Subtle Background Decoration -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-orange-100/40 rounded-full blur-3xl pointer-events-none" aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
            <span class="inline-block px-5 py-1.5 mb-4 text-xs font-bold tracking-[0.2em] uppercase text-orange-600 bg-orange-50 border border-orange-100 rounded-full">
                Portfolio
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">
                Our Projects Gallery
            </h2>
            <div class="mt-4 mx-auto w-20 h-1.5 bg-gradient-to-r from-orange-400 to-amber-500 rounded-full"></div>
        </div>

        <!-- Desktop Filter Tabs -->
        <div class="hidden md:flex justify-center flex-wrap gap-3 mb-12" data-aos="fade-up" data-aos-delay="200">
            <button class="proj-tab-link active px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 border border-orange-200 bg-white text-gray-700 hover:border-orange-400 hover:text-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400/50 data-[active]:bg-gradient-to-r data-[active]:from-orange-500 data-[active]:to-amber-500 data-[active]:text-white data-[active]:border-transparent data-[active]:shadow-lg data-[active]:shadow-orange-500/25" data-filter="all">All Projects</button>
            <button class="proj-tab-link px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 border border-orange-200 bg-white text-gray-700 hover:border-orange-400 hover:text-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400/50 data-[active]:bg-gradient-to-r data-[active]:from-orange-500 data-[active]:to-amber-500 data-[active]:text-white data-[active]:border-transparent data-[active]:shadow-lg data-[active]:shadow-orange-500/25" data-filter="residences">Residential</button>
            <button class="proj-tab-link px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 border border-orange-200 bg-white text-gray-700 hover:border-orange-400 hover:text-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400/50 data-[active]:bg-gradient-to-r data-[active]:from-orange-500 data-[active]:to-amber-500 data-[active]:text-white data-[active]:border-transparent data-[active]:shadow-lg data-[active]:shadow-orange-500/25" data-filter="industrial">Industrial</button>
            <button class="proj-tab-link px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 border border-orange-200 bg-white text-gray-700 hover:border-orange-400 hover:text-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400/50 data-[active]:bg-gradient-to-r data-[active]:from-orange-500 data-[active]:to-amber-500 data-[active]:text-white data-[active]:border-transparent data-[active]:shadow-lg data-[active]:shadow-orange-500/25" data-filter="offices">Commercial</button>
        </div>

        <!-- Desktop Grid -->
        <div class="hidden md:block" id="projGrid">

            <!-- ALL -->
            <div class="proj-grid active grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-5" data-category="all">
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/caera.jpg" alt="4K CCTV security camera installed on a home in Kampala" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">CCTV Camera Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Residential security system with 4K cameras</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/fence-with-barbed-wire.jpg" alt="Electric perimeter fence with barbed wire securing a residence" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Electric Fence Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Perimeter security with alarm integration</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/newcctv.jpeg" alt="Ceiling-mounted dome CCTV camera for discreet home surveillance" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Ceiling Camera Setup</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Discreet surveillance for home security</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/Facialrecognitionaccesscontrol.png" alt="Biometric fingerprint access control panel for home entry" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Fingerprint Access Control</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Biometric entry system for homes</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/electric-fence.jpg" alt="8-strand electric security fence around a residence" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Electric Perimeter Fence</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">8-strand security fence</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/NEWfirealarm.jpeg" alt="Smart fire alarm with smoke and heat detectors in a home" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Fire Alarm System</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Smart smoke and heat detectors</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/newcctv2.jpeg" alt="PTZ CCTV camera with 360° remote-controlled surveillance" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">PTZ Camera Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">360° surveillance with remote control</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/solar-panel.jpg" alt="5kW grid-tie rooftop solar panel system installed in Uganda" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Solar Panel Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">5kW grid-tie solar system</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/WaterHeater.jpg" alt="500L commercial water heater installation" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Industrial Water Heating</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">500L commercial water heater installation</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/escalator.jpg" alt="Shopping mall escalator system installed by FERMI" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Escalator Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Shopping mall escalator system</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/fire-alarm-switch.jpg" alt="Addressable industrial fire alarm control panel" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Industrial Fire Alarm</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Addressable fire alarm system</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/cat2cables.jpeg" alt="48-port managed network switch with CAT6 patch cables" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Network Switch Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">48-port managed network switch</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/netRag.png" alt="Enterprise server rack with organized network cabling" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Server Rack Setup</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Enterprise network infrastructure</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/catcables.jpeg" alt="CAT6 structured data cabling installation" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Structured Cabling</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">CAT6 data cabling installation</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/gps-system-smart-car.jpg" alt="GPS vehicle tracking system installed in a car" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">GPS Fleet Tracking</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Vehicle tracking system installation</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/technician-engineer-checks-maintenance-solar-cell-panels.jpg" alt="FERMI technician inspecting and cleaning solar panels" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Solar Panel Maintenance</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Solar system inspection and cleaning</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/switch.png" alt="Enterprise WiFi switch configuration and troubleshooting" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Network Router Setup</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Enterprise WiFi configuration</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/officelights.jpeg" alt="LED panel office lighting installation with dimmers" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Office Lighting Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">LED panel lighting with dimmers</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/empty-escalator-stair.jpg" alt="Commercial escalator system in an office building" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Commercial Escalator</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Office building escalator system</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/air-conditioning-decoration-interior.jpg" alt="Central air conditioning system in a modern office interior" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">HVAC Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Central air conditioning system</p>
                    </div>
                </div>
            </div>

            <!-- RESIDENTIAL -->
            <div class="proj-grid hidden grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-5" data-category="residences">
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/RoofCCT.jpg" alt="Residential CCTV security installation in Kampala" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">CCTV Camera Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Residential security system with 4K cameras</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/fence-with-barbed-wire.jpg" alt="Electric fence with barbed wire on a home perimeter" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Electric Fence Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Perimeter security with alarm integration</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/AutomatedCamera1.jpeg" alt="Ceiling dome camera for discreet home surveillance" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Ceiling Camera Setup</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Discreet surveillance for home security</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/SmartDoor.png" alt="Fingerprint biometric access control for a residence" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Fingerprint Access Control</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Biometric entry system for homes</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/electric-fence.jpg" alt="8-strand electric perimeter fence" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Electric Perimeter Fence</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">8-strand security fence</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/fire-sensor.jpg" alt="Ceiling fire sensor and smoke detector in a home" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Fire Alarm System</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Smart smoke and heat detectors</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/AutomatedCamera.jpeg" alt="PTZ camera monitoring a property remotely" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">PTZ Camera Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">360° surveillance with remote control</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/solar-panel.jpg" alt="Rooftop solar panel array on a residence" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Solar Panel Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">5kW grid-tie solar system</p>
                    </div>
                </div>
            </div>

            <!-- INDUSTRIAL -->
            <div class="proj-grid hidden grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-5" data-category="industrial">
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/WaterHeater.jpg" alt="Industrial 500L water heater installation" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Industrial Water Heating</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">500L commercial water heater installation</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/escalator.jpg" alt="Mall escalator installation project" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Escalator Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Shopping mall escalator system</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/fire-alarm-switch.jpg" alt="Industrial addressable fire alarm switch panel" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Industrial Fire Alarm</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Addressable fire alarm system</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/rag.jpg" alt="Managed network switch with patched cables" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Network Switch Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">48-port managed network switch</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/netRag.jpg" alt="Enterprise server rack network infrastructure" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Server Rack Setup</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Enterprise network infrastructure</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/RecordingBox.jpeg" alt="CAT6 structured cabling with red status lights" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Structured Cabling</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">CAT6 data cabling installation</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/gps-system-smart-car.jpg" alt="GPS fleet tracking device in a vehicle" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">GPS Fleet Tracking</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Vehicle tracking system installation</p>
                    </div>
                </div>
            </div>

            <!-- COMMERCIAL -->
            <div class="proj-grid hidden grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-5" data-category="offices">
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/SmartCameraAndLight.jpeg" alt="Office WiFi router setup and configuration" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Network Router Setup</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Enterprise WiFi configuration</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/officelights.jpeg" alt="Modern LED office lighting installation" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Office Lighting Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">LED panel lighting with dimmers</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/empty-escalator-stair.jpg" alt="Office building commercial escalator" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">Commercial Escalator</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Office building escalator system</p>
                    </div>
                </div>
                <div class="proj-grid-item group relative aspect-[4/3] rounded-xl overflow-hidden shadow-md cursor-pointer">
                    <img src="Images/air-conditioning-decoration-interior.jpg" alt="HVAC central air conditioning in a commercial office" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900/10 via-gray-900/60 to-orange-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-5 text-center text-white">
                        <h4 class="text-base font-bold mb-1 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">HVAC Installation</h4>
                        <p class="text-sm opacity-90 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-100">Central air conditioning system</p>
                    </div>
                </div>
            </div>
        </div>

                <!-- Mobile Slider -->
        <div class="md:hidden relative" id="projMobileSlider">
            
            <!-- Track Container -->
            <div class="proj-mobile-track flex transition-transform duration-500 ease-out mb-8">
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/cctvinter2.jpg" alt="Indoor CCTV camera installation in a residence" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">CCTV Camera Installation</h4>
                            <p class="text-sm opacity-90">Residential security system with 4K cameras</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/fence-with-barbed-wire.jpg" alt="Electric fence perimeter security" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Electric Fence Installation</h4>
                            <p class="text-sm opacity-90">Perimeter security with alarm integration</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/newcctv2.jpeg" alt="PTZ ceiling camera setup" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Ceiling Camera Setup</h4>
                            <p class="text-sm opacity-90">Discreet surveillance for home security</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/SmartDoor.jpg" alt="Fingerprint access control device" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Fingerprint Access Control</h4>
                            <p class="text-sm opacity-90">Biometric entry system for homes</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/electric-fence.jpg" alt="8-strand electric perimeter fence" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Electric Perimeter Fence</h4>
                            <p class="text-sm opacity-90">8-strand security fence</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/fire-sensor.jpg" alt="Residential fire sensor installation" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Fire Alarm System</h4>
                            <p class="text-sm opacity-90">Smart smoke and heat detectors</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/newcctv.jpeg" alt="PTZ camera with remote control" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">PTZ Camera Installation</h4>
                            <p class="text-sm opacity-90">360° surveillance with remote control</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/solar-panel.jpg" alt="Rooftop solar panel installation" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Solar Panel Installation</h4>
                            <p class="text-sm opacity-90">5kW grid-tie solar system</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/WaterHeater.jpg" alt="Industrial water heater project" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Industrial Water Heating</h4>
                            <p class="text-sm opacity-90">500L commercial water heater installation</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/escalator.jpg" alt="Mall escalator system" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Escalator Installation</h4>
                            <p class="text-sm opacity-90">Shopping mall escalator system</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/fire-alarm-switch.jpg" alt="Industrial fire alarm panel" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Industrial Fire Alarm</h4>
                            <p class="text-sm opacity-90">Addressable fire alarm system</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/catcables.jpeg" alt="Network switch cabling project" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Network Switch Installation</h4>
                            <p class="text-sm opacity-90">48-port managed network switch</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/netRag.png" alt="Server rack setup project" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Server Rack Setup</h4>
                            <p class="text-sm opacity-90">Enterprise network infrastructure</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/catcables.jpeg" alt="Structured CAT6 cabling" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Structured Cabling</h4>
                            <p class="text-sm opacity-90">CAT6 data cabling installation</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/gps-system-smart-car.jpg" alt="GPS fleet tracking installation" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">GPS Fleet Tracking</h4>
                            <p class="text-sm opacity-90">Vehicle tracking system installation</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/technician-engineer-checks-maintenance-solar-cell-panels.jpg" alt="Solar panel maintenance service" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Solar Panel Maintenance</h4>
                            <p class="text-sm opacity-90">Solar system inspection and cleaning</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/modem-setup-troubleshooting-online-guides.jpg" alt="Office network router setup" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Network Router Setup</h4>
                            <p class="text-sm opacity-90">Enterprise WiFi configuration</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/officelights.jpeg" alt="Office LED lighting project" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Office Lighting Installation</h4>
                            <p class="text-sm opacity-90">LED panel lighting with dimmers</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/empty-escalator-stair.jpg" alt="Commercial escalator project" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">Commercial Escalator</h4>
                            <p class="text-sm opacity-90">Office building escalator system</p>
                        </div>
                    </div>
                </div>
                <div class="proj-mobile-slide flex-none w-full px-2">
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img src="Images/air-conditioning-decoration-interior.jpg" alt="HVAC installation in office" loading="lazy" decoding="async" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent p-5 pt-12 text-white">
                            <h4 class="text-lg font-bold text-orange-400 mb-1">HVAC Installation</h4>
                            <p class="text-sm opacity-90">Central air conditioning system</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Controls (Below Slider) -->
            <div class="flex items-center justify-center gap-5 pt-4">
                <button class="proj-mobile-prev w-11 h-11 rounded-full bg-white border-2 border-orange-500 text-orange-500 flex items-center justify-center text-sm transition-all duration-300 hover:bg-gradient-to-r hover:from-orange-500 hover:to-amber-500 hover:text-white hover:border-transparent focus:outline-none focus:ring-2 focus:ring-orange-400/50 shadow-md hover:shadow-lg" aria-label="Previous project">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="proj-mobile-dots flex gap-2"></div>
                <button class="proj-mobile-next w-11 h-11 rounded-full bg-white border-2 border-orange-500 text-orange-500 flex items-center justify-center text-sm transition-all duration-300 hover:bg-gradient-to-r hover:from-orange-500 hover:to-amber-500 hover:text-white hover:border-transparent focus:outline-none focus:ring-2 focus:ring-orange-400/50 shadow-md hover:shadow-lg" aria-label="Next project">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

        
    </div>
</section>


<!-- ================= FOOTER ================= -->
<footer class="relative text-gray-300 overflow-hidden bg-cover bg-center bg-no-repeat" 
        style="background-image: url('Images/network-switch-with-cables.jpg');">
    
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/90"></div>
    
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-amber-500/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-[500px] h-[500px] bg-orange-500/5 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-amber-400/5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20 relative z-10">
        
        <!-- Main Footer Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12">
            
            <!-- About Column -->
            <div class="footer-box space-y-4">
                <div class="logo-img-wrapper mb-4">
                    <img src="./Images/logo2.png" alt="Fermi Logo" class="h-12 md:h-14 w-auto object-contain" />
                </div>
                <h3 class="footer-title text-white text-lg font-bold">About Us</h3>
                <p class="footer-text text-gray-400 text-sm leading-relaxed">
                    We provide top-notch Security, Electrical & IT solutions with years of experience delivering reliable and innovative services.
                </p>
                <div class="footer-social flex gap-3 pt-2">
                    <a href="#" class="social-link w-10 h-10 rounded-full bg-gray-800 hover:bg-amber-500 text-gray-400 hover:text-white flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-amber-500/25">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </a>
                    <a href="#" class="social-link w-10 h-10 rounded-full bg-gray-800 hover:bg-amber-500 text-gray-400 hover:text-white flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-amber-500/25">
                        <i class="fab fa-twitter text-sm"></i>
                    </a>
                    <a href="#" class="social-link w-10 h-10 rounded-full bg-gray-800 hover:bg-amber-500 text-gray-400 hover:text-white flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-amber-500/25">
                        <i class="fab fa-linkedin-in text-sm"></i>
                    </a>
                    <a href="#" class="social-link w-10 h-10 rounded-full bg-gray-800 hover:bg-amber-500 text-gray-400 hover:text-white flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-amber-500/25">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links Column -->
            <div class="footer-box space-y-4">
                <h3 class="footer-title text-white text-lg font-bold relative inline-block">
                    Quick Links
                </h3>
                <ul class="footer-links space-y-3">
                    <li>
                        <a href="index.php" class="text-sm text-gray-400 hover:text-amber-400 transition-colors duration-300 flex items-center gap-2">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="services.php" class="text-sm text-gray-400 hover:text-amber-400 transition-colors duration-300 flex items-center gap-2">
                            What We Offer
                        </a>
                    </li>
                    <li>
                        <a href="projects.php" class="text-sm text-gray-400 hover:text-amber-400 transition-colors duration-300 flex items-center gap-2">
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="services.php" class="text-sm text-gray-400 hover:text-amber-400 transition-colors duration-300 flex items-center gap-2">
                            Reserve Appointment
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Services Column -->
            <div class="footer-box space-y-4">
                <h3 class="footer-title text-white text-lg font-bold relative inline-block">
                    Our Services
                </h3>
                <ul class="footer-links space-y-3">
                    <li>
                        <a href="services.php" class="text-sm text-gray-400 hover:text-amber-400 transition-colors duration-300 flex items-center gap-2">
                            WLAN/LAN Installation
                        </a>
                    </li>
                    <li>
                        <a href="services.php" class="text-sm text-gray-400 hover:text-amber-400 transition-colors duration-300 flex items-center gap-2">
                            Air Conditioning
                        </a>
                    </li>
                    <li>
                        <a href="services.php" class="text-sm text-gray-400 hover:text-amber-400 transition-colors duration-300 flex items-center gap-2">
                            Automatic Gates
                        </a>
                    </li>
                    <li>
                        <a href="services.php" class="text-sm text-gray-400 hover:text-amber-400 transition-colors duration-300 flex items-center gap-2">
                            Fire Alarms
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Contact Column -->
            <div class="footer-box space-y-4">
                <h3 class="footer-title text-white text-lg font-bold relative inline-block">
                    Contact Us
                </h3>
                <div class="footer-contact-item space-y-4">
                    <div class="flex items-start gap-3">
                        <div class="space-y-1">
                            <a href="tel:+256760271098" class="text-gray-400 hover:text-amber-400 transition-colors duration-300 block text-sm">
                                +256 760 271 098
                            </a>
                            <a href="tel:+256754130885" class="text-gray-400 hover:text-amber-400 transition-colors duration-300 block text-sm">
                                +256 754 130 885
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <a href="mailto:fermielectrictech@gmail.com" class="text-gray-400 hover:text-amber-400 transition-colors duration-300 text-sm break-all">
                            fermielectrictech@gmail.com
                        </a>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <p class="text-gray-400 text-sm">Kampala, Uganda</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Bar -->
        <div class="footer-bottom mt-12 pt-8 border-t border-gray-800 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-gray-500 text-sm text-center sm:text-left">
                &copy; 2026 Fermi Electrical & IT Solutions. All Rights Reserved.
            </p>
            
            <div class="flex items-center gap-6 text-xs text-gray-500">
                <a href="#" class="hover:text-amber-400 transition-colors duration-300">Privacy Policy</a>
                <span class="w-px h-4 bg-gray-700"></span>
                <a href="#" class="hover:text-amber-400 transition-colors duration-300">Terms of Service</a>
                <span class="w-px h-4 bg-gray-700"></span>
                <a href="#" class="hover:text-amber-400 transition-colors duration-300">Sitemap</a>
            </div>
        </div>
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


// ===== MOBILE SLIDER =====
document.addEventListener('DOMContentLoaded', function() {
    // FIX: Use class selector instead of ID
    const track = document.querySelector('.proj-mobile-track');
    if (!track) return;
    
    const slides = track.querySelectorAll('.proj-mobile-slide');
    const prevBtn = document.querySelector('.proj-mobile-prev');
    const nextBtn = document.querySelector('.proj-mobile-next');
    const dotsContainer = document.querySelector('.proj-mobile-dots');
    
    let currentIndex = 0;
    let totalSlides = slides.length;
    let isAnimating = false;

    // Generate dots dynamically with Tailwind classes
    if (dotsContainer) {
        dotsContainer.innerHTML = '';
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement('button');
            dot.className = `w-2.5 h-2.5 rounded-full transition-all duration-300 ${
                i === 0 ? 'bg-amber-500 scale-150' : 'bg-gray-300 hover:bg-amber-300'
            }`;
            dot.setAttribute('data-index', i);
            dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
            dot.addEventListener('click', () => goToSlide(i));
            dotsContainer.appendChild(dot);
        }
    }

    function updateSlider() {
        if (isAnimating) return;
        isAnimating = true;
        
        // Calculate offset accounting for slide padding (px-2 = 8px each side = 16px total)
        const slideWidth = slides[0].offsetWidth;
        const offset = currentIndex * slideWidth;
        
        track.style.transform = `translateX(-${offset}px)`;
        
        // Update dots
        const dots = dotsContainer.querySelectorAll('button');
        dots.forEach((dot, i) => {
            dot.className = `w-2.5 h-2.5 rounded-full transition-all duration-300 ${
                i === currentIndex ? 'bg-amber-500 scale-150' : 'bg-gray-300 hover:bg-amber-300'
            }`;
        });
        
        // Allow next animation after transition completes
        setTimeout(() => {
            isAnimating = false;
        }, 500); // Match the transition duration in CSS
    }

    function goToSlide(index) {
        if (isAnimating) return;
        
        // Wrap around
        if (index < 0) index = totalSlides - 1;
        if (index >= totalSlides) index = 0;
        
        currentIndex = index;
        updateSlider();
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => goToSlide(currentIndex - 1));
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => goToSlide(currentIndex + 1));
    }

    // Enhanced touch support with swipe detection
    let touchStartX = 0;
    let touchStartY = 0;
    let touchEndX = 0;
    let isSwiping = false;

    track.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
        touchStartY = e.changedTouches[0].screenY;
        isSwiping = false;
    }, { passive: true });

    track.addEventListener('touchmove', (e) => {
        if (!isSwiping) {
            const touchCurrentX = e.changedTouches[0].screenX;
            const touchCurrentY = e.changedTouches[0].screenY;
            const diffX = Math.abs(touchStartX - touchCurrentX);
            const diffY = Math.abs(touchStartY - touchCurrentY);
            
            // Determine if horizontal swipe
            if (diffX > diffY && diffX > 10) {
                isSwiping = true;
            }
        }
    }, { passive: true });

    track.addEventListener('touchend', (e) => {
        if (!isSwiping) return;
        
        touchEndX = e.changedTouches[0].screenX;
        const diff = touchStartX - touchEndX;
        
        // Require minimum swipe distance
        if (Math.abs(diff) > 50) {
            if (diff > 0) {
                goToSlide(currentIndex + 1);
            } else {
                goToSlide(currentIndex - 1);
            }
        }
    }, { passive: true });

    // Auto-play (optional - uncomment to enable)
    /*
    let autoPlayInterval;
    
    function startAutoPlay() {
        autoPlayInterval = setInterval(() => {
            goToSlide(currentIndex + 1);
        }, 5000);
    }
    
    function stopAutoPlay() {
        clearInterval(autoPlayInterval);
    }
    
    // Start auto-play, pause on interaction
    startAutoPlay();
    track.addEventListener('mouseenter', stopAutoPlay);
    track.addEventListener('mouseleave', startAutoPlay);
    track.addEventListener('touchstart', stopAutoPlay, { passive: true });
    */

    // Handle window resize
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            updateSlider();
        }, 250);
    });

    // Initialize
    updateSlider();
});




</script>
</body>
</html>