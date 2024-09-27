<?php
add_action('wp_enqueue_scripts', 'portfolio_scripts');

function portfolio_scripts()
{
    //Styles
    wp_enqueue_style(
        'portfolio-style',
        get_template_directory_uri() . '/assets/scss/app.css',
        array(),
        _VERSION
    );

    //Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'portfolio-script',
        get_template_directory_uri() . '/assets/js/app.js',
        array(),
        _VERSION,
        true
    );
}
