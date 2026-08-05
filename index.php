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

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

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
    <link rel="stylesheet" href="index.css">

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
<!-- ================= HEADER / NAVBAR (PREMIUM WHITE & ORANGE) ================= -->
<header class="fixed inset-x-0 top-0 z-50 transition-all duration-500" id="mainHeader">
    <div class="bg-white/95 backdrop-blur-lg border-b border-orange-100/50 shadow-sm transition-all duration-500" id="headerBackground">
        <nav aria-label="Global" class="flex items-center justify-between p-3 md:p-4 lg:px-8 max-w-7xl mx-auto">
            
            <!-- Logo -->
            <div class="flex lg:flex-1">
                <a href="index.php" class="-m-1.5 p-1.5 flex items-center gap-3 group">
                    <span class="sr-only">FERMI</span>
                    <img src="./Images/logo2.png" alt="Fermi Logo" class="h-10 md:h-12 w-auto transition-transform duration-300 group-hover:scale-105" />
                    <div class="hidden sm:block">
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
                                <a href="index.php" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-orange-600 bg-orange-50 hover:bg-orange-100 transition-colors duration-300">
                                    Home
                                </a>
                                <a href="services.php" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-orange-50 transition-colors duration-300">
                                    What We Offer
                                </a>
                                <a href="projects.php" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-orange-50 transition-colors duration-300">
                                    Projects
                                </a>
                                <a href="services.php" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-orange-50 transition-colors duration-300">
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

<!-- ================= SPACER FOR FIXED HEADER ================= -->
<div class="h-10 md:h-20"></div>

<!-- ================= HERO SECTION ================= -->
<div class="hero relative min-h-[90vh] flex items-center justify-center p-4 sm:p-6 md:p-8 overflow-hidden">
    
    <!-- Background Slider -->
    <div class="sliderr absolute inset-0 z-0">
        <div class="slidee absolute inset-0 bg-cover bg-center opacity-0 transition-opacity duration-1000" style="background-image: url('Images/albert.jpg');"></div>
        <div class="slidee absolute inset-0 bg-cover bg-center opacity-0 transition-opacity duration-1000" style="background-image: url('Images/cctvinter2.jpg');"></div>
        <div class="slidee absolute inset-0 bg-cover bg-center opacity-0 transition-opacity duration-1000" style="background-image: url('Images/fire-sensor.jpg');"></div>
    </div>
    
    <!-- Dark Overlay - Lighter for better readability -->
    <div class="absolute inset-0 bg-black/40 z-10"></div>
    
    <!-- Content -->
    <div class="relative z-20 flex flex-col lg:flex-row items-center justify-between w-full max-w-6xl gap-8 md:gap-10">
        
        <!-- Left Section -->
<div class="flex-1 min-w-[300px] lg:min-w-[300px] text-center lg:text-left">
            <div class="inline-flex items-left gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20 mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-orange-400 animate-pulse"></span>
                <span class="text-xs font-medium text-white/90 tracking-wider">24/7 Service Available</span>
            </div>
            
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">
                Fermi Professional
                 <br />
                <span class="text-orange-600 inline-flex items-center gap-2">
                    <i class="fas fa-bolt"></i>
                </span>
                <span class="typing-text-animation text-orange-500 font-semibold border-r-2 border-orange-400 inline-block" id="typingg"></span>
            </h1>
                        
            <p class="text-white/90 text-base sm:text-lg md:text-xl mb-8 max-w-[90%] lg:max-w-[90%] mx-auto lg:mx-0 leading-relaxed text-left sm:text-center lg:text-left">
               "Securing your world with trusted expertise, reliable solutions, and comprehensive protection for your home, business, and peace of mind."
            </p>
                        
                    <div class="flex flex-col sm:flex-row items-start gap-4 sm:gap-6 justify-start">
    <a href="services.php" class="group inline-flex items-center gap-2 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-semibold px-8 py-3.5 rounded-full transition-all duration-300 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-orange-500/30">
        Explore Services
        <i class="fas fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"></i>
    </a>
    <a href="tel:+256760271098" class="group inline-flex items-center gap-3 text-white hover:text-orange-400 transition-colors duration-300">
        <span class="w-10 h-10 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center group-hover:bg-orange-500/20 group-hover:border-orange-500/30 transition-all duration-300">
            <i class="fas fa-phone-alt text-orange-400 text-sm"></i>
        </span>
        <div>
            <p class="text-xs text-white/60">Make a call</p>
            <strong class="text-base sm:text-lg font-semibold">+256 760 271 098</strong>
        </div>
    </a>
</div>
    </div>
        
        <!-- Stats / Trust Badges -->
        <div class="w-full  lg:w-auto grid grid-cols-3 gap-3 sm:gap-4 mt-8 lg:mt-0">
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl px-4 py-5 text-center border border-white/10">
                <div class="text-2xl sm:text-3xl font-bold text-white">4.5<span class="text-orange-400">/5</span></div>
                <div class="text-[10px] sm:text-xs text-white/60 uppercase tracking-wider mt-1">Rating</div>
            </div>
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl px-4 py-5 text-center border border-white/10">
                <div class="text-2xl sm:text-3xl font-bold text-white">300<span class="text-orange-400">+</span></div>
                <div class="text-[10px] sm:text-xs text-white/60 uppercase tracking-wider mt-1">Clients</div>
            </div>
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl px-4 py-5 text-center border border-white/10">
                <div class="text-2xl sm:text-3xl font-bold text-white">24<span class="text-orange-400">/7</span></div>
                <div class="text-[10px] sm:text-xs text-white/60 uppercase tracking-wider mt-1">Support</div>
            </div>
        </div>
        
    </div>
</div>




 <!-- ================= ABOUT US SECTION ================= -->
<section class="flex flex-col lg:flex-row items-center justify-center gap-8 lg:gap-0 py-16 md:py-20 lg:py-24 relative">
    
    <!-- Image Column -->
    <div class="relative w-full lg:flex-1 lg:flex-[1_1_60%] min-h-[40vh] lg:min-h-[50vh] overflow-hidden">
        <img src="Images/cctvinter2.jpg" alt="Electrical services" class="w-full object-cover" />
    </div>

    <!-- Content Column (Overlapping) -->
    <div class="relative w-[90%] lg:w-auto lg:flex-1 lg:flex-[1_1_50%] bg-white p-6 md:p-8 lg:p-10 -mt-8 lg:mt-0 lg:-ml-20 xl:-ml-40 z-10 shadow-[0_4px_15px_rgba(0,0,0,0.1)] rounded-lg lg:rounded-none">
        
        <!-- Badge -->
        <span class="text-orange-600 font-semibold uppercase text-sm tracking-wide">
           Let's Introduce
        </span>
        
        <!-- Heading -->
        <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800 mt-2 mb-3 md:mb-4 leading-tight">
            Outstanding Residential, Commercial & Industrial Services
        </h2>
        
        <!-- Description -->
        <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-4 md:mb-6">
            All of our services are backed by our 100% satisfaction guarantee. Our technicians can install anything
            from new security lighting for your outdoors to a whole home network, security that will keep your
            appliances & property safe and working.
        </p>
        
        <!-- Features List -->
        <ul class="space-y-2 md:space-y-3">
            <li class="flex items-start gap-3 text-gray-700 text-sm md:text-base">
                <i class="fas fa-check text-orange-600 mt-1 text-sm"></i>
                <span>Full-service WAN/LAN layout, design</span>
            </li>
            <li class="flex items-start gap-3 text-gray-700 text-sm md:text-base">
                <i class="fas fa-check text-orange-600 mt-1 text-sm"></i>
                <span>AC installation</span>
            </li>
            <li class="flex items-start gap-3 text-gray-700 text-sm md:text-base">
                <i class="fas fa-check text-orange-600 mt-1 text-sm"></i>
                <span>CCTV cameras installation</span>
            </li>
            <li class="flex items-start gap-3 text-gray-700 text-sm md:text-base">
                <i class="fas fa-check text-orange-600 mt-1 text-sm"></i>
                <span>Wiring and installation/upgrades</span>
            </li>
            <li class="flex items-start gap-3 text-gray-700 text-sm md:text-base">
                <i class="fas fa-check text-orange-600 mt-1 text-sm"></i>
                <span>Virtually any electrical needs you have – just ask!</span>
            </li>
        </ul>
        
    </div>
