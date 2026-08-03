<!-- <?php
////session_start();

// --- Configuration ---
// $timeout = 600; // 10 minutes in seconds
// $login_page = "../public/login.html";
// $logout_page = "/FERMI/auth/logout.php";

// --- Session Management ---
//function checkSession($timeout, $login_page) {
    // // Check if user is logged in and is a 'user'
    // if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'user') {
    //     header("Location: " . $login_page);
    //     exit;
    // }

    // // Check timeout
    // if (!isset($_SESSION['time']) || (time() - $_SESSION['time']) > $timeout) {
    //     session_unset();
    //     session_destroy();
    //     header("Location: " . $login_page);
    //     exit;
    // } else {
    //     $_SESSION['time'] = time(); // Refresh session activity
    // }
//}

// Run checks
//checkSession($timeout, $login_page);

// Helper to get user data safely
// $userName = htmlspecialchars($_SESSION['username'] ?? 'User');
// $userEmail = htmlspecialchars($_SESSION['email'] ?? 'No email provided');
// $userInitial = strtoupper(substr($userName, 0, 1));
?> -->

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

    <!-- ====== FONTS ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&family=Kodchasan:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons&display=swap" rel="stylesheet">

    <!-- ====== EXTERNAL CSS ====== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="widget.css">
    <link rel="stylesheet" href="styles.css">

    <script src="https://cdn.tailwindcss.com" defer></script>
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


    <style>
        
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

<!-- ================= NAVBAR ================= -->
<header class="navbar" id="navbar">
    <div class="container">

        <a href="index.html" class="logo">
            <div class="logo-img-wrapper">
                <img src="./Images/logo2.png" alt="Fermi Logo" />
            </div>
            <span class="logotext">FERMI
                <p class="sublogotext">Safe.Smart.Secure.</p>
            </span>
        </a>

        <nav class="nav-links">
            <a href="index.php" class="nav-link active">Home</a>
            <a href="services.php" class="nav-link">What We Offer</a>
            <a href="projects.php" class="nav-link">Projects</a>
            <a href="services.php" class="nav-link">Reserve Appointment</a>
        </nav>

        <div class="auth-buttons">
            <?php if(isset($_SESSION['username'])): ?>
                <!-- Logged In State -->
                <div class="user-avatar user-account-trigger" id="userAvatar">
                    <span class="user-initial">
                        <!-- <?php #echo htmlspecialchars($userInitial); ?> -->
                    </span>
                </div>

            <?php else: ?>
                <!-- Guest State -->
                <a href="index.php" class="btn-signup">
                    Get Started
                </a>
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
            <img src="./Images/logo2.png" alt="Fermi Logo" />
        </div>
        <span class="logotext">
            FERMI
            <p class="sublogotext">Safe.Smart.Secure.</p>
        </span>
    </a>
    

    <div class="mobile-nav-links">
        <a href="index.php" class="mobile-nav-link active">Home</a>
        <a href="services.php" class="mobile-nav-link">What We Offer</a>
        <a href="projects.php" class="mobile-nav-link">Projects</a>
        <a href="services.php" class="mobile-nav-link">Reserve Appointment</a>
    </div>
    <div class="mobile-auth-section">
        <div class="mobile-auth-buttons">
            <?php if(isset($_SESSION['username'])): ?>
                <a href="<?php #echo $logout_page; ?>" class="mobile-btn-login">
                    Log Out
                </a>
                
            <?php else: ?>
                <a href="index.php" class="mobile-btn-signup">
                    Get Started
                </a>
            <?php endif; ?>

        </div>
    </div>
</div>


<!-- ================= USER PROFILE DROPDOWN ================= -->
<!-- <?php #if(isset($_SESSION['username'])): ?>
<div class="user-profile" id="user-profile">
    <div class="profile-header">
            <?php # echo strtoupper(substr($userName, 0, 1)); ?>
        <p class="welcome-text">
            Welcome, <?php #echo $userName; ?>
        </p>
        <p class="profile-email">
            <?php #echo $userEmail; ?>
        </p>

         <a href="<?php # echo $logout_page; ?>" class="sign-out-btn">
            <i class="fas fa-sign-out-alt"></i>
            Sign Out
        </a>
    </div>

</div>
<?php #endif; ?> -->


 

