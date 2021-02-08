<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              #
 * @since             1.0.0
 * @package           Vue App Get Map Data
 *
 * @wordpress-plugin
 * Plugin Name:       Vue App Get Map Data
 * Plugin URI:        #
 * Description:       This takes your coordinates from WordPress and generates a Google Maps Data
 * Version:           1.0.0
 * Author:            Rocky
 * Author URI:        #
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       author-generator-vue
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 */
define('AUTHOR_GENERATOR_VUE', '1.0.0');

// Invoke Shortcode

function vue_google_maps() {
    // get Vue libs 
	wp_register_script('vue-app-vendors',  plugins_url('app/dist/js/chunk-vendors.js', __FILE__), array(), '1.0.0');
	wp_register_script('my-vue-app', plugins_url('app/dist/js/app.js', __FILE__), array('vue-app-vendors'), '1.0.0');

	// pass the scripts to WP
	wp_enqueue_script('vue-app-vendors');
	wp_enqueue_script('my-vue-app');
    wp_enqueue_style('my-vue-app',  plugins_url('app/dist/css/app.css', __FILE__),   array(),  '1.0.0');
    
    return '<div id="app"></div><p>ERASE ME AFTER TESTING</p>';

}


// TODO: Change this shortcode call sign

add_shortcode('generate-maps-vue', 'vue_google_maps');
