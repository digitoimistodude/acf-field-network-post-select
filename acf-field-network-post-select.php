<?php
/**
 * File: acf-field-network-post-select.php
 *
 * Description: acf-field-network-post-select
 *
 * @Author:		Luka Airassalo
 * @Date:   		2024-04-30 13:14:27
 * @Last Modified by:   Luka Airassalo
 * @Last Modified time: 2024-04-30 13:23:40
 *
 * @package acf-field-network-post-select
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

/**
 * Plugin Name: Advanced Custom Fields: Network posts select field
 * Plugin URI: https://github.com/timiwahalahti/acf-field-post-object-network/
 * Description: Adds a ACF field that allows selecting posts across the network sites.
 * Version: 1.2.2
 * Author: Digitoimisto Dude Oy
 * Author URI: https://www.dude.fi
 * License: GPLv3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Network: true
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

class sippis_acf_plugin_network_post_select { // phpcs:ignore PEAR.NamingConventions.ValidClassName.Invalid

  var $settings; // phpcs:ignore PSR2.Classes.PropertyDeclaration.VarUsed, PSR2.Classes.PropertyDeclaration.ScopeMissing

  function __construct() { // phpcs:ignore PSR2.Classes.PropertyDeclaration.ScopeMissing, Squiz.Scope.MethodScope.Missing
		$this->settings = array(
		'version'  => '1.2.2',
		'url'      => plugin_dir_url( __FILE__ ),
		'path'     => plugin_dir_path( __FILE__ ),
		);

		add_action( 'acf/include_field_types',  array( $this, 'include_field' ) );
  } // end __construct

  function include_field( $version = false ) { // phpcs:ignore
		load_plugin_textdomain( 'sippis-acf-field-network-post-select', false, plugin_basename( __DIR__ ) . '/lang' );
		include_once 'class-sippis-acf-field-network-post-select.php';
  } // end include_field
} // end class

new sippis_acf_plugin_network_post_select();
