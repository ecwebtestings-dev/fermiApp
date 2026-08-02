

<?php
session_start();

// --- Configuration ---
$timeout = 600; // 10 minutes in seconds
$login_page = "../public/login.html";
$logout_page = "/FERMI/auth/logout.php";

// --- Session Management ---
function checkSession($timeout, $login_page) {
    // Check if user is logged in and is a 'user'
    if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'user') {
        header("Location: " . $login_page);
        exit;
    }

    // Check timeout
    if (!isset($_SESSION['time']) || (time() - $_SESSION['time']) > $timeout) {
        session_unset();
        session_destroy();
        header("Location: " . $login_page);
        exit;
    } else {
        $_SESSION['time'] = time(); // Refresh session activity
    }
}

// Run checks
checkSession($timeout, $login_page);

// Helper to get user data safely
$userName = htmlspecialchars($_SESSION['username'] ?? 'User');
$userEmail = htmlspecialchars($_SESSION['email'] ?? 'No email provided');
$userInitial = strtoupper(substr($userName, 0, 1));
?>





<!DOCTYPE >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>Fermi - Professional Solutions</title>
    
    <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@400;500;600;700&display=swap" rel="stylesheet">
   
    <!-- Icons & Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="widget.css">
    <link rel="stylesheet" href="styles.css">

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
body{
    
}
.proj-desktop-only {
    display: block;
}

.proj-mobile-only {
    display: none;
}

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
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
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

.proj-hero-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 2;
    width: 100%;
}

.proj-hero-text {
    max-width: 700px;
    color: white;
}

.proj-hero-tag {
    display: inline-block;
    background: rgba(255, 102, 0, 0.2);
    color: var(--primary-dark);
    padding: 0.6rem 1.5rem;
    border-radius: 30px;
    font-size: 0.9rem;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 1.5rem;
    text-transform: uppercase;
    border: 1px solid rgba(255, 102, 0, 0.3);
    backdrop-filter: blur(5px);
}

.proj-hero-title {
    font-size: 3.5rem;
    font-weight: 500;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.proj-hero-title::after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    background: var(--primary-gradient);
    margin-top: 15px;
}

.proj-hero-description {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 2.5rem;
    line-height: 1.8;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
}

.proj-hero-buttons {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.proj-btn {
    padding: 1rem 2.5rem;
    border-radius: 5px;
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
    background: var(--primary-light);
    color: white;
    box-shadow: 0 5px 15px rgba(255, 102, 0, 0.4);
}

.proj-btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(255, 102, 0, 0.5);
}

.proj-btn-outline {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(5px);
}

.proj-btn-outline:hover {
    background: var(--primary-light);
    border-color: var(--primary-light);
}





/* ===== GALLERY SECTION ===== */
.proj-gallery-section {
    padding: 50px 0;
    position: relative;
    overflow: hidden;
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
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 15px;
    display: inline-block;
    padding: 0.5rem 1.5rem;
    background: rgba(255, 102, 0, 0.1);
    border-radius: 30px;
    border: 1px solid rgba(255, 102, 0, 0.2);
}

.proj-gallery-title {
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
    padding: 0.8rem;
    background: white;
    border: 1px solid rgba(255, 102, 0, 0.2);
    border-radius: 10px;
    font-weight: 600;
    color: var(--header-color);
    cursor: pointer;
    transition: var(--transition);
    text-decoration: none;
    font-size: 1rem;
}

.proj-tab-link.active,
.proj-tab-link:hover {
    background: var(--primary-dark);
    color: white;
    border-color: transparent;
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
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 10px;
}

.proj-grid.active {
    display: grid;
}

.proj-grid-item {
    position: relative;
    overflow: hidden;
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

.proj-grid-item:hover img {
    transform: scale(1.1);
}

.proj-item-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, 
        transparent , 
       var(--primary-dark));
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

.proj-grid-item:hover .proj-item-overlay {
    opacity: 1;
}

.proj-item-overlay h4 {
    font-size: 1rem;
    margin-bottom: 10px;
    font-weight: 600;
}

.proj-item-overlay p {
    font-size: 0.95rem;
    line-height: 1.5;
    opacity: 0.9;
}

/* Mobile Slider View */
.proj-mobile-slider {
    position: relative;
    overflow: hidden;
    padding: 20px 10px;
}

.proj-mobile-track {
    display: flex;
    transition: transform 0.5s ease;
}

