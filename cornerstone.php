<?php
/**
 * Template Name: cornerstone
 */
get_header(); // Ensure this is present
if (have_posts()):
    while (have_posts()): the_post();
        the_content(); // This is crucial for Elementor
    endwhile;
endif;
get_footer(); // Ensure this is present
?>


