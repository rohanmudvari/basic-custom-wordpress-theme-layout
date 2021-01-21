<?php
//we load css part first
function load_stylesheets(){

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('style');//it's enqueuing upper term stylesheet

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


//we then load jquery
function include_jquery(){
	wp_deregister_script('jquery');//removes all existing jquery
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', '', 1, true);
}
add_action('wp_enqueue_scripts', 'include_jquery');


//we finally load javascript
function loadjs(){
	wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true);
	wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');
?>