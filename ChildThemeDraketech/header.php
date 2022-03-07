<?php
/**
 * The header for our theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package     Sinatra
 * @author      Sinatra Team <hello@sinatrawp.com>
 * @since       1.0.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?><?php sinatra_schema_markup( 'html' ); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'sinatra_before_page_wrapper' ); ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sinatra' ); ?></a>

	<?php do_action( 'sinatra_before_masthead' ); ?>

	<header id="masthead" class="site-header" role="banner"<?php sinatra_masthead_atts(); ?><?php sinatra_schema_markup( 'header' ); ?>>
		<?php do_action( 'sinatra_header' ); ?>
		<?php do_action( 'sinatra_page_header' ); ?>
	</header><!-- #masthead .site-header -->

	<?php do_action( 'sinatra_after_masthead' ); ?>

	<?php do_action( 'sinatra_before_main' ); ?>
	<div id="main" class="site-main">
        <div id="myCarousel" class="carousel slide mb-0" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://draketech.frankdevelopers.co/wp-content/uploads/2022/03/home_slide1.jpg" width="100%" height="100%" border="0" alt="">
        
                <div class="container position-absolute cusContainer">
                  <div class="carousel-caption text-start">
                    <h1 class="tituloBanner">TRENDING LOOKS</h1>
                    <p class="fw-light text-dark">All new fashion brands items up to 70% off.</p>
                    <p><a class="btn btn-lg btn-info text-light" href="#">SHOP NOW</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://draketech.frankdevelopers.co/wp-content/uploads/2022/03/home_slide2.jpg" width="100%" height="100%" border="0" alt="">
        
                <div class="container position-absolute cusContainer">
                  <div class="carousel-caption text-start">
                    <h1 class="tituloBanner">TRENDING LOOKS</h1>
                    <p class="fw-light text-dark">All new fashion brands items up to 70% off.</p>
                    <p><a class="btn btn-lg btn-info text-light" href="#">SHOP NOW</a></p>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
		<?php do_action( 'sinatra_main_start' ); ?>