</section>


<!-- ================= VALUES SECTION ================= -->
<section class="py-16 md:py-20">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-black mb-3">
      Mission, Vision & Values
    </h2>
    <p class="text-[#334155] max-w-[70ch] text-base md:text-lg">
      We exist to make critical infrastructure simple, safe, and sustainable for businesses and communities.
    </p>
    
    <!-- Pills -->
    <div class="flex flex-wrap gap-2.5 my-3.5 md:my-4">
      <span class="px-3.5 py-2 rounded-full bg-[#e8e6e5] text-black font-extrabold text-sm">
        Safety First
      </span>
      <span class="px-3.5 py-2 rounded-full bg-[#e8e6e5] text-black font-extrabold text-sm">
        Engineering Rigor
      </span>
      <span class="px-3.5 py-2 rounded-full bg-[#e8e6e5] text-black font-extrabold text-sm">
        Customer Obsession
      </span>
      <span class="px-3.5 py-2 rounded-full bg-[#e8e6e5] text-black font-extrabold text-sm">
        Sustainability
      </span>
      <span class="px-3.5 py-2 rounded-full bg-[#e8e6e5] text-black font-extrabold text-sm">
        Integrity
      </span>
    </div>

    <!-- Value Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5">
      
      <!-- Mission Card -->
      <article class="bg-white border border-[#e2e8f0] rounded-2xl p-5 grid grid-cols-[56px_1fr] gap-3 items-start">
        <i class="fas fa-lightbulb text-3xl text-[#ff6600]"></i>
        <div>
          <strong class="block text-base font-bold text-black">Mission</strong>
          <p class="text-gray-600 text-sm leading-relaxed mt-1">
            Design and maintain reliable security, electrical and IT systems that reduce downtime and total cost of ownership.
          </p>
        </div>
      </article>
      
      <!-- Vision Card -->
      <article class="bg-white border border-[#e2e8f0] rounded-2xl p-5 grid grid-cols-[56px_1fr] gap-3 items-start">
        <i class="fas fa-rocket text-3xl text-[#ff6600]"></i>
        <div>
          <strong class="block text-base font-bold text-black">Vision</strong>
          <p class="text-gray-600 text-sm leading-relaxed mt-1">
            Be East Africa's most trusted partner for integrated power and digital infrastructure.
          </p>
        </div>
      </article>
      
      <!-- Values Card -->
      <article class="bg-white border border-[#e2e8f0] rounded-2xl p-5 grid grid-cols-[56px_1fr] gap-3 items-start">
        <i class="fas fa-leaf text-3xl text-[#ff6600]"></i>
        <div>
          <strong class="block text-base font-bold text-black">Values</strong>
          <p class="text-gray-600 text-sm leading-relaxed mt-1">
            We engineer for people and planet—prioritizing safety, transparency, and measurable performance.
          </p>
        </div>
      </article>
      
    </div>
  </div>
</section>





