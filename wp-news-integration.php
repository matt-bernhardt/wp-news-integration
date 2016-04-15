<?php
/**
 * Plugin Name: MIT News Integration
 * Plugin URI: https://github.com/MITLibraries/wp-news-integration
 * Description: A plugin to enable integration between sites on a Wordpress network
 * Version: 0.1.0
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

// Don't call the file directly!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Defines the MIT News widget
 */
class MIT_News extends WP_Widget {

	/**
	 * Constructor
	 */
	function __construct() {
		$widget_ops = array(
			'classname' => 'news-integration-widget',
			'description' => __( 'Template class for plugin','plugintemplate' ),
		);
		parent::__construct( 'plugin-template', __( 'MIT News','plugintemplate' ), $widget_ops );
	}

	/**
	 * Widget() builds the output
	 *
	 * @param array $args See WP_Widget in Developer documentation.
	 * @param array $instance See WP_Widget in Developer documentation.
	 * @link https://developer.wordpress.org/reference/classes/wp_widget/
	 */
	function widget( $args, $instance ) {
		$args = null;
		$instance = null;
		echo '<p>This is the MIT News widget.</p>';
	}
}

/**
 * Registers base widget.
 */
function news_integration_register_template_widget() {
	register_widget( 'MIT_News' );
}
add_action( 'widgets_init', 'news_integration_register_template_widget' );
