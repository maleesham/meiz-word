<?php
/**
 * base_theme Theme Customizer
 *
 * @package base_theme
 */

//Theme Options

// Set up the WordPress Theme logo feature.
 add_theme_support( 'custom-logo' );

// Add support for responsive embedded content.
add_theme_support( 'responsive-embeds' );

//Enable support for Post Thumbnails on posts and pages.
add_theme_support( 'post-thumbnails' );

//Enable Menu
add_theme_support( 'menus' );

//Enable Tag
add_theme_support( 'title-tag' );

// Enable HTML5 markup for search form, comment form, and comments
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

// Enable support for post formats (e.g., video, audio)
add_theme_support('post-formats', array('video', 'audio'));

// Add excerpts to pages
add_post_type_support('page', 'excerpt');

// Enable automatic feed links (RSS)
add_theme_support('automatic-feed-links');

// Enable selective refresh for widgets in the customizer
add_theme_support('customize-selective-refresh-widgets');

// Enable support for wide and full-width alignment for blocks
// add_theme_support('align-wide');

//login page Styles
function enqueue_custom_login_styles() {
    wp_enqueue_style('custom-login-styles', get_template_directory_uri() . '/css/login-styles.css', array(), '1.0', 'all');
}
add_action('login_enqueue_scripts', 'enqueue_custom_login_styles');

// remove default editor
add_filter( 'use_block_editor_for_post', '__return_false' );

//Prevent self-pingbacks from your own site.
function disable_self_pingbacks($links) {
    foreach ($links as $l => $link)
        if (0 === strpos($link, get_option('home')))
            unset($links[$l]);
    return $links;
}
add_action('pre_ping', 'disable_self_pingbacks');

//Remove WordPress Version from Head: Enhance security
function remove_wp_version() {
    return '';
}
add_filter('the_generator', 'remove_wp_version');

// Remove WordPress Version from Dashboard Footer
function remove_wp_version_from_footer() {
    remove_filter('update_footer', 'core_update_footer');
}
add_action('admin_menu', 'remove_wp_version_from_footer');


//Add Custom Dashboard Footer Text:
function custom_dashboard_footer() {
    echo 'All Rights Reserved. Developed by <a target="_blank" href="https://blsthathsara.me/">Savindu Thathsara </a>';
}
add_filter('admin_footer_text', 'custom_dashboard_footer');


//acf option page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Setings',
		'menu_title'	=> 'Theme Setings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'position'      => 3,
		'redirect'		=> true
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Page options',
		'menu_title'	=> 'Page Options',
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer Settings',
		'parent_slug'	=> 'theme-general-settings',
	));
}


//View Sitemap function.
// Step 1: Add a Menu Item
function add_sitemap_menu_item() {
    add_menu_page(
        'View Sitemap',
        'View Sitemap',
        'manage_options',
        'view-sitemap',
        'view_sitemap_page'
    );
}
add_action('admin_menu', 'add_sitemap_menu_item');

// Step 2: Define the Page Callback Function
function view_sitemap_page() {
    ?>
<div class="wrap">
    <h2>View Sitemap</h2>
    <p>Below is a list of sitemap URLs for your site:</p>

    <?php
        // Get all registered post types, including custom post types
        $post_types = get_post_types(array('public' => true), 'objects');

        foreach ($post_types as $post_type) {
            echo '<h3>' . esc_html($post_type->label) . '</h3>';
            echo '<ul>';

            // Fetch all published items of the current post type
            $args = array(
                'post_type' => $post_type->name,
                'post_status' => 'publish',
                'posts_per_page' => -1,
            );

            $query = new WP_Query($args);

            while ($query->have_posts()) {
                $query->the_post();
                $item_url = get_permalink();

                echo '<li><a href="' . esc_url($item_url) . '">' . esc_html(get_the_title()) . '</a></li>';
            }

            wp_reset_postdata();

            echo '</ul>';
        }
        ?>
</div>
<?php
}
//End View Sitemap function.


/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string The filtered title.
 */
function theme_title( $title, $sep ) {
    if ( is_feed() ) {
        return $title;
    }
     
    global $page, $paged;
 
    // Add the blog name
    $title .= get_bloginfo( 'name', 'display' );
 
    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title .= " $sep $site_description";
    }
 
    // Add a page number if necessary:
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
        $title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
    }
    return $title;
}
add_filter( 'wp_title', 'theme_title', 10, 2 );


/**
* Register Custom Navigation Walker
**/
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

// Add Menu locations
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'base_theme'),
) );

