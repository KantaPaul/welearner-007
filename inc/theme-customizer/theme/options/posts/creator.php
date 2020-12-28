<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * metabox options for pages
 */
$options = array(
	'settings_creator' => array(
		'title'		 => esc_html__( 'Creator settings', 'welearner' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
			'creator_designation'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Designation', 'welearner' ),
            ),
            'creator_social_profiles'	 => array(
                'type' => 'addable-popup',
                'value' => array(
                    array(
                        'social_media_title' => 'Facebook',
                        'social_media_link' => 'https://www.facebook.com/',
                        'social_icon' => [
                            'type' => 'icon-font',
                            'icon-class' => 'dashicons dashicons-facebook-alt'
                        ],
                    ),
                    array(
                        'social_media_title' => 'Linkedin',
                        'social_media_link' => 'https://www.linkedin.com/',
                        'social_icon' => [
                            'type' => 'icon-font',
                            'icon-class' => 'dashicons dashicons-linkedin'
                        ],
                    ),
                    array(
                        'social_media_title' => 'Twitter',
                        'social_media_link' => 'http://twiter.com/',
                        'social_icon' => [
                            'type' => 'icon-font',
	                        'icon-class' => 'dashicons dashicons-twitter'
                        ],
                    ),
                ),
                'label' => esc_html__('Creator Social media', 'welearner'),
                'template' => '{{- social_media_title }}',
                'add-button-text' => esc_html__('Add Social', 'welearner'),
                'popup-options' => array(
                    'social_media_title' => array(
                        'label' => esc_html__('Title', 'welearner'),
                        'type' => 'text',
                    ),
                    'social_media_link' => array(
                        'label' => esc_html__('Social media link', 'welearner'),
                        'type' => 'text',
                    ),
                    'social_icon' => array(
                        'type'  => 'icon-v2',
                        'label' => esc_html__('Social Media Icon', 'welearner'),
                    ),
                ),
            ),
        )
    )
);