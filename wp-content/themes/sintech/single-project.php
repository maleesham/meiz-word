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

<div class="page-content single-project">

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

    <!-- Features section -->
    <section class="features">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="img-wrapper img-fluid">
                        <img class="image" src="<?php the_field('features_left_image'); ?>" alt="left" loading="lazy"
                            decoding="async" role="presentation">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="inner-content">
                        <h6 class="sub-title"><?php the_field('features_sub_title'); ?></h6>
                        <h2 class="title"><?php the_field('features_title'); ?></h2>

                        <div class="features-list">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <?php
                                if( have_rows('features_list') ):
                                    while( have_rows('features_list') ) : the_row(); ?>

                                <div class="col single-feature">
                                    <div class="card h-100">
                                        <div class="icon-wrapper">
                                            <img class="icon img-fluid" src="<?php the_sub_field('image'); ?>"
                                                alt="icon" loading="lazy" decoding="async" role="presentation">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?php the_sub_field('name'); ?></h5>
                                        </div>
                                    </div>
                                </div>

                                <?php endwhile;
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

        $terms = wp_get_post_terms($service_id, 'service-type');

        // Get term IDs
        $term_ids = array();
        foreach ($terms as $term) {
            $term_ids[] = $term->term_id;
        }

        $args = array(
            'post_type' => 'project',
            'posts_per_page' => 3, 
            'tax_query' => array(
                array(
                    'taxonomy' => 'service-type',
                    'field' => 'id',
                    'terms' => $term_ids,
                    'operator' => 'IN',
                ),
            ),
            'post__not_in' => array($service_id),
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