<!-- ================= SERVICES SECTION (PREMIUM) ================= -->
<section class="py-24 md:py-32 bg-[#FAF7F2] relative overflow-hidden">
    
    <!-- Decorative Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-amber-500/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-amber-400/5 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-amber-300/5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header - Centered & Elegant -->
        <div class="text-center max-w-3xl mx-auto mb-16 md:mb-20">
            <span class="inline-flex items-center gap-2 text-xs font-semibold tracking-[3px] uppercase text-amber-600 bg-amber-50/80 px-5 py-2 rounded-full border border-amber-200/50 mb-5">
                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                24/7 Service – Safe & Efficient
            </span>
            <h2 class="text-2xl md:text-4xl lg:text-5xl font-bold text-[#2D1B12] mb-4 tracking-tight leading-tight">
                We are a Full Service<br>
                <span class="text-amber-600">Security & Electrical Contractor</span>
            </h2>
            <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
                Comprehensive security, electrical, and IT solutions with round-the-clock support and certified expertise.
            </p>
        </div>

        <!-- Services Grid - Clean Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            
            <!-- Card 1 -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 order border-gray-100/50">
                <div class="relative h-48 md:h-56 overflow-hidden">
                    <img src="Images/AutomaticGates.png" alt="Automatic Gates" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/20 backdrop-blur-sm flex items-center justify-center border border-white/20">
                            <i class="fas fa-shield-alt text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6 md:p-7">
                    <h3 class="text-lg font-bold text-[#2D1B12] mb-2">Automatic Gates & Electric Fences</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Secure your premises with automatic gates and reliable electric fences.</p>
                    <a href="services.php" class="inline-flex items-center gap-2 text-amber-600 font-semibold text-sm hover:gap-3 transition-all duration-300 group-hover:text-amber-700">
                        Learn More
                        <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 order border-gray-100/50">
                <div class="relative h-48 md:h-56 overflow-hidden">
                    <img src="Images/SmartCameraAndLight.jpeg" alt="Surveillance" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/20 backdrop-blur-sm flex items-center justify-center border border-white/20">
                            <i class="fas fa-video text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6 md:p-7">
                    <h3 class="text-lg font-bold text-[#2D1B12] mb-2">Surveillance & Detection</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">CCTV cameras, motion sensors, and metal detectors for complete coverage.</p>
                    <a href="services.php" class="inline-flex items-center gap-2 text-amber-600 font-semibold text-sm hover:gap-3 transition-all duration-300 group-hover:text-amber-700">
                        Learn More
                        <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 order border-gray-100/50">
                <div class="relative h-48 md:h-56 overflow-hidden">
                    <img src="Images/ControlPanel1.jpeg" alt="Access Control" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/20 backdrop-blur-sm flex items-center justify-center border border-white/20">
                            <i class="fas fa-door-open text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6 md:p-7">
                    <h3 class="text-lg font-bold text-[#2D1B12] mb-2">Access Control & Communication</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Intercoms, smart alarms, and modern access control systems.</p>
                    <a href="services.php" class="inline-flex items-center gap-2 text-amber-600 font-semibold text-sm hover:gap-3 transition-all duration-300 group-hover:text-amber-700">
                        Learn More
                        <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 order border-gray-100/50">
                <div class="relative h-48 md:h-56 overflow-hidden">
                    <img src="Images/fire-alarm.jpg" alt="Fire Alarms" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/20 backdrop-blur-sm flex items-center justify-center border border-white/20">
                            <i class="fas fa-fire text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6 md:p-7">
                    <h3 class="text-lg font-bold text-[#2D1B12] mb-2">Fire Alarms & Motion Detectors</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Protect lives and property with fire alarms and reliable motion detection.</p>
                    <a href="services.php" class="inline-flex items-center gap-2 text-amber-600 font-semibold text-sm hover:gap-3 transition-all duration-300 group-hover:text-amber-700">
                        Learn More
                        <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 order border-gray-100/50">
                <div class="relative h-48 md:h-56 overflow-hidden">
                    <img src="Images/poss.jpg" alt="POS Solutions" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/20 backdrop-blur-sm flex items-center justify-center border border-white/20">
                            <i class="fas fa-cash-register text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6 md:p-7">
                    <h3 class="text-lg font-bold text-[#2D1B12] mb-2">POS & Tracking Solutions</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Point of Sale systems, GPS trackers, and fuel monitoring systems.</p>
                    <a href="services.php" class="inline-flex items-center gap-2 text-amber-600 font-semibold text-sm hover:gap-3 transition-all duration-300 group-hover:text-amber-700">
                        Learn More
                        <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 order border-gray-100/50">
                <div class="relative h-48 md:h-56 overflow-hidden">
                    <img src="Images/switch.png" alt="Network Installation" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/20 backdrop-blur-sm flex items-center justify-center border border-white/20">
                            <i class="fas fa-network-wired text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6 md:p-7">
                    <h3 class="text-lg font-bold text-[#2D1B12] mb-2">WAN/LAN & Installations</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Office/shop wiring, elevators, and escalator installations.</p>
                    <a href="services.php" class="inline-flex items-center gap-2 text-amber-600 font-semibold text-sm hover:gap-3 transition-all duration-300 group-hover:text-amber-700">
                        Learn More
                        <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 order border-gray-100/50">
                <div class="relative h-48 md:h-56 overflow-hidden">
                    <img src="Images/air-conditioning-decoration-interior.jpg" alt="Air Conditioning" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/20 backdrop-blur-sm flex items-center justify-center border border-white/20">
                            <i class="fas fa-snowflake text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6 md:p-7">
                    <h3 class="text-lg font-bold text-[#2D1B12] mb-2">Air Conditioning Systems</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Professional installation of energy-efficient air conditioning.</p>
                    <a href="services.php" class="inline-flex items-center gap-2 text-amber-600 font-semibold text-sm hover:gap-3 transition-all duration-300 group-hover:text-amber-700">
                        Learn More
                        <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 order border-gray-100/50">
                <div class="relative h-48 md:h-56 overflow-hidden">
                    <img src="Images/WaterHeater.jpg" alt="Refrigeration" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/20 backdrop-blur-sm flex items-center justify-center border border-white/20">
                            <i class="fas fa-thermometer-half text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6 md:p-7">
                    <h3 class="text-lg font-bold text-[#2D1B12] mb-2">Refrigeration & Water Heaters</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Reliable refrigeration systems and modern water heating solutions.</p>
                    <a href="services.php" class="inline-flex items-center gap-2 text-amber-600 font-semibold text-sm hover:gap-3 transition-all duration-300 group-hover:text-amber-700">
                        Learn More
                        <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>

            <!-- Card 9 -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 order border-gray-100/50">
                <div class="relative h-48 md:h-56 overflow-hidden">
                    <img src="Images/solar-panel.jpg" alt="Panel Design" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/20 backdrop-blur-sm flex items-center justify-center border border-white/20">
                            <i class="fas fa-solar-panel text-white text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6 md:p-7">
                    <h3 class="text-lg font-bold text-[#2D1B12] mb-2">Panel Design & Automation</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Custom design and automation of electrical panels tailored to you.</p>
                    <a href="services.php" class="inline-flex items-center gap-2 text-amber-600 font-semibold text-sm hover:gap-3 transition-all duration-300 group-hover:text-amber-700">
                        Learn More
                        <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>

        </div>

        <!-- View All CTA -->
        <div class="text-center mt-14 md:mt-16">
            <a href="services.php" class="inline-flex items-center gap-3 bg-amber-500 hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full transition-all duration-300 hover:shadow-lg hover:shadow-amber-500/30 hover:-translate-y-0.5">
                View All Services
                <i class="fas fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"></i>
            </a>
        </div>

    </div>
</section>





<div class="bg-white py-24 sm:py-32 overflow-hidden">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:text-center" data-aos="fade-up">
      
      <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
        Your Trusted Security & Electrical Partner
      </h2>
      <p class="mt-6 text-lg leading-relaxed text-gray-600">
        We deliver comprehensive electrical, security, and automation solutions with unmatched expertise, 
        round-the-clock support, and a 100% satisfaction guarantee.
      </p>
    </div>

    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
      <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">

        <!-- Feature 1 -->
        <div class="relative pl-16" data-aos="fade-up" data-aos-delay="100">
          <dt class="text-base font-semibold text-gray-900">
            <div class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-gradient-to-br from-amber-500 to-amber-600 shadow-lg shadow-amber-500/25">
              <i class="fas fa-clock text-white text-lg"></i>
            </div>
            24/7 Emergency Service
          </dt>
          <dd class="mt-2 text-base text-gray-600">
            Around-the-clock availability for all your electrical and security emergencies. 
            We respond within 60 minutes for critical issues.
          </dd>
        </div>

        <!-- Feature 2 -->
        <div class="relative pl-16" data-aos="fade-up" data-aos-delay="200">
          <dt class="text-base font-semibold text-gray-900">
            <div class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-gradient-to-br from-amber-500 to-amber-600 shadow-lg shadow-amber-500/25">
              <i class="fas fa-certificate text-white text-lg"></i>
            </div>
            Certified & Licensed
          </dt>
          <dd class="mt-2 text-base text-gray-600">
            Fully licensed and insured professionals with years of experience in 
            residential, commercial, and industrial installations.
          </dd>
        </div>

        <!-- Feature 3 -->
        <div class="relative pl-16" data-aos="fade-up" data-aos-delay="300">
          <dt class="text-base font-semibold text-gray-900">
            <div class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-gradient-to-br from-amber-500 to-amber-600 shadow-lg shadow-amber-500/25">
              <i class="fas fa-shield-alt text-white text-lg"></i>
            </div>
            Security-First Approach
          </dt>
          <dd class="mt-2 text-base text-gray-600">
            Comprehensive security solutions including CCTV, access control, fire alarms, 
            and perimeter protection for complete peace of mind.
          </dd>
        </div>

        <!-- Feature 4 -->
        <div class="relative pl-16" data-aos="fade-up" data-aos-delay="400">
          <dt class="text-base font-semibold text-gray-900">
            <div class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-gradient-to-br from-amber-500 to-amber-600 shadow-lg shadow-amber-500/25">
              <i class="fas fa-check-circle text-white text-lg"></i>
            </div>
            100% Satisfaction Guarantee
          </dt>
          <dd class="mt-2 text-base text-gray-600">
            Every installation and repair is backed by our satisfaction guarantee. 
            We don't rest until you're completely happy with our work.
          </dd>
        </div>

        <!-- Feature 5 -->
        <div class="relative pl-16" data-aos="fade-up" data-aos-delay="500">
          <dt class="text-base font-semibold text-gray-900">
            <div class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-gradient-to-br from-amber-500 to-amber-600 shadow-lg shadow-amber-500/25">
              <i class="fas fa-microchip text-white text-lg"></i>
            </div>
            Smart Technology Integration
          </dt>
          <dd class="mt-2 text-base text-gray-600">
            Modern automation solutions including smart home systems, IoT devices, 
            and energy-efficient technologies tailored to your needs.
          </dd>
        </div>

        <!-- Feature 6 -->
        <div class="relative pl-16" data-aos="fade-up" data-aos-delay="600">
          <dt class="text-base font-semibold text-gray-900">
            <div class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-gradient-to-br from-amber-500 to-amber-600 shadow-lg shadow-amber-500/25">
              <i class="fas fa-handshake text-white text-lg"></i>
            </div>
            Affordable & Transparent Pricing
          </dt>
          <dd class="mt-2 text-base text-gray-600">
            Competitive rates with no hidden charges. We provide detailed quotes 
            and clear communication throughout every project.
          </dd>
        </div>

      </dl>
    </div>

    <!-- Call to Action -->
    <div class="mt-16 text-center" data-aos="zoom-in" data-aos-delay="700">
      <a href="tel:+256754130885" 
         class="inline-flex items-center gap-3 bg-gradient-to-br from-amber-500 to-amber-600 text-white px-8 py-4 rounded-full font-semibold hover:shadow-xl hover:shadow-amber-500/30 hover:-translate-y-1 transition-all duration-300">
        <i class="fas fa-phone-alt"></i>
        Get a Free Consultation
        <i class="fas fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"></i>
      </a>
      <p class="mt-4 text-sm text-gray-500">
        <i class="fas fa-check-circle text-amber-500 mr-1"></i> No obligation. Free site inspection.
      </p>
    </div>

  </div>
