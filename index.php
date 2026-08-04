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

<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->

<div class="bg-gray-900 min-h-screen">
  
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

  <!-- ================= HERO SECTION ================= -->
  <div class="hero-section relative isolate px-3 pt-7 lg:px-8 overflow-hidden min-h-[100vh] flex items-center">
    
    <!-- Top Background Glow - Now visible above the overlay -->
    <div aria-hidden="true" class="absolute inset-x-0 -top-40 transform-gpu overflow-hidden blur-3xl sm:-top-80" style="z-index: 2;">
      <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#EA580C] to-[#FB923C] opacity-40 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
    </div>

    <!-- Centered Single-Column Container -->
    <div class="mx-auto max-w-4xl py-16 sm:py-24 lg:py-32 relative" style="z-index: 3;">
      <div class="flex flex-col items-center text-center">
        
        <!-- Badge -->
        <div class="mb-6 inline-flex items-center gap-2 rounded-full bg-[#EA580C]/20 px-4 py-1.5 text-sm font-medium text-[#FB923C] ring-1 ring-inset ring-[#FB923C]/30 backdrop-blur-sm">
          <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2 4 5v6c0 5 3.4 8.7 8 10 4.6-1.3 8-5 8-10V5l-8-3Z"/></svg>
          Trusted Security &amp; IT Partner
        </div>

        <!-- Heading -->
        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl lg:text-7xl mb-6 text-balance drop-shadow-lg">
          Intelligent Solutions.<br>
          <span class="text-[#FB923C]">Safer Connections.</span>
        </h1>
        
        <!-- Lead Paragraph -->
        <p class="text-lg text-gray-200 mb-10 max-w-2xl text-pretty sm:text-xl/8 drop-shadow-lg">
          End-to-end security systems, smart home automation, and enterprise networking for homes and businesses that demand reliability.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-4 mb-10">
          <a href="tel:+256760271098" class="inline-flex items-center gap-2 rounded-lg bg-[#EA580C] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#EA580C]/30 hover:bg-[#C2410C] hover:shadow-[#EA580C]/50 transition-all duration-300 transform hover:scale-105">
            Consult Us
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M9 6l6 6-6 6"/></svg>
          </a>
          <a href="services.php" class="inline-flex items-center gap-2 rounded-lg border border-white/30 px-5 py-3 text-sm font-semibold text-white hover:bg-white/10 transition-all duration-300 backdrop-blur-sm">
            Explore Services
          </a>
        </div>

        <!-- Trust Indicators
        <div class="flex flex-wrap justify-center gap-6 md:gap-10 text-sm text-gray-300">
          <div class="flex items-center gap-2">
            <svg class="h-5 w-5 text-[#FB923C]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <span>4.9/5 Rating</span>
          </div>
          <div class="flex items-center gap-2">
            <svg class="h-5 w-5 text-[#FB923C]" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
            <span>100+ Clients</span>
          </div>
          <div class="flex items-center gap-2">
            <svg class="h-5 w-5 text-[#FB923C]" fill="currentColor" viewBox="0 0 20 20"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/></svg>
            <span>24/7 Support</span>
          </div>
        </div> -->

      </div>
    </div>

    <!-- Bottom Background Glow -->
    <div aria-hidden="true" class="absolute inset-x-0 bottom-0 transform-gpu overflow-hidden blur-3xl" style="z-index: 2;">
      <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#EA580C] to-[#FB923C] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"></div>
    </div>
    
  </div>
</div>




   <!-- ================= ABOUT SECTION ================= -->
