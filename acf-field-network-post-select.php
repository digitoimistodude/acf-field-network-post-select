<?php
/**
 * Plugin Name: Advanced Custom Fields: Network posts select field
 * Plugin URI: https://github.com/digitoimistodude/acf-field-network-post-select
 * Description: Adds a ACF field that allows selecting posts across the network sites.
 * Version: 1.2.9
 * Author: Digitoimisto Dude Oy
 * Author URI: https://www.dude.fi
 * License: GPLv3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Network: true
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

$plugin_base_path = untrailingslashit( plugin_dir_path( __FILE__ ) );

/**
 * GitHub plugin updates
 */
require $plugin_base_path . '/plugin-update-checker/plugin-update-checker.php';
$update_checker = \Puc_v4_Factory::buildUpdateChecker( 'https://github.com/digitoimistodude/acf-field-network-post-select', __FILE__, 'acf-field-network-post-select' );

class sippis_acf_plugin_network_post_select { // phpcs:ignore PEAR.NamingConventions.ValidClassName.Invalid

  var $settings; // phpcs:ignore PSR2.Classes.PropertyDeclaration.VarUsed, PSR2.Classes.PropertyDeclaration.ScopeMissing

  function __construct() { // phpcs:ignore PSR2.Classes.PropertyDeclaration.ScopeMissing, Squiz.Scope.MethodScope.Missing
		$this->settings = array(
		'version'  => '1.2.9',
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
