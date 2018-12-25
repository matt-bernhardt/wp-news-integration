<?php
/**
 * Plugin Name: MIT News Integration
 * Plugin URI: https://github.com/MITLibraries/wp-news-integration
 * Description: A plugin to enable integration between sites on a WordPress network
 * Version: 0.2.0
 * Author: Matt Bernhardt
 * Author URI: https://github.com/matt-bernhardt
 * License: GPL2
 *
 * @package MIT News Integration
 * @author Matt Bernhardt
 * @link https://github.com/MITLibraries/wp-news-integration
 */

/**
 * MIT News Integration is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * MIT News Integration is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with MIT News Integration. If not, see {URI to Plugin License}.
 */

namespace mitlib;

// Don't call the file directly!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include the necessary classes.
require_once 'class-mit-news.php';

/**
 * Registers base widget.
 */
function news_integration_register_template_widget() {
	register_widget( 'mitlib\MIT_News' );
}
add_action( 'widgets_init', 'mitlib\news_integration_register_template_widget' );
