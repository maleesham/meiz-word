<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package base_theme
 */

get_header();
?>

<div class="page-content single-service">

    <!-- Hero section -->
    <section class="hero">
        <div class="container">
            <h1 class="title"><?php the_title(); ?></h1>


            <div class="owl-carousel owl-theme service-img-carousel">
                <?php if( have_rows('related_images') ): ?>
                <?php
                 while( have_rows('related_images') ) : the_row(); ?>

                <div class="item single-image">
                    <div class="img-wrapper">
                        <img class="image img-fluid" src="<?php the_sub_field('image'); ?>" alt="service-image"
                            loading="lazy" decoding="async" role="presentation">
                    </div>
                </div>

                <?php endwhile;
                else : ?>
                <?php endif; ?>
            </div>

        </div>
    </section>

    <!-- Body content section -->
    <section class="content">
        <div class="container">
            <?php the_field('description'); ?>
        </div>
    </section>

    <!-- Sub sectors -->
    <section class="sub-sectors">
        <div class="container">
            <div class="content-wrap">
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <?php
                    if( have_rows('sub_sectors') ):
                        while( have_rows('sub_sectors') ) : the_row(); ?>

                    <div class="col single-sector">
                        <div class="card h-100 border-0">
                            <div class="img-wrapper">
                                <img class="image img-fluid" src="<?php the_sub_field('thumbnail'); ?>"
                                    alt="service-image" loading="lazy" decoding="async" role="presentation">
                            </div>
                            <div class="card-body inner-content">
                                <h3 class="title"><?php the_sub_field('title'); ?></h3>
                                <p class="description"><?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                    </div>

                    <?php endwhile;
                    else :
                    endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Consultancy section -->
    <section class="consultancy">
        <div class="bg-img-wrapper">
            <img class="bg-image" src="<?php the_field('consultancy_background_image'); ?>" alt="sdfbg" loading="lazy"
                decoding="async" role="presentation">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="inner-content">
                        <div class="top-content">
                            <h2 class="title"><?php the_field('consultancy_title'); ?></h2>
                        </div>
                        <div class="accordion-wrap">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <?php
                                $first = true; 
                                if (have_rows('consultancy_accordion_content')) :
                                    while (have_rows('consultancy_accordion_content')) : the_row();
                                        $collapse_id = uniqid('flush-collapse');
                                        $collapse_class = $first ? 'show' : ''; 
                                        ?>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button <?php echo $collapse_class; ?>" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#<?php echo $collapse_id; ?>"
                                            aria-expanded="<?php echo $first ? 'true' : 'false'; ?>"
                                            aria-controls="<?php echo $collapse_id; ?>">
                                            <?php the_sub_field('title'); ?>
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

    <!-- Related projects section -->
    <section class="related-projects">
        <div class="container">
            <?php
            $service_id = get_the_ID();

            // Get the taxonomy terms associated with the current service
            $terms = wp_get_post_terms($service_id, 'service-type');

            // Get term IDs
            $term_ids = array();
            foreach ($terms as $term) {
                $term_ids[] = $term->term_id;
            }

            // Query related projects based on the service type taxonomy
            $args = array(
                'post_type' => 'project',
                'posts_per_page' => 3, // Adjust the number of related projects to display
                'tax_query' => array(
                    array(
                        'taxonomy' => 'service-type',
                        'field' => 'id',
                        'terms' => $term_ids,
                        'operator' => 'IN',
                    ),
                ),
            );

            $related_projects_query = new WP_Query($args);

            if ($related_projects_query->have_posts()) :
                ?>
            <h2 class="title">Related Projects</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ">
                <?php
                    while ($related_projects_query->have_posts()) : $related_projects_query->the_post();  ?>
                <div class="col single-project">
                    <a href="<?php the_permalink(); ?>" class="link">
                        <div class="card h-100 border-0">
                            <?php while (have_rows('hero_thumbnail_image')): the_row(); ?>
                            <?php $toolsCardImg = get_sub_field('thumbnail'); if (!empty($toolsCardImg)): ?>
                            <img class="bg-image img-fluid" src="<?php echo esc_url($toolsCardImg['url']); ?>"
                                alt="<?php echo esc_attr($toolsCardImg['alt']); ?>" loading="lazy" decoding="async"
                                role="presentation">
                            <?php endif; endwhile; ?>
                            <div class="card-body px-0">
                                <p class="project-date"><?php echo get_the_date(); ?></p>
                                <h5 class="card-title"><?php the_title(); ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                    endwhile;
                    ?>
            </div>
            <?php
                wp_reset_postdata();
            else :
                echo 'No related projects found.';
            endif;
            ?>

        </div>
    </section>

</div>


<?php
get_footer();