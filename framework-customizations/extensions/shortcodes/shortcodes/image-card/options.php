<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'card-image' => array(
		'type' => 'upload',
		'images_only' => true,
		'label' => __('Upload Image Card', 'wariox')
	),
	'image_card_title' => array(
		'type' => 'text',
		'value' => 'Image Card Title',
		'label' => __('Text', 'wariox')
	),
	'image_card_description' => array(
		'type' => 'text',
		'value' => 'Image Card Description',
		'label' => __('Text', 'wariox')
	),
	'image-card-button' => array(
		'type'  => 'select',
		'value' => 'choice-3',
		'label' => __('Button Settings', 'wariox'),
		'choices' => array(
			'show' => __('show', 'wariox'),
			'hidden' => __('hidden', 'wariox'),
			),
		),
		'frst-multi-picker' => array(
			'type' => 'multi-picker',
			'picker' => 'image-card-button',
			'choices' => array(	
				'show' => array(
					'image-button-text' => array(
						'type' => 'text',
						'value' => 'Show',
						'label' => __('Button Text', 'wariox')
					),
					'image-button-color' => array(
						'type'  => 'color-picker',
						'value' => '#BF9F62',
						'label' => __('Label', 'wariox'),
						'desc'  => __('Button Color', 'wariox'),
					)
				),
			),
		),
);
