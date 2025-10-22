<?php

require_once __DIR__ . '/../config/config.php'; // Ensures BASE_URL is defined

// --- BEGIN: HTML Document Structure & Head ---
?>
<!doctype html>
<html lang="en">
<head>

<link href="<?php echo BASE_URL; ?>/public/assets/css/style.css" rel="stylesheet">
<link href="<?php echo BASE_URL; ?>/public/assets/css/styles.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SKNSCOE, Pandharpur</title>
    <link rel="icon" href="https://www.sknscoe.ac.in/img/spspm-icon.gif" type="image/gif" sizes="20x20">

    <link href="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/css/bootstrap.dropdown-override.css" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/css/Style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/css/style1.css" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/css/n_style.css" rel="stylesheet" type="text/css">

    <link href="https://www.sknscoe.ac.in/bower_components/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
 
    <script src="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/js/bootstrap.min.js"></script>
 
     <style>
        /* Global resets and header offset */
        html, body { margin: 0; }
        /* Define a CSS variable for the desktop header height */
        :root {
            --skn-desktop-header-height: 140px; /* Base estimate for desktop */
            --skn-mobile-header-height: 10vh; /* New variable for mobile 10% screen height */
        }
        /* Default body padding (Desktop) */
        body { padding-top: var(--skn-header-height, var(--skn-desktop-header-height)); } 
        /* All CSS rules are descendants of the unique ID selector #sknscoe-unique-header */

        /* Fix: make the actual header wrapper fixed (ID or class present in markup) */
        .sknscoe-header-wrapper,
        #sknscoe-unique-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            background: #fff;
        }

        /* Top Info Bar */
        #sknscoe-unique-header .top-bar {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: #fff;
            padding: 8px 0;
            font-size: 13px;
            border-bottom: 2px solid #cc0033;
        }
        
        /* ... (Keep all existing Top Bar styles as they were) ... */
        
        #sknscoe-unique-header .top-bar-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        #sknscoe-unique-header .top-bar-left {
            display: flex;
            gap: 25px;
            align-items: center;
            flex-wrap: wrap;
        }

        #sknscoe-unique-header .top-bar-item {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #d1d5db;
        }

        #sknscoe-unique-header .top-bar-item i {
            color: #cc0033;
            font-size: 14px;
        }

        #sknscoe-unique-header .top-bar-right {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        #sknscoe-unique-header .social-icon {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 12px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        #sknscoe-unique-header .social-icon:hover {
            background: #cc0033;
            transform: translateY(-2px);
        }
        
        /* Main Header */
        #sknscoe-unique-header .main-header {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        #sknscoe-unique-header .header-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        /* --- BEGIN: MOBILE SPECIFIC STYLES (Targeting max-width: 768px for smaller screens) --- */
        @media (max-width: 768px) {
            
            /* Apply the 10% screen height rule (or a max-height to ensure it's not too tall) */
            #sknscoe-unique-header .main-header {
                height: 10vh; /* 10% of viewport height as requested */
                max-height: 80px; 
                overflow: hidden; 
            }

            #sknscoe-unique-header .header-content {
                /* Centering the content horizontally */
                justify-content: center; /* *** CHANGE 1: Center alignment *** */
                align-items: center;
                height: 100%; 
                overflow: hidden; 
                padding: 5px 15px; 
                flex-direction: row; 
            }
            
            #sknscoe-unique-header .logo-section {
                 /* Ensure logo section itself remains a flexible container */
                align-items: center;
            }

            /* Showing college info and centering text inside it */
            #sknscoe-unique-header .college-info {
                display: flex; 
                flex-direction: column;
                gap: 0px; 
                text-align: center; /* *** CHANGE 2: Center text inside info box *** */
            }

            #sknscoe-unique-header .college-mandal {
                font-size: 8px; 
                font-weight: 400;
                margin-bottom: -2px;
                line-height: 1;
            }
            #sknscoe-unique-header .college-name {
                font-size: 14px; 
                line-height: 1.1;
            }
            #sknscoe-unique-header .college-tagline {
                font-size: 8px; 
                margin-top: 0px;
                line-height: 1;
            }
            
            /* Hiding secondary elements */
            #sknscoe-unique-header .accreditation-strip {
                display: none; 
            }
            #sknscoe-unique-header .right-logos {
                display: none; 
            }
            
            /* Logo adjustments */
            #sknscoe-unique-header .logo-container {
                gap: 8px; 
            }

            #sknscoe-unique-header .logo-img {
                height: 100%; 
                max-height: 40px; 
                width: auto;
            }
            
            /* Top bar adjustment */
            #sknscoe-unique-header .top-bar {
                padding: 4px 0; 
                font-size: 10px;
            }
        }
        /* --- END: MOBILE SPECIFIC STYLES --- */


        #sknscoe-unique-header .logo-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        #sknscoe-unique-header .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        /* Desktop logo size (re-setting if changed by mobile rules) */
        @media (min-width: 769px) {
            #sknscoe-unique-header .logo-img {
                height: 70px;
                width: auto;
                transition: transform 0.3s ease;
            }
        }
        
        #sknscoe-unique-header .logo-img:hover {
            transform: scale(1.05);
        }

        #sknscoe-unique-header .college-info {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        #sknscoe-unique-header .college-mandal {
            font-size: 11px;
            color: #666;
            font-weight: 500;
        }

        #sknscoe-unique-header .college-name {
            font-size: 22px;
            font-weight: 700;
            color: #1a1a2e;
            line-height: 1.2;
        }

        #sknscoe-unique-header .college-name span {
            color: #cc0033;
        }

        #sknscoe-unique-header .college-tagline {
            font-size: 10px;
            color: #888;
            margin-top: 2px;
        }

        #sknscoe-unique-header .accreditation-strip {
            display: flex;
            gap: 8px;
            margin-top: 5px;
        }

        #sknscoe-unique-header .acc-badge {
            background: linear-gradient(135deg, #cc0033, #ff4444);
            color: #fff;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 9px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        #sknscoe-unique-header .right-logos {
            display: flex;
            gap: 10px;
        }

        #sknscoe-unique-header .cert-logo {
            height: 60px;
            width: auto;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
            transition: transform 0.3s ease;
        }

        #sknscoe-unique-header .cert-logo:hover {
            transform: translateY(-3px);
        }

        /* Primary Access Bar (formerly .navigation) - CRITICAL FIX */
        #sknscoe-unique-header .top-access {
            background: linear-gradient(135deg, #cc0033 0%, #990028 100%);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: relative;
            z-index: 1000;
        }

        #sknscoe-unique-header .access-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        /* ... (Keep all other existing styles for navigation, dropdowns, and sidebar as they were) ... */
        
        #sknscoe-unique-header .site-primary-list {
            display: flex;
            list-style: none;
            gap: 2px;
            margin: 0;
            padding: 0;
        }

        /* List Item (formerly .nav-item) */
        #sknscoe-unique-header .list-item {
            position: relative;
        }

        /* Link (formerly .nav-link) */
        #sknscoe-unique-header .list-link {
            display: block;
            padding: 14px 16px;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            border-radius: 4px 4px 0 0;
            white-space: nowrap;
        }

        #sknscoe-unique-header .list-link:hover, #sknscoe-unique-header .list-item:hover > .list-link {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
        }

        #sknscoe-unique-header .list-link i {
            margin-left: 4px;
            font-size: 10px;
        }

        /* Dropdown (formerly .dropdown-menu) */
        #sknscoe-unique-header .module-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background: #fff;
            min-width: 280px;
            max-width: 320px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            border-radius: 0 0 8px 8px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-15px);
            transition: all 0.3s ease;
            z-index: 10000;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        /* Show dropdown on hover */
        #sknscoe-unique-header .list-item:hover > .module-dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        #sknscoe-unique-header .module-dropdown li {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        #sknscoe-unique-header .module-dropdown a {
            display: block;
            padding: 12px 20px;
            color: #333;
            text-decoration: none;
            font-size: 13px;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        #sknscoe-unique-header .module-dropdown a:hover {
            background: #f8f9fa;
            border-left-color: #cc0033;
            padding-left: 25px;
            color: #cc0033;
        }

        #sknscoe-unique-header .mobile-toggle {
            display: none;
            background: none;
            border: none;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
        }

        #sknscoe-unique-header .admin-link {
            background: rgba(255, 255, 255, 0.15);
            padding: 8px 16px;
            border-radius: 6px;
            color: #fff;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        #sknscoe-unique-header .admin-link:hover {
            background: #fff;
            color: #cc0033;
        }

        /* Responsive - all isolated */
        @media (max-width: 1200px) {
            #sknscoe-unique-header .list-link {
                padding: 12px 12px;
                font-size: 13px;
            }

            #sknscoe-unique-header .module-dropdown {
                min-width: 250px;
            }
        }

        @media (max-width: 992px) {

            #sknscoe-unique-header .top-bar {
                font-size: 11px;
            }

            #sknscoe-unique-header .site-primary-list {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: #cc0033;
                gap: 0;
                box-shadow: 0 8px 20px rgba(0,0,0,0.3);
                max-height: 80vh;
                overflow-y: auto;
            }

            #sknscoe-unique-header .site-primary-list.mobile-open {
                display: flex;
            }

            #sknscoe-unique-header .mobile-toggle {
                display: block;
            }

            #sknscoe-unique-header .list-item {
                width: 100%;
            }

            #sknscoe-unique-header .list-link {
                border-radius: 0;
                padding: 14px 20px;
            }

            #sknscoe-unique-header .module-dropdown {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                background: rgba(0,0,0,0.15);
                display: none;
                border-radius: 0;
            }

            #sknscoe-unique-header .list-item.mobile-dropdown-open .module-dropdown {
                display: block;
            }

            #sknscoe-unique-header .module-dropdown a {
                padding-left: 40px;
                font-size: 12px;
            }

            #sknscoe-unique-header .module-dropdown a:hover {
                padding-left: 45px;
            }
        }

        /* Modified: Applying the main mobile rules up to 768px as requested */
        @media (max-width: 768px) {
            
            /* The new rules for logo-area height and content hiding are here */
            #sknscoe-unique-header .main-header {
                height: 10vh; /* 10% of viewport height */
                max-height: 80px;
                overflow: hidden;
            }

            #sknscoe-unique-header .header-content {
                /* Overriding the previous 768px rule to be horizontal and minimal */
                flex-direction: row;
                justify-content: center; /* **CENTER ALIGNMENT** */
                align-items: center;
                padding: 5px 15px;
                height: 100%;
            }

            /* Showing college info and centering text inside it */
            #sknscoe-unique-header .college-info {
                display: flex; 
                flex-direction: column;
                gap: 0px; 
                text-align: center; /* **CENTER TEXT INSIDE** */
            }

            #sknscoe-unique-header .college-mandal {
                font-size: 8px; 
                font-weight: 400;
                margin-bottom: -2px;
                line-height: 1;
            }
            #sknscoe-unique-header .college-name {
                font-size: 14px; 
                line-height: 1.1;
            }
            #sknscoe-unique-header .college-tagline {
                font-size: 8px; 
                margin-top: 0px;
                line-height: 1;
            }
            
            /* Hiding secondary elements */
            #sknscoe-unique-header .accreditation-strip {
                display: none; 
            }
            #sknscoe-unique-header .right-logos {
                display: none; 
            }
            
            /* Logo adjustments */
            #sknscoe-unique-header .logo-container {
                gap: 8px; 
            }

            #sknscoe-unique-header .logo-img {
                height: 100%;
                max-height: 40px; 
                width: auto;
            }
            
            /* Top bar adjustment */
            #sknscoe-unique-header .top-bar {
                padding: 4px 0; 
                font-size: 10px;
            }
        }

        @media (max-width: 576px) {
             /* Further adjustments for tiny screens if needed, but 768px block covers the core request */
        }

        /* Internal page sidebar (mobile toggle - custom classes) */
        .skn-sidebar-toggle {
            display: none; /* hidden by default on laptop/desktop */
            position: fixed;
            left: 0;
            top: calc(var(--skn-header-height, 0px) + 10px);
            z-index: 9998;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            padding: 0 !important;
            margin: 0 !important;
            border-radius: 6px;
            box-shadow: 0 0 4px rgba(0,0,0,0.25);
            background: #fff;
            border: 1px solid #eee;
        }
        .skn-sidebar-toggle svg { width: 18px; height: 18px; display: block; }
        @media (max-width: 991px) {
            /* Support both new and legacy sidebar classes */
            .skn-sidebar, .s-bar {
                position: fixed;
                top: calc(var(--skn-header-height, 0px) + 10px);
                left: -100%;
                width: min(80vw, 320px);
                height: calc(100vh - (var(--skn-header-height, 0px) + 20px));
                background: #fff;
                box-shadow: 8px 0 20px rgba(0,0,0,0.2);
                border-right: 1px solid #eee;
                box-sizing: border-box;
                padding: 12px;
                overflow-y: auto;
                -webkit-overflow-scrolling: touch;
                display: block; /* visibility controlled by left property */
                transition: left 0.3s ease;
                z-index: 9990; /* below fixed header (9999) */
                border-radius: 0 8px 8px 0;
                background-clip: padding-box;
                pointer-events: none; /* do not block clicks when closed */
            }
            .skn-sidebar.open, .s-bar.open { left: 0; padding-top: 48px; pointer-events: auto; }
            .skn-sidebar > :not(.skn-sidebar-close):first-child, .s-bar > :not(.skn-sidebar-close):first-child { margin-top: 0; }
            .skn-sidebar .skn-sidebar-close, .s-bar .skn-sidebar-close { position: absolute; top: 10px; left: 10px; width: 28px; height: 28px; border: none; background: #fff; border: 1px solid #eee; border-radius: 6px; font-size: 18px; line-height: 1; cursor: pointer; color: #333; display: inline-flex; align-items: center; justify-content: center; box-shadow: 0 0 4px rgba(0,0,0,0.15); }
            /* Show the toggle button on mobile only (support legacy .s-bar-btn) */
            .skn-sidebar-toggle, .s-bar-btn { display: inline-flex; }
        }
    </style>
<script src="<?php echo BASE_URL; ?>/assets/vendor/sknscoe/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/js/jssor.slider-22.1.7.mini.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/js/jssor.slider-22.1.8.mini.js"></script>

</head>

<body>
<div id="sknscoe-unique-header" class="sknscoe-header-wrapper">
    
  
 

    <header class="main-header">
        <div class="header-content">
<a href="<?php echo BASE_URL; ?>/index.php" class="logo-section">
                <div class="logo-container">
<img src="<?php echo BASE_URL; ?>/assets/vendor/sknscoe/img/lg.png" alt="SKNSCOE Logo" class="logo-img">
                    <div class="college-info">
                        <div class="college-mandal">Savitribai Phule Shikshan Prasarak Mandal's</div>
                        <div class="college-name">
                            <span> N B Navale Sinhgad</span> College of Engineering
                        </div>
                        <div class="college-tagline">Solaur, Maharashtra</div>
                        <div class="accreditation-strip">
                            <div class="acc-badge">NAAC A+</div>
                            <div class="acc-badge">NBA Accredited</div>
                            <div class="acc-badge">AICTE Approved</div>
                        </div>
                    </div>
                </div>
            </a>
            <div class="right-logos">
<img src="<?php echo BASE_URL; ?>/assets/vendor/sknscoe/img/nba-300x300.png" alt="NBA" class="cert-logo">
<img src="<?php echo BASE_URL; ?>/assets/vendor/sknscoe/img/NAAC.png" alt="NAAC A+" class="cert-logo">
            </div>
        </div>
    </header>

    <div class="top-access">
        <div class="access-content">
            <button class="mobile-toggle" onclick="toggleMobileMenu()">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="site-primary-list" id="sitePrimaryList">
                <li class="list-item">
<a href="<?php echo BASE_URL; ?>/index.php" class="list-link"><i class="fas fa-home"></i>&nbsp;Home</a>
                </li>
                <li class="list-item">
                    <a href="#" class="list-link">About <i class="fas fa-chevron-down"></i></a>
                    <ul class="module-dropdown">
                        <li><a href="<?php echo BASE_URL; ?>/public/presidents-message.php">President's Message</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/principals-desk.php">Principal's Desk</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/governing.php">Governing Body (GB) &amp; CDC</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/About-us.php">About SKNSCOE</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/governance.php">Governance &amp; Policies</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/Committees.php">Committees</a></li>
                        <li><a href="#">Study In INDIA</a></li>
                        <li><a href="#">Code of Conduct</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/iic-new.php">Institution's Innovation Council</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/programs.php">Programs</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/facilities.php">Facilities</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/edc-cell.php">EDC Cell</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/nisp.php">NISP</a></li>
                    </ul>
                </li>
                <li class="list-item">
                    <a href="<?php echo BASE_URL; ?>/public/Admission.php" class="list-link">Admission</a>
                </li>
                <li class="list-item">
                    <a href="#" class="list-link">Departments <i class="fas fa-chevron-down"></i></a>
                    <ul class="module-dropdown">
                        <li><a href="<?php echo BASE_URL; ?>/public/Civil.php">Civil Engineering</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/ComputerScience.php">Computer Science and Engineering</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/Electrical.php">Electrical Engineering</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/e&tc.php">Electronics and Telecommunication Engineering</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/Mechanical.php">Mechanical Engineering</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/fe.php">First Year B.Tech.</a></li>
                    </ul>
                </li>
                <li class="list-item">
                    <a href="#" class="list-link">NAAC <i class="fas fa-chevron-down"></i></a>
                    <ul class="module-dropdown">
                        <li><a href="<?php echo BASE_URL; ?>/public/BestPractices.php">Institute Best Practice</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/InstituteDistinctivenes.php">Institutional Distinctiveness</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/IQAC.php">IQAC</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/studentSatisfactionSurvey.php">Student Satisfaction Survey</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/AQAR.php">AQAR Report</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/ssr.php">Self Study Report (SSR)</a></li>
                    </ul>
                </li>
                <li class="list-item">
                    <a href="#" class="list-link">NIRF</a>
                </li>
                <li class="list-item">
                    <a href="#" class="list-link">Library <i class="fas fa-chevron-down"></i></a>
                    <ul class="module-dropdown">
                        <li><a href="<?php echo BASE_URL; ?>/public/Library.php#services">Library Services</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/Library.php#webopac">Library WEBOPAC</a></li>
                    </ul>
                </li>
                <li class="list-item">
                    <a href="#" class="list-link">Students <i class="fas fa-chevron-down"></i></a>
                    <ul class="module-dropdown">
                        <li><a href="<?php echo BASE_URL; ?>/public/academicCalendar.php">Academic Calendar</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/Alumni.php">Alumni</a></li>
                        <li><a href="#">MOODLE Server</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/Syllabus.php">Syllabus</a></li>
                    </ul>
                </li>
                <li class="list-item">
                    <a href="#" class="list-link">Feedback<i class="fas fa-chevron-down"></i></a>
                    <ul class="module-dropdown">
                        <li><a href="#">Curriculum</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/academic_performance_ambience.php">Academic Performance &amp; Ambiance</a></li>
                    </ul>
                </li>
                <li class="list-item">
                    <a href="#" class="list-link">Research<i class="fas fa-chevron-down"></i></a>
                    <ul class="module-dropdown">
                        <li><a href="<?php echo BASE_URL; ?>/public/Research.php">Research &amp; Development</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/public/aicte-idealab.php">AICTE-Idea Lab</a></li>
                    </ul>
                </li>
                <li class="list-item">
                    <a href="<?php echo BASE_URL; ?>/public/Placements.php" class="list-link">Placements</a>
                </li>
                <li class="list-item">
                    <a href="<?php echo BASE_URL; ?>/public/hogallery.php" class="list-link">Gallery</a>
                </li>
                <li class="list-item">
                    <a href="<?php echo BASE_URL; ?>/public/contact-us.php" class="list-link">Contact Us</a>
                </li>
            </ul>
            <a href="<?php echo BASE_URL; ?>/admin/login.php" class="admin-link"><i class="fas fa-user-shield"></i> Admin</a>
        </div>
    </div>
</div>

<main class="container-fluid">

<script>
    /**
     * Toggles the visibility of the main mobile primary list.
     */
    function toggleMobileMenu() {
        // Renamed ID from 'navMenu' to 'sitePrimaryList'
        const primaryList = document.getElementById('sitePrimaryList');
        primaryList.classList.toggle('mobile-open');
    }

    /**
     * Calculates the height of the fixed header and applies that height
     * as top padding to the body element.
     */
    function adjustBodyPadding() {
        const fixedHeader = document.querySelector('.sknscoe-header-wrapper');
        if (fixedHeader) {
            const headerHeight = fixedHeader.offsetHeight;
            document.body.style.paddingTop = `${headerHeight}px`;
            /* Sets the CSS variable for use in other places (like sidebar positioning) */
            document.documentElement.style.setProperty('--skn-header-height', `${headerHeight}px`);
        }
    }

    /**
     * Sets up the mobile dropdown accordion functionality.
     */
    function setupMobileDropdowns() {
        // Renamed class from '.nav-item' to '.list-item'
        document.querySelectorAll('.list-item').forEach(item => {
            // Renamed class from '.nav-link' to '.list-link'
            const link = item.querySelector('.list-link');
            // Renamed class from '.dropdown-menu' to '.module-dropdown'
            const dropdown = item.querySelector('.module-dropdown');

            if (dropdown) {
                // Ensure a clean event listener setup
                link.removeEventListener('click', handleMobileDropdownClick);
                link.addEventListener('click', handleMobileDropdownClick);
            }

            function handleMobileDropdownClick(e) {
                // Check if we are in mobile view (matching the CSS breakpoint)
                if (window.innerWidth <= 992) {

                    // If clicking the main link of an item with a dropdown
                    if (e.target.closest('.module-dropdown') === null) {
                        e.preventDefault();

                        // Close other open dropdowns at the same level (accordion effect)
                        // Renamed class from '.nav-item' to '.list-item' and '.mobile-dropdown-open'
                        item.parentNode.querySelectorAll('.list-item.mobile-dropdown-open')
                            .forEach(openItem => {
                                if (openItem !== item) {
                                    openItem.classList.remove('mobile-dropdown-open');
                                }
                            });

                        // Toggle the current dropdown using the CSS class
                        item.classList.toggle('mobile-dropdown-open');
                    }
                }
            }
        });
    }

    // Internal sidebar toggle for mobile (hamburger reveals .skn-sidebar)
    function setupInternalSidebarToggle() {
        // Delegate click events for robustness (open toggle)
        document.addEventListener('click', function(e){
            const btn = e.target.closest('.skn-sidebar-toggle, .s-bar-btn');
            if (!btn) return;
            const row = btn.closest('.row') || document;
            // find new or legacy sidebar
            const sidebar = row.querySelector('.skn-sidebar') || row.querySelector('.s-bar') || document.querySelector('.skn-sidebar') || document.querySelector('.s-bar');
            if (sidebar) {
                const nowOpen = !sidebar.classList.contains('open');
                sidebar.classList.toggle('open');
                // optional ARIA state
                btn.setAttribute('aria-expanded', nowOpen ? 'true' : 'false');
                // hide the external toggle while open only on mobile widths
                if (window.innerWidth <= 991) {
                    if (nowOpen) {
                        btn.style.display = 'none';
                    } else {
                        btn.style.display = 'inline-flex';
                    }
                }
                // Ensure a close button exists inside the sidebar
                let closeBtn = sidebar.querySelector('.skn-sidebar-close');
                if (!closeBtn) {
                    closeBtn = document.createElement('button');
                    closeBtn.className = 'skn-sidebar-close';
                    closeBtn.setAttribute('type', 'button');
                    closeBtn.setAttribute('aria-label', 'Close sidebar');
                    closeBtn.textContent = '×';
                    sidebar.insertBefore(closeBtn, sidebar.firstChild);
                }
            }
        });
        // Delegate close button
        document.addEventListener('click', function(e){
            const closeBtn = e.target.closest('.skn-sidebar-close');
            if (!closeBtn) return;
            const sidebar = closeBtn.closest('.skn-sidebar');
            if (sidebar) {
                sidebar.classList.remove('open');
                // also update any visible toggle button aria and show it (mobile only)
                const row = sidebar.closest('.row') || document;
                const opener = row.querySelector('.skn-sidebar-toggle');
                if (opener) {
                    opener.setAttribute('aria-expanded', 'false');
                    if (window.innerWidth <= 991) {
                        opener.style.display = 'inline-flex';
                    } else {
                        opener.style.display = 'none';
                    }
                }
            }
        });
        // Close sidebar when any link inside it is clicked (mobile only)
        document.addEventListener('click', function(e){
            const link = e.target.closest('.skn-sidebar a, .s-bar a');
            if (!link) return;
            if (window.innerWidth > 991) return; // do nothing on laptop/desktop
            const sidebar = link.closest('.skn-sidebar, .s-bar');
            if (sidebar) {
                const isTab = link.matches('[data-toggle="tab"], [data-bs-toggle="tab"], a[href^="#"]');
                const closeSidebar = function(){
                    sidebar.classList.remove('open');
                    const row = sidebar.closest('.row') || document;
                    const opener = row.querySelector('.skn-sidebar-toggle, .s-bar-btn');
                    if (opener) {
                        opener.setAttribute('aria-expanded', 'false');
                        opener.style.display = 'inline-flex';
                    }
                };
                if (isTab) {
                    // allow Bootstrap tab to switch first
                    setTimeout(closeSidebar, 50);
                } else {
                    // external links or normal anchors
                    closeSidebar();
                }
            }
        });
    }

    // Initialize all functionality on load
    document.addEventListener('DOMContentLoaded', () => {
        adjustBodyPadding();
        setupMobileDropdowns();
        setupInternalSidebarToggle();
    });
    window.addEventListener('load', adjustBodyPadding);

    // Deep-link tab support (e.g., page.html#section)
    function sknShowTabById(id){
        if (!id) return;
        var pane = document.getElementById(id.replace(/^#/, ''));
        if (!pane) return;
        var container = pane.closest('.tab-content');
        if (!container) return;
        // Deactivate current
        container.querySelectorAll('.tab-pane.active').forEach(el => el.classList.remove('active'));
        // Activate target
        pane.classList.add('active');
        // Activate corresponding sidebar item if present
        var link = document.querySelector('a[href="#' + pane.id + '"]');
        if (link) {
            var li = link.closest('li');
            var list = li && li.parentElement;
            if (list) list.querySelectorAll('li.active').forEach(el => el.classList.remove('active'));
            if (li) li.classList.add('active');
        }
    }

    function setupDeepLinkTabs(){
        // On load
        if (location.hash) {
            sknShowTabById(location.hash.substring(1));
        }
        // When clicking tab-like links, prevent default and show
        document.addEventListener('click', function(e){
            var a = e.target.closest('a');
            if (!a) return;
            var href = a.getAttribute('href') || '';
            var isTabLink = a.matches('[data-toggle="tab"], [data-bs-toggle="tab"]') || /^#/.test(href);
            if (!isTabLink) return;
            var id = href.replace(/^#/, '');
            if (!document.getElementById(id)) return;
            e.preventDefault();
            // Use Bootstrap tab if available
            if (window.jQuery && jQuery.fn && typeof jQuery.fn.tab === 'function') {
                try { jQuery(a).tab('show'); } catch(_) {}
            }
            sknShowTabById(id);
            // update hash without jumping
            if (history.replaceState) {
                history.replaceState(null, '', '#' + id);
            } else {
                location.hash = '#' + id;
            }
        });
        // Respond to hash changes
        window.addEventListener('hashchange', function(){
            if (location.hash) sknShowTabById(location.hash.substring(1));
        });
    }

    // Recalculate padding and re-evaluate mobile state on resize
    window.addEventListener('resize', () => {
        adjustBodyPadding();
        if (window.innerWidth > 992) {
            // Renamed ID from 'navMenu' to 'sitePrimaryList'
            const primaryList = document.getElementById('sitePrimaryList');
            primaryList.classList.remove('mobile-open');
            // Renamed class from '.nav-item' to '.list-item' and '.mobile-dropdown-open'
            document.querySelectorAll('.list-item.mobile-dropdown-open')
                .forEach(item => item.classList.remove('mobile-dropdown-open'));
        }
    });

    // Init deep-linking after DOM ready
    document.addEventListener('DOMContentLoaded', setupDeepLinkTabs);

</script>
</body>
</html>