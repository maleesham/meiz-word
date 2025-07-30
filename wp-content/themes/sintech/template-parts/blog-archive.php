<?php 
/** 
* Template Name: Blog Archive Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<main class="page-content blog-archive-page">


    <!-- Hero section -->
    <section class="hero">
        <div class="single-item">
            <div class="container">
                <div class="content-wrap">
                    <h1 class="title"><?php the_field('title'); ?></h1>
                </div>
            </div>
            <div class="img-wrapper">
                <!-- Desktop -->
                <img class="bg-image" src="<?php the_field('background_image'); ?>" alt="bg" loading="lazy"
                    decoding="async" role="presentation">
            </div>
        </div>
    </section>

    <!-- Main filter -->
    <section class="main-filter">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">
                        <div class="col">
                            <div class="form-group input-wrap">
                                <input type="text" id="reportSearch" class="form-control search-input"
                                    placeholder="Search..."
                                    value="<?php echo esc_attr( sanitize_text_field( $_GET['search'] ?? '' ) ); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="side-wrapper">
                        <div class="side-filter-wrap">
                            <div class="top-actions">
                                <!-- <p class="blog-post-count">0</p> -->
                                <select class="form-control Blog-sort-order">
                                    <option value="DESC">Newest Posts</option>
                                    <option value="ASC">Oldest Posts</option>
                                </select>
                            </div>
                            <div class="bottom-actions">
                                <!-- Clear Filters Button -->
                                <button class="btn btn-secondary blog-clear-filters">Clear Filters</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="post-wrapper mt-3">
                <div class="loading-animation" style="display: none;">Loading...</div>
                <div class="upper-row row">
                    <div class="col-12 col-md-8">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4" id="blog-container">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="side-widjet">
                            <div class="content-wrap">
                                <h3 class="side-title">Recent Posts</h3>
                                <ul class="post-wrap">
                                    <?php
                                        $recent_posts = wp_get_recent_posts(array(
                                            'numberposts' => 3,
                                            'post_status' => 'publish'
                                        ));
                                        foreach ($recent_posts as $post) : 
                                            $post_date = get_the_date('F j, Y', $post['ID']);?>
                                    <li class="single-item">
                                        <a class="link" href="<?php echo get_permalink($post['ID']); ?>">
                                            <div class="thumb-wrapper">
                                                <?php while (have_rows('hero_thumbnail_image', $post['ID'])): the_row(); ?>
                                                <?php $recentBlog = get_sub_field('thumbnail', $post['ID']); if (!empty($recentBlog)): ?>
                                                <img class="image img-fluid"
                                                    src="<?php echo esc_url($recentBlog['url']); ?>"
                                                    alt="<?php echo esc_attr($recentBlog['alt']); ?>" loading="lazy"
                                                    decoding="async" role="presentation">
                                                <?php endif; ?>
                                                <?php endwhile; ?>
                                            </div>
                                            <div class="inner-content">
                                                <p class="date">
                                                    <i class="ri-time-line"></i><span><?php echo $post_date; ?></span>
                                                </p>
                                                <h6 class="post-title"><?php echo $post['post_title']; ?></h6>
                                            </div>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="content-wrap">
                                <h3 class="side-title">Categories</h3>
                                <ul class="category-wrap">
                                    <?php
                                $terms = get_terms(array(
                                    'taxonomy' => 'service-type',
                                    'hide_empty' => true,
                                ));
                                foreach ($terms as $term) : ?>
                                    <li class="single-item">
                                        <a class="link" href="<?php echo get_term_link($term); ?>">
                                            <span class="name"><?php echo $term->name; ?></span>
                                            <span class="count">(<?php echo $term->count; ?>)</span></a>

                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>

                <div id="blogPagination" class="pagination" style="display: none;"></div>
            </div>
    </section>


</main>


<?php
get_footer();