</div>


<!-- ================= HERO CTA WITH COUNTERS ================= -->
<div class="relative isolate overflow-hidden py-16 sm:py-24 lg:py-32 bg-[#5D4037]">
    
    <!-- Background Image -->
    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=5D4037&sat=-100&exp=15&blend-mode=multiply" 
         alt="Security and electrical services" 
         class="absolute inset-0 -z-10 size-full object-cover object-right md:object-center" />

    <!-- Decorative Elements -->
    <div aria-hidden="true" class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl">
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%); background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%); opacity: 0.25;" 
             class="aspect-[1097/845] w-[274.25rem] max-w-none"></div>
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        
        <!-- Content - Left Aligned -->
        <div class="max-w-3xl">
        
            
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl md:text-5xl lg:text-6xl">
                Protect What Matters Most
            </h2>
            <p class="mt-4 text-base leading-relaxed text-[#D7CCC8] sm:text-lg sm:leading-8">
                From <span class="text-amber-400 font-semibold">CCTV surveillance</span> and access control to 
                structured networking and electrical installations, <span class="text-amber-400 font-semibold">FERMI</span> 
                delivers reliable solutions that keep your home, business, and assets safe.
            </p>
            
            <!-- Stats -->
            <dl class="mt-8 grid grid-cols-2 gap-4 sm:grid-cols-4">
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 border border-white/10">
                    <dt class="text-xs text-[#D7CCC8] font-medium uppercase tracking-wider">Customers</dt>
                    <dd class="text-2xl sm:text-3xl font-bold text-white">
                        <span class="counter" data-target="102">0</span><span class="text-amber-400">+</span>
                    </dd>
                </div>
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 border border-white/10">
                    <dt class="text-xs text-[#D7CCC8] font-medium uppercase tracking-wider">Support</dt>
                    <dd class="text-2xl sm:text-3xl font-bold text-white">
                        <span class="counter" data-target="24">0</span><span class="text-amber-400 text-lg">/7</span>
                    </dd>
                </div>
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 border border-white/10">
                    <dt class="text-xs text-[#D7CCC8] font-medium uppercase tracking-wider">Experience</dt>
                    <dd class="text-2xl sm:text-3xl font-bold text-white">
                        <span class="counter" data-target="5">0</span><span class="text-amber-400">+ Years</span>
                    </dd>
                </div>
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 border border-white/10">
                    <dt class="text-xs text-[#D7CCC8] font-medium uppercase tracking-wider">Coverage</dt>
                    <dd class="text-2xl sm:text-3xl font-bold text-white">
                        Unlimited
                    </dd>
                </div>
            </dl>

            <!-- CTA Buttons -->
            <div class="mt-8 flex flex-wrap gap-4">
                <a href="tel:+256754130885" 
                   class="inline-flex items-center gap-3 bg-gradient-to-br from-amber-500 to-amber-600 text-white px-8 py-3.5 rounded-full font-semibold hover:shadow-xl hover:shadow-amber-500/30 hover:-translate-y-0.5 transition-all duration-300 group">
                    <i class="fas fa-phone-alt"></i>
                    Get a Free Quote
                    <i class="fas fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>
                <a href="/services.php" 
                   class="inline-flex items-center gap-2 border-2 border-white/30 text-white px-8 py-3.5 rounded-full font-semibold hover:bg-white/10 hover:border-white/50 transition-all duration-300">
                    <i class="fas fa-chevron-right"></i>
                    Our Services
                </a>
            </div>
        </div>
    </div>
</div>



