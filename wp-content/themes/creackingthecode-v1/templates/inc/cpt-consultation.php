<?php

// function: post_type BEGIN
function consultation_post_type(){
    
    $labels = array(
                    'name' => __( 'Consultation'), 
                    'singular_name' => __('Consultation'),
                    'rewrite' => array(
                            'slug' => __( 'consultation' ) 
                    ),
                    'add_new' => _x('Add Item', 'slider'), 
                    'edit_item' => __('Edit Consultation Item'),
                    'new_item' => __('New Consultation Item'), 
                    'view_item' => __('View Consultation'),
                    'search_items' => __('Search Consultation'), 
                    'not_found' =>  __('No Consultation Items Found'),
                    'not_found_in_trash' => __('No Consultation Items Found In Trash'),
                    'parent_item_colon' => ''
                );
    $args = array(
                    'labels' => $labels,
                    'public' => true,
                    'publicly_queryable' => true,                   
                    'menu_icon' => get_template_directory_uri().'/images/icons/consultation.png',
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
    
    register_post_type(__( 'consultation' ), $args);        
} 

// function: consultation_filter BEGIN
function consultation_filter()
{
    register_taxonomy(
            __( "Cateories" ),
            array(__( "consultation" )),
            array(
                    "hierarchical" => true,
                    'show_ui'           => true,
                    //'show_admin_column' => true,
                    'query_var'         => true,
                    "label" => __( "Cateories" ),
                    "singular_label" => __( "Cateory" ),
//                    "rewrite" => array(
//                            'slug' => 'booking',
//                            'hierarchical' => true
//                    )
            )
    );
}

add_action( 'init', 'consultation_filter', 0 );



// function: slider_messages BEGIN
function consultation_messages($messages)
{
    $messages[__( 'aboutSlider' )] = 
            array(
                    0 => '', 
                    1 => sprintf(('Consultation Updated. <a href="%s">View - Consultation</a>'), esc_url(get_permalink($post_ID))),
                    2 => __('Consultation - Field Updated.'),
                    3 => __('Consultation - Field Deleted.'),
                    4 => __('Consultation - Updated.'),
                    5 => isset($_GET['revision']) ? sprintf( __('Consultation Restored To Revision From %s'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
                    6 => sprintf(__('Consultation Published. <a href="%s">View Consultation</a>'), esc_url(get_permalink($post_ID))),
                    7 => __('Consultation Saved.'),
                    8 => sprintf(__('Consultation Submitted. <a target="_blank" href="%s">Preview Consultation</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
                    9 => sprintf(__('Consultation Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Consultation</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
                    10 => sprintf(__('Consultation Draft Updated. <a target="_blank" href="%s">Preview Consultation</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            );
    return $messages;

} // function: slider_messages END

add_action( 'init', 'consultation_post_type' );
add_filter( 'post_updated_messages', 'consultation_post_type' );


