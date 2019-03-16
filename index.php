<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

define('WP_USE_THEMES', true);
require_once(dirname(__FILE__) . '/vendor/autoload.php');
require(dirname(__FILE__) . '/wordpress/wp-blog-header.php');
