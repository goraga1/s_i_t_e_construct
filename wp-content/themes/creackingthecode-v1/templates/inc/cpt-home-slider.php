<?php

// function: post_type BEGIN
function slider_post_type(){
    
    $labels = array(
                    'name' => __( 'Front Slider'), 
                    'singular_name' => __('Front Slider'),
                    'rewrite' => array(
                            'slug' => __( 'slider' ) 
                    ),
                    'add_new' => _x('Add Item', 'slider'), 
                    'edit_item' => __('Edit Front Slider Item'),
                    'new_item' => __('New Front Slider Item'), 
                    'view_item' => __('View Front Slider'),
                    'search_items' => __('Search Front Slider'), 
                    'not_found' =>  __('No Front Slider Items Found'),
                    'not_found_in_trash' => __('No Front Slider Items Found In Trash'),
                    'parent_item_colon' => ''
                );
    $args = array(
                    'labels' => $labels,
                    'public' => true,
                    'publicly_queryable' => true,                   
                    'menu_icon' => get_template_directory_uri().'/images/icons/home-slider.png',
                    'show_ui' => true,
                    'query_var' => true,
                    'rewrite' => true,
                    'capability_type' => 'post',
                    'hierarchical' => false,
                    'menu_position' => null,
                    'supports' => array(
                            'title',                            
                            'thumbnail',
                            'editor'
                    )
             );
    
    register_post_type(__( 'front-slider' ), $args);        
} 

// function: slider_messages BEGIN
function front_slider_messages($messages)
{
    $messages[__( 'frontSlider' )] = 
            array(
                    0 => '', 
                    1 => sprintf(('Front Slider Updated. <a href="%s">View Front Slider</a>'), esc_url(get_permalink($post_ID))),
                    2 => __('Front Slider Field Updated.'),
                    3 => __('Front Slider Field Deleted.'),
                    4 => __('Front Slider Updated.'),
                    5 => isset($_GET['revision']) ? sprintf( __('Front Slider Restored To Revision From %s'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
                    6 => sprintf(__('Front Slider Published. <a href="%s">View Front Slider</a>'), esc_url(get_permalink($post_ID))),
                    7 => __('Front Slider Saved.'),
                    8 => sprintf(__('Front Slider Submitted. <a target="_blank" href="%s">Preview Front Slider</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
                    9 => sprintf(__('Front Slider Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Front Slider</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
                    10 => sprintf(__('Front Slider Draft Updated. <a target="_blank" href="%s">Preview Front Slider</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            );
    return $messages;

} // function: slider_messages END

add_action( 'init', 'slider_post_type' );
add_filter( 'post_updated_messages', 'front_slider_messages' );

