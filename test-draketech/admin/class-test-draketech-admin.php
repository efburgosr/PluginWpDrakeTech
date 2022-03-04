<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://frankdevelopers.co
 * @since      1.0.0
 *
 * @package    Test_Draketech
 * @subpackage Test_Draketech/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Test_Draketech
 * @subpackage Test_Draketech/admin
 * @author     Eduar B <efburgosr@unal.edu.co>
 */
class Test_Draketech_Admin {

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
		 * defined in Test_Draketech_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Test_Draketech_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/test-draketech-admin.css', array(), $this->version, 'all' );

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
		 * defined in Test_Draketech_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Test_Draketech_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/test-draketech-admin.js', array( 'jquery' ), $this->version, false );

	}
	
	/**
	 * Register Post Type: Productos.
	 *
	 * @since    1.0.0
	 */
	
    function cptui_register_my_cpts() {

    	/**
    	 * Post Type: Productos.
    	 */
    
    	$labels = [
    		"name" => __( "Productos", "twentytwentytwo" ),
    		"singular_name" => __( "Producto", "twentytwentytwo" ),
    	];
    
    	$args = [
    		"label" => __( "Productos", "twentytwentytwo" ),
    		"labels" => $labels,
    		"description" => "",
    		"public" => true,
    		"publicly_queryable" => true,
    		"show_ui" => true,
    		"show_in_rest" => true,
    		"rest_base" => "",
    		"rest_controller_class" => "WP_REST_Posts_Controller",
    		"has_archive" => false,
    		"show_in_menu" => true,
    		"show_in_nav_menus" => true,
    		"delete_with_user" => false,
    		"exclude_from_search" => false,
    		"capability_type" => "post",
    		"map_meta_cap" => true,
    		"hierarchical" => true,
    		"rewrite" => [ "slug" => "productos", "with_front" => true ],
    		"query_var" => true,
    		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "comments", "author", "page-attributes", "post-formats" ],
    		"taxonomies" => [ "cat_producto" ],
    		"show_in_graphql" => false,
    	];
    
    	register_post_type( "productos", $args );
    }



        
    /**
    * Register my_cpts_productos
    *
    * @since    1.0.0
    */
    function cptui_register_my_cpts_productos() {
        
    	$labels = [
    		"name" => __( "Productos", "twentytwentytwo" ),
    		"singular_name" => __( "Producto", "twentytwentytwo" ),
    	];
    
    	$args = [
    		"label" => __( "Productos", "twentytwentytwo" ),
    		"labels" => $labels,
    		"description" => "",
    		"public" => true,
    		"publicly_queryable" => true,
    		"show_ui" => true,
    		"show_in_rest" => true,
    		"rest_base" => "",
    		"rest_controller_class" => "WP_REST_Posts_Controller",
    		"has_archive" => false,
    		"show_in_menu" => true,
    		"show_in_nav_menus" => true,
    		"delete_with_user" => false,
    		"exclude_from_search" => false,
    		"capability_type" => "post",
    		"map_meta_cap" => true,
    		"hierarchical" => true,
    		"rewrite" => [ "slug" => "productos", "with_front" => true ],
    		"query_var" => true,
    		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "comments", "author", "page-attributes", "post-formats" ],
    		"taxonomies" => [ "cat_producto" ],
    		"show_in_graphql" => false,
    	];
    
    	register_post_type( "productos", $args );
    }


    /**
    * Taxonomy: Categorías.
    *
    * @since    1.0.0
    */

    function cptui_register_my_taxes() {
    
    	$labels = [
    		"name" => __( "Categorías", "twentytwentytwo" ),
    		"singular_name" => __( "Categoría", "twentytwentytwo" ),
    	];
    
    	
    	$args = [
    		"label" => __( "Categorías", "twentytwentytwo" ),
    		"labels" => $labels,
    		"public" => true,
    		"publicly_queryable" => true,
    		"hierarchical" => true,
    		"show_ui" => true,
    		"show_in_menu" => true,
    		"show_in_nav_menus" => true,
    		"query_var" => true,
    		"rewrite" => [ 'slug' => 'cat_producto', 'with_front' => true, ],
    		"show_admin_column" => false,
    		"show_in_rest" => true,
    		"show_tagcloud" => false,
    		"rest_base" => "cat_producto",
    		"rest_controller_class" => "WP_REST_Terms_Controller",
    		"show_in_quick_edit" => false,
    		"show_in_graphql" => false,
    	];
    	register_taxonomy( "cat_producto", [ "productos" ], $args );
    }

    /**
    * Taxonomy: Categorías.
    * cptui_register_my_taxes_cat_producto
    * @since    1.0.0
    */

    function cptui_register_my_taxes_cat_producto() {
    
    	$labels = [
    		"name" => __( "Categorías", "twentytwentytwo" ),
    		"singular_name" => __( "Categoría", "twentytwentytwo" ),
    	];
    
    	
    	$args = [
    		"label" => __( "Categorías", "twentytwentytwo" ),
    		"labels" => $labels,
    		"public" => true,
    		"publicly_queryable" => true,
    		"hierarchical" => true,
    		"show_ui" => true,
    		"show_in_menu" => true,
    		"show_in_nav_menus" => true,
    		"query_var" => true,
    		"rewrite" => [ 'slug' => 'cat_producto', 'with_front' => true, ],
    		"show_admin_column" => false,
    		"show_in_rest" => true,
    		"show_tagcloud" => false,
    		"rest_base" => "cat_producto",
    		"rest_controller_class" => "WP_REST_Terms_Controller",
    		"show_in_quick_edit" => false,
    		"show_in_graphql" => false,
    	];
    	register_taxonomy( "cat_producto", [ "productos" ], $args );
    }



	

}
