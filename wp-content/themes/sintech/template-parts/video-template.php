<?php 
/** 
* Template Name: Video Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="page-content video-page">
    <section class="video-hero-section ">
        <div class="hero-background item overlay"
            style="background-image: url('http://localhost/echorich/wp-content/uploads/2024/02/contact-us-img-01.jpg');">
            <div class="container">
                <div class="inner-box">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-7">
                            <div class="inner-col-1">
                                <div class="text-wrap">
                                    <h1 class="heading">See Our Videos</h1>
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

    <section class="video-section">
        <div class="container">
        <div class="card-wrap">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        $video_urls = array(
            "https://www.youtube.com/embed/XRujiSXZX3c",
            "https://www.youtube.com/embed/h3SoIZ4xUM8",
            "https://www.youtube.com/embed/MpB_VTpGcc0"
            // Add more video URLs as needed
        );
        ?>
        <?php foreach ($video_urls as $url) : ?>
        <div class="col">
            <div class="card bottom-border">
                <div class="card-wrap">
                    <iframe width="100%" height="300" src="<?php echo $url; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

        </div>
    </section>

</div>


<?php
get_footer();