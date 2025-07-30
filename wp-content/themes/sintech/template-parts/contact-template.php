<?php 
/** 
* Template Name: Contact Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="page-content contact-page">
    <section class="contact-hero-section ">
        <div class="hero-background item overlay"
            style="background-image: url('http://localhost/echorich/wp-content/uploads/2024/02/contact-us-img-01.jpg');">
            <div class="container">
                <div class="inner-box">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="inner-col-1">
                                <div class="text-wrap">
                                    <h1 class="heading">Contact Us</h1>
                                    <p class="description">Etiam scelerisque tortor at lectus dapibus, nec fermentum diam feugiat.<br> Morbi rutrum magna et dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-details-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="address-header pb-4">
                        <h3>Office in Sri Lanka</h2>
                    </div>
                    <div class="address-wrap d-flex pb-3">
                        <i class="ri-map-pin-line"></i>
                        <p class="address-content">198 West 21th Street, Suite 721 New York, NY 10010</p>
                    </div>
                    <div class="tel-wrap d-flex pb-3">
                        <i class="ri-phone-line"></i>
                        <p class="address-content">+(123) 1234-567-8901</p>
                    </div>
                    <div class="mail-wrap d-flex">
                        <i class="ri-mail-line"></i>
                        <p class="address-content">wilmer@qodeinteractive.com</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                <div class="address-header pb-4">
                        <h3>Office in New York</h2>
                    </div>
                    <div class="address-wrap d-flex pb-3">
                        <i class="ri-map-pin-line"></i>
                        <p class="address-content">198 West 21th Street, Suite 721 New York, NY 10010</p>
                    </div>
                    <div class="tel-wrap d-flex pb-3">
                        <i class="ri-phone-line"></i>
                        <p class="address-content">+(123) 1234-567-8901</p>
                    </div>
                    <div class="mail-wrap d-flex">
                        <i class="ri-mail-line"></i>
                        <p class="address-content">wilmer@qodeinteractive.com</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                <div class="address-header pb-4">
                        <h3>Office in India</h2>
                    </div>
                    <div class="address-wrap d-flex pb-3">
                        <i class="ri-map-pin-line"></i>
                        <p class="address-content">198 West 21th Street, Suite 721 New York, NY 10010</p>
                    </div>
                    <div class="tel-wrap d-flex pb-3">
                        <i class="ri-phone-line"></i>
                        <p class="address-content">+(123) 1234-567-8901</p>
                    </div>
                    <div class="mail-wrap d-flex">
                        <i class="ri-mail-line"></i>
                        <p class="address-content">wilmer@qodeinteractive.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="map-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.389931907569!2d80.01665867464733!3d6.843769893154408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25224a42c3f53%3A0x431a53149ec28af5!2s577%20Pitipana%20-%20Thalagala%20Rd%2C%20Homagama!5e0!3m2!1sen!2slk!4v1716838121262!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                <?php
                    echo do_shortcode('[forminator_form id="148"]');
                ?>
                </div>
            </div>
        </div>
    </section>
</div>


<?php
get_footer();