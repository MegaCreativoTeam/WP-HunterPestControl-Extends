<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://megacreativo.com/
 * @since             1.0.0
 * @package           Hunterpestcontrol_Extends
 *
 * @wordpress-plugin
 * Plugin Name:       HunterPestControl Extends
 * Plugin URI:        https://github.com/megacreativo/WP-HunterPestControl-Extends
 * Description:       Plugins para integrar cotizaciones del Sitio Web de https://hunterpestcontrol.com.do
 * Version:           1.0.0
 * Author:            Mega Creativo
 * Author URI:        https://megacreativo.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hunterpestcontrol-extends
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
define( 'HUNTERPESTCONTROL_EXTENDS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hunterpestcontrol-extends-activator.php
 */
function activate_hunterpestcontrol_extends() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hunterpestcontrol-extends-activator.php';
	Hunterpestcontrol_Extends_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hunterpestcontrol-extends-deactivator.php
 */
function deactivate_hunterpestcontrol_extends() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hunterpestcontrol-extends-deactivator.php';
	Hunterpestcontrol_Extends_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hunterpestcontrol_extends' );
register_deactivation_hook( __FILE__, 'deactivate_hunterpestcontrol_extends' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hunterpestcontrol-extends.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hunterpestcontrol_extends() {

	$plugin = new Hunterpestcontrol_Extends();
	$plugin->run();

}
run_hunterpestcontrol_extends();
