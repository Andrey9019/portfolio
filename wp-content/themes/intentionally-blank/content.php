<!-- <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php
                the_title('<h1 class="entry-title">', '</h1>');

                the_content();
                //tags
                if (has_tag()) {
                    echo '<p class="tags">';
                    the_tags();
                    echo '</p>';
                }
                //categories
                if (has_category()) {
                    echo '<p class="categories">';
                    the_category();
                    echo '</p>';
                }
            ?>
        </article>
<?php    }
        }
?> -->

<?php
$posts = get_posts(array(
    'numberposts' => -1,
    'post_type' => 'post',
    'orderby' => 'data',
    'order' => 'DESC'
));

// var_dump($posts);

foreach ($posts as $post) {
    setup_postdata($post); ?>
    <article style="background: #f4f4f4; padding: 30px; margin-bottom: 30px;">
        <?php if (has_post_thumbnail()) { ?>
            <div style="float: left; margin-right: 20px;">
                <?php the_post_thumbnail('thumbnail'); ?>
            </div>
        <?php } ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
        <?php if (has_tag()) { ?>
            <p><?php the_tags(); ?></p>
        <?php } ?>
        <?php if (has_category()) { ?>
            <p><?php the_category(); ?></p>
        <?php } ?>

    </article>
<?php }


wp_reset_postdata();