.proj-mobile-slide {
    flex: 0 0 100%;
    min-width: 100%;
    padding: 0 10px;
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 4/3;
}

.proj-mobile-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.proj-mobile-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
    color: white;
    padding: 30px 20px 20px;
}

.proj-mobile-caption h4 {
    font-size: 1.2rem;
    margin-bottom: 5px;
    color: var(--primary-dark);
}

.proj-mobile-caption p {
    font-size: 0.9rem;
    opacity: 0.9;
}

.proj-mobile-nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
}

.proj-mobile-prev,
.proj-mobile-next {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: white;
    border: 2px solid var(--primary-dark);
    color:var(--primary-dark);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: var(--transition);
    font-size: 1rem;
}

.proj-mobile-prev:hover,
.proj-mobile-next:hover {
    background: var(--primary-gradient);
    color: white;
    border-color: transparent;
}

.proj-mobile-dots {
    display: flex;
    gap: 8px;
}

.proj-mobile-dot {
    width: 10px;
    height: 10px;
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
    background: linear-gradient(135deg, #2c3e50 0%, #1a252f 100%);
    text-align: center;
    position: relative;
    overflow: hidden;
}

.proj-cta-section::before {
    content: '';
    position: absolute;
    top: -100px;
    right: -100px;
    width: 400px;
    height: 400px;
    background: var(--primary-gradient);
    opacity: 0.1;
    border-radius: 50%;
    z-index: 0;
}

.proj-cta-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 2;
}

.proj-cta-title {
    font-size: 2.8rem;
    font-weight: 700;
    color: white;
    margin-bottom: 1.5rem;
}

.proj-cta-description {
    color: rgba(255, 255, 255, 0.9);
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
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.95);
    z-index: 1000;
    align-items: center;
    justify-content: center;
}

.proj-lightbox.active {
    display: flex;
}

.proj-lightbox-close {
    position: absolute;
    top: 30px;
    right: 30px;
    color: white;
    font-size: 3rem;
    cursor: pointer;
    z-index: 1001;
    transition: var(--transition);
}

.proj-lightbox-close:hover {
    color: var(--primary-dark);
    transform: rotate(90deg);
}

.proj-lightbox-content {
    position: relative;
    max-width: 90%;
    max-height: 90%;
}

.proj-lightbox-img {
    max-width: 100%;
    max-height: 80vh;
    object-fit: contain;
    border-radius: 8px;
}

.proj-lightbox-nav {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}

.proj-lightbox-prev,
.proj-lightbox-next {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    border: 2px solid var(--primary-dark);
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: var(--transition);
    font-size: 1.5rem;
}

.proj-lightbox-prev:hover,
.proj-lightbox-next:hover {
    background: var(--primary-dark);
    border-color: var(--primary-dark);
}

