<?php

function theblog_custom_post(){
    //Blogs
    $blogPost_label = array (
        'name'              => __('Blog Post', 'textdomain'),
        'singular_name'     => __('Blog Post', 'textdomain'),
        'add_new'           => __('Add Blog Post', 'textdomain'),
        'add_new_item'      => __('Add New Blog Post', 'textdomain'),
        'edit_item'         => __('Edit Blog Post', 'textdomain'),
        'all_items'         => __('Blog Post', 'textdomain'),
    );
    $blogPost_args = array(
        'labels'             => $blogPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag', 'category'),
        'supports'          => array('title' , 'editor' , 'thumbnail' , 'excerpt')
    );

    register_post_type('blogPost', $blogPost_args);

    // //Latest Story
    // $latestStory_label = array (
    //     'name'              => __('Latest Story Post', 'textdomain'),
    //     'singular_name'     => __('Latest Story Post', 'textdomain'),
    //     'add_new'           => __('Add Latest Story Post', 'textdomain'),
    //     'add_new_item'      => __('Add New Latest Story Post', 'textdomain'),
    //     'edit_item'         => __('Edit Latest Story Post', 'textdomain'),
    //     'all_items'         => __('Latest Story Post', 'textdomain'),
    // );
    // $latestStory_args = array(
    //     'labels'             => $latestStory_label,
    //     'public'            => true,
    //     'capability_type'   => 'post',
    //     'show_ui'           => true,
    //     'taxonomies'        => array('post_tag', 'category'),
    //     'supports'          => array('title' , 'editor' , 'thumbnail' , 'excerpt')
    // );

    // register_post_type('latestStory', $latestStory_args);
    
    // //Featured News
    // $featuredPost_label = array (
    //     'name'              => __('Featured Post Post', 'textdomain'),
    //     'singular_name'     => __('Featured Post', 'textdomain'),
    //     'add_new'           => __('Add Featured Post', 'textdomain'),
    //     'add_new_item'      => __('Add New Featured Post', 'textdomain'),
    //     'edit_item'         => __('Edit Featured Post', 'textdomain'),
    //     'all_items'         => __('Featured Post', 'textdomain'),
    // );
    // $featuredPost_args = array(
    //     'labels'             => $featuredPost_label,
    //     'public'            => true,
    //     'capability_type'   => 'post',
    //     'show_ui'           => true,
    //     'taxonomies'        => array('post_tag', 'category'),
    //     'supports'          => array('title' , 'editor' , 'thumbnail' , 'excerpt')
    // );

    // register_post_type('featuredPost', $featuredPost_args);
}
add_action('init', 'theblog_custom_post');


