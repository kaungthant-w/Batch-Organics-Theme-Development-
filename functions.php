<?php

//add style and js file
function gt_setup() {
    wp_enqueue_style( "fontawesome", "//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" );
    wp_enqueue_style( "style", get_stylesheet_uri() );
    wp_enqueue_script("main", get_theme_file_uri("/script/main.js"), NULL, microtime(), true);
}

add_action( "wp_enqueue_scripts", "gt_setup");

// adding theme support 
function gt_init() {
    add_theme_support( "post-thumbnails");
    add_theme_support( "title-tag" );
    add_theme_support( "html5", 
        array("comment-list", "comment-form", "search-form")
    );
}

add_action( "after_setup_theme", 'gt_init');


// Projects Post Type 
function get_custom_post_type() {
    register_post_type( "project", 
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => "Project",
                'add_new_item' => "Add New Project",
                'edit_item' => "Edit Project"
            ),
            'menu-icon' => 'dashicons-admin-post',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments', 'category'
            ),
            'taxonomies' => array('category')
        )
    );

    register_post_type( "smoothies", 
        array(
            'rewrite' => array('slug' => 'smoothies'),
            'labels' => array(
                'name' => 'smoothies',
                'singular_name' => "smoothie",
                'add_new_item' => "Add New smoothie",
                'edit_item' => "Edit smoothie"
            ),
            'menu-icon' => 'dashicons-admin-post',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments', 'category'
            ),
            'taxonomies' => array('category')
        )
    );

    register_post_type( "breakfastSection", 
        array(
            'rewrite' => array('slug' => 'breakfastSections'),
            'labels' => array(
                'name' => 'breakfastSections',
                'singular_name' => "breakfastSection",
                'add_new_item' => "Add New breakfastSection",
                'edit_item' => "Edit breakfastSection"
            ),
            'menu-icon' => 'dashicons-admin-post',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments', 'category'
            ),
            'taxonomies' => array('category')
        )
    );

    register_post_type( "mylks", 
        array(
            'rewrite' => array('slug' => 'mylks'),
            'labels' => array(
                'name' => 'mylks',
                'singular_name' => "mylk",
                'add_new_item' => "Add New mylk",
                'edit_item' => "Edit mylk"
            ),
            'menu-icon' => 'dashicons-admin-post',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments', 'category'
            ),
            'taxonomies' => array('category')
        )
    );

    flush_rewrite_rules(); 
}

add_action( "init", "get_custom_post_type" );