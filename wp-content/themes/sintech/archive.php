<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package base_theme
 */

get_header();
?>

<main id="primary" class="site-main pt-4 pb-4">


        <header class="page-header">
            <?php
    the_archive_title('<h1 class="page-title">', '</h1>');
    the_archive_description('<div class="archive-description">', '</div>');
    ?>
        </header>

        <?php 
if (have_posts()) : // Check if there are posts to display
    echo '<ul class="list-group list-group-flush">';
    while (have_posts()) : the_post(); // Loop through the posts
        ?>
        <li class="list-group-item">
            <a class="btn btn-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            (<?php echo get_post_type(); ?>)
        </li>
        <?php
    endwhile;
    echo '</ul>';
else :
    ?>
        <p>No posts found.</p>
        <?php
endif;
?>




</main><!-- #main -->

<?php
get_footer();