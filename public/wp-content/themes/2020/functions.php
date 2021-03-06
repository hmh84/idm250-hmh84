<?php
/**
 * This file will be the main place to add custom php code into your theme
 *
 * @link - https://codex.wordpress.org/Functions_File_Explained
 * @return void
 */

/**
 * Theme Requirements
 */
require get_template_directory() . '/lib/required.php';

/**
 * Theme initialization
 */
require get_template_directory() . '/lib/setup.php';

/**
 * Register custom post types
 */
require get_template_directory() . '/lib/custom-post-types.php';

// /**
//  * Register custom taxonomies
//  */

/**
 * ACF Setup
 */
require get_template_directory() . '/lib/acf.php';

// Remove Default Post Type

require get_template_directory() . '/lib/rdp.php';

add_filter('acf/settings/remove_wp_meta_box', '__return_false');