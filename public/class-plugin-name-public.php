<?php
<n>
/**
 * The public-facing functionality of the plugin.
 *
 * @link       <pluginAuthorURI>
 * @since      1.0.0
 *
 * @package    <pascalSnakeCase>
 * @subpackage <pascalSnakeCase>/public
 */
<n>
/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    <pascalSnakeCase>
 * @subpackage <pascalSnakeCase>/public
 * @author     <pluginAuthor>
 */
class <pascalSnakeCase>_Public {
<n>
	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;
<n>
	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;
<n>
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {
<n>
		$this->plugin_name = $plugin_name;
		$this->version = $version;
<n>
	}
<n>
	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
<n>
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in <pascalSnakeCase>_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The <pascalSnakeCase>_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
<n>
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/<kebabCase>-public.css', array(), $this->version, 'all' );
<n>
	}
<n>
	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
<n>
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in <pascalSnakeCase>_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The <pascalSnakeCase>_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
<n>
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/<kebabCase>-public.js', array( 'jquery' ), $this->version, false );
<n>
	}
<n>
}
