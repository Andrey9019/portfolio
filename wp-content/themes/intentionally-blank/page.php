<?php get_header(); ?>

<div id="page">

    <?php

    while (have_posts()):
        the_post(); ?>
        <?php the_content() ?>
    <?php endwhile; //end of the loop

    get_template_part("content")
    ?>

</div><!-- #page -->

<?php get_footer(); ?>