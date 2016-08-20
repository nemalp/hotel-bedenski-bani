<?php

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');


// Include scripts and styles
function bb_enqueue_scripts() {
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/style.css', array(), '0.1', all);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css', array(), '0.1', all);
    wp_enqueue_script('jquery_', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.js', array(), '0.1', false);
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array(), '0.1', false);
    wp_enqueue_script('open_contacts', get_template_directory_uri() . '/js/openCloseContacts.js', array(), '0.1', true);
}

add_action('wp_enqueue_scripts', 'bb_enqueue_scripts');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Hotel Bedenski Bani' ),
    'footer_menu' => __('Footer Menu', 'Hotel Bedenski Bani F'),
));

?>
