
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
    <!-- ====== PRIMARY SEO ====== -->
    <title>Fermi Professional Security, Electrical & IT Solutions in Uganda | Safe.Smart.Secure.</title>
    <meta name="description" content="FERMI provides certified CCTV surveillance, access control, automatic gates, fire alarms, electrical installations, and IT networking for homes and businesses across Uganda. 24/7 emergency support.">
    <meta name="keywords" content="CCTV Uganda, security systems Kampala, electrical contractor Uganda, access control, fire alarms, automatic gates, IT networking, Fermi Electrotech, fermi.co.ug">
    <meta name="author" content="FERMI Electrical & IT Solutions">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
    <meta name="googlebot" content="index, follow">
    <link rel="canonical" href="https://fermi.co.ug/">

    <!-- ====== THEME & PERFORMANCE ====== -->
    <meta name="theme-color" content="#fff">
    <meta name="color-scheme" content="#fff">
    <meta http-equiv="Cache-Control" content="public, max-age=31536000">

    <!-- ====== OPEN GRAPH ====== -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://fermi.co.ug/">
    <meta property="og:title" content="FERMI | Professional Security, Electrical & IT Solutions in Uganda">
    <meta property="og:description" content="Certified CCTV, access control, electrical installations and IT networking. 10+ years of excellence. 24/7 support.">
    <!-- Ensure you have an image named og-cover.jpg in your Images folder  -->
    <meta property="og:image" content="https://fermi.co.ug/Images/og-cover.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_UG">
    <meta property="og:site_name" content="FERMI">

    <!-- ====== TWITTER CARD ====== -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FERMI | Professional Security, Electrical & IT Solutions in Uganda">
    <meta name="twitter:description" content="Certified CCTV, access control, electrical installations and IT networking. 24/7 support.">
    <meta name="twitter:image" content="https://fermi.co.ug/Images/og-cover.jpg">

    <!-- ====== RESOURCE HINTS  ====== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="https://unpkg.com">
    <link rel="dns-prefetch" href="https://cdn.tailwindcss.com">
    <link rel="dns-prefetch" href="https://images.unsplash.com">

    <!-- Preload hero logo -->
    <link rel="preload" as="image" href="./Images/logo2.png" fetchpriority="high">
    <link rel="preload" as="style" href="styles.css">


     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- ====== FONTS ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&family=Kodchasan:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons&display=swap" rel="stylesheet">

    <!-- ====== EXTERNAL CSS ====== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="widget.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="services.css">

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

    <!-- ====== STRUCTURED DATA: Local Business (huge SEO boost for .co.ug) ====== -->
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
      "sameAs": [
        "https://facebook.com/fermi",
        "https://twitter.com/fermi",
        "https://linkedin.com/company/fermi"
      ],
      "areaServed": {
        "@type": "Country",
        "name": "Uganda"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "102"
      }
    }
    </script>

    <!-- ====== FAVICON ====== -->
    <link rel="icon" type="image/png" href="./Images/favicon.png">

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
    /* ===== SERVICES HERO SECTION ===== */

    
.serv-hero-section {
    min-height: 100vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    padding: 140px 0px 50px;
}

.serv-hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}

.serv-bg-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    animation: servZoom 20s ease-in-out infinite alternate;
}

@keyframes servZoom {
    0% { transform: scale(1); }
    100% { transform: scale(1.1); }
}

.serv-bg-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        to bottom,
        rgba(0,0,0,.85),
        rgba(20,20,20,.75),
        rgba(60,60,60,.45),
        rgba(255,255,255,.15)
    );
    z-index: 1;
}

.serv-hero-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 2;
    width: 100%;
}

.serv-hero-content {
    max-width: 700px;
    color: white;
}

.serv-tag {
    display: inline-block;
    background: rgba(255, 102, 0, 0.2);
    color: var();
    padding: 0.6rem 1.5rem;
    border-radius: 30px;
    font-size: 0.9rem;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 1.5rem;
    text-transform: uppercase;
    border: 1px solid rgba(255, 102, 0, 0.3);
    backdrop-filter: blur(5px);
}

