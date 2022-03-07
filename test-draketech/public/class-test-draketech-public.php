<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://frankdevelopers.co
 * @since      1.0.0
 *
 * @package    Test_Draketech
 * @subpackage Test_Draketech/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Test_Draketech
 * @subpackage Test_Draketech/public
 * @author     Eduar B <efburgosr@unal.edu.co>
 */
class Test_Draketech_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/test-draketech-public.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '-bootstrap_css', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/test-draketech-public.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name. '-bootstrap_js', plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), $this->version, false );

	}

    public function add_shortcode_posts_actuales_function(){
        function posts_actuales_function($atts){
            
            $short_atts = shortcode_atts( array(
                                     'showposts' => 8,
                                     'taxonomy' => 'cat_producto',
                                     'ids' => 0,
                                     'operator' => 'IN'
                                ), $atts );
                                
            $operator = $short_atts['operator'];
            $terms_val = $short_atts['ids'];
        
            if ($terms_val!=0){
                $terms_val = explode(',', $short_atts['ids']);
            }else{
                $operator = "NOT IN";
            }
            
            $args = array(
                'orderby' => 'date',
                'order' => 'DESC',
                'showposts' => $short_atts['showposts'],
                'post_type' => 'productos',
                'tax_query' => array(
                    array(
                        'taxonomy' => $short_atts['taxonomy'],
                        'field' => 'term_id',
                        'terms' => $terms_val,
                        'operator' => $operator,
                    )
                ) ,
            );
        
            $sec_query = new WP_Query($args);
        
        
            if ($sec_query->have_posts()):
                ob_start();
        ?>
        
                <div id="carouselExampleDark" class="carousel carousel-dark slide mb-5 pb-3" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php
                            $count_init = 0;
                            $count_buttom = 0;
                            while ($sec_query->have_posts()):
                            $sec_query->the_post();
                            $post_id = get_the_ID();
                        ?>
                        <?php if ($count_init == 0 || ($count_init % 4) == 0): ?>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $count_buttom; ?>" <?php if($count_init==0){echo 'class="active" aria-current="true"';} ?> aria-label="Slide 1"></button>
                        
                        <?php
                            $count_buttom++;
                            endif; ?>
                        <?php
                            $count_init++;
                            endwhile;
                        ?>
                    </div>
                    <div class="carousel-inner">
                    
                <?php
                    $count = 0;
                    while ($sec_query->have_posts()):
                        $sec_query->the_post();
                        $post_id = get_the_ID();
                ?>
                <?php if ($count !== 0 && ($count % 4) == 0): ?>
                    		</div><!-- end row -->
                        </div>
                <?php
                    endif; ?>
                <?php if ($count === 0 || ($count % 4) == 0): ?>
                        <div class="carousel-item <?php if ($count === 0)
                        {
                            echo "active";
                        } ?>" data-bs-interval="3000">
                    		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-4">
        	    <?php
                    endif; ?>
                    			<div class="col">
                    			  <div class="card shadow-sm">
                    			        <?php
                                            if (has_post_thumbnail($post_id))
                                            {
                                                echo '<a href="' . get_permalink($post_id) . '" title="" class="position-relative">';
                                                echo '<img src="' . get_the_post_thumbnail_url($post_id, 'medium') . '" class="card-img-top" alt="" />';
                                                echo '<div class="quickview position-absolute" title="Quick View">Ver Opciones</div>';
                                                echo '</a>';
                                            }
                                        ?>
                    				<div class="card-body">
                    				    <?php
                                                $product_terms = wp_get_object_terms($post_id, 'cat_producto');
                                    
                                                if (!empty($product_terms))
                                                {
                                                    if (!is_wp_error($product_terms))
                                                    {
                                                        echo '<h6 class="card-title my-0 fw-light text-secondary">';
                                                        foreach ($product_terms as $term)
                                                        {
                                                            echo '<a href="" class="text-secondary">' . esc_html($term->name) . '</a> ';
                                                        }
                                                        echo '</h6>';
                                                    }
                                                }
                                        ?>
                    				    
                				        <h5 class="card-title my-0 fw-normal"><?php the_title(); ?></h5>
                    				  <p class="card-text fw-bold my-0 fs-5">$ <?php echo get_post_meta($post_id, 'field_price_product', true); ?></p>
                    				  <div class="d-flex justify-content-between align-items-center d-none">
                    					<div class="btn-group d-none">
                    					  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    					  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    					</div>
                    					<small class="text-muted">9 mins</small>
                    				  </div>
                    				</div>
                    			  </div>
                    			</div><!-- end col -->
        		
                <?php
                    $count++;
                    endwhile;
                ?>
                <?php /* Se cierra el div del row si dentro del while no fue cerrado (si no es múltiplo de 3 )*/ ?>
                    		</div><!-- end row -->
                        </div>
                
                    </div><!-- end .carousel-inner -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div><!-- #carouselExampleDark -->
            
            <?php
                $output2 = ob_get_clean();
        
            else:
                $output2 = 'Sorry, no posts matched your criteria.';
            endif;
        
            wp_reset_query();
        
            return $output2;
        }
        
        
    }
    
    function shortcodes_init(){
        add_shortcode('list_product', 'posts_actuales_function');
    }


}
