<?php
/**
 * Fired during plugin activation
 *
 * @link       https://archivescode.com
 * @since      1.0.4
 *
 * @package    Union_Addons
 * @subpackage Union_Addons/extentions
 */

defined( 'ABSPATH' ) || die();

class Union_Extensions_Manager {

    /**
     * Initialize
     */
    public static function init() {

        if(defined('ELEMENTOR_VERSION')){

            // wrapper link
            include_once UNION_ADDONS_PATH . 'extensions/union-wrapper-link.php';
            // css transfrom and loop effects
            include_once UNION_ADDONS_PATH . 'extensions/union-effects.php';

        }

	}

}

Union_Extensions_Manager::init();
