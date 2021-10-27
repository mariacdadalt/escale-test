<?php get_header();

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    global $post;

endwhile; // End of the loop.


get_footer();