<?php
/**
 * @package add-target-fixer
 * @version 0.0.03
 */
/*
 * Plugin Name: Add Target Fixer
 * Plugin URI: http://www.shortdark.net/wordpress-plugin/add-target-fixer/
 * Description: Fixes the security issue with target="_blank"
 * Author: Neil Ludlow
 * Text Domain: add-target-fixer
 * Version: 0.0.03
 * Author URI: http://www.shortdark.net/
 */

/**************************
 ** PREVENT DIRECT ACCESS
 **************************/

defined('ABSPATH') or die('No script kiddies please!');

if (!defined('WPINC')) {
	die ;
}

// Avoid direct calls to this file.
if (!function_exists('add_action')) {
	header('Status: 403 Forbidden');
	header('HTTP/1.1 403 Forbidden');
	exit();
}

/****************
 ** DEFINE
 ****************/

define('SDATF__PLUGIN_DIR', plugin_dir_path(__FILE__));

/**********************
 ** ASSEMBLE THE PAGE
 **********************/

// This assembles the plugin page.
function sdatf_add_target_fixer($content) {
	
	$pattern = '/< *a *([\w\s\d\/.?#,;@()&+%=:"~\[\]\-\']*) *target *= *["\']+([\w]*)["\']+ *([\w\s\d\/.?#,;@()&+%=:"~\[\]\-\']*)>/i';
	$replace_with = '<a $1 target=\'$2\' rel=\'noopener noreferrer\' $3>';
	$content = preg_replace($pattern, $replace_with, $content);

	return $content;
}

// Filter the content.
add_filter('the_content', 'sdatf_add_target_fixer');

/****************************
 ** LOAD PLUGIN TEXT DOMAIN
 ****************************/

function sdatf_load_textdomain() {
	load_plugin_textdomain('add-target-fixer', false, dirname(plugin_basename(__FILE__)) . '/languages');
}

add_action('init', 'sdatf_load_textdomain');
?>
