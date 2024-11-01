<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://archivescode.com
 * @since      1.0.0
 *
 * @package    Union_Addons
 * @subpackage Union_Addons/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Union_Addons
 * @subpackage Union_Addons/admin
 * @author     Archivescode <archivescode@gmail.com>
 */
class Union_Addons_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		add_action( 'admin_notices', array( $this, 'admin_elementor_notice' ) );
		add_action( 'admin_notices', array( $this, 'admin_elementor_pro_notice' ) );
		//register costom skin post
		add_action( 'elementor/widgets/widgets_registered', array($this, 'register_skin' ));

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/union-addons-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/union-addons-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function admin_elementor_pro_notice(){
        
        Union_Helpers::union_elementor_pro_notice();
        
	}
	
	public function admin_elementor_notice(){

		Union_Helpers::union_elementor_notice();
       
	}
	
	public function register_skin(){
        
        if(defined('ELEMENTOR_PRO_VERSION')){
			require_once UNION_ADDONS_PATH . 'skins/skin-init.php';
			Skin_Init::instance();
        }  

	}

}
