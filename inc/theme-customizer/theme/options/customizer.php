<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * options for wp customizer
 */
$options = array(
    'panel_1' => array(
        'title' => esc_html__('Welernar Options', 'welearner'),
        'wp-customizer-args' => [
			'priority' => 1,
		],
        'options' => array(
            'top_banner__section' => array(
                'title' => esc_html__('Banner Options', 'welearner'),
                'options' => array(
                    'top_banner_background' => [
                        'type'  => 'rgba-color-picker',
                        'value' => '#3028AF',
                        'label' => esc_html__('Banner Color', 'welearner'),
                    ],
                    'top_banner_heading' => array(
                        'label' => esc_html__('Banner title', 'welearner'),
                        'type' => 'text',
                        'value' => esc_html__( 'Discover a new way of learning ', 'welearner' ),
                    ),
                    'top_banner_content' => array(
                        'label' => esc_html__('Banner Content', 'welearner'),
                        'type' => 'textarea',
                        'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper dapibus turpis vel pellentesque.  ', 'welearner' ),
                    ),
                    'top_banner_search_show' => array(
                        'type'  => 'switch',
                        'value' => 'true',
                        'label' => esc_html__('Show Search', 'welearner'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => esc_html__('No', 'welearner'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => esc_html__('Yes', 'welearner'),
                        ),
                    )
                )
            ),
            'counter_up_section' => array(
                'title' => esc_html__('Counter Up', 'welearner'),
                'options' => array(
                    'counter_up_content' => array(
                        'type' => 'addable-popup',
                        'value' => array(
                            array(
                                'counter_up_count' => '3900',
                                'counter_up_suffix' => '+',
                                'counter_up_title' => 'Course & Apecializations',
                            ),
                            array(
                                'counter_up_count' => '15',
                                'counter_up_suffix' => '+',
                                'counter_up_title' => 'Professional Certificates',
                            ),
                            array(
                                'counter_up_count' => '15',
                                'counter_up_suffix' => '+',
                                'counter_up_title' => 'Degrees & Master Track',
                            ),
                        ),
                        'label' => esc_html__('Counter UP', 'welearner'),
                        'add-button-text' => esc_html__('Add Counter', 'welearner'),
                        'template' => '{{- counter_up_title }}',
                        'sortable' => true,
                        'popup-options' => array(
                            'counter_up_count' => array(
                                'label' => esc_html__('Number', 'welearner'),
                                'type' => 'text',
                                'value' => '3900',
                            ),
                            'counter_up_suffix' => array(
                                'label' => esc_html__('Suffix', 'welearner'),
                                'type' => 'text',
                                'value' => '+',
                            ),
                            'counter_up_title' => array(
                                'label' => esc_html__('Title', 'welearner'),
                                'type' => 'textarea',
                                'value' => 'Course & Apecializations',
                            ),
                        ),
                    )
                ),
            ),
            'client_logo_section' => array(
                'title' => esc_html__('Client Logo', 'welearner'),
                'options' => array(
                    'client__title' => array(
                        'label' => esc_html__('Client Heading', 'welearner'),
                        'type' => 'text',
                        'value' => esc_html__( 'Trusted by content creators across the world', 'welearner' ),
                    ),
                    'client_logos' => array(
                        'type'  => 'addable-option',
                        'label' => esc_html__('Add Client Logo', 'welearner'),
                        'option' => array( 'type' => 'upload' ),
                        'add-button-text' => esc_html__('Uplaod Logo', 'welearner'),
                        'sortable' => true,
                    ),
                ),
            ),
            'footer_section' => array(
                'title' => esc_html__('Footer', 'welearner'),
                'options' => array(
                    'footer_background_color' => array(
                        'type'  => 'rgba-color-picker',
                        'value' => '#021E40',
                        'label' => esc_html__('Footer Color', 'welearner'),
                    ),
                    'footer_logo' => array(
                        'type'  => 'upload',
                        'label' => esc_html__('Footer Logo', 'welearner'),
                        'images_only' => true,
                    ),
                    'footer_text' => array(
                        'label' => esc_html__('Exerpt', 'welearner'),
                        'type' => 'textarea',
                        'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed justo nulla, ',
                    ),
                    'footer_social_profiles' => array(
                        'type' => 'addable-popup',
                        'value' => array(
                            array(
                                'footer_social_media_title' => 'Facebook',
                                'footer_social_media_link' => 'https://www.facebook.com/',
                                'footer_social_icon' => 'dashicons dashicons-facebook-alt',
                            ),
                            array(
                                'footer_social_media_title' => 'Twitter',
                                'footer_social_media_link' => 'https://twitter.com/',
                                'footer_social_icon' => 'dashicons dashicons-twitter',
                            ),
                            array(
                                'footer_social_media_title' => 'Linkedin',
                                'footer_social_media_link' => 'https://www.linkedin.com/',
                                'footer_social_icon' => 'dashicons dashicons-linkedin',
                            ),
                        ),
                        'label' => esc_html__('Social Media', 'welearner'),
                        'template' => '{{- footer_social_media_title }}',
                        'add-button-text' => esc_html__('Add Social', 'welearner'),
                        'sortable' => true,
                        'popup-options' => array(
                            'footer_social_media_title' => array(
                                'label' => esc_html__('Title', 'welearner'),
                                'type' => 'text',
                            ),
                            'footer_social_media_link' => array(
                                'label' => esc_html__('Social media link', 'welearner'),
                                'type' => 'text',
                            ),
                            'footer_social_icon' => array(
                                'type'  => 'icon',
                                'label' => esc_html__('Social Media Icon', 'welearner'),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
