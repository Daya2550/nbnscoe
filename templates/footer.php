<?php
// PHP Configuration (Ensure BASE_URL is defined)
// Note: Assuming BASE_URL is defined in the context, as in your original header code.

// --- BEGIN: Footer Styling (CSS) with Unique Identifiers ---
?>
<style>

    /* Global Reset for Scope (Ensures styles only apply within the unique ID) */
    #skn-site-closing, #skn-site-closing * {
        box-sizing: border-box;
        line-height: 1.5;
        margin: 0;
        padding: 0;
    }

    /* Core Footer Styles */
    #skn-site-closing {
        background: #1a1a2e; /* Updated to a darker primary color for a traditional footer look */
        color: #aeb5c2; /* Muted color for default text */
        min-height: 250px; 
        padding: 60px 0 0; 
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        /* Using a deeper shadow to separate from page content */
        box-shadow: 0 -8px 20px rgba(0, 0, 0, 0.4); 
    }
    /* Renamed from .skn-container to .site-closing-container */
    #skn-site-closing .site-closing-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Main Grid Layout - Renamed from .skn-grid-main to .site-closing-grid */
    #skn-site-closing .site-closing-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 30px; 
        margin-bottom: 40px;
    }

    /* Widget Heading Styles - Renamed from .skn-widget-title to .final-section-heading */
    #skn-site-closing .final-section-heading {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #ffffff; 
        text-transform: uppercase;
        letter-spacing: 1px;
        /* Accent Red separator */
        border-bottom: 3px solid #d7263d; /* Red accent */
        padding-bottom: 10px;
        display: inline-block;
    }

    /* Menu/List Styles - Renamed from .skn-menu to .final-link-group */
    #skn-site-closing .final-link-group {
        list-style: none;
        margin: 0;
    }
    #skn-site-closing .final-link-group li {
        margin-bottom: 12px;
    }
    #skn-site-closing .final-link-group li a {
        color: #aeb5c2; 
        text-decoration: none;
        font-size: 15px;
        transition: color 0.3s ease, transform 0.3s ease;
        display: flex;
        align-items: center;
    }
    #skn-site-closing .final-link-group li a::before {
        content: '•'; 
        color: #f5b700; /* Gold accent */
        margin-right: 10px;
        font-size: 1.2em;
        line-height: 1;
        transform: translateY(-1px);
    }
    #skn-site-closing .final-link-group li a:hover {
        color: #d7263d; /* Red accent */
        transform: translateX(5px);
    }
    /* Note: Removed the white hover color from the bullet as the dark background now handles it. */
    #skn-site-closing .final-link-group li a:hover::before {
         color: #f5b700;
    }

    /* Contact Info Styles - Renamed from .skn-widget-contact to .widget-contact-details */
    #skn-site-closing .widget-contact-details p, #skn-site-closing .widget-contact-details a {
        color: #aeb5c2; 
        font-size: 15px;
        line-height: 1.7;
    }
    #skn-site-closing .widget-contact-details a {
        text-decoration: none;
        transition: color 0.3s ease;
    }
    #skn-site-closing .widget-contact-details a:hover {
        color: #d7263d; 
        text-decoration: underline;
    }
    /* Renamed from .skn-contact-item to .contact-block-item */
    #skn-site-closing .contact-block-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 15px;
        gap: 15px;
    }
    #skn-site-closing .contact-block-item .fas {
        color: #f5b700; 
        font-size: 16px;
        margin-top: 3px;
        min-width: 16px;
    }

    /* Social Icons - Renamed from .skn-social-icons to .social-follow-group */
    #skn-site-closing .social-follow-group {
        display: flex;
        gap: 12px;
        margin-top: 15px;
        margin-bottom: 30px;
    }
    #skn-site-closing .social-follow-group a {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        /* Adjusted opacity for dark background */
        border: 1px solid rgba(255, 255, 255, 0.4); 
        background: transparent;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        transition: all 0.3s ease;
    }
    #skn-site-closing .social-follow-group a:hover {
        background: #d7263d; 
        border-color: #d7263d;
        transform: scale(1.1);
    }

    /* Visitor Counter - Renamed from .skn-counter to .page-visit-count */
    #skn-site-closing .page-visit-count-heading {
        font-size: 18px;
        font-weight: 600;
        color: #f5b700; 
        margin-bottom: 10px;
        display: inline-block;
        border-bottom: 1px dashed #f5b700;
        padding-bottom: 5px;
    }
    #skn-site-closing .page-visit-count img {
        display: block;
        max-width: 100%;
        height: auto;
    }

    /* Bottom Bar (Copyright) - Renamed from .skn-footer-bottom to .site-closing-bottom */
    #skn-site-closing .site-closing-bottom {
        background: #10101a; /* Even darker color for the absolute bottom */
        border-top: 1px solid rgba(255, 255, 255, 0.1); 
        padding: 20px 0;
        text-align: center;
    }
    /* Renamed from .skn-copyright-text to .copyright-panel-text */
    #skn-site-closing .copyright-panel-text {
        margin: 0;
        font-size: 13px;
        color: #6c757d; /* Lighter muted color */
    }
    #skn-site-closing .copyright-panel-text a {
        color: #f5b700; 
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease;
    }
    #skn-site-closing .copyright-panel-text a:hover {
        color: #d7263d; 
        text-decoration: underline;
    }
    /* Renamed from .skn-browser-note to .browser-compatibility-note */
    #skn-site-closing .browser-compatibility-note {
        display: block;
        margin-top: 5px;
        font-style: italic;
        font-size: 12px;
        color: #8c96a3;
    }

    /* Responsive Adjustments (Scoped to ID) */
    @media (max-width: 992px) {
        #skn-site-closing .site-closing-grid {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }
    }
    @media (max-width: 768px) {
        #skn-site-closing .site-closing-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        #skn-site-closing {
            padding: 40px 0 0;
        }
        /* Center content on mobile */
        /* Renamed from .skn-widget-social to .widget-social-group */
        #skn-site-closing .widget-box, #skn-site-closing .widget-social-group {
            text-align: center;
        }
        #skn-site-closing .final-section-heading, #skn-site-closing .page-visit-count-heading {
            margin-left: auto;
            margin-right: auto;
        }
        #skn-site-closing .final-link-group li a {
            justify-content: center;
        }
        #skn-site-closing .contact-block-item {
            justify-content: center;
            text-align: left; 
            margin: 0 auto 15px; 
            max-width: 300px;
        }
        #skn-site-closing .social-follow-group {
            justify-content: center;
        }
    }
