<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base_theme
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<footer class="footer bg-dark text-white py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Left Section -->
            <div class="col-12 col-lg-4">
                <div class="footer-left">
                    <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                        if ($logo) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="Miez Logo" class="footer-logo img-fluid mb-4" style="max-height: 80px;">';
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.png" alt="Miez Logo" class="footer-logo img-fluid mb-4" style="max-height: 80px;">';
                        }
                    ?>

                    <div class="footer-address-line d-flex align-items-start mb-3">
                        <div class="address-label me-3">
                            <i class="fas fa-map-marker-alt icon-orange icon-small"></i>
                        </div>
                        <div class="address-text small">
                            MIEZ (PVT) LTD<br>
                            6A Menerigama Pl,<br>
                            Dehiwala-Mount Lavinia 10350<br>
                        </div>
                    </div>

                    <div class="footer-address-line d-flex align-items-start mb-3">
                        <div class="address-label me-3">
                            <i class="fas fa-phone icon-orange icon-small"></i>
                        </div>
                        <div class="address-text small">
                            +94 74 205 7075
                        </div>
                    </div>

                    <div class="footer-address-line d-flex align-items-start mb-4">
                        <div class="address-label me-3">
                            <i class="fas fa-envelope icon-orange icon-small"></i>
                        </div>
                        <div class="address-text small">
                            <a href="mailto:hello@miezsl.com"
                                class="mail text-warning text-decoration-none">hello@miezsl.com</a>
                        </div>
                    </div>

                    <div class="social-icons-container2">
                        <div class="social-icons d-flex gap-3">
                            <a href="https://wa.me/94742057075?text=Hello%20Miez%20Agency%2C%20I%20want%20to%20know%20more%20about%20your%20services!"
                                target="_blank"
                                class="social whatsapp d-inline-flex align-items-center justify-content-center rounded-circle text-white text-decoration-none"
                                style="width: 40px; height: 40px; background-color: #ed9827;">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://www.facebook.com/Miezsl/" target="_blank"
                                class="social fb d-inline-flex align-items-center justify-content-center rounded-circle text-white text-decoration-none"
                                style="width: 40px; height: 40px; background-color: #ed9827;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/miez_agency/" target="_blank"
                                class="social insta d-inline-flex align-items-center justify-content-center rounded-circle text-white text-decoration-none"
                                style="width: 40px; height: 40px; background-color: #ed9827;">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://x.com/miezsl" target="_blank"
                                class="social tw d-inline-flex align-items-center justify-content-center rounded-circle text-white text-decoration-none"
                                style="width: 40px; height: 40px; background-color: #ed9827;">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/miezsl/?originalSubdomain=lk" target="_blank"
                                class="social ln d-inline-flex align-items-center justify-content-center rounded-circle text-white text-decoration-none"
                                style="width: 40px; height: 40px; background-color: #ed9827;">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.tiktok.com/@life.at.miez" target="_blank"
                                class="social tiktok d-inline-flex align-items-center justify-content-center rounded-circle text-white text-decoration-none"
                                style="width: 40px; height: 40px; background-color: #ed9827;">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="col-12 col-lg-8">
                <div class="footer-right">
                    <h5 class="footer-title text-warning fw-bold mb-4">What We Do</h5>

                    <div class="row g-4 mb-4">
                        <div class="col-12 col-md-4">
                            <div class="footer-category">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('social-media-marketing')); ?>"
                                            class="text-light text-decoration-none small">Social Media Marketing</a>
                                    </li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('linkedin-marketing')); ?>"
                                            class="text-light text-decoration-none small">LinkedIn Marketing</a></li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('pay-per-click-advertising')); ?>"
                                            class="text-light text-decoration-none small">Pay-Per-Click Advertising</a>
                                    </li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('conversion-rate-optimization')); ?>"
                                            class="text-light text-decoration-none small">Conversion Rate
                                            Optimization</a></li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('search-engine-optimization')); ?>"
                                            class="text-light text-decoration-none small">Search Engine Optimization</a>
                                    </li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('meta-search-marketing')); ?>"
                                            class="text-light text-decoration-none small">Meta Search Marketing</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="footer-category">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('content-development')); ?>"
                                            class="text-light text-decoration-none small">Content Development</a></li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('email-marketing')); ?>"
                                            class="text-light text-decoration-none small">Email Marketing</a></li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('digital-marketing-consultancy')); ?>"
                                            class="text-light text-decoration-none small">Digital Marketing
                                            Consultancy</a></li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('web-design')); ?>"
                                            class="text-light text-decoration-none small">Web Design (UI/UX)</a></li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('web-development')); ?>"
                                            class="text-light text-decoration-none small">Web Development</a></li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('web-maintenance')); ?>"
                                            class="text-light text-decoration-none small">Web Maintenance</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="footer-category">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('branding')); ?>"
                                            class="text-light text-decoration-none small">Branding</a></li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('photography')); ?>"
                                            class="text-light text-decoration-none small">Photography</a></li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('graphic-design')); ?>"
                                            class="text-light text-decoration-none small">Graphic Design</a></li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('videos-animations')); ?>"
                                            class="text-light text-decoration-none small">Videos & Animations</a></li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('booking-system')); ?>"
                                            class="text-light text-decoration-none small">Booking System</a></li>
                                    <li class="mb-2"><a
                                            href="<?php echo get_permalink(get_page_by_path('ai-solutions')); ?>"
                                            class="text-light text-decoration-none small">AI Solutions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Explore More -->
                    <div class="exploremore-container">
                        <h6 class="footer-title2 text-warning fw-bold mb-3">Explore More :</h6>
                        <div class="explore-links d-block d-md-flex flex-wrap gap-3">
                            <a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>"
                                class="text-light text-decoration-none small">About Us</a>
                            <span class="text-muted">|</span>
                            <a href="<?php echo get_permalink(get_page_by_path('contact-us')); ?>"
                                class="text-light text-decoration-none small">Contact Us</a>
                            <span class="text-muted">|</span>
                            <a href="<?php echo get_permalink(get_page_by_path('careers')); ?>"
                                class="text-light text-decoration-none small">Careers</a>
                            <span class="text-muted">|</span>
                            <a href="<?php echo get_permalink(get_page_by_path('portfolio')); ?>"
                                class="text-light text-decoration-none small">Portfolio</a>
                            <span class="text-muted">|</span>
                            <a href="<?php echo get_permalink(get_page_by_path('case-studies')); ?>"
                                class="text-light text-decoration-none small">Case Studies</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom border-top border-secondary pt-4 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 text-center text-md-start">
                    <p class="small text-muted mb-0">Copyright © <?php echo date("Y"); ?>, miezsl.com, All rights
                        reserved.</p>
                </div>
                <div class="col-12 col-md-6 text-center text-md-end">
                    <div class="footer-privacy">
                        <a href="<?php echo get_permalink(get_page_by_path('privacy-policy')); ?>"
                            class="text-muted text-decoration-none small">Privacy Policy</a>
                        <span class="text-muted mx-2">|</span>
                        <a href="<?php echo get_permalink(get_page_by_path('terms-of-service')); ?>"
                            class="text-muted text-decoration-none small">Terms of Service</a>
                        <span class="text-muted mx-2">|</span>
                        <a href="<?php echo get_permalink(get_page_by_path('cookies-settings')); ?>"
                            class="text-muted text-decoration-none small">Cookies Settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</html>