<!-- ================= CONTACT SECTION (Premium) ================= -->
<section class="py-16 md:py-24 bg-[#fef9f6] relative overflow-hidden">
    
    <!-- Decorative Background -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-orange-200/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-[500px] h-[500px] bg-amber-200/10 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-6xl mx-auto px-4 md:px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-8 md:gap-12 lg:gap-16">
            
            <!-- Image with Badge -->
            <div class="w-full lg:w-1/2 relative">
                <img src="Images/Technician.jpeg" alt="Electrical Worker" 
                     class="w-full max-w-[500px] h-[280px] md:h-[350px] rounded-2xl object-cover shadow-xl mx-auto" />
                
                <!-- Floating Badge -->
                <div class="absolute -bottom-4 -right-4 md:-bottom-6 md:-right-6 bg-white rounded-xl shadow-lg px-4 py-3 md:px-5 md:py-4 flex items-center gap-3">
                    <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                    <div>
                        <p class="text-[10px] md:text-xs text-gray-500 font-medium">Available 24/7</p>
                        <p class="text-xs md:text-sm font-bold text-[#111]">Emergency Support</p>
                    </div>
                </div>
            </div>
            
            <!-- Contact Info -->
            <div class="w-full lg:w-1/2">
                <div class="inline-flex items-center gap-2 bg-orange-50 px-4 py-1.5 rounded-full border border-orange-200/50 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#f76c1f]"></span>
                    <span class="text-[10px] md:text-xs font-semibold text-[#f76c1f] tracking-widest uppercase">Contact Us</span>
                </div>
                
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-[#111] mb-4 leading-tight">
                    Need Security Services? <br class="hidden sm:block" />
                    <span class="text-[#f76c1f]">Get in Touch Today.</span>
                </h2>
                
                <p class="text-[#555] text-sm md:text-base leading-relaxed mb-6 md:mb-8">
                    Our team of licensed professionals is available around the clock to assist with any security needs.
                    Whether it's an emergency repair or a routine inspection — we've got you covered.
                </p>
                
                <div class="flex flex-col gap-4 md:gap-5">
                    <!-- Phone -->
                    <div class="group flex items-center gap-3 md:gap-4 p-3 md:p-4 rounded-xl bg-white shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-orange-50 flex items-center justify-center text-[#f76c1f] group-hover:bg-[#f76c1f] group-hover:text-white transition-all duration-300">
                            <i class="fas fa-phone-volume text-lg md:text-xl"></i>
                        </div>
                        <div>
                            <p class="text-[10px] md:text-xs text-[#888] font-medium uppercase tracking-wider">Call Us Anytime</p>
                            <a href="tel:+256754130885" class="text-sm md:text-lg font-semibold text-[#111] hover:text-[#f76c1f] transition-colors duration-300">
                                0754 130885
                            </a>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="group flex items-center gap-3 md:gap-4 p-3 md:p-4 rounded-xl bg-white shadow-sm hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-orange-50 flex items-center justify-center text-[#f76c1f] group-hover:bg-[#f76c1f] group-hover:text-white transition-all duration-300">
                            <i class="fas fa-envelope-open-text text-lg md:text-xl"></i>
                        </div>
                        <div>
                            <p class="text-[10px] md:text-xs text-[#888] font-medium uppercase tracking-wider">Email Our Team</p>
                            <a href="mailto:fermielectritech@gmail.com" class="text-sm md:text-lg font-semibold text-[#111] hover:text-[#f76c1f] transition-colors duration-300 break-all">
                                fermielectritech@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Button -->
                <div class="mt-6 md:mt-8">
                    <a href="tel:+256754130885" 
                       class="inline-flex items-center gap-3 bg-[#f76c1f] hover:bg-[#e05a0e] text-white font-semibold px-6 md:px-8 py-3 md:py-4 rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-orange-500/30 hover:-translate-y-0.5">
                        <i class="fas fa-phone-alt"></i>
                        Call Now for Free Consultation
                        <i class="fas fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</section>







   <!-- ================= FAQ SECTION ================= -->
<section class="py-16 md:py-20 lg:py-24 relative overflow-hidden bg-gradient-to-b from-white to-amber-50/30">
    
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-amber-200/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-[500px] h-[500px] bg-orange-200/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-amber-100/5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="text-center mb-12 md:mb-16">
            <div class="inline-flex items-center gap-2 bg-amber-50 text-amber-600 px-5 py-2 rounded-full border border-amber-200/60 mb-4 shadow-sm">
                <i class="fas fa-question-circle text-sm"></i>
                <span class="text-xs font-semibold uppercase tracking-[2px]">FAQ's</span>
            </div>
            
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 tracking-tight">
                Frequently Asked <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-500 to-amber-600">Questions</span>
            </h2>
            
            <p class="text-gray-600 max-w-2xl mx-auto text-base md:text-lg leading-relaxed">
                Find answers to the most common questions about our electrical, security, and IT services
            </p>
        </div>

        <!-- FAQ Items -->
        <div class="space-y-4" id="faqAccordion">
            
            <!-- FAQ 1 -->
            <div class="faq-item group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100/80 hover:border-amber-200/50 overflow-hidden">
                <button class="faq-question w-full text-left px-6 md:px-8 py-5 flex justify-between items-center gap-4 transition-all duration-300 hover:bg-amber-50/30" onclick="toggleFaq(this)">
                    <span class="text-sm md:text-base font-semibold text-gray-800 group-hover:text-amber-600 transition-colors duration-300">
                        <span class="inline-block w-7 h-7 text-center leading-7 text-xs font-bold text-amber-600 bg-amber-100 rounded-full mr-3 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300">1</span>
                        What types of security systems do you install?
                    </span>
                    <i class="fas fa-chevron-down text-amber-500 text-sm transition-transform duration-300 flex-shrink-0"></i>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]">
                    <div class="px-6 md:px-8 pb-6 text-gray-600 leading-relaxed">
                        <p>We provide comprehensive security solutions including:</p>
                        <ul class="list-none space-y-2 mt-3">
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-amber-500 mt-1"></i>
                                <span>High-definition CCTV camera systems with remote monitoring</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-amber-500 mt-1"></i>
                                <span>Biometric and RFID access control systems</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-amber-500 mt-1"></i>
                                <span>Perimeter security with electric fences and motion sensors</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-amber-500 mt-1"></i>
                                <span>Integrated smart home and business security platforms</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100/80 hover:border-amber-200/50 overflow-hidden">
                <button class="faq-question w-full text-left px-6 md:px-8 py-5 flex justify-between items-center gap-4 transition-all duration-300 hover:bg-amber-50/30" onclick="toggleFaq(this)">
                    <span class="text-sm md:text-base font-semibold text-gray-800 group-hover:text-amber-600 transition-colors duration-300">
                        <span class="inline-block w-7 h-7 text-center leading-7 text-xs font-bold text-amber-600 bg-amber-100 rounded-full mr-3 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300">2</span>
                        Are your security systems compliant with data protection regulations?
                    </span>
                    <i class="fas fa-chevron-down text-amber-500 text-sm transition-transform duration-300 flex-shrink-0"></i>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]">
                    <div class="px-6 md:px-8 pb-6 text-gray-600 leading-relaxed">
                        <p>Yes, all our security solutions are designed with privacy-by-design principles and fully comply with:</p>
                        <ul class="list-none space-y-2 mt-3">
                            <li class="flex items-start gap-3">
                                <i class="fas fa-shield-alt text-amber-500 mt-1"></i>
                                <span>GDPR (General Data Protection Regulation)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-shield-alt text-amber-500 mt-1"></i>
                                <span>Local data protection and privacy laws</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-shield-alt text-amber-500 mt-1"></i>
                                <span>Industry best practices for data security</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100/80 hover:border-amber-200/50 overflow-hidden">
                <button class="faq-question w-full text-left px-6 md:px-8 py-5 flex justify-between items-center gap-4 transition-all duration-300 hover:bg-amber-50/30" onclick="toggleFaq(this)">
                    <span class="text-sm md:text-base font-semibold text-gray-800 group-hover:text-amber-600 transition-colors duration-300">
                        <span class="inline-block w-7 h-7 text-center leading-7 text-xs font-bold text-amber-600 bg-amber-100 rounded-full mr-3 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300">3</span>
                        Do you offer both residential and commercial services?
                    </span>
                    <i class="fas fa-chevron-down text-amber-500 text-sm transition-transform duration-300 flex-shrink-0"></i>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]">
                    <div class="px-6 md:px-8 pb-6 text-gray-600 leading-relaxed">
                        <p>Absolutely! We serve both residential and commercial clients with tailored solutions:</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-3">
                            <div class="bg-amber-50/50 rounded-xl p-4 border border-amber-100/50">
                                <h4 class="font-semibold text-amber-700 mb-2">
                                    <i class="fas fa-home mr-2"></i>Residential
                                </h4>
                                <ul class="space-y-1 text-sm">
                                    <li>• Home security systems</li>
                                    <li>• Electrical installations</li>
                                    <li>• Smart home automation</li>
                                    <li>• Energy efficiency upgrades</li>
                                </ul>
                            </div>
                            <div class="bg-amber-50/50 rounded-xl p-4 border border-amber-100/50">
                                <h4 class="font-semibold text-amber-700 mb-2">
                                    <i class="fas fa-building mr-2"></i>Commercial
                                </h4>
                                <ul class="space-y-1 text-sm">
                                    <li>• Office & retail security</li>
                                    <li>• Industrial electrical work</li>
                                    <li>• Network infrastructure</li>
                                    <li>• Fire alarm systems</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100/80 hover:border-amber-200/50 overflow-hidden">
                <button class="faq-question w-full text-left px-6 md:px-8 py-5 flex justify-between items-center gap-4 transition-all duration-300 hover:bg-amber-50/30" onclick="toggleFaq(this)">
                    <span class="text-sm md:text-base font-semibold text-gray-800 group-hover:text-amber-600 transition-colors duration-300">
                        <span class="inline-block w-7 h-7 text-center leading-7 text-xs font-bold text-amber-600 bg-amber-100 rounded-full mr-3 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300">4</span>
                        How do you ensure cybersecurity for your IT solutions?
                    </span>
                    <i class="fas fa-chevron-down text-amber-500 text-sm transition-transform duration-300 flex-shrink-0"></i>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]">
                    <div class="px-6 md:px-8 pb-6 text-gray-600 leading-relaxed">
                        <p>Our IT infrastructure and solutions are protected by multiple layers of security:</p>
                        <ul class="list-none space-y-2 mt-3">
                            <li class="flex items-start gap-3">
                                <i class="fas fa-firewall text-amber-500 mt-1"></i>
                                <span><strong>Enterprise-grade firewalls</strong> - Advanced threat protection and intrusion detection</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-lock text-amber-500 mt-1"></i>
                                <span><strong>End-to-end encryption</strong> - All data transmissions are fully encrypted</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-sync-alt text-amber-500 mt-1"></i>
                                <span><strong>Regular security patches</strong> - Automated updates and vulnerability management</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-eye text-amber-500 mt-1"></i>
                                <span><strong>24/7 monitoring</strong> - Real-time threat detection and response</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

          

            <!-- FAQ 6 -->
            <div class="faq-item group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100/80 hover:border-amber-200/50 overflow-hidden">
                <button class="faq-question w-full text-left px-6 md:px-8 py-5 flex justify-between items-center gap-4 transition-all duration-300 hover:bg-amber-50/30" onclick="toggleFaq(this)">
                    <span class="text-sm md:text-base font-semibold text-gray-800 group-hover:text-amber-600 transition-colors duration-300">
                        <span class="inline-block w-7 h-7 text-center leading-7 text-xs font-bold text-amber-600 bg-amber-100 rounded-full mr-3 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300">6</span>
                        What IT support services do you provide for businesses?
                    </span>
                    <i class="fas fa-chevron-down text-amber-500 text-sm transition-transform duration-300 flex-shrink-0"></i>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]">
                    <div class="px-6 md:px-8 pb-6 text-gray-600 leading-relaxed">
                        <p>We offer comprehensive IT support tailored to businesses of all sizes:</p>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-3">
                            <div class="bg-purple-50/50 rounded-xl p-4 border border-purple-100/50 text-center">
                                <i class="fas fa-network-wired text-2xl text-purple-500 mb-2"></i>
                                <h4 class="font-semibold text-purple-700 text-sm">Network Setup</h4>
                                <p class="text-xs text-gray-600 mt-1">WAN/LAN installation and optimization</p>
                            </div>
                            <div class="bg-purple-50/50 rounded-xl p-4 border border-purple-100/50 text-center">
                                <i class="fas fa-server text-2xl text-purple-500 mb-2"></i>
                                <h4 class="font-semibold text-purple-700 text-sm">Server Management</h4>
                                <p class="text-xs text-gray-600 mt-1">Cloud & on-premise solutions</p>
                            </div>
                            <div class="bg-purple-50/50 rounded-xl p-4 border border-purple-100/50 text-center">
                                <i class="fas fa-headset text-2xl text-purple-500 mb-2"></i>
                                <h4 class="font-semibold text-purple-700 text-sm">24/7 Support</h4>
                                <p class="text-xs text-gray-600 mt-1">Ongoing technical assistance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           

            <!-- FAQ 8 -->
            <div class="faq-item group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100/80 hover:border-amber-200/50 overflow-hidden">
                <button class="faq-question w-full text-left px-6 md:px-8 py-5 flex justify-between items-center gap-4 transition-all duration-300 hover:bg-amber-50/30" onclick="toggleFaq(this)">
                    <span class="text-sm md:text-base font-semibold text-gray-800 group-hover:text-amber-600 transition-colors duration-300">
                        <span class="inline-block w-7 h-7 text-center leading-7 text-xs font-bold text-amber-600 bg-amber-100 rounded-full mr-3 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300">8</span>
                        What is the typical process for a new installation project?
                    </span>
                    <i class="fas fa-chevron-down text-amber-500 text-sm transition-transform duration-300 flex-shrink-0"></i>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]">
                    <div class="px-6 md:px-8 pb-6 text-gray-600 leading-relaxed">
                        <p>Our streamlined process ensures a smooth experience from start to finish:</p>
                        <div class="grid grid-cols-1 sm:grid-cols-4 gap-3 mt-3">
                            <div class="text-center p-3 bg-amber-50/50 rounded-xl border border-amber-100/50">
                                <div class="w-10 h-10 bg-amber-500 text-white rounded-full flex items-center justify-center mx-auto mb-2 font-bold">1</div>
                                <h4 class="font-semibold text-amber-700 text-sm">Consultation</h4>
                                <p class="text-xs text-gray-600 mt-1"> Site assessment</p>
                            </div>
                            <div class="text-center p-3 bg-amber-50/50 rounded-xl border border-amber-100/50">
                                <div class="w-10 h-10 bg-amber-500 text-white rounded-full flex items-center justify-center mx-auto mb-2 font-bold">2</div>
                                <h4 class="font-semibold text-amber-700 text-sm">Design & Quote</h4>
                                <p class="text-xs text-gray-600 mt-1">Customized solution plan</p>
                            </div>
                            <div class="text-center p-3 bg-amber-50/50 rounded-xl border border-amber-100/50">
                                <div class="w-10 h-10 bg-amber-500 text-white rounded-full flex items-center justify-center mx-auto mb-2 font-bold">3</div>
                                <h4 class="font-semibold text-amber-700 text-sm">Installation</h4>
                                <p class="text-xs text-gray-600 mt-1">Professional setup</p>
                            </div>
                            <div class="text-center p-3 bg-amber-50/50 rounded-xl border border-amber-100/50">
                                <div class="w-10 h-10 bg-amber-500 text-white rounded-full flex items-center justify-center mx-auto mb-2 font-bold">4</div>
                                <h4 class="font-semibold text-amber-700 text-sm">Support</h4>
                                <p class="text-xs text-gray-600 mt-1">Ongoing maintenance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom CTA -->
        <div class="text-center mt-12 pt-8 border-t border-gray-200/60">
            <p class="text-gray-600 mb-4">
                <i class="fas fa-phone-alt text-amber-500 mr-2"></i>
                Still have questions? We're here to help!
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="tel:+256754130885" 
                   class="inline-flex items-center gap-3 bg-gradient-to-br from-amber-500 to-amber-600 text-white px-8 py-3.5 rounded-full font-semibold hover:shadow-xl hover:shadow-amber-500/30 hover:-translate-y-0.5 transition-all duration-300">
                    <i class="fas fa-headset"></i>
                    Contact Our Support Team
                    <i class="fas fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>
                <a href="services.php" 
                   class="inline-flex items-center gap-2 border-2 border-gray-300 text-gray-700 px-8 py-3.5 rounded-full font-semibold hover:bg-gray-50 hover:border-amber-400 transition-all duration-300">
                    <i class="fas fa-chevron-right"></i>
                    View All Services
                </a>
            </div>
        </div>

    </div>
