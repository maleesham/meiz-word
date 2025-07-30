<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base_theme
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>
        <?php wp_title( '-', true, 'right' ); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site-main">
        <!-- Navigation Bar -->
        <nav class="navbar fixed-top">
            <div class="container-fluid position-relative">
                <!-- Left Side - Hamburger Menu + Desktop Menu Items -->
                <div class="d-flex align-items-center">
                    <!-- Hamburger Menu (Visible on all screens) -->
                    <div class="navbar-toggler border-0 p-0 me-3" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="fas fa-bars fs-3 text-dark"></i>
                    </div>

                    <!-- Desktop Menu Items -->
                    <div class="d-none d-lg-flex align-items-center me-4 ms-4">
                        <a href="<?php echo get_permalink(get_page_by_path('digital')); ?>"
                            class="nav-link-desktop text-dark text-decoration-none fw-medium me-4">DIGITAL</a>
                        <a href="<?php echo get_permalink(get_page_by_path('web')); ?>"
                            class="nav-link-desktop text-dark text-decoration-none fw-medium me-4">WEB</a>
                        <a href="<?php echo get_permalink(get_page_by_path('products')); ?>"
                            class="nav-link-desktop text-dark text-decoration-none fw-medium">PRODUCTS</a>
                    </div>
                </div>

                <!-- Center - Logo (Absolute Positioned) -->
                <div class="navbar-brand position-absolute top-50 start-50 translate-middle">
                    <a href="<?php echo get_home_url(); ?>" class="text-decoration-none">
                        <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                            if ($logo) {
                                echo '<img src="' . esc_url($logo[0]) . '" alt="Logo" class="logoo img-fluid">';
                            } else {
                                echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.png" alt="Logo" class="logoo img-fluid" style="max-height: 38px; width: auto;">';
                            }
                        ?>
                    </a>
                </div>

                <!-- Right Side - Get Quote Button (Hidden on Mobile) -->
                <div class="d-none d-lg-block">
                    <button class="btn btn-warning fw-bold px-4 py-2"
                        style="background-color: #ed9827; border-color: #ed9827;">
                        GET QUOTE
                    </button>
                </div>
            </div>
        </nav>

        <!-- Offcanvas Menu -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="<?php echo get_home_url(); ?>">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium"
                            href="<?php echo get_permalink(get_page_by_path('digital')); ?>">DIGITAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium"
                            href="<?php echo get_permalink(get_page_by_path('web')); ?>">WEB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium"
                            href="<?php echo get_permalink(get_page_by_path('creative')); ?>">CREATIVE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium"
                            href="<?php echo get_permalink(get_page_by_path('products')); ?>">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium"
                            href="<?php echo get_permalink(get_page_by_path('solutions')); ?>">SOLUTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium"
                            href="<?php echo get_permalink(get_page_by_path('portfolio')); ?>">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium"
                            href="<?php echo get_permalink(get_page_by_path('case-studies')); ?>">CASE STUDIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium"
                            href="<?php echo get_permalink(get_page_by_path('about-us')); ?>">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium"
                            href="<?php echo get_permalink(get_page_by_path('blogs')); ?>">BLOGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium"
                            href="<?php echo get_permalink(get_page_by_path('contact-us')); ?>">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium"
                            href="<?php echo get_permalink(get_page_by_path('careers')); ?>">CAREERS</a>
                    </li>
                    <!-- Mobile Get Quote Button -->
                    <li class="nav-item d-lg-none mt-3">
                        <button class="btn btn-warning w-100 fw-bold"
                            style="background-color: #ed9827; border-color: #ed9827;">
                            GET QUOTE
                        </button>
                    </li>
                </ul>
            </div>
        </div>