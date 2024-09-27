<?php
if (!defined('ABSPATH')) exit; // exit if accessed direc

//define constants
if (!defined('_VERSION')) {
    define('_VERSION', '1.0.0');
}

// include styles and scripts
require get_template_directory() . '/inc/_custom.php';


// Post types

require get_template_directory() . '/inc/_post-types.php';
