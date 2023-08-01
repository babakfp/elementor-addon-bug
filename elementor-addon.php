<?php
defined( 'ABSPATH' ) or die;

/**
 * Plugin Name:						Elementor Addon
 * Version:							2.20.0
 * Text Domain:						elementor-addon
*/

if ( ! class_exists( 'Elementor_Addon_Globals' ) ) {
	final class Elementor_Addon_Globals
	{
		public static function dir() {
			return plugin_dir_path( __FILE__ );
		}
	}
}

require_once Elementor_Addon_Globals::dir() . 'includes/core.php';