</section>

    
<!-- ================= OUR ADVANTAGES ================= -->
<section class="text-center py-16 md:py-20 lg:py-24 px-4 sm:px-6 bg-gray-50">
    
    <div class="max-w-4xl mx-auto">
        <h3 class="text-orange-500 text-sm uppercase tracking-[1px] font-semibold mb-1">
            Our Advantages
        </h3>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3">
            Reasons You Should Call Us
        </h2>
        <p class="text-gray-600 text-base max-w-2xl mx-auto leading-relaxed mb-10 md:mb-12">
            Fermi Electrical & IT Solutions is your single source for high-quality power and network services —
            including design/build, engineering, and maintenance.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 max-w-6xl mx-auto">
        
        <!-- Feature 1 -->
        <div class="bg-white p-6 md:p-7 text-left relative overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
            <div class="flex items-center gap-4 mb-3">
                <i class="fa-solid fa-clock-rotate-left text-3xl text-orange-500 flex-shrink-0"></i>
                <h4 class="text-xl md:text-2xl font-bold text-gray-900 m-0">24/7 Emergency Services</h4>
            </div>
            <p class="text-gray-600 text-sm md:text-base leading-relaxed m-0">
                24/7 emergency technicians that you can trust for quick, reliable, and safe responses.
            </p>
            <!-- Dotted Background -->
            <div class="absolute right-5 bottom-5 w-14 h-14 opacity-30 pointer-events-none" style="background-image: radial-gradient(#ddd 1px, transparent 1px); background-size: 8px 8px;"></div>
        </div>

        <!-- Feature 2 -->
        <div class="bg-white p-6 md:p-7 text-left relative overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
            <div class="flex items-center gap-4 mb-3">
                <i class="fa-solid fa-calculator text-3xl text-orange-500 flex-shrink-0"></i>
                <h4 class="text-xl md:text-2xl font-bold text-gray-900 m-0">Our Free Estimates</h4>
            </div>
            <p class="text-gray-600 text-sm md:text-base leading-relaxed m-0">
                We offer detailed free estimates for security, electrical installations or system upgrades.
            </p>
            <!-- Dotted Background -->
            <div class="absolute right-5 bottom-5 w-14 h-14 opacity-30 pointer-events-none" style="background-image: radial-gradient(#ddd 1px, transparent 1px); background-size: 8px 8px;"></div>
        </div>

        <!-- Feature 3 -->
        <div class="bg-white p-6 md:p-7 text-left relative overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
            <div class="flex items-center gap-4 mb-3">
                <i class="fa-solid fa-tags text-3xl text-orange-500 flex-shrink-0"></i>
                <h4 class="text-xl md:text-2xl font-bold text-gray-900 m-0">Low Price Guarantee</h4>
            </div>
            <p class="text-gray-600 text-sm md:text-base leading-relaxed m-0">
                We strive to offer the most competitive prices in the market — guaranteed.
            </p>
            <!-- Dotted Background -->
            <div class="absolute right-5 bottom-5 w-14 h-14 opacity-30 pointer-events-none" style="background-image: radial-gradient(#ddd 1px, transparent 1px); background-size: 8px 8px;"></div>
        </div>

    </div>
