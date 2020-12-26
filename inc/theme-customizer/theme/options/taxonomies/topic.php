<?php if (!defined('ABSPATH')) die('Direct access forbidden.');

$options = [
    'topic_product_cat'=>[
        'type'  => 'icon-v2',
        'label' =>esc_html__('Category icon', 'welearner'),
        'desc'  =>esc_html__('Category icon', 'welearner'),
    ],
    'topic_icon_bg_color' => [
        'type'  => 'rgba-color-picker',
        'value' => '#C7C5F6',
        'label' => __('Icon Background Color', 'welearner'),
        'palettes' => array( '#C7C5F6', '#FEE8B1', '#FACACA', '#CFF9F5', '#F9DBC3' ),
    ],
    'topic_icon__color' => [
        'type'  => 'rgba-color-picker',
        'value' => '#0A00F2',
        'label' => __('Icon Color', 'welearner'),
        'palettes' => array( '#0A00F2', '#D69900', '#FF2020', '#00C9B6', '#FF7100' ),
    ],
];