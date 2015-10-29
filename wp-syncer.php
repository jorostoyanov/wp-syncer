<?php
/**
 * Plugin Name: WP Syncer
 * Description: Allows Syncing content between multiple databases
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Main plugin class
 */
final class WP_Syncer() {
	/**
	 * Constructor
	 *
	 * @access private
	 */
	private function __construct() {

	}

	/**
	 * Returns the class main instance
	 * 
	 * @static
	 * @access public
	 * 
	 * @return WP_Syncer
	 */
	static public function get_instance() {
		if ( self::$instance === null ) {
			self::$instance = new self();
		}

		return self::$instance;
	}
}

function wp_syncer() {
	return WP_Syncer::get_instance();
}

// initialization
wp_syncer();
