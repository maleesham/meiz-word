<?php 
/** 
* Template Name: Package Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="page-content package-page">
    <section class="package-hero-section ">
        <div class="package-background item overlay"
            style="background-image: url('https://facade.lk/wp-content/uploads/2024/02/contact-us-img-01.jpg');">
            <div class="container">
                <div class="inner-box">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="inner-col-1">
                                <div class="text-wrap">
                                    <h1 class="heading">Packages</h1>
                                    <p class="description">Etiam scelerisque tortor at lectus dapibus, nec fermentum
                                        diam feugiat.<br> Morbi rutrum magna et dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-cards">
        <div class="pricing-cards-header">
            
            <h2 class="main-title">Pricing</h2>
            <div class="sub-title-p">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error officiis esse excepturi sapiente consequatur quibusdam saepe nihil, recusandae praesentium reiciendis velit voluptate labore ratione ipsam, amet, quam cum ea? Minima!</p>
            </div>
        </div>
        <div class="container">
            <div class="row g-5">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="title">Standard</h3>
                        </div>
                        <ul class="pricing-content">
                            <li>5 Project Management Tools</li>
                            <li>24/7 Customer Support</li>
                            <li>Basic Analytics</li>
                            <li>Monthly Progress Reports</li>
                            <li>Email Notifications</li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a href="#">View More</a>
                        </div>
                        <div class="price-value">
                            <span class="amount">$9.99</span>
                            <span class="duration">full Package</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable business">
                        <div class="pricingTable-header business">
                            <h3 class="title">Business</h3>
                        </div>
                        <ul class="pricing-content">
                            <li>10 Project Management Tools</li>
                            <li>24/7 Customer Support</li>
                            <li>Advanced Analytics</li>
                            <li>Weekly Progress Reports</li>
                            <li>Email and SMS Notifications</li>
                        </ul>
                        <div class="pricingTable-signup business">
                            <a href="#">View More</a>
                        </div>
                        <div class="price-value">
                            <span class="amount">$19.99</span>
                            <span class="duration">full Package</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable premium">
                        <div class="pricingTable-header premium">
                            <h3 class="title">Premium</h3>
                        </div>
                        <ul class="pricing-content">
                            <li>Unlimited Project Management Tools</li>
                            <li>24/7 Dedicated Support</li>
                            <li>Comprehensive Analytics</li>
                            <li>Daily Progress Reports</li>
                            <li>Custom Notifications</li>
                        </ul>
                        <div class="pricingTable-signup premium">
                            <a href="#">View More</a>
                        </div>
                        <div class="price-value">
                            <span class="amount">$29.99</span>
                            <span class="duration">full Package</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>


<?php
get_footer();