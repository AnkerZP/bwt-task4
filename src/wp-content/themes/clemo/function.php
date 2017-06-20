<?php 
function wp_basic_scripts() 
{ 
wp_register_script( 'custom-script-1', get_template_directory_uri() . 'js/bootstrap.min.js', array( 'jquery' ) );
wp_enqueue_script( 'custom-script-1' ); 

} 

add_action( 'wp_enqueue_scripts', 'wp_basic_scripts' ); ?>