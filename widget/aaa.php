<?php
defined( 'ABSPATH' ) or die;

class AAA_Widget extends Elementor\Widget_Base
{
	public function get_name() {
		return 'aaa';
	}

	public function get_title() {
		return 'AAA';
	}

	protected function register_controls() {
		require_once Elementor_Addon_Globals::dir() . 'widget/lib/options.php';
	}

	protected function render() {
		require_once Elementor_Addon_Globals::dir() . 'widget/lib/render.php';
	}
}

Elementor\Plugin::instance()->widgets_manager->register( new AAA_Widget() );
