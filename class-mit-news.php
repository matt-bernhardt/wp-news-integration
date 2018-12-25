<?php
/**
 * Class that defines the widgets provided by this plugin.
 *
 * @package MIT News Integration
 * @since 0.2.0
 */

namespace mitlib;

/**
 * Defines the MIT News widget
 */
class MIT_News extends \WP_Widget {

	/**
	 * Constructor
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'   => 'news-integration-widget',
			'description' => __( 'Template class for plugin', 'plugintemplate' ),
		);
		parent::__construct( 'plugin-template', __( 'MIT News', 'plugintemplate' ), $widget_ops );
	}

	/**
	 * Widget() builds the output
	 *
	 * @param array $args See WP_Widget in Developer documentation.
	 * @param array $instance See WP_Widget in Developer documentation.
	 * @link https://developer.wordpress.org/reference/classes/wp_widget/
	 */
	public function widget( $args, $instance ) {
		$args     = null;
		$instance = null;
		echo '<p>This is the MIT News widget.</p>';
	}
}
