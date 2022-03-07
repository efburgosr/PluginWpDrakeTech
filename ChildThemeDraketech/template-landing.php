<?php
/**
 * Template Name: Custom Landing
 *
 * 100% wide page template without vertical spacing.
 *
 * @package     Childtheme
 * @author      Eduar B <efburgosr@unal.edu.co>
 * @since       1.0.0
 */

get_header(); ?>

<div class="si-container-">

	<div id="primary" class="content-area">

		<?php do_action( 'sinatra_before_content' ); ?>

		<main id="content" class="site-content" role="main"<?php sinatra_schema_markup( 'main' ); ?>>
            <div class="container">
                <?php
                    if ( have_posts() ) :
                    	while ( have_posts() ) :
                    		the_post();
                    
                    		the_content();
                    	endwhile;
                    endif;
                  ?>
            </div>
            <div class="position-relative overflow-hidden p-3 p-md-3 my-3 text-center bg-light bgImage">
                <div class="col-md-5 p-lg-5 mx-auto my-3">
                  <h1 class="fw-bolder text-uppercase mt-2 mb-2">DEAL PROMOS</h1>
                  <p class=" fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
                  <a class="btn btn-outline-info text-dark" href="#">Coming soon</a>
                </div>
            </div>		  
        		  
            <hr class="featurette-divider">
        
            <div class="container marketing">
            
                <!-- Three columns of text below the carousel -->
                <div class="row">
                  <div class="col-lg-4">
                    <img class="alignnone size-full wp-image-34" src="https://draketech.frankdevelopers.co/wp-content/uploads/2022/03/icon-1.png" alt="" width="86" height="86" />
            
                    <h3 class="mb-0">CUSTOMER SUPPORT</h3>
                    <h5 class="m-0">Need Assistence?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                   
                  </div><!-- /.col-lg-4 -->
                  <div class="col-lg-4">
                    <img class="alignnone size-medium wp-image-35" src="https://draketech.frankdevelopers.co/wp-content/uploads/2022/03/icon-2.png" alt="" width="88" height="85" />
                   <h3 class="mb-0">SECURED PAYMENT</h3>
                    <h5 class="m-0">Safe & Fast</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                    
                  </div><!-- /.col-lg-4 -->
                  <div class="col-lg-4">
                    <img class="alignnone size-medium wp-image-36" src="https://draketech.frankdevelopers.co/wp-content/uploads/2022/03/icon-3.png" alt="" width="86" height="87" />
                    <h3 class="mb-0">RETURNS</h3>
                    <h5 class="m-0">Easy & Free</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                   
                  </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div>		  
		  
		  
		  
		</main><!-- #content .site-content -->

		<?php do_action( 'sinatra_after_content' ); ?>

	</div><!-- #primary .content-area -->

</div><!-- END .si-container -->

<?php
get_footer();