</section>

  
  

   
<!-- ================= TESTIMONIALS SECTION ================= -->
<section class="py-16 md:py-20 lg:py-24 bg-white relative overflow-hidden">
    
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 right-0 w-96 h-96 bg-amber-50 rounded-full blur-3xl opacity-50"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-orange-50 rounded-full blur-3xl opacity-30"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-amber-50/20 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="text-center mb-12 md:mb-16">
            <span class="inline-block text-xs md:text-sm font-semibold uppercase tracking-[3px] text-amber-600 bg-amber-50 px-5 py-2 rounded-full border border-amber-200/60 mb-4">
                <i class="fas fa-star text-amber-400 mr-2"></i> Testimonials
            </span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 tracking-tight">
                What Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-500 to-amber-600">Clients Say</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-base md:text-lg">
                Trusted by businesses and homeowners across Uganda
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8" id="testCarousel">
            
            <!-- Testimonial 1 -->
            <div class="test-card group bg-gradient-to-br from-white to-amber-50/30 rounded-2xl p-6 md:p-8 border border-gray-100/80 hover:border-amber-200/50 transition-all duration-500 hover:-translate-y-2 relative">
                <div class="absolute top-4 right-4 flex gap-1">
                    <i class="fas fa-star text-amber-400 text-xs"></i>
                    <i class="fas fa-star text-amber-400 text-xs"></i>
                    <i class="fas fa-star text-amber-400 text-xs"></i>
                    <i class="fas fa-star text-amber-400 text-xs"></i>
                    <i class="fas fa-star text-amber-400 text-xs"></i>
                </div>
                <div class="test-text relative pl-6 mb-6">
                    <span class="absolute -left-2 -top-4 text-6xl text-amber-200/50 font-serif leading-none">"</span>
                    <p class="text-gray-700 leading-relaxed text-sm md:text-base italic">
                        Fermi Electrotech installed our office security system... Two years later, everything still works perfectly.
                    </p>
                </div>
                <div class="test-author flex items-center gap-4">
                    <div class="test-avatar w-14 h-14 rounded-full overflow-hidden border-2 border-amber-500 p-0.5 bg-white flex-shrink-0">
                        <img src="Images/user-profile-icon.png" alt="Robert Mugisha" class="w-full h-full object-cover rounded-full">
                    </div>
                    <div class="test-info flex-1 min-w-0">
                        <h4 class="test-name text-gray-900 font-semibold text-base truncate">Robert Mugisha</h4>
                        <div class="test-role text-amber-600 text-sm font-medium">Kampala</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="test-card group bg-gradient-to-br from-white to-amber-50/30 rounded-2xl p-6 md:p-8 border border-gray-100/80 hover:border-amber-200/50 transition-all duration-500 hover:-translate-y-2 relative">
                <div class="absolute top-4 right-4 flex gap-1">
                    <i class="fas fa-star text-amber-400 text-xs"></i>
                    <i class="fas fa-star text-amber-400 text-xs"></i>
                    <i class="fas fa-star text-amber-400 text-xs"></i>
                    <i class="fas fa-star text-amber-400 text-xs"></i>
                    
                </div>
                <div class="test-text relative pl-6 mb-6">
                    <span class="absolute -left-2 -top-4 text-6xl text-amber-200/50 font-serif leading-none">"</span>
                    <p class="text-gray-700 leading-relaxed text-sm md:text-base italic">
                        Their 24/7 emergency service saved us when our main power line failed at midnight. Highly recommended!
                    </p>
                </div>
                <div class="test-author flex items-center gap-4">
                    <div class="test-avatar w-14 h-14 rounded-full overflow-hidden border-2 border-amber-500 p-0.5 bg-white flex-shrink-0">
                        <img src="Images/user-profile-icon.png" alt="Ocakala Joshus" class="w-full h-full object-cover rounded-full">
                    </div>
                    <div class="test-info flex-1 min-w-0">
                        <h4 class="test-name text-gray-900 font-semibold text-base truncate">Ocakala Joshus</h4>
                        <div class="test-role text-amber-600 text-sm font-medium">Micro Finance Officer, Lugogo</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="test-card group bg-gradient-to-br from-white to-amber-50/30 rounded-2xl p-6 md:p-8 border border-gray-100/80 hover:border-amber-200/50 transition-all duration-500 hover:-translate-y-2 relative">
                <div class="absolute top-4 right-4 flex gap-1">
                    <i class="fas fa-star text-amber-400 text-xs"></i>
                    <i class="fas fa-star text-amber-400 text-xs"></i>
                    <i class="fas fa-star text-amber-400 text-xs"></i>
                    <i class="fas fa-star text-amber-400 text-xs"></i>
                    <i class="fas fa-star text-amber-400 text-xs"></i>
                </div>
                <div class="test-text relative pl-6 mb-6">
                    <span class="absolute -left-2 -top-4 text-6xl text-amber-200/50 font-serif leading-none">"</span>
                    <p class="text-gray-700 leading-relaxed text-sm md:text-base italic">
                        The team handled our factory's complete electrical overhaul with minimal downtime.
                    </p>
                </div>
                <div class="test-author flex items-center gap-4">
                    <div class="test-avatar w-14 h-14 rounded-full overflow-hidden border-2 border-amber-500 p-0.5 bg-white flex-shrink-0">
                        <img src="Images/user-profile-icon.png" alt="Kisamba Geofrey" class="w-full h-full object-cover rounded-full">
                    </div>
                    <div class="test-info flex-1 min-w-0">
                        <h4 class="test-name text-gray-900 font-semibold text-base truncate">Kisamba Geofrey</h4>
                        <div class="test-role text-amber-600 text-sm font-medium">Factory Owner, Kawempe</div>
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
                        <a href="index.php" class=" text-sm  text-gray-400 cursor-pointer transition-colors duration-300 flex items-center gap-2">
                            
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="services.php" class="text-sm text-gray-400 cursor-pointer transition-colors duration-300 flex items-center gap-2">
                            
                            What We Offer
                        </a>
                    </li>
                    <li>
                        <a href="projects.php" class="text-sm text-gray-400 cursor-pointer transition-colors duration-300 flex items-center gap-2">
                            
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="services.php" class="text-sm text-gray-400 cursor-pointer transition-colors duration-300 flex items-center gap-2">
                           
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
                        <a href="services.php" class=" text-sm text-gray-400 cursor-pointer transition-colors duration-300 flex items-center gap-2">
                            
                            WLAN/LAN Installation
                        </a>
                    </li>
                    <li>
                        <a href="services.php" class=" text-sm text-gray-400 cursor-pointer transition-colors duration-300 flex items-center gap-2">
                            
                            Air Conditioning
                        </a>
                    </li>
                    <li>
                        <a href="services.php" class="text-sm text-gray-400 cursor-pointer transition-colors duration-300 flex items-center gap-2">
                          
                            Automatic Gates
                        </a>
                    </li>
                    <li>
                        <a href="services.php" class="text-sm text-gray-400 cursor-pointer transition-colors duration-300 flex items-center gap-2">
                            
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
                            <a href="tel:+256760271098" class="text-white  transition-colors duration-300 block text-sm">
                                +256 760 271 098
                            </a>
                            <a href="tel:+256754130885" class="text-white  transition-colors duration-300 block text-sm">
                                +256 754 130 885
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <a href="mailto:fermielectrictech@gmail.com" class="text-white transition-colors duration-300 text-sm break-all">
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
    // ===== TYPING EFFECT =====
