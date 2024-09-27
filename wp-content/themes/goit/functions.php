<?php
if (!defined('ABSPATH')) exit;

// Define constants
if (!defined('_VERSION')) {
	define('_VERSION', '1.0.0');
}

// Optimization
require get_template_directory() . '/inc/_optimization.php';

// Include styles and scripts
require get_template_directory() . '/inc/_scripts.php';

// Post types
require get_template_directory() . '/inc/_post-types.php';

// Register menus
require get_template_directory() . '/inc/_menus.php';

//ACF
require get_template_directory() . '/inc/_acf.php';

function theme_setup()
{
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_setup');
