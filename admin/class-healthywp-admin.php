<?php
include_once('partials/hwp-helpers.php');

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://socialmind.gr/?lang=en
 * @since      1.0.0
 *
 * @package    Healthywp
 * @subpackage Healthywp/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Healthywp
 * @subpackage Healthywp/admin
 * @author     Apostolos Kritikos <kritikos@socialmind.gr>
 */
class Healthywp_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Healthywp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Healthywp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/healthywp-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Healthywp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Healthywp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/healthywp-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function display_admin_page() {
		add_menu_page(
			'HealthyWP', //$page_title
			'HealthyWP', //$menu_title
			'manage_options', //$capability
			'healthywp-admin', //$menu_slug
			array($this, 'showPage'), //$function
			'', //$icon_url
			'81.0' //$position_sidebar_on_menu_from_top
		);
	}

	public function showPage() {
		include_once( 'partials/healthywp-admin-display.php' );
	}

	public function healthywp_plugins_columns( $columns ) {
	  $columns = array(
      	'cb' => $columns['cb'],
      	'healthywp' => __( 'HealthyWP' ),
      	'name' => __( 'Plugin' ),
      	'description' => __( 'Description' )
      );
	  return $columns;
	}

	public function healthywp_plugins_column( $column, $plugin_file ) {

	  $thePlugin = plugin_dir_path($plugin_file);
	  $textDomain = trim($thePlugin, '/');
	  
	  if ( 'healthywp' == $column ) {
	    echo rankPlugin($textDomain);
	  }
	}
}