.serv-title {
    font-size: 3.5rem;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.serv-text {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 2.5rem;
    line-height: 1.8;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
}

.serv-highlight {
    color: var(--primary-light);
    font-weight: 600;
}

.serv-cta-group {
    display: flex;
    gap: 1rem;
    margin-bottom: 2.5rem;
    flex-wrap: wrap;
}

.serv-btn {
    padding: 1rem 2.5rem;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.7rem;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    font-size: 1.1rem;
}

.serv-btn-primary {
    background:  var(--primary-dark);
    color: white;
    box-shadow: 0 5px 15px rgba(255, 102, 0, 0.4);
}

.serv-btn-primary:hover {
    box-shadow: 0 8px 25px rgba(255, 102, 0, 0.5);
}

.serv-btn-secondary {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(5px);
}

.serv-btn-secondary:hover {
    background: var(--primary-dark);
    border-color: var(--primary-light) !important;
    transform: translateY(-3px);
}

/* Trust Badges */
.serv-trust-badges {
    display: flex;
    gap: 2rem;
    flex-wrap: wrap;
}

.serv-trust-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.95rem;
    background: rgba(255, 255, 255, 0.1);
    padding: 0.5rem 1rem;
    border-radius: 30px;
    backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.serv-trust-item i {
    color: var(--primary-dark);
}


@media (max-width: 1024px) {
    .serv-hero-container {
        padding: 0 1.5rem;
    }
    
    .serv-title {
        font-size: 2.8rem;
    }
    
    .serv-text {
        font-size: 1.1rem;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .serv-hero-section {
        min-height: 90vh;
        align-items: center;
        padding-top: 100px; 
    }
    
    .serv-hero-container {
        padding: 0 1.25rem;
    }
    
    .serv-hero-content {
        max-width: 100%;
        text-align: left;
    }
    
    .serv-title {
        font-size: 2.2rem;
        text-align: left;
        margin-bottom: 1rem;
    }
    
    .serv-text {
        font-size: 1rem;
        text-align: left;
        margin-bottom: 1.5rem;
    }
    
    .serv-cta-group {
        justify-content: flex-start;
    }
    
    .serv-trust-badges {
        justify-content: flex-start;
        gap: 1rem;
    }
    
    .serv-scroll-indicator {
        bottom: 20px;
    }
}

/* Small Mobile */
@media (max-width: 480px) {
    .serv-hero-section {
        min-height: 90vh;
        padding-top: 120px;
        align-items: flex-start;
        justify-content: center;
        
    }
    
    .serv-hero-container {
        padding: 0 1rem;
    }
    
    .serv-hero-content {
        padding-top: 3rem;
    }
    
    .serv-title {
        font-size: 1.8rem;
        line-height: 1.3;
        text-align: left;
        margin-bottom: 2rem;
    }
    
    .serv-text {
        font-size: 0.95rem;
        text-align: left;
        margin-bottom: 2rem;
        
    }
    
    .serv-cta-group {
        flex-direction: column;
        width: 100%;
        gap: 0.8rem;
        margin-top: 2rem;
    }
    
    .serv-btn {
        width: 100%;
        justify-content: center;
        padding: 0.9rem 1.5rem;
        font-size: 1rem;
    }
    
    .serv-trust-badges {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.7rem;
    }
    
    .serv-trust-item {
        width: 100%;
        justify-content: flex-start;
    }
    
    .serv-scroll-indicator {
        bottom: 15px;
    }
    
    .serv-scroll-indicator span {
        font-size: 0.7rem;
    }
}

/* Extra Small Mobile */
@media (max-width: 360px) {
    .serv-hero-section {
        padding-top: 80px;
    }
    
    .serv-title {
        font-size: 1.5rem;
    }
    
    .serv-text {
        font-size: 0.9rem;
    }
}



/* ===== CONTACT SECTION ===== */
.serv-contact-section {
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}



.serv-contact-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
    position: relative;
    z-index: 2;
}
.serv-image-container{
    position: relative;
    border-radius: 20px;
    overflow: hidden;
}

.serv-image-container::before{
    content: "";
    position: absolute;
    inset: 12px -12px -12px 12px;
    border: 3px solid var(--primary-light);
    border-radius: 20px;
    z-index: -1;
    transition: .4s;
}

.serv-image-container:hover::before{
    inset: 8px -8px -8px 8px;
}


.serv-contact-image img {
    width: 100%;
    height: 500px;
    object-fit: cover;
    display: block;
    transition: transform 0.6s ease;
}

.serv-contact-subtitle {
    color: var(--primary-dark);
    font-size: 0.95rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 1rem;
    display: inline-block;
    padding: 0.5rem 1.5rem;
    background: rgba(255, 102, 0, 0.1);
    border-radius: 30px;
    border: 1px solid rgba(255, 102, 0, 0.2);
}

.serv-contact-title {
    font-size: 2.5rem;
    font-weight: 600;
    color: var(--header-color);
    line-height: 1.2;
    margin-bottom: 1.5rem;
}



.serv-contact-description {
    color: var(--text-gray);
    font-size: 1.1rem;
    line-height: 1.4;
    margin-bottom: 1.2rem;
}

.serv-contact-details {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.serv-contact-item {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    padding: 1.5rem;
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 102, 0, 0.1);
}

.serv-contact-item:hover {
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
    border-color: var(--header-color);
}

.serv-contact-item i {
    width: 50px;
    height: 50px;
    background: linear-gradient(145deg, var(--primary-dark),var(--primary-light));
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    flex-shrink: 0;
}

.serv-contact-label {
    color: #7f8c8d;
    font-size: 0.9rem;
    font-weight: 400;
    text-transform: capitalize;
    letter-spacing: 1px;
    margin-bottom: 0.3rem;
}

.serv-contact-value {
    color: #2c3e50;
    font-size: 1rem;
    font-weight: 400;
    text-decoration: none;
    transition: color 0.3s ease;
}

.serv-contact-value:hover {
    color: var(--primary-dark);
}




/* ===== EMERGENCY BANNER ===== */
.serv-emergency-banner {
    padding: 60px 0;
    background: linear-gradient(135deg, #2c3e50 0%, #1a252f 100%);
    position: relative;
    overflow: hidden;
}

.serv-emergency-banner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="%23ff660010"/></svg>');
    background-size: 100% 100px;
    background-position: top;
    opacity: 0.3;
}

.serv-emergency-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 3rem;
    flex-wrap: wrap;
    position: relative;
    z-index: 2;
}

