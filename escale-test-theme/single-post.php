<?php get_header();

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    global $post;

    echo sanitize_text_field( get_post_meta( $post->ID, \eScale\Test\Post\PostMetaBox::text_meta_name, true ) );

endwhile; // End of the loop.


get_footer();