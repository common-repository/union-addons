<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://archivescode.com/about-us
 * @since      1.0.0
 *
 * @package    Union_Addons
 * @subpackage Union_Addons/skins/dynamic-tags/Uniontags
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Union_Addons
 * @subpackage Union_Addons/skins/dynamic-tags/Uniontags
 * @author     Archivescode <archivescode@gmail.com>
 */
namespace ElementorPro\Modules\DynamicTags;

use Elementor\Modules\DynamicTags\Module;
use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

require_once('tags/post-summary.php');

class Uniontags extends Module {

	public function __construct() {
		parent::__construct();
	}

	public function get_name() {
		return 'uniontags';
	}

	public function get_tag_classes_names() {
		return [
			'Union_Post_Summary',
		];
	}
  
}
