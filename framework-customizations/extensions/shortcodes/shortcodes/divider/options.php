<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'style' => array(
		'type'     => 'multi-picker',
		'label'    => false,
		'desc'     => false,
		'picker' => array(
			'ruler_type' => array(
				'type'    => 'select',
				'label'   => __( 'Ruler Type', 'fw' ),
				'desc'    => __( 'Here you can set the styling and size of the HR element', 'fw' ),
				'choices' => array(
					'line'  => __( 'Line', 'fw' ),
					'space' => __( 'Whitespace', 'fw' ),
				)
			)
		),
		'choices'     => array(
			'space' => array(
				'height' => array(
					'label' => __( 'Height', 'fw' ),
					'desc'  => __( 'How much whitespace do you need? Enter a pixel value. Positive value will increase the whitespace, negative value will reduce it. eg: \'50\', \'-25\', \'200\'', 'fw' ),
					'type'  => 'text',
					'value' => '50'
				)
			),
			'line' => array(
				'height' => array(
					'label' => __( 'Height', 'fw' ),
					'desc'  => __( 'How much height do you need? Enter a pixel value. Positive value will increase the whitespace, negative value will reduce it. eg: \'50\', \'-25\', \'200\'', 'fw' ),
					'type'  => 'text',
					'value' => '50'
				),
				'width' => array(
					'label' => __( 'Width', 'fw' ),
					'desc'  => __( 'How much width do you need? Enter a pixel value. Positive value will increase the whitespace, negative value will reduce it. eg: \'50\', \'-25\', \'200\'', 'fw' ),
					'type'  => 'text',
					'value' => '50'
				),
				'color' => array(
					'type'  => 'color-picker',
					'value' => '#FF0000',
					'label' => __('Divider color', 'wariox'),
					'desc'  => __('Select a color of divider', 'wariox'),
				),
			),
		),
	),
	'margin' => array(
		'label' => __('Margin', 'wariox'),
		'type' => 'multi',
		'inner-options' => array(
			'margin-top' => array( 'type' => 'text', 'value' => '0' ),
			'margin-right' => array( 'type' => 'text', 'value' => '0' ),
			'margin-bottom' => array( 'type' => 'text', 'value' => '0' ),
			'margin-left' => array( 'type' => 'text', 'value' => '0' ),
		)
	),
);