/* ===== RESPONSIVE DESIGN ===== */
@media (max-width: 1024px) {
    .proj-hero-title {
        font-size: 3rem;
    }
    
    .proj-gallery-title {
        font-size: 2.4rem;
    }
    
    .proj-stat-number {
        font-size: 3rem;
    }
    
    .proj-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .proj-desktop-only {
        display: none;
    }
    
    .proj-mobile-only {
        display: block;
    }
    
    .proj-hero-section {
        padding-top: 100px;
        min-height: 90vh;
    }
    
    .proj-hero-container {
        padding: 0 1.5rem;
    }
    
    .proj-hero-text {
        text-align: left;
        max-width: 100%;
    }
    
    .proj-hero-title {
        font-size: 2.5rem;
    }
    
    .proj-hero-title::after {
        margin-left: 0;
    }
    
    .proj-hero-description {
        font-size: 1.1rem;
        text-align: left;
    }
    
    .proj-hero-buttons {
        justify-content: flex-start;
    }
    
    .proj-stats-section {
        padding: 4rem 1.5rem;
    }
    
    .proj-stats-container {
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }
    
    .proj-stat-number {
        font-size: 2.5rem;
    }
    
    .proj-gallery-title {
        font-size: 2rem;
    }
    
    .proj-cta-title {
        font-size: 2rem;
    }
    
    .proj-cta-description {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .proj-hero-section {
        padding-top: 90px;
        min-height: 85vh;
    }
    
    .proj-hero-container {
        padding: 0 1rem;
    }
    
    .proj-hero-title {
        font-size: 2rem;
    }
    
    .proj-hero-description {
        font-size: 1rem;
    }
    
    .proj-hero-buttons {
        flex-direction: column;
        width: 100%;
    }
    
    .proj-btn {
        width: 100%;
        justify-content: center;
    }
    
    .proj-stats-container {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .proj-stat-number {
        font-size: 2.2rem;
    }
    
    .proj-gallery-title {
        font-size: 1.8rem;
    }
    
    .proj-cta-title {
        font-size: 1.8rem;
    }
    
    .proj-cta-buttons {
        flex-direction: column;
        gap: 1rem;
    }
    
    .proj-lightbox-close {
        top: 15px;
        right: 15px;
        font-size: 2.5rem;
    }
    
    .proj-lightbox-prev,
    .proj-lightbox-next {
        width: 40px;
        height: 40px;
        font-size: 1.2rem;
    }
    
    .proj-mobile-caption h4 {
        font-size: 1.1rem;
    }
    
    .proj-mobile-caption p {
        font-size: 0.85rem;
    }
}

@media (max-width: 360px) {
    .proj-hero-title {
        font-size: 1.8rem;
    }
    
    .proj-gallery-title {
        font-size: 1.6rem;
    }
}
</style>
</head>
<body>
    <div id="loader"></div>

<!-- ================= NAVBAR ================= -->
<header class="navbar" id="navbar">
    <div class="container">

        <a href="index.php" class="logo">
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
            <a href="appointments/create.php" class="nav-link">Reserve Appointment</a>
        </nav>

        <div class="auth-buttons">
            <?php if(isset($_SESSION['username'])): ?>
                <!-- Logged In State -->
                <div class="user-avatar user-account-trigger" id="userAvatar">
                    <span class="user-initial">
                        <?php echo htmlspecialchars($userInitial); ?>
                    </span>
                </div>

            <?php else: ?>
                <!-- Guest State -->
                <a href="public/signup.php" class="btn-signup">
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
        <a href="appointments/create.php" class="mobile-nav-link">Reserve Appointment</a>
    </div>
    <div class="mobile-auth-section">
        <div class="mobile-auth-buttons">
            <?php if(isset($_SESSION['username'])): ?>
                <a href="<?php echo $logout_page; ?>" class="mobile-btn-login">
                    Log Out
                </a>
                
            <?php else: ?>
                <a href="public/signup.php" class="mobile-btn-signup">
                    Get Started
                </a>
            <?php endif; ?>

        </div>
    </div>
</div>


<!-- ================= USER PROFILE DROPDOWN ================= -->
<?php if(isset($_SESSION['username'])): ?>
<div class="user-profile" id="user-profile">
    <div class="profile-header">
            <?php echo strtoupper(substr($userName, 0, 1)); ?>
        <p class="welcome-text">
            Welcome, <?php echo $userName; ?>
        </p>
        <p class="profile-email">
            <?php echo $userEmail; ?>
        </p>

         <a href="<?php echo $logout_page; ?>" class="sign-out-btn">
            <i class="fas fa-sign-out-alt"></i>
            Sign Out
        </a>
    </div>

</div>
<?php endif; ?>

  
  <!-- Projects Hero Section -->
<section class="proj-hero-section" data-aos="fade-up">
    <!-- Background Image with Overlay -->
    <div class="proj-hero-bg">
        <img src="Images/Cyber.jpg" alt="Projects Background" class="proj-bg-image">
        <div class="proj-bg-overlay"></div>
    </div>
    
    <div class="proj-hero-container">
        <div class="proj-hero-text" data-aos="fade-right">
            
            <h2 class="proj-hero-title">Projects Completed</h2>
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



<!-- Projects Gallery Section -->
<section class="proj-gallery-section">
    <div class="proj-gallery-header" data-aos="fade-up">
        <h2 class="proj-gallery-title">Our Projects Gallery</h2>
    </div>

    <!-- Tabs - Hidden on mobile, visible on desktop -->
    <div class="proj-gallery-tabs proj-desktop-only" data-aos="fade-up" data-aos-delay="200">
        <a class="proj-tab-link active" data-filter="all">All Projects</a>
        <a class="proj-tab-link" data-filter="residences">Residential</a>
        <a class="proj-tab-link" data-filter="industrial">Industrial</a>
        <a class="proj-tab-link" data-filter="offices">Commercial</a>
    </div>

    <!-- Desktop Grid View-->
    <div class="proj-grid-container proj-desktop-only" id="projGrid">
        <!-- All Projects Grid -->
        <div class="proj-grid active" data-category="all">
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/caera.jpg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>CCTV Camera Installation</h4>
                    <p>Residential security system with 4K cameras</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/fence-with-barbed-wire.jpg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>Electric Fence Installation</h4>
                    <p>Perimeter security with alarm integration</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/newcctv.jpeg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>Ceiling Camera Setup</h4>
                    <p>Discreet surveillance for home security</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/Facialrecognitionaccesscontrol.png" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>Fingerprint Access Control</h4>
                    <p>Biometric entry system for homes</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/electric-fence.jpg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>Electric Perimeter Fence</h4>
                    <p>8-strand security fence with警报</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/NEWfirealarm.jpeg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>Fire Alarm System</h4>
                    <p>Smart smoke and heat detectors</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/newcctv2.jpeg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>PTZ Camera Installation</h4>
                    <p>360° surveillance with remote control</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/solar-panel.jpg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>Solar Panel Installation</h4>
                    <p>5kW grid-tie solar system</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="industrial">
                <img src="Images/WaterHeater.jpg" alt="Industrial">
                <div class="proj-item-overlay">
                    <h4>Industrial Water Heating</h4>
                    <p>500L commercial water heater installation</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="industrial">
                <img src="Images/escalator.jpg" alt="Industrial">
                <div class="proj-item-overlay">
                    <h4>Escalator Installation</h4>
                    <p>Shopping mall escalator system</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="industrial">
                <img src="Images/fire-alarm-switch.jpg" alt="Industrial">
                <div class="proj-item-overlay">
                    <h4>Industrial Fire Alarm</h4>
                    <p>Addressable fire alarm system</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="industrial">
                <img src="Images/cat2cables.jpeg" alt="Industrial">
                <div class="proj-item-overlay">
                    <h4>Network Switch Installation</h4>
                    <p>48-port managed network switch</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="industrial">
                <img src="Images/netRag.png" alt="Industrial">
                <div class="proj-item-overlay">
                    <h4>Server Rack Setup</h4>
                    <p>Enterprise network infrastructure</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="industrial">
                <img src="Images/catcables.jpeg" alt="Industrial">
                <div class="proj-item-overlay">
                    <h4>Structured Cabling</h4>
                    <p>CAT6 data cabling installation</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="industrial">
                <img src="Images/gps-system-smart-car.jpg" alt="Industrial">
                <div class="proj-item-overlay">
                    <h4>GPS Fleet Tracking</h4>
                    <p>Vehicle tracking system installation</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/technician-engineer-checks-maintenance-solar-cell-panels.jpg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>Solar Panel Maintenance</h4>
                    <p>Solar system inspection and cleaning</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="offices">
                <img src="Images/modem-setup-troubleshooting-online-guides.jpg" alt="Office">
                <div class="proj-item-overlay">
                    <h4>Network Router Setup</h4>
                    <p>Enterprise WiFi configuration</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="offices">
                <img src="Images/officelights.jpeg" alt="Office">
                <div class="proj-item-overlay">
                    <h4>Office Lighting Installation</h4>
                    <p>LED panel lighting with dimmers</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="offices">
                <img src="Images/empty-escalator-stair.jpg" alt="Office">
                <div class="proj-item-overlay">
                    <h4>Commercial Escalator</h4>
                    <p>Office building escalator system</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="offices">
                <img src="Images/air-conditioning-decoration-interior.jpg" alt="Office">
                <div class="proj-item-overlay">
                    <h4>HVAC Installation</h4>
                    <p>Central air conditioning system</p>
                </div>
            </div>
        </div>

        <!-- Residential Only Grid -->
        <div class="proj-grid" data-category="residences">
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/residental-pics.jpg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>CCTV Camera Installation</h4>
                    <p>Residential security system with 4K cameras</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/fence-with-barbed-wire.jpg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>Electric Fence Installation</h4>
                    <p>Perimeter security with alarm integration</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/cctv-security-camera-ceiling.jpg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>Ceiling Camera Setup</h4>
                    <p>Discreet surveillance for home security</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/Residental-ingerprint-access-control.jpg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>Fingerprint Access Control</h4>
                    <p>Biometric entry system for homes</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/electric-fence.jpg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>Electric Perimeter Fence</h4>
                    <p>8-strand security fence </p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/fire-sensor.jpg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>Fire Alarm System</h4>
                    <p>Smart smoke and heat detectors</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/security-camera-monitoring-travel-place.jpg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>PTZ Camera Installation</h4>
                    <p>360° surveillance with remote control</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="residences">
                <img src="Images/solar-panel.jpg" alt="Residence">
                <div class="proj-item-overlay">
                    <h4>Solar Panel Installation</h4>
                    <p>5kW grid-tie solar system</p>
                </div>
            </div>
        </div>

        <!-- Industrial Only Grid -->
        <div class="proj-grid" data-category="industrial">
            <div class="proj-grid-item" data-category="industrial">
                <img src="Images/WaterHeater.jpg" alt="Industrial">
                <div class="proj-item-overlay">
                    <h4>Industrial Water Heating</h4>
                    <p>500L commercial water heater installation</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="industrial">
                <img src="Images/escalator.jpg" alt="Industrial">
                <div class="proj-item-overlay">
                    <h4>Escalator Installation</h4>
                    <p>Shopping mall escalator system</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="industrial">
                <img src="Images/fire-alarm-switch.jpg" alt="Industrial">
                <div class="proj-item-overlay">
                    <h4>Industrial Fire Alarm</h4>
                    <p>Addressable fire alarm system</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="industrial">
                <img src="Images/network-switch-with-cables.jpg" alt="Industrial">
                <div class="proj-item-overlay">
                    <h4>Network Switch Installation</h4>
                    <p>48-port managed network switch</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="industrial">
                <img src="Images/network.jpg" alt="Industrial">
                <div class="proj-item-overlay">
                    <h4>Server Rack Setup</h4>
                    <p>Enterprise network infrastructure</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="industrial">
                <img src="Images/cables-red-light-background.jpg" alt="Industrial">
                <div class="proj-item-overlay">
                    <h4>Structured Cabling</h4>
                    <p>CAT6 data cabling installation</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="industrial">
                <img src="Images/gps-system-smart-car.jpg" alt="Industrial">
                <div class="proj-item-overlay">
                    <h4>GPS Fleet Tracking</h4>
                    <p>Vehicle tracking system installation</p>
                </div>
            </div>
        </div>

        <!-- Offices Only Grid -->
        <div class="proj-grid" data-category="offices">
            <div class="proj-grid-item" data-category="offices">
                <img src="Images/modem-setup-troubleshooting-online-guides.jpg" alt="Office">
                <div class="proj-item-overlay">
                    <h4>Network Router Setup</h4>
                    <p>Enterprise WiFi configuration</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="offices">
                <img src="Images/office-lights.png" alt="Office">
                <div class="proj-item-overlay">
                    <h4>Office Lighting Installation</h4>
                    <p>LED panel lighting with dimmers</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="offices">
                <img src="Images/empty-escalator-stair.jpg" alt="Office">
                <div class="proj-item-overlay">
                    <h4>Commercial Escalator</h4>
                    <p>Office building escalator system</p>
                </div>
            </div>
            <div class="proj-grid-item" data-category="offices">
                <img src="Images/air-conditioning-decoration-interior.jpg" alt="Office">
                <div class="proj-item-overlay">
                    <h4>HVAC Installation</h4>
                    <p>Central air conditioning system</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Slider View (hidden on desktop) -->
    <div class="proj-mobile-slider proj-mobile-only" id="projMobileSlider">
        <div class="proj-mobile-track">
            <!-- All images in a single track for mobile -->
            <div class="proj-mobile-slide">
                <img src="Images/cctvinter2.jpg" alt="Residence">
                <div class="proj-mobile-caption">
                    <h4>CCTV Camera Installation</h4>
                    <p>Residential security system with 4K cameras</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/fence-with-barbed-wire.jpg" alt="Residence">
                <div class="proj-mobile-caption">
                    <h4>Electric Fence Installation</h4>
                    <p>Perimeter security with alarm integration</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/newcctv2.jpeg" alt="Residence">
                <div class="proj-mobile-caption">
                    <h4>Ceiling Camera Setup</h4>
                    <p>Discreet surveillance for home security</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/Fingerprintaccesscontrol.png" alt="Residence">
                <div class="proj-mobile-caption">
                    <h4>Fingerprint Access Control</h4>
                    <p>Biometric entry system for homes</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/electric-fence.jpg" alt="Residence">
                <div class="proj-mobile-caption">
                    <h4>Electric Perimeter Fence</h4>
                    <p>8-strand security fence </p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/fire-sensor.jpg" alt="Residence">
                <div class="proj-mobile-caption">
                    <h4>Fire Alarm System</h4>
                    <p>Smart smoke and heat detectors</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/newcctv.jpeg" alt="Residence">
                <div class="proj-mobile-caption">
                    <h4>PTZ Camera Installation</h4>
                    <p>360° surveillance with remote control</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/solar-panel.jpg" alt="Residence">
                <div class="proj-mobile-caption">
                    <h4>Solar Panel Installation</h4>
                    <p>5kW grid-tie solar system</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/WaterHeater.jpg" alt="Industrial">
                <div class="proj-mobile-caption">
                    <h4>Industrial Water Heating</h4>
                    <p>500L commercial water heater installation</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/escalator.jpg" alt="Industrial">
                <div class="proj-mobile-caption">
                    <h4>Escalator Installation</h4>
                    <p>Shopping mall escalator system</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/fire-alarm-switch.jpg" alt="Industrial">
                <div class="proj-mobile-caption">
                    <h4>Industrial Fire Alarm</h4>
                    <p>Addressable fire alarm system</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/catcables.jpeg" alt="Industrial">
                <div class="proj-mobile-caption">
                    <h4>Network Switch Installation</h4>
                    <p>48-port managed network switch</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/netRag.png" alt="Industrial">
                <div class="proj-mobile-caption">
                    <h4>Server Rack Setup</h4>
                    <p>Enterprise network infrastructure</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/catcables.jpeg" alt="Industrial">
                <div class="proj-mobile-caption">
                    <h4>Structured Cabling</h4>
                    <p>CAT6 data cabling installation</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/gps-system-smart-car.jpg" alt="Industrial">
                <div class="proj-mobile-caption">
                    <h4>GPS Fleet Tracking</h4>
                    <p>Vehicle tracking system installation</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/technician-engineer-checks-maintenance-solar-cell-panels.jpg" alt="Residence">
                <div class="proj-mobile-caption">
                    <h4>Solar Panel Maintenance</h4>
                    <p>Solar system inspection and cleaning</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/modem-setup-troubleshooting-online-guides.jpg" alt="Office">
                <div class="proj-mobile-caption">
                    <h4>Network Router Setup</h4>
                    <p>Enterprise WiFi configuration</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/officelights.jpeg" alt="Office">
                <div class="proj-mobile-caption">
                    <h4>Office Lighting Installation</h4>
                    <p>LED panel lighting with dimmers</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/empty-escalator-stair.jpg" alt="Office">
                <div class="proj-mobile-caption">
                    <h4>Commercial Escalator</h4>
                    <p>Office building escalator system</p>
                </div>
            </div>
            <div class="proj-mobile-slide">
                <img src="Images/air-conditioning-decoration-interior.jpg" alt="Office">
                <div class="proj-mobile-caption">
                    <h4>HVAC Installation</h4>
                    <p>Central air conditioning system</p>
                </div>
            </div>
        </div>

        <!-- Mobile Slider Navigation -->
        <div class="proj-mobile-nav">
            <button class="proj-mobile-prev"><i class="fas fa-chevron-left"></i></button>
            <div class="proj-mobile-dots"></div>
            <button class="proj-mobile-next"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="proj-cta-section" data-aos="fade-up">
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

<!-- Lightbox Modal -->
<div class="proj-lightbox" id="projLightbox">
    <span class="proj-lightbox-close">&times;</span>
    <div class="proj-lightbox-content">
        <img class="proj-lightbox-img" id="projLightboxImg" src="" alt="">
        <div class="proj-lightbox-nav">
            <button class="proj-lightbox-prev"><i class="fas fa-chevron-left"></i></button>
            <button class="proj-lightbox-next"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</div>



   
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
                    <li><a href="appointments/create.php">Reserve Appointment</a></li>
                </ul>
            </div>
            
            <div class="footer-box" data-aos="fade-up" data-aos-delay="400">
                <h3 class="footer-title">Our Services</h3>
                <ul class="footer-links">
                    <li><a href="appointments/create.php"> WLAN/LAN Installation</a></li>
                    <li><a href="appointments/create.php"> Air Conditioning</a></li>
                    <li><a href="appointments/create.php"> Automatic Gates</a></li>
                    <li><a href="appointments/create.php"> Fire Alarms</a></li>
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

    
    <!--AI WIDGET-->
   <div id="ai-widget-container"></div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
    <script src="widget.js"></script>
   
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