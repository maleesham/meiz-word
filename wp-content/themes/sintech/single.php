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

<div class="page-content single-page">

    <!-- Hero section -->
    <section class="hero">
        <?php while (have_rows('hero_thumbnail_image')): the_row(); ?>
        <div class="bg-img-wrapper">
            <?php $postDeskTop = get_sub_field('thumbnail'); if (!empty($postDeskTop)): ?>
            <img class="image img-fluid" src="<?php echo esc_url($postDeskTop['url']); ?>"
                alt="<?php echo esc_attr($postDeskTop['alt']); ?>" loading="lazy" decoding="async" role="presentation">
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
        <div class="cotainer h-100">
            <div class="title-wrapper h-100">
                <h1 class="title h-100"><?php the_title(); ?></h1>
            </div>
        </div>

    </section>

    <!-- Post Content section -->
    <section class="post-content">
        <div class="container">
            <div class="body-content">
                <div class="feature-image">
                    <?php while (have_rows('hero_thumbnail_image')): the_row(); ?>
                    <?php $postFeature = get_sub_field('blog_image'); if (!empty($postFeature)): ?>
                    <img class="image img-fluid" src="<?php echo esc_url($postFeature['url']); ?>"
                        alt="<?php echo esc_attr($postFeature['alt']); ?>" loading="lazy" decoding="async"
                        role="presentation">
                    <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <div class="post-meta">
                    <?php
                    while ( have_posts() ) : the_post();?>
                    <div class="author point"><i class="ri-user-star-line"></i> <span>
                            by <?php the_author(); ?></span></div>
                    <div class="publish-date point"><i class="ri-calendar-line"></i><span>
                            <?php the_date(); ?></span></div>

                    <?php
                    if ( has_tag() ) :
                        ?>
                    <div class="post-tags point">
                        <i class="ri-hashtag"></i>
                        <span><?php the_tags( '', ', ', '' ); ?></span>
                    </div>
                    <?php
                        endif;
                    endwhile;
                    ?>
                    <div class="inner-main-content">
                        <div class="top-description">
                            <?php the_field('description'); ?>
                        </div>
                        <?php while (have_rows('quot')): the_row(); ?>
                        <div class="quot-wrap">
                            <div class="icon-wrap">
                                <i class="<?php the_sub_field('icon'); ?> main-icon"></i>
                            </div>
                            <p class="quot-content">
                                <?php the_sub_field('quot_wrap'); ?>
                            </p>
                            <h3 class="author-name">
                                <span class="name"> <?php the_sub_field('author_name'); ?></span>
                                <span>Author</span>
                            </h3>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <div class="bottom-description">
                        <?php the_field('bottom_description'); ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="page-actions">
            <?php
                        // Get the next and previous post objects
                        $next_post = get_adjacent_post(false, '', false);
                        $prev_post = get_adjacent_post(false, '', true);
                        ?>

            <?php if ($next_post || $prev_post) : ?>
            <div class="container">
                <div class="post-navigation">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="wrap left">
                                <?php if ($prev_post) : ?>
                                <h2 class="nav-label">Previous Post</h2>
                                <a class="link"
                                    href="<?php echo get_permalink($prev_post); ?>"><?php echo esc_html($prev_post->post_title); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 d-md-flex justify-content-end">
                            <div class="wrap right">
                                <?php if ($next_post) : ?>
                                <h2 class="nav-label">Next Post</h2>
                                <a class="link"
                                    href="<?php echo get_permalink($next_post); ?>"><?php echo esc_html($next_post->post_title); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
</div>
</section>

</div>


<?php
get_footer();