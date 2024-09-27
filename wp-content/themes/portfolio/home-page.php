<?php
/*
Template Name: Home Page
Template Post Type: page
*/

get_header();

if (have_posts()):
    while (have_posts()) :
        the_post();

        the_content();
    endwhile;
endif;

$post_projects = get_posts(array(
    'post_type' => 'project',
    'posts_per_page' => 3,
    'orderby' => 'id',
    'order' => 'DESC'
));

foreach ($post_projects as $post):
    setup_postdata($post);
?>
    <div class="col-3">
        <h1><?php the_title(); ?></h1>
        <h4>Project Single</h4>
        <?php the_content(); ?>
    </div>
<?php
endforeach;


get_footer();
