<?php
/*
 * Template Name: Product
 * Template Post Type: post
*/
get_header();
if (have_posts()) :
    while (have_posts()) : the_post();             
        ?>
        <div class="container mt-5 pt-5">
            <h1><?php the_title(); ?></h1>
        </div>
        <?php
    endwhile;
else :
    echo '<p>No content found</p>';
endif;
get_footer();
?>