<section class="py-16 md:py-20 lg:py-24 relative overflow-hidden bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 lg:gap-16 items-center relative z-10">
        
        <!-- Content -->
        <div class="lg:order-first order-last" data-aos="fade-left">
            <span class="inline-flex items-center gap-2 bg-orange-50 text-orange-600 px-4 py-2 rounded-full font-semibold text-sm tracking-wider mb-6 border border-orange-200">
                <i class="fas fa-bolt animate-pulse"></i> Lets Introduce
            </span>
            
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold text-gray-900 mb-6 leading-tight text-left">
                We Offer Outstanding Residential, Commercial & Industrial Security Services
            </h2>
            
            <p class="text-gray-600 leading-relaxed mb-8 text-left">
                All of our services are backed by our 100% satisfaction guarantee. Our technicians can install anything
                from new security cameras, fire alarms, smart doors for your outdoors to a whole home network, security that will keep your
                appliances & property safe and working.
            </p>

            <div class="about-cta">
                <a href="tel:+256754130885" class="inline-flex items-center gap-3 bg-orange-500 text-white px-8 py-4 rounded-md font-semibold hover:shadow-lg hover:shadow-orange-500/40 transition-shadow duration-300">
                    Schedule An Appointment <i class="fas fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>

        <!-- Image -->
        <div class="relative">
            <div class="relative overflow-hidden shadow-2xl rounded-tl-[40px] [clip-path:polygon(0_0,100%_0,100%_80%,80%_100%,0_100%)]">
                <img 
                    src="Images/WINTERR.jpg" 
                    alt="Professional Electrical Services" 
                    class="w-full h-[300px] sm:h-[400px] lg:h-[500px] object-cover object-center block hover:scale-105 transition-transform duration-700"
                >
                
                <!-- Experience Badge -->
                <div class="absolute bottom-4 sm:bottom-6 right-2 sm:right-4 lg:bottom-8 lg:right-6 bg-gradient-to-br from-orange-500 to-orange-600 text-white px-6 py-4 sm:px-8 sm:py-6 rounded-2xl shadow-xl flex flex-col items-center justify-center sm:hidden lg:flex">
                    <span class="text-2xl sm:text-3xl lg:text-4xl font-medium leading-none">3+</span>
                    <span class="text-xs sm:text-sm font-medium opacity-90 text-center">Years of<br>Excellence</span>
                </div>
            </div>
        </div>
    </div>
</section>

    