const words = ["Security Services", "Electrical Services", "IT Solutions"];
let i = 0;
let timer;
let isDeleting = false;
let text = "";
const typingEl = document.getElementById("typingg");

function type() {
    const currentWord = words[i % words.length];

    if (isDeleting) {
        text = currentWord.substring(0, text.length - 1);
    } else {
        text = currentWord.substring(0, text.length + 1);
    }

    typingEl.textContent = text;

    let typingSpeed = isDeleting ? 50 : 100;

    if (!isDeleting && text === currentWord) {
        typingSpeed = 1500;
        isDeleting = true;
    } else if (isDeleting && text === "") {
        isDeleting = false;
        i++;
        typingSpeed = 500;
    }

    timer = setTimeout(type, typingSpeed);
}

document.addEventListener("DOMContentLoaded", function () {
    type();
});


// ===== BACKGROUND SLIDER (ROBUST) =====
document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.slidee');
    let currentSlide = 0;
    let slideInterval;
    
    // If no slides, exit
    if (slides.length === 0) return;

    // Function to show a specific slide
    function showSlide(index) {
        // Remove active class from all slides
        slides.forEach(slide => {
            slide.classList.remove('active');
            slide.style.opacity = '0';
        });
        
        // Normalize index
        if (index >= slides.length) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = slides.length - 1;
        } else {
            currentSlide = index;
        }
        
        // Add active class to current slide
        slides[currentSlide].classList.add('active');
        slides[currentSlide].style.opacity = '1';
    }

    // Next slide function
    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    // Start the slideshow
    function startSlideshow() {
        if (slideInterval) clearInterval(slideInterval);
        if (slides.length > 1) {
            slideInterval = setInterval(nextSlide, 4000);
        }
    }

    // Stop the slideshow
    function stopSlideshow() {
        if (slideInterval) {
            clearInterval(slideInterval);
            slideInterval = null;
        }
    }

    // Initialize first slide
    showSlide(0);
    
    // Start the slideshow
    setTimeout(startSlideshow, 1000);

    // Pause on hover (optional)
    const heroSection = document.querySelector('.hero');
    if (heroSection) {
        heroSection.addEventListener('mouseenter', stopSlideshow);
        heroSection.addEventListener('mouseleave', startSlideshow);
    }
});

</script>

</body>
</html>