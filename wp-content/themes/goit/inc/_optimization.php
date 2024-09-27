<?php


function head_cleanup()
{

    remove_action('wp_head', 'feed_links_extra', 3); // Category Feeds
    // remove emoji
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('w_head', 'rsd_link'); // EditURI link
    remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer

}
add_action('init', 'head_cleanup');
