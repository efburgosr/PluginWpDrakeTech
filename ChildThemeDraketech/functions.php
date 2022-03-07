<?php
/*
 * This is the child theme for Sinatra theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
*/
add_action('wp_enqueue_scripts', 'draketech_enqueue_styles');
function draketech_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array(
        'parent-style'
    ));
}
/*
 * Your code goes below
*/

function bootstrap_css()
{
    wp_enqueue_style('bootstrap_css', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css', array() , '5.1.0');
}
add_action('wp_enqueue_scripts', 'bootstrap_css');

function bootstrap_js()
{
    wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(
        'jquery'
    ) , '5.1.0', true);
}
add_action('wp_enqueue_scripts', 'bootstrap_js');

