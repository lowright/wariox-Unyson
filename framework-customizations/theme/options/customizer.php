<?php 
 if ( !defined('FW' )) {
     die('Forbidden');
 }

 $options = array(
    'header' => array(
        'title' => __('Header settings', 'wariox'),
        'options' => array(

            'header-logo' => array(
                'type' => 'upload',
                'value' => get_template_directory_uri().'/assets/images/logo/Logo.png',
                'label' => __('Header logo', 'wariox'),
                'images_only' => true
            ),
            'header-logo-text' => array(
                'type' => 'text',
                'value' => 'Wariox',
                'label' => __('Header text logo', 'wariox'),
            ),
            'header-sub-logo-text' => array(
                'type' => 'text',
                'value' => 'Military and Veteran',
                'label' => __('Sub text logo', 'wariox'),
            ),
            'header-social' => array(
                'type' => 'multi',
                'label' => __('Header social links', 'wariox'),
                'desc'  => __('Insert your social links', 'wariox'),
                'inner-options' => array(
                    'Facebook' => array( 'type' => 'text', 'value' => 'facebook.com' ),
                    'Twitter' => array( 'type' => 'text', 'value' => 'twitter.com' ),
                    'Linkedin' => array( 'type' => 'text', 'value' => 'linkedin.com' ),
                    'Google+' => array( 'type' => 'text', 'value' => 'google.com' ),
                )
            ),
            'header-contact-block' => array(
                'type' => 'multi',
                'label' => __('Header contact block', 'wariox'),
                'desc'  => __('Insert your contact info', 'wariox'),
                'inner-options' => array(
                    'Phone' => array( 'type' => 'text', 'value' => '0800 123 4567' ),
                    'Mail' => array( 'type' => 'text', 'value' => 'wariox@example.com' ),
                    'Street' => array( 'type' => 'text', 'value' => '1116 15th St' ),
                    'City and Country' => array( 'type' => 'text', 'value' => 'Sacramento, California' ),
                )
            ),
            'header-button-block' => array(
                'type' => 'multi',
                'label' => __('Header button', 'wariox'),
                'desc'  => __('Insert link and text', 'wariox'),
                'inner-options' => array(
                    'Link' => array( 'type' => 'text' ),
                    'Text' => array( 'type' => 'text', 'value' => 'DONATE' ),
                )
            ),
            'header-register-link' => array(
                'type' => 'multi',
                'label' => __('Register and login link', 'wariox'),
                'desc'  => __('Insert link for register and login', 'wariox'),
                'inner-options' => array(
                    'Login' => array( 'type' => 'text', 'value' => '#' ),
                    'Register' => array( 'type' => 'text', 'value' => '#'),
                )
            ),
        )
    ),
    'footer' => array(
        'title' => __('Footer settings', 'wariox'),
        'options' => array(

            'copyright-text' => array(
                'type' => 'text',
                'value' => '© Copyright 2017 All Rights Reserved',
                'label' => __('Copyright Text', 'wariox'),
            ),

            'footer-logo' => array(
                'type' => 'upload',
                'value' => get_template_directory_uri().'/assets/images/logo/Logo.png',
                'label' => __('Footer logo', 'wariox'),
                'images_only' => true
            ),

            'footer-logo-text' => array(
                'type' => 'text',
                'value' => 'Wariox',
                'label' => __('Logo text', 'wariox'),
            ),            
            
            'description' => array(
                'type' => 'textarea',
                'value' => 'Lorem ipsum dolor amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua vero eoset.',
                'label' => __('Description text', 'wariox'),
            ),
            
            'footer-social' => array(
                'type' => 'multi',
                'label' => __('Footer social links', 'wariox'),
                'desc'  => __('Insert your social links', 'wariox'),
                'inner-options' => array(
                    'Facebook' => array( 'type' => 'text', 'value' => 'facebook.com' ),
                    'Twitter' => array( 'type' => 'text', 'value' => 'twitter.com' ),
                    'Linkedin' => array( 'type' => 'text', 'value' => 'linkedin.com' ),
                    'Google+' => array( 'type' => 'text', 'value' => 'google.com' ),
                )
            )
        ),
    ),
    
);