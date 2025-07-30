<?php 
/** 
* Template Name: FAQ Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="page-content faq-page">
    <section class="faq-hero-section">
    <div class="faq-background item overlay"
        style="background-image: url('<?php echo esc_url(get_field('faq_background_image')); ?>');">
        <div class="container">
            <div class="inner-box">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-7">
                        <div class="inner-col-1">
                            <div class="text-wrap">
                                <h1 class="heading"><?php echo esc_html(get_field('faq_heading')); ?></h1>
                                <p class="description"><?php echo esc_html(get_field('faq_description')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>


    <section class="faq-content">
    <div class="container">
        <div class="item-list px-0 px-lg-4 mt-4">
            <div class="class-accordion">
                <div class="accordion accordion-flush" id="accordionFAQa">

                    <?php if (have_rows('faq_items')) : ?>
                        <?php while (have_rows('faq_items')) : the_row(); ?>
                            <div class="accordion-item border-bottom">
                                <h2 class="accordion-header pt-2 pb-1 fw-normal" id="faqs_heading_<?php echo get_row_index(); ?>">
                                    <button class="accordion-button pb-2 pt-2 mt-0 mb-0 pb-md-2 mb-md-2 pt-md-2 mt-md-2 collapsed"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqs_collapse_<?php echo get_row_index(); ?>"
                                        aria-expanded="false" aria-controls="faqs_collapse_<?php echo get_row_index(); ?>">
                                        <?php the_sub_field('faq_question'); ?>
                                    </button>
                                </h2>
                                <div id="faqs_collapse_<?php echo get_row_index(); ?>" class="accordion-collapse collapse"
                                    aria-labelledby="faqs_heading_<?php echo get_row_index(); ?>" data-bs-parent="#accordionFAQa">
                                    <div class="accordion-body pb-2 mb-2 fs-6"><?php the_sub_field('faq_answer'); ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    </section>


</div>


<?php
get_footer();