<?php

function test_slider(){

    register_post_type('slider', array(
        'labels' => array(
            'name' => __('Slider', 'test'),
            'singular_name' => __('Slider', 'test'),
            'add_new' => __('Add new slide', 'test'),
            'add_new_item' => __('New Slide', 'test'),
            'edit_item' => __('Edit', 'test'),
            'new_item' => __('New slide', 'test'),
            'view_item' => __('View', 'test'),
            'menu_item' => __('Slider', 'test'),
            'all_items' => __('All slides', 'test')
        ),

        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-format-gallery',
        'show_in_rest' => true,
    ));

}
