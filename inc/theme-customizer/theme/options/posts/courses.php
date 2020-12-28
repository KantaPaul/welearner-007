<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * metabox options for pages
 */
$options = array(
	'settings__courses' => array(
		'title'		 => esc_html__( 'Course settings', 'welearner' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
			'course_main_price'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Course price', 'welearner' ),
                'value' => esc_html( '$35.00' ),
			),
			'course_sell_price'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Course sell price', 'welearner' ),
                'value' => esc_html( '$17.80' ),
            ),
            'pp__taxonomy_bg_color' => array (
                'type'  => 'color-picker',
                'label' => esc_html__('Taxonomy Background Color', 'welearner'),
                'value' => esc_attr( '#EFFDFD' ),
                'palettes' => array( '#EFFDFD', '#FCE9ED', '#E7F6FD' ),
            ),
            'pp__taxonomy__color' => array (
                'type'  => 'color-picker',
                'label' => esc_html__('Taxonomy  Color', 'welearner'),
                'value' => esc_attr( '#14E5E5' ),
                'palettes' => array( '#14E5E5', '#F53B63', '#15A5EC' ),
            ),
			'course__rating'	 => array(
                'type'  => 'select',
                'fw-storage' => array(
                    'type' => 'post-meta',
                    'post-meta' => 'fw_option:course__rating',
                ),
                'value' => '5',
                'label' => esc_html__('Course Rating', 'welearner'),
                'choices' => array(
                    '1' => esc_html__(' 1', 'welearner'),
                    '2' => esc_html__(' 2', 'welearner'),
                    '3' => esc_html__(' 3', 'welearner'),
                    '4' => esc_html__(' 4', 'welearner'),
                    '5' => esc_html__(' 5', 'welearner'),
                ),
                'no-validate' => false,
            ),
        ),
    ),
);