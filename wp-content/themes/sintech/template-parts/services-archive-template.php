<?php 
/** 
* Template Name: Services Archive Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<main class="page-content services-archive-page">

    <!-- Hero section -->
    <section class="hero">
        <div class="img-wrapper">
            <img class="bg-image" src="<?php the_field('hero_background_image'); ?>" alt="sdf" loading="lazy"
                decoding="async" role="presentation">
        </div>
        <div class="container">
            <div class="content-wrap">
                <h1 class="title">
                    <?php the_field('hero_title'); ?>
                </h1>
            </div>
        </div>
    </section>

    <!-- Service list section -->
    <section class="service-list">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                $args = array(
                    'post_type' => 'service', 
                    'order' => 'ASC',
                    'posts_per_page' => 15, 
                );

                $services_query = new WP_Query($args);

                if ($services_query->have_posts()) :
                    while ($services_query->have_posts()) : $services_query->the_post();
                        ?>
                <div class="col single-service">
                    <div class="card h-100 content-wrap">
                        <div class="card-head">
                            <?php while (have_rows('hero_thumbnail_image')): the_row(); ?>
                            <div class="img-wrapper">
                                <?php $postImg = get_sub_field('thumbnail'); if (!empty($postImg)): ?>
                                <img class="thumb-image img-fluid" src="<?php echo esc_url($postImg['url']); ?>"
                                    alt="<?php echo esc_attr($postImg['alt']); ?>" loading="lazy" decoding="async"
                                    role="presentation">
                            </div>
                            <?php endif; endwhile; ?>
                        </div>
                        <div class="card-body p-0">
                            <div class="top-content">
                                <h3 class="card-title"><?php the_title(); ?></h3>
                                <p class="description"><?php the_field('excerpt'); ?></p>
                            </div>

                            <div class="action-wrap">
                                <a href="<?php the_permalink(); ?>" class="link">
                                    <span>View Service</span>
                                    <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

                    endwhile;
                    wp_reset_postdata();
                else :
                    echo 'No services found.';
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Consultancy section -->
    <section class="consultancy">
        <div class="bg-img-wrapper">
            <img class="bg-image" src="<?php the_field('ac_background_image'); ?>" alt="sdf" loading="lazy"
                decoding="async" role="presentation">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="inner-content">
                        <div class="top-content">
                            <h6 class="sub-title"><?php the_field('ac_sub_title'); ?></h6>
                            <h2 class="title"><?php the_field('ac_title'); ?></h2>
                        </div>
                        <div class="accordion-wrap">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <?php
                                $first = true; 
                                if (have_rows('ac_list')) :
                                    while (have_rows('ac_list')) : the_row();
                                        $collapse_id = uniqid('flush-collapse');
                                        $collapse_class = $first ? 'show' : ''; 
                                        ?>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button <?php echo $collapse_class; ?>" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#<?php echo $collapse_id; ?>"
                                            aria-expanded="<?php echo $first ? 'true' : 'false'; ?>"
                                            aria-controls="<?php echo $collapse_id; ?>">
                                            <?php the_sub_field('name'); ?>
                                        </button>
                                    </h2>
                                    <div id="<?php echo $collapse_id; ?>"
                                        class="accordion-collapse collapse <?php echo $collapse_class; ?>"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <?php the_sub_field('description'); ?>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                        $first = false;
                                    endwhile;
                                else :
                                endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


</main>


<?php
get_footer();