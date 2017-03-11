<?php
/**
 * Plugin Name: Journal
 * Plugin URI: http://kempwire.com/wordpress-users-plugin
 * User: Tova
 * Date: 2/25/17
 * Time: 12:47 PM
 */

add_action('carbon_register_fields', 'crb_register_custom_fields');
function crb_register_custom_fields() {
include_once(dirname(__FILE__) . '/includes/meta_boxes.php');
}

