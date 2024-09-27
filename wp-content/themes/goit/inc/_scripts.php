<?php
add_action('wp_enqueue_scripts', 'portfolio_scritps');
function portfolio_scritps()
{
    // Styles
    wp_enqueue_style(
        'portfolio-style',
        get_template_directory_uri() . '/assets/scss/app.min.css',
        array(),
        _VERSION
    );
    // Підключення стилів для блоку навичок
    wp_enqueue_style(
        'hero-style',
        get_template_directory_uri() . '/blocks/home-page/hero.css',
        array(),
        _VERSION
    );

    // Підключення стилів для блоку навичок
    wp_enqueue_style(
        'skills-style',
        get_template_directory_uri() . '/blocks/home-page/skills.css',
        array(),
        _VERSION
    );
    // Підключення стилів для блоку portfolio

    wp_enqueue_style(
        'project-style',
        get_template_directory_uri() . '/blocks/home-page/portfolio.css',
        array(),
        _VERSION
    );

    // Підключення стилів для блоку contact

    wp_enqueue_style(
        'contact-style',
        get_template_directory_uri() . '/blocks/contact-page/contact.css',
        array(),
        _VERSION
    );
    //Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'portfolio-script',
        get_template_directory_uri() . '/assets/js/app.min.js',
        array(),
        _VERSION,
        true
    );
}

function theme_enqueue_styles()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
