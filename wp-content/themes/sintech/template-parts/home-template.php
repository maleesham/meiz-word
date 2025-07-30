<?php 
/** 
* Template Name: Home Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-white fw-bold">Results Driven Digital<br>Marketing Services</h1>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="features">
  <div class="container-fluid p-0">
    <div class="row g-0">
      <div class="col-6 col-md-2 col-lg">
        <div id="feature-box1" class="h-100 d-flex flex-column justify-content-center align-items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature1.png" alt="Feature1" class="img-fluid mb-3" style="max-width: 50px;">
          <p class="text-white mb-0">Innovative Solutions</p>
        </div>
      </div>
      <div class="col-6 col-md-2 col-lg">
        <div id="feature-box2" class="h-100 d-flex flex-column justify-content-center align-items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature2.png" alt="Feature2" class="img-fluid mb-3" style="max-width: 50px;">
          <p class="text-white mb-0">AI Driven Agency</p>
        </div>
      </div>
      <div class="col-6 col-md-2 col-lg">
        <div id="feature-box3" class="h-100 d-flex flex-column justify-content-center align-items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature2.png" alt="feature3" class="img-fluid mb-3" style="max-width: 50px;">
          <p class="text-white mb-0">Tailor-made Strategies</p>
        </div>
      </div>
      <div class="col-6 col-md-2 col-lg">
        <div id="feature-box4" class="h-100 d-flex flex-column justify-content-center align-items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature2.png" alt="feature4" class="img-fluid mb-3" style="max-width: 50px;">
          <p class="text-white mb-0">Experienced Team</p>
        </div>
      </div>
      <div class="col-6 col-md-2 col-lg">
        <div id="feature-box5" class="h-100 d-flex flex-column justify-content-center align-items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature2.png" alt="feature5" class="img-fluid mb-3" style="max-width: 50px;">
          <p class="text-white mb-0">Best Workplace</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="about">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 text-center">
        <h3 class="text-warning fw-bold mb-4">MIEZ</h3>
        <div class="only mb-4">
          <div id="typing-text" class="h2 text-dark fw-medium"></div>
        </div>
        <p class="lead text-muted mb-4">We transform brands into digital leaders by combining smart strategies and creative thinking.
        Our goal is to help your brand thrive in the digital world. We want to become the best AI-driven digital and creative agency.
        Join us on a journey where innovation and excellence meet to elevate your brand.
        </p>
        <hr class="mx-auto" style="width: 100px; border: 2px solid #ed9827;">
        <h2 class="h2 fw-bold text-dark text-uppercase mt-4">WHAT WE DO</h2>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="services">
  <div class="row g-3">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="box h-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 fw-bold text-white mb-3">SMO</h1>
        <p class="text-white mb-4">Social Media Marketing</p>
        <a href="<?php echo get_permalink(get_page_by_path('social-media-marketing')); ?>" class="find-more text-white text-decoration-none fw-medium">Find more...</a>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="box h-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 fw-bold text-white mb-3">SEO</h1>
        <p class="text-white mb-4">Search Engine Optimization</p>
        <a href="<?php echo get_permalink(get_page_by_path('search-engine-optimization')); ?>" class="find-more text-white text-decoration-none fw-medium">Find more...</a>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="box h-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 fw-bold text-white mb-3">CRO</h1>
        <p class="text-white mb-4">Conversion Rate Optimization</p>
        <a href="<?php echo get_permalink(get_page_by_path('conversion-rate-optimization')); ?>" class="find-more text-white text-decoration-none fw-medium">Find more...</a>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="box h-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 fw-bold text-white mb-3">WEB</h1>
        <p class="text-white mb-4">Web Development</p>
        <a href="<?php echo get_permalink(get_page_by_path('web-development')); ?>" class="find-more text-white text-decoration-none fw-medium">Find more...</a>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="box h-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 fw-bold text-white mb-3">AI</h1>
        <p class="text-white mb-4">AI Solutions</p>
        <a href="<?php echo get_permalink(get_page_by_path('ai-solutions')); ?>" class="find-more text-white text-decoration-none fw-medium">Find more...</a>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="box h-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 fw-bold text-white mb-3">DATA</h1>
        <p class="text-white mb-4">Data Analytics</p>
        <a href="<?php echo get_permalink(get_page_by_path('data-analytics')); ?>" class="find-more text-white text-decoration-none fw-medium">Find more...</a>
      </div>
    </div>
  </div>
</section>

<!-- Toolbar Section -->
<div class="logo-bar">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12">
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tools/google.png" alt="Google" class="img-fluid" style="max-height: 60px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tools/meta.png" alt="Meta" class="img-fluid" style="max-height: 60px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tools/linkedInad.png" alt="LinkedInad" class="img-fluid" style="max-height: 60px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tools/googlead.png" alt="Googlead" class="img-fluid" style="max-height: 60px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tools/yandexlogo.png" alt="Yandexlogo" class="img-fluid tool-l" style="max-height: 80px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tools/semrush.png" alt="Semrush" class="img-fluid" style="max-height: 60px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tools/yandexpartner.png" alt="Yandexpartner" class="img-fluid" style="max-height: 60px;">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Portfolio Section -->
<section class="pbody">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-3">
        <div class="sidebar h-100">
          <!-- Portfolio sidebar content -->
        </div>
      </div>
      <div class="col-12 col-lg-9">
        <div class="content">
          <div class="row g-4">
            <div class="col-12 col-md-6">
              <div class="cardp h-100">
                <!-- Portfolio card 1 -->
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="cardp h-100">
                <!-- Portfolio card 2 -->
              </div>
            </div>
            <div class="col-12">
              <div class="card h-100">
                <!-- Portfolio card 3 -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Client Logo Section -->
<section class="clients-section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="clienttitle h2 fw-bold text-dark text-uppercase mb-5">OUR CLIENTS</h2>
        <div class="logo-section d-flex flex-wrap justify-content-center align-items-center gap-4 mb-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/cab.png" class="logo img-fluid" alt="cab" style="max-height: 80px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/nitco.png" class="logo img-fluid" alt="Nitco" style="max-height: 80px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/odiliya.png" class="logo img-fluid" alt="Odiliya" style="max-height: 80px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/mas.png" class="logo img-fluid" alt="Mas" style="max-height: 80px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/turbo.png" class="logo img-fluid" alt="Turbo" style="max-height: 80px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/mycar.png" class="logo img-fluid" alt="Mycar" style="max-height: 80px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/epic.png" class="logo img-fluid" alt="Epic" style="max-height: 80px;">
        </div>
        <div class="logo-section d-flex flex-wrap justify-content-center align-items-center gap-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/odiliya.png" class="logo img-fluid" alt="Odiliya" style="max-height: 80px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/mas.png" class="logo img-fluid" alt="Mas" style="max-height: 80px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/cab.png" class="logo img-fluid" alt="Cab" style="max-height: 80px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/mycar.png" class="logo img-fluid" alt="Mycar" style="max-height: 80px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/epic.png" class="logo img-fluid" alt="Epic" style="max-height: 80px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/nitco.png" class="logo img-fluid" alt="Nitco" style="max-height: 80px;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/turbo.png" class="logo img-fluid" alt="Turbo" style="max-height: 80px;">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Case Study Section -->
<div class="whole">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="h1 fw-bold text-dark text-uppercase mb-5">CASE STUDY</h1>
        <div class="case-studies">
          <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-12 col-lg-4">
              <div class="card h-100 rounded-4 overflow-hidden position-relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/csimages/nitko.png'); min-height: 400px;">
                <div class="card-body d-flex flex-column justify-content-between text-white p-4">
                  <div class="metrics">
                    <div class="d-flex align-items-center mb-3">
                      <div class="rates d-flex align-items-center">
                        <div class="value_reach">
                          <div class="value h4 fw-bold mb-1">518.30%</div>
                          <div class="reachv small opacity-75">Reach</div>
                        </div>
                        <div class="ms-2">↑</div>
                      </div>
                    </div>
                    <hr class="my-3 opacity-25">
                    <div class="value h4 fw-bold mb-1">174.40%</div>
                    <div class="reachv small opacity-75 mb-3">Followers</div>
                    <hr class="my-3 opacity-25">
                    <div class="value h4 fw-bold mb-1">1.0K</div>
                    <div class="reachv small opacity-75">Content Interaction</div>
                  </div>
                  <div class="content">
                    <h2 class="titlee h5 fw-bold mb-3">Digital Marketing</h2>
                    <p class="mb-2">Solution for the Nitco Infinity<br>Interior Design Company</p>
                    <p class="caption small opacity-75">Learn how we helped the Nitco Infinity<br>increase Brand awareness & Conversion</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-lg-4">
              <div class="card h-100 rounded-4 overflow-hidden position-relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/csimages/pj.png'); min-height: 400px;">
                <div class="card-body d-flex flex-column justify-content-between text-white p-4">
                  <div class="metrics">
                    <div class="value h4 fw-bold mb-1">518.30%</div>
                    <div class="reachv small opacity-75 mb-2">Reach</div>
                    <div class="mb-2">↑</div>
                    <hr class="my-3 opacity-25">
                    <div class="value h4 fw-bold mb-1">174.40%</div>
                    <div class="reachv small opacity-75 mb-3">Followers</div>
                    <hr class="my-3 opacity-25">
                    <div class="value h4 fw-bold mb-1">1.0K</div>
                    <div class="reachv small opacity-75">Content Interaction</div>
                  </div>
                  <div class="content">
                    <h2 class="titlee h5 fw-bold mb-3">Digital Marketing</h2>
                    <p class="mb-2">Solution for the Nitco Infinity<br>Interior Design Company</p>
                    <p class="caption small opacity-75">Learn how we helped the Nitco Infinity<br>increase Brand awareness & Conversion</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-lg-4">
              <div class="card h-100 rounded-4 overflow-hidden position-relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/csimages/marine.png'); min-height: 400px;">
                <div class="card-body d-flex flex-column justify-content-between text-white p-4">
                  <div class="metrics">
                    <div class="value h4 fw-bold mb-1">518.30%</div>
                    <div class="reachv small opacity-75 mb-2">Reach</div>
                    <div class="mb-2">↑</div>
                    <hr class="my-3 opacity-25">
                    <div class="value h4 fw-bold mb-1">174.40%</div>
                    <div class="reachv small opacity-75 mb-3">Followers</div>
                    <hr class="my-3 opacity-25">
                    <div class="value h4 fw-bold mb-1">1.0K</div>
                    <div class="reachv small opacity-75">Content Interaction</div>
                  </div>
                  <div class="content">
                    <h2 class="titlee h5 fw-bold mb-3">Digital Marketing</h2>
                    <p class="mb-2">Solution for the Nitco Infinity<br>Interior Design Company</p>
                    <p class="caption small opacity-75">Learn how we helped the Nitco Infinity<br>increase Brand awareness & Conversion</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<section class="contact-section">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6 mb-4 mb-lg-0">
        <div class="left">
          <h2 class="display-4 fw-bold text-white">
            Have a <br><span class="text-warning">project</span> you <br>like to <br><span class="text-warning">discuss?</span>
          </h2>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="right">
          <h3 class="form-heading h3 fw-bold text-dark mb-4">Say Hello</h3>
          <form class="needs-validation" novalidate>
            <div class="mb-3">
              <input type="text" class="form-control form-control-lg" placeholder="Name" required>
            </div>
            <div class="row mb-3">
              <div class="col-12 col-md-6 mb-3 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Email" required>
              </div>
              <div class="col-12 col-md-6">
                <input type="tel" id="mobile" class="form-control form-control-lg" placeholder="Mobile" required>
              </div>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control form-control-lg" placeholder="Brand/Company">
            </div>
            
            <div class="mb-4">
              <div class="custom-select-wrapper">
                <div class="custom-select" id="custom-select">
                  <div class="select-trigger form-control form-control-lg" id="placeholder">What are you looking for?</div>
                  <div class="options" id="options">
                    <div class="option">Social media marketing</div>
                    <div class="option">LinkedIn marketing</div>
                    <div class="option">Pay-Per-Click advertising (Google ADS campaign)</div>
                    <div class="option">Conversion Rate Optimization (CRO)</div>
                    <div class="option">Search Engine Optimization (SEO)</div>
                    <div class="option">Meta search marketing</div>
                    <div class="option">Content development</div>
                    <div class="option">Email marketing</div>
                    <div class="option">Digital marketing consultancy</div>
                    <div class="option">Web design (UI/UX)</div>
                    <div class="option">Web development</div>
                    <div class="option">Branding</div>
                    <div class="option">Photography</div>
                    <div class="option">Graphic design</div>
                    <div class="option">Videos & animations</div>
                    <div class="option">Booking System</div>
                    <div class="option">Invoicing System</div>
                    <button type="button" id="doneBtn" class="btn btn-warning w-100">Done</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-warning btn-lg px-5 py-3 fw-bold">SUBMIT</button>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
get_footer();
?>