// Change Login logo Icon
function my_login_logo() {
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

    if ($logo) {
        $logo_url = esc_url($logo[0]);
    } else {
        // If no logo is set, you can provide a default URL here
        $logo_url = get_stylesheet_directory_uri() . '/assets/images/default-logo.png';
    }
    ?>
<style type="text/css">
#login h1 a,
.login h1 a {
    background-image: url(<?php echo $logo_url; ?>);
    height: 34px;
    width: 100%;
    background-size: contain;
    background-repeat: no-repeat;
}
</style>
<?php
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Ajax Request
// Add searchbox function
function enqueue_custom_scripts() {
    wp_enqueue_script('theme', get_template_directory_uri() . '/theme.js', array('jquery'), '1.0', true);
  
    // Localize script with Ajax URL
    wp_localize_script('theme', 'mytheme_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// Project archive page filter start
function get_filtered_projects_posts_callback() {
    $selectedTerms = isset($_POST['selectedTerms']) ? $_POST['selectedTerms'] : array();
    $searchKeyword = isset($_POST['searchKeyword']) ? sanitize_text_field($_POST['searchKeyword']) : '';
    $paged = isset($_POST['paged']) ? $_POST['paged'] : 1;
    $postsPerPage = isset($_POST['postsPerPage']) ? intval($_POST['postsPerPage']) : 10;
    $date_range = isset($_POST['date_range']) ? explode(' to ', sanitize_text_field($_POST['date_range'])) : array();

    $tax_query = array('relation' => 'AND');
    foreach ($selectedTerms as $taxonomy => $term) {
        array_push($tax_query, array(
            'taxonomy' => $taxonomy,
            'field' => 'slug',
            'terms' => $term
        ));
    }

    $sortOrder = isset($_POST['sortOrder']) ? $_POST['sortOrder'] : 'DESC';

    $custom_post_type = 'project';
    $args = array(
        'post_type' => $custom_post_type,
        'posts_per_page' => $postsPerPage,
        'tax_query' => $tax_query,
        's' => $searchKeyword,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => $sortOrder,
    );
    
    // Get all taxonomies associated with a custom post type
    $taxonomies = get_object_taxonomies($custom_post_type); 

    if(count($date_range) === 2) {
        $args['date_query'] = array(
            array(
                'after'     => $date_range[0],
                'before'    => $date_range[1],
                'inclusive' => true,
            ),
        );
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        ob_start();
        // Calculate the correct starting value for the counter based on the current page and number of posts per page
        $counter = (($paged - 1) * $postsPerPage) + 1;
        while ($query->have_posts()) {
            $query->the_post();
            // Adjust the HTML output as per your requirement
            ?>
<div class="col media-item">
    <div class="card h-100 card-wrap">
        <div class="bg-img-wrapper">
            <?php while (have_rows('hero_thumbnail_image')): the_row(); ?>
            <?php $toolsCardImg = get_sub_field('thumbnail'); if (!empty($toolsCardImg)): ?>
            <img class="bg-image img-fluid" src="<?php echo esc_url($toolsCardImg['url']); ?>"
                alt="<?php echo esc_attr($toolsCardImg['alt']); ?>" loading="lazy" decoding="async" role="presentation">
            <?php endif; ?>
            <?php endwhile; ?>
            <h2 class="number"><?php echo sprintf('%02d', $counter); ?></h2>
        </div>
        <div class="card-body body-wrap">
            <div class="top-content">
                <?php 
                            // Loop through each taxonomy
                            foreach ($taxonomies as $taxonomy) {
                                $terms = get_the_terms(get_the_ID(), $taxonomy);

                                if ($terms && !is_wp_error($terms)) {
                                    $taxonomy_obj = get_taxonomy($taxonomy);
                                    $taxonomy_archive_link = get_term_link($taxonomy_obj->name, $taxonomy);
                                    ?>
                <ul class="categories">
                    <?php foreach ($terms as $term) : ?>
                    <li class="single-taxonomy"><?php echo esc_html($term->name); ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php
                                }
                            }
                            ?>

                <h5 class="card-title title"><?php the_title(); ?></h5>
                <div class="description-wrap"><?php the_field('excerpt'); ?></div>
            </div>

            <div class="action-wrap">
                <a href="<?php the_permalink(); ?>" class="action btn btn-secondary" aria-label="Learn more"
                    rel="noopener noreferrer">
                    View Project
                </a>
            </div>
        </div>
    </div>
    </a>
</div>
<?php
            $counter++; // Increment counter
        }
        $posts_html = ob_get_clean();
    } else {
        $posts_html = '<p>No posts found.</p>';
    }

    echo json_encode(array(
        'posts' => $posts_html,
        'totalPages' => $query->max_num_pages,
        'postCount' => $query->found_posts
    ));

    wp_reset_postdata();
    wp_die();
}
add_action('wp_ajax_get_filtered_projects_posts', 'get_filtered_projects_posts_callback');
add_action('wp_ajax_nopriv_get_filtered_projects_posts', 'get_filtered_projects_posts_callback');

// Create blog post filter function end


// Blog archive page filter start
function get_filtered_blog_posts_callback() {
    $selectedTerms = isset($_POST['selectedTerms']) ? $_POST['selectedTerms'] : array();
    $searchKeyword = isset($_POST['searchKeyword']) ? sanitize_text_field($_POST['searchKeyword']) : '';
    $paged = isset($_POST['paged']) ? $_POST['paged'] : 1;
    $postsPerPage = isset($_POST['postsPerPage']) ? intval($_POST['postsPerPage']) : 10;
    $date_range = isset($_POST['date_range']) ? explode(' to ', sanitize_text_field($_POST['date_range'])) : array();

    $tax_query = array('relation' => 'AND');
    foreach ($selectedTerms as $taxonomy => $term) {
        array_push($tax_query, array(
            'taxonomy' => $taxonomy,
            'field' => 'slug',
            'terms' => $term
        ));
    }

    $sortOrder = isset($_POST['sortOrder']) ? $_POST['sortOrder'] : 'DESC';

    $custom_post_type = 'post';
    $args = array(
        'post_type' => $custom_post_type,
        'posts_per_page' => $postsPerPage,
        'tax_query' => $tax_query,
        's' => $searchKeyword,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => $sortOrder,
    );
    
    // Get all taxonomies associated with a custom post type
    $taxonomies = get_object_taxonomies($custom_post_type); 

    if(count($date_range) === 2) {
        $args['date_query'] = array(
            array(
                'after'     => $date_range[0],
                'before'    => $date_range[1],
                'inclusive' => true,
            ),
        );
    }

    $query = new WP_Query($args);
    

    if ($query->have_posts()) {
        ob_start();
        while ($query->have_posts()) {
            $query->the_post();
            // Adjust the HTML output as per your requirement
            $post_date = get_the_date('j'); // Day without leading zeros
            $post_month = get_the_date('M'); // Short month name
            $post_year = get_the_date('Y'); // Year
            // Get 'service-type' taxonomy terms for the post
            $service_types = get_the_terms(get_the_ID(), 'service-type');

            ?>
<div class="col media-item">
    <div class="card h-100 card-wrap">
        <div class="bg-img-wrapper">
            <?php while (have_rows('hero_thumbnail_image')): the_row(); ?>
            <?php $toolsCardImg = get_sub_field('thumbnail'); if (!empty($toolsCardImg)): ?>
            <img class="bg-image img-fluid" src="<?php echo esc_url($toolsCardImg['url']); ?>"
                alt="<?php echo esc_attr($toolsCardImg['alt']); ?>" loading="lazy" decoding="async" role="presentation">
            <?php endif; ?>
            <?php endwhile; ?>
        </div>

        <div class="card-body body-wrap">
            <div class="date-wrap">
                <span class="date"><?php echo $post_date; ?></span>
                <span class="month"><?php echo $post_month; ?></span>
                <span class="year"><?php echo $post_year; ?></span>
            </div>
            <div class="top-content">
                <div class="categories">
                    <?php if ($service_types) : ?>
                    <?php foreach ($service_types as $service_type) : ?>
                    <a href="<?php echo esc_url(get_term_link($service_type)); ?>"
                        class="single-category"><?php echo esc_html($service_type->name); ?></a>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <h5 class="card-title title"><?php the_title(); ?></h5>
                <div class="description-wrap"><?php the_field('excerpt'); ?></div>
            </div>

            <div class="action-wrap">
                <a href="<?php the_permalink(); ?>" class="action" aria-label="Learn more" rel="noopener noreferrer">
                    <span>Read more</span><i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>
    </div>
    </a>
</div>
<?php
                }
                $posts_html = ob_get_clean();
            } else {
                $posts_html = '<p>No posts found.</p>';
            }

            echo json_encode(array(
                'posts' => $posts_html,
                'totalPages' => $query->max_num_pages,
                'postCount' => $query->found_posts
            ));

            wp_reset_postdata();
            wp_die();
        }
add_action('wp_ajax_get_filtered_blog_posts', 'get_filtered_blog_posts_callback');
add_action('wp_ajax_nopriv_get_filtered_blog_posts', 'get_filtered_blog_posts_callback');
// Create blog post filter function end