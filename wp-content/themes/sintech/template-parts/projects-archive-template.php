<?php 
/** 
* Template Name: Project Archive Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<main class="page-content project-archive-page">


    <!-- Hero section -->
    <section class="hero">
        <div class="single-item">
            <div class="container">
                <div class="content-wrap">
                    <h6 class="sub-title"><?php the_field('sub_description'); ?></h6>
                    <h1 class="title"><?php the_field('title'); ?></h1>
                    <p class="description">
                        <?php the_field('sub_info'); ?>
                    </p>
                </div>
            </div>
            <div class="img-wrapper">
                <img class="bg-image" src="<?php the_field('hero_background_image'); ?>" alt="sdf" loading="lazy"
                    decoding="async" role="presentation">
            </div>
        </div>
    </section>

    <!-- Features section -->
    <section class="features">
        <div class="container">
            <div class="content-wrapper">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php
if( have_rows('abilities_list') ):
    while( have_rows('abilities_list') ) : the_row(); ?>

                    <div class="col single-feature">
                        <div class="card h-100 border-0">
                            <img class="icon" src="<?php the_sub_field('icon'); ?>" alt="feature" loading="lazy"
                                decoding="async" role="presentation">
                            <div class="card-body px-0">
                                <h5 class="card-title"><?php the_sub_field('title'); ?></h5>
                                <p class="description">
                                    <?php the_sub_field('info'); ?>
                                </p>
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

    <!-- Main filter -->
    <section class="main-filter">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-9">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        <?php 
                        function generate_taxonomy_dropdowns($custom_post_type, $ignored_taxonomies = array()) {
                            $taxonomies = get_object_taxonomies($custom_post_type, 'objects');
                        
                            foreach ($taxonomies as $taxonomy) :
                                if (in_array($taxonomy->name, $ignored_taxonomies)) {
                                    continue; // Skip ignored taxonomy
                                }
                                ?>
                        <div class="col">
                            <div class="form-group input-wrap">
                                <select id="taxonomy-select-<?php echo $taxonomy->name; ?>"
                                    class="form-control taxonomy-select">
                                    <option value="all">All Project</option>
                                    <?php 
                                            // Fetch all terms, including child terms
                                            $terms = get_terms(array('taxonomy' => $taxonomy->name, 'hide_empty' => false));
                                            $parent_terms = array_filter($terms, function($term) { return $term->parent === 0; });
                        
                                            foreach ($parent_terms as $parent_term) :
                                                echo '<option value="' . $parent_term->slug . '" class="is-parent"
                                                    data-term-id="' . $parent_term->term_id . '" data-parent-id="0">' . $parent_term->name . '</option>';
                                                // Display child terms under this parent
                                                foreach ($terms as $term) :
                                                    if ($term->parent === $parent_term->term_id) {
                                                        echo '<option value="' . $term->slug . '" class="is-child" data-term-id="' . $term->term_id . '"
                                                            data-parent-id="' . $parent_term->term_id . '">— ' . $term->name . '</option>';
                                                    }
                                                endforeach;
                                            endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <?php endforeach;
                        }
                        
                        // Example Usage with Ignored Taxonomy
                        $ignored_taxonomies = array(''); // Add your ignored taxonomy names here
                        generate_taxonomy_dropdowns('project', $ignored_taxonomies);
                        
                        ?>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="side-wrapper d-none">
                        <div class="side-filter-wrap">
                            <div class="top-actions">
                                <!-- <p class="report-post-count">0</p> -->
                                <select class="form-control Report-sort-order">
                                    <option value="DESC">Newest Posts</option>
                                    <option value="ASC">Oldest Posts</option>
                                </select>
                            </div>
                            <div class="bottom-actions">
                                <!-- Clear Filters Button -->
                                <button class="btn btn-secondary report-clear-filters">Clear Filters</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="post-wrapper mt-3">
                <div class="loading-animation" style="display: none;">Loading...</div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="reportPosts-container">
                </div>
                <div id="reportPagination" class="pagination" style="display: none;"></div>
            </div>
    </section>


</main>


<?php
get_footer();