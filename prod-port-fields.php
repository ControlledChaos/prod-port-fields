<?php
/**
 * Production Portfolios Fields
 *
 * Change this header information to suit your needs.
 *
 * @package     Production_Portfolios
 * @version     5.7.7
 * @author      Greg Sweet <greg@productionportfolios.com>
 * @copyright   Copyright © 2018, Production Portfolios
 * @link        http://productionportfolios.com/
 * @license     GPL-3.0+ http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * Plugin Name:  Production Portfolios Fields
 * Plugin URI:   http://productionportfolios.com/
 * Description:  Get noticed!
 * Version:      5.7.7
 * Author:       Production Portfolios
 * Author URI:   http://productionportfolios.com/
 * License:      GPL-3.0+
 * License URI:  https://www.gnu.org/licenses/gpl.txt
 * Text Domain:  prod-port-fields
 * Domain Path:  /languages
 * Tested up to: 4.9.8
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class.
 *
 * Defines constants, gets the initialization class file
 * plus the activation and deactivation classes.
 *
 * @since  5.7.7
 * @access public
 */
final class Production_Portfolios_Fields {

	/**
	 * Get an instance of the class.
	 *
	 * @since  5.7.7
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

			// Define plugin constants.
			$instance->constants();

			// Require the core plugin class files.
			$instance->dependencies();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  5.7.7
	 * @access private
	 * @return void Constructor method is empty.
	 */
	private function __construct() {}

	/**
	 * Define plugin constants.
	 *
	 * @since  5.7.7
	 * @access private
	 * @return void
	 */
	private function constants() {

		/**
		 * Keeping the version consistent with the included version
		 * of Advanced Custom Fields Pro.
		 *
		 * @since  1.0.0
		 * @return string Returns the latest plugin version.
		 */
		if ( ! defined( 'PPP_VERSION' ) ) {
			define( 'PPP_VERSION', '1.0.0' );
		}

		/**
		 * Plugin folder path.
		 *
		 * @since  5.7.7
		 * @return string Returns the filesystem directory path (with trailing slash)
		 *                for the plugin __FILE__ passed in.
		 */
		if ( ! defined( 'PPF_PATH' ) ) {
			define( 'PPF_PATH', plugin_dir_path( __FILE__ ) );
		}

		/**
		 * Plugin folder URL.
		 *
		 * @since  5.7.7
		 * @return string Returns the URL directory path (with trailing slash)
		 *                for the plugin __FILE__ passed in.
		 */
		if ( ! defined( 'PPF_URL' ) ) {
			define( 'PPF_URL', plugin_dir_url( __FILE__ ) );
		}

	}

	/**
	 * Require the core plugin class files.
	 *
	 * @since  5.7.7
	 * @access private
	 * @return void Gets the file which contains the core plugin class.
	 */
	private function dependencies() {

		// Include the fields directory.
		require_once PPF_PATH . 'fields/acf.php';

	}

}
// End core plugin class.

/**
 * Put an instance of the plugin class into a function.
 *
 * @since  5.7.7
 * @access public
 * @return object Returns the instance of the `Production_Portfolios_Fields` class.
 */
function ppf_plugin() {

	return Production_Portfolios_Fields::instance();

}

// Begin plugin functionality.
ppf_plugin();