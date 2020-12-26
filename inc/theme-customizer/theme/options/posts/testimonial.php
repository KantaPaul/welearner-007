<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * metabox options for pages
 */
$options = array(
	'settings_testimonial' => array(
		'title'		 => esc_html__( 'Testimonial settings', 'welearner' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
			'testimonial_reviewer_designation'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Designation', 'welearner' ),
				'value' => esc_html__( 'Managing Director', 'welearner' )
            ),
            'testimonial_reviewer_featured_text'	 => array(
				'type'	 => 'textarea',
				'label'	 => esc_html__( 'Highlight Text', 'welearner' ),
				'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur ', 'welearner' )
			),
		)
	)                
);