.serv-emergency-icon i {
    font-size: 4rem;
    color: var(--primary-dark);
    animation: servPulse 2s infinite;
}

@keyframes servPulse {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.1); opacity: 0.8; }
}

.serv-emergency-text {
    flex: 1;
}

.serv-emergency-text h3 {
    font-size: 2rem;
    font-weight: 500;
    color: #ffffff;
    margin-bottom: 1rem;
}

.serv-emergency-highlight {
    color: var(--primary-dark);
}

.serv-emergency-text p {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1rem;
    line-height: 1.6;
}

.serv-emergency-btn {
    display: flex;
    align-items: center;
    gap: 1rem;
    background: linear-gradient(145deg, var(--primary-dark), var(--primary-light));
    color: white;
    text-decoration: none;
    padding: 1rem 2rem;
    border-radius: 50px;
    transition: all 0.3s ease;
    box-shadow: 0 10px 20px rgba(255, 102, 0, 0.3);
}

.serv-emergency-btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(255, 102, 0, 0.4);
}

.serv-emergency-btn i {
    font-size: 1.5rem;
}

.serv-emergency-number {
    display: block;
    font-size: 1rem;
    font-weight: 500;
}

.serv-emergency-note {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.9rem;
    margin-top: 0.5rem;
    text-align: center;
}

.serv-emergency-note strong {
    color: var(--primary-light);
}









/* ===== SUSTAINABILITY SECTION ===== */
.serv-sustainability-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    position: relative;
    overflow: hidden;
}

.serv-sustainability-section::before {
    content: '';
    position: absolute;
    top: -100px;
    left: -100px;
    width: 400px;
    height: 400px;
    background: linear-gradient(145deg, #D95F02, #ff7A00);
    opacity: 0.03;
    border-radius: 50%;
    z-index: 0;
}

.serv-sustainability-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
    position: relative;
    z-index: 2;
}

.serv-sustainability-subtitle {
    display: inline-block;
    color: var(--primary-dark);
    font-weight: 500;
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 15px;
    padding: 0.5rem 1.5rem;
    background: rgba(255, 102, 0, 0.1);
    border-radius: 30px;
    border: 1px solid rgba(255, 102, 0, 0.2);
}

.serv-sustainability-text h2 {
    font-size: 2rem;
    font-weight: 500;
    color: var(--header-color);
    margin-bottom: 1rem;
    line-height: 1.2;
}

