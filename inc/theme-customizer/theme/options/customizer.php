<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * options for wp customizer
 */
$options = array(
    'panel_1' => array(
        'title' => __('Welernar options', 'welearner'),
        'options' => array(
            'top_banner__section' => array(
                'title' => __('Banner Options', 'welearner'),
                'options' => array(
                    'top_banner_background' => [
                        'type'  => 'rgba-color-picker',
                        'value' => '#3028AF',
                        'label' => __('Banner Color', 'welearner'),
                    ],
                    'top_banner_heading' => array(
                        'label' => __('Banner title', 'welearner'),
                        'type' => 'text',
                        'value' => esc_html__( 'Discover a new way of learning ', 'welearner' ),
                    ),
                    'top_banner_content' => array(
                        'label' => __('Banner Content', 'welearner'),
                        'type' => 'textarea',
                        'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper dapibus turpis vel pellentesque.  ', 'welearner' ),
                    ),
                    'top_banner_search_show' => array(
                        'type'  => 'switch',
                        'value' => 'true',
                        'label' => __('Show Search', 'welearner'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('No', 'welearner'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Yes', 'welearner'),
                        ),
                    )
                )
            ),
            'counter_up_section' => array(
                'title' => __('Counter Up', 'welearner'),
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
                        'label' => __('Counter UP', 'welearner'),
                        'add-button-text' => __('Add Counter', 'welearner'),
                        'template' => '{{- counter_up_title }}',
                        'sortable' => true,
                        'popup-options' => array(
                            'counter_up_count' => array(
                                'label' => __('Number', 'welearner'),
                                'type' => 'text',
                                'value' => '3900',
                            ),
                            'counter_up_suffix' => array(
                                'label' => __('Suffix', 'welearner'),
                                'type' => 'text',
                                'value' => '+',
                            ),
                            'counter_up_title' => array(
                                'label' => __('Title', 'welearner'),
                                'type' => 'textarea',
                                'value' => 'Course & Apecializations',
                            ),
                        ),
                    )
                ),
            ),
            'client_logo_section' => array(
                'title' => __('Client Logo', 'welearner'),
                'options' => array(
                    'client__title' => array(
                        'label' => __('Client Heading', 'welearner'),
                        'type' => 'text',
                        'value' => esc_html__( 'Trusted by content creators across the world', 'welearner' ),
                    ),
                    'client_logos' => array(
                        'type'  => 'addable-option',
                        'label' => __('Add Client Logo', 'welearner'),
                        'option' => array( 'type' => 'upload' ),
                        'add-button-text' => __('Uplaod Logo', 'welearner'),
                        'sortable' => true,
                    ),
                ),
            ),
            'footer_section' => array(
                'title' => __('Footer', 'welearner'),
                'options' => array(
                    'footer_background_color' => array(
                        'type'  => 'rgba-color-picker',
                        'value' => '#021E40',
                        'label' => __('Footer Color', 'welearner'),
                    ),
                    'footer_logo' => array(
                        'type'  => 'upload',
                        'label' => __('Footer Logo', 'welearner'),
                        'images_only' => true,
                    ),
                    'footer_text' => array(
                        'label' => __('Exerpt', 'welearner'),
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
                        'label' => __('Social Media', 'welearner'),
                        'template' => '{{- footer_social_media_title }}',
                        'add-button-text' => __('Add Social', 'welearner'),
                        'sortable' => true,
                        'popup-options' => array(
                            'footer_social_media_title' => array(
                                'label' => __('Title', 'welearner'),
                                'type' => 'text',
                            ),
                            'footer_social_media_link' => array(
                                'label' => __('Social media link', 'welearner'),
                                'type' => 'text',
                            ),
                            'footer_social_icon' => array(
                                'type'  => 'icon',
                                'label' => __('Social Media Icon', 'welearner'),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
