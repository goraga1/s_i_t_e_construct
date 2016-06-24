<?php

// function: post_type BEGIN
function the_deals_post_type(){
    
    $labels = array(
                    'name' => __( 'The Deals'), 
                    'singular_name' => __('The Deals'),
                    'rewrite' => array(
                            'slug' => __( 'the_deals' ) 
                    ),
                    'add_new' => _x('Add Item', 'the_deals'), 
                    'edit_item' => __('Edit The Deals Item'),
                    'new_item' => __('New The Deals Item'), 
                    'view_item' => __('View The Deals'),
                    'search_items' => __('Search The Deals'), 
                    'not_found' =>  __('No The Deals Items Found'),
                    'not_found_in_trash' => __('No The Deals Items Found In Trash'),
                    'parent_item_colon' => ''
                );
    $args = array(
                    'labels' => $labels,
                    'public' => true,
                    'publicly_queryable' => true,
                    'show_ui' => true,
                    'query_var' => true,
                    'capability_type' => 'post',
                    'hierarchical' => false,
                    'menu_position' => null,
                    'rewrite' => array('slug' => 'the_deals'),
                    //'has_archive' => true,
                    'menu_icon' => get_template_directory_uri('template_directory').'/images/deal-icon.jpg',
                    'supports' => array(
                            //'comments',
                            'title',
                            'editor',
                            'thumbnail',
                            //'excerpt',
                            //'custom-fields',
                            //'page-attributes'
                    ),
                  //'taxonomies' => array('post_tag', 'the_deals_category'),
                  'suppress_filters' => true
             );
    
    register_post_type(__( 'the_deals' ), $args);        
} 

// function: the_deals_messages BEGIN
function the_deals_messages($messages)
{
    $messages[__( 'the_deals' )] = 
            array(
                    0 => '', 
                    1 => sprintf(('The Deals Updated. <a href="%s">View The Deals</a>'), esc_url(get_permalink($post_ID))),
                    2 => __('Custom Field Updated.'),
                    3 => __('Custom Field Deleted.'),
                    4 => __('The Deals Updated.'),
                    5 => isset($_GET['revision']) ? sprintf( __('The Deals Restored To Revision From %s'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
                    6 => sprintf(__('The Deals Published. <a href="%s">View The Deals</a>'), esc_url(get_permalink($post_ID))),
                    7 => __('The Deals Saved.'),
                    8 => sprintf(__('The Deals Submitted. <a target="_blank" href="%s">Preview The Deals</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
                    9 => sprintf(__('The Deals Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview The Deals</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
                    10 => sprintf(__('The Deals Draft Updated. <a target="_blank" href="%s">Preview The Deals</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            );
    return $messages;

} // function: the_deals_messages END


add_action( 'init', 'the_deals_post_type' );
add_filter( 'post_updated_messages', 'the_deals_messages' );

