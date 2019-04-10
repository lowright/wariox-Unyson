<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
			'type'  => 'textarea',
			'value' => 'Text',
			'label' => __('Enter a text', 'wariox'),
	),
	'headline-style' => array(
		'type' => 'typography-v2',
		'value' => array(
			'family' => 'Roboto',
			'style' => 'italic',
			'weight' => 700,
			'subset' => 'latin-ext',
			'variation' => 'regular',
			'size' => 14,
			'line-height' => 13,
			'letter-spacing' => -2,
			'color' => '#0000ff'
		),
		'components' => array(
			'family' => true,
			'size' => true,
			'line-height' => true,
			'letter-spacing' => true,
			'color' => true
		),
    'label' => __('Headline customization', 'wariox'),
	),
	'alignment' => array(
		'type' => 'multi-select',
		'label' => __('Text alignment', 'wariox'),
		'population' => 'array',
		'value' => 'left',
		'choices' => array(
			'left' => __('Left', 'wariox'),
			'center' => __('Center', 'wariox'),
			'right' => __('Right', 'wariox'),
			'justify' => __('Justify', 'wariox'),
		),
		'limit' => 1
	),
	'padding' => array(
		'label' => 'Padding',
		'type' => 'multi',
		'inner-options' => array(
			'padding-top' => array( 'type' => 'text', 'value' => '0' ),
			'padding-right' => array( 'type' => 'text', 'value' => '0' ),
			'padding-bottom' => array( 'type' => 'text', 'value' => '0' ),
			'padding-left' => array( 'type' => 'text', 'value' => '0' ),
		)
	),
	'margin' => array(
		'label' => 'Margin',
		'type' => 'multi',
		'inner-options' => array(
			'margin-top' => array( 'type' => 'text', 'value' => '0' ),
			'margin-right' => array( 'type' => 'text', 'value' => '0' ),
			'margin-bottom' => array( 'type' => 'text', 'value' => '0' ),
			'margin-left' => array( 'type' => 'text', 'value' => '0' ),
		)
	),
);
