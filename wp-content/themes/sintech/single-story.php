<?php 
/** 
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="page-content single-story">
    <div class="single-story-wrapper">
        <div class="post-thumbnail-image" style="background-image:url('<?php the_field('single_page_image', $post->ID); ?>')">
        </div>
        <div class="post-content">
            <div class="title-area">
                <div class="date"><span><?php the_time('F j, Y'); ?></span></div>
                <h3 class="title"><?php the_title(); ?></h3>
            </div>
            <div class="post-body">
                <p><?php the_content(); ?></p>
            </div>

            <div class="line"></div>
        </div>


        <?php 
        	$contents = array( 'post_type' => 'story','posts_per_page' => 3,  'order'=> 'ASC', 'orderby' => 'publish_date', 'offset' => 5,   'paged' => $paged, );
        	$temp = $wp_query1;
        	$wp_query1 = null;
        	$wp_query1 = new WP_Query( $contents );
        	$wp_query1 ->query( $contents );
    	?>

        <div class="container-fluid latets-post">
            <div class="row">
                <?php  while ($wp_query1->have_posts()) :$wp_query1->the_post(); ?>
                <div class="col-sm-6 col-md-6 col-lg-4 story-box">
                    <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full' ); ?>
                    <div class="story-image" style="background-image:url('<?php echo $featured_image[0]; ?>');">
                    </div>
                    <div class="content-wrap">
                        <h6><?php the_title(); ?></h6>
                        <div class="short-detail">
                            <p><?php echo wp_trim_words( get_the_content() , 15 ); ?></p>
                        </div>
                        <a class="read-more" href="<?php the_permalink($post->ID); ?>">Read More</a>
                    </div>
                </div>
                <?php endwhile;wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();