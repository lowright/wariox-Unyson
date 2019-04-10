<?php 
if(!defined('FW')){
    die('Forbidden');
}

$options = array(
    'show-header' => array(
        'type'  => 'switch',
        'value' => 'Show',
        'label' => __('Show header', 'wariox'),
        'left-choice' => array(
            'value' => true,
            'label' => __('Show', 'wariox'),
        ),
        'right-choice' => array(
            'value' => false,
            'label' => __('Hide', 'wariox'),
        ),
    ),
    'show-footer' => array(
        'type'  => 'switch',
        'value' => 'Show',
        'label' => __('Show footer', 'wariox'),
        'left-choice' => array(
            'value' => true,
            'label' => __('Show', 'wariox'),
        ),
        'right-choice' => array(
            'value' => false,
            'label' => __('Hide', 'wariox'),
        ),
    ),
);