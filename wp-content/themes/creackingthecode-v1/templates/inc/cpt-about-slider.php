<?php

// function: post_type BEGIN
function about_slider_post_type(){
    
    $labels = array(
                    'name' => __( 'About Slider'), 
                    'singular_name' => __('About Slider'),
                    'rewrite' => array(
                            'slug' => __( 'about-slider' ) 
                    ),
                    'add_new' => _x('Add Item', 'slider'), 
                    'edit_item' => __('Edit About Slider Item'),
                    'new_item' => __('New About Slider Item'), 
                    'view_item' => __('View About Slider'),
                    'search_items' => __('Search About Slider'), 
                    'not_found' =>  __('No About Slider Items Found'),
                    'not_found_in_trash' => __('No About Slider Items Found In Trash'),
                    'parent_item_colon' => ''
                );
    $args = array(
                    'labels' => $labels,
                    'public' => true,
                    'publicly_queryable' => true,                   
                    'menu_icon' => get_template_directory_uri().'/images/icons/about-slider.png',
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
    
    register_post_type(__( 'about-slider' ), $args);        
} 

// function: slider_messages BEGIN
function about_slider_messages($messages)
{
    $messages[__( 'aboutSlider' )] = 
            array(
                    0 => '', 
                    1 => sprintf(('About Slider Updated. <a href="%s">View - About Slider</a>'), esc_url(get_permalink($post_ID))),
                    2 => __('About Slider - Field Updated.'),
                    3 => __('About Slider - Field Deleted.'),
                    4 => __('About Slider - Updated.'),
                    5 => isset($_GET['revision']) ? sprintf( __('About Slider Restored To Revision From %s'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
                    6 => sprintf(__('About Slider Published. <a href="%s">View About Slider</a>'), esc_url(get_permalink($post_ID))),
                    7 => __('About Slider Saved.'),
                    8 => sprintf(__('About Slider Submitted. <a target="_blank" href="%s">Preview About Slider</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
                    9 => sprintf(__('About Slider Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview About Slider</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
                    10 => sprintf(__('About Slider Draft Updated. <a target="_blank" href="%s">Preview About Slider</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            );
    return $messages;

} // function: slider_messages END

add_action( 'init', 'about_slider_post_type' );
add_filter( 'post_updated_messages', 'about_slider_post_type' );


