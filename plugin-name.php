<?php
<n>
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              <pluginAuthorURI>
 * @since             1.0.0
 * @package           <pascalSnakeCase>
 *
 * @wordpress-plugin
 * Plugin Name:       <pluginName>
 * Plugin URI:        <pluginAuthorURI>
 * Description:       <pluginDescription>
 * Version:           1.0.0
 * Author:            <pluginAuthor>
 * Author URI:        <pluginAuthorURI>
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       <kebabCase>
 * Domain Path:       /languages
 */
<n>
// If this file is called directly, abort.
if ( defined( 'WPINC' ) === false ) {
	die;
}
<n>
/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( '<upperSnakeCase>_VERSION', '1.0.0' );
<n>
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-<kebabCase>-activator.php
 */
function activate_<lowerSnakeCase>() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-<kebabCase>-activator.php';
	<pascalSnakeCase>_Activator::activate();
}
<n>
/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-<kebabCase>-deactivator.php
 */
function deactivate_<lowerSnakeCase>() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-<kebabCase>-deactivator.php';
	<pascalSnakeCase>_Deactivator::deactivate();
}
<n>
register_activation_hook( __FILE__, 'activate_<lowerSnakeCase>' );
register_deactivation_hook( __FILE__, 'deactivate_<lowerSnakeCase>' );
<n>
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-<kebabCase>.php';
<n>
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_<lowerSnakeCase>() {

	$plugin = new <pascalSnakeCase>();
	$plugin->run();

}
run_<lowerSnakeCase>();
