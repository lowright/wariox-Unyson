<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$slides_options = array(
	'slide-images' => array(
		'type'  => 'upload',
		'label' => __('Upload Image', 'wariox'),
		'desc'  => __('Choose Image for slides', 'wariox'),
		'images_only' => true,
	), 
	'slide-sub-title' => array(
		'type' => 'text',
		'label' => __('Sub Title Text', 'wariox'),
		'desc'  => __('Enter your sub-title text', 'wariox'),
	),
	'slide-title' => array(
		'type' => 'text',
		'label' => __('Title Text', 'wariox'),
		'desc'  => __('Enter your title text', 'wariox'),
	),
	'slide-description' => array(
		'type' => 'textarea',
		'label' => __('Description Text', 'wariox'),
		'desc'  => __('Enter your description text', 'wariox'),
	),
	'slide-button-text' => array(
		'type' => 'text',
		'value' => 'Show',
		'label' => __('Button Text', 'wariox')
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