<!-- ================= HERO SECTION ================= -->
<section class="hero">
    <div class="hero-container">
        <div class="hero-left">
            <span class="hero-eyebrow"><span class="dot"></span>24/7 Monitored &amp; Certified</span>
 
            <h1>Best Practices For All<span class="accent">Secure Security Systems.</span></h1>
 
            <p>We provide security requirements for residential, commercial and industrial clients with the largest assortment of surveillance cameras, alarm systems, access control and smart home solutions.</p>
 
            <div class="hero-actions">
                <a href="service.php" class="hero-btn">Our Services
                    <i class="fas fa-arrow-right"></i>
                </a>
 
                <div class="phone-box">
                    <div class="phone-icon"><i class="fas fa-phone"></i></div>
                    <div class="phone-details">
                        <span>Make a call</span>
                        <a href="tel:+256760271098">+256 760 271 098</a>
                    </div>
                </div>
            </div>
 
            <div class="hero-stats">
                <div class="stat"><strong>10<span>+</span></strong><small>Years securing sites</small></div>
                <div class="stat"><strong>500<span>+</span></strong><small>Installations</small></div>
                <div class="stat"><strong>24/7</strong><small>Monitoring &amp; response</small></div>
            </div>
        </div>
 
        <!-- RIGHT SIDE -->
        <div class="hero-right">
            <div class="hero-visual">
                <div class="scope-ring"></div>
                <div class="orbit-ring"></div>
                <span class="bracket tl"></span>
                <span class="bracket tr"></span>
                <span class="bracket bl"></span>
                <span class="bracket br"></span>
 
                <div class="circle-slider" id="heroSlider">
                    <img src="Images/albert.jpg" class="slide active">
                    <img src="Images/cctvinter2.jpg" class="slide">
                    <img src="Images/interiorViewOfRecordBox.jpeg" class="slide">
                    <img src="Images/InstallationProcedure.jpeg" class="slide">
                    <img src="Images/fire-sensor.jpg" class="slide">
                    <img src="Images/OutdoorCCTV.jpg" class="slide">
                    <img src="Images/ControlPanel2.jpeg" class="slide">
                    <img src="Images/ManAtWork2.jpeg" class="slide">
                    <img src="Images/Cyber.jpg" class="slide">
                    <img src="Images/AutomatedGate.jpeg" class="slide">
                    <div class="scanline"></div>
                </div>
 
                <div class="rec-readout">
                    <span class="rec-dot"></span>
                    <strong>REC</strong>
                    <span class="rec-time" id="heroClock">00:00:00</span>
                </div>
            </div>
        </div>
    </div>