</style>
<?php
// --- END: Footer Styling (CSS) ---

// --- START: Footer HTML/PHP Structure with Unique Identifiers ---
?>
</main>
<footer id="skn-site-closing">
    <div class="site-closing-container">
        <div class="site-closing-grid">

            <div class="widget-box widget-important-links">
                <h4 class="final-section-heading">Important Links</h4>
                <div class="footer-link-block">
                    <ul class="final-link-group">
                        <li><a href="https://www.sknscoe.ac.in/academicCalendar.php" target="_blank">Academic Calendar</a></li>
                        <li><a href="https://www.sknscoe.ac.in/other/AICTE-Rules-Ragging.pdf" target="_blank">Anti Ragging Act</a></li>
                        <li><a href="https://www.sknscoe.ac.in/other/rti-act.pdf" target="_blank">RTI Act</a></li>
                        <li><a href="https://www.sknscoe.ac.in/downloads/Mandatory_Disclosure_2024-25.pdf" target="_blank">Mandatory Disclosure</a></li>
                        <li><a href="https://www.sknscoe.ac.in/downloads/SKNSCOE-Brochure.pdf" target="_blank">College Brochure</a></li>
                        <li><a href="https://www.sknscoe.ac.in/other/Laingik%20Chal%20Defination%20%26%20Introduction.pdf" target="_blank">Safety & Security of Girls & Women</a></li>
                    </ul>
                </div>
            </div>

            <div class="widget-box widget-quick-links">
                <h4 class="final-section-heading">General</h4>
                <div class="footer-link-block">
                    <ul class="final-link-group">
<li><a href="<?php echo BASE_URL; ?>/index.php">Home</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/Admission.php">Admission</a></li>
                        <li><a href="#">NIRF</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/Placements.php">Placements</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/hogallery.php">Gallery</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="widget-box widget-about-links">
                <h4 class="final-section-heading">About</h4>
                <div class="footer-link-block">
                    <ul class="final-link-group">
<li><a href="<?php echo BASE_URL; ?>/presidents-message.php">President's Message</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/principals-desk.php">Principal's Desk</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/governing.php">Governing Body (GB) &amp; CDC</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/About-us.php">About SKNSCOE</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/governance.php">Governance &amp; Policies</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/Committees.php">Committees</a></li>
                        <li><a href="#">Study In INDIA</a></li>
                      
                    </ul>
                </div>
            </div>

            <div class="widget-box widget-dept-links">
                <h4 class="final-section-heading">Departments</h4>
                <div class="footer-link-block">
                    <ul class="final-link-group">
<li><a href="<?php echo BASE_URL; ?>/Civil.php">Civil Engineering</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/ComputerScience.php">Computer Science and Engineering</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/Electrical.php">Electrical Engineering</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/e&tc.php">Electronics and Telecommunication Engineering</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/Mechanical.php">Mechanical Engineering</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/fe.php">First Year B.Tech.</a></li>
                    </ul>
                </div>
            </div>

            <div class="widget-box widget-naac-links">
                <h4 class="final-section-heading">NAAC</h4>
                <div class="footer-link-block">
                    <ul class="final-link-group">
