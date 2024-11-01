<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://archivescode.com
 * @since             1.0.4.1
 * @package           Union_Addons
 *
 * @wordpress-plugin
 * Plugin Name:       Union Addons
 * Plugin URI:        https://archivescode.com/union-addons
 * Description:       Union Addons Plugin custom skin for Elementor Page Builder.
 * Version:           1.0.4.1
 * Author:            Archivescode
 * Author URI:        https://archivescode.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       union-addons
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'UNION_ADDONS_VERSION', '1.0.4.1' );
define('UNION_ADDONS_PATH', plugin_dir_path( __FILE__ ) );
define('UNION_ADDONS_URL', plugins_url( '/', __FILE__ ));

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-union-addons-activator.php
 */
function activate_union_addons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-union-addons-activator.php';
	Union_Addons_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-union-addons-deactivator.php
 */
function deactivate_union_addons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-union-addons-deactivator.php';
	Union_Addons_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_union_addons' );
register_deactivation_hook( __FILE__, 'deactivate_union_addons' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-union-addons.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_union_addons() {

	$plugin = new Union_Addons();
	$plugin->run();

}
run_union_addons();
