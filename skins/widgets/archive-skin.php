<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://archivescode.com/about-us
 * @since      1.0.0
 *
 * @package    Union_Addons
 * @subpackage Union_Addons/skins/widgets/Union_Skin_Archive
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Union_Addons
 * @subpackage Union_Addons/skins/widgets/Union_Skin_Archive
 * @author     Archivescode <archivescode@gmail.com>
 */
 
namespace ElementorPro\Modules\Posts\Skins;

use ElementorPro\Modules\Posts\Skins\Union_Skin_Posts;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Union_Skin_Archive extends Union_Skin_Posts {

	private $template_cache=[];
	private $pid;

	protected function _register_controls_actions() {
		add_action( 'elementor/element/archive-posts/section_layout/before_section_end', [ $this, 'register_controls' ] );
		add_action( 'elementor/element/archive-posts/section_layout/after_section_end', [ $this, 'register_style_sections' ] );
  
    	add_action( 'elementor/element/archive-posts/'.$this->get_id().'_section_design_layout/after_section_end', array( $this, 'register_navigation_design_controls' ));
    	add_action( 'elementor/element/archive-posts/section_pagination/after_section_end', [ $this, 'register_navigation_controls' ] );
	}
	
	public function get_id() {
		return 'union-archive-skin';
	}

	public function get_title() {
		return __( 'Union Skin', 'union-addons' );
	}
	// remove posts_per_page controls
	protected function register_post_count_control(){}
} 
