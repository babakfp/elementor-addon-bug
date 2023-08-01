<?php
defined( 'ABSPATH' ) or die;

if ( ! class_exists( 'Elementor_Addon' ) ) {
	final class Elementor_Addon
	{
		private static $_instance = null;

		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}
			return self::$_instance;
		}

		public function __construct() {
			add_action( 'plugins_loaded', [ $this, 'on_plugins_loaded' ] );
		}

		public function on_plugins_loaded() {
			add_action( 'elementor/init', [ $this, 'init' ] );
		}

		public function init() {
			add_action( 'elementor/widgets/register', [ $this, 'init_widget' ] );
		}

		public function init_widget() {
			require_once Elementor_Addon_Globals::dir() . 'widget/aaa.php';
		}
	}

	Elementor_Addon::instance();
}
