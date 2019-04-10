<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
    ),
    'margins' => array(
        'type'  => 'multi',
        'label' => __('Margin', 'wariox'),
        'desc'  => __('Set Margin', 'wariox'),
        'inner-options' => array(
            'margin-top' => array( 'type' => 'text', 'value' => '0'  ),
            'margin-right' => array( 'type' => 'text', 'value' => '0' ),
            'margin-bottom' => array( 'type' => 'text', 'value' => '0' ),
            'margin-left' => array( 'type' => 'text', 'value' => '0' ),
        )
    ), 
    'padding' => array(
        'type'  => 'multi',
        'label' => __('Padding', 'wariox'),
        'desc'  => __('Set Padding', 'wariox'),
        'inner-options' => array(
            'padding-top' => array( 'type' => 'text', 'value' => '0' ),
            'padding-right' => array( 'type' => 'text', 'value' => '0' ),
            'padding-bottom' => array( 'type' => 'text', 'value' => '0' ),
            'padding-left' => array( 'type' => 'text', 'value' => '0' ),
        )
    )
);
