<?php

// Initializing online demo contents
if (!function_exists('_filter_welearner_fw_ext_backups_demos')) {
    function _filter_welearner_fw_ext_backups_demos( $demos ) {
        $demo_content_installer	 = get_template_directory_uri(  ) . '/demo-content';
        $demos_array			 = array(
            'default'			 => array(
                'title'			 => esc_html__( 'Default', 'welearner' ),
                'preview_link'	 => esc_url( 'http://pobon.advancingchilds.com/' ),
                'screenshot'	 => $demo_content_installer . '/default/screenshot.png',
            ),
        );
        $download_url			 = $demo_content_installer . '/manifest.php';
        foreach ( $demos_array as $id => $data ) {
            $demo						 = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
                'url'		 => $download_url,
                'file_id'	 => $id,
            ) );
            $demo->set_title( $data[ 'title' ] );
            $demo->set_screenshot( $data[ 'screenshot' ] );
            $demo->set_preview_link( $data[ 'preview_link' ] );
            $demos[ $demo->get_id() ]	 = $demo;
            unset( $demo );
        }
        return $demos;
    }

    add_filter( 'fw:ext:backups-demo:demos', '_filter_welearner_fw_ext_backups_demos' );
}