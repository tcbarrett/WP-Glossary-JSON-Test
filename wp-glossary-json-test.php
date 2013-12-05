<?php
/**
 * Plugin Name: WP Glossary JSON TEST
 * Description: Test JSON API against Glossary plugin
 * Author: TCBarrett
 * Version: 0.1
 * Author URI: http://www.tcbarrett.com/
 */

add_action( 'plugins_loaded', 'tcb_json_api_init' );
function tcb_json_api_init() {
  //new Glossary_JSON();
}

if ( class_exists( 'WP_JSON_CustomPostType' ) ) {
class Glossary_JSON extends WP_JSON_CustomPostType {
  protected $base = '/tcbarrett/glossary';
  protected $type = 'glossary';
}
}
