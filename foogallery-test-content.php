<?php
/*
Plugin Name: FooGallery Test Content
Description: Generates a lot of test content that is useful to test all FooGallery scenarios
Version:     1.0.0
Author:      FooPlugins
Plugin URI:  http://fooplugins.com/foogallery/
Author URI:  http://fooplugins.com
Text Domain: foogallery
License:     GPL-2.0+
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! class_exists( 'FooGallery_Test_Content' ) ) {

	define( 'FOOGALLERY_TC_SLUG', 'foogallery_tc' );
	define( 'FOOGALLERY_TC_PATH', plugin_dir_path( __FILE__ ) );
	define( 'FOOGALLERY_TC_URL', plugin_dir_url( __FILE__ ) );
	define( 'FOOGALLERY_TC_FILE', __FILE__ );
	define( 'FOOGALLERY_TC_VERSION', '1.0.0' );

	/**
	 * FooGallery_Test_Content class
	 */
	class FooGallery_Test_Content {

		private static $instance;

		public static function get_instance() {
			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof FooGallery_Test_Content ) ) {
				self::$instance = new FooGallery_Test_Content();
			}

			return self::$instance;
		}

		/**
		 * Initialize the plugin by setting localization, filters, and administration functions.
		 */
		private function __construct() {
			add_action( 'plugins_loaded', array( $this, 'init' ) );
		}

		function init() {
			//get out early if FooGallery is not activated
			if ( !defined( 'FOOGALLERY_SLUG' ) ) {
				return;
			}

			//include everything we need!
			require_once( FOOGALLERY_TC_PATH . 'includes/functions.php' );

			if ( is_admin() ) {
				add_action( 'foogallery_admin_menu_after', array( $this, 'add_menu' ) );
			}
		}

		function add_menu() {
			foogallery_add_submenu_page( __( 'Test Content', 'foogallery' ), 'manage_options', 'foogallery-test-content', array(
				$this,
				'render_view',
			) );
		}

		function render_view() {
			require_once 'includes/view-test-content.php';
		}
	}
}

FooGallery_Test_Content::get_instance();