.serv-sustainability-text h2::after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    background: linear-gradient(145deg, #D95F02, #ff7A00);
    margin-top: 15px;
}

.serv-sustainability-text p {
    color: var(--text-gray);
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 2rem;
}

.serv-green-features {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.serv-green-feature {
    display: flex;
    align-items: flex-start;
    gap: .5rem;
    padding: .5rem;
    background: white;
    transition: all 0.3s ease;
}

.serv-green-feature:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
    border-color: var(--primary-dark);
    border-radius: 10px;
}

.serv-green-feature i {
    width: 30px;
    height: 30px;
    background: linear-gradient(145deg, var(--primary-dark), var(--primary-light));
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    flex-shrink: 0;
}

.serv-green-feature h4 {
    font-size: 1rem;
    font-weight: 500;
    color: var(--header-color);
    margin-bottom: 0.5rem;
}

.serv-green-feature p {
    color:var(--text-gray);
    font-size: 0.95rem;
    margin: 0;
    line-height: 1.6;
}

.serv-sustainability-image {
    position: relative;
}

.serv-image-container {
    position: relative;
    overflow: hidden;
}

.serv-sustainability-image img {
    width: 100%;
    height: 500px;
    object-fit: cover;
    display: block;
    transition: transform 0.6s ease;
}

.serv-stats-overlay {
    position: absolute;
    bottom: 30px;
    left: 30px;
    right: 30px;
    display: flex;
    gap: 20px;
    justify-content: center;
}

.serv-stat {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    padding: 1rem 2rem;
    border-radius: 12px;
    text-align: center;
    flex: 1;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.serv-stat-number {
    display: block;
    font-size: 2rem;
    font-weight: 700;
    color: white;
    line-height: 1.2;
}

.serv-stat-label {
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.9);
}

/* ===== OTHER SECTIONS RESPONSIVE ===== */
@media (max-width: 1024px) {
    .serv-contact-container,
    .serv-sustainability-content {
        gap: 3rem;
    }

    .serv-contact-title,
    .serv-cert-title,
    .serv-sustainability-text h2 {
        font-size: 2.4rem;
    }

    .serv-contact-image img,
    .serv-sustainability-image img {
        height: 400px;
    }
}

@media (max-width: 768px) {
    .serv-contact-container,
    .serv-sustainability-content {
        grid-template-columns: 1fr;
        gap: 3rem;
    }

    .serv-contact-image {
        order: -1;
    }

    .serv-contact-title,
    .serv-cert-title,
    .serv-sustainability-text h2 {
        text-align: left;
        font-size: 2rem;
    }

    .serv-contact-description,
    .serv-sustainability-text p {
        text-align: left;
    }

    .serv-contact-title::after,
    .serv-sustainability-text h2::after {
        margin-left: 0;
    }

    .serv-emergency-content {
        flex-direction: column;
        text-align: left;
        align-items: flex-start;
    }

    .serv-emergency-text h3 {
        font-size: 1.8rem;
    }

    .serv-cert-title {
        font-size: 2rem;
    }

    .serv-stats-overlay {
        flex-direction: column;
        left: 20px;
        right: 20px;
    }
}

@media (max-width: 480px) {
    .services-header .serv-contact-title {
    font-size: 1rem;
    font-weight: 500;
    text-align: left;
}
    .serv-contact-section,
    .serv-cert-section,
    .serv-sustainability-section,
    .serv-emergency-banner {
        padding: 50px 0;
    }

    .serv-contact-container,
    .serv-sustainability-content {
        padding: 0 1rem;
    }

    .serv-contact-title,
    .serv-cert-title,
    .serv-sustainability-text h2 {
        font-size: 1.8rem;
    }

    .serv-contact-image img,
    .serv-sustainability-image img {
        height: 300px;
    }

    .serv-contact-item {
        flex-direction: row;
        text-align: left;
        padding: 1rem;
    }

    .serv-green-feature {
        flex-direction: row;
        text-align: left;
        padding: 1rem;
    }

    .serv-green-feature i {
        width: 40px;
        height: 40px;
        font-size: 1.1rem;
    }

    .serv-emergency-btn {
        width: 100%;
        justify-content: center;
    }

    .serv-stats-overlay {
        left: 15px;
        right: 15px;
    }

    .serv-stat {
        padding: 0.8rem;
    }

    .serv-stat-number {
        font-size: 1.5rem;
    }
}



