<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://archivescode.com/about-us
 * @since      1.0.0
 *
 * @package    Union_addons
 * @subpackage Union_addons/Skin_Init
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Union_addons
 * @subpackage Union_addons/Skin_Init
 * @author     Archivescode <archivescode@gmail.com>
 */

use ElementorPro\Modules\Posts\Skins\Union_Skin_Archive;
use ElementorPro\Modules\Posts\Skins\Union_Skin_Posts;

class Skin_Init{

	// instance container
	private static $instance = null;
	
	public function __construct(){	
		require_once UNION_ADDONS_PATH.'skins/dynamic-tags/union-tags.php';	

		$newtags = new ElementorPro\Modules\DynamicTags\Uniontags();
		$newtags::instance();

		$this->register_skin_post();
		$this->register_skin_archive();


	}

	/**
     * Singleton instance
     *
     * @since 1.0.0
     */
    public static function instance()
    {
        if (self::$instance == null) {
            self::$instance = new self;
        }

        return self::$instance;
	}
	
	public function register_skin_post(){

		require_once UNION_ADDONS_PATH.'skins/widgets/post-skin.php';
		add_action( 'elementor/widget/posts/skins_init', function( $widget ) {
			$widget->add_skin( new Union_Skin_Posts( $widget ) );
		} );

	}

	public function register_skin_archive(){
		require_once UNION_ADDONS_PATH.'skins/widgets/archive-skin.php';
		add_action( 'elementor/widget/archive-posts/skins_init', function( $widget ) {
			$widget->add_skin( new Union_Skin_Archive( $widget ) );
		 } );

	}
}