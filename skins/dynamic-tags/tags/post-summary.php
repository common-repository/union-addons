<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://archivescode.com/about-us
 * @since      1.0.0
 *
 * @package    Union_Addons
 * @subpackage Union_Addons/skins/dynamic-tags/tags/Post_Summary
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Union_Addons
 * @subpackage Union_Addons/skins/dynamic-tags/tags/Post_Summary
 * @author     Archivescode <archivescode@gmail.com>
 */

namespace ElementorPro\Modules\DynamicTags\Tags;

use Elementor\Controls_Manager;
use Elementor\Core\DynamicTags\Tag;
use ElementorPro\Modules\DynamicTags\Module;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Union_Post_Summary extends Tag {
	public function get_name() {
		return 'union-post-summary';
	}

	public function get_title() {
		return __( 'Post Summary', 'union-addons' );
	}

	public function get_group() {
		return Module::POST_GROUP;
	}

	public function get_categories() {
		return [ Module::TEXT_CATEGORY ];
	}
  
  	protected function _register_controls() {
		$this->add_control(
		'length',
		[
			'label'   => __( 'Length', 'union-addons' ),
			'type'    => Controls_Manager::NUMBER,
			'default' => 25,
			'min'     => 0,
			'max'     => 1000,
			'step'    => 1,
		]
		);
	}

	public function render() {
		add_filter( 'excerpt_more',function(){return '';}, 20 );
		add_filter( 'excerpt_length', function(){$settings = $this->get_settings(); return $settings['length'];}, 20 ); 
			echo get_the_excerpt();
	}
}
