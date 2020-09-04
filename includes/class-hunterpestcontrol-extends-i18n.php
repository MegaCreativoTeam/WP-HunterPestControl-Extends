<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://megacreativo.com/
 * @since      1.0.0
 *
 * @package    Hunterpestcontrol_Extends
 * @subpackage Hunterpestcontrol_Extends/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Hunterpestcontrol_Extends
 * @subpackage Hunterpestcontrol_Extends/includes
 * @author     Brayan Rincon <brayan262@gmail.com>
 */
class Hunterpestcontrol_Extends_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'hunterpestcontrol-extends',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
