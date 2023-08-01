<?php
defined( 'ABSPATH' ) or die;


$this->start_controls_section( 'general', [
	'label' => 'General',
	'type' => Elementor\Controls_Manager::SECTION,
]);

	$this->add_control( 'transition_mode', [
		'label' => 'Mode',
		'type' => Elementor\Controls_Manager::SELECT,
		'options' => [
			'scroll' => 'Scroll',
			'fade' => 'Fade',
		],
		'default' => 'scroll',
	]);

$this->end_controls_section();