</section>
 

    <!-- ================= ABOUT SECTION ================= -->
    <section class="about-section section-padding"  data-aos="fade-up" data-aos-duration="100" data-aos-delay="200">
        <div class="about-container">
            
            <div class="about-content" data-aos="fade-left">
                <span class="about-subtitle">
                    <i class="fas fa-bolt"></i> Lets Introduce
                </span>
                <h2 class="about-title">
                  We Offer Outstanding Residential, Commercial & Industrial Security Services
                </h2>
                <p class="about-description">
                    All of our services are backed by our 100% satisfaction guarantee. Our technicians can install anything
                    from new security cameras,fire alarms,smart doors for your outdoors to a whole home network, security that will keep your
                    appliances & property safe and working.
                </p>
    
                <div class="about-cta">
                    <a href="tel:+256 754 130 885" class="btn-about">Schedule An Appointment <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="about-img-wrapper">
                <div class="about-img">
                    <img src="Images/WINTERR.jpg" alt="Professional Electrical Services" class="main-img">
                    <div class="experience-badge">
                        <span class="exp-number">3+</span>
                        <span class="exp-text">Years of Excellence</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

       
    <!-- ================= SERVICES SECTION ================= -->
    <section class="services-section" id="our-featured-services">
        <div class="services-container">
            <div class="services-header" data-aos="fade-up" data-aos-duration="800">
                <span class="about-subtitle">24/7 Service – Safe & Efficient</span>
                <h2 class="services-title">We are a Full Service Electrical Contractor</h2>
                <p class="services-description">Comprehensive security, electrical, and IT solutions with round-the-clock support and certified expertise</p>
            </div>

            <div class="slider-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="slider-track" id="servicesSlider">
                    <!-- Service Card 1 -->
                    <div class="service-card">
                        <div class="card-content">
                            <div class="card-icon"><i class="fas fa-shield-alt"></i></div>
                            <h3 class="card-title">Automatic Gates & Electric Fences</h3>
                            <p class="card-text">Secure your premises with automatic gates and reliable electric fences.</p>
                            <a href="services.php" class="card-link">More info <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Service Card 2 -->
                    <div class="service-card">
                        <div class="card-content">
                            <div class="card-icon"><i class="fas fa-video"></i></div>
                            <h3 class="card-title">Surveillance & Detection</h3>
                            <p class="card-text">CCTV cameras, motion sensors, and metal detectors for complete coverage.</p>
                            <a href="services.php" class="card-link">More info <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Service Card 3 -->
                    <div class="service-card">
                        <div class="card-content">
                            <div class="card-icon"><i class="fas fa-door-open"></i></div>
                            <h3 class="card-title">Access Control & Communication</h3>
                            <p class="card-text">Intercoms, smart alarms, and modern access control systems.</p>
                            <a href="services.php" class="card-link">More info <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Service Card 4 -->
                    <div class="service-card">
                        <div class="card-content">
                            <div class="card-icon"><i class="fas fa-fire"></i></div>
                            <h3 class="card-title">Fire Alarms & Motion Detectors</h3>
                            <p class="card-text">Protect lives and property with fire alarms and reliable motion detection.</p>
                            <a href="services.php" class="card-link">More info <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Service Card 5 -->
                    <div class="service-card">
                        <div class="card-content">
                            <div class="card-icon"><i class="fas fa-cash-register"></i></div>
                            <h3 class="card-title">POS & Tracking Solutions</h3>
                            <p class="card-text">Point of Sale systems, GPS trackers, and fuel monitoring systems.</p>
                            <a href="services.php" class="card-link">More info <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Service Card 6 -->
                    <div class="service-card">
                        <div class="card-content">
                            <div class="card-icon"><i class="fas fa-network-wired"></i></div>
                            <h3 class="card-title">WAN/LAN & Installations</h3>
                            <p class="card-text">Office/shop wiring, elevators, and escalator installations.</p>
                            <a href="services.php" class="card-link">More info <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Service Card 7 -->
                    <div class="service-card">
                        <div class="card-content">
                            <div class="card-icon"><i class="fas fa-snowflake"></i></div>
                            <h3 class="card-title">Air Conditioning Systems</h3>
                            <p class="card-text">Professional installation of energy-efficient air conditioning.</p>
                            <a href="services.php" class="card-link">More info <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Service Card 8 -->
                    <div class="service-card">
                        <div class="card-content">
                            <div class="card-icon"><i class="fas fa-thermometer-half"></i></div>
                            <h3 class="card-title">Refrigeration & Water Heaters</h3>
                            <p class="card-text">Reliable refrigeration systems and modern water heating solutions.</p>
                            <a href="services.php" class="card-link">More info <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Service Card 9 -->
                    <div class="service-card">
                        <div class="card-content">
                            <div class="card-icon"><i class="fas fa-solar-panel"></i></div>
                            <h3 class="card-title">Panel Design & Automation</h3>
                            <p class="card-text">Custom design and automation of electrical panels tailored to you.</p>
                            <a href="services.php" class="card-link">More info <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Slider Navigation -->
                <div class="slider-nav">
                    <button class="slider-prev" id="sliderPrev" aria-label="Previous services"><i class="fas fa-chevron-left"></i></button>
                    <div class="slider-dots" id="sliderDots"></div>
                    <button class="slider-next" id="sliderNext" aria-label="Next services"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>

        </div>
    </section>

    <!-- ================= CTA SECTION ================= -->
    <section class="cta-section section-padding" id="cta-section">
        <div class="cta-container">
           

            <div class="cta-content" data-aos="fade-right" data-aos-duration="800">
                <div class="cta-header">
                    <span class="cta-subtitle">GET IMMEDIATE ASSISTANCE</span>
                    <h2 class="cta-title">Do You <span class="cta-highlight">Need Help</span> With Networking & Security?</h2>
                </div>
                
                <div class="cta-description">
                    <p>Our comprehensive Security, Networking & Electrical repair services are proudly offered to both residential and commercial clients.</p>
                </div>

                <div class="cta-buttons" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <a href="tel:+256760271098" class="cta-btn cta-btn-call">
                        <div class="cta-btn-content">
                            <div class="cta-btn-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="cta-btn-text">
                                <span class="cta-btn-label">Emergency Hotline</span>
                                <span class="cta-btn-number">+256 760 271 098</span>
                            </div>
                        </div>
                        <i class="fas fa-arrow-right cta-btn-arrow"></i>
                    </a>
                </div>

            </div>

            <div class="cta-graphic" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                <div class="cta-graphic-container">
                    <div class="cta-tech-icon"><i class="fas fa-server"></i></div>
                    <div class="cta-wave-animation">
                        <div class="cta-wave cta-wave-1"></div>
                        <div class="cta-wave cta-wave-2"></div>
                        <div class="cta-wave cta-wave-3"></div>
                    </div>
                    <div class="cta-stats-overlay">
                        <div class="cta-stat"><span class="cta-stat-number">24/7</span><span class="cta-stat-label">Support</span></div>
                        <div class="cta-stat"><span class="cta-stat-number">30</span><span class="cta-stat-label">Min Response</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 size-full object-cover object-right md:object-center" />
        <div aria-hidden="true" class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="aspect-1097/845 w-274.25 bg-linear-to-tr from-[#ff4694] to-[#776fff] opacity-20"></div>
        </div>
        <div aria-hidden="true" class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:-top-112 sm:ml-16 sm:translate-x-0">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="aspect-1097/845 w-274.25 bg-linear-to-tr from-[#ff4694] to-[#776fff] opacity-20"></div>
        </div>

        
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-2xl font-bold tracking-tight text-white sm:text-4xl">Protect What Matters Most</h2>
            <p class="mt-6 text-base/3  text-gray-300 sm:text-xl/8">From CCTV surveillance and access control to structured networking and electrical installations, FERMI delivers reliable solutions that keep your home, business, and assets safe.</p>
            </div>
            <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base/7 font-semibold text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                <a href="/services.php">Our Services <span aria-hidden="true">&rarr;</span></a>
                <a href="/projects.php">Our Projects <span aria-hidden="true">&rarr;</span></a>
                <a href="/services.php">Scedule Appointment <span aria-hidden="true">&rarr;</span></a>
                <a href="tel:+256760 271 098">Contact Us<span aria-hidden="true">&rarr;</span></a>
            </div>


            <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col-reverse gap-1">
                <dt class="text-base/3 text-gray-300">Customer Secured</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">102</dd>
                </div>
                <div class="flex flex-col-reverse gap-1">
                <dt class="text-base/3 text-gray-300">Full-time Technical Support</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">24/7</dd>
                </div>
                <div class="flex flex-col-reverse gap-1">
                <dt class="text-base/3 text-gray-300">Years Experience</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">10</dd>
                </div>
                <div class="flex flex-col-reverse gap-1">
                <dt class="text-base/3 text-gray-300">Unlimited</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">Service</dd>
                </div>
            </dl>
            </div>
        </div>
        </div>


    <!-- ================= WHY CHOOSE US ================= -->
    <section id="why-us-section" class="why-us-section">
        <div class="why-us-container">
            <div class="why-us-header" data-aos="fade-up" data-aos-duration="800">
                <span class="about-subtitle" data-aos="fade-up" data-aos-delay="100">Why Us</span>
                <h2 class="why-us-title" data-aos="fade-up" data-aos-delay="200">Great Reasons Why People Choose Us</h2>
            </div>

            <div class="why-us-cards-wrapper">
                <div class="why-us-cards" id="whyUsCards">
                    <!-- Card 1 -->
                    <div class="why-us-card" data-index="0" data-aos="fade-right" data-aos-delay="300">
                        <div class="why-us-img-container">
                            <img src="Images/AutomatedSmartDoor.jpeg" alt="Certified Electrician">
                            <div class="why-us-overlay"></div>
                            <button class="why-us-toggle-btn" onclick="toggleWhyUsText(this)" data-card="0">+</button>
                            <div class="why-us-text" id="card-text-0">
                                <button class="why-us-close-btn" onclick="closeWhyUsText(this)" data-card="0">×</button>
                                <h3>Certified Professionals</h3>
                                <p>Our team comprises technicians experienced in all areas of technical and security work. We strictly follow national safety standards.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="why-us-card" data-index="1" data-aos="fade-up" data-aos-delay="400">
                        <div class="why-us-img-container">
                            <img src="Images/AutomatedCamera1.jpeg" alt="Customer First Approach">
                            <div class="why-us-overlay"></div>
                            <button class="why-us-toggle-btn" onclick="toggleWhyUsText(this)" data-card="1">+</button>
                            <div class="why-us-text" id="card-text-1">
                                <button class="why-us-close-btn" onclick="closeWhyUsText(this)" data-card="1">×</button>
                                <h3>Customer Oriented Approach</h3>
                                <p>We take the time to understand your unique needs and provide tailored solutions. Every project begins and ends with client satisfaction.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="why-us-card" data-index="2" data-aos="fade-left" data-aos-delay="500">
                        <div class="why-us-img-container">
                            <img src="Images/poss.jpg" alt="Transparent Pricing">
                            <div class="why-us-overlay"></div>
                            <button class="why-us-toggle-btn" onclick="toggleWhyUsText(this)" data-card="2">+</button>
                            <div class="why-us-text" id="card-text-2">
                                <button class="why-us-close-btn" onclick="closeWhyUsText(this)" data-card="2">×</button>
                                <h3>Transparent Pricing</h3>
                                <p>We offer honest, upfront pricing without hidden fees or surprise charges. Trust and affordability go hand in hand at Fermi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-us-slider-nav" id="whyUsSliderNav" data-aos="fade-up" data-aos-delay="600">
                <button class="why-us-slider-prev" onclick="slideWhyUs(-1)"><i class="fas fa-chevron-left"></i></button>
                <div class="why-us-dots">
                    <span class="why-us-dot active" onclick="goToWhyUsSlide(0)"></span>
                    <span class="why-us-dot" onclick="goToWhyUsSlide(1)"></span>
                    <span class="why-us-dot" onclick="goToWhyUsSlide(2)"></span>
                </div>
                <button class="why-us-slider-next" onclick="slideWhyUs(1)"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!-- ================= FAQ SECTION ================= -->
    <section class="faq-section" data-aos="fade-up" data-aos-duration="1000">
        <div class="faq-container">
            <div class="faq-header" data-aos="fade-right" data-aos-delay="200">
                <span class="about-subtitle">Faq's</span>
                <h2 class="faq-title">Frequently Asked Questions</h2>
                <p class="faq-description">Some of the most asked questions here asked by our valuable Customers...</p>
            </div>

            <div class="faq-items" data-aos="fade-left" data-aos-delay="300">
                <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="faq-question" onclick="toggleFaq(this)">Are your security systems compliant with data protection regulations?<i class="fas fa-chevron-down faq-arrow"></i></div>
                    <div class="faq-answer">Yes, all our security solutions are designed with privacy-by-design principles and comply with relevant data protection laws.</div>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="450">
                    <div class="faq-question" onclick="toggleFaq(this)">Do you provide energy efficiency assessments?<i class="fas fa-chevron-down faq-arrow"></i></div>
                    <div class="faq-answer">We include energy audits in all our electrical projects, recommending LED lighting and smart controls.</div>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="faq-question" onclick="toggleFaq(this)">How do you ensure cybersecurity?<i class="fas fa-chevron-down faq-arrow"></i></div>
                    <div class="faq-answer">Our IT infrastructure includes enterprise-grade firewalls, encrypted connections, and regular security patches.</div>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="550">
                    <div class="faq-question" onclick="toggleFaq(this)">What types of security systems do you install?<i class="fas fa-chevron-down faq-arrow"></i></div>
                    <div class="faq-answer">We provide CCTV cameras, alarm systems, biometric access controls, and perimeter security systems.</div>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                    <div class="faq-question" onclick="toggleFaq(this)">Do you offer both residential and commercial services?<i class="fas fa-chevron-down faq-arrow"></i></div>
                    <div class="faq-answer">Yes, we handle electrical installations, repairs, and maintenance for homes, offices, factories, and other establishments.</div>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="650">
                    <div class="faq-question" onclick="toggleFaq(this)">What IT support services do you provide?<i class="fas fa-chevron-down faq-arrow"></i></div>
                    <div class="faq-answer">We offer network setup, server management, cybersecurity solutions, and ongoing technical support.</div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- ================= CONTACT INFO SECTION ================= -->
    <section class="con-section" data-aos="fade-up" data-aos-duration="300">
        <div class="con-content" data-aos="fade-right" data-aos-delay="200">
            <h2 class="con-heading" data-aos="fade-up" data-aos-delay="200">Do you <span class="con-highlight">Need Help</span><br> With Networking & Security?</h2>
            <p class="con-description" data-aos="fade-up" data-aos-delay="200">
                Our Security, networking & electrical repair service options are proudly offered to clients. Give us a call today!
            </p>
            <div class="con-buttons" data-aos="fade-up" data-aos-delay="400">
                <a href="tel:+256760271098" class="con-btn con-btn-call" data-aos="zoom-in" data-aos-delay="100">
                    <i class="fas fa-phone-alt"></i> Give Us a Call
                </a>
                <a href="tel:+256760 271 098" class="con-btn con-btn-estimate" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fas fa-bolt"></i> Make Appointment
                </a>
            </div>
        </div>
    </section>

  
  
   <!-- ================= TESTIMONIALS SECTION ================= -->
   
   
   
   <section class="test-section section-padding">
        <div class="test-container">
            <div class="test-header" data-aos="fade-up">
                <span class="test-subtitle">TESTIMONIALS</span>
                <h2 class="test-title">What Our Clients Say</h2>
                <p class="test-description">Trusted by businesses and homeowners across Uganda</p>
            </div>
            
            <div class="test-grid" id="testCarousel">
                <div class="test-card active" data-index="0" data-aos="fade-right" data-aos-delay="200">
                    <div class="test-text">"Fermi Electrotech installed our office security system... Two years later, everything still works perfectly."</div>
                    <div class="test-author">
                        <div class="test-avatar"><img src="Images/user-profile-icon.png" alt="Client"></div>
                        <div class="test-info"><h4 class="test-name">Robert Mugisha</h4><div class="test-role">Kampala</div></div>
                    </div>
                </div>
                
                <div class="test-card" data-index="1" data-aos="fade-up" data-aos-delay="300">
                    <div class="test-text">"Their 24/7 emergency service saved us when our main power line failed at midnight. Highly recommended!"</div>
                    <div class="test-author">
                        <div class="test-avatar"><img src="Images/user-profile-icon.png" alt="Client"></div>
                        <div class="test-info"><h4 class="test-name">Jabbo Jotana</h4><div class="test-role">Homeowner, Bunga</div></div>
                    </div>
                </div>
                
                <div class="test-card" data-index="2" data-aos="fade-left" data-aos-delay="400">
                    <div class="test-text">"The team handled our factory's complete electrical overhaul with minimal downtime."</div>
                    <div class="test-author">
                        <div class="test-avatar"><img src="Images/user-profile-icon.png" alt="Client"></div>
                        <div class="test-info"><h4 class="test-name">Kisamba Geofrey</h4><div class="test-role">Manager, Jinja</div></div>
                    </div>
                </div>
            </div>
            
            <div class="test-nav">
                <button class="test-prev" id="testPrev"><i class="fas fa-chevron-left"></i></button>
                <div class="test-dots" id="testDots"></div>
                <button class="test-next" id="testNext"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="footer-section" data-aos="fade-up" data-aos-duration="1000">
        <div class="footer-container">
            <div class="footer-box" data-aos="fade-right" data-aos-delay="200">
                <div class="logo-img-wrapper">
                <img src="./Images/logo2.png" alt="Fermi Logo" />
            </div>
                <h3 class="footer-title">About Us</h3>
                <p class="footer-text">We provide top-notch Security, Electrical & IT solutions with years of experience delivering reliable and innovative services.</p>
                <div class="footer-social">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="footer-box" data-aos="fade-up" data-aos-delay="300">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="index.php"> Home</a></li>
                    <li><a href="services.php">What we offer</a></li>
                    <li><a href="projects.php"> Projects</a></li>
                    <li><a href="services.php">Reserve Appointment</a></li>
                </ul>
            </div>
            
            <div class="footer-box" data-aos="fade-up" data-aos-delay="400">
                <h3 class="footer-title">Our Services</h3>
                <ul class="footer-links">
                    <li><a href="/services.php"> WLAN/LAN Installation</a></li>
                    <li><a href="/services.php"> Air Conditioning</a></li>
                    <li><a href="/services.php"> Automatic Gates</a></li>
                    <li><a href="/services.php"> Fire Alarms</a></li>
                    <li><a href="services.php">View All</a></li>
                </ul>
            </div>
            
            <div class="footer-box contact-info" data-aos="fade-left" data-aos-delay="500">
                <h3 class="footer-title">Contact Us</h3>
                <div class="footer-contact-item">
                    <a href="tel:+256760 271 098"> +256 760 271 098</a>
                    <a href="tel:+256754 130 885"> +256 754 130 885</a>
                </div>
                <div class="footer-contact-item">
                    <p> fermielectrictech@gmail.com</p>
                </div>
                <div class="footer-contact-item">
                    <p> Kampala, Uganda</p>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2026 Fermi Electrical & IT Solutions. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- AI Widget Container -->
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


    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
    <script src="widget.js"></script>
   
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ===== MOBILE SLIDER FUNCTIONALITY =====
            const sliderTrack = document.getElementById('staffSliderTrack');
            const prevBtn = document.getElementById('staffPrevBtn');
            const nextBtn = document.getElementById('staffNextBtn');
            const dotsContainer = document.getElementById('staffDots');
            const slides = document.querySelectorAll('.staff-slide');
            
            if (!sliderTrack || slides.length === 0) return;
            
            let currentIndex = 0;
            let autoRotateInterval;
            
            function createDots() {
                if (!dotsContainer) return;
                dotsContainer.innerHTML = '';
                slides.forEach((_, index) => {
                    const dot = document.createElement('span');
                    dot.className = `staff-slider-dot ${index === 0 ? 'active' : ''}`;
                    dot.addEventListener('click', () => {
                        goToSlide(index);
                        resetAutoRotate();
                    });
                    dotsContainer.appendChild(dot);
                });
            }
            
            function goToSlide(index) {
                if (index < 0) index = slides.length - 1;
                if (index >= slides.length) index = 0;
                
                sliderTrack.style.transform = `translateX(-${index * 100}%)`;
                
                const dots = document.querySelectorAll('.staff-slider-dot');
                dots.forEach((dot, i) => dot.classList.toggle('active', i === index));
                
                currentIndex = index;
            }
            
            function nextSlide() { goToSlide(currentIndex + 1); }
            function prevSlide() { goToSlide(currentIndex - 1); }
            
            function startAutoRotate() {
                stopAutoRotate();
                autoRotateInterval = setInterval(nextSlide, 5000);
            }
            
            function stopAutoRotate() {
                if (autoRotateInterval) clearInterval(autoRotateInterval);
            }
            
            function resetAutoRotate() {
                stopAutoRotate();
                startAutoRotate();
            }
            
            if (prevBtn && nextBtn) {
                prevBtn.addEventListener('click', () => { prevSlide(); resetAutoRotate(); });
                nextBtn.addEventListener('click', () => { nextSlide(); resetAutoRotate(); });
            }
            
            // Touch events
            let touchStartX = 0;
            let touchEndX = 0;
            
            sliderTrack.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
                stopAutoRotate();
            }, { passive: true });
            
            sliderTrack.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                const diff = touchStartX - touchEndX;
                if (Math.abs(diff) > 50) {
                    diff > 0 ? nextSlide() : prevSlide();
                }
                setTimeout(startAutoRotate, 5000);
            }, { passive: true });
            
            sliderTrack.addEventListener('mouseenter', stopAutoRotate);
            sliderTrack.addEventListener('mouseleave', startAutoRotate);
            
            createDots();
            
            if (window.innerWidth <= 768) startAutoRotate();
            
            window.addEventListener('resize', () => {
                if (window.innerWidth <= 768) startAutoRotate();
                else stopAutoRotate();
            });



                    (function () {
            // auto-rotate circle-slider images
            const slides = document.querySelectorAll('#heroSlider .slide');
            if (slides.length) {
                let i = [...slides].findIndex(s => s.classList.contains('active'));
                if (i === -1) i = 0;
                setInterval(() => {
                    slides[i].classList.remove('active');
                    i = (i + 1) % slides.length;
                    slides[i].classList.add('active');
                }, 3200);
            }
            // live REC timecode
            const clock = document.getElementById('heroClock');
            if (clock) {
                const tick = () => clock.textContent = new Date().toLocaleTimeString('en-GB');
                tick();
                setInterval(tick, 1000);
            }
        })();
        });
    </script>
</body>
</html>