<?php 
/** 
* Template Name: Web Dev Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="page-content web-page">
    <section class="web-hero-section ">
        <div class="web-background item overlay"
            style="background-image: url('http://localhost/echorich/wp-content/uploads/2024/02/contact-us-img-01.jpg');">
            <div class="container">
                <div class="web-hero-content">
                    <div class="text-wrap">
                        <h1 class="heading">Results Driven Digital Marketing Services</h1>
                    </div>
                </div>
            </div>
        
            <div class="hero-service">
                <div class="container-fluid p-0">
                    <div class="row g-0">
                        <div class="col-12 col-md-4">
                            <div class="hero-service-box">
                                <p>Web Design <br>UI/UX</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="hero-service-box">
                                <p>Web <br>Development</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="hero-service-box">
                                <p>Web <br>Maintenance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="crative-studio-section">
        <div class="container">
            <div class="crative-studio-header pb-4">
                <h2>WEB DEVELOPMENT</h2>
            </div>
            <div class="crative-studio-content">
                <p>
                   Your website is like your business’s digital storefront, and MIEZ’s Web services ensure it’s inviting, functional, and ready to impress.They’re pros at building and maintaining websites that not only look excellent but also work seamlessly to support your goals.
                </p>
            </div>

            <div class="crative-studio-body">
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-4">
                    <div class="col media-item">
                        <div class="card h-100 card-wrap branding">
                            <div class="card-head-wrapper">
                                <h2>Web Design UI/UX</h2>
                            </div>
                            <div class="card-body body-wrap">
                                <div class="top-content">
                                    <div class="description-wrap">
                                       MIEZ creates user-friendly, visually appealing web designs with intuitive UI/UX. Using research, wireframes, and responsive...
                                    </div>
                                </div>
                                <div class="action-wrap">
                                    <a href="" class="action" aria-label="Learn more">
                                        Learn More Info
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col media-item">
                        <div class="card h-100 card-wrap photography">
                            <div class="card-head-wrapper">
                                <h2>Web Development</h2>
                            </div>
                            <div class="card-body body-wrap">
                                <div class="top-content">
                                    <div class="description-wrap">
                                        MIEZ builds fast, secure, and scalable websites using technologies like React, Angular, and Node.js. Their full-stack expertise...
                                    </div>
                                </div>
                                <div class="action-wrap">
                                    <a href="" class="action" aria-label="Learn more">
                                        Learn More Info
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col media-item">
                        <div class="card h-100 card-wrap design">
                            <div class="card-head-wrapper">
                                <h2>Web Maintenance</h2>
                            </div>
                            <div class="card-body body-wrap">
                                <div class="top-content">
                                    <div class="description-wrap">
                                        MIEZ ensures websites stay reliable with updates, security enhancements, and performance optimization. Their...
                                    </div>
                                </div>
                                <div class="action-wrap">
                                    <a href="" class="action" aria-label="Learn more">
                                        Learn More Info
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


<?php
get_footer();