@media(max-width:480px){
        h2{
            font-size: .6rem;
        }
    }




    h2{
        font-size: 1.8rem !important;
        
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
</head>
<body>
    <div id="loader"></div>

<!-- ================= HEADER / NAVBAR (FIXED) ================= -->
  <header class="fixed inset-x-0 top-0 z-50 transition-all duration-300" id="mainHeader">
    <div class="bg-gray-900/90 backdrop-blur-md border-b border-white/5 transition-all duration-300" id="headerBackground">
      <nav aria-label="Global" class="flex items-center justify-between p-4 lg:px-8 max-w-7xl mx-auto">
        
        <!-- Logo -->
        <div class="flex lg:flex-1">
          <a href="index.php" class="-m-1.5 p-1.5 flex items-center gap-3">
            <span class="sr-only">FERMI</span>
            <img src="./Images/logo2.png" alt="Fermi Logo" class="h-10 w-auto" />
            <div class="hidden sm:block">
              <span class="block text-white font-bold text-lg tracking-wide">FERMI</span>
              <span class="block text-[#FB923C] text-xs font-medium -mt-1 tracking-wider">Safe.Smart.Secure.</span>
            </div>
          </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="flex lg:hidden">
          <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200 hover:text-white">
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>

        <!-- Desktop Nav Links -->
        <div class="hidden lg:flex lg:gap-x-12">
          <a href="index.php" class="text-sm/6 font-semibold text-[#FB923C] relative after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-[#FB923C] after:scale-x-100">Home</a>
          <a href="services.php" class="text-sm/6 font-semibold text-white hover:text-[#FB923C] transition relative after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-[#FB923C] after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">What We Offer</a>
          <a href="projects.php" class="text-sm/6 font-semibold text-white hover:text-[#FB923C] transition relative after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-[#FB923C] after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Projects</a>
          <a href="services.php" class="text-sm/6 font-semibold text-white hover:text-[#FB923C] transition relative after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-[#FB923C] after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Reserve Appointment</a>
        </div>

        <!-- Desktop Auth Buttons -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a href="index.php" class="rounded-md bg-[#EA580C] px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#C2410C] transition focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#EA580C]">
            Get Started
          </a>
        </div>
      </nav>
    </div>

    <!-- Mobile Menu Dialog -->
    <el-dialog>
      <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
        <div tabindex="0" class="fixed inset-0 focus:outline-none">
          <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-100/10">
            
            <div class="flex items-center justify-between">
              <a href="index.php" class="-m-1.5 p-1.5 flex items-center gap-3">
                <img src="./Images/logo2.png" alt="Fermi Logo" class="h-8 w-auto" />
                <div>
                  <span class="block text-white font-bold text-lg">FERMI</span>
                  <span class="block text-[#FB923C] text-xs -mt-1">Safe.Smart.Secure.</span>
                </div>
              </a>
              <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-200">
                <span class="sr-only">Close menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                  <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button>
            </div>

            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-white/10">
                <div class="space-y-2 py-6">
                  <a href="index.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-[#FB923C] hover:bg-white/5">Home</a>
                  <a href="services.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">What We Offer</a>
                  <a href="projects.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Projects</a>
                  <a href="services.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Reserve Appointment</a>
                </div>
                <div class="py-6">
                  <a href="index.php" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white bg-[#EA580C] text-center hover:bg-[#C2410C]">
                    Get Started
                  </a>
                </div>
              </div>
            </div>

          </el-dialog-panel>
        </div>
      </dialog>
    </el-dialog>

  </header>
<!-- ================= USER PROFILE DROPDOWN ================= -->
<!-- <?php # if(isset($_SESSION['username'])): ?>
<div class="user-profile" id="user-profile">
    <div class="profile-header">
            <?php #echo strtoupper(substr($userName, 0, 1)); ?>
        <p class="welcome-text">
            Welcome, <?php #echo $userName; ?>
        </p>
        <p class="profile-email">
            <?php #echo $userEmail; ?>
        </p>

         <a href="<?php #echo $logout_page; ?>" class="sign-out-btn">
            <i class="fas fa-sign-out-alt"></i>
            Sign Out
        </a>
    </div>

</div>
<?php #endif; ?> -->

    
    

<!-- Services Hero Section -->
<section class="serv-hero-section">
    <div class="serv-hero-bg">
        <img src="Images/albert.jpg" alt="Electrical Services Background" class="serv-bg-image">
        <div class="serv-bg-overlay"></div>
    </div>
    
    <div class="serv-hero-container">
        <div class="serv-hero-content">
            
            <h1 class="serv-title">
               Explore Our Professional <span class="serv-title-highlight">Security Solutions Today</span>
            </h1>
            
            <p class="serv-text" data-aos="fade-up" data-aos-delay="300">
                We go extra mile on every project. The value we provide clients comes from our level of 
                <span class="serv-highlight">skill and performance</span>, as well as our 
                <span class="serv-highlight">knowledge and professionalism</span>. 
                Rest assured, we put the same level of energy into every project we take on.
            </p>
            <div class="about-cta">
                    <a href="tel:+256 754 130 885" class="btn-about">Schedule An Appointment <i class="fas fa-arrow-right"></i></a>
                </div>
        </div>
    </div>
    
</section>



<section class="services-section section-padding" id="services">
    <div class="services-container">

        <div class="services-header" data-aos="fade-up">
            <span class="services-subtitle">What We Offer</span>
            <h2 class="services-title">We are the Professional Security &amp; Electrical Service Provider</h2>
            <p class="services-description">Comprehensive solutions for residential, commercial, and industrial needs with certified expertise</p>
        </div>

        
        <div class="accordion" id="services-accordion">

            <!-- DOMESTIC -->
            <button class="acc-header is-active" data-panel="domestic" aria-expanded="true">
                <span class="acc-icon"><i class="fas fa-home"></i></span>
                <span class="acc-title">Domestic Services</span>
                <i class="fas fa-chevron-down acc-arrow"></i>
            </button>
            <div class="acc-panel is-active" data-panel-id="domestic">
                <div class="acc-panel-inner">
                    <div class="domestic-layout">
                        <div class="content-left">
                            <div class="content-header">
                                <h3>Domestic Services</h3>
                                <p>We do domestic household security services, ensuring your families are in the perfect state and safe from hazards such as fire outbreaks, short-circuits, and high room temperatures and theft.</p>
                                <p>Our expert technicians handle installations, repairs, and regular checkups to keep your home safe.</p>
                            </div>
                            <div class="features-grid">
                                <div class="feature-box">
                                    <div class="feature-text">
                                        <h4>Ceiling Fan Installations</h4>
                                        <p>New fan installations and repairs of existing fans.</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-text">
                                        <h4>Outdoor Lighting</h4>
                                        <p>Garden and poolside lighting solutions.</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-text">
                                        <h4>WLAN/LAN</h4>
                                        <p>Networking your homes to get you connected.</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-text">
                                        <h4>CCTV Camera Installations</h4>
                                        <p>Securing your property using secure artificial eyes.</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-text">
                                        <h4>Fire Safety</h4>
                                        <p>Protective measures to avoid fire hazards.</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-text">
                                        <h4>AC Installation</h4>
                                        <p>Full AC installation for comfort at your home.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-right">
                            <div class="image-wrapper">
                                <img src="Images/AutomaticGates.png" alt="Domestic Electrical Service" class="service-image">
                                <div class="image-overlay">
                                    <h4>100% Satisfaction</h4>
                                    <p>All domestic services come with a quality guarantee</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- INDUSTRIAL -->
            <button class="acc-header" data-panel="industrial" aria-expanded="false">
                <span class="acc-icon"><i class="fas fa-industry"></i></span>
                <span class="acc-title">Industrial Services</span>
                <i class="fas fa-chevron-down acc-arrow"></i>
            </button>
            <div class="acc-panel" data-panel-id="industrial">
                <div class="acc-panel-inner">
                    <div class="industrial-layout">
                        <div class="content-header">
                            <h3>Industrial Service</h3>
                            <p>We are the best provider of industrial and commercial electrical services. We've executed projects of all sizes, from simple to sophisticated.</p>
                            <p>Our seasoned electricians deliver efficient and effective solutions without interfering with your business operations.</p>
                        </div>
                        <div class="features-grid">
                            <div class="feature-box">
                                <div class="feature-text">
                                    <h4>Design &amp; Build</h4>
                                    <p>Industrial electrical designs and wiring ideas.</p>
                                </div>
                            </div>
                            <div class="feature-box">
                                <div class="feature-text">
                                    <h4>24/7 Service</h4>
                                    <p>We are available round the clock to help you.</p>
                                </div>
                            </div>
                            <div class="feature-box">
                                <div class="feature-text">
                                    <h4>New Installation</h4>
                                    <p>Installation of industrial electrical components.</p>
                                </div>
                            </div>
                            <div class="feature-box">
                                <div class="feature-text">
                                    <h4>Retrofits &amp; Repair</h4>
                                    <p>Component replacements and repairs as needed.</p>
                                </div>
                            </div>
                            <div class="feature-box">
                                <div class="feature-text">
                                    <h4>Rapid Dispatch</h4>
                                    <p>Quick deployment for urgent production issues.</p>
                                </div>
                            </div>
                            <div class="feature-box">
                                <div class="feature-text">
                                    <h4>Power Quality Checks</h4>
                                    <p>Inspection of supply lines for reliability.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COMMERCIAL -->
            <button class="acc-header" data-panel="commercial" aria-expanded="false">
                <span class="acc-icon"><i class="fas fa-building"></i></span>
                <span class="acc-title">Commercial Services</span>
                <i class="fas fa-chevron-down acc-arrow"></i>
            </button>
            <div class="acc-panel" data-panel-id="commercial">
                <div class="acc-panel-inner">
                    <div class="commercial-layout">
                        <div class="commercial-image">
                            <div class="image-wrapper">
                                <img src="Images/alarm-control-panel.jpg" alt="Commercial Service" class="service-image">
                                <div class="image-overlay">
                                    <h4>Business Solutions</h4>
                                    <p>Tailored for commercial efficiency</p>
                                </div>
                            </div>
                        </div>
                        <div class="commercial-content">
                            <h3>Commercial Services</h3>
                            <p>Compared to domestic electrical repair work, commercial electrical installations require far more specialized labor.</p>
                            <p>These tasks have a direct impact on the production system since they can save electrical costs and increase equipment longevity. Our services focus on:</p>
                            <div class="checklist-container">
                                <ul class="checklist">
                                    <li><i class="fas fa-check-circle"></i> WAN/LAN setup</li>
                                    <li><i class="fas fa-check-circle"></i> Wiring for offices and shops</li>
                                    <li><i class="fas fa-check-circle"></i> Elevator &amp; escalator installs</li>
                                    <li><i class="fas fa-check-circle"></i> Air conditioning (AC)</li>
                                    <li><i class="fas fa-check-circle"></i> CCTV camera installation</li>
                                    <li><i class="fas fa-check-circle"></i> Water heater installation</li>
                                    <li><i class="fas fa-check-circle"></i> Electrical system maintenance</li>
                                    <li><i class="fas fa-check-circle"></i> Panel upgrades</li>
                                    <li><i class="fas fa-check-circle"></i> CCTV surveillance installs</li>
                                    <li><i class="fas fa-check-circle"></i> Electrical safety checks</li>
                                    <li><i class="fas fa-check-circle"></i> Whole house surge protector</li>
                                    <li><i class="fas fa-check-circle"></i> Line power quality checks</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




<!-- Contact Section -->
<section class="serv-contact-section">
    <div class="serv-contact-container">
        <div class="serv-contact-image" data-aos="fade-right" data-aos-duration="800">
            <img src="Images/ManAtWork.png" alt="Electrical Worker">
        </div>

        <div class="serv-contact-info" data-aos="fade-left" data-aos-duration="800">
            <p class="serv-contact-subtitle" data-aos="fade-up" data-aos-delay="200">
                We're Here to Help
            </p>
            
            <h2 class="serv-contact-title" data-aos="fade-up" data-aos-delay="300">
                Need Security Services? Get in Touch Today.
            </h2>
            
            <p class="serv-contact-description" data-aos="fade-up" data-aos-delay="400">
                Our team of engineers is available around the clock to assist with any security needs.
                Whether it's an emergency repair or a routine inspection — we've got you covered.
            </p>

            <div class="serv-contact-details">
                <div class="serv-contact-item">
                    <i class="fas fa-phone-volume"></i>
                    <div>
                        <p class="serv-contact-label">Call Us Anytime</p>
                        <a href="tel:+256754130885" class="serv-contact-value">0754 130885</a>
                    </div>
                </div>

                <div class="serv-contact-item" data-aos="zoom-in" data-aos-delay="400">
                    <i class="fas fa-envelope-open-text"></i>
                    <div>
                        <p class="serv-contact-label">Email Our Team</p>
                        <a href="mailto:fermielectritech@gmail.com" class="serv-contact-value">fermielectritech@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Banner -->
<section class="serv-emergency-banner" data-aos="fade-up">
    <div class="serv-emergency-content">
        <div class="serv-emergency-icon" data-aos="pulse" data-aos-duration="1000">
            <i class="fas fa-exclamation-triangle"></i>
        </div>
        
        <div class="serv-emergency-text" data-aos="fade-right" data-aos-delay="200">
            <h3><span class="serv-emergency-highlight">24/7</span> Emergency Security Services</h3>
            <p>Security emergencies don't wait for business hours. Our rapid response team is available round-the-clock for urgent repairs and critical situations.</p>
        </div>
        
        <div class="serv-emergency-contact" data-aos="fade-left" data-aos-delay="300">
            <a href="tel:+256760271098" class="serv-emergency-btn">
                <i class="fas fa-phone"></i>
                <div>
                    <span class="serv-emergency-number">+256 760 271 098</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Sustainability Section -->
<section class="serv-sustainability-section" data-aos="fade-up">
    <div class="serv-sustainability-content">
        <div class="serv-sustainability-text" data-aos="fade-right">
            <span class="serv-sustainability-subtitle">ECO-FRIENDLY</span>
            <h2>Energy Efficient & Sustainable Solutions</h2>
            <p>We're committed to helping clients reduce their carbon footprint while saving on energy costs</p>
            
            <div class="serv-green-features">
                <div class="serv-green-feature" data-aos="fade-right" data-aos-delay="200">
                    <i class="fas fa-solar-panel"></i>
                    <div>
                        <h4>Solar Integration</h4>
                        <p>Expert installation of solar systems with grid-tie capabilities</p>
                    </div>
                </div>
                
                <div class="serv-green-feature" data-aos="fade-right" data-aos-delay="300">
                    <i class="fas fa-leaf"></i>
                    <div>
                        <h4>LED Conversions</h4>
                        <p>Energy-efficient LED lighting upgrades with up to 80% savings</p>
                    </div>
                </div>
                
                <div class="serv-green-feature" data-aos="fade-right" data-aos-delay="400">
                    <i class="fas fa-bolt"></i>
                    <div>
                        <h4>Smart Energy Management</h4>
                        <p>Automated systems to optimize energy consumption</p>
                    </div>
                </div>
                

            </div>
        </div>
        
        <div class="serv-sustainability-image" data-aos="fade-left" data-aos-delay="400">
            <div class="serv-image-container">
                <img src="Images/OutdoorCCTV.jpg" alt="Solar Panel Installation">
                <div class="serv-stats-overlay">
                    <div class="serv-stat">
                        <span class="serv-stat-number">40%</span>
                        <span class="serv-stat-label">Average Savings</span>
                    </div>
                    <div class="serv-stat">
                        <span class="serv-stat-number">5+</span>
                        <span class="serv-stat-label">Years Warranty</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    

<!-- ================= FOOTER ================= -->
<footer class="bg-gray-900 text-gray-300 relative overflow-hidden">
    
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
                        <a href="index.php" class=" text-sm  text-gray-400 hover:text-amber-400 transition-colors duration-300 flex items-center gap-2">
                            
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
                        <a href="services.php" class=" text-sm text-gray-400 hover:text-amber-400 transition-colors duration-300 flex items-center gap-2">
                            
                            WLAN/LAN Installation
                        </a>
                    </li>
                    <li>
                        <a href="services.php" class=" text-sm text-gray-400 hover:text-amber-400 transition-colors duration-300 flex items-center gap-2">
                            
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
            
            <!-- Scroll to Top Button
            <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
                    class="w-10 h-10 rounded-full bg-amber-500 hover:bg-amber-600 text-white flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-amber-500/25">
                <i class="fas fa-arrow-up text-sm"></i>
            </button> -->
        </div>
    </div>
</footer>

    <!--AI WIDGET-->
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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
    <script src="widget.js"></script>
    <script src="services.js"></script>
   
</body>
</html>