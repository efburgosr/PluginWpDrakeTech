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
    		'menu_icon' => plugins_url( './test-draketech/admin/img/icon.png' ),
    		'menu_position' => 7,
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



    public function fields_price_metabox() {
      add_meta_box( 'fields-price-metabox', 'Precio de los productos', array( $this, 'fields_price' ), 'productos', 'normal', 'high' );
    }


    public function fields_price( $post ) {
 
        // Add an nonce field so we can check for it later.
        wp_nonce_field( 'fields_price_metabox', 'fields_price_metabox_nonce' );
 
        // Use get_post_meta to retrieve an existing value from the database.
        $field_price_product = get_post_meta( $post->ID, 'field_price_product', true );
 
        // Display the form, using the current value.
        ?>
        <label for="field_price_product">
            <?php _e( 'Precio del producto: ', 'textdomain' ); ?>
        </label>
        <input type="text" id="field_price_product" name="field_price_product" value="<?php echo esc_attr( $field_price_product ); ?>" size="25" />
        <?php
    }


    function fields_price_save_data($post_id) {
        // Comprobamos si se ha definido el nonce.
        if ( ! isset( $_POST['fields_price_metabox_nonce'] ) ) {
        return $post_id;
        }
        $nonce = $_POST['fields_price_metabox_nonce'];
        
        // Verificamos que el nonce es válido.
        if ( !wp_verify_nonce( $nonce, 'fields_price_metabox' ) ) {
        return $post_id;
        }
        
        // Si es un autoguardado nuestro formulario no se enviará, ya que aún no queremos hacer nada.
        if ( defined( 'DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
        return $post_id;
        }
        
        // Comprobamos los permisos de usuario.
        if ( $_POST['post_type'] == 'page' ) {
        if ( !current_user_can( 'edit_page', $post_id ) )
          return $post_id;
        } else {
        if ( !current_user_can( 'edit_post', $post_id ) )
          return $post_id;
        }
        
        // Vale, ya es seguro que guardemos los datos.
        
        // Si existen entradas antiguas las recuperamos
        $old_field_price_product = get_post_meta( $post_id, 'field_price_product', true );
        
        // Saneamos lo introducido por el usuario.
        $field_price_product = sanitize_text_field( $_POST['field_price_product'] );
        
        // Actualizamos el campo meta en la base de datos.
        update_post_meta( $post_id, 'field_price_product', $field_price_product, $old_field_price_product );
      
    }
    
    
    public function plugin_menu_administrador() {
	    add_menu_page(
            __( 'Test draketech', 'textdomain' ),
            'Test draketech',
            'manage_options',
            plugin_dir_path( __FILE__ ) .'/partials/test-draketech-admin-display.php',
            '',
            plugins_url( './test-draketech/admin/img/icon.png' ),
            6
        );
        add_submenu_page(plugin_dir_path( __FILE__ ) .'/partials/test-draketech-admin-display.php','Productos','Productos','manage_options', '/edit.php?post_type=productos');
    }


}
