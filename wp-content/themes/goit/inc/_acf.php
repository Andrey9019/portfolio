<?php

add_action('acf/init', 'register_bloks');

function register_bloks()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'hero',
            'title' => __('Hero'),
            'description' => __('Hero block'),
            'render_template' => 'blocks/home-page/hero.php',
            'category' => 'goit-blocks',
            'icon' => 'admin-generic',
            'enqueue_style' => get_template_directory_uri() . '/assets/scss/app.min.css',
            'keywords' => array('hero', 'hero block'),
        ));

        acf_register_block_type(array(
            'name' => 'skills',
            'title' => __('Skills'),
            'description' => __('Skills block'),
            'render_template' => 'blocks/home-page/skills.php',
            'category' => 'goit-blocks',
            'icon' => 'admin-tools',
            'enqueue_style' => get_template_directory_uri() . '/assets/scss/app.min.css',
            'keywords' => array('skills', 'skills block', 'icons'),
        ));

        acf_register_block_type(array(
            'name' => 'portfolio',
            'title' => __('Portfolio'),
            'description' => __('Portfolio block'),
            'render_template' => 'blocks/home-page/portfolio.php',
            'category' => 'goit-blocks',
            'icon' => 'portfolio',
            'enqueue_style' => get_template_directory_uri() . '/assets/scss/app.min.css',
            'keywords' => array('portfolio', 'portfolio block', 'icons'),
        ));

        acf_register_block_type(array(
            'name' => 'projects',
            'title' => __('Projects'),
            'description' => __('Projects block'),
            'render_template' => 'blocks/projects-page/projects.php',
            'category' => 'goit-blocks',
            'icon' => 'portfolio',
            'enqueue_style' => get_template_directory_uri() . '/assets/scss/app.min.css',
            'keywords' => array('projects', 'projects block'),
        ));

        acf_register_block_type(array(
            'name' => 'contact',
            'title' => __('Contact'),
            'description' => __('Contact block'),
            'render_template' => 'blocks/contact-page/contact.php',
            'category' => 'goit-blocks',
            'icon' => 'contact',
            'enqueue_style' => get_template_directory_uri() . '/assets/scss/app.min.css',
            'keywords' => array('contact', 'contact block'),
        ));
    }
}
