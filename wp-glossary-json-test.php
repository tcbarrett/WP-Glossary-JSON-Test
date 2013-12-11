<?php
/**
 * Plugin Name: WP Glossary JSON TEST
 * Description: Test JSON API against Glossary plugin
 * Author: TCBarrett
 * Version: 0.2
 * Author URI: http://www.tcbarrett.com/
 */

add_action( 'wp_json_server_before_serve', 'tcb_glossary_json_api_init', 10, 1 );
function tcb_glossary_json_api_init( $server ) {
	global $glossary_json_api;

	require_once dirname( __FILE__ ) . '/class-json-api-glossary.php';
	$glossary_json_api = new Glossary_JSON_API( $server );
}