<li><a href="<?php echo BASE_URL; ?>/BestPractices.php">Institute Best Practice</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/InstituteDistinctivenes.php">Institutional Distinctiveness</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/IQAC.php">IQAC</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/studentSatisfactionSurvey.php">Student Satisfaction Survey</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/AQAR.php">AQAR Report</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/ssr.php">Self Study Report (SSR)</a></li>
                    </ul>
                </div>
            </div>

            <div class="widget-box widget-library-links">
                <h4 class="final-section-heading">Library</h4>
                <div class="footer-link-block">
                    <ul class="final-link-group">
<li><a href="<?php echo BASE_URL; ?>/Library.php#services">Library Services</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/Library.php#webopac">Library WEBOPAC</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/iic-new.php">Institution's Innovation Council</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/programs.php">Programs</a></li>
                      
                </div>
            </div>

            <div class="widget-box widget-student-links">
                <h4 class="final-section-heading">Students</h4>
                <div class="footer-link-block">
                    <ul class="final-link-group">
<li><a href="<?php echo BASE_URL; ?>/academicCalendar.php">Academic Calendar</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/Alumni.php">Alumni</a></li>
                        <li><a href="#">MOODLE Server</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/Syllabus.php">Syllabus</a></li>
                    </ul>
                </div>
            </div>

            <div class="widget-box widget-feedback-links">
                <h4 class="final-section-heading">Feedback</h4>
                <div class="footer-link-block">
                    <ul class="final-link-group">
                        <li><a href="#">Curriculum</a></li>
<li><a href="<?php echo BASE_URL; ?>/academic_performance_ambience.php">Academic Performance &amp; Ambiance</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/facilities.php">Facilities</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/edc-cell.php">EDC Cell</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/nisp.php">NISP</a></li>
                    </ul>
                    </ul>
                </div>
            </div>

            <div class="widget-box widget-research-links">
                <h4 class="final-section-heading">Research</h4>
                <div class="footer-link-block">
                    <ul class="final-link-group">
<li><a href="<?php echo BASE_URL; ?>/Research.php">Research &amp; Development</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/aicte-idealab.php">AICTE-Idea Lab</a></li>
                    </ul>
                </div>
            </div>

            <div class="widget-box widget-social-group">
                <h4 class="final-section-heading">Follow Us</h4>
                <div class="social-follow-group">
                    <a href="https://www.youtube.com/channel/UCWB9fv6fAuzfS6EfMO-aZVQ" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.facebook.com/sinhgad.pandharpur?sk=wall" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/SINHGADINSTITU2?t=9Sw3EevNRhRTz_Kc7h-9Mg&s=09" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com/stories/sinhgadpandharpur/3034229756980531562?igshid=MDJmNzVkMjY=" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/skn-sinhgad-college-of-engineering-pandharpur-674295131" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                
                <div class="page-visit-count">
                    <h4 class="page-visit-count-heading">Visitor Count</h4>
                    <a href="https://smallseotools.com/visitor-hit-counter/" target="_blank" title="Web Counter">
                        <img src="https://smallseotools.com/counterDisplay?code=d59ca5f65bf3b1545cbb05a4db937ab3&style=0008&pad=7&type=page&initCount=1000" title="Web Counter" alt="Web Counter" border="0">
                    </a>
                </div>
            </div>

            <div class="widget-box widget-contact-details">
                <h4 class="final-section-heading">Connect With Us</h4>
                <div class="contact-block-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Gat No. 664, SKN Sinhgad college of Engineering A/P Korti, Pandharpur Dist- Solapur (413304)</p>
                </div>
                
                <div class="contact-block-item">
                    <i class="fas fa-phone-alt"></i>
                    <p>Mobile No.: <a href="tel:+917350508899">+91 7350508899</a></p>
                </div>
                
                <div class="contact-block-item">
                    <i class="fas fa-envelope"></i>
                    <p>Email: <a href="mailto:principal@sknscoe.ac.in">principal@sknscoe.ac.in</a></p>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="site-closing-bottom">
        <div class="site-closing-container">
            <div class="copyright-panel-info">
                <p class="copyright-panel-text">
Copyright &copy; 2024 by <a href="<?php echo BASE_URL; ?>/index.php" rel="develop">SKNSCOE, Pandharpur</a>. All rights reserved.
                    <span class="browser-compatibility-note">*This website is best viewed in Mozilla Firefox browser*</span>
                </p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
<?php
// --- END: Footer HTML/PHP Structure with Unique Identifiers ---
?>