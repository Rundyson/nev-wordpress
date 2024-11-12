<?php 
function nev_custom_post(){

    $service_label = array(
        'name'              => __('Service', 'textdomain'),
        'singular'          => __('Service', 'textdomain'),
        'add_new'           => __('Add Service', 'textdomain'),
        'add_new_item'      => __('Add New Service ', 'textdomain'),
        'edit_item'         => __('Edit Service', 'textdomain'),
        'all_items'         => __('Service', 'textdomain')
    );

    $service_args = array(
        'labels'            => $service_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'supports'          => array('title', 'editor','thumbnail','excerpt')
    );

    register_post_type('service', $service_args);
    
    //TOURS
    $tours_label = array(
        'name'              => __('Tours', 'textdomain'),
        'singular'          => __('Tours', 'textdomain'),
        'add_new'           => __('Add Tours', 'textdomain'),
        'add_new_item'      => __('Add New Tours', 'textdomain'),
        'edit_item'         => __('Edit Tours', 'textdomain'),
        'all_items'         => __('Tours', 'textdomain')
    );

    $tours_args = array(
        'labels'            => $tours_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'supports'          => array('title', 'editor','thumbnail','excerpt')
    );

    register_post_type('tours', $tours_args);
}

add_action('init','nev_custom_post');