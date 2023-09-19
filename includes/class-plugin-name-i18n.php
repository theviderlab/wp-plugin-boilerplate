<?php
<n>
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       <pluginAuthorURI>
 * @since      1.0.0
 *
 * @package    <pascalSnakeCase>
 * @subpackage <pascalSnakeCase>/includes
 */
<n>
/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    <pascalSnakeCase>
 * @subpackage <pascalSnakeCase>/includes
 * @author     <pluginAuthor>
 */
class <pascalSnakeCase>_i18n {
<n>
	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {
<n>
		load_plugin_textdomain(
			'<kebabCase>',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
<n>
	}
}