<!-- ================= SERVICES SECTION ================= -->
<section class="py-24 md:py-28 bg-[#FAF7F2] relative overflow-hidden font-['Quicksand',sans-serif]" 
         style="background: radial-gradient(ellipse at top right, rgba(245, 158, 11, 0.06), transparent 60%), #FAF7F2;">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="mb-12 md:mb-14">
            <span class="inline-block text-xs font-bold tracking-[2.5px] uppercase text-amber-700 mb-3">
                24/7 Service – Safe & Efficient
            </span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight text-[#3E2723] mb-3">
                We are a Full Service Electrical Contractor
            </h2>
            <p class="text-base md:text-lg text-gray-600 max-w-lg leading-relaxed">
                Comprehensive security, electrical, and IT solutions with round-the-clock support and certified expertise
            </p>
        </div>

        <!-- Slider Container -->
        <div class="relative" data-aos-delay="400">
            
            <!-- Slider Track -->
            <div id="servicesSlider" 
                 class="flex gap-4 md:gap-6 overflow-x-auto scroll-smooth scrollbar-hide px-2.5 pb-6 pt-3.5 snap-x snap-mandatory"
                 style="scrollbar-width: none; -ms-overflow-style: none;">
                
                <!-- Card 1 - Automatic Gates -->
                <div class="service-card flex-[0_0_85%] sm:flex-[0_0_50%] lg:flex-[0_0_calc(33.333%-16px)] min-w-[280px] sm:min-w-[300px] rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(93,64,55,0.12)] transition-all duration-500 ease-[cubic-bezier(.4,0,.2,1)] relative min-h-[380px] md:min-h-[400px] flex flex-col justify-end snap-start  hover:shadow-[0_24px_48px_rgba(93,64,55,0.22)]"
                     style="background-image: url('Images/AutomaticGates.png'); background-size: cover; background-position: center;">
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent from-30% via-[rgba(46,30,20,0.3)] to-[rgba(46,30,20,0.85)] transition-all duration-500 hover:from-[rgba(46,30,20,0.15)] hover:to-[rgba(46,30,20,0.92)]"></div>
                    
                    <!-- Content -->
                    <div class="relative z-10 p-6 md:p-8 text-white">
                        <div class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-amber-500/25 to-amber-600/15 rounded-xl flex items-center justify-center mb-5 transition-all duration-300 backdrop-blur-sm border border-white/35 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:scale-105 hover:-rotate-3 hover:border-transparent">
                            <i class="fas fa-shield-alt text-2xl md:text-3xl text-white"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-3 leading-tight drop-shadow-[0_2px_6px_rgba(0,0,0,0.25)]">
                            Automatic Gates & Electric Fences
                        </h3>
                        <p class="text-sm md:text-base text-white/90 leading-relaxed mb-5">
                            Secure your premises with automatic gates and reliable electric fences.
                        </p>
                        <a href="services.php" class="inline-flex items-center gap-2 text-white font-semibold text-sm px-5 py-2.5 bg-white/20 rounded-full backdrop-blur-sm border border-white/35 hover:gap-4 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:border-transparent hover:shadow-[0_8px_20px_rgba(245,158,11,0.35)] transition-all duration-300">
                            More info <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 2 - Surveillance -->
                <div class="service-card flex-[0_0_85%] sm:flex-[0_0_50%] lg:flex-[0_0_calc(33.333%-16px)] min-w-[280px] sm:min-w-[300px] rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(93,64,55,0.12)] transition-all duration-500 ease-[cubic-bezier(.4,0,.2,1)] relative min-h-[380px] md:min-h-[400px] flex flex-col justify-end snap-start hover:-translate-y-2.5 hover:shadow-[0_24px_48px_rgba(93,64,55,0.22)]"
                     style="background-image: url('Images/SmartCameraAndLight.jpeg'); background-size: cover; background-position: center;">
                    
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent from-30% via-[rgba(46,30,20,0.3)] to-[rgba(46,30,20,0.85)] transition-all duration-500 hover:from-[rgba(46,30,20,0.15)] hover:to-[rgba(46,30,20,0.92)]"></div>
                    
                    <div class="relative z-10 p-6 md:p-8 text-white">
                        <div class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-amber-500/25 to-amber-600/15 rounded-xl flex items-center justify-center mb-5 transition-all duration-300 backdrop-blur-sm border border-white/35 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:scale-105 hover:-rotate-3 hover:border-transparent">
                            <i class="fas fa-video text-2xl md:text-3xl text-white"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-3 leading-tight drop-shadow-[0_2px_6px_rgba(0,0,0,0.25)]">
                            Surveillance & Detection
                        </h3>
                        <p class="text-sm md:text-base text-white/90 leading-relaxed mb-5">
                            CCTV cameras, motion sensors, and metal detectors for complete coverage.
                        </p>
                        <a href="services.php" class="inline-flex items-center gap-2 text-white font-semibold text-sm px-5 py-2.5 bg-white/20 rounded-full backdrop-blur-sm border border-white/35 hover:gap-4 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:border-transparent hover:shadow-[0_8px_20px_rgba(245,158,11,0.35)] transition-all duration-300">
                            More info <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 3 - Access Control -->
                <div class="service-card flex-[0_0_85%] sm:flex-[0_0_50%] lg:flex-[0_0_calc(33.333%-16px)] min-w-[280px] sm:min-w-[300px] rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(93,64,55,0.12)] transition-all duration-500 ease-[cubic-bezier(.4,0,.2,1)] relative min-h-[380px] md:min-h-[400px] flex flex-col justify-end snap-start hover:-translate-y-2.5 hover:shadow-[0_24px_48px_rgba(93,64,55,0.22)]"
                     style="background-image: url('Images/ControlPanel1.jpeg'); background-size: cover; background-position: center;">
                    
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent from-30% via-[rgba(46,30,20,0.3)] to-[rgba(46,30,20,0.85)] transition-all duration-500 hover:from-[rgba(46,30,20,0.15)] hover:to-[rgba(46,30,20,0.92)]"></div>
                    
                    <div class="relative z-10 p-6 md:p-8 text-white">
                        <div class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-amber-500/25 to-amber-600/15 rounded-xl flex items-center justify-center mb-5 transition-all duration-300 backdrop-blur-sm border border-white/35 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:scale-105 hover:-rotate-3 hover:border-transparent">
                            <i class="fas fa-door-open text-2xl md:text-3xl text-white"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-3 leading-tight drop-shadow-[0_2px_6px_rgba(0,0,0,0.25)]">
                            Access Control & Communication
                        </h3>
                        <p class="text-sm md:text-base text-white/90 leading-relaxed mb-5">
                            Intercoms, smart alarms, and modern access control systems.
                        </p>
                        <a href="services.php" class="inline-flex items-center gap-2 text-white font-semibold text-sm px-5 py-2.5 bg-white/20 rounded-full backdrop-blur-sm border border-white/35 hover:gap-4 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:border-transparent hover:shadow-[0_8px_20px_rgba(245,158,11,0.35)] transition-all duration-300">
                            More info <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 4 - Fire Alarms -->
                <div class="service-card flex-[0_0_85%] sm:flex-[0_0_50%] lg:flex-[0_0_calc(33.333%-16px)] min-w-[280px] sm:min-w-[300px] rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(93,64,55,0.12)] transition-all duration-500 ease-[cubic-bezier(.4,0,.2,1)] relative min-h-[380px] md:min-h-[400px] flex flex-col justify-end snap-start hover:-translate-y-2.5 hover:shadow-[0_24px_48px_rgba(93,64,55,0.22)]"
                     style="background-image: url('Images/fire-alarm.jpg'); background-size: cover; background-position: center;">
                    
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent from-30% via-[rgba(46,30,20,0.3)] to-[rgba(46,30,20,0.85)] transition-all duration-500 hover:from-[rgba(46,30,20,0.15)] hover:to-[rgba(46,30,20,0.92)]"></div>
                    
                    <div class="relative z-10 p-6 md:p-8 text-white">
                        <div class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-amber-500/25 to-amber-600/15 rounded-xl flex items-center justify-center mb-5 transition-all duration-300 backdrop-blur-sm border border-white/35 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:scale-105 hover:-rotate-3 hover:border-transparent">
                            <i class="fas fa-fire text-2xl md:text-3xl text-white"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-3 leading-tight drop-shadow-[0_2px_6px_rgba(0,0,0,0.25)]">
                            Fire Alarms & Motion Detectors
                        </h3>
                        <p class="text-sm md:text-base text-white/90 leading-relaxed mb-5">
                            Protect lives and property with fire alarms and reliable motion detection.
                        </p>
                        <a href="services.php" class="inline-flex items-center gap-2 text-white font-semibold text-sm px-5 py-2.5 bg-white/20 rounded-full backdrop-blur-sm border border-white/35 hover:gap-4 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:border-transparent hover:shadow-[0_8px_20px_rgba(245,158,11,0.35)] transition-all duration-300">
                            More info <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 5 - POS & Tracking -->
                <div class="service-card flex-[0_0_85%] sm:flex-[0_0_50%] lg:flex-[0_0_calc(33.333%-16px)] min-w-[280px] sm:min-w-[300px] rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(93,64,55,0.12)] transition-all duration-500 ease-[cubic-bezier(.4,0,.2,1)] relative min-h-[380px] md:min-h-[400px] flex flex-col justify-end snap-start hover:-translate-y-2.5 hover:shadow-[0_24px_48px_rgba(93,64,55,0.22)]"
                     style="background-image: url('Images/poss.jpg'); background-size: cover; background-position: center;">
                    
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent from-30% via-[rgba(46,30,20,0.3)] to-[rgba(46,30,20,0.85)] transition-all duration-500 hover:from-[rgba(46,30,20,0.15)] hover:to-[rgba(46,30,20,0.92)]"></div>
                    
                    <div class="relative z-10 p-6 md:p-8 text-white">
                        <div class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-amber-500/25 to-amber-600/15 rounded-xl flex items-center justify-center mb-5 transition-all duration-300 backdrop-blur-sm border border-white/35 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:scale-105 hover:-rotate-3 hover:border-transparent">
                            <i class="fas fa-cash-register text-2xl md:text-3xl text-white"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-3 leading-tight drop-shadow-[0_2px_6px_rgba(0,0,0,0.25)]">
                            POS & Tracking Solutions
                        </h3>
                        <p class="text-sm md:text-base text-white/90 leading-relaxed mb-5">
                            Point of Sale systems, GPS trackers, and fuel monitoring systems.
                        </p>
                        <a href="services.php" class="inline-flex items-center gap-2 text-white font-semibold text-sm px-5 py-2.5 bg-white/20 rounded-full backdrop-blur-sm border border-white/35 hover:gap-4 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:border-transparent hover:shadow-[0_8px_20px_rgba(245,158,11,0.35)] transition-all duration-300">
                            More info <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 6 - WAN/LAN -->
                <div class="service-card flex-[0_0_85%] sm:flex-[0_0_50%] lg:flex-[0_0_calc(33.333%-16px)] min-w-[280px] sm:min-w-[300px] rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(93,64,55,0.12)] transition-all duration-500 ease-[cubic-bezier(.4,0,.2,1)] relative min-h-[380px] md:min-h-[400px] flex flex-col justify-end snap-start hover:-translate-y-2.5 hover:shadow-[0_24px_48px_rgba(93,64,55,0.22)]"
                     style="background-image: url('Images/switch.png'); background-size: cover; background-position: center;">
                    
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent from-30% via-[rgba(46,30,20,0.3)] to-[rgba(46,30,20,0.85)] transition-all duration-500 hover:from-[rgba(46,30,20,0.15)] hover:to-[rgba(46,30,20,0.92)]"></div>
                    
                    <div class="relative z-10 p-6 md:p-8 text-white">
                        <div class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-amber-500/25 to-amber-600/15 rounded-xl flex items-center justify-center mb-5 transition-all duration-300 backdrop-blur-sm border border-white/35 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:scale-105 hover:-rotate-3 hover:border-transparent">
                            <i class="fas fa-network-wired text-2xl md:text-3xl text-white"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-3 leading-tight drop-shadow-[0_2px_6px_rgba(0,0,0,0.25)]">
                            WAN/LAN & Installations
                        </h3>
                        <p class="text-sm md:text-base text-white/90 leading-relaxed mb-5">
                            Office/shop wiring, elevators, and escalator installations.
                        </p>
                        <a href="services.php" class="inline-flex items-center gap-2 text-white font-semibold text-sm px-5 py-2.5 bg-white/20 rounded-full backdrop-blur-sm border border-white/35 hover:gap-4 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:border-transparent hover:shadow-[0_8px_20px_rgba(245,158,11,0.35)] transition-all duration-300">
                            More info <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 7 - Air Conditioning -->
                <div class="service-card flex-[0_0_85%] sm:flex-[0_0_50%] lg:flex-[0_0_calc(33.333%-16px)] min-w-[280px] sm:min-w-[300px] rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(93,64,55,0.12)] transition-all duration-500 ease-[cubic-bezier(.4,0,.2,1)] relative min-h-[380px] md:min-h-[400px] flex flex-col justify-end snap-start hover:-translate-y-2.5 hover:shadow-[0_24px_48px_rgba(93,64,55,0.22)]"
                     style="background-image: url('Images/air-conditioning-decoration-interior.jpg'); background-size: cover; background-position: center;">
                    
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent from-30% via-[rgba(46,30,20,0.3)] to-[rgba(46,30,20,0.85)] transition-all duration-500 hover:from-[rgba(46,30,20,0.15)] hover:to-[rgba(46,30,20,0.92)]"></div>
                    
                    <div class="relative z-10 p-6 md:p-8 text-white">
                        <div class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-amber-500/25 to-amber-600/15 rounded-xl flex items-center justify-center mb-5 transition-all duration-300 backdrop-blur-sm border border-white/35 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:scale-105 hover:-rotate-3 hover:border-transparent">
                            <i class="fas fa-snowflake text-2xl md:text-3xl text-white"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-3 leading-tight drop-shadow-[0_2px_6px_rgba(0,0,0,0.25)]">
                            Air Conditioning Systems
                        </h3>
                        <p class="text-sm md:text-base text-white/90 leading-relaxed mb-5">
                            Professional installation of energy-efficient air conditioning.
                        </p>
                        <a href="services.php" class="inline-flex items-center gap-2 text-white font-semibold text-sm px-5 py-2.5 bg-white/20 rounded-full backdrop-blur-sm border border-white/35 hover:gap-4 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:border-transparent hover:shadow-[0_8px_20px_rgba(245,158,11,0.35)] transition-all duration-300">
                            More info <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 8 - Refrigeration -->
                <div class="service-card flex-[0_0_85%] sm:flex-[0_0_50%] lg:flex-[0_0_calc(33.333%-16px)] min-w-[280px] sm:min-w-[300px] rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(93,64,55,0.12)] transition-all duration-500 ease-[cubic-bezier(.4,0,.2,1)] relative min-h-[380px] md:min-h-[400px] flex flex-col justify-end snap-start hover:-translate-y-2.5 hover:shadow-[0_24px_48px_rgba(93,64,55,0.22)]"
                     style="background-image: url('Images/WaterHeater.jpg'); background-size: cover; background-position: center;">
                    
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent from-30% via-[rgba(46,30,20,0.3)] to-[rgba(46,30,20,0.85)] transition-all duration-500 hover:from-[rgba(46,30,20,0.15)] hover:to-[rgba(46,30,20,0.92)]"></div>
                    
                    <div class="relative z-10 p-6 md:p-8 text-white">
                        <div class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-amber-500/25 to-amber-600/15 rounded-xl flex items-center justify-center mb-5 transition-all duration-300 backdrop-blur-sm border border-white/35 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:scale-105 hover:-rotate-3 hover:border-transparent">
                            <i class="fas fa-thermometer-half text-2xl md:text-3xl text-white"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-3 leading-tight drop-shadow-[0_2px_6px_rgba(0,0,0,0.25)]">
                            Refrigeration & Water Heaters
                        </h3>
                        <p class="text-sm md:text-base text-white/90 leading-relaxed mb-5">
                            Reliable refrigeration systems and modern water heating solutions.
                        </p>
                        <a href="services.php" class="inline-flex items-center gap-2 text-white font-semibold text-sm px-5 py-2.5 bg-white/20 rounded-full backdrop-blur-sm border border-white/35 hover:gap-4 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:border-transparent hover:shadow-[0_8px_20px_rgba(245,158,11,0.35)] transition-all duration-300">
                            More info <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 9 - Panel Design -->
                <div class="service-card flex-[0_0_85%] sm:flex-[0_0_50%] lg:flex-[0_0_calc(33.333%-16px)] min-w-[280px] sm:min-w-[300px] rounded-2xl overflow-hidden shadow-[0_10px_30px_rgba(93,64,55,0.12)] transition-all duration-500 ease-[cubic-bezier(.4,0,.2,1)] relative min-h-[380px] md:min-h-[400px] flex flex-col justify-end snap-start hover:-translate-y-2.5 hover:shadow-[0_24px_48px_rgba(93,64,55,0.22)]"
                     style="background-image: url('Images/solar-panel.jpg'); background-size: cover; background-position: center;">
                    
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent from-30% via-[rgba(46,30,20,0.3)] to-[rgba(46,30,20,0.85)] transition-all duration-500 hover:from-[rgba(46,30,20,0.15)] hover:to-[rgba(46,30,20,0.92)]"></div>
                    
                    <div class="relative z-10 p-6 md:p-8 text-white">
                        <div class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-amber-500/25 to-amber-600/15 rounded-xl flex items-center justify-center mb-5 transition-all duration-300 backdrop-blur-sm border border-white/35 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:scale-105 hover:-rotate-3 hover:border-transparent">
                            <i class="fas fa-solar-panel text-2xl md:text-3xl text-white"></i>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-3 leading-tight drop-shadow-[0_2px_6px_rgba(0,0,0,0.25)]">
                            Panel Design & Automation
                        </h3>
                        <p class="text-sm md:text-base text-white/90 leading-relaxed mb-5">
                            Custom design and automation of electrical panels tailored to you.
                        </p>
                        <a href="services.php" class="inline-flex items-center gap-2 text-white font-semibold text-sm px-5 py-2.5 bg-white/20 rounded-full backdrop-blur-sm border border-white/35 hover:gap-4 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:border-transparent hover:shadow-[0_8px_20px_rgba(245,158,11,0.35)] transition-all duration-300">
                            More info <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Slider Navigation -->
            <div class="hidden md:flex items-center justify-center gap-5 mt-8">
                <button id="sliderPrev" aria-label="Previous services" 
                        class="w-12 h-12 rounded-full bg-white border-2 border-amber-500 text-amber-600 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:text-white hover:border-transparent hover:scale-110 hover:shadow-md transition-all duration-300 flex items-center justify-center text-lg">
                    <i class="fas fa-chevron-left"></i>
                </button>
                
                <div id="sliderDots" class="flex gap-2.5">
                    <button class="w-2.5 h-2.5 rounded-full bg-[#E5DDD5] transition-all duration-300 active:bg-amber-500 active:scale-150" data-index="0"></button>
                    <button class="w-2.5 h-2.5 rounded-full bg-[#E5DDD5] transition-all duration-300 hover:bg-amber-300" data-index="1"></button>
                    <button class="w-2.5 h-2.5 rounded-full bg-[#E5DDD5] transition-all duration-300 hover:bg-amber-300" data-index="2"></button>
                </div>
                
                <button id="sliderNext" aria-label="Next services" 
                        class="w-12 h-12 rounded-full bg-white border-2 border-amber-500 text-amber-600 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:text-white hover:border-transparent hover:scale-110 hover:shadow-md transition-all duration-300 flex items-center justify-center text-lg">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            
            <!-- Mobile Navigation (always visible on small screens) -->
            <div class="flex md:hidden items-center justify-center gap-5 mt-6">
                <button id="sliderPrevMobile" aria-label="Previous services" 
                        class="w-10 h-10 rounded-full bg-white border-2 border-amber-500 text-amber-600 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:text-white hover:border-transparent transition-all duration-300 flex items-center justify-center text-sm">
                    <i class="fas fa-chevron-left"></i>
                </button>
                
                <div id="sliderDotsMobile" class="flex gap-2">
                    <button class="w-2 h-2 rounded-full bg-[#E5DDD5] transition-all duration-300 active:bg-amber-500" data-index="0"></button>
                    <button class="w-2 h-2 rounded-full bg-[#E5DDD5] transition-all duration-300" data-index="1"></button>
                    <button class="w-2 h-2 rounded-full bg-[#E5DDD5] transition-all duration-300" data-index="2"></button>
                </div>
                
                <button id="sliderNextMobile" aria-label="Next services" 
                        class="w-10 h-10 rounded-full bg-white border-2 border-amber-500 text-amber-600 hover:bg-gradient-to-br hover:from-amber-500 hover:to-amber-600 hover:text-white hover:border-transparent transition-all duration-300 flex items-center justify-center text-sm">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

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

    


<!-- ================= CONTACT INFO SECTION WITH AOS ================= -->
<section class="relative flex items-center justify-center md:justify-start min-h-screen py-24 px-4 sm:px-8 lg:px-16 xl:px-24 overflow-hidden bg-cover bg-center"
         style="background: linear-gradient(rgba(8,18,35,0.75), rgba(15,15,15,0.65));"
         data-aos="fade-up" data-aos-duration="800">
    
    <!-- Decorative Glow Effects -->
    <div class="absolute w-[500px] h-[500px] rounded-full bg-orange-500/20 blur-[120px] -top-36 -right-36 pointer-events-none animate-pulse-slow"></div>
    <div class="absolute w-[350px] h-[350px] rounded-full bg-blue-400/15 blur-[90px] -bottom-24 -left-24 pointer-events-none animate-pulse-slower"></div>
    
    <!-- Animated Background Zoom -->
    <div class="absolute inset-0 -z-10 bg-cover bg-center animate-bg-zoom"
         style="background: linear-gradient(rgba(8,18,35,0.75), rgba(15,15,15,0.65));"></div>

    <!-- Content Card -->
    <div class="relative z-10 w-full max-w-2xl lg:max-w-[620px] p-8 sm:p-12 md:p-16 bg-white/10 backdrop-blur-xl border border-white/20 rounded-[28px] rounded-br-[80px] shadow-2xl transition-all duration-500 hover:-translate-y-2.5 hover:shadow-[0_45px_80px_rgba(0,0,0,0.35)]"
         data-aos="zoom-in" data-aos-delay="200" data-aos-duration="600">
        
        <!-- Gradient Border -->
        <div class="absolute inset-0 rounded-[28px] rounded-br-[80px] p-[2px] bg-gradient-to-br from-orange-500 via-transparent to-orange-600 -z-10 [mask:linear-gradient(#fff_0_0)_content-box,linear-gradient(#fff_0_0)] [mask-composite:exclude] pointer-events-none"></div>
        
        <!-- Heading -->
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6"
            data-aos="fade-right" data-aos-delay="300">
            Do you <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-orange-500">Need Help</span><br>
            With Networking & Security?
        </h2>
        
        <!-- Underline -->
        <div class="w-[90px] h-1 bg-gradient-to-r from-orange-600 to-orange-400 rounded-full mb-6"
             data-aos="fade-right" data-aos-delay="350"></div>
        
        <!-- Description -->
        <p class="text-base sm:text-lg text-white/80 leading-relaxed mb-8"
           data-aos="fade-right" data-aos-delay="400">
            Our Security, networking & electrical repair service options are proudly offered to clients. Give us a call today!
        </p>
        
        <!-- Buttons -->
        <div class="flex flex-col sm:flex-row flex-wrap gap-4 sm:gap-5"
             data-aos="fade-up" data-aos-delay="500">
            
            <!-- Call Button -->
            <a href="tel:+256760271098" 
               class="group relative overflow-hidden px-8 py-4 rounded-xl text-white font-semibold tracking-wide bg-gradient-to-br from-orange-600 to-orange-500 shadow-lg shadow-orange-500/30 hover:-translate-y-1.5 hover:shadow-orange-500/50 transition-all duration-300 flex items-center justify-center gap-3 hover:animate-pulse-orange">
                <!-- Shine Effect -->
                <span class="absolute inset-0 -translate-x-full group-hover:translate-x-[200%] w-3/4 bg-gradient-to-r from-transparent via-white/30 to-transparent transition-transform duration-700 skew-x-12"></span>
                <i class="fas fa-phone-alt text-lg"></i>
                Give Us a Call
            </a>
            
            <!-- Appointment Button -->
            <a href="tel:+256760271098" 
               class="group relative overflow-hidden px-8 py-4 rounded-xl text-white font-semibold tracking-wide bg-gray-800 border border-white/10 hover:bg-gray-900 hover:-translate-y-1.5 transition-all duration-300 flex items-center justify-center gap-3">
                <!-- Shine Effect -->
                <span class="absolute inset-0 -translate-x-full group-hover:translate-x-[200%] w-3/4 bg-gradient-to-r from-transparent via-white/20 to-transparent transition-transform duration-700 skew-x-12"></span>
                <i class="fas fa-bolt text-lg"></i>
                Make Appointment
            </a>
        </div>
        

        <!-- Emergency Badge -->
        <div class="absolute -top-3 -right-3 bg-red-500 text-white text-xs font-bold px-4 py-1.5 rounded-full shadow-lg shadow-red-500/30 animate-pulse-slow">
            <i class="fas fa-phone mr-1"></i> 24/7 Emergency
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
   

</body>
</html>