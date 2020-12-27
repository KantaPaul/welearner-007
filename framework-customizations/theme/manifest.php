<?php

if (!defined('ABSPATH')) {
	die('Direct access forbidden.');
}

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest[ 'name' ]			 = esc_html__( 'Welearner', 'welearner' );
$manifest[ 'uri' ]			 = esc_url( 'http : //underscores.me/' );
$manifest[ 'description' ]   = esc_html__( 'Welearner WordPress theme', 'welearner' );
$manifest[ 'version' ]		 = '1.0';
$manifest[ 'author' ]		 = 'Pobon Paul';
$manifest[ 'author_uri' ]	 = esc_url( 'https: //www.facebook.com/kp.pobon/' );
$manifest[ 'requirements' ]	 = array(
	'wordpress' => array(
		'min_version' => '4.3',
	),
);

$manifest[ 'id' ] = 'scratch';

$manifest[ 'supported_extensions' ] = array(
	'backups'		 => array(),
);


?>
