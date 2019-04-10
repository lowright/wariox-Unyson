<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$slides_options = array(
	'slide-images' => array(
		'type'  => 'multi-upload',
		'label' => __('Upload Image', 'wariox'),
		'desc'  => __('Choose Image for slides', 'wariox'),
		'images_only' => true,
	), 
);

$options = array(
	'slider-height' => array(
		'type'  => 'text',
		'label' => __('Select Slides height', 'wariox'),
	),
	'custom-slides' => array(
		'type'  => 'select',
		'value' => 'choice-3',
		'label' => __('Select Slides to customize', 'wariox'),
		'choices' => array(
			'slide-1' => __('First Slider', 'wariox'),
			'slide-2' => __('Second Slider', 'wariox'),
			'slide-3' => __('Third Slider', 'wariox'),
		),
	),
	'frst-multi-picker' => array(
		'type' => 'multi-picker',
		'picker' => 'custom-slides',
		'choices' => array(	
			'slide-1' => $slides_options,
			'slide-2' => $slides_options,
			'slide-3' => $slides